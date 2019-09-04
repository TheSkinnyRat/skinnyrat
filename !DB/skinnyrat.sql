-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Sep 2019 pada 15.57
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
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usergroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_admin`
--

INSERT INTO `px_admin` (`id_admin`, `username`, `password`, `name`, `id_usergroup`) VALUES
(1, 'psr', 'n8zqtMttP/Gw4Cd2bo1LHftmrfAQAkXGFWNCa/UXvsAJ0Dhy+XzZ4BOB2iMxl9OYQCk1kfX2pHrVC3Fn8WiXxA==', 'The Skinny Rat', 1),
(8, '123', '7yVHwXNA5vLCEAuvv78fkh/95mVbIxa+m/KhKoq4XUv5179BkW7yJo9gS2EK+OELzRCZcvmR0OBhRoLIH0T2Yw==', '123 123 123', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_article`
--

CREATE TABLE `px_article` (
  `id_article` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `id_member` int(10) NOT NULL,
  `click` bigint(225) NOT NULL,
  `img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `private` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_article`
--

INSERT INTO `px_article` (`id_article`, `name`, `judul`, `subjudul`, `konten`, `date_created`, `id_member`, `click`, `img`, `password`, `private`) VALUES
(17, 'test', 'Ini Article Saya', 'Hello World', '<p style=\"text-align:center\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\">Halo Ini Adalah Artikel Pertama Saya :)</span></span></p>\r\n\r\n<hr />', '2019-04-28 09:25:52', 0, 133, '0', '0', 1),
(26, 'rpl2', 'Rekayasa Perangkat Lunak 2 - XVII', 'Tentang RPL2', '<p style=\"text-align:center\"><span style=\"font-size:20px\">Foto - Foto</span></p>\n\n<hr />\n<ol>\n	<li>&nbsp;Foto Formal\n	<ul>\n		<li>Baju PDH - Foto Lama<br />\n		Link : <a href=\"https://sknr.tk/rpl2_fotoformallama\">https://sknr.tk/rpl2_fotoformallama</a><br />\n		Password : -<br />\n		&nbsp;</li>\n		<li>Baju Hitam - Foto Baru<br />\n		Link :&nbsp;<a href=\"https://sknr.tk/rpl2_fotoformal\">https://sknr.tk/rpl2_fotoformal</a><br />\n		Password : -<br />\n		&nbsp;</li>\n	</ul>\n	</li>\n	<li>Foto Biasa\n	<ul>\n		<li>Semua Foto / Video<br />\n		Link : <a href=\"https://sknr.tk/rpl2_foto\">https://sknr.tk/rpl2_foto</a><br />\n		Password : -</li>\n	</ul>\n	</li>\n</ol>\n\n<hr />\n<p style=\"text-align:center\">Senang Bisa Bertemu Dengan Kalian<br />\nさようなら - Good Bye&nbsp;- Sampai Jumpa</p>\n\n<hr />\n<p><tt>Posted by <a href=\"http://instagram.com/the.skinny.rat\">R.</a>&nbsp;- 29 April 2019</tt></p>\n', '2019-04-29 19:54:35', 3, 26, '0', '0', 1),
(28, 'r_dnkg_abis', 'Maap', ':(', '<p style=\"text-align:center\"><strong>MAAP NI DANAKAGET NYA UDAH ABISS, WKWKWK..</strong></p>\r\n\r\n<hr />\r\n<p style=\"text-align:center\"><a href=\"https://data.whicdn.com/images/318273873/original.gif\"><img alt=\"\" src=\"https://data.whicdn.com/images/318273873/original.gif\" style=\"height:225px; width:300px\" /></a></p>\r\n', '2019-08-07 22:23:47', 1, 2, '0', '0', 1),
(29, 'jb', 'JUM\'AT BERKAH', '金曜日', '<center><div class=\"ml12\">ありがとう</div></center>\r\n\r\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js\"></script>\r\n<style>\r\n.ml12 {\r\n  font-weight: 600;\r\n  font-size: auto;\r\n  text-transform: uppercase;\r\n  letter-spacing: 0.5em;\r\n}\r\n\r\n.ml12 .letter {\r\n  display: inline-block;\r\n  line-height: 1em;\r\n}\r\n</style>\r\n<script>\r\n// Wrap every letter in a span\r\nvar textWrapper = document.querySelector(\'.ml12\');\r\ntextWrapper.innerHTML = textWrapper.textContent.replace(/([^\\x00-\\x80]|\\w)/g, \"<span class=\'letter\'>$&</span>\");\r\n\r\nanime.timeline({loop: true})\r\n  .add({\r\n    targets: \'.ml12 .letter\',\r\n    translateX: [40,0],\r\n    translateZ: 0,\r\n    opacity: [0,1],\r\n    easing: \"easeOutExpo\",\r\n    duration: 3000,\r\n    delay: function(el, i) {\r\n      return 500 + 30 * i;\r\n    }\r\n  }).add({\r\n    targets: \'.ml12 .letter\',\r\n    translateX: [0,-30],\r\n    opacity: [1,0],\r\n    easing: \"easeInExpo\",\r\n    duration: 1100,\r\n    delay: function(el, i) {\r\n      return 100 + 30 * i;\r\n    }\r\n  });\r\n</script>\r\n\r\n<hr />\r\n<p style=\"text-align:center\">-<br />\r\n<br />\r\n-<br />\r\n<br />\r\n-</p>\r\n\r\n<!--\r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>NOT AVAILABLE</strong></span></p>\r\n-->\r\n \r\n<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong><a href=\"https://link.dana.id/ambil?c=s6mgqcy4f&r=dcCoFq\">YUK</a></strong></span></p>', '2019-08-29 13:17:38', 1, 3, '0', '0', 1),
(30, 'r_get_user_agent', '!', '!', '<p style=\"text-align:center\"><span style=\"font-size:18px\">USER AGENT SENDED</span></p>\r\n', '2019-05-24 06:53:30', 1, 1, '0', '0', 1),
(31, 'sharinggan', 'Sharing Gan', '-', '<p><strong>AKSES GOOGLE FOTO</strong></p>\n\n<hr />\n<ul>\n	<li>All Access<br />\n	Link : -</li>\n	<li>Sekelas<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/rpl2_foto\">https://sknr.tk/rpl2_foto</a></li>\n	<li>Sharing Gan<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/sg_foto\">https://sknr.tk/sg_foto</a><br />\n	&nbsp;</li>\n	<li>Foto Formal Lama - Baju PDH<br />\n	Link : <a href=\"https://sknr.tk/rpl2_fotoformallama\">https://sknr.tk/rpl2_fotoformallama</a></li>\n	<li>Foto Formal Baru - Baju Jas Hitam<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/rpl2_fotoformal\">https://sknr.tk/rpl2_fotoformal</a><br />\n	&nbsp;</li>\n	<li>Ridwan<br />\n	Link :&nbsp;-</li>\n	<li>Hadi Maulana<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/sg_foto_maul\">https://sknr.tk/sg_foto_maul</a></li>\n	<li>Fitrayuda<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/sg_foto_aduy\">https://sknr.tk/sg_foto_aduy</a></li>\n	<li>Rio Randitya<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/sg_foto_rio\">https://sknr.tk/sg_foto_rio</a></li>\n	<li>Yusuf Adi<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/sg_foto_yusuf\">https://sknr.tk/sg_foto_yusuf</a></li>\n	<li>Panca<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/sg_foto_pen\">https://sknr.tk/sg_foto_pen</a></li>\n	<li>Edoardo<br />\n	Link :&nbsp;<a href=\"https://sknr.tk/sg_foto_edo\">https://sknr.tk/sg_foto_edo</a></li>\n	<li>Faras<br />\n	Link : -</li>\n	<li>Psr<br />\n	Link :&nbsp;-</li>\n</ul>\n\n<hr />\n<p><span style=\"color:#3498db\">Artikel ini dapat di edit dengan login sebagai<br />\nUsername : -<br />\nPassword : -</span></p>\n', '2019-06-30 13:17:29', 4, 7, '0', '0', 1),
(33, 'r_', 'HAPPY EID MUBARAK', 'Selamat hari raya Idul Fitri 1440 H', '<p style=\"text-align:center\"><span style=\"font-size:16px\">Taqabbalallahu minna wa minkum, shiyamana wa shiyamakum...<br />\nSELAMAT IDUL FITRI 1440&nbsp;H~</span></p>\n\n<hr />\n<p style=\"text-align:center\"><strong><span style=\"font-size:16px\"><a href=\"https://link.dana.id/kaget?c=s9fmv4mgl&amp;r=dcCoFq\"><img alt=\"\" src=\"https://media.giphy.com/media/TdfyKrN7HGTIY/giphy.gif\" style=\"height:172px; width:300px\" /></a></span></strong></p>\n\n<p style=\"text-align:center\"><a href=\"https://link.dana.id/kaget?c=spkczvp2g&amp;r=dcCoFq\"><strong><span style=\"font-size:16px\">CARI APA?</span></strong></a></p>\n\n<hr />\n<p><code><tt>Posted By <a href=\"http://instagram.com/the.skinny.rat\" target=\"_blank\">R.</a>&nbsp;- 2&nbsp;Juni&nbsp;2019</tt></code></p>\n', '2019-06-04 18:29:00', 1, 24, '0', '0', 1),
(34, 'sc_sknr', 'Source Code', 'Source Code Information', '<p style=\"text-align:center\">DOWNLOAD SOURCE CODE : <strong><a href=\"https://sknr.tk/sc_sknr\">KLIK DISINI</a></strong></p>\r\n\r\n<hr />\r\n<p>Lisensi&nbsp; &nbsp; &nbsp; : Open Source - Diizikan untuk melakukan &#39;pull request&#39;<br />\r\nVersion&nbsp; &nbsp; &nbsp;: (Akan terus berkembang tergantung mood developer)<br />\r\nLanguage : PHP OOP , JavaScript<br />\r\n<br />\r\nMetode Pembuatan :<br />\r\n-&nbsp;Dibuat dengan mengubah file &#39;routes.php&#39; di config CodeIgniter untuk membuat fitur ShortLink, Article.<br />\r\n- Dibuat dengan metode CRUD dasar untuk pembuatan BACKEND.</p>\r\n\r\n<hr />\r\n<p><code>Posted by R. - 14 Juni 2019</code></p>\r\n', '2019-09-04 20:38:53', 15, 1, '0', '0', 1),
(36, 'wa_sticker', 'Sknr Sticker For Whatsapp', 'Sticker sknr gratis untuk whatsapp', '<table border=\"0\" cellpadding=\"1\" cellspacing=\"0\" style=\"width:50px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"\" src=\"https://i.ibb.co/ChvGNf0/ic-launcher.png\" style=\"height:30px; width:30px\" /></td>\r\n			<td>sknr_sticker.apk</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<p><strong>Description</strong></p>\r\n\r\n<p>Nama Aplikasi : Sknr Sticker<br />\r\nNama Apk : sknr_sticker.apk<br />\r\nCompany Name : com.sknr.sticker (Tidak terverifikasi oleh google play protect karena tidak di upload di play store - <s>Mahal Cuk</s>)<br />\r\nVersion : 1.0 - Final<br />\r\nKet : Aplikasi akan terus di update (tergantung mood dev)</p>\r\n\r\n<p><span style=\"font-size:20px\"><a href=\"http://sknr.tk/dl_wa_sticker\">DOWNLOAD DISINI</a> </span></p>\r\n\r\n<p><span style=\"font-size:14px\"><a href=\"https://www.google.com/search?q=cara+install+apk&amp;oq=cara+install+apk\">CARA INSTALL??</a></span></p>\r\n\r\n<hr />\r\n<p><strong>Screenshoot</strong></p>\r\n\r\n<p><strong><img alt=\"\" src=\"https://i.ibb.co/GVPMWqW/Screenshot-2019-06-24-11-49-16-188-com-sknr-sticker.png\" style=\"height:388px; width:200px\" /></strong></p>\r\n', '2019-09-04 16:26:37', 1, 11, '0', '0', 0),
(39, 'app', 'APP', '-', '<table>\r\n	<tbody>\r\n		<tr>\r\n			<td><img class=\"mr-2\" src=\"https://i.ibb.co/qCjnXSL/rat.png\" style=\"width:70px\" /></td>\r\n			<td>checkingInstall AppTidak kompatibel dengan browser anda<br />\r\n			/ Aplikasi sudah diinstallInstalled</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<p>Compatible Browser:<br />\r\n- Google Chrome (67+) (Tested)<br />\r\n<br />\r\nCompatible Device:<br />\r\n- All device with compatible browser<br />\r\n(Android, Windows, IOS, ETC)<br />\r\n<br />\r\nLeave Comment for Bug Report..<br />\r\n<br />\r\n<a href=\"https://sknr.tk/apps_how\">Bagaimana cara membuat ini? - How it&#39;s works?</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-09-04 16:32:20', 0, 30, '0', '0', 0),
(40, 'report_bugs', 'Report Bugs', '-', '<h2 style=\"text-align:center\"><strong>REPORT BUGS</strong></h2>\r\n\r\n<p style=\"text-align:center\">Silahkan tinggalkan komentar untuk melapor bugs. Terima kasih.</p>\r\n', '2019-09-04 20:39:41', 15, 1, '0', '0', 1),
(41, 'err', 'Something is Error', '-', '<h1 style=\"text-align:center\">SOMETHING IS ERROR IN THIS WEBSITE<br />\r\n<em><small>please leave comment below to report to the developer</small></em></h1>\r\n', '2019-09-04 20:43:02', 15, 1, '0', '0', 0),
(42, 'api', 'SKNR API', '-', '<h3 style=\"text-align:center\"><strong>SKNR API</strong></h3>\r\n\r\n<hr />\r\n<p>Saat ini website sknr.tk memiliki API yang dapat digunakan untuk:</p>\r\n\r\n<p>1. Membuat Shorten URL<br />\r\nApi ini adalah berupa <span style=\"background-color:#ffcccc\">code URL</span>&nbsp;yang dapai di aplikasikan ke dalam&nbsp;<span style=\"background-color:#ffcccc\">Form GET / menggunakannya secara manual</span></p>\r\n\r\n<p>&bull;&nbsp; &nbsp;Tutorial<br />\r\nUntuk menggunakannya secara manual anda dapat menggunakan<br />\r\nlink : <code><span style=\"background-color:#eeeeee\">https://sknr.tk/c?url=(<span style=\"color:#2980b9\">encoded url</span>)</span></code><br />\r\ncontoh : <code><span style=\"background-color:#ecf0f1\">https://sknr.tk/c?url=<span style=\"color:#2980b9\">https%3A%2F%2Fgoogle.com</span></span></code><br />\r\n<br />\r\n&quot;encoded url&quot;&nbsp;adalah text url yang telah di encode supaya dapat di terapkan ke dalam URI tanpa mengganggu url itu sendiri<br />\r\ncontoh url sebelum dan sesudah di encode<br />\r\nsebelum : https://sknr.tk<br />\r\nsesudah :&nbsp;https%3A%2F%2Fsknr.tk<br />\r\nuntuk meng-encode url anda dapat pergi ke&nbsp;<a href=\"https://www.urlencoder.io/\">urlencoder.io</a><br />\r\n<br />\r\nUntuk menggunakannya dengan Form GET anda dapat menggunakan code di bawah ini dan meletakknnya pada web / aplikasi&nbsp;anda</p>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><code>&lt;form action=&quot;https://sknr.tk/c&quot; method=&quot;get&quot;&gt;<br />\r\n&nbsp; &nbsp;&lt;input type=&quot;text&quot; name=&quot;url&quot; placeholder=&quot;input your url...&quot;&gt;<br />\r\n&nbsp; &nbsp;&lt;input type=&quot;submit&quot; value=&quot;Shorten&quot;&gt;<br />\r\n&lt;/form&gt;</code></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-09-04 20:49:06', 15, 1, '0', '0', 0),
(43, 'license', 'LICENSE', '-', '<h3 style=\"text-align:center\"><strong>LICENSE</strong></h3>\r\n\r\n<hr />\r\n<p>TheSkinnyRat / skinnyrat / sknr.tk / is licensed under the</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>MIT License</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Copyright (c) 2019 Skinny Rat</td>\r\n		</tr>\r\n		<tr>\r\n			<td> </td>\r\n		</tr>\r\n		<tr>\r\n			<td>Permission is hereby granted, free of charge, to any person obtaining a copy</td>\r\n		</tr>\r\n		<tr>\r\n			<td>of this software and associated documentation files (the \"Software\"), to deal</td>\r\n		</tr>\r\n		<tr>\r\n			<td>in the Software without restriction, including without limitation the rights</td>\r\n		</tr>\r\n		<tr>\r\n			<td>to use, copy, modify, merge, publish, distribute, sublicense, and/or sell</td>\r\n		</tr>\r\n		<tr>\r\n			<td>copies of the Software, and to permit persons to whom the Software is</td>\r\n		</tr>\r\n		<tr>\r\n			<td>furnished to do so, subject to the following conditions:</td>\r\n		</tr>\r\n		<tr>\r\n			<td> </td>\r\n		</tr>\r\n		<tr>\r\n			<td>The above copyright notice and this permission notice shall be included in all</td>\r\n		</tr>\r\n		<tr>\r\n			<td>copies or substantial portions of the Software.</td>\r\n		</tr>\r\n		<tr>\r\n			<td> </td>\r\n		</tr>\r\n		<tr>\r\n			<td>THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR</td>\r\n		</tr>\r\n		<tr>\r\n			<td>IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,</td>\r\n		</tr>\r\n		<tr>\r\n			<td>FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER</td>\r\n		</tr>\r\n		<tr>\r\n			<td>LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,</td>\r\n		</tr>\r\n		<tr>\r\n			<td>OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE</td>\r\n		</tr>\r\n		<tr>\r\n			<td>SOFTWARE.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<hr />\r\n<p><a href=\"https://sknr.tk/gh_license\">View on Github</a></p>\r\n', '2019-09-04 16:35:02', 15, 2, '0', '0', 0),
(44, 'sys_about', 'About', 'Tentang', '<div class=\"text-lg text-primary\">Skinny Rat Website</div>\r\n      <hr>\r\n      <span>Visit My Social Media</span><br><br>\r\n      <a href=\"http://sknr.tk/r_fb\" class=\"btn btn-primary btn-circle\" target=\"_blank\">\r\n        <i class=\"fab fa-facebook-f\"></i>\r\n      </a>\r\n      <a href=\"http://sknr.tk/r_ig\" class=\"btn btn-success btn-circle\" target=\"_blank\">\r\n        <i class=\"fab fa-instagram\"></i>\r\n      </a>\r\n      <a href=\"http://sknr.tk/r_tw\" class=\"btn btn-info btn-circle\" target=\"_blank\">\r\n        <i class=\"fab fa-twitter\"></i>\r\n      </a>\r\n      <a href=\"http://sknr.tk/r_gh\" class=\"btn btn-secondary btn-circle\" target=\"_blank\">\r\n        <i class=\"fab fa-github\"></i>\r\n      </a>', '2019-09-04 16:38:49', 15, 2, '0', '0', 0),
(45, 'sys_pp', 'Privacy Policy', '-', '<h1>Privacy Policy of Skinny Rat</h1>\r\n\r\n<p>Skinny Rat operates the sknr.tk website, which provides the SERVICE.</p>\r\n\r\n<p>This page is used to inform website visitors regarding our policies with the collection, use, and disclosure of Personal Information if anyone decided to use our Service, the sknr website.</p>\r\n\r\n<p>If you choose to use our Service, then you agree to the collection and use of information in relation with this policy. The Personal Information that we collect are used for providing and improving the Service. We will not use or share your information with anyone except as described in this Privacy Policy.</p>\r\n\r\n<p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at sknr.tk, unless otherwise defined in this Privacy Policy. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicytemplate.net\">Privacy Policy Template</a>.</p>\r\n\r\n<h2>Information Collection and Use</h2>\r\n\r\n<p>For a better experience while using our Service, we may require you to provide us with certain personally identifiable information, including but not limited to your name, phone number, and postal address. The information that we collect will be used to contact or identify you.</p>\r\n\r\n<h2>Log Data</h2>\r\n\r\n<p>We want to inform you that whenever you visit our Service, we collect information that your browser sends to us that is called Log Data. This Log Data may include information such as your computer&rsquo;s Internet Protocol (&quot;IP&quot;) address, browser version, pages of our Service that you visit, the time and date of your visit, the time spent on those pages, and other statistics.</p>\r\n\r\n<h2>Cookies</h2>\r\n\r\n<p>Cookies are files with small amount of data that is commonly used an anonymous unique identifier. These are sent to your browser from the website that you visit and are stored on your computer&rsquo;s hard drive.</p>\r\n\r\n<p>Our website uses these &quot;cookies&quot; to collection information and to improve our Service. You have the option to either accept or refuse these cookies, and know when a cookie is being sent to your computer. If you choose to refuse our cookies, you may not be able to use some portions of our Service.</p>\r\n\r\n<h2>Service Providers</h2>\r\n\r\n<p>We may employ third-party companies and individuals due to the following reasons:</p>\r\n\r\n<ul>\r\n	<li>To facilitate our Service;</li>\r\n	<li>To provide the Service on our behalf;</li>\r\n	<li>To perform Service-related services; or</li>\r\n	<li>To assist us in analyzing how our Service is used.</li>\r\n</ul>\r\n\r\n<p>We want to inform our Service users that these third parties have access to your Personal Information. The reason is to perform the tasks assigned to them on our behalf. However, they are obligated not to disclose or use the information for any other purpose.</p>\r\n\r\n<h2>Security</h2>\r\n\r\n<p>We value your trust in providing us your Personal Information, thus we are striving to use commercially acceptable means of protecting it. But remember that no method of transmission over the internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its absolute security.</p>\r\n\r\n<h2>Links to Other Sites</h2>\r\n\r\n<p>Our Service may contain links to other sites. If you click on a third-party link, you will be directed to that site. Note that these external sites are not operated by us. Therefore, we strongly advise you to review the Privacy Policy of these websites. We have no control over, and assume no responsibility for the content, privacy policies, or practices of any third-party sites or services.</p>\r\n\r\n<p>Children&rsquo;s Privacy</p>\r\n\r\n<p>Our Services do not address anyone under the age of 13. We do not knowingly collect personal identifiable information from children under 13. In the case we discover that a child under 13 has provided us with personal information, we immediately delete this from our servers. If you are a parent or guardian and you are aware that your child has provided us with personal information, please contact us so that we will be able to do necessary actions.</p>\r\n\r\n<h2>Changes to This Privacy Policy</h2>\r\n\r\n<p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately, after they are posted on this page.</p>\r\n\r\n<h2>Contact Us</h2>\r\n\r\n<p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.</p>\r\n', '2019-09-04 20:40:19', 15, 1, '0', '0', 0),
(46, 'sys_tc', 'Terms and Conditions', '-', '<h2><strong>Terms and Conditions</strong></h2>\r\n\r\n<p>Welcome to sknr!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of Skinny Rat&#39;s Website, located at sknr.tk.</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use sknr if you do not agree to take all of the terms and conditions stated on this page. Our Terms and Conditions were created with the help of the <a href=\"https://www.termsandconditionsgenerator.com\">Terms And Conditions Generator</a>.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: &quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person log on this website and compliant to the Company&rsquo;s terms and conditions. &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot;, &quot;Our&quot; and &quot;Us&quot;, refers to our Company. &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client&rsquo;s needs in respect of provision of the Company&rsquo;s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing sknr, you agreed to use cookies in agreement with the Skinny Rat&#39;s Privacy Policy.</p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user&rsquo;s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, Skinny Rat and/or its licensors own the intellectual property rights for all material on sknr. All intellectual property rights are reserved. You may access this from sknr for your own personal use subjected to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n\r\n<ul>\r\n	<li>Republish material from sknr</li>\r\n	<li>Sell, rent or sub-license material from sknr</li>\r\n	<li>Reproduce, duplicate or copy material from sknr</li>\r\n	<li>Redistribute content from sknr</li>\r\n</ul>\r\n\r\n<p>This Agreement shall begin on the date hereof.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. Skinny Rat does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of Skinny Rat,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, Skinny Rat shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>Skinny Rat reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n	<li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n	<li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n	<li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n	<li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant Skinny Rat a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n	<li>Government agencies;</li>\r\n	<li>Search engines;</li>\r\n	<li>News organizations;</li>\r\n	<li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n	<li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n	<li>commonly-known consumer and/or business information sources;</li>\r\n	<li>dot.com community sites;</li>\r\n	<li>associations or other groups representing charities;</li>\r\n	<li>online directory distributors;</li>\r\n	<li>internet portals;</li>\r\n	<li>accounting, law and consulting firms; and</li>\r\n	<li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of Skinny Rat; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party&rsquo;s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to Skinny Rat. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n	<li>By use of our corporate name; or</li>\r\n	<li>By use of the uniform resource locator being linked to; or</li>\r\n	<li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party&rsquo;s site.</li>\r\n</ul>\r\n\r\n<p>No use of Skinny Rat&#39;s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<h3><strong>Your Privacy</strong></h3>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it&rsquo;s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n	<li>limit or exclude our or your liability for death or personal injury;</li>\r\n	<li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n	<li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n	<li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>\r\n', '2019-09-04 20:40:30', 15, 3, '0', '0', 0),
(47, 'mail', 'Pembuatan E-mail', '-', '<h1 style=\"text-align:center\">Pembuatan Email @sknr.tk</h1>\r\n\r\n<hr />\r\n<p>Hello World! sknr.tk mengadakan pembuatan email dengan domain yourname@sknr.tk</p>\r\n\r\n<p><strong>Mendaftar</strong>: kirim permintaan pembuatan email ke: <a href=\"mailto:admin@sknr.tk?subject=req_email&amp;body=username%3A%20(...)%40sknr.tk%0Aemail%20aktif%3A%20(...)\">admin@sknr.tk</a><br />\r\n<strong>Format pesan:&nbsp;</strong></p>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong>judul:&nbsp;</strong>req_email<br />\r\n<strong>isi / pesan:&nbsp;</strong><br />\r\nusername: (...)@sknr.tk<br />\r\nemail aktif: (...)</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>note: link konfirmasi dan pembuatan password akan di kirim ke email aktif</p>\r\n\r\n<p>Jika sudah mempunyai akun silahkan login di<br />\r\n<a href=\"https://m.sknr.tk\">https://m.sknr.tk</a></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-09-04 16:20:52', 1, 0, '0', '0', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_article_comment`
--

CREATE TABLE `px_article_comment` (
  `id` bigint(225) NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_parent` bigint(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_article_comment`
--

INSERT INTO `px_article_comment` (`id`, `comment`, `date`, `id_member`, `id_article`, `id_parent`) VALUES
(27, '🙄', '2019-08-20 21:15:10', 1, 29, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_article_comment_dislike`
--

CREATE TABLE `px_article_comment_dislike` (
  `id` bigint(225) NOT NULL,
  `id_article_comment` bigint(225) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_article_comment_like`
--

CREATE TABLE `px_article_comment_like` (
  `id` bigint(225) NOT NULL,
  `id_article_comment` bigint(225) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_article_dislike`
--

CREATE TABLE `px_article_dislike` (
  `id` bigint(225) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_article_like`
--

CREATE TABLE `px_article_like` (
  `id` bigint(225) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_article_like`
--

INSERT INTO `px_article_like` (`id`, `id_article`, `id_member`) VALUES
(7, 29, 14),
(13, 29, 1),
(14, 47, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_change_log`
--

CREATE TABLE `px_change_log` (
  `id` int(225) NOT NULL,
  `judul` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expand` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_change_log`
--

INSERT INTO `px_change_log` (`id`, `judul`, `konten`, `expand`, `status`) VALUES
(1, 'Version 1.0.0', '<p>- No Change Log Because This Feature Not Activate Yet</p>\r\n', 0, 1),
(2, 'Version 1.1.0', '<p>- No Change Log Because This Feature Not Activate Yet</p>\r\n', 0, 1),
(3, 'Version 1.2.0', '<p>- No Change Log Because This Feature Not Activate Yet</p>\r\n', 0, 1),
(4, 'Version 1.3.0', '<p>- No Change Log Because This Feature Not Activate Yet</p>\r\n', 0, 1),
(5, 'Version 2.0.0', '<p>- Add Login Feature (Frontend)<br />\r\n- Add Register Feature&nbsp;(Frontend)<br />\r\n- Add backend Feature&nbsp;(Backend)<br />\r\n- Fix Bugs</p>\r\n', 0, 1),
(6, 'Version 2.0.1', '<p>- Add Management Profile Feature&nbsp;(Frontend)<br />\r\n- Fix Bugs</p>\r\n', 0, 1),
(7, 'Version 2.1.0', '<p>- Add Article Feature&nbsp;(Frontend)<br />\r\n- Security Improvement: Edit data in member session can be hacked&nbsp;(Frontend)<br />\r\n- Fix Bugs</p>\r\n', 0, 1),
(8, 'Version 2.1.1', '<p>- Add Log User Agent Feature (Backend)</p>\n', 0, 1),
(9, 'Version 2.2.0', '<p>- Add Website Setting (Backend)<br />\n- Add Website Alert (Backend)<br />\n- Add Change Log (Backend)<br />\n- Improve Style In Blog/Acricle Page (Frontend)<br />\n- All Table In Frontend Page Now Responsive (Frontend)</p>\n', 0, 1),
(10, 'Version 2.2.1', '<p>- Improve blog page (Frontend)</p>\r\n', 0, 1),
(11, 'Version 2.2.2', '<p>- New Feature - Whatsapp Click to Chat (Frontend)<br />\n- New Share page after creating Short url, Article, or Wa CTC (Frontend)<br />\n- Improve Style In Page Blog (Frontend)<br />\n- Another Improve</p>\n', 0, 1),
(12, 'Version 2.2.3', '<p>- Improve style in page Whatsapp click to chat (Frontend)<br />\r\n- Improve row action in all table (Frontend)<br />\r\n- Improve alert style in all page (Frontend)<br />\r\n- Improve style in page profile (Frontend)</p>\r\n', 0, 1),
(13, 'Version 2.2.4', '<p>- New Feature ! - WhatsApp Chat Without Save<br />\r\n-&nbsp;Fix copy button not working when datatables are responsive</p>\r\n', 0, 1),
(15, 'Version 2.2.5', '<p>- Add Multi Login (Backend)<br />\r\n- Add Many Feature (Backend)<br />\r\n- Improve Alert Style (Frontend)</p>\r\n', 0, 1),
(16, 'Version 2.2.6', '<p>- Add many feature in article (Frontend)<br />\r\n- Add log member register / login (Frontend)<br />\r\n- Other</p>\r\n', 0, 1),
(17, 'Version 2.2.7', '<p>- Add Profile Page (Frontend)<br />\r\n- Other<br />\r\n- Bug Fixed</p>\r\n', 0, 1),
(18, 'Version 2.2.8', '<p>- Add Installation APP (Frontend)<br />\r\n- Change style Article Form (Frontend)<br />\r\n- Blog Improve (Frontend)</p>\r\n', 0, 1),
(19, 'Version 2.2.9', '<p>- Improvement (Frontend)<br />\r\n- Fix Bugs</p>\r\n', 0, 1),
(20, 'Version 2.3.0', '<p>- Upgrade core system to CodeIgniter v3.1.0<br />\r\n- Create readme and license (github)<br />\r\n- Other</p>\r\n', 0, 1),
(21, 'Version 2.3.1', '<p>- Add google ads (Frontend)<br />\r\n- Add create short link with url / api (Frontend)<br />\r\n- Fix bugs</p>\r\n', 0, 1),
(22, 'Version 2.3.2', '<p>- Improve theme (Frontend)<br />\r\n- Bugs Fixed</p>\r\n', 1, 1),
(23, 'Version 2.3.3', '<p>- Add google analytics (Frontend)<br />\r\n- More Feature in Article (Frontend, Backend)<br />\r\n- Many More<br />\r\n- Fix Bugs</p>\r\n', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_icons`
--

CREATE TABLE `px_icons` (
  `id_icons` int(225) NOT NULL,
  `icon` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_icons`
--

INSERT INTO `px_icons` (`id_icons`, `icon`) VALUES
(1, 'fa-ad'),
(2, 'fa-address-book'),
(3, 'fa-address-card'),
(4, 'fa-adjust'),
(5, 'fa-air-freshener'),
(6, 'fa-align-center'),
(7, 'fa-align-justify'),
(8, 'fa-align-left'),
(9, 'fa-align-right'),
(10, 'fa-allergies'),
(11, 'fa-ambulance'),
(12, 'fa-american-sign-language-interpreting'),
(13, 'fa-anchor'),
(14, 'fa-angle-double-down'),
(15, 'fa-angle-double-left'),
(16, 'fa-angle-double-right'),
(17, 'fa-angle-double-up'),
(18, 'fa-angle-down'),
(19, 'fa-angle-left'),
(20, 'fa-angle-right'),
(21, 'fa-angle-up'),
(22, 'fa-angry'),
(23, 'fa-ankh'),
(24, 'fa-apple-alt'),
(25, 'fa-archive'),
(26, 'fa-archway'),
(27, 'fa-arrow-alt-circle-down'),
(28, 'fa-arrow-alt-circle-left'),
(29, 'fa-arrow-alt-circle-right'),
(30, 'fa-arrow-alt-circle-up'),
(31, 'fa-arrow-circle-down'),
(32, 'fa-arrow-circle-left'),
(33, 'fa-arrow-circle-right'),
(34, 'fa-arrow-circle-up'),
(35, 'fa-arrow-down'),
(36, 'fa-arrow-left'),
(37, 'fa-arrow-right'),
(38, 'fa-arrow-up'),
(39, 'fa-arrows-alt'),
(40, 'fa-arrows-alt-h'),
(41, 'fa-arrows-alt-v'),
(42, 'fa-assistive-listening-systems'),
(43, 'fa-asterisk'),
(44, 'fa-at'),
(45, 'fa-atlas'),
(46, 'fa-atom'),
(47, 'fa-audio-description'),
(48, 'fa-award'),
(49, 'fa-baby'),
(50, 'fa-baby-carriage'),
(51, 'fa-backspace'),
(52, 'fa-backward'),
(53, 'fa-bacon'),
(54, 'fa-balance-scale'),
(55, 'fa-ban'),
(56, 'fa-band-aid'),
(57, 'fa-barcode'),
(58, 'fa-bars'),
(59, 'fa-baseball-ball'),
(60, 'fa-basketball-ball'),
(61, 'fa-bath'),
(62, 'fa-battery-empty'),
(63, 'fa-battery-full'),
(64, 'fa-battery-half'),
(65, 'fa-battery-quarter'),
(66, 'fa-battery-three-quarters'),
(67, 'fa-bed'),
(68, 'fa-beer'),
(69, 'fa-bell'),
(70, 'fa-bell-slash'),
(71, 'fa-bezier-curve'),
(72, 'fa-bible'),
(73, 'fa-bicycle'),
(74, 'fa-binoculars'),
(75, 'fa-biohazard'),
(76, 'fa-birthday-cake'),
(77, 'fa-blender'),
(78, 'fa-blender-phone'),
(79, 'fa-blind'),
(80, 'fa-blog'),
(81, 'fa-bold'),
(82, 'fa-bolt'),
(83, 'fa-bomb'),
(84, 'fa-bone'),
(85, 'fa-bong'),
(86, 'fa-book'),
(87, 'fa-book-dead'),
(88, 'fa-book-medical'),
(89, 'fa-book-open'),
(90, 'fa-book-reader'),
(91, 'fa-bookmark'),
(92, 'fa-bowling-ball'),
(93, 'fa-box'),
(94, 'fa-box-open'),
(95, 'fa-boxes'),
(96, 'fa-braille'),
(97, 'fa-brain'),
(98, 'fa-bread-slice'),
(99, 'fa-briefcase'),
(100, 'fa-briefcase-medical'),
(101, 'fa-broadcast-tower'),
(102, 'fa-broom'),
(103, 'fa-brush'),
(104, 'fa-bug'),
(105, 'fa-building'),
(106, 'fa-bullhorn'),
(107, 'fa-bullseye'),
(108, 'fa-burn'),
(109, 'fa-bus'),
(110, 'fa-bus-alt'),
(111, 'fa-business-time'),
(112, 'fa-calculator'),
(113, 'fa-calendar'),
(114, 'fa-calendar-alt'),
(115, 'fa-calendar-check'),
(116, 'fa-calendar-day'),
(117, 'fa-calendar-minus'),
(118, 'fa-calendar-plus'),
(119, 'fa-calendar-times'),
(120, 'fa-calendar-week'),
(121, 'fa-camera'),
(122, 'fa-camera-retro'),
(123, 'fa-campground'),
(124, 'fa-candy-cane'),
(125, 'fa-cannabis'),
(126, 'fa-capsules'),
(127, 'fa-car'),
(128, 'fa-car-alt'),
(129, 'fa-car-battery'),
(130, 'fa-car-crash'),
(131, 'fa-car-side'),
(132, 'fa-caret-down'),
(133, 'fa-caret-left'),
(134, 'fa-caret-right'),
(135, 'fa-caret-square-down'),
(136, 'fa-caret-square-left'),
(137, 'fa-caret-square-right'),
(138, 'fa-caret-square-up'),
(139, 'fa-caret-up'),
(140, 'fa-carrot'),
(141, 'fa-cart-arrow-down'),
(142, 'fa-cart-plus'),
(143, 'fa-cash-register'),
(144, 'fa-cat'),
(145, 'fa-certificate'),
(146, 'fa-chair'),
(147, 'fa-chalkboard'),
(148, 'fa-chalkboard-teacher'),
(149, 'fa-charging-station'),
(150, 'fa-chart-area'),
(151, 'fa-chart-bar'),
(152, 'fa-chart-line'),
(153, 'fa-chart-pie'),
(154, 'fa-check'),
(155, 'fa-check-circle'),
(156, 'fa-check-double'),
(157, 'fa-check-square'),
(158, 'fa-cheese'),
(159, 'fa-chess'),
(160, 'fa-chess-bishop'),
(161, 'fa-chess-board'),
(162, 'fa-chess-king'),
(163, 'fa-chess-knight'),
(164, 'fa-chess-pawn'),
(165, 'fa-chess-queen'),
(166, 'fa-chess-rook'),
(167, 'fa-chevron-circle-down'),
(168, 'fa-chevron-circle-left'),
(169, 'fa-chevron-circle-right'),
(170, 'fa-chevron-circle-up'),
(171, 'fa-chevron-down'),
(172, 'fa-chevron-left'),
(173, 'fa-chevron-right'),
(174, 'fa-chevron-up'),
(175, 'fa-child'),
(176, 'fa-church'),
(177, 'fa-circle'),
(178, 'fa-circle-notch'),
(179, 'fa-city'),
(180, 'fa-clinic-medical'),
(181, 'fa-clipboard'),
(182, 'fa-clipboard-check'),
(183, 'fa-clipboard-list'),
(184, 'fa-clock'),
(185, 'fa-clone'),
(186, 'fa-closed-captioning'),
(187, 'fa-cloud'),
(188, 'fa-cloud-download-alt'),
(189, 'fa-cloud-meatball'),
(190, 'fa-cloud-moon'),
(191, 'fa-cloud-moon-rain'),
(192, 'fa-cloud-rain'),
(193, 'fa-cloud-showers-heavy'),
(194, 'fa-cloud-sun'),
(195, 'fa-cloud-sun-rain'),
(196, 'fa-cloud-upload-alt'),
(197, 'fa-cocktail'),
(198, 'fa-code'),
(199, 'fa-code-branch'),
(200, 'fa-coffee'),
(201, 'fa-cog'),
(202, 'fa-cogs'),
(203, 'fa-coins'),
(204, 'fa-columns'),
(205, 'fa-comment'),
(206, 'fa-comment-alt'),
(207, 'fa-comment-dollar'),
(208, 'fa-comment-dots'),
(209, 'fa-comment-medical'),
(210, 'fa-comment-slash'),
(211, 'fa-comments'),
(212, 'fa-comments-dollar'),
(213, 'fa-compact-disc'),
(214, 'fa-compass'),
(215, 'fa-compress'),
(216, 'fa-compress-arrows-alt'),
(217, 'fa-concierge-bell'),
(218, 'fa-cookie'),
(219, 'fa-cookie-bite'),
(220, 'fa-copy'),
(221, 'fa-copyright'),
(222, 'fa-couch'),
(223, 'fa-credit-card'),
(224, 'fa-crop'),
(225, 'fa-crop-alt'),
(226, 'fa-cross'),
(227, 'fa-crosshairs'),
(228, 'fa-crow'),
(229, 'fa-crown'),
(230, 'fa-crutch'),
(231, 'fa-cube'),
(232, 'fa-cubes'),
(233, 'fa-cut'),
(234, 'fa-database'),
(235, 'fa-deaf'),
(236, 'fa-democrat'),
(237, 'fa-desktop'),
(238, 'fa-dharmachakra'),
(239, 'fa-diagnoses'),
(240, 'fa-dice'),
(241, 'fa-dice-d20'),
(242, 'fa-dice-d6'),
(243, 'fa-dice-five'),
(244, 'fa-dice-four'),
(245, 'fa-dice-one'),
(246, 'fa-dice-six'),
(247, 'fa-dice-three'),
(248, 'fa-dice-two'),
(249, 'fa-digital-tachograph'),
(250, 'fa-directions'),
(251, 'fa-divide'),
(252, 'fa-dizzy'),
(253, 'fa-dna'),
(254, 'fa-dog'),
(255, 'fa-dollar-sign'),
(256, 'fa-dolly'),
(257, 'fa-dolly-flatbed'),
(258, 'fa-donate'),
(259, 'fa-door-closed'),
(260, 'fa-door-open'),
(261, 'fa-dot-circle'),
(262, 'fa-dove'),
(263, 'fa-download'),
(264, 'fa-drafting-compass'),
(265, 'fa-dragon'),
(266, 'fa-draw-polygon'),
(267, 'fa-drum'),
(268, 'fa-drum-steelpan'),
(269, 'fa-drumstick-bite'),
(270, 'fa-dumbbell'),
(271, 'fa-dumpster'),
(272, 'fa-dumpster-fire'),
(273, 'fa-dungeon'),
(274, 'fa-edit'),
(275, 'fa-egg'),
(276, 'fa-eject'),
(277, 'fa-ellipsis-h'),
(278, 'fa-ellipsis-v'),
(279, 'fa-envelope'),
(280, 'fa-envelope-open'),
(281, 'fa-envelope-open-text'),
(282, 'fa-envelope-square'),
(283, 'fa-equals'),
(284, 'fa-eraser'),
(285, 'fa-ethernet'),
(286, 'fa-euro-sign'),
(287, 'fa-exchange-alt'),
(288, 'fa-exclamation'),
(289, 'fa-exclamation-circle'),
(290, 'fa-exclamation-triangle'),
(291, 'fa-expand'),
(292, 'fa-expand-arrows-alt'),
(293, 'fa-external-link-alt'),
(294, 'fa-external-link-square-alt'),
(295, 'fa-eye'),
(296, 'fa-eye-dropper'),
(297, 'fa-eye-slash'),
(298, 'fa-fast-backward'),
(299, 'fa-fast-forward'),
(300, 'fa-fax'),
(301, 'fa-feather'),
(302, 'fa-feather-alt'),
(303, 'fa-female'),
(304, 'fa-fighter-jet'),
(305, 'fa-file'),
(306, 'fa-file-alt'),
(307, 'fa-file-archive'),
(308, 'fa-file-audio'),
(309, 'fa-file-code'),
(310, 'fa-file-contract'),
(311, 'fa-file-csv'),
(312, 'fa-file-download'),
(313, 'fa-file-excel'),
(314, 'fa-file-export'),
(315, 'fa-file-image'),
(316, 'fa-file-import'),
(317, 'fa-file-invoice'),
(318, 'fa-file-invoice-dollar'),
(319, 'fa-file-medical'),
(320, 'fa-file-medical-alt'),
(321, 'fa-file-pdf'),
(322, 'fa-file-powerpoint'),
(323, 'fa-file-prescription'),
(324, 'fa-file-signature'),
(325, 'fa-file-upload'),
(326, 'fa-file-video'),
(327, 'fa-file-word'),
(328, 'fa-fill'),
(329, 'fa-fill-drip'),
(330, 'fa-film'),
(331, 'fa-filter'),
(332, 'fa-fingerprint'),
(333, 'fa-fire'),
(334, 'fa-fire-alt'),
(335, 'fa-fire-extinguisher'),
(336, 'fa-first-aid'),
(337, 'fa-fish'),
(338, 'fa-fist-raised'),
(339, 'fa-flag'),
(340, 'fa-flag-checkered'),
(341, 'fa-flag-usa'),
(342, 'fa-flask'),
(343, 'fa-flushed'),
(344, 'fa-folder'),
(345, 'fa-folder-minus'),
(346, 'fa-folder-open'),
(347, 'fa-folder-plus'),
(348, 'fa-font'),
(349, 'fa-football-ball'),
(350, 'fa-forward'),
(351, 'fa-frog'),
(352, 'fa-frown'),
(353, 'fa-frown-open'),
(354, 'fa-funnel-dollar'),
(355, 'fa-futbol'),
(356, 'fa-gamepad'),
(357, 'fa-gas-pump'),
(358, 'fa-gavel'),
(359, 'fa-gem'),
(360, 'fa-genderless'),
(361, 'fa-ghost'),
(362, 'fa-gift'),
(363, 'fa-gifts'),
(364, 'fa-glass-cheers'),
(365, 'fa-glass-martini'),
(366, 'fa-glass-martini-alt'),
(367, 'fa-glass-whiskey'),
(368, 'fa-glasses'),
(369, 'fa-globe'),
(370, 'fa-globe-africa'),
(371, 'fa-globe-americas'),
(372, 'fa-globe-asia'),
(373, 'fa-globe-europe'),
(374, 'fa-golf-ball'),
(375, 'fa-gopuram'),
(376, 'fa-graduation-cap'),
(377, 'fa-greater-than'),
(378, 'fa-greater-than-equal'),
(379, 'fa-grimace'),
(380, 'fa-grin'),
(381, 'fa-grin-alt'),
(382, 'fa-grin-beam'),
(383, 'fa-grin-beam-sweat'),
(384, 'fa-grin-hearts'),
(385, 'fa-grin-squint'),
(386, 'fa-grin-squint-tears'),
(387, 'fa-grin-stars'),
(388, 'fa-grin-tears'),
(389, 'fa-grin-tongue'),
(390, 'fa-grin-tongue-squint'),
(391, 'fa-grin-tongue-wink'),
(392, 'fa-grin-wink'),
(393, 'fa-grip-horizontal'),
(394, 'fa-grip-lines'),
(395, 'fa-grip-lines-vertical'),
(396, 'fa-grip-vertical'),
(397, 'fa-guitar'),
(398, 'fa-h-square'),
(399, 'fa-hamburger'),
(400, 'fa-hammer'),
(401, 'fa-hamsa'),
(402, 'fa-hand-holding'),
(403, 'fa-hand-holding-heart'),
(404, 'fa-hand-holding-usd'),
(405, 'fa-hand-lizard'),
(406, 'fa-hand-middle-finger'),
(407, 'fa-hand-paper'),
(408, 'fa-hand-peace'),
(409, 'fa-hand-point-down'),
(410, 'fa-hand-point-left'),
(411, 'fa-hand-point-right'),
(412, 'fa-hand-point-up'),
(413, 'fa-hand-pointer'),
(414, 'fa-hand-rock'),
(415, 'fa-hand-scissors'),
(416, 'fa-hand-spock'),
(417, 'fa-hands'),
(418, 'fa-hands-helping'),
(419, 'fa-handshake'),
(420, 'fa-hanukiah'),
(421, 'fa-hard-hat'),
(422, 'fa-hashtag'),
(423, 'fa-hat-wizard'),
(424, 'fa-haykal'),
(425, 'fa-hdd'),
(426, 'fa-heading'),
(427, 'fa-headphones'),
(428, 'fa-headphones-alt'),
(429, 'fa-headset'),
(430, 'fa-heart'),
(431, 'fa-heart-broken'),
(432, 'fa-heartbeat'),
(433, 'fa-helicopter'),
(434, 'fa-highlighter'),
(435, 'fa-hiking'),
(436, 'fa-hippo'),
(437, 'fa-history'),
(438, 'fa-hockey-puck'),
(439, 'fa-holly-berry'),
(440, 'fa-home'),
(441, 'fa-horse'),
(442, 'fa-horse-head'),
(443, 'fa-hospital'),
(444, 'fa-hospital-alt'),
(445, 'fa-hospital-symbol'),
(446, 'fa-hot-tub'),
(447, 'fa-hotdog'),
(448, 'fa-hotel'),
(449, 'fa-hourglass'),
(450, 'fa-hourglass-end'),
(451, 'fa-hourglass-half'),
(452, 'fa-hourglass-start'),
(453, 'fa-house-damage'),
(454, 'fa-hryvnia'),
(455, 'fa-i-cursor'),
(456, 'fa-ice-cream'),
(457, 'fa-icicles'),
(458, 'fa-id-badge'),
(459, 'fa-id-card'),
(460, 'fa-id-card-alt'),
(461, 'fa-igloo'),
(462, 'fa-image'),
(463, 'fa-images'),
(464, 'fa-inbox'),
(465, 'fa-indent'),
(466, 'fa-industry'),
(467, 'fa-infinity'),
(468, 'fa-info'),
(469, 'fa-info-circle'),
(470, 'fa-italic'),
(471, 'fa-jedi'),
(472, 'fa-joint'),
(473, 'fa-journal-whills'),
(474, 'fa-kaaba'),
(475, 'fa-key'),
(476, 'fa-keyboard'),
(477, 'fa-khanda'),
(478, 'fa-kiss'),
(479, 'fa-kiss-beam'),
(480, 'fa-kiss-wink-heart'),
(481, 'fa-kiwi-bird'),
(482, 'fa-landmark'),
(483, 'fa-language'),
(484, 'fa-laptop'),
(485, 'fa-laptop-code'),
(486, 'fa-laptop-medical'),
(487, 'fa-laugh'),
(488, 'fa-laugh-beam'),
(489, 'fa-laugh-squint'),
(490, 'fa-laugh-wink'),
(491, 'fa-layer-group'),
(492, 'fa-leaf'),
(493, 'fa-lemon'),
(494, 'fa-less-than'),
(495, 'fa-less-than-equal'),
(496, 'fa-level-down-alt'),
(497, 'fa-level-up-alt'),
(498, 'fa-life-ring'),
(499, 'fa-lightbulb'),
(500, 'fa-link'),
(501, 'fa-lira-sign'),
(502, 'fa-list'),
(503, 'fa-list-alt'),
(504, 'fa-list-ol'),
(505, 'fa-list-ul'),
(506, 'fa-location-arrow'),
(507, 'fa-lock'),
(508, 'fa-lock-open'),
(509, 'fa-long-arrow-alt-down'),
(510, 'fa-long-arrow-alt-left'),
(511, 'fa-long-arrow-alt-right'),
(512, 'fa-long-arrow-alt-up'),
(513, 'fa-low-vision'),
(514, 'fa-luggage-cart'),
(515, 'fa-magic'),
(516, 'fa-magnet'),
(517, 'fa-mail-bulk'),
(518, 'fa-male'),
(519, 'fa-map'),
(520, 'fa-map-marked'),
(521, 'fa-map-marked-alt'),
(522, 'fa-map-marker'),
(523, 'fa-map-marker-alt'),
(524, 'fa-map-pin'),
(525, 'fa-map-signs'),
(526, 'fa-marker'),
(527, 'fa-mars'),
(528, 'fa-mars-double'),
(529, 'fa-mars-stroke'),
(530, 'fa-mars-stroke-h'),
(531, 'fa-mars-stroke-v'),
(532, 'fa-mask'),
(533, 'fa-medal'),
(534, 'fa-medkit'),
(535, 'fa-meh'),
(536, 'fa-meh-blank'),
(537, 'fa-meh-rolling-eyes'),
(538, 'fa-memory'),
(539, 'fa-menorah'),
(540, 'fa-mercury'),
(541, 'fa-meteor'),
(542, 'fa-microchip'),
(543, 'fa-microphone'),
(544, 'fa-microphone-alt'),
(545, 'fa-microphone-alt-slash'),
(546, 'fa-microphone-slash'),
(547, 'fa-microscope'),
(548, 'fa-minus'),
(549, 'fa-minus-circle'),
(550, 'fa-minus-square'),
(551, 'fa-mitten'),
(552, 'fa-mobile'),
(553, 'fa-mobile-alt'),
(554, 'fa-money-bill'),
(555, 'fa-money-bill-alt'),
(556, 'fa-money-bill-wave'),
(557, 'fa-money-bill-wave-alt'),
(558, 'fa-money-check'),
(559, 'fa-money-check-alt'),
(560, 'fa-monument'),
(561, 'fa-moon'),
(562, 'fa-mortar-pestle'),
(563, 'fa-mosque'),
(564, 'fa-motorcycle'),
(565, 'fa-mountain'),
(566, 'fa-mouse-pointer'),
(567, 'fa-mug-hot'),
(568, 'fa-music'),
(569, 'fa-network-wired'),
(570, 'fa-neuter'),
(571, 'fa-newspaper'),
(572, 'fa-not-equal'),
(573, 'fa-notes-medical'),
(574, 'fa-object-group'),
(575, 'fa-object-ungroup'),
(576, 'fa-oil-can'),
(577, 'fa-om'),
(578, 'fa-otter'),
(579, 'fa-outdent'),
(580, 'fa-pager'),
(581, 'fa-paint-brush'),
(582, 'fa-paint-roller'),
(583, 'fa-palette'),
(584, 'fa-pallet'),
(585, 'fa-paper-plane'),
(586, 'fa-paperclip'),
(587, 'fa-parachute-box'),
(588, 'fa-paragraph'),
(589, 'fa-parking'),
(590, 'fa-passport'),
(591, 'fa-pastafarianism'),
(592, 'fa-paste'),
(593, 'fa-pause'),
(594, 'fa-pause-circle'),
(595, 'fa-paw'),
(596, 'fa-peace'),
(597, 'fa-pen'),
(598, 'fa-pen-alt'),
(599, 'fa-pen-fancy'),
(600, 'fa-pen-nib'),
(601, 'fa-pen-square'),
(602, 'fa-pencil-alt'),
(603, 'fa-pencil-ruler'),
(604, 'fa-people-carry'),
(605, 'fa-pepper-hot'),
(606, 'fa-percent'),
(607, 'fa-percentage'),
(608, 'fa-person-booth'),
(609, 'fa-phone'),
(610, 'fa-phone-slash'),
(611, 'fa-phone-square'),
(612, 'fa-phone-volume'),
(613, 'fa-piggy-bank'),
(614, 'fa-pills'),
(615, 'fa-pizza-slice'),
(616, 'fa-place-of-worship'),
(617, 'fa-plane'),
(618, 'fa-plane-arrival'),
(619, 'fa-plane-departure'),
(620, 'fa-play'),
(621, 'fa-play-circle'),
(622, 'fa-plug'),
(623, 'fa-plus'),
(624, 'fa-plus-circle'),
(625, 'fa-plus-square'),
(626, 'fa-podcast'),
(627, 'fa-poll'),
(628, 'fa-poll-h'),
(629, 'fa-poo'),
(630, 'fa-poo-storm'),
(631, 'fa-poop'),
(632, 'fa-portrait'),
(633, 'fa-pound-sign'),
(634, 'fa-power-off'),
(635, 'fa-pray'),
(636, 'fa-praying-hands'),
(637, 'fa-prescription'),
(638, 'fa-prescription-bottle'),
(639, 'fa-prescription-bottle-alt'),
(640, 'fa-print'),
(641, 'fa-procedures'),
(642, 'fa-project-diagram'),
(643, 'fa-puzzle-piece'),
(644, 'fa-qrcode'),
(645, 'fa-question'),
(646, 'fa-question-circle'),
(647, 'fa-quidditch'),
(648, 'fa-quote-left'),
(649, 'fa-quote-right'),
(650, 'fa-quran'),
(651, 'fa-radiation'),
(652, 'fa-radiation-alt'),
(653, 'fa-rainbow'),
(654, 'fa-random'),
(655, 'fa-receipt'),
(656, 'fa-recycle'),
(657, 'fa-redo'),
(658, 'fa-redo-alt'),
(659, 'fa-registered'),
(660, 'fa-reply'),
(661, 'fa-reply-all'),
(662, 'fa-republican'),
(663, 'fa-restroom'),
(664, 'fa-retweet'),
(665, 'fa-ribbon'),
(666, 'fa-ring'),
(667, 'fa-road'),
(668, 'fa-robot'),
(669, 'fa-rocket'),
(670, 'fa-route'),
(671, 'fa-rss'),
(672, 'fa-rss-square'),
(673, 'fa-ruble-sign'),
(674, 'fa-ruler'),
(675, 'fa-ruler-combined'),
(676, 'fa-ruler-horizontal'),
(677, 'fa-ruler-vertical'),
(678, 'fa-running'),
(679, 'fa-rupee-sign'),
(680, 'fa-sad-cry'),
(681, 'fa-sad-tear'),
(682, 'fa-satellite'),
(683, 'fa-satellite-dish'),
(684, 'fa-save'),
(685, 'fa-school'),
(686, 'fa-screwdriver'),
(687, 'fa-scroll'),
(688, 'fa-sd-card'),
(689, 'fa-search'),
(690, 'fa-search-dollar'),
(691, 'fa-search-location'),
(692, 'fa-search-minus'),
(693, 'fa-search-plus'),
(694, 'fa-seedling'),
(695, 'fa-server'),
(696, 'fa-shapes'),
(697, 'fa-share'),
(698, 'fa-share-alt'),
(699, 'fa-share-alt-square'),
(700, 'fa-share-square'),
(701, 'fa-shekel-sign'),
(702, 'fa-shield-alt'),
(703, 'fa-ship'),
(704, 'fa-shipping-fast'),
(705, 'fa-shoe-prints'),
(706, 'fa-shopping-bag'),
(707, 'fa-shopping-basket'),
(708, 'fa-shopping-cart'),
(709, 'fa-shower'),
(710, 'fa-shuttle-van'),
(711, 'fa-sign'),
(712, 'fa-sign-in-alt'),
(713, 'fa-sign-language'),
(714, 'fa-sign-out-alt'),
(715, 'fa-signal'),
(716, 'fa-signature'),
(717, 'fa-sim-card'),
(718, 'fa-sitemap'),
(719, 'fa-skating'),
(720, 'fa-skiing'),
(721, 'fa-skiing-nordic'),
(722, 'fa-skull'),
(723, 'fa-skull-crossbones'),
(724, 'fa-slash'),
(725, 'fa-sleigh'),
(726, 'fa-sliders-h'),
(727, 'fa-smile'),
(728, 'fa-smile-beam'),
(729, 'fa-smile-wink'),
(730, 'fa-smog'),
(731, 'fa-smoking'),
(732, 'fa-smoking-ban'),
(733, 'fa-sms'),
(734, 'fa-snowboarding'),
(735, 'fa-snowflake'),
(736, 'fa-snowman'),
(737, 'fa-snowplow'),
(738, 'fa-socks'),
(739, 'fa-solar-panel'),
(740, 'fa-sort'),
(741, 'fa-sort-alpha-down'),
(742, 'fa-sort-alpha-up'),
(743, 'fa-sort-amount-down'),
(744, 'fa-sort-amount-up'),
(745, 'fa-sort-down'),
(746, 'fa-sort-numeric-down'),
(747, 'fa-sort-numeric-up'),
(748, 'fa-sort-up'),
(749, 'fa-spa'),
(750, 'fa-space-shuttle'),
(751, 'fa-spider'),
(752, 'fa-spinner'),
(753, 'fa-splotch'),
(754, 'fa-spray-can'),
(755, 'fa-square'),
(756, 'fa-square-full'),
(757, 'fa-square-root-alt'),
(758, 'fa-stamp'),
(759, 'fa-star'),
(760, 'fa-star-and-crescent'),
(761, 'fa-star-half'),
(762, 'fa-star-half-alt'),
(763, 'fa-star-of-david'),
(764, 'fa-star-of-life'),
(765, 'fa-step-backward'),
(766, 'fa-step-forward'),
(767, 'fa-stethoscope'),
(768, 'fa-sticky-note'),
(769, 'fa-stop'),
(770, 'fa-stop-circle'),
(771, 'fa-stopwatch'),
(772, 'fa-store'),
(773, 'fa-store-alt'),
(774, 'fa-stream'),
(775, 'fa-street-view'),
(776, 'fa-strikethrough'),
(777, 'fa-stroopwafel'),
(778, 'fa-subscript'),
(779, 'fa-subway'),
(780, 'fa-suitcase'),
(781, 'fa-suitcase-rolling'),
(782, 'fa-sun'),
(783, 'fa-superscript'),
(784, 'fa-surprise'),
(785, 'fa-swatchbook'),
(786, 'fa-swimmer'),
(787, 'fa-swimming-pool'),
(788, 'fa-synagogue'),
(789, 'fa-sync'),
(790, 'fa-sync-alt'),
(791, 'fa-syringe'),
(792, 'fa-table'),
(793, 'fa-table-tennis'),
(794, 'fa-tablet'),
(795, 'fa-tablet-alt'),
(796, 'fa-tablets'),
(797, 'fa-tachometer-alt'),
(798, 'fa-tag'),
(799, 'fa-tags'),
(800, 'fa-tape'),
(801, 'fa-tasks'),
(802, 'fa-taxi'),
(803, 'fa-teeth'),
(804, 'fa-teeth-open'),
(805, 'fa-temperature-high'),
(806, 'fa-temperature-low'),
(807, 'fa-tenge'),
(808, 'fa-terminal'),
(809, 'fa-text-height'),
(810, 'fa-text-width'),
(811, 'fa-th'),
(812, 'fa-th-large'),
(813, 'fa-th-list'),
(814, 'fa-theater-masks'),
(815, 'fa-thermometer'),
(816, 'fa-thermometer-empty'),
(817, 'fa-thermometer-full'),
(818, 'fa-thermometer-half'),
(819, 'fa-thermometer-quarter'),
(820, 'fa-thermometer-three-quarters'),
(821, 'fa-thumbs-down'),
(822, 'fa-thumbs-up'),
(823, 'fa-thumbtack'),
(824, 'fa-ticket-alt'),
(825, 'fa-times'),
(826, 'fa-times-circle'),
(827, 'fa-tint'),
(828, 'fa-tint-slash'),
(829, 'fa-tired'),
(830, 'fa-toggle-off'),
(831, 'fa-toggle-on'),
(832, 'fa-toilet'),
(833, 'fa-toilet-paper'),
(834, 'fa-toolbox'),
(835, 'fa-tools'),
(836, 'fa-tooth'),
(837, 'fa-torah'),
(838, 'fa-torii-gate'),
(839, 'fa-tractor'),
(840, 'fa-trademark'),
(841, 'fa-traffic-light'),
(842, 'fa-train'),
(843, 'fa-tram'),
(844, 'fa-transgender'),
(845, 'fa-transgender-alt'),
(846, 'fa-trash'),
(847, 'fa-trash-alt'),
(848, 'fa-trash-restore'),
(849, 'fa-trash-restore-alt'),
(850, 'fa-tree'),
(851, 'fa-trophy'),
(852, 'fa-truck'),
(853, 'fa-truck-loading'),
(854, 'fa-truck-monster'),
(855, 'fa-truck-moving'),
(856, 'fa-truck-pickup'),
(857, 'fa-tshirt'),
(858, 'fa-tty'),
(859, 'fa-tv'),
(860, 'fa-umbrella'),
(861, 'fa-umbrella-beach'),
(862, 'fa-underline'),
(863, 'fa-undo'),
(864, 'fa-undo-alt'),
(865, 'fa-universal-access'),
(866, 'fa-university'),
(867, 'fa-unlink'),
(868, 'fa-unlock'),
(869, 'fa-unlock-alt'),
(870, 'fa-upload'),
(871, 'fa-user'),
(872, 'fa-user-alt'),
(873, 'fa-user-alt-slash'),
(874, 'fa-user-astronaut'),
(875, 'fa-user-check'),
(876, 'fa-user-circle'),
(877, 'fa-user-clock'),
(878, 'fa-user-cog'),
(879, 'fa-user-edit'),
(880, 'fa-user-friends'),
(881, 'fa-user-graduate'),
(882, 'fa-user-injured'),
(883, 'fa-user-lock'),
(884, 'fa-user-md'),
(885, 'fa-user-minus'),
(886, 'fa-user-ninja'),
(887, 'fa-user-nurse'),
(888, 'fa-user-plus'),
(889, 'fa-user-secret'),
(890, 'fa-user-shield'),
(891, 'fa-user-slash'),
(892, 'fa-user-tag'),
(893, 'fa-user-tie'),
(894, 'fa-user-times'),
(895, 'fa-users'),
(896, 'fa-users-cog'),
(897, 'fa-utensil-spoon'),
(898, 'fa-utensils'),
(899, 'fa-vector-square'),
(900, 'fa-venus'),
(901, 'fa-venus-double'),
(902, 'fa-venus-mars'),
(903, 'fa-vial'),
(904, 'fa-vials'),
(905, 'fa-video'),
(906, 'fa-video-slash'),
(907, 'fa-vihara'),
(908, 'fa-volleyball-ball'),
(909, 'fa-volume-down'),
(910, 'fa-volume-mute'),
(911, 'fa-volume-off'),
(912, 'fa-volume-up'),
(913, 'fa-vote-yea'),
(914, 'fa-vr-cardboard'),
(915, 'fa-walking'),
(916, 'fa-wallet'),
(917, 'fa-warehouse'),
(918, 'fa-water'),
(919, 'fa-wave-square'),
(920, 'fa-weight'),
(921, 'fa-weight-hanging'),
(922, 'fa-wheelchair'),
(923, 'fa-wifi'),
(924, 'fa-wind'),
(925, 'fa-window-close'),
(926, 'fa-window-maximize'),
(927, 'fa-window-minimize'),
(928, 'fa-window-restore'),
(929, 'fa-wine-bottle'),
(930, 'fa-wine-glass'),
(931, 'fa-wine-glass-alt'),
(932, 'fa-won-sign'),
(933, 'fa-wrench'),
(934, 'fa-x-ray'),
(935, 'fa-yen-sign'),
(936, 'fa-yin-yang'),
(937, 'fa-500px'),
(938, 'fa-accessible-icon'),
(939, 'fa-accusoft'),
(940, 'fa-acquisitions-incorporated'),
(941, 'fa-adn'),
(942, 'fa-adobe'),
(943, 'fa-adversal'),
(944, 'fa-affiliatetheme'),
(945, 'fa-airbnb'),
(946, 'fa-algolia'),
(947, 'fa-alipay'),
(948, 'fa-amazon'),
(949, 'fa-amazon-pay'),
(950, 'fa-amilia'),
(951, 'fa-android'),
(952, 'fa-angellist'),
(953, 'fa-angrycreative'),
(954, 'fa-angular'),
(955, 'fa-app-store'),
(956, 'fa-app-store-ios'),
(957, 'fa-apper'),
(958, 'fa-apple'),
(959, 'fa-apple-pay'),
(960, 'fa-artstation'),
(961, 'fa-asymmetrik'),
(962, 'fa-atlassian'),
(963, 'fa-audible'),
(964, 'fa-autoprefixer'),
(965, 'fa-avianex'),
(966, 'fa-aviato'),
(967, 'fa-aws'),
(968, 'fa-bandcamp'),
(969, 'fa-battle-net'),
(970, 'fa-behance'),
(971, 'fa-behance-square'),
(972, 'fa-bimobject'),
(973, 'fa-bitbucket'),
(974, 'fa-bitcoin'),
(975, 'fa-bity'),
(976, 'fa-black-tie'),
(977, 'fa-blackberry'),
(978, 'fa-blogger'),
(979, 'fa-blogger-b'),
(980, 'fa-bluetooth'),
(981, 'fa-bluetooth-b'),
(982, 'fa-bootstrap'),
(983, 'fa-btc'),
(984, 'fa-buffer'),
(985, 'fa-buromobelexperte'),
(986, 'fa-buysellads'),
(987, 'fa-canadian-maple-leaf'),
(988, 'fa-cc-amazon-pay'),
(989, 'fa-cc-amex'),
(990, 'fa-cc-apple-pay'),
(991, 'fa-cc-diners-club'),
(992, 'fa-cc-discover'),
(993, 'fa-cc-jcb'),
(994, 'fa-cc-mastercard'),
(995, 'fa-cc-paypal'),
(996, 'fa-cc-stripe'),
(997, 'fa-cc-visa'),
(998, 'fa-centercode'),
(999, 'fa-centos'),
(1000, 'fa-chrome'),
(1001, 'fa-chromecast'),
(1002, 'fa-cloudscale'),
(1003, 'fa-cloudsmith'),
(1004, 'fa-cloudversify'),
(1005, 'fa-codepen'),
(1006, 'fa-codiepie'),
(1007, 'fa-confluence'),
(1008, 'fa-connectdevelop'),
(1009, 'fa-contao'),
(1010, 'fa-cpanel'),
(1011, 'fa-creative-commons'),
(1012, 'fa-creative-commons-by'),
(1013, 'fa-creative-commons-nc'),
(1014, 'fa-creative-commons-nc-eu'),
(1015, 'fa-creative-commons-nc-jp'),
(1016, 'fa-creative-commons-nd'),
(1017, 'fa-creative-commons-pd'),
(1018, 'fa-creative-commons-pd-alt'),
(1019, 'fa-creative-commons-remix'),
(1020, 'fa-creative-commons-sa'),
(1021, 'fa-creative-commons-sampling'),
(1022, 'fa-creative-commons-sampling-plus'),
(1023, 'fa-creative-commons-share'),
(1024, 'fa-creative-commons-zero'),
(1025, 'fa-critical-role'),
(1026, 'fa-css3'),
(1027, 'fa-css3-alt'),
(1028, 'fa-cuttlefish'),
(1029, 'fa-d-and-d'),
(1030, 'fa-d-and-d-beyond'),
(1031, 'fa-dashcube'),
(1032, 'fa-delicious'),
(1033, 'fa-deploydog'),
(1034, 'fa-deskpro'),
(1035, 'fa-dev'),
(1036, 'fa-deviantart'),
(1037, 'fa-dhl'),
(1038, 'fa-diaspora'),
(1039, 'fa-digg'),
(1040, 'fa-digital-ocean'),
(1041, 'fa-discord'),
(1042, 'fa-discourse'),
(1043, 'fa-dochub'),
(1044, 'fa-docker'),
(1045, 'fa-draft2digital'),
(1046, 'fa-dribbble'),
(1047, 'fa-dribbble-square'),
(1048, 'fa-dropbox'),
(1049, 'fa-drupal'),
(1050, 'fa-dyalog'),
(1051, 'fa-earlybirds'),
(1052, 'fa-ebay'),
(1053, 'fa-edge'),
(1054, 'fa-elementor'),
(1055, 'fa-ello'),
(1056, 'fa-ember'),
(1057, 'fa-empire'),
(1058, 'fa-envira'),
(1059, 'fa-erlang'),
(1060, 'fa-ethereum'),
(1061, 'fa-etsy'),
(1062, 'fa-evernote'),
(1063, 'fa-expeditedssl'),
(1064, 'fa-facebook'),
(1065, 'fa-facebook-f'),
(1066, 'fa-facebook-messenger'),
(1067, 'fa-facebook-square'),
(1068, 'fa-fantasy-flight-games'),
(1069, 'fa-fedex'),
(1070, 'fa-fedora'),
(1071, 'fa-figma'),
(1072, 'fa-firefox'),
(1073, 'fa-first-order'),
(1074, 'fa-first-order-alt'),
(1075, 'fa-firstdraft'),
(1076, 'fa-flickr'),
(1077, 'fa-flipboard'),
(1078, 'fa-fly'),
(1079, 'fa-font-awesome'),
(1080, 'fa-font-awesome-alt'),
(1081, 'fa-font-awesome-flag'),
(1082, 'fa-fonticons'),
(1083, 'fa-fonticons-fi'),
(1084, 'fa-fort-awesome'),
(1085, 'fa-fort-awesome-alt'),
(1086, 'fa-forumbee'),
(1087, 'fa-foursquare'),
(1088, 'fa-free-code-camp'),
(1089, 'fa-freebsd'),
(1090, 'fa-fulcrum'),
(1091, 'fa-galactic-republic'),
(1092, 'fa-galactic-senate'),
(1093, 'fa-get-pocket'),
(1094, 'fa-gg'),
(1095, 'fa-gg-circle'),
(1096, 'fa-git'),
(1097, 'fa-git-alt'),
(1098, 'fa-git-square'),
(1099, 'fa-github'),
(1100, 'fa-github-alt'),
(1101, 'fa-github-square'),
(1102, 'fa-gitkraken'),
(1103, 'fa-gitlab'),
(1104, 'fa-gitter'),
(1105, 'fa-glide'),
(1106, 'fa-glide-g'),
(1107, 'fa-gofore'),
(1108, 'fa-goodreads'),
(1109, 'fa-goodreads-g'),
(1110, 'fa-google'),
(1111, 'fa-google-drive'),
(1112, 'fa-google-play'),
(1113, 'fa-google-plus'),
(1114, 'fa-google-plus-g'),
(1115, 'fa-google-plus-square'),
(1116, 'fa-google-wallet'),
(1117, 'fa-gratipay'),
(1118, 'fa-grav'),
(1119, 'fa-gripfire'),
(1120, 'fa-grunt'),
(1121, 'fa-gulp'),
(1122, 'fa-hacker-news'),
(1123, 'fa-hacker-news-square'),
(1124, 'fa-hackerrank'),
(1125, 'fa-hips'),
(1126, 'fa-hire-a-helper'),
(1127, 'fa-hooli'),
(1128, 'fa-hornbill'),
(1129, 'fa-hotjar'),
(1130, 'fa-houzz'),
(1131, 'fa-html5'),
(1132, 'fa-hubspot'),
(1133, 'fa-imdb'),
(1134, 'fa-instagram'),
(1135, 'fa-intercom'),
(1136, 'fa-internet-explorer'),
(1137, 'fa-invision'),
(1138, 'fa-ioxhost'),
(1139, 'fa-itch-io'),
(1140, 'fa-itunes'),
(1141, 'fa-itunes-note'),
(1142, 'fa-java'),
(1143, 'fa-jedi-order'),
(1144, 'fa-jenkins'),
(1145, 'fa-jira'),
(1146, 'fa-joget'),
(1147, 'fa-joomla'),
(1148, 'fa-js'),
(1149, 'fa-js-square'),
(1150, 'fa-jsfiddle'),
(1151, 'fa-kaggle'),
(1152, 'fa-keybase'),
(1153, 'fa-keycdn'),
(1154, 'fa-kickstarter'),
(1155, 'fa-kickstarter-k'),
(1156, 'fa-korvue'),
(1157, 'fa-laravel'),
(1158, 'fa-lastfm'),
(1159, 'fa-lastfm-square'),
(1160, 'fa-leanpub'),
(1161, 'fa-less'),
(1162, 'fa-line'),
(1163, 'fa-linkedin'),
(1164, 'fa-linkedin-in'),
(1165, 'fa-linode'),
(1166, 'fa-linux'),
(1167, 'fa-lyft'),
(1168, 'fa-magento'),
(1169, 'fa-mailchimp'),
(1170, 'fa-mandalorian'),
(1171, 'fa-markdown'),
(1172, 'fa-mastodon'),
(1173, 'fa-maxcdn'),
(1174, 'fa-medapps'),
(1175, 'fa-medium'),
(1176, 'fa-medium-m'),
(1177, 'fa-medrt'),
(1178, 'fa-meetup'),
(1179, 'fa-megaport'),
(1180, 'fa-mendeley'),
(1181, 'fa-microsoft'),
(1182, 'fa-mix'),
(1183, 'fa-mixcloud'),
(1184, 'fa-mizuni'),
(1185, 'fa-modx'),
(1186, 'fa-monero'),
(1187, 'fa-napster'),
(1188, 'fa-neos'),
(1189, 'fa-nimblr'),
(1190, 'fa-nintendo-switch'),
(1191, 'fa-node'),
(1192, 'fa-node-js'),
(1193, 'fa-npm'),
(1194, 'fa-ns8'),
(1195, 'fa-nutritionix'),
(1196, 'fa-odnoklassniki'),
(1197, 'fa-odnoklassniki-square'),
(1198, 'fa-old-republic'),
(1199, 'fa-opencart'),
(1200, 'fa-openid'),
(1201, 'fa-opera'),
(1202, 'fa-optin-monster'),
(1203, 'fa-osi'),
(1204, 'fa-page4'),
(1205, 'fa-pagelines'),
(1206, 'fa-palfed'),
(1207, 'fa-patreon'),
(1208, 'fa-paypal'),
(1209, 'fa-penny-arcade'),
(1210, 'fa-periscope'),
(1211, 'fa-phabricator'),
(1212, 'fa-phoenix-framework'),
(1213, 'fa-phoenix-squadron'),
(1214, 'fa-php'),
(1215, 'fa-pied-piper'),
(1216, 'fa-pied-piper-alt'),
(1217, 'fa-pied-piper-hat'),
(1218, 'fa-pied-piper-pp'),
(1219, 'fa-pinterest'),
(1220, 'fa-pinterest-p'),
(1221, 'fa-pinterest-square'),
(1222, 'fa-playstation'),
(1223, 'fa-product-hunt'),
(1224, 'fa-pushed'),
(1225, 'fa-python'),
(1226, 'fa-qq'),
(1227, 'fa-quinscape'),
(1228, 'fa-quora'),
(1229, 'fa-r-project'),
(1230, 'fa-raspberry-pi'),
(1231, 'fa-ravelry'),
(1232, 'fa-react'),
(1233, 'fa-reacteurope'),
(1234, 'fa-readme'),
(1235, 'fa-rebel'),
(1236, 'fa-red-river'),
(1237, 'fa-reddit'),
(1238, 'fa-reddit-alien'),
(1239, 'fa-reddit-square'),
(1240, 'fa-redhat'),
(1241, 'fa-renren'),
(1242, 'fa-replyd'),
(1243, 'fa-researchgate'),
(1244, 'fa-resolving'),
(1245, 'fa-rev'),
(1246, 'fa-rocketchat'),
(1247, 'fa-rockrms'),
(1248, 'fa-safari'),
(1249, 'fa-salesforce'),
(1250, 'fa-sass'),
(1251, 'fa-schlix'),
(1252, 'fa-scribd'),
(1253, 'fa-searchengin'),
(1254, 'fa-sellcast'),
(1255, 'fa-sellsy'),
(1256, 'fa-servicestack'),
(1257, 'fa-shirtsinbulk'),
(1258, 'fa-shopware'),
(1259, 'fa-simplybuilt'),
(1260, 'fa-sistrix'),
(1261, 'fa-sith'),
(1262, 'fa-sketch'),
(1263, 'fa-skyatlas'),
(1264, 'fa-skype'),
(1265, 'fa-slack'),
(1266, 'fa-slack-hash'),
(1267, 'fa-slideshare'),
(1268, 'fa-snapchat'),
(1269, 'fa-snapchat-ghost'),
(1270, 'fa-snapchat-square'),
(1271, 'fa-soundcloud'),
(1272, 'fa-sourcetree'),
(1273, 'fa-speakap'),
(1274, 'fa-speaker-deck'),
(1275, 'fa-spotify'),
(1276, 'fa-squarespace'),
(1277, 'fa-stack-exchange'),
(1278, 'fa-stack-overflow'),
(1279, 'fa-stackpath'),
(1280, 'fa-staylinked'),
(1281, 'fa-steam'),
(1282, 'fa-steam-square'),
(1283, 'fa-steam-symbol'),
(1284, 'fa-sticker-mule'),
(1285, 'fa-strava'),
(1286, 'fa-stripe'),
(1287, 'fa-stripe-s'),
(1288, 'fa-studiovinari'),
(1289, 'fa-stumbleupon'),
(1290, 'fa-stumbleupon-circle'),
(1291, 'fa-superpowers'),
(1292, 'fa-supple'),
(1293, 'fa-suse'),
(1294, 'fa-symfony'),
(1295, 'fa-teamspeak'),
(1296, 'fa-telegram'),
(1297, 'fa-telegram-plane'),
(1298, 'fa-tencent-weibo'),
(1299, 'fa-the-red-yeti'),
(1300, 'fa-themeco'),
(1301, 'fa-themeisle'),
(1302, 'fa-think-peaks'),
(1303, 'fa-trade-federation'),
(1304, 'fa-trello'),
(1305, 'fa-tripadvisor'),
(1306, 'fa-tumblr'),
(1307, 'fa-tumblr-square'),
(1308, 'fa-twitch'),
(1309, 'fa-twitter'),
(1310, 'fa-twitter-square'),
(1311, 'fa-typo3'),
(1312, 'fa-uber'),
(1313, 'fa-ubuntu'),
(1314, 'fa-uikit'),
(1315, 'fa-uniregistry'),
(1316, 'fa-untappd'),
(1317, 'fa-ups'),
(1318, 'fa-usb'),
(1319, 'fa-usps'),
(1320, 'fa-ussunnah'),
(1321, 'fa-vaadin'),
(1322, 'fa-viacoin'),
(1323, 'fa-viadeo'),
(1324, 'fa-viadeo-square'),
(1325, 'fa-viber'),
(1326, 'fa-vimeo'),
(1327, 'fa-vimeo-square'),
(1328, 'fa-vimeo-v'),
(1329, 'fa-vine'),
(1330, 'fa-vk'),
(1331, 'fa-vnv'),
(1332, 'fa-vuejs'),
(1333, 'fa-waze'),
(1334, 'fa-weebly'),
(1335, 'fa-weibo'),
(1336, 'fa-weixin'),
(1337, 'fa-whatsapp'),
(1338, 'fa-whatsapp-square'),
(1339, 'fa-whmcs'),
(1340, 'fa-wikipedia-w'),
(1341, 'fa-windows'),
(1342, 'fa-wix'),
(1343, 'fa-wizards-of-the-coast'),
(1344, 'fa-wolf-pack-battalion'),
(1345, 'fa-wordpress'),
(1346, 'fa-wordpress-simple'),
(1347, 'fa-wpbeginner'),
(1348, 'fa-wpexplorer'),
(1349, 'fa-wpforms'),
(1350, 'fa-wpressr'),
(1351, 'fa-xbox'),
(1352, 'fa-xing'),
(1353, 'fa-xing-square'),
(1354, 'fa-y-combinator'),
(1355, 'fa-yahoo'),
(1356, 'fa-yammer'),
(1357, 'fa-yandex'),
(1358, 'fa-yandex-international'),
(1359, 'fa-yarn'),
(1360, 'fa-yelp'),
(1361, 'fa-yoast'),
(1362, 'fa-youtube'),
(1363, 'fa-youtube-square'),
(1364, 'fa-zhihu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_log_user_agent`
--

CREATE TABLE `px_log_user_agent` (
  `id_log_user_agent` int(11) NOT NULL,
  `ket` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `agent` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `platform` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent_string` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_log_user_agent`
--

INSERT INTO `px_log_user_agent` (`id_log_user_agent`, `ket`, `date`, `agent`, `platform`, `ip_address`, `agent_string`) VALUES
(1111, 'Akses Short Link = jb', '2019-08-16 09:51:00', 'Chrome 44.0.2403.147', 'Android', '182.0.209.116', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1112, 'Akses Article = jb', '2019-08-16 09:51:01', 'Chrome 44.0.2403.147', 'Android', '182.0.209.116', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1113, 'Akses Article = jb', '2019-08-16 09:51:47', 'Chrome 44.0.2403.147', 'Android', '182.0.209.116', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1114, 'Akses WA CTC', '2019-08-16 09:53:32', 'Googlebot', 'Android', '66.249.75.14', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1115, 'Akses Article = jb', '2019-08-16 10:22:35', 'Chrome 76.0.3809.111', 'Android', '182.0.200.129', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36'),
(1116, 'Akses WA CTC', '2019-08-16 18:15:37', 'Googlebot', 'Android', '66.249.75.23', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1118, 'Akses Short Link = changelog', '2019-08-16 22:04:56', 'Googlebot', 'Android', '66.249.75.8', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1119, 'Akses WA CTC', '2019-08-17 03:24:13', 'Googlebot', 'Android', '66.249.75.23', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1120, 'Akses Short Link = changelog', '2019-08-17 09:25:44', 'Googlebot', 'Android', '66.249.73.89', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1121, 'Akses WA CTC', '2019-08-17 13:56:44', 'Googlebot', 'Android', '66.249.73.87', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1122, 'Akses Short Link = changelog', '2019-08-17 18:59:00', 'Googlebot', 'Android', '66.249.73.91', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1123, 'Akses WA CTC', '2019-08-18 04:23:24', 'Googlebot', 'Android', '66.249.79.48', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1124, 'Akses Short Link = changelog', '2019-08-18 07:15:55', 'Googlebot', 'Android', '66.249.79.42', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1125, 'Akses WA CTC', '2019-08-18 15:07:33', 'Googlebot', 'Android', '66.249.79.51', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1126, 'Akses Short Link = changelog', '2019-08-18 18:38:24', 'Googlebot', 'Android', '66.249.79.35', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1127, 'Akses WA CTC', '2019-08-19 02:31:51', 'Googlebot', 'Android', '66.249.79.39', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1128, 'Akses Short Link = changelog', '2019-08-19 04:42:16', 'Googlebot', 'Android', '66.249.64.151', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1130, 'Akses WA CTC', '2019-08-19 14:44:26', 'Googlebot', 'Android', '66.249.64.130', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1131, 'Akses Short Link = changelog', '2019-08-19 17:14:54', 'Googlebot', 'Android', '66.249.64.151', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1132, 'Akses Short Link = changelog', '2019-08-20 02:39:27', 'Googlebot', 'Android', '66.249.79.54', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1142, 'Akses WA CTC', '2019-08-21 12:46:41', 'Googlebot', 'Android', '66.249.66.78', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1143, 'Akses WA CTC', '2019-08-22 04:18:26', 'Googlebot', 'Android', '66.249.79.35', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1145, 'Akses Article = jb', '2019-08-22 09:36:24', 'Chrome 76.0.3809.100', 'Windows 10', '182.0.180.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1146, 'Akses Article = jb', '2019-08-22 09:37:04', 'Chrome 76.0.3809.100', 'Windows 10', '182.0.180.107', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1147, 'Akses Short Link = changelog', '2019-08-22 11:10:35', 'Googlebot', 'Android', '66.249.79.51', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1148, 'Akses Article = app', '2019-08-22 20:15:40', 'Chrome 76.0.3809.100', 'Windows 10', '182.0.181.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1149, 'Login Member = psr', '2019-08-22 20:16:07', 'Chrome 76.0.3809.100', 'Windows 10', '182.0.181.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1150, 'Akses Article = app', '2019-08-22 20:16:08', 'Chrome 76.0.3809.100', 'Windows 10', '182.0.181.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1154, 'Akses Article = jb', '2019-08-23 08:04:03', 'Chrome 76.0.3809.111', 'Android', '114.124.235.28', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36'),
(1155, 'Akses Short Link = Tzf', '2019-08-23 10:37:43', 'Chrome 76.0.3809.111', 'Android', '114.124.209.172', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36'),
(1156, 'Akses Short Link = Tzf', '2019-08-23 10:37:59', 'Unidentified User Agent', 'Unknown Platform', '114.124.209.172', 'WhatsApp/2.19.222 A'),
(1157, 'Akses Short Link = Tzf', '2019-08-23 10:38:05', 'Chrome 44.0.2403.147', 'Android', '114.124.183.50', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1158, 'Akses Short Link = Tzf', '2019-08-23 10:38:15', 'Chrome 76.0.3809.111', 'Android', '114.124.209.172', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36'),
(1159, 'Akses Short Link = Tzf', '2019-08-23 10:38:22', 'Chrome 76.0.3809.111', 'Android', '119.18.155.230', 'Mozilla/5.0 (Linux; Android 6.0.1; LG-K220) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36'),
(1160, 'Akses Short Link = Tzf', '2019-08-23 10:38:49', 'Chrome 76.0.3809.111', 'Android', '114.124.209.172', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36'),
(1161, 'Akses Short Link = Tzf', '2019-08-23 10:39:38', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.146.243', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1162, 'Akses Short Link = jb', '2019-08-23 10:53:42', 'Chrome 44.0.2403.147', 'Android', '114.124.141.2', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1163, 'Akses Article = jb', '2019-08-23 10:53:43', 'Chrome 44.0.2403.147', 'Android', '114.124.141.2', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1164, 'Login Member = psr', '2019-08-23 10:55:54', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1165, 'Akses Article = jb', '2019-08-23 10:56:41', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1166, 'Login Backend = psr', '2019-08-23 11:03:47', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1167, 'Register Member = admin', '2019-08-23 11:09:37', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1168, 'Login Member = admin', '2019-08-23 11:09:47', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1169, 'Akses Article = sys_about', '2019-08-23 11:11:35', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1170, 'Akses Article = sys_about', '2019-08-23 11:11:56', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1171, 'Akses Article = sys_about', '2019-08-23 11:14:46', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.234.29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1172, 'Akses Article = sys_pp', '2019-08-23 11:20:33', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.209.172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1173, 'Akses Article = sys_pp', '2019-08-23 11:20:52', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.209.172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1174, 'Akses Article = sys_pp', '2019-08-23 11:21:42', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.209.172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1175, 'Akses Article = sys_tc', '2019-08-23 11:25:10', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.209.172', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1176, 'Akses WA CTC', '2019-08-24 00:13:14', 'Googlebot', 'Android', '66.249.79.35', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1177, 'Akses Article = app', '2019-08-24 11:34:51', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.229.188', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1178, 'Akses Short Link = r_weblsp', '2019-08-24 11:35:11', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.229.188', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1179, 'Akses Short Link = apps_how', '2019-08-25 07:32:27', 'Chrome 76.0.3809.100', 'Android', '114.124.197.156', 'Mozilla/5.0 (Linux; Android 5.0; SM-G900P Build/LRX21T) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Mobile Safari/537.36'),
(1181, 'Akses WA CTC', '2019-08-28 21:18:28', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1182, 'Akses WA CWS', '2019-08-28 21:18:29', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1183, 'Akses Short Link = foto_rpl2', '2019-08-28 21:18:35', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1184, 'Akses Short Link = hngryrain', '2019-08-28 21:18:36', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1185, 'Akses Short Link = villa_cuk', '2019-08-28 21:18:37', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1186, 'Akses Short Link = villa_cuk_azz', '2019-08-28 21:18:37', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1187, 'Akses Short Link = r_lsp', '2019-08-28 21:18:38', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1188, 'Akses Short Link = ggl', '2019-08-28 21:18:39', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1189, 'Akses Short Link = yt', '2019-08-28 21:18:40', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1190, 'Akses Short Link = r_weblsp', '2019-08-28 21:18:41', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1191, 'Akses Short Link = maullsp', '2019-08-28 21:18:42', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1192, 'Akses Short Link = wardun', '2019-08-28 21:18:43', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1193, 'Akses Short Link = article', '2019-08-28 21:18:44', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1194, 'Akses Short Link = numpang', '2019-08-28 21:18:45', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1195, 'Akses Short Link = apps', '2019-08-28 21:18:45', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1196, 'Akses Short Link = apps_how', '2019-08-28 21:18:46', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1197, 'Akses Short Link = wiki_mit', '2019-08-28 21:18:47', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1198, 'Akses Short Link = gh_license', '2019-08-28 21:18:48', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1199, 'Akses Short Link = changelog', '2019-08-28 21:18:48', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1200, 'Akses Short Link = yd5', '2019-08-28 21:18:49', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1201, 'Akses Short Link = gsy', '2019-08-28 21:18:50', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1202, 'Akses Short Link = bFW', '2019-08-28 21:18:51', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1203, 'Akses Article = test', '2019-08-28 21:18:52', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1204, 'Akses Article = app', '2019-08-28 21:18:53', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1205, 'Akses Short Link = r_fb', '2019-08-28 21:18:53', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1206, 'Akses Short Link = r_ig', '2019-08-28 21:18:54', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1207, 'Akses Short Link = r_tw', '2019-08-28 21:18:54', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1208, 'Akses Short Link = r_gh', '2019-08-28 21:18:55', 'Mozilla 5.0', 'Unknown Platform', '162.243.114.156', 'Mozilla/5.0 (compatible; Attracta)'),
(1209, 'Akses WA CTC', '2019-08-28 21:24:41', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1210, 'Akses WA CWS', '2019-08-28 21:24:41', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1211, 'Akses Short Link = r_ig', '2019-08-28 21:24:41', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1212, 'Akses Short Link = r_fb', '2019-08-28 21:24:41', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1213, 'Akses Short Link = r_tw', '2019-08-28 21:24:41', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1214, 'Akses Article = test', '2019-08-28 21:24:42', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1215, 'Akses Article = app', '2019-08-28 21:24:42', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1216, 'Akses Short Link = r_gh', '2019-08-28 21:24:42', 'Chrome 34.0.1847.131', 'Windows 8.1', '40.114.42.245', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.131 Safari/537.36'),
(1219, 'Login Member = psr', '2019-08-28 23:45:01', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1220, 'Login Backend = psr', '2019-08-28 23:45:38', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1221, 'Login Member = admin', '2019-08-28 23:46:16', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1222, 'Akses Article = mail', '2019-08-28 23:53:55', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1223, 'Akses Article = mail', '2019-08-28 23:54:39', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1224, 'Akses WA CTC', '2019-08-28 23:56:51', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1225, 'Create WA CTC = https://wa.me/6281283854955?text=Nama+email%3A+%28...%29%40sknr.tk%0D%0AEmail+Aktif%3A+%28...%29%0D%0A%0D%0A%2ATautan+pembuatan+password+akan+di+kirim+ke+email+aktif.', '2019-08-29 00:00:46', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1226, 'Akses WA CTC', '2019-08-29 00:01:06', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1227, 'Akses Article = mail', '2019-08-29 00:01:51', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1228, 'Akses Article = mail', '2019-08-29 00:03:51', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1229, 'Akses Article = mail', '2019-08-29 00:04:02', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1230, 'Akses Article = mail', '2019-08-29 00:04:13', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1231, 'Akses Article = mail', '2019-08-29 00:05:14', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1232, 'Akses Article = mail', '2019-08-29 00:05:47', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1233, 'Akses Article = mail', '2019-08-29 00:06:10', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1234, 'Akses Short Link = mail', '2019-08-29 00:10:49', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1235, 'Akses Article = mail', '2019-08-29 00:10:49', 'Chrome 76.0.3809.132', 'Android', '182.0.136.81', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1236, 'Login Member = Psr', '2019-08-29 11:12:51', 'Chrome 76.0.3809.132', 'Android', '182.0.136.41', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1237, 'Akses Article = jb', '2019-08-29 11:13:45', 'Chrome 76.0.3809.132', 'Android', '182.0.136.41', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1238, 'Akses Article = jb', '2019-08-29 11:14:22', 'Chrome 76.0.3809.132', 'Android', '182.0.136.41', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1239, 'Akses Article = jb', '2019-08-29 13:15:47', 'Chrome 76.0.3809.132', 'Android', '182.0.171.94', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1240, 'Akses Article = jb', '2019-08-29 13:17:07', 'Chrome 76.0.3809.132', 'Android', '182.0.171.94', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1241, 'Akses Article = jb', '2019-08-29 13:17:56', 'Chrome 76.0.3809.132', 'Android', '182.0.171.94', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1242, 'Akses Article = jb', '2019-08-29 15:10:37', 'Chrome 76.0.3809.132', 'Android', '182.0.168.93', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1243, 'Akses Article = rpl2', '2019-08-29 16:18:37', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1244, 'Akses WA CTC', '2019-08-29 16:18:56', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1245, 'Create WA CTC = https://wa.me/08567225934?text=Sore+pa', '2019-08-29 16:19:23', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1246, 'Akses Article = rpl2', '2019-08-29 16:51:10', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1247, 'Akses WA CTC', '2019-08-29 16:51:14', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1248, 'Akses WA CWS', '2019-08-29 16:59:12', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1249, 'Create WA CWS = https://wa.me/081297037449', '2019-08-29 16:59:57', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1250, 'Akses WA CWS', '2019-08-29 17:07:53', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1251, 'Create WA CWS = https://wa.me/081297037449', '2019-08-29 17:08:35', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1252, 'Akses WA CWS', '2019-08-29 17:08:56', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1253, 'Create WA CWS = https://wa.me/6281297037449', '2019-08-29 17:09:11', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1254, 'Login Backend = psr', '2019-08-30 06:05:45', 'Chrome 76.0.3809.132', 'Android', '114.124.142.30', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1255, 'Login Backend = Psr', '2019-08-30 08:50:32', 'Chrome 76.0.3809.132', 'Android', '114.124.174.62', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1256, 'Login Backend = psr', '2019-08-30 13:22:34', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1257, 'Akses Short Link = mail', '2019-08-30 13:51:41', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1258, 'Akses Article = mail', '2019-08-30 13:51:41', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1259, 'Akses Short Link = mail', '2019-08-30 14:29:56', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1260, 'Akses Article = mail', '2019-08-30 14:29:56', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1261, 'Akses Article = mail', '2019-08-30 14:39:43', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1262, 'Login Member = psrr', '2019-08-30 14:40:31', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1263, 'Akses Article = mail', '2019-08-30 14:40:31', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1264, 'Akses Article = mail', '2019-08-30 14:40:37', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1265, 'Login Member = admin', '2019-08-30 14:40:59', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1266, 'Akses Article = mail', '2019-08-30 14:40:59', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1267, 'Akses Article = mail', '2019-08-30 14:42:13', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1268, 'Akses Article = mail', '2019-08-30 14:42:19', 'Chrome 76.0.3809.100', 'Windows 10', '114.124.143.143', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.100 Safari/537.36'),
(1269, 'Akses Article = mail', '2019-08-30 14:42:38', 'Safari 534.30', 'Android', '114.124.143.143', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1270, 'Akses Article = mail', '2019-08-30 14:42:53', 'Safari 534.30', 'Android', '114.124.143.143', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1271, 'Akses Article = mail', '2019-08-30 14:43:20', 'Safari 534.30', 'Android', '114.124.143.143', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1272, 'Akses Article = mail', '2019-08-30 14:45:15', 'Safari 534.30', 'Android', '114.124.143.143', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1273, 'Akses Short Link = mail', '2019-08-30 20:11:53', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1274, 'Akses Article = mail', '2019-08-30 20:11:53', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1275, 'Login Member = psr', '2019-08-30 20:13:10', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1276, 'Akses Article = mail', '2019-08-30 20:13:10', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1277, 'Login Backend = psr', '2019-08-30 20:13:16', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1278, 'Akses Article = mail', '2019-08-30 20:14:08', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1279, 'Akses Article = mail', '2019-08-30 21:18:20', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1280, 'Akses Article = mail', '2019-08-30 21:18:25', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.142.142', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1281, 'Akses Article = mail', '2019-08-30 21:18:32', 'Safari 534.30', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1282, 'Akses Article = mail', '2019-08-30 21:19:58', 'Safari 534.30', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1283, 'Akses Article = mail', '2019-08-30 21:20:29', 'Safari 534.30', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1284, 'Akses Article = mail', '2019-08-30 21:20:46', 'Safari 534.30', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; U; Android 4.0; en-us; GT-I9300 Build/IMM76D) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30'),
(1285, 'Akses Article = mail', '2019-08-30 21:24:47', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1286, 'Akses Short Link = mail', '2019-08-30 21:40:15', 'Unidentified User Agent', 'Unknown Platform', '114.124.142.142', 'WhatsApp/2.19.230 A'),
(1287, 'Akses Article = mail', '2019-08-30 21:40:15', 'Unidentified User Agent', 'Unknown Platform', '114.124.142.142', 'WhatsApp/2.19.230 A'),
(1288, 'Akses Short Link = mail', '2019-08-30 21:40:36', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1289, 'Akses Article = mail', '2019-08-30 21:40:36', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1290, 'Login Backend = psr', '2019-08-30 21:40:48', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1291, 'Akses Short Link = jb', '2019-08-30 21:41:15', 'Chrome 44.0.2403.147', 'Android', '114.124.230.214', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1292, 'Akses Article = jb', '2019-08-30 21:41:15', 'Chrome 44.0.2403.147', 'Android', '114.124.230.214', 'Mozilla/5.0 (Linux; Android 6.0; MEIZU_M5 Build/MRA58K; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.147 Mobile Safari/537.36'),
(1293, 'Akses Short Link = mail', '2019-08-30 21:41:15', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1294, 'Akses Article = mail', '2019-08-30 21:41:15', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1295, 'Akses Article = mail', '2019-08-30 21:41:59', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1296, 'Akses Article = mail', '2019-08-30 21:43:54', 'Chrome 76.0.3809.132', 'Android', '114.124.142.142', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1297, 'Akses Short Link = fb_iftup', '2019-08-31 06:16:02', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.141.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1298, 'Login Backend = psr', '2019-08-31 07:15:13', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.141.62', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1299, 'Akses Short Link = fb_iftup', '2019-08-31 15:06:35', 'Chrome 76.0.3809.132', 'Android', '114.124.175.175', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1300, 'Login Backend = psr', '2019-08-31 18:29:57', 'Chrome 76.0.3809.132', 'Android', '114.124.175.175', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1301, 'Akses Short Link = changelog', '2019-09-01 18:20:37', 'Googlebot', 'Android', '66.249.79.42', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1302, 'Akses Short Link = fb_iftup', '2019-09-01 18:37:21', 'Chrome 76.0.3809.132', 'Android', '114.124.238.42', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1303, 'Akses Short Link = fb_iftup', '2019-09-01 19:14:33', 'Chrome 76.0.3809.132', 'Android', '114.124.238.42', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1305, 'Akses Short Link = r_lsp', '2019-09-02 17:31:25', 'Googlebot', 'Unknown Platform', '66.249.79.36', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1306, 'Akses Short Link = r_weblsp', '2019-09-02 17:36:25', 'Googlebot', 'Unknown Platform', '66.249.79.36', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1307, 'Akses WA CTC', '2019-09-03 07:35:11', 'Googlebot', 'Android', '66.249.79.42', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.96 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)'),
(1308, 'Login Backend = psr', '2019-09-03 12:47:22', 'Chrome 76.0.3809.132', 'Windows 10', '182.0.137.2', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1309, 'Akses WA CTC', '2019-09-03 18:25:25', 'Chrome 76.0.3809.132', 'Android', '182.0.138.228', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1310, 'Akses WA CWS', '2019-09-03 18:25:28', 'Chrome 76.0.3809.132', 'Android', '182.0.138.228', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1311, 'Create WA CWS = https://wa.me/081938675170', '2019-09-03 18:25:50', 'Chrome 76.0.3809.132', 'Android', '182.0.138.228', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1312, 'Create WA CWS = https://wa.me/6281938675170', '2019-09-03 18:26:02', 'Chrome 76.0.3809.132', 'Android', '182.0.138.228', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1313, 'Create WA CWS = https://wa.me/6281938675170', '2019-09-03 18:29:49', 'Chrome 76.0.3809.132', 'Android', '182.0.138.228', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1314, 'Login Backend = psr', '2019-09-04 08:08:54', 'Chrome 76.0.3809.132', 'Windows 10', '182.0.169.179', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1315, 'Akses Short Link = fb_iftup', '2019-09-04 08:21:15', 'Chrome 76.0.3809.132', 'Android', '182.0.169.179', 'Mozilla/5.0 (Linux; Android 9; Redmi Note 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Mobile Safari/537.36'),
(1316, 'Login Backend = psr', '2019-09-04 14:43:09', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.204.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1317, 'Akses WA CWS', '2019-09-04 14:44:27', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1318, 'Akses WA CWS', '2019-09-04 14:44:33', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.204.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1319, 'Create WA CWS = https://wa.me/621294127360', '2019-09-04 14:44:58', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1320, 'Akses WA CWS', '2019-09-04 14:45:17', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1321, 'Akses WA CWS', '2019-09-04 14:45:18', 'Chrome 76.0.3809.132', 'Windows 10', '114.124.204.99', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1322, 'Akses WA CWS', '2019-09-04 14:45:19', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1323, 'Create WA CWS = https://wa.me/628129417360', '2019-09-04 14:45:47', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1324, 'Akses WA CWS', '2019-09-04 14:46:04', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36'),
(1325, 'Create WA CWS = https://wa.me/6281294127360', '2019-09-04 14:46:33', 'Chrome 76.0.3809.132', 'Windows 10', '119.18.155.230', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 Safari/537.36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_member`
--

CREATE TABLE `px_member` (
  `id_member` int(10) NOT NULL,
  `username` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_member`
--

INSERT INTO `px_member` (`id_member`, `username`, `password`, `name`) VALUES
(1, 'psr', '/JM5ZWoGFK5P1vM6sctfQWU1PS4BDGI50bPdi50XqmlccKkByg72FQ9SxUzKiIfAm3/3JELTzJiT82Or8L7zmQ==', 'Skinny Rat'),
(3, 'rpl2', 'C0VYy27BsPItjhmQGkyV49QmOWjH4405jWLUk8PbYZ2hRDlT991l5zMbXsEZwfBTFQm607RsKD09kBmbTg3Sjw==', 'RPL 2 - XVII'),
(4, 'sharinggan', 'wiyb0Prg6PTSN5Qsm/PFTeE9Jls5X3Np3vT2gxG9m0/NwVOXVnfwzMdsbDuKPtYFw7Ue0KOpt+61wqJ6P/HTDA==', 'Sharing Gan'),
(14, 'psrr', 'CakfSVRE6c1aNvxsECXo2iznMZzDAAZSe0WrskFIhh3lBEPwbyY86SR3jjfVGo6ZrdtUyy49TOK2Ne08I4RggA==', 'Purwa Sabrang'),
(15, 'admin', 'KzwAh0oifoGtFrNOx3xiXoqpyBXftZyrnhdGQnWoHwytFkvjZUlI8zdEeC9l2ZsKaDwOuQN7ASdtM4Ung9vKAQ==', 'system');

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_menu`
--

CREATE TABLE `px_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_parent` int(11) NOT NULL,
  `icon` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_menu`
--

INSERT INTO `px_menu` (`id`, `name`, `target`, `id_parent`, `icon`, `orders`) VALUES
(1, 'Dashboard', 'admin/dashboard', 0, 'fa-dashboard', 1),
(2, 'Frontend System', 'admin_system', 0, 'fa-cog', 2),
(3, 'Data Admin', 'admin', 63, 'fa-user', 1),
(55, 'Data Member', 'member', 2, 'fa-users', 2),
(56, 'Shorten Url', 'shorten_url', 2, 'fa-link', 3),
(57, 'Article', 'article', 2, 'fa-pencil', 4),
(58, 'Log User Agent', 'log_user_agent', 69, 'fa-history', 0),
(59, 'Website Settings', 'admin_system', 0, 'fa-sliders', 4),
(60, 'Web Setting', 'web_setting', 59, 'fa-gear', 1),
(61, 'Web Alert', 'web_alert', 59, 'fa-exclamation-triangle', 2),
(62, 'Change Log', 'change_log', 59, 'fa-history', 3),
(63, 'Backend System', 'admin_system', 0, 'fa-gears', 3),
(64, 'Menu', 'menu', 63, 'fa-bars', 4),
(65, 'Urutan Menu', 'menu_orders', 63, 'fa-list', 5),
(66, 'Hak Akses', 'usergroup', 63, 'fa-user-plus', 2),
(67, 'Perizinan', 'useraccess', 63, 'fa-unlock-alt', 3),
(68, 'Logout', 'admin/do_logout', 0, 'fa-sign-out', 6),
(69, 'Logs', 'admin_system', 0, 'fa-history', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_shorten_url`
--

CREATE TABLE `px_shorten_url` (
  `id_shorten_url` int(11) NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_created` datetime NOT NULL,
  `id_member` int(10) NOT NULL,
  `click` bigint(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_shorten_url`
--

INSERT INTO `px_shorten_url` (`id_shorten_url`, `name`, `link`, `password`, `date_created`, `id_member`, `click`) VALUES
(3, 'foto_rpl2', 'rpl2_foto', '0', '2019-03-20 23:19:35', 0, 8),
(6, 'hngryrain', 'https://hngryrain.000webhostapp.com', '0', '2019-03-23 13:04:41', 0, 8),
(11, 'villa_cuk', 'https://drive.google.com/open?id=13ZWWTsh-9q1ducdiP1U0-WNe-GGsHZzz', '0', '2019-04-04 08:20:57', 0, 5),
(12, 'villa_cuk_azz', 'https://drive.google.com/uc?id=13ZWWTsh-9q1ducdiP1U0-WNe-GGsHZzz&amp;export=download', '0', '2019-04-04 08:34:41', 0, 9),
(14, 'r_lsp', 'https://github.com/TheSkinnyRat/smkindonesia', '0', '2019-04-14 12:19:26', 0, 39),
(15, 'ggl', 'https://www.google.com', '0', '2019-04-15 21:58:27', 0, 5),
(16, 'yt', 'https://youtube.com', '0', '2019-04-15 21:59:53', 0, 5),
(17, 'raskuy', 'https://drive.google.com/open?id=18GQABqFLBtVSeroDSwJKBnP480VnpxQ_', 'C5ldWtaZrgDsY6DhTxej8rx3TmN3j2MO/Q6QAQ1c6w7mVaZbL13aLrEAne/of+DvoEHpThjZAI5VSlzLKgViaw==', '2019-04-16 03:38:05', 0, 4),
(18, 'r_weblsp', 'http://psr-smkindonesia.000webhostapp.com/', '0', '2019-04-16 11:57:20', 0, 16),
(19, 'r_sclsp', 'https://drive.google.com/drive/folders/10eVBy1QxFqmClDo7Q9_bajt8v8ePEmos?usp=sharing', 'BXk/liEzx7RhaMmakr1Is5IVuZOqibSLc8KpQIShd8xvily+bcZxBX1eRvx1vOOhbSryq9EcmWOx92ulSMA7bA==', '2019-04-16 11:57:46', 0, 6),
(20, 'maullsp', 'https://drive.google.com/open?id=1m7aRw3cmSAhuT1Daks9110mUQtii5PCZ', '0', '2019-04-16 17:50:58', 0, 5),
(21, 'wardun', 'https://drive.google.com/open?id=1_U3XX_LKp3HASKywau7OsXWA14JQ86Gz', '0', '2019-04-16 18:27:35', 0, 5),
(32, 'r_fb', 'https://m.facebook.com/theskinnyratt', ' 0', '2019-04-22 17:45:10', 1, 8),
(33, 'r_ig', 'https://instagram.com/theskinnyrat', ' 0', '2019-04-22 17:46:16', 1, 8),
(34, 'r_tw', 'https://twitter.com/theskinnyrat', ' 0', '2019-04-22 17:47:20', 1, 7),
(35, 'r_gh', 'https://github.com/theskinnyrat', ' 0', '2019-04-22 17:47:52', 1, 7),
(37, 'article', 'https://sknr.tk/home/article_form', '0', '2019-04-28 09:52:30', 0, 8),
(38, 'rpl2_fotoformallama', 'https://drive.google.com/open?id=1qBDZOpRVf4LgJVpu9iw2LJatxmNc8tjZ', '0', '2019-04-29 18:49:45', 3, 14),
(39, 'rpl2_fotoformal', 'https://drive.google.com/open?id=1sGNnuMEOd9bNSQw-HXlB-ArkprmlwkS9', ' 0', '2019-04-29 18:50:43', 3, 23),
(40, 'rpl2_foto', 'https://photos.app.goo.gl/Lt2GKZzfKy3NBmH37', ' 0', '2019-04-29 19:09:50', 3, 22),
(42, 'jb', 'https://sknr.tk/blog/jb', ' 0', '2019-07-18 11:58:52', 1, 30),
(43, 'numpang', 'https://drive.google.com/file/d/1BHl8gy1z533Aznt1VDaR3KSz2GMX0rIO/view?usp=drivesdk', '0', '2019-05-18 13:30:07', 0, 5),
(44, 'r_getuseragent', 'https://sknr.tk/blog/r_get_user_agent', ' 0', '2019-05-24 06:52:46', 1, 0),
(46, 'sg', 'https://sknr.tk/blog/sharinggan', ' 0', '2019-05-29 21:39:42', 4, 15),
(47, 'sg_foto', 'https://photos.app.goo.gl/DRDHX8eTrkFeXdSJ8', ' 0', '2019-05-29 21:23:06', 4, 7),
(48, 'sg_foto_iwan', 'https://photos.app.goo.gl/HZfzsNxdxcwiAq1h6', '+TwIFJaSky1+R78KauWlRvyHzG8K7Tvqdb2Vk93VYkEQgp/dRJ3FrxDard8vWklZ22QJWz6QEgYBsBT/AUazoA==', '2019-06-21 18:48:36', 4, 0),
(49, 'sg_foto_maul', 'https://photos.app.goo.gl/S7RiZKAYtrRq84J47', ' 0', '2019-05-29 21:23:24', 4, 6),
(50, 'sg_foto_aduy', 'https://photos.app.goo.gl/inJW9TQUjexayj1v5', ' 0', '2019-05-29 21:23:31', 4, 6),
(51, 'sg_foto_rio', 'https://photos.app.goo.gl/JLwPU61TkctjmFyk8', ' 0', '2019-05-29 21:23:39', 4, 4),
(52, 'sg_foto_yusuf', 'https://photos.app.goo.gl/aZ5U6fmtstcPwQwB9', ' 0', '2019-05-29 21:23:50', 4, 7),
(53, 'sg_foto_pen', 'https://photos.app.goo.gl/yQxFWrXi6tWHmsH26', ' 0', '2019-05-29 21:23:57', 4, 7),
(54, 'sg_foto_edo', 'https://photos.app.goo.gl/aa6ULN17nY3k9ax66', ' 0', '2019-05-29 21:24:05', 4, 8),
(55, 'sg_foto_psr', 'https://photos.app.goo.gl/6gYeuiqVcqMKr9e87', 'btzRrceiQ5deZGJTFJ7oFPOwttvG3u8HLvwyl+65fB6j0QHDvTXOP2pyasoP0RnmB28TSwivMB62aYA6QsZYJA==', '2019-06-21 18:48:13', 4, 0),
(56, 'r_', 'https://sknr.tk/blog/r_', ' 0', '2019-06-02 06:18:39', 1, 13),
(57, 'r', 'https://sknr.tk/blog/r_dnkg_abis', ' 0', '2019-06-05 08:41:13', 1, 1),
(58, 'r__', 'https://link.dana.id/kaget?c=scv7e6z43&r=dcCoFq', ' 0', '2019-06-05 08:33:32', 1, 13),
(59, 'sc_sknr', 'https://github.com/TheSkinnyRat/skinnyrat', ' 0', '2019-06-14 06:59:29', 1, 2),
(60, 'reg_admin', 'https://wa.me/6281283854955?text=Halo%21+Saya+ingin+menjadi+admin+backend+di+sknr.tk%0AUsername+%3A+%28isi+sendiri%29%0APassword+%3A+%28isi+sendiri%29', ' 0', '2019-06-24 11:16:35', 1, 3),
(62, 'wa_sticker', 'https://sknr.tk/blog/wa_sticker', ' 0', '2019-06-24 11:49:50', 1, 8),
(64, 'dl_wa_sticker', 'https://drive.google.com/uc?id=1YZZMvCi79qu68yM0_X0yUM6DTxRJvdgf&export=download', ' 0', '2019-06-24 12:49:02', 1, 0),
(67, 'apps', 'https://sknr.tk/blog/app', ' 0', '2019-07-18 11:26:05', 0, 5),
(68, 'apps_how', 'https://developers.google.com/web/fundamentals/codelabs/your-first-pwapp/?hl=id', ' 0', '2019-07-18 11:26:00', 0, 7),
(69, 'wiki_mit', 'https://id.wikipedia.org/wiki/Lisensi_MIT', '0', '2019-07-25 21:46:37', 0, 4),
(70, 'gh_license', 'https://github.com/TheSkinnyRat/skinnyrat/blob/master/LICENSE', '0', '2019-07-25 21:49:30', 0, 7),
(71, 'changelog', 'https://sknr.tk/home/change_log', '0', '2019-07-25 21:50:28', 0, 14),
(72, 'report_bugs', 'https://sknr.tk/blog/report_bugs', ' 0', '2019-07-26 17:13:26', 1, 0),
(77, 'err', 'https://sknr.tk/blog/err', ' 0', '2019-08-07 22:29:37', 1, 1),
(79, 'api', 'https://sknr.tk/blog/api', ' 0', '2019-08-08 11:17:52', 1, 9),
(80, 'yd5', 'https://drive.google.com/open?id=1PAKPycAtM7Y0sQqD-D6Y0haMwiTQ6HS6', '0', '2019-08-08 12:31:27', 0, 2),
(81, 'pocer', 'https://drive.google.com/open?id=1PAKPycAtM7Y0sQqD-D6Y0haMwiTQ6HS6', 'iC+eSvQOM2tlGXGUo9pOSJAWHFasmvK8lCQ0dfCNBPnQQjQ39H1YWyxz3P3PKOrIOWxIBubChiHScyWTfajLrA==', '2019-08-08 12:31:34', 0, 1),
(82, 'gsy', 'https://google.com', '0', '2019-08-15 00:19:58', 0, 2),
(83, 'bFW', 'https://google.com', '0', '2019-08-15 00:20:01', 0, 2),
(84, 'license', 'https://sknr.tk/blog/license', ' 0', '2019-08-15 14:16:31', 1, 9),
(87, 'jNs', 'https://s.id', '0', '2019-08-23 14:25:38', 15, 0),
(88, 'mail', 'https://sknr.tk/blog/mail', ' 0', '2019-08-29 00:08:59', 15, 7),
(89, 'fb_iftup', 'https://web.facebook.com/informatika.up', '0', '2019-08-31 06:15:06', 0, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_useraccess`
--

CREATE TABLE `px_useraccess` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_usergroup` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `act_create` int(11) NOT NULL,
  `act_read` int(11) NOT NULL,
  `act_update` int(11) NOT NULL,
  `act_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_useraccess`
--

INSERT INTO `px_useraccess` (`id`, `id_usergroup`, `id_menu`, `act_create`, `act_read`, `act_update`, `act_delete`) VALUES
(187, 1, 1, 1, 1, 1, 1),
(188, 1, 2, 1, 1, 1, 1),
(189, 1, 3, 1, 1, 1, 1),
(190, 1, 54, 1, 1, 1, 1),
(195, 1, 55, 1, 1, 1, 1),
(196, 1, 56, 1, 1, 1, 1),
(197, 1, 57, 1, 1, 1, 1),
(198, 1, 63, 1, 1, 1, 1),
(199, 1, 64, 1, 1, 1, 1),
(200, 1, 65, 1, 1, 1, 1),
(201, 1, 66, 1, 1, 1, 1),
(202, 1, 67, 1, 1, 1, 1),
(203, 1, 59, 1, 1, 1, 1),
(204, 1, 60, 1, 1, 1, 1),
(205, 1, 61, 1, 1, 1, 1),
(206, 1, 62, 1, 1, 1, 1),
(207, 1, 58, 1, 1, 1, 1),
(208, 1, 68, 1, 1, 1, 1),
(209, 2, 1, 1, 1, 1, 1),
(210, 2, 2, 1, 1, 1, 1),
(211, 2, 3, 0, 1, 0, 0),
(212, 2, 55, 1, 1, 1, 1),
(213, 2, 56, 1, 1, 1, 1),
(214, 2, 57, 1, 1, 1, 1),
(215, 2, 63, 1, 1, 1, 1),
(216, 2, 64, 0, 1, 0, 0),
(217, 2, 65, 0, 1, 0, 0),
(218, 2, 66, 0, 1, 0, 0),
(219, 2, 67, 0, 1, 0, 0),
(220, 2, 59, 1, 1, 1, 1),
(221, 2, 60, 0, 1, 0, 0),
(222, 2, 61, 0, 1, 0, 0),
(223, 2, 62, 0, 1, 0, 0),
(224, 2, 58, 0, 1, 0, 0),
(225, 2, 68, 1, 1, 1, 1),
(226, 1, 69, 1, 1, 1, 1),
(227, 2, 69, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_usergroup`
--

CREATE TABLE `px_usergroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `usergroup_name` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_usergroup`
--

INSERT INTO `px_usergroup` (`id`, `usergroup_name`) VALUES
(1, 'Super Admin'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_web_alert`
--

CREATE TABLE `px_web_alert` (
  `id` int(225) NOT NULL,
  `style` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_web_alert`
--

INSERT INTO `px_web_alert` (`id`, `style`, `konten`, `status`) VALUES
(3, 'alert-danger', 'Website Sedang Dalam Pengembangan - Harap Untuk Tidak Melakukan Proses Create / Update / Delete', 0),
(4, 'alert-danger', '<script>\r\n// window.location = \"https://sknr.tk/unco.php\";\r\n</script>\r\n-- UNDER MAINTENANCE --\r\n<hr>\r\nChanging hosting is completed', 0),
(5, 'alert-warning', '<i class=\"fas fa-exclamation-circle\"></i> Website Sedang Dalam Pengembangan ^^ - Akan Terjadi Sinkronisasi Data', 0),
(6, 'alert-info', 'Ayo coba hack / temukan bug di web ini ! ^^', 0),
(9, 'alert-primary', '<i class=\"far fa-plus-square fa-spin\"></i> New Feature - <a href=\"https://sknr.tk/home/wa_ctc\" class=\"alert-link\">Whatsapp Click to Chat</a>', 0),
(10, 'alert-info', '<i class=\"fas fa-code\"></i> <i class=\"fab fa-github\"></i> Web ini dibuat dengan framework CodeIgniter dan berstatus <I><b>Open Source</b></i> - Download source code <a href=\"https://sknr.tk/blog/sc_sknr\" class=\"alert-link\">DISINI</a>', 0),
(11, 'alert-primary', '<i class=\"far fa-plus-square fa-spin\"></i> New Feature - <a href=\"https://sknr.tk/home/wa_cws\" class=\"alert-link\">Whatsapp Chat Without Save</a>', 0),
(13, 'alert-info', '<i class=\"far fa-plus-square fa-spin\"></i>\nIngin menjadi admin backend di web ini?\n<hr>\n<a href=\"https://sknr.tk/reg_admin\" class=\"alert-link\">Klik Disini</a> untuk mendaftar\n<br>\n<a href=\"https://sknr.tk/admin\" class=\"alert-link\">Klik Disini</a> untuk login ke backend', 0),
(15, 'alert-secondary', '<center>\r\n<form class=\"form\" method=\"get\" action=\"https://google.com/search\" target=\"_blank\">\r\n                <div class=\"input-group\">\r\n                  <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Google Search..\">\r\n                  <div class=\"input-group-append\">\r\n                    <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fas fa-search\"></i></button>\r\n                  </div>\r\n                </div>\r\n              </form>\r\n</center>', 0),
(17, 'alert-primary', '<center>\r\n<form class=\"form\" method=\"get\" action=\"https://sknr.tk/c\" target=\"_blank\">\r\n                <div class=\"input-group\">\r\n                  <input type=\"text\" name=\"url\" class=\"form-control\" placeholder=\"shorten your url...\">\r\n                  <div class=\"input-group-append\">\r\n                    <button class=\"btn btn-primary\" type=\"submit\"><i class=\"fas fa-link\"></i></button>\r\n                  </div>\r\n                </div>\r\n              </form>\r\n</center>\r\n<small><code>input with http:// or https://</code></small>', 1),
(18, 'alert-info', '<p class=\"p-0 m-0\"><strong>Change log v2.3.0</strong></p>\r\n\r\n<p>- Upgrade core system ke CodeIgniter v3.1.0<br />\r\n<hr>\r\n<i class=\"fas fa-balance-scale\"></i> Sekarang web ini di lisensi-kan oleh <a href=\"https://sknr.tk/wiki_mit\" target=\"_blank\">(MIT)</a> atas nama <a href=\"https://sknr.tk/gh_license\" target=\"_blank\">© Skinny Rat</a><br />\r\n<a href=\"https://sknr.tk/changelog\" target=\"_blank\">Read More</a> - <a href=\"https://sknr.tk/blog/report_bugs\" target=\"_blank\">Lapor Bugs</a></p>\r\n', 0),
(19, 'alert-light', ' <div data-video=\"fv_aXeQ04Cc\"  \r\n         data-autoplay=\"1\"         \r\n         data-loop=\"1\"             \r\n         id=\"youtube-audio\">\r\n  </div>\r\n  <script src=\"https://www.youtube.com/iframe_api\"></script>\r\n  <script src=\"https://cdn.rawgit.com/labnol/files/master/yt.js\"></script>', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `px_web_setting`
--

CREATE TABLE `px_web_setting` (
  `id` int(225) NOT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `favicon` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_web_setting`
--

INSERT INTO `px_web_setting` (`id`, `title`, `name`, `version`, `icon`, `favicon`) VALUES
(1, 'Skinny Rat', 'Skinny Rat <sup>^^</sup>', 'v2.3.3', 'fa-grin-wink', 'rat.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `px_admin`
--
ALTER TABLE `px_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `px_article`
--
ALTER TABLE `px_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `px_article_comment`
--
ALTER TABLE `px_article_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_article_comment_dislike`
--
ALTER TABLE `px_article_comment_dislike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_article_comment_like`
--
ALTER TABLE `px_article_comment_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_article_dislike`
--
ALTER TABLE `px_article_dislike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_article_like`
--
ALTER TABLE `px_article_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_change_log`
--
ALTER TABLE `px_change_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_icons`
--
ALTER TABLE `px_icons`
  ADD PRIMARY KEY (`id_icons`);

--
-- Indexes for table `px_log_user_agent`
--
ALTER TABLE `px_log_user_agent`
  ADD PRIMARY KEY (`id_log_user_agent`);

--
-- Indexes for table `px_member`
--
ALTER TABLE `px_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `px_menu`
--
ALTER TABLE `px_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  ADD PRIMARY KEY (`id_shorten_url`);

--
-- Indexes for table `px_useraccess`
--
ALTER TABLE `px_useraccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_usergroup`
--
ALTER TABLE `px_usergroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_web_alert`
--
ALTER TABLE `px_web_alert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `px_web_setting`
--
ALTER TABLE `px_web_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `px_admin`
--
ALTER TABLE `px_admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `px_article`
--
ALTER TABLE `px_article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `px_article_comment`
--
ALTER TABLE `px_article_comment`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `px_article_comment_dislike`
--
ALTER TABLE `px_article_comment_dislike`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `px_article_comment_like`
--
ALTER TABLE `px_article_comment_like`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `px_article_dislike`
--
ALTER TABLE `px_article_dislike`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `px_article_like`
--
ALTER TABLE `px_article_like`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `px_change_log`
--
ALTER TABLE `px_change_log`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `px_icons`
--
ALTER TABLE `px_icons`
  MODIFY `id_icons` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1365;

--
-- AUTO_INCREMENT for table `px_log_user_agent`
--
ALTER TABLE `px_log_user_agent`
  MODIFY `id_log_user_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1330;

--
-- AUTO_INCREMENT for table `px_member`
--
ALTER TABLE `px_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `px_menu`
--
ALTER TABLE `px_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  MODIFY `id_shorten_url` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `px_useraccess`
--
ALTER TABLE `px_useraccess`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `px_usergroup`
--
ALTER TABLE `px_usergroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `px_web_alert`
--
ALTER TABLE `px_web_alert`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `px_web_setting`
--
ALTER TABLE `px_web_setting`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
