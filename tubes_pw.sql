-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 03:55 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `nama_category`) VALUES
(9, 'PC Gaming'),
(10, 'PC');

-- --------------------------------------------------------

--
-- Table structure for table `menu_post`
--

CREATE TABLE `menu_post` (
  `id_product` int(50) NOT NULL,
  `nama_product` varchar(150) NOT NULL,
  `deskripsi_product` text NOT NULL,
  `nama_category` varchar(150) NOT NULL,
  `img_product` varchar(150) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_post`
--

INSERT INTO `menu_post` (`id_product`, `nama_product`, `deskripsi_product`, `nama_category`, `img_product`, `waktu`) VALUES
(3, 'Asus ROG G30AK', '<p>Harga : Rp. 35.000.000</p>\r\n<p>Spesifikasi :</p>\r\n<ul class=\"product-spec\">\r\n<li><span class=\"spec-item\">Operating System</span>Windows 8.1</li>\r\n<li><span class=\"spec-item\">Processor</span>The 4th generation Intel&reg; Core&trade; i5/i7 Processor</li>\r\n<li><span class=\"spec-item\">Chipset</span>Intel&reg; Z97</li>\r\n<li><span class=\"spec-item\">Graphic</span>NVIDIA&reg; GeForce GTX980 4GB <br />NVIDIA&reg; GeForce GTX970 4GB <br />NVIDIA&reg; GeForce GTX960 2GB <br />NVIDIA&reg; GeForce GTX750 1GB</li>\r\n<li><span class=\"spec-item\">Memory</span>4 GB Up to 32 GB<br />Dual Channel, DDR3 at 1600MHz</li>\r\n<li><span class=\"spec-item\">Expansion Slots</span>1 x PCI-e x 1<br />1 x PCI-e x 4 <br />1 x PCI-e x 8 *<sup>1</sup><br />1 x PCI-e x 16</li>\r\n<li><span class=\"spec-item\">SATA</span>6 x SATA 6Gb/s</li>\r\n<li><span class=\"spec-item\">Storage</span>Up to 3TB SATA 6Gb/s Hard Drive (7200RPM)<br />Up to 256GB SATA 6Gb/s</li>\r\n<li><span class=\"spec-item\">Optical Drive</span>Tray-in Supermulti DVD RW 24X <br />Blu-Ray Disc Combo <br />Blu-ray Writer</li>\r\n<li><span class=\"spec-item\">LAN</span>10/100/1000 Mbps</li>\r\n<li><span class=\"spec-item\">Audio</span>SonicMaster<br />High Definition 8 Channel Audio</li>\r\n<li><span class=\"spec-item\">Front I/O Ports</span>1 x 16 -in-1 Card Reader<br />1 x Headphone<br />1 x Microphone<br />2 x USB 2.0 <br />2 x USB 3.0</li>\r\n<li><span class=\"spec-item\">Back I/O Ports</span>4 x USB 3.1 Gen 1 <br />2 x USB 2.0 <br />1 x PS/2(Keyboard/Mouse)<br />1 x DVI-D<br />1 x HDMI-Out<br />1 x VGA(D-Sub)-Out<br />1 x RJ45 LAN<br />1 x 8 Channel Audio<br />1 x S/PDIF out(Audio jack)</li>\r\n<li><span class=\"spec-item\">Card Reader</span>16-in-1: CF/ Micro Drive/ MS/ MS Duo/ MS Pro/ MS Pro Duo/ SD/ MMC/ MMC4.0/ RS-MMC/ RS-MMC4.0/ SDHC/ MS Micro-M2/ Mini SD/ Micro SD/ Mini MMC</li>\r\n<li><span class=\"spec-item\">Power Supply</span>500 W <br />700 W</li>\r\n<li><span class=\"spec-item\">Dimensions</span>216 x 481 x 544 mm (WxDxH)<br />330 x 574 x 600 ~ cm (WxDxH) with Carton</li>\r\n<li><span class=\"spec-item\">Accessories</span>Keyboard <br />Mouse <br />Power Cord<br />Warranty Card<br />Quick Manual</li>\r\n<li><span class=\"spec-item\">Software</span>Anti-Virus Trial<br />Office Trial<br />*Softwares may vary in different market</li>\r\n<li><span class=\"spec-item\">Note</span>*1: 1 x PCI-e x 8 (share with x16)</li>\r\n</ul>', 'PC Gaming', 'asus rog tytan g30ak.jpg', '2018-12-16 16:54:39'),
(4, 'Asus ROG G20AJ', '<div>Harga : Rp. 50.000.000</div>\r\n<div>Spesifikasi :</div>\r\n<div id=\"spec-area\" class=\"row\">\r\n<ul class=\"product-spec\">\r\n<li><span class=\"spec-item\">Operating System</span><br />\r\n<div class=\"spec-data\">Windows 8.1</div>\r\n</li>\r\n<li><span class=\"spec-item\">Processor</span>\r\n<div class=\"spec-data\">The 4th generation Intel&reg; Core&trade; i5/i7/i3 Processor <br />Intel&reg; Core&trade; i5 4460 <br />Intel&reg; Core&trade; i7 4790 <br />Intel&reg; Core&trade; i3 4150</div>\r\n</li>\r\n<li><span class=\"spec-item\">Chipset</span>\r\n<div class=\"spec-data\">Intel&reg; H97</div>\r\n</li>\r\n<li><span class=\"spec-item\">Graphic</span>\r\n<div class=\"spec-data\">NVIDIA&reg; GeForce GTX750 1GB/2GB <br />NVIDIA&reg; GeForce GTX980 4GB <br />NVIDIA&reg; GeForce GTX770 2GB <br />NVIDIA&reg; GeForce GTX970 4GB <br />NVIDIA&reg; GeForce GTX780 3GB <br />NVIDIA&reg; GeForce GTX760 2GB <br />NVIDIA&reg; GeForce GTX745 1GB</div>\r\n</li>\r\n<li><span class=\"spec-item\">Memory</span>\r\n<div class=\"spec-data\">2 x SO-DIMM</div>\r\n</li>\r\n<li><span class=\"spec-item\">Storage</span>\r\n<div class=\"spec-data\">2.5\" Up to 256GB SSD SATA III<br />Up to 3TB SATA III Hard Drive 3.5\"</div>\r\n</li>\r\n<li><span class=\"spec-item\">Optical Drive</span>\r\n<div class=\"spec-data\">Slimtray Blu-ray Combo <br />Slimtray Super Multi DVD burner <br />Slimtray BD Writer</div>\r\n</li>\r\n<li><span class=\"spec-item\">Wireless Data Network</span>\r\n<div class=\"spec-data\">802.11 a/b/g/n/ac, Bluetooth V4.0</div>\r\n</li>\r\n<li><span class=\"spec-item\">LAN</span>\r\n<div class=\"spec-data\">1000/100/Gigabits/10 Mbps</div>\r\n</li>\r\n<li><span class=\"spec-item\">Audio</span>\r\n<div class=\"spec-data\">High Definition 7.1 Channel Audio<br />SonicMaster</div>\r\n</li>\r\n<li><span class=\"spec-item\">Front I/O Ports</span>\r\n<div class=\"spec-data\">1 x Headphone<br />1 x Microphone<br />2 x USB 3.0</div>\r\n</li>\r\n<li><span class=\"spec-item\">Back I/O Ports</span>\r\n<div class=\"spec-data\">2 x DC-in<br />1 x Kensington Lock <br />1 x HDMI-Out<br />1 x Built-in Wi-Fi antenna<br />1 x 7.1 Channel Audio<br />2 x USB 3.0 <br />1 x RJ45 LAN<br />4 x USB 2.0</div>\r\n</li>\r\n<li><span class=\"spec-item\">Power Supply</span>\r\n<div class=\"spec-data\">230 W Power adaptor<br />180 W + 230 W Power adapter<br />180 W Power adaptor</div>\r\n</li>\r\n<li><span class=\"spec-item\">Dimensions</span>\r\n<div class=\"spec-data\">19 x 59.2 x 40 (WxDxH) cm ~ with Carton<br />10.4 x 35.8 x 34 cm (WxDxH)</div>\r\n</li>\r\n<li><span class=\"spec-item\">Weight</span>\r\n<div class=\"spec-data\">6.38 kg</div>\r\n</li>\r\n<li><span class=\"spec-item\">Accessories</span>\r\n<div class=\"spec-data\">Warranty Card<br />Quick Start Guide<br />Keyboard+Mouse (Optional), Wired/Wireless<br />Power Cord<br />*All accessories may vary in different market<br />AC Adapter</div>\r\n</li>\r\n<li><span class=\"spec-item\">Software</span>\r\n<div class=\"spec-data\">ASUS WebStorage<br />ASUS Lighting<br />Intel Rapid Start Software<br />Anti-Virus Trial<br />Ai Charger ll<br />Lucid Virtu <br />MaxxAudio<br />ASUS Command</div>\r\n</li>\r\n<li><span class=\"spec-item\">Certificates</span>\r\n<div class=\"spec-data\">ETL/CB/FCC/CCC/CE/C-Tick/VCCI/BSMI</div>\r\n</li>\r\n</ul>\r\n</div>', 'PC Gaming', 'asus rog g20aj.jpg', '2018-12-16 16:42:56'),
(5, 'Asus ROG CG8890', '<div>Harga : Rp. 17.000.000</div>\r\n<div>Spesifikasi :</div>\r\n<ul class=\"product-spec\">\r\n<li><span class=\"spec-item\">Operating System</span>\r\n<div class=\"spec-data\">Windows 8<br />Windows 7 Home Premium , 64bit</div>\r\n</li>\r\n<li><span class=\"spec-item\">Processor</span>\r\n<div class=\"spec-data\">The 2nd generation Intel&reg; Core&trade; i7 Extreme Processor <br />Intel&reg; Core&trade; i7 4820K Processor (Extreme Edition) <br />Intel&reg; Core&trade; i7 4960X Processor (Extreme Edition)</div>\r\n</li>\r\n<li><span class=\"spec-item\">Chipset</span>\r\n<div class=\"spec-data\">Intel&reg; X79</div>\r\n</li>\r\n<li><span class=\"spec-item\">Graphic</span>\r\n<div class=\"spec-data\">NVIDIA&reg; GeForce GTX690 4GB <br />NVIDIA&reg; GeForce GTX680 2GB</div>\r\n</li>\r\n<li><span class=\"spec-item\">Memory</span>\r\n<div class=\"spec-data\">4 GB Up to 16 GB<br />Dual Channel, DDR3 at 2133MHz<br />4 x DIMMs</div>\r\n</li>\r\n<li><span class=\"spec-item\">Expansion Slots</span>\r\n<div class=\"spec-data\">2 x PCI-e 2.0 x 1 <br />4 x PCI-e 3.0 x 16 *<sup>1</sup></div>\r\n</li>\r\n<li><span class=\"spec-item\">SATA</span>\r\n<div class=\"spec-data\">4 x SATA 3Gb/s<br />4 x SATA 6Gb/s<br />2 x eSATA 6Gb/s</div>\r\n</li>\r\n<li><span class=\"spec-item\">Storage</span>\r\n<div class=\"spec-data\">Up to 15TB SATA 6Gb/s Hard Drive (7200RPM)<br />Up to 256GB SATA 6Gb/s</div>\r\n</li>\r\n<li><span class=\"spec-item\">Optical Drive</span>\r\n<div class=\"spec-data\">Tray-in Supermulti DVD RW 24X <br />Blu-Ray Disc Combo <br />Blu-ray Writer</div>\r\n</li>\r\n<li><span class=\"spec-item\">LAN</span>\r\n<div class=\"spec-data\">10/100/1000/Gigabits Mbps</div>\r\n</li>\r\n<li><span class=\"spec-item\">Audio</span>\r\n<div class=\"spec-data\">High Definition 8 Channel Audio<br />Xonar DX (Optional)</div>\r\n</li>\r\n<li><span class=\"spec-item\">Front I/O Ports</span>\r\n<div class=\"spec-data\">1 x 16 -in-1 Card Reader<br />1 x Headphone<br />1 x Microphone<br />2 x USB 2.0 <br />2 x USB 3.0</div>\r\n</li>\r\n<li><span class=\"spec-item\">Back I/O Ports</span>\r\n<div class=\"spec-data\">4 x USB 3.1 Gen 1 <br />6 x USB 2.0 *<sup>2</sup><br />2 x e-SATA 6Gb/s <br />1 x PS/2(Keyboard/Mouse)<br />1 x RJ45 LAN<br />1 x 8 Channel Audio<br />1 x Clear CMOS button(s)<br />1 x ROG Connect On/ Off switch(es)<br />1 x Optical S/PDIF out</div>\r\n</li>\r\n<li><span class=\"spec-item\">Card Reader</span>\r\n<div class=\"spec-data\">16-in-1: CF/ Micro Drive/ MS/ MS Duo/ MS Pro/ MS Pro Duo/ SD/ MMC/ MMC4.0/ RS-MMC/ RS-MMC4.0/ SDHC/ MS Micro-M2/ Mini SD/ Micro SD/ Mini MMC</div>\r\n</li>\r\n<li><span class=\"spec-item\">Power Supply</span>\r\n<div class=\"spec-data\">900 W (80 PLUS)</div>\r\n</li>\r\n<li><span class=\"spec-item\">Dimensions</span>\r\n<div class=\"spec-data\">300 x 530 x 630 mm (WxHxD)<br />776 x 482 x 673 mm (WxHxD) with Carton</div>\r\n</li>\r\n<li><span class=\"spec-item\">Weight</span>\r\n<div class=\"spec-data\">24 kg</div>\r\n</li>\r\n<li><span class=\"spec-item\">Accessories</span>\r\n<div class=\"spec-data\">Keyboard (USB)<br />Mouse (USB)<br />Power Cord<br />Warranty Card<br />Quick Manual</div>\r\n</li>\r\n<li><span class=\"spec-item\">Software</span>\r\n<div class=\"spec-data\">Anti-Virus Trial<br />Adobe Acrobat Reader<br />Office Trial<br />*Softwares may vary in different market</div>\r\n</li>\r\n<li><span class=\"spec-item\">Utilities</span>\r\n<div class=\"spec-data\">ASUS AI-SUITE II <br />ASUS Easy Update <br />ASUS AI Manager<br />ASUS Backup Wizard<br />ASUS Instant On<br />ASUS Q-fan<br />ASUS@Vibe<br />ASUS AI Charger+<br />System Level Up<br />ASUS WebStorage</div>\r\n</li>\r\n<li><span class=\"spec-item\">Note</span>\r\n<div class=\"spec-data\">*1: x16; x16/x16; x16/x8/x16 and x16/x8/x8/x8 <br />*2: one port can be switched to ROG Connect</div>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>', 'PC Gaming', 'asus rog cg8890.jpg', '2018-12-16 16:46:50'),
(6, 'Asus', '<p>harga : 17.000.000</p>', 'PC', '_didOnxQ.jpg', '2018-12-25 13:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(2) NOT NULL,
  `nama_toko` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `kontak` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `nama_toko`, `email`, `kontak`, `alamat`, `deskripsi`, `image`) VALUES
(1, 'ONE1', 'ONE1@gmail.com', '08981360789', 'Jl. Raya Pawidean Blok : Desa RT : 16 RW : 04 Kec. Jatibarang Kab. Indramayu..', 'SERBA ADA !', 'ONE.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `menu_post`
--
ALTER TABLE `menu_post`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu_post`
--
ALTER TABLE `menu_post`
  MODIFY `id_product` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
