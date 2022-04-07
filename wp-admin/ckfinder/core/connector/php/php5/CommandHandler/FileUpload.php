<?php
/**
 * CKFinder
 * ========
 * http://cksource.com/ckfinder
 * Copyright (C) 2007-2013, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
 */
if (!defined('IN_CKFINDER')) exit;

/**
 * @package CKFinder
 * @subpackage CommandHandlers
 * @copyright CKSource - Frederico Knabben
 */

/**
 * Handle FileUpload command
 *
 * @package CKFinder
 * @subpackage CommandHandlers
 * @copyright CKSource - Frederico Knabben
 */


class CKFinder_Connector_CommandHandler_FileUpload extends CKFinder_Connector_CommandHandler_CommandHandlerBase
{
    /**
     * Command name
     *
     * @access protected
     * @var string
     */
    protected $command = "FileUpload";


    /**
     * send response (save uploaded file, resize if required)
     * @access public
     *
     */
    public function sendResponse()
    {
        $iErrorNumber = CKFINDER_CONNECTOR_ERROR_NONE;

        $_config =& CKFinder_Connector_Core_Factory::getInstance("Core_Config");
        $oRegistry =& CKFinder_Connector_Core_Factory::getInstance("Core_Registry");
        $oRegistry->set("FileUpload_fileName", "unknown file");

        $uploadedFile = array_shift($_FILES);

        if (!isset($uploadedFile['name'])) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_INVALID);
        }

        $sUnsafeFileName = CKFinder_Connector_Utils_FileSystem::convertToAscii(CKFinder_Connector_Utils_Misc::mbBasename($uploadedFile['name']));
        $sFileName = CKFinder_Connector_Utils_FileSystem::secureFileName($sUnsafeFileName);

        if ($sFileName != $sUnsafeFileName) {
          $iErrorNumber = CKFINDER_CONNECTOR_ERROR_UPLOADED_INVALID_NAME_RENAMED;
        }
        $oRegistry->set("FileUpload_fileName", $sFileName);

        $this->checkConnector();
        $this->checkRequest();

        if (!$this->_currentFolder->checkAcl(CKFINDER_CONNECTOR_ACL_FILE_UPLOAD)) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UNAUTHORIZED);
        }

        $_resourceTypeConfig = $this->_currentFolder->getResourceTypeConfig();
        if (!CKFinder_Connector_Utils_FileSystem::checkFileName($sFileName) || $_resourceTypeConfig->checkIsHiddenFile($sFileName)) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_INVALID_NAME);
        }

        $resourceTypeInfo = $this->_currentFolder->getResourceTypeConfig();
        if (!$resourceTypeInfo->checkExtension($sFileName)) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_INVALID_EXTENSION);
        }

        $oRegistry->set("FileUpload_fileName", $sFileName);
        $oRegistry->set("FileUpload_url", $this->_currentFolder->getUrl());

        $maxSize = $resourceTypeInfo->getMaxSize();
        if (!$_config->checkSizeAfterScaling() && $maxSize && $uploadedFile['size']>$maxSize) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_TOO_BIG);
        }

        $htmlExtensions = $_config->getHtmlExtensions();
        $sExtension = CKFinder_Connector_Utils_FileSystem::getExtension($sFileName);

        if ($htmlExtensions
        && !CKFinder_Connector_Utils_Misc::inArrayCaseInsensitive($sExtension, $htmlExtensions)
        && ($detectHtml = CKFinder_Connector_Utils_FileSystem::detectHtml($uploadedFile['tmp_name'])) === true ) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_WRONG_HTML_FILE);
        }

        $secureImageUploads = $_config->getSecureImageUploads();
        if ($secureImageUploads
        && ($isImageValid = CKFinder_Connector_Utils_FileSystem::isImageValid($uploadedFile['tmp_name'], $sExtension)) === false ) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_CORRUPT);
        }

        switch ($uploadedFile['error']) {
            case UPLOAD_ERR_OK:
                break;

            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_TOO_BIG);
                break;

            case UPLOAD_ERR_PARTIAL:
            case UPLOAD_ERR_NO_FILE:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_CORRUPT);
                break;

            case UPLOAD_ERR_NO_TMP_DIR:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_NO_TMP_DIR);
                break;

            case UPLOAD_ERR_CANT_WRITE:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_ACCESS_DENIED);
                break;

            case UPLOAD_ERR_EXTENSION:
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_ACCESS_DENIED);
                break;
        }

        $sServerDir = $this->_currentFolder->getServerPath();
		global $config;
        $_imagesConfig = $_config->getImagesConfig();

        while (true)
        {
            $sFilePath = CKFinder_Connector_Utils_FileSystem::combinePaths($sServerDir, $sFileName);

            if (file_exists($sFilePath)) {
                $sFileName = CKFinder_Connector_Utils_FileSystem::autoRename($sServerDir, $sFileName);
                $oRegistry->set("FileUpload_fileName", $sFileName);

                $iErrorNumber = CKFINDER_CONNECTOR_ERROR_UPLOADED_FILE_RENAMED;
            }
            else {
                if (false === move_uploaded_file($uploadedFile['tmp_name'], $sFilePath)) {
                    $iErrorNumber = CKFINDER_CONNECTOR_ERROR_ACCESS_DENIED;
                }
                else {
                    if (isset($detectHtml) && $detectHtml === -1 && CKFinder_Connector_Utils_FileSystem::detectHtml($sFilePath) === true) {
                        @unlink($sFilePath);
                        $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_WRONG_HTML_FILE);
                    }
                    else if (isset($isImageValid) && $isImageValid === -1 && CKFinder_Connector_Utils_FileSystem::isImageValid($sFilePath, $sExtension) === false) {
                        @unlink($sFilePath);
                        $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_CORRUPT);
                    }
                    else{
                        if(isset($config['imgCond']['min_width'])) {
                            $sourceImageAttr = @getimagesize($sFilePath);
                            if ($sourceImageAttr === false) {
                                return false;
                            }
                            $sourceImageWidth = isset($sourceImageAttr[0]) ? $sourceImageAttr[0] : 0;
                            if ($sourceImageWidth < $config['imgCond']['min_width']) {
                                @unlink($sFilePath);
                                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_MIN_WIDTH);
                            }
                        }
                    }
                }
                if (is_file($sFilePath) && ($perms = $_config->getChmodFiles())) {

                	if(isset($config['imgCond']['convertTo'])){

                        if($sExtension!=$config['imgCond']['convertTo']){
                            $sNewFilePath = $this->convertTo($sFilePath,$config['imgCond']['convertTo'],true,$_imagesConfig->getQuality(),$sServerDir);
                            unlink($sFilePath);
                            $sFilePath = $sNewFilePath;
                        }
                    }

                    $sBackupFilePath = CKFinder_Connector_Utils_FileSystem::combinePaths($sServerDir, '../original/'.$sFileName);
                    copy($sFilePath , $sBackupFilePath);
                    $oldumask = umask(0);
                    chmod($sFilePath, $perms);
                    umask($oldumask);
                }
                break;
            }
        }

        if (!$_config->checkSizeAfterScaling()) {
            $this->_errorHandler->throwError($iErrorNumber, true, false);
        }

        //resize image if required
        include_once CKFINDER_CONNECTOR_LIB_DIR . "/CommandHandler/Thumbnail.php";

        if ($_imagesConfig->getMaxWidth()>0 && $_imagesConfig->getMaxHeight()>0 && $_imagesConfig->getQuality()>0) {
            CKFinder_Connector_CommandHandler_Thumbnail::createThumb($sFilePath, $sFilePath, $_imagesConfig->getMaxWidth(), $_imagesConfig->getMaxHeight(), $_imagesConfig->getQuality(), true) ;
        }




        if ($_config->checkSizeAfterScaling()) {
            //check file size after scaling, attempt to delete if too big
            clearstatcache();
            if ($maxSize && filesize($sFilePath)>$maxSize) {
                @unlink($sFilePath);
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_UPLOADED_TOO_BIG);
            }
            else {
                $this->_errorHandler->throwError($iErrorNumber, true, false);
            }
        }


        CKFinder_Connector_Core_Hooks::run('AfterFileUpload', array(&$this->_currentFolder, &$uploadedFile, &$sFilePath));
    }



	public function convertTo($sourceFile,$toExtension='jpg',$bmpSupported = false, $quality, $sServerDir){

        $sourceImageAttr = @getimagesize($sourceFile);
        if ($sourceImageAttr === false) {
            return false;
        }
        $sourceImageWidth = isset($sourceImageAttr[0]) ? $sourceImageAttr[0] : 0;
        $sourceImageHeight = isset($sourceImageAttr[1]) ? $sourceImageAttr[1] : 0;
        $sourceImageMime = isset($sourceImageAttr["mime"]) ? $sourceImageAttr["mime"] : "";
        $sourceImageBits = isset($sourceImageAttr["bits"]) ? $sourceImageAttr["bits"] : 8;
        $sourceImageChannels = isset($sourceImageAttr["channels"]) ? $sourceImageAttr["channels"] : 3;

        if (!$sourceImageWidth || !$sourceImageHeight || !$sourceImageMime) {
            return false;
        }



        CKFinder_Connector_Utils_Misc::setMemoryForImage($sourceImageWidth, $sourceImageHeight, $sourceImageBits, $sourceImageChannels);

        switch ($sourceImageAttr['mime'])
        {
            case 'image/gif':
            {
                if (@imagetypes() & IMG_GIF) {
                    $oImage = @imagecreatefromgif($sourceFile);
                } else {
                    $ermsg = 'GIF images are not supported';
                }
            }
                break;
            case 'image/jpeg':
            {
                if (@imagetypes() & IMG_JPG) {
                    $oImage = @imagecreatefromjpeg($sourceFile) ;
                } else {
                    $ermsg = 'JPEG images are not supported';
                }
            }
                break;
            case 'image/png':
            {
                if (@imagetypes() & IMG_PNG) {
                    $oImage = @imagecreatefrompng($sourceFile) ;
                } else {
                    $ermsg = 'PNG images are not supported';
                }
            }
                break;
            case 'image/wbmp':
            {
                if (@imagetypes() & IMG_WBMP) {
                    $oImage = @imagecreatefromwbmp($sourceFile);
                } else {
                    $ermsg = 'WBMP images are not supported';
                }
            }
                break;
//            case 'image/bmp':
//            {
//                /*
//                * This is sad that PHP doesn't support bitmaps.
//                * Anyway, we will use our custom function at least to display thumbnails.
//                * We'll not resize images this way (if $sourceFile === $targetFile),
//                * because user defined imagecreatefrombmp and imagecreatebmp are horribly slow
//                */
//                if ($bmpSupported && (@imagetypes() & IMG_JPG) && $sourceFile != $targetFile) {
//                    $oImage = CKFinder_Connector_Utils_Misc::imageCreateFromBmp($sourceFile);
//                } else {
//                    $ermsg = 'BMP/JPG images are not supported';
//                }
//            }
//                break;
            default:
                $ermsg = $sourceImageAttr['mime'].' images are not supported';
                break;
        }

        if (isset($ermsg) || false === $oImage) {
            return false;
        }



        $sFileNameWithExtension = basename($sourceFile);
        $onlyFileName = explode('.', $sFileNameWithExtension)[0];
        $newFileName = $onlyFileName.'.'.$toExtension;

        $targetFile = CKFinder_Connector_Utils_FileSystem::combinePaths($sServerDir, $newFileName);

        switch ($toExtension)
        {
            case 'gif':
                imagegif($oImage, $targetFile);
                break;
            case 'jpg':
            case 'bmp':
                imagejpeg($oImage, $targetFile, $quality);
                break;
            case 'png':
                imagepng($oImage, $targetFile);
                break;
            case 'wbmp':
                imagewbmp($oImage, $targetFile);
                break;
        }


        imageDestroy($oImage);

        return $targetFile;
    }
}
