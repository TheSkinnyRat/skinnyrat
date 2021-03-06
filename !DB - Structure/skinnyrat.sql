-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Okt 2019 pada 16.33
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
(1, 'admin', 'RuNq/XLyG7iBOkMvZyfCORqPK6WbzTx+flnEXigdDrg0OZxhAN6cK4LuDV2lDtOJ8P/dYVK2gSlKEfOi26FMZQ==', 'admin1', 1);

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
(17, 'test', 'Ini Article Saya', 'Hello World', '<p style=\"text-align:center\"><span style=\"font-size:22px\"><span style=\"font-family:Comic Sans MS,cursive\">Halo Ini Adalah Artikel Pertama Saya :)</span></span></p>\r\n\r\n<hr />', '2019-09-09 15:37:20', 0, 143, '0', '123', 1);

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
(22, 'Version 2.3.2', '<p>- Improve theme (Frontend)<br />\r\n- Bugs Fixed</p>\r\n', 0, 1),
(23, 'Version 2.3.3', '<p>- Add google analytics (Frontend)<br />\r\n- More Feature in Article (Frontend, Backend)<br />\r\n- Many More<br />\r\n- Fix Bugs</p>\r\n', 0, 1),
(24, 'Version 2.3.4', '<p>- Improved Theme (Frontend)<br />\r\n- Bugs Fixed</p>\r\n', 1, 1),
(25, 'Version 2.3.5', '<p>- IMPROVE USER INTERFACE (FRONTEND)</p>\r\n', 1, 1);

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
(1, 'Login Backend = psr', '2019-10-06 06:55:26', 'Chrome 77.0.3865.90', 'Windows 10', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36');

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
(1, 'user', 'K0d3QveThpKk3jnBmuWG3rsdGWxZY8iSyV5cRkL9bbWC6MxCjbF3m4LfidtJ5N0BKvF94ADtkIPegiDv/wmXkA==', 'user1');

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
  `click` bigint(225) NOT NULL,
  `safelink` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `px_shorten_url`
--

INSERT INTO `px_shorten_url` (`id_shorten_url`, `name`, `link`, `password`, `date_created`, `id_member`, `click`, `safelink`) VALUES
(15, 'ggl', 'https://www.google.com', '0', '2019-04-15 21:58:27', 0, 11, 0),
(16, 'yt', 'https://youtube.com', '0', '2019-04-15 21:59:53', 0, 11, 0);

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
(3, 'alert-danger', 'Website Sedang Dalam Pengembangan - Harap Untuk Tidak Melakukan Proses Create / Update / Delete', 0);

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
(1, 'Skinny Rat', 'Skinny Rat <sup>^^</sup>', 'v2.3.5', 'fa-grin-wink', 'rat.png');

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
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `px_article`
--
ALTER TABLE `px_article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `px_article_comment`
--
ALTER TABLE `px_article_comment`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `px_article_comment_dislike`
--
ALTER TABLE `px_article_comment_dislike`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `px_article_comment_like`
--
ALTER TABLE `px_article_comment_like`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `px_article_dislike`
--
ALTER TABLE `px_article_dislike`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `px_article_like`
--
ALTER TABLE `px_article_like`
  MODIFY `id` bigint(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `px_change_log`
--
ALTER TABLE `px_change_log`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `px_icons`
--
ALTER TABLE `px_icons`
  MODIFY `id_icons` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1365;

--
-- AUTO_INCREMENT for table `px_log_user_agent`
--
ALTER TABLE `px_log_user_agent`
  MODIFY `id_log_user_agent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `px_member`
--
ALTER TABLE `px_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `px_menu`
--
ALTER TABLE `px_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `px_shorten_url`
--
ALTER TABLE `px_shorten_url`
  MODIFY `id_shorten_url` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `px_useraccess`
--
ALTER TABLE `px_useraccess`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `px_usergroup`
--
ALTER TABLE `px_usergroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
