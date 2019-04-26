-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Apr 2019 pada 05.20
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
-- Struktur dari tabel `px_admin`
--

CREATE TABLE `px_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `px_admin`
--

INSERT INTO `px_admin` (`id_admin`, `username`, `password`, `name`) VALUES
(1, 'psr', 'CkIS30LOAKdDRcLBD3HhaH6hQgQl0LnOUF5Y78c5F6wRETTEJABjsplDxVTVbL6o6r5nOqwIh6mskqwWgFXQmw==', 'The Skinny Rat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_member`
--

CREATE TABLE `px_member` (
  `id_member` int(10) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `px_member`
--

INSERT INTO `px_member` (`id_member`, `username`, `password`, `name`) VALUES
(1, 'psr', 'BNz2XcSbj8RCis8fQDEBbFOiyNLTlLtKyimpvMIQSy5ZnJaB57Ef+hvsdDXUDnFwWtuuhdl/4n03KoVl3rlnhw==', 'Skinny Rat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_shorten_url`
--

CREATE TABLE `px_shorten_url` (
  `id_shorten_url` int(11) NOT NULL,
  `name` text NOT NULL,
  `link` text NOT NULL,
  `password` text NOT NULL,
  `date_created` datetime NOT NULL,
  `id_member` int(10) NOT NULL,
  `click` bigint(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `px_shorten_url`
--

INSERT INTO `px_shorten_url` (`id_shorten_url`, `name`, `link`, `password`, `date_created`, `id_member`, `click`) VALUES
(1, 'rpl2_foto', 'https://drive.google.com/drive/folders/1J0vcoGkrxFWEDHsDaMcovqgzNOK1E1wG?usp=sharing	', 'Ns3Iv7qaUr8C9ZxicIeNxDl/aSxVuGa1bXH0aKx6bWdCVGhEsek/3HPvbnMRo7AQNryZP8gfdWTp0yvXSSgpfw==', '2019-03-20 23:18:45', 0, 2),
(2, 'rpl2_fotoformal', 'https://drive.google.com/drive/folders/1sGNnuMEOd9bNSQw-HXlB-ArkprmlwkS9?usp=sharing', '4zT2chsFFdXXJLOceDu44TR3Z+4FtPjbkjHasQS+aJVbe5jQqJtlmA/BM2OrtNusAonoSYEUvchuN00YtW2AdQ==', '2019-03-20 23:19:22', 0, 1),
(3, 'foto_rpl2', 'rpl2_foto', '0', '2019-03-20 23:19:35', 0, 2),
(6, 'hngryrain', 'https://hngryrain.000webhostapp.com', '0', '2019-03-23 13:04:41', 0, 1),
(11, 'villa_cuk', 'https://drive.google.com/open?id=13ZWWTsh-9q1ducdiP1U0-WNe-GGsHZzz', '0', '2019-04-04 08:20:57', 0, 0),
(12, 'villa_cuk_azz', 'https://drive.google.com/uc?id=13ZWWTsh-9q1ducdiP1U0-WNe-GGsHZzz&amp;export=download', '0', '2019-04-04 08:34:41', 0, 4),
(14, 'r_lsp', 'https://github.com/TheSkinnyRat/smkindonesia', '0', '2019-04-14 12:19:26', 0, 33),
(15, 'ggl', 'https://www.google.com', '0', '2019-04-15 21:58:27', 0, 0),
(16, 'yt', 'https://youtube.com', '0', '2019-04-15 21:59:53', 0, 0),
(17, 'raskuy', 'https://drive.google.com/open?id=18GQABqFLBtVSeroDSwJKBnP480VnpxQ_', 'C5ldWtaZrgDsY6DhTxej8rx3TmN3j2MO/Q6QAQ1c6w7mVaZbL13aLrEAne/of+DvoEHpThjZAI5VSlzLKgViaw==', '2019-04-16 03:38:05', 0, 3),
(18, 'r_weblsp', 'http://psr-smkindonesia.000webhostapp.com/', '0', '2019-04-16 11:57:20', 0, 8),
(19, 'r_sclsp', 'https://drive.google.com/drive/folders/10eVBy1QxFqmClDo7Q9_bajt8v8ePEmos?usp=sharing', 'BXk/liEzx7RhaMmakr1Is5IVuZOqibSLc8KpQIShd8xvily+bcZxBX1eRvx1vOOhbSryq9EcmWOx92ulSMA7bA==', '2019-04-16 11:57:46', 0, 6),
(20, 'maullsp', 'https://drive.google.com/open?id=1m7aRw3cmSAhuT1Daks9110mUQtii5PCZ', '0', '2019-04-16 17:50:58', 0, 3),
(21, 'wardun', 'https://drive.google.com/open?id=1_U3XX_LKp3HASKywau7OsXWA14JQ86Gz', '0', '2019-04-16 18:27:35', 0, 3),
(32, 'r_fb', 'https://m.facebook.com/theskinnyratt', ' 0', '2019-04-22 17:45:10', 1, 2),
(33, 'r_ig', 'https://instagram.com/theskinnyrat', ' 0', '2019-04-22 17:46:16', 1, 2),
(34, 'r_tw', 'https://twitter.com/theskinnyrat', ' 0', '2019-04-22 17:47:20', 1, 2),
(35, 'r_gh', 'https://github.com/theskinnyrat', ' 0', '2019-04-22 17:47:52', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `px_admin`
--
ALTER TABLE `px_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `px_member`
--
ALTER TABLE `px_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  ADD PRIMARY KEY (`id_shorten_url`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `px_admin`
--
ALTER TABLE `px_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `px_member`
--
ALTER TABLE `px_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  MODIFY `id_shorten_url` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
