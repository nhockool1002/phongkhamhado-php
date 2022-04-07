<?php
/*
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
 * Base commands handler
 *
 * @package CKFinder
 * @subpackage CommandHandlers
 * @copyright CKSource - Frederico Knabben
 * @abstract
 *
 */
class CKFinder_Connector_CommandHandler_CommandHandlerBase
{
    /**
     * CKFinder_Connector_Core_Connector object
     *
     * @access protected
     * @var CKFinder_Connector_Core_Connector
     */
    protected $_connector;
    /**
     * CKFinder_Connector_Core_FolderHandler object
     *
     * @access protected
     * @var CKFinder_Connector_Core_FolderHandler
     */
    protected $_currentFolder;
    /**
     * Error handler object
     *
     * @access protected
     * @var CKFinder_Connector_ErrorHandler_Base|CKFinder_Connector_ErrorHandler_FileUpload|CKFinder_Connector_ErrorHandler_Http
     */
    protected $_errorHandler;

    function __construct()
    {
        $this->_currentFolder =& CKFinder_Connector_Core_Factory::getInstance("Core_FolderHandler");
        $this->_connector =& CKFinder_Connector_Core_Factory::getInstance("Core_Connector");
        $this->_errorHandler =&  $this->_connector->getErrorHandler();
    }

    /**
     * Get Folder Handler
     *
     * @access public
     * @return CKFinder_Connector_Core_FolderHandler
     */
    public function getFolderHandler()
    {
        if (is_null($this->_currentFolder)) {
            $this->_currentFolder =& CKFinder_Connector_Core_Factory::getInstance("Core_FolderHandler");
        }

        return $this->_currentFolder;
    }

    /**
     * Check whether Connector is enabled
     * @access protected
     *
     */
    protected function checkConnector()
    {
        $_config =& CKFinder_Connector_Core_Factory::getInstance("Core_Config");
        if (!$_config->getIsEnabled()) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_CONNECTOR_DISABLED);
        }
    }

    /**
     * Check request
     * @access protected
     *
     */
    protected function checkRequest()
    {
        if (preg_match(CKFINDER_REGEX_INVALID_PATH, $this->_currentFolder->getClientPath())) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_INVALID_NAME);
        }

        $_resourceTypeConfig = $this->_currentFolder->getResourceTypeConfig();

        if (is_null($_resourceTypeConfig)) {
            $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_INVALID_TYPE);
        }

        $_clientPath = $this->_currentFolder->getClientPath();
        $_clientPathParts = explode("/", trim($_clientPath, "/"));
        if ($_clientPathParts) {
            foreach ($_clientPathParts as $_part) {
                if ($_resourceTypeConfig->checkIsHiddenFolder($_part)) {
                    $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_INVALID_REQUEST);
                }
            }
        }

        if (!is_dir($this->_currentFolder->getServerPath())) {
            if ($_clientPath == "/") {
                if (!CKFinder_Connector_Utils_FileSystem::createDirectoryRecursively($this->_currentFolder->getServerPath())) {
                    /**
                     * @todo handle error
                     */
                }
            }
            else {
                $this->_errorHandler->throwError(CKFINDER_CONNECTOR_ERROR_FOLDER_NOT_FOUND);
            }
        }
    }

    public function create_thumb($sFilePath,$max_width,$max_height,$quality,$sServerDir, $isCrop, $wh_ratio){

        $DestImagesDirectory = $sServerDir.'../resize/'.$max_width.'x'.$max_height.'/';

        if (!file_exists($DestImagesDirectory)) {
            mkdir($DestImagesDirectory,0777, true);
        }

        $sFileName = basename($sFilePath);
        $sDesThumbFile = CKFinder_Connector_Utils_FileSystem::combinePaths($DestImagesDirectory, $sFileName);
        if(!file_exists($sDesThumbFile)){
            if($isCrop){
                self::cropImage($sFilePath, $max_width, $max_height, $quality, $sServerDir,$wh_ratio);
            }
            else{
                CKFinder_Connector_CommandHandler_Thumbnail::createThumb($sFilePath, $sDesThumbFile, $max_width, $max_height, $quality, true) ;
            }
        }


    }


    public function cropImage($sourceFile,$width,$height,$quality,$sServerDir,$wh_ratio)
    {
        
        $sFileName = basename($sourceFile);

        $originalFileDirectory = $sServerDir.'../original/';
        $originalFilePath = CKFinder_Connector_Utils_FileSystem::combinePaths($originalFileDirectory, $sFileName);

        $DestImagesDirectory = $sServerDir.'../resize/'.$width.'x'.$height.'/';
        $sDesCropFile = CKFinder_Connector_Utils_FileSystem::combinePaths($DestImagesDirectory, $sFileName);

        if (!file_exists($originalFilePath)) {
            $originalFilePath = $sourceFile;
        }

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
                    $oImage = @imagecreatefromgif($originalFilePath);
                } else {
                    $ermsg = 'GIF images are not supported';
                }
            }
                break;
            case 'image/jpeg':
            {
                if (@imagetypes() & IMG_JPG) {
                    $oImage = @imagecreatefromjpeg($originalFilePath) ;
                } else {
                    $ermsg = 'JPEG images are not supported';
                }
            }
                break;
            case 'image/png':
            {
                if (@imagetypes() & IMG_PNG) {
                    $oImage = @imagecreatefrompng($originalFilePath) ;
                } else {
                    $ermsg = 'PNG images are not supported';
                }
            }
                break;
            case 'image/wbmp':
            {
                if (@imagetypes() & IMG_WBMP) {
                    $oImage = @imagecreatefromwbmp($originalFilePath);
                } else {
                    $ermsg = 'WBMP images are not supported';
                }
            }
                break;

            default:
                $ermsg = $sourceImageAttr['mime'].' images are not supported';
                break;
        }

        if (isset($ermsg) || false === $oImage) {
            return false;
        }


        $calc_ratio_to_scale = self::calc_img_ratio($sourceImageWidth,$sourceImageHeight,$wh_ratio,$width,$height);

        $imageScale = imagescale($oImage, $calc_ratio_to_scale['width'], $calc_ratio_to_scale['height']);
        $im2 = imagecrop($imageScale, ['x' => 0, 'y' => 0, 'width' => $width, 'height' => $height]);
        if ($im2 !== FALSE) {

            switch ($sourceImageAttr['mime'])
            {
                case 'image/gif':
                    imagegif($im2, $sDesCropFile);
                    break;
                case 'image/jpeg':
                case 'image/bmp':
                    imagejpeg($im2, $sDesCropFile, $quality);
                    break;
                case 'image/png':
                    imagepng($im2, $sDesCropFile);
                    break;
                case 'image/wbmp':
                    imagewbmp($im2, $sDesCropFile);
                    break;
            }
        }


        imageDestroy($oImage);
        imageDestroy($imageScale);
    }

    public function calc_img_ratio($real_img_width,$real_img_height,$ratio,$target_width,$target_height){
        $width_output = 0;
        $height_output=0;
        $real_img_ratio = round(($real_img_width/$real_img_height),2);

        if($real_img_ratio>$ratio){
            $target_ratio = round(($real_img_height/$target_height),2);

            $width_output = round(($real_img_width/$target_ratio),2);
            $height_output = round(($real_img_height/$target_ratio),2);
        }
        else{
            $target_ratio = round(($real_img_width/$target_width),2);

            $width_output = round(($real_img_width/$target_ratio),2);
            $height_output = round(($real_img_height/$target_ratio),2);
        }

        return array(
            'width'=>ceil($width_output),
            'height'=>ceil($height_output)
        );
    }

}
