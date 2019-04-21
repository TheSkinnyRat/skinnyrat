-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Apr 2019 pada 06.05
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skinnyrat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_shorten_url`
--

CREATE TABLE `px_shorten_url` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL,
  `id_user` int(10) NOT NULL,
  `click` bigint(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `px_shorten_url`
--

INSERT INTO `px_shorten_url` (`id`, `name`, `link`, `password`, `date_created`, `id_user`, `click`) VALUES
(1, 'rpl2_foto', 'https://drive.google.com/drive/folders/1J0vcoGkrxFWEDHsDaMcovqgzNOK1E1wG?usp=sharing	', 'Ns3Iv7qaUr8C9ZxicIeNxDl/aSxVuGa1bXH0aKx6bWdCVGhEsek/3HPvbnMRo7AQNryZP8gfdWTp0yvXSSgpfw==', '2019-03-20 23:18:45', 0, 2),
(2, 'rpl2_fotoformal', 'https://drive.google.com/drive/folders/1sGNnuMEOd9bNSQw-HXlB-ArkprmlwkS9?usp=sharing', '4zT2chsFFdXXJLOceDu44TR3Z+4FtPjbkjHasQS+aJVbe5jQqJtlmA/BM2OrtNusAonoSYEUvchuN00YtW2AdQ==', '2019-03-20 23:19:22', 0, 0),
(3, 'foto_rpl2', 'rpl2_foto', '0', '2019-03-20 23:19:35', 0, 1),
(4, 'Telor', 'Https://YouTube.com', '0', '2019-03-21 08:01:42', 0, 2),
(5, 'r_dnkg_220319', 'https://danaid.onelink.me/qQ4h/2fe74384?orderId=20190322101214755815010300166061301540768', 'G8GqzO5u9ZO23tr0DENQXjsrI1yPImz5U5xa8xy/EaytgBQ97EgqcMmd39X2tM0wgoMZEKnMoJqc9TZvcZVkIw==', '2019-03-22 19:43:22', 0, 0),
(6, 'hngryrain', 'https://hngryrain.000webhostapp.com', '0', '2019-03-23 13:04:41', 0, 0),
(7, 'alhe7_foto', 'bit.ly/fotoalhe7', 'hRxuWgJqQAXeAxWOjfEESaP/deRsiirH8jYAkKsXcIcu22ZXg1rAfU3QAIV29+aW3U+yo0kGUK173Oqut2L25g==', '2019-03-24 18:41:21', 0, 0),
(8, 'R_dnkg_wa', 'https://danaid.onelink.me/qQ4h/2fe74384?orderId=20190402101214545515010300166061301656831', '0', '2019-04-02 15:55:54', 0, 0),
(11, 'villa_cuk', 'https://drive.google.com/open?id=13ZWWTsh-9q1ducdiP1U0-WNe-GGsHZzz', '0', '2019-04-04 08:20:57', 0, 0),
(12, 'villa_cuk_azz', 'https://drive.google.com/uc?id=13ZWWTsh-9q1ducdiP1U0-WNe-GGsHZzz&amp;export=download', '0', '2019-04-04 08:34:41', 0, 0),
(13, 'R_', 'https://danaid.onelink.me/qQ4h/2fe74384?orderId=20190406101214577915010300166061301706153', '0', '2019-04-06 20:56:21', 0, 0),
(14, 'r_lsp', 'https://github.com/TheSkinnyRat/smkindonesia', '0', '2019-04-14 12:19:26', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_user`
--

CREATE TABLE `px_user` (
  `id` int(10) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `access` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_user`
--
ALTER TABLE `px_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `px_user`
--
ALTER TABLE `px_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
