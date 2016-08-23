-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 01:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `longtmps03255_asm_inf205`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `SoLuong` int(11) NOT NULL,
  `Gia` int(11) NOT NULL,
  `MaSP` varchar(20) NOT NULL,
  `MaHD` varchar(20) NOT NULL,
  `TongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`SoLuong`, `Gia`, `MaSP`, `MaHD`, `TongTien`) VALUES
(1, 100000, 'DT001', 'HD001', 200000),
(2, 200000, 'DT002', 'HD002', 400000),
(3, 300000, 'DT003', 'HD003', 900000),
(4, 400000, 'DT004', 'HD004', 1600000),
(5, 500000, 'DT005', 'HD005', 2500000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` varchar(20) NOT NULL,
  `NgayMua` date NOT NULL,
  `MaKH` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `NgayMua`, `MaKH`) VALUES
('HD001', '2016-06-05', 'KH001'),
('HD002', '2016-07-05', 'KH002'),
('HD003', '2016-06-08', 'KH003'),
('HD004', '2016-07-10', 'KH004'),
('HD005', '2016-07-29', 'KH005');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` varchar(20) NOT NULL,
  `TenKH` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SDT` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Email`, `SDT`) VALUES
('KH001', 'Tran Minh Long', 'Longtmps03255@fpt.edu.vn', '01218990052'),
('KH002', 'Ta Duc Tan', 'Tantd@fpt.edu.vn', '01218990051'),
('KH003', 'Lo Thanh PHu', 'Phult@fpt.edu.vn', '01218990053'),
('KH004', 'Le Tu Duy Khanh', 'Khanhltd@fpt.edu.vn', '01218990050'),
('KH005', 'Bui Dang Hiep', 'Hiepbd@fpt.edu.vn', '01218990054');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `TenSP` varchar(255) NOT NULL,
  `GhiChu` varchar(255) NOT NULL,
  `MaLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`TenSP`, `GhiChu`, `MaLoai`) VALUES
('Chuot Gaming', 'Chuột chơi Game', 1),
('Gaming KeyBoard', 'Bàn phím chơi Game', 2),
('Head Phone', 'tai nghe nhac', 3),
('Webcam', '', 4),
('Man hinh LCD 16inc', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(20) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `Gia` int(11) NOT NULL,
  `MaLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `Gia`, `MaLoai`) VALUES
('DT001', 'Chuot Gaming', 100000, 1),
('DT002', 'Gaming KeyBoard', 200000, 2),
('DT003', 'Head Phone', 300000, 3),
('DT004', 'Webcam', 400000, 4),
('DT005', 'Man hinh LCD 16inc', 500000, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `ChiTietHoaDon_SanPham` (`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `HoaDon_KhachHang` (`MaKH`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `SanPham_LoaiSanPham` (`MaLoai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `ChiTietHoaDon_HoaDon` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `ChiTietHoaDon_SanPham` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `HoaDon_KhachHang` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `SanPham_LoaiSanPham` FOREIGN KEY (`MaLoai`) REFERENCES `loaisanpham` (`MaLoai`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
