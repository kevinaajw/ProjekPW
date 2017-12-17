-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Des 2017 pada 05.57
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stalkshoot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `friends`
--

CREATE TABLE `friends` (
  `username_friend` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `friends`
--

INSERT INTO `friends` (`username_friend`, `username`) VALUES
('afififah', 'alif'),
('afififah', 'ikma'),
('afififah', 'kevin_aaj'),
('fajarputrae', 'afififah'),
('fajarputrae', 'alif'),
('fajarputrae', 'kevin_aaj'),
('kevin_aaj', 'afififah'),
('kevin_aaj', 'ikma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `id` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `path` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`id`, `status`, `path`, `img`, `username`, `upload_date`) VALUES
('2_2017-12-10-213251', 0, 'http://localhost/CI_Project/src/static/img/2/', 'asasassa.PNG', 'kevin_aaj', '2017-12-10'),
('2_2017-12-10-213328', 0, 'http://localhost/CI_Project/src/static/img/2/', 'studytourrr_589.jpg', 'kevin_aaj', '2017-12-10'),
('2_2017-12-10-213453', 0, 'http://localhost/CI_Project/src/static/img/2/', '20150516_4782.jpg', 'kevin_aaj', '2017-12-10'),
('2_2017-12-13-080248', 0, 'http://localhost/CI_Project/src/static/img/2/', 'Daftar tempat.jpg', 'kevin_aaj', '2017-12-13'),
('4_2017-12-12-231206', 0, 'http://localhost/CI_Project/src/static/img/4/', 'Pinjem tempat.jpg', 'fajarputrae', '2017-12-12'),
('9_2017-12-13-080008', 0, 'http://localhost/CI_Project/src/static/img/9/', 'Pinjem bus.jpg', 'ikma', '2017-12-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo_id` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nama`, `email`, `username`, `password`, `photo_id`, `id`) VALUES
('afifah', 'afififahkhoeriah@gmail.com', 'afififah', 'cintaallah', 'profile_default.jpg', 1),
('kevin', 'kevin.wawo@gmail.com', 'kevin_aaj', 'kevinaaj', 'profile_default.jpg', 2),
('Eko Fajar Putra', 'ekofajarp27@gmail.com', 'fajarputrae', 'fajarputrae', 'Capture.PNG', 4),
('Raditya', 'raditya@gmail.com', 'radit', 'radit', 'profile_default.jpg', 5),
('Adit', 'adit@gmail.com', 'adit', 'adit', 'GYRM4057.jpeg', 6),
('er', 'er@gmail.com', 'erlangga', 'erlangga', 'S__12869737.jpg', 7),
('alif', 'alif@gmail.com', 'alif', 'alif', 'linetoday.jpg', 8),
('ikma', 'ikmaa@gmail.com', 'ikma', 'ikma', 'paint_splatter-wallpaper-2048x1152.jpg', 9),
('ikma', 'ikmaa@gmail.com', 'ikma', 'ikma', 'paint_splatter-wallpaper-2048x1152.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`username_friend`,`username`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
