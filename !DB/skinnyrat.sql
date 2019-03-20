-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Mar 2019 pada 17.20
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
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `px_shorten_url`
--

INSERT INTO `px_shorten_url` (`id`, `name`, `link`, `password`, `date_created`) VALUES
(1, 'rpl2_foto', 'https://drive.google.com/drive/folders/1J0vcoGkrxFWEDHsDaMcovqgzNOK1E1wG?usp=sharing	', 'Ns3Iv7qaUr8C9ZxicIeNxDl/aSxVuGa1bXH0aKx6bWdCVGhEsek/3HPvbnMRo7AQNryZP8gfdWTp0yvXSSgpfw==', '2019-03-20 23:18:45'),
(2, 'rpl2_fotoformal', 'https://drive.google.com/drive/folders/1sGNnuMEOd9bNSQw-HXlB-ArkprmlwkS9?usp=sharing', '4zT2chsFFdXXJLOceDu44TR3Z+4FtPjbkjHasQS+aJVbe5jQqJtlmA/BM2OrtNusAonoSYEUvchuN00YtW2AdQ==', '2019-03-20 23:19:22'),
(3, 'foto_rpl2', 'rpl2_foto', '0', '2019-03-20 23:19:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
