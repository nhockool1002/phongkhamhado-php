-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 04:35 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE IF NOT EXISTS `cauhoi` (
`idCH` int(11) NOT NULL,
  `idCL` int(11) NOT NULL,
  `TieuDeCH` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeCHKD` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `KeywordCH` text COLLATE utf8_unicode_ci NOT NULL,
  `DescriptionCH` text COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DienThoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungCH` text COLLATE utf8_unicode_ci NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '0',
  `NgayTao` date NOT NULL,
  `TongTL` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dangky`
--

CREATE TABLE IF NOT EXISTS `dangky` (
`idDK` int(11) NOT NULL,
  `HoTen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Tuoi` int(3) NOT NULL,
  `GioiTinh` tinyint(2) NOT NULL,
  `DThoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDK` date NOT NULL,
  `Chuyenkhoa` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` text COLLATE utf8_unicode_ci NOT NULL,
  `TrieuChung` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE IF NOT EXISTS `loai` (
`idLoai` int(11) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `DesTrieuChung` text COLLATE utf8_unicode_ci NOT NULL,
  `DesNguyenNhan` text COLLATE utf8_unicode_ci NOT NULL,
  `DesDoiTuong` text COLLATE utf8_unicode_ci NOT NULL,
  `DesPhuongPhap` text COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Des` text COLLATE utf8_unicode_ci NOT NULL,
  `Keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Parent` int(11) NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '1',
  `Menu` tinyint(4) NOT NULL DEFAULT '1',
  `Home` tinyint(4) NOT NULL DEFAULT '1',
  `ThuTu` int(2) NOT NULL DEFAULT '99',
  `LinkHide` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`idPa` int(11) NOT NULL,
  `idGroup` tinyint(4) NOT NULL,
  `TieuDe` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKD` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Des` text COLLATE utf8_unicode_ci NOT NULL,
  `Keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDang` datetime NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '1',
  `linkgoc` int(11) NOT NULL,
  `linkchuyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quangcao`
--

CREATE TABLE IF NOT EXISTS `quangcao` (
`idSlider` int(11) NOT NULL,
  `TieuDe` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKD` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Link` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `AnHien` tinyint(2) NOT NULL DEFAULT '1',
  `ThuTu` int(2) NOT NULL DEFAULT '99'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
`idR` bigint(20) NOT NULL,
  `number_votes` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `used_ips` text NOT NULL,
  `idTT` int(11) NOT NULL,
  `date_vote` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
`idSetting` int(11) NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UrlFace` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UrlGlus` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UrlTwis` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MetaTitle` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MetaDesc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Analytics` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GoogleMasterTool` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`idSetting`, `Phone`, `UrlFace`, `UrlGlus`, `UrlTwis`, `MetaTitle`, `MetaDesc`, `Analytics`, `GoogleMasterTool`) VALUES
(1, '', 'PhongKhamNamViet', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sodienthoai`
--

CREATE TABLE IF NOT EXISTS `sodienthoai` (
`id_sdt` int(11) NOT NULL,
  `sdt` text CHARACTER SET utf8 NOT NULL,
  `NgayGioDK` datetime NOT NULL,
  `IP` text CHARACTER SET utf8 NOT NULL,
  `AnHien` tinyint(1) NOT NULL DEFAULT '0',
  `Ghichu` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'chua'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE IF NOT EXISTS `tintuc` (
`idTT` int(11) NOT NULL,
  `idCL` int(11) NOT NULL,
  `idLoai` int(1) NOT NULL,
  `idCon` int(11) NOT NULL,
  `TieuDe` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `TieuDeKD` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Des` text COLLATE utf8_unicode_ci NOT NULL,
  `Keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TomTat` text COLLATE utf8_unicode_ci NOT NULL,
  `NoiDung` text COLLATE utf8_unicode_ci NOT NULL,
  `UrlHinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NgayDang` datetime NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '1',
  `LuotXem` int(11) NOT NULL DEFAULT '100',
  `LuotChat` int(11) NOT NULL DEFAULT '32',
  `LinkHide` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traloi`
--

CREATE TABLE IF NOT EXISTS `traloi` (
`idTL` int(11) NOT NULL,
  `idCH` int(11) NOT NULL,
  `NoiDungTL` text COLLATE utf8_unicode_ci NOT NULL,
  `AnHien` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`idUser` int(11) NOT NULL,
  `User` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BoPhan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idGroup` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `User`, `Pass`, `Name`, `BoPhan`, `idGroup`) VALUES
(38, 'admin', '', '', '', 3),
(45, 'adwpk', '', 'adw', 'adw', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
 ADD PRIMARY KEY (`idCH`);

--
-- Indexes for table `dangky`
--
ALTER TABLE `dangky`
 ADD PRIMARY KEY (`idDK`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
 ADD PRIMARY KEY (`idLoai`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`idPa`);

--
-- Indexes for table `quangcao`
--
ALTER TABLE `quangcao`
 ADD PRIMARY KEY (`idSlider`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
 ADD PRIMARY KEY (`idR`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
 ADD PRIMARY KEY (`idSetting`);

--
-- Indexes for table `sodienthoai`
--
ALTER TABLE `sodienthoai`
 ADD PRIMARY KEY (`id_sdt`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
 ADD PRIMARY KEY (`idTT`);

--
-- Indexes for table `traloi`
--
ALTER TABLE `traloi`
 ADD PRIMARY KEY (`idTL`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
MODIFY `idCH` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dangky`
--
ALTER TABLE `dangky`
MODIFY `idDK` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
MODIFY `idLoai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `idPa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quangcao`
--
ALTER TABLE `quangcao`
MODIFY `idSlider` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
MODIFY `idR` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
MODIFY `idSetting` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sodienthoai`
--
ALTER TABLE `sodienthoai`
MODIFY `id_sdt` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
MODIFY `idTT` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `traloi`
--
ALTER TABLE `traloi`
MODIFY `idTL` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
