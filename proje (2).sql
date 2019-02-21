-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2018, 15:46:17
-- Sunucu sürümü: 10.1.25-MariaDB
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `proje`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adsoy` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sifre` varchar(30) NOT NULL,
  `yetki` varchar(30) NOT NULL,
  `durum` varchar(30) NOT NULL,
  `resim` varchar(50) NOT NULL,
  `tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `resim`, `tarih`) VALUES
(1, 'gamze', 'gamzeguneysi@hotmail.com', '1234', 'admin', 'aktif', 'IMG_6523.JPG', '0000-00-00'),
(2, 'seda', 'seda@hotmail.com', '4321', 'admin', 'aktif', '', '0000-00-00'),
(4, 'Çigdem Altin', 'cigdem@gmail.com', '456', 'admin', 'aktif', '', '0000-00-00'),
(5, 'kadir', 'kdr@hotmail.com', '677', 'admin', 'pasif', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `Id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `smtpserver` varchar(50) NOT NULL,
  `smtpport` int(11) NOT NULL,
  `smtpemail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `adres` varchar(200) NOT NULL,
  `sehir` varchar(20) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `hakkimizda` text NOT NULL,
  `iletisim` text NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `pinterest` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`Id`, `ad`, `keywords`, `description`, `name`, `smtpserver`, `smtpport`, `smtpemail`, `password`, `adres`, `sehir`, `tel`, `fax`, `email`, `hakkimizda`, `iletisim`, `facebook`, `twitter`, `instagram`, `pinterest`) VALUES
(1, '', '', 'dene', '', '', 465, 'gamzeguneysi@hotmail.com', 'neolur123', 'tepebas?', '', '', '', '', '<p><em><strong>Bizim &uuml;r&uuml;nlerimiz hormonla de?il,&nbsp; T?pk? do?adaki gibi... Seralar?m?zda asla kimyasal ila&ccedil;lar kullanm?yoruz. Bunun yerine insan sa?l???n? tehdit etmeyen fiziksel &ouml;nlemler alarak sa?l?kl? ve g&uuml;venli mahsuller yeti?tiriyoruz. Mesela kap?lar?m?zdaki hava perdeleri ve &ccedil;at?lar?m?zdaki sinek t&uuml;lleri sayesinde zararl? giri?lerini en aza indiriyoruz.</strong></em></p>\r\n\r\n<p><em><strong>Seralar?m?z?n i&ccedil;indeyse zararl?lar?n sevdi?i kokular? yayan tuzaklar sayesinde mahsullerimizin zarar g&ouml;rmesini engelliyoruz. Hastal?klara kar?? iklimlendirmeyi her bitki &ccedil;e?idine g&ouml;re en uygun ?ekilde yaparak do?abilecek sorunlar?n &ouml;n&uuml;ne ge&ccedil;iyoruz. Sera i&ccedil;inde kontroll&uuml; tar?m yapt???m?z i&ccedil;in masullerimizi d?? etkilerden ve zararl?lardan koruyabiliyoruz. Bu sayede sizlere dal?ndan zaman?nda toplanm??, hi&ccedil;bir kimyasal ve hormon bar?nd?rmayan sa?l?kl? ve do?al &uuml;r&uuml;nler sunuyoruz.&nbsp;</strong></em></p>\r\n', '<p><strong>&nbsp;TEL:&nbsp;</strong><em>+90 (888) 777 66 55</em></p>\r\n', 'gfsfdafdafd', 'twitter', 'instagram', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `adi` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `description` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`Id`, `parent_id`, `adi`, `description`, `keywords`, `resim`, `durum`, `tarih`) VALUES
(1, 0, 'Meyve&Sebze', '', '', 'domates-343102.jpg', 'Aktif', '2018-01-08 23:16:23'),
(2, 0, 'SutUrunleri&Yumurta', 'ZASDF', '', '', 'Aktif', '2018-01-08 10:30:25'),
(3, 0, 'Recel&Bal', '', '', '', '', '2018-01-06 06:43:54'),
(5, 0, 'Zeytin&Zeytinyagi', '', '', 'yag11.jpg', '', '2018-01-08 23:25:31'),
(12, 2, 'Süt', '', '', 'pismis-inek-sutu-5-litre-1111.', '', '2018-01-08 23:25:47'),
(14, 0, 'Guzellik', '', '', 'keÃƒÂ§isÃƒÂ¼tÃƒÂ¼sabunu1.jpg', '', '2018-01-08 23:25:02'),
(15, 2, 'Yumurta', '', '', '', '', '2018-01-06 07:00:24'),
(17, 5, 'zeytin', '', '', '', '', '2018-01-06 07:01:18'),
(19, 5, 'Zeytinyagi', '', '', '', '', '2018-01-06 07:01:35'),
(21, 3, 'Recel', '', '', '', '', '2018-01-06 07:02:56'),
(22, 3, 'Bal', '', '', '', '', '2018-01-06 07:02:56'),
(23, 1, 'domates', '', '', 'domates-343.jpg', '', '2018-01-08 21:46:23'),
(24, 0, '', '', '', 'domates-343101.jpg', 'Aktif', '2018-01-08 23:11:20');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `Id` int(11) NOT NULL,
  `adsoy` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `mesaj` varchar(255) NOT NULL,
  `durum` varchar(30) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IP` varchar(20) NOT NULL,
  `adminnotu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`Id`, `adsoy`, `email`, `tel`, `mesaj`, `durum`, `tarih`, `IP`, `adminnotu`) VALUES
(1, 'gamze', 'gamzeguneysi@hotmail.com', '', 'jkkhj', 'Okundu', '2018-01-08 11:09:57', '', 'xvfbgn\r\n                              '),
(2, 'bü?ra', 'BUSRA@hotmail.com', '', 'ben busra', 'okundu', '2018-01-14 14:13:52', '::1', '                                                                                             cdv \r\n                               \r\n                               \r\n                              '),
(3, 'seda', 'seda@hotmail.com', '', 'ben seda', 'Okundu', '2018-01-08 13:55:54', '::1', '                               sxcd \r\n                              '),
(4, 'kader', 'kdr@hotmail.com', '', 'merhabalar', '', '2018-01-08 11:04:51', '::1', 'xsc'),
(6, 'sswsws', 'swswsws@hotmail', '', 'jhuuj', '', '2017-12-18 16:41:52', '::1', NULL),
(8, 'gaaaaaaaa', 'gamzeguneysi@hotmail.com', '', 'selammmmmmmmmmmmmmmmm', '', '2018-01-13 23:32:52', '::1', NULL),
(9, 'vvvv', 'gamzeguneysi@hotmail.com', '', 'merhabaaaaaa', '', '2018-01-13 23:35:34', '::1', NULL),
(10, 'dfdfdfdfd', 'gamzeguneysi@hotmail.com', '', 'fffffffffffffffffffffffffffffffffffff', '', '2018-01-13 23:41:04', '::1', NULL),
(12, 'derya', 'neslihanhosgorul@hotmail.com', '', 'axscd', '', '2018-01-14 13:51:48', '::1', NULL),
(13, 'derya', 'neslihanhosgorul@hotmail.com', '', 'axscd', '', '2018-01-14 13:53:03', '::1', NULL),
(14, 'sdfg', 'neslihanhosgorul@hotmail.com', '', '123', '', '2018-01-14 13:53:22', '::1', NULL),
(15, 'ccx', 'gamzeguneysi@hotmail.com', '', 'sasa', '', '2018-01-15 07:11:00', '::1', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehir`
--

CREATE TABLE `sehir` (
  `id` int(11) NOT NULL,
  `plaka` int(3) NOT NULL,
  `sehir` varchar(15) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `sehir`
--

INSERT INTO `sehir` (`id`, `plaka`, `sehir`) VALUES
(1, 1, 'Adana'),
(2, 2, 'Adıyaman'),
(3, 3, 'Afyon'),
(4, 4, 'Ağrı'),
(5, 5, 'Amasya'),
(6, 6, 'Ankara'),
(7, 7, 'Antalya'),
(8, 8, 'Artvin'),
(9, 9, 'Aydın'),
(10, 10, 'Balıkesir'),
(11, 11, 'Bilecik'),
(12, 12, 'Bingöl'),
(13, 13, 'Bitlis'),
(14, 14, 'Bolu'),
(15, 15, 'Burdur'),
(16, 16, 'Bursa'),
(17, 17, 'Çanakkale'),
(18, 18, 'Çankırı'),
(19, 19, 'Çorum'),
(20, 20, 'Denizli'),
(21, 21, 'Diyarbakır'),
(22, 22, 'Edirne'),
(23, 23, 'Elazığ'),
(24, 24, 'Erzincan'),
(25, 25, 'Erzurum'),
(26, 26, 'Eskişehir'),
(27, 27, 'Gaziantep'),
(28, 28, 'Giresun'),
(29, 29, 'Gümüşhane'),
(30, 30, 'Hakkari'),
(31, 31, 'Hatay'),
(32, 32, 'Isparta'),
(33, 33, 'İçel'),
(34, 34, 'İstanbul'),
(35, 35, 'İzmir'),
(36, 36, 'Kars'),
(37, 37, 'Kastamonu'),
(38, 38, 'Kayseri'),
(39, 39, 'Kırklareli'),
(40, 40, 'Kırşehir'),
(41, 41, 'Kocaeli'),
(42, 42, 'Konya'),
(43, 43, 'Kütahya'),
(44, 44, 'Malatya'),
(45, 45, 'Manisa'),
(46, 46, 'Kahramanmaraş'),
(47, 47, 'Mardin'),
(48, 48, 'Muğla'),
(49, 49, 'Muş'),
(50, 50, 'Nevşehir'),
(51, 51, 'Niğde'),
(52, 52, 'Ordu'),
(53, 53, 'Rize'),
(54, 54, 'Sakarya'),
(55, 55, 'Samsun'),
(56, 56, 'Siirt'),
(57, 57, 'Sinop'),
(58, 58, 'Sivas'),
(59, 59, 'Tekirdağ'),
(60, 60, 'Tokat'),
(61, 61, 'Trabzon'),
(62, 62, 'Tunceli'),
(63, 63, 'Şanlıurfa'),
(64, 64, 'Uşak'),
(65, 65, 'Van'),
(66, 66, 'Yozgat'),
(67, 67, 'Zonguldak'),
(68, 68, 'Aksaray'),
(69, 69, 'Bayburt'),
(70, 70, 'Karaman'),
(71, 71, 'Kırıkkale'),
(72, 72, 'Batman'),
(73, 73, 'Şırnak'),
(74, 74, 'Bartın'),
(75, 75, 'Ardahan'),
(76, 76, 'Iğdır'),
(77, 77, 'Yalova'),
(78, 78, 'Karabük'),
(79, 79, 'Kilis'),
(80, 80, 'Osmaniye'),
(81, 81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `Id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`Id`, `musteri_id`, `urun_id`, `adet`, `tarih`) VALUES
(1, 1, 22, 5, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `Id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL DEFAULT '0',
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `IP` int(11) NOT NULL,
  `fiyat` float(11,2) NOT NULL DEFAULT '0.00',
  `adet` int(11) NOT NULL DEFAULT '0',
  `tutar` float(11,2) NOT NULL DEFAULT '0.00',
  `odeme_sekli` varchar(30) NOT NULL,
  `odeme_durumu` varchar(30) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `ilçe` varchar(30) NOT NULL,
  `sehir` varchar(30) NOT NULL,
  `adi` varchar(50) NOT NULL DEFAULT 'Gamze Güneysi',
  `kargofirma` varchar(30) NOT NULL,
  `kargono` varchar(30) NOT NULL,
  `durum` varchar(255) DEFAULT 'yeni',
  `email` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `not` varchar(255) DEFAULT NULL,
  `adsoy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`Id`, `musteri_id`, `urun_id`, `tarih`, `IP`, `fiyat`, `adet`, `tutar`, `odeme_sekli`, `odeme_durumu`, `adres`, `ilçe`, `sehir`, `adi`, `kargofirma`, `kargono`, `durum`, `email`, `tel`, `not`, `adsoy`) VALUES
(13, 1, 33, '2018-01-14 13:36:39', 0, 10.00, 32323231, 323232320.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(14, 3, 33, '2018-01-14 13:36:40', 0, 10.00, 12, 120.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(15, 3, 33, '2018-01-14 13:36:42', 0, 10.00, 1, 10.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(16, 3, 33, '2018-01-14 13:36:43', 0, 10.00, 1234, 12340.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(17, 3, 17, '2018-01-14 13:36:45', 0, 0.00, 1, 0.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(18, 3, 17, '2018-01-14 13:36:48', 0, 0.00, 1, 0.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(22, 1, 19, '2018-01-14 13:37:41', 0, 0.00, 1, 0.00, '', '', 'karabuk', '', '', 'v', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(23, 1, 19, '2018-01-14 13:37:34', 0, 0.00, 1, 0.00, '', '', '', '', '', 'v', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(25, 1, 22, '2018-01-14 13:37:32', 0, 70.00, 1, 70.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(27, 3, 26, '2018-01-14 13:37:31', 0, 8.00, 1, 8.00, '', '', '', '', '', 'v', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(28, 1, 19, '2018-01-14 13:37:31', 0, 0.00, 1, 0.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, '                                                             ', NULL),
(29, 1, 22, '2018-01-14 13:37:30', 0, 70.00, 1, 70.00, '', '', '', '', '', 'v', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(30, 1, 32, '2018-01-14 13:37:29', 0, 0.00, 1, 0.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(31, 1, 22, '2018-01-14 13:37:27', 0, 70.00, 1, 70.00, '', '', '', '', '', 'v', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(32, 1, 23, '0000-00-00 00:00:00', 0, 9.00, 1, 9.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(33, 3, 23, '2018-01-14 13:37:26', 0, 9.00, 1, 9.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(34, 3, 22, '2018-01-14 13:37:24', 0, 70.00, 1, 70.00, '', '', '', '', '', 'v', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(42, 3, 22, '2018-01-14 13:37:24', 0, 70.00, 6, 420.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(43, 3, 22, '2018-01-14 13:37:23', 0, 70.00, 1, 70.00, '', '', '', '', '', 'gamze', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(44, 3, 22, '2018-01-14 13:37:22', 0, 70.00, 1, 70.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, NULL, NULL),
(46, 1, 22, '2018-01-14 13:37:21', 0, 70.00, 2, 140.00, '', '', '', '', '', 'gamze', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(47, 1, 34, '2018-01-14 13:38:44', 0, 0.00, 1, 0.00, '', '', 'karabuk', '', '', 'gamze', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(48, 1, 23, '2018-01-14 13:38:42', 0, 9.00, 5, 45.00, '', '', 'karabuk', '', '', 'gamze', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(49, 1, 33, '2018-01-14 13:38:41', 0, 10.00, 5, 50.00, '', '', 'karabuk', '', '', 'gamze', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(55, 3, 22, '2018-01-14 13:38:29', 0, 70.00, 1, 70.00, '', '', 'karabuk', '', '', 'gamze', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(56, 3, 26, '2018-01-14 13:37:17', 0, 8.00, 10, 80.00, '', '', '', '', '', 'gamze', '', '', 'onaylandi', NULL, NULL, NULL, NULL),
(57, 3, 18, '2018-01-14 13:37:16', 0, 7.00, 1, 7.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, '                                                             ', NULL),
(58, 1, 32, '2018-01-14 13:37:15', 0, 11.00, 1, 11.00, '', '', '', '', '', 'gamze', '', '', 'Onayland?', NULL, NULL, '                                                                  ededeede\r\n                                                        ', NULL),
(59, 1, 26, '2018-01-14 13:37:14', 0, 8.00, 1, 8.00, '', '', '', '', '', 'gamze', '', '', 'Onayland?', NULL, NULL, '                                                             ', NULL),
(60, 1, 32, '2018-01-14 13:37:13', 0, 11.00, 1, 11.00, '', '', '', '', '', 'gamze', '', '', 'Onayland?', NULL, NULL, '                                                      dfdfdfdsf                                                                    ', NULL),
(61, 1, 19, '2018-01-14 13:37:12', 0, 46.00, 1, 46.00, '', '', '', '', '', 'gamze', '', '', 'Onayland?', NULL, NULL, '                                                             ', NULL),
(62, 1, 31, '2018-01-14 13:37:11', 0, 3.00, 1, 3.00, '', '', '', '', '', 'gamze', '', '', 'Onayland?', NULL, NULL, '                                                             ', NULL),
(63, 1, 30, '2018-01-14 13:37:09', 0, 2.00, 1, 2.00, '', '', '', '', '', 'gamze', '', '', 'Onayland?', NULL, NULL, '                                                             ', NULL),
(64, 1, 31, '2018-01-14 13:37:07', 0, 3.00, 1, 3.00, '', '', '', '', '', 'gamze', '', '', 'tamamlandi', NULL, NULL, '                                                                                                                          ', NULL),
(65, 1, 34, '2018-01-14 13:37:06', 0, 89.00, 1, 89.00, '', '', '', '', '', 'gamze', '', '', 'Onayland?', NULL, NULL, '                                                             ', NULL),
(66, 1, 15, '2018-01-14 13:38:02', 0, 40.00, 1, 40.00, '', '', '', '', '', 'gamze', '', '', 'yeni', NULL, NULL, NULL, NULL),
(67, 1, 15, '2018-01-14 13:39:48', 0, 40.00, 1, 40.00, '', '', '', '', '', 'gamze', '', '', 'yeni', NULL, NULL, NULL, NULL),
(68, 1, 30, '2018-01-14 14:14:17', 0, 2.00, 1, 2.00, '', '', '', '', '', 'Gamze Güneysi', '', '', 'yeni', NULL, NULL, NULL, NULL),
(69, 1, 15, '2018-01-14 14:16:58', 0, 40.00, 1, 40.00, '', '', '', '', '', 'Gamze Güneysi', '', '', 'yeni', NULL, NULL, NULL, NULL),
(70, 1, 15, '2018-01-14 14:19:36', 0, 40.00, 1, 40.00, '', '', '', '', '', 'Gamze Güneysi', '', '', 'yeni', NULL, NULL, NULL, NULL),
(71, 1, 34, '2018-01-14 14:19:48', 0, 89.00, 1, 89.00, '', '', '', '', '', 'Gamze Güneysi', '', '', 'yeni', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis_urunler`
--

CREATE TABLE `siparis_urunler` (
  `Id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `siparis_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `tarih` datetime NOT NULL,
  `adi` varchar(30) NOT NULL,
  `tutar` int(11) NOT NULL,
  `adsoy` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `siparis_urunler`
--

INSERT INTO `siparis_urunler` (`Id`, `musteri_id`, `siparis_id`, `urun_id`, `adet`, `fiyat`, `tarih`, `adi`, `tutar`, `adsoy`) VALUES
(1, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', 'gamzeee', 0, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `adi` varchar(30) NOT NULL,
  `kodu` varchar(30) NOT NULL,
  `turu` int(11) NOT NULL,
  `kategori` int(11) NOT NULL,
  `afiyat` float NOT NULL,
  `sfiyat` float NOT NULL,
  `stok` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `aciklama` text NOT NULL,
  `durum` varchar(50) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `resim` varchar(50) NOT NULL,
  `birim` varchar(255) DEFAULT NULL,
  `gurubu` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `adi`, `kodu`, `turu`, `kategori`, `afiyat`, `sfiyat`, `stok`, `description`, `keywords`, `aciklama`, `durum`, `tarih`, `resim`, `birim`, `gurubu`) VALUES
(0, 'PismisInekSutu5Litre', '', 0, 12, 0, 6, 0, '', '', 'Do?al, mis gibi çi? günlük süt sipari?inizle  kap?n?za gönderece?iz. Siz sipari? verdi?inizde el de?meden sa?acak;  so?uk hava zinciri içerisinde paketleyece?iz.', '', '2018-01-14 14:31:44', 'pismis-inek-sutu-5-litre-1.jpg', NULL, NULL),
(13, 'domates', '', 0, 1, 0, 0, 0, '', '', 'Mis salk?m domatesimiz sulu yap?s?, inceye yak?n kabu?u ve kokusuyla bask?n bir cins domatestir. Sipari? verdi?inizde toplar?z. Taze taze adresinize yollar?z.', '', '2018-01-08 21:57:11', 'domates-34321.jpg', NULL, NULL),
(14, 'cilekli recel', '', 0, 21, 0, 29, 0, '', '', 'Ev yap?m? ve katk?s?zd?r.', '', '2018-01-14 01:29:40', 'recel.jpg', NULL, NULL),
(15, 'bal', '', 0, 22, 0, 40, 0, '', '', 'Çiftli?imizde ar?lar?m?z mis kokulu çiçeklerden ald?klar? özütleri bala çeviriyor. Ballar?m?z? da sadece çiftli?imizde üretiyoruz, bal peteklerimizle kendimiz ilgileniyoruz. Bal?m?z?n analizlerini düzenli yapt?r?yoruz.\r\n\r\n', '', '2018-01-14 01:29:24', 'bal.jpg', NULL, NULL),
(17, 'losyon', '', 0, 14, 0, 46, 0, '', '', 'Giysilerin alt?nda yeterince hava ve nem almad??? için kuruyan cildiniz için özel geli?tirilmi? Laber Vücüt Losyonu cildinizi nemlendirirken besler, tazelik ve parlakl?k verir. ', '', '2018-01-14 01:30:07', 'losyon.jpg', NULL, NULL),
(18, 'Sabun', '', 0, 14, 0, 7, 0, '', '', 'Özel formüle edilmi? içeri?i ile cilt dostu bir sabundur.', '', '2018-01-14 01:30:23', 'keçisütüsabunu.jpg', NULL, NULL),
(19, 'Lavanta', '', 0, 14, 0, 46, 0, '', '', 'cildinizi nemlendirirken besler, tazelik ve parlakl?k verir. ', '', '2018-01-14 01:29:54', 'lavanta.jpg', NULL, NULL),
(21, 'YabaniCicekBali', '', 0, 22, 0, 60, 0, '', '', 'Yabani çiçek balimizi kahvaltilarda ve her türlü yiyecek ve içecegi tatlandirma amaciyla kullanabileceiniz gibi, yemeklerden sonra sifa niyetine bir miktar tüketebilirsiniz. Arilarimizin Bergama\'nin daglarinda dogal floradan yüzlerce farkl? yabani bitkiden topladiklari polenlerden ürettikleri yabani çiçek balin bogazinizda birakacag? hafif yanma hissi, siradan ballar ile farkini ortaya çikaracaktir. Tüm ballar gibi 2 yasindan küçük çocuklariniza yedirmemenizi tavsiye ederiz. Bunun disinda afiyetle evinizde, sofran?zda tüketebilirsiniz. Afiyet olsun, sifa olsun. ', '', '2018-01-14 01:30:29', 'yabanicicekbali450.jpg', NULL, NULL),
(22, 'CamBali900Gr', '', 0, 3, 0, 70, 0, '', '', 'Çiftli?imizde ar?lar?m?z mis kokulu çiçeklerden ald?klar? özütleri bala çeviriyor. Ballar?m?z? da sadece çiftli?imizde üretiyoruz, bal peteklerimizle kendimiz ilgileniyoruz. Bal?m?z?n analizlerini düzenli yapt?r?yoruz.\r\n\r\n', '', '2018-01-09 18:40:01', 'cambali.jpg', NULL, NULL),
(23, 'AyvaReceli450Gr', '', 0, 21, 0, 9, 0, '', '', 'Ev yap?m? ve katk?s?zd?r.', '', '2018-01-13 14:20:02', 'ayvareceli450gr.jpg', NULL, NULL),
(24, 'DogalMandaSutu1litre', '', 0, 12, 0, 3, 0, '', '', 'Do?al, mis gibi çi? günlük süt sipari?inizle  kap?n?za gönderece?iz. Siz sipari? verdi?inizde el de?meden sa?acak;  so?uk hava zinciri içerisinde paketleyece?iz.', '', '2018-01-14 01:29:46', 'dogalmandasütü1litre.jpg', NULL, NULL),
(26, 'DogalKoyYumurtasi', '', 0, 15, 0, 8, 0, '', '', 'Çiftli?imizin günlük, taze, hakiki köy yumurtalar?. Her sabah taze taze toplar?z, sipari?iniz üzerine haz?rlar?z', '', '2018-01-09 18:44:36', '0001122_dogal-koy-yumurtasi-15-adet.jpg', NULL, NULL),
(27, 'YesilZeytin', '', 0, 17, 0, 57, 0, '', '', 'Zeytinlerimizi Ayval?k\'?n Kozak yaylas? ve deniz aras?nda kalan topraklar?m?zda yeti?tiriyoruz. Geleneksel yöntemlerler dolduruyor, salamura ediyoruz.', '', '2018-01-14 01:30:43', 'yesilzeytin.jpg', NULL, NULL),
(28, 'SiyahZeytin', '', 0, 17, 0, 50, 0, '', '', 'Zeytinlerimizi Ayval?k\'?n Kozak yaylas? ve deniz aras?nda kalan topraklar?m?zda yeti?tiriyoruz. Geleneksel yöntemlerler dolduruyor, salamura ediyoruz.', '', '2018-01-14 01:30:36', 'siyahzeytin.jpg', NULL, NULL),
(29, 'ZeytinYag', '', 0, 19, 0, 89, 0, '', '', 'Zeytinlerimizi Ayval?k\'?n Kozak yaylas? ve deniz aras?nda kalan topraklar?m?zda yeti?tiriyoruz. Geleneksel yöntemlerler dolduruyor, salamura ediyoruz.', '', '2018-01-14 01:31:04', 'yag.jpg', NULL, NULL),
(30, 'Biber', '', 0, 1, 0, 2, 0, '', '', ' inceye yak?n kabu?u ve kokusuyla bask?n bir cinstir. Sipari? verdi?inizde toplar?z. Taze taze adresinize yollar?z.', '', '2018-01-14 01:29:31', 'kapya-biber.jpg', NULL, NULL),
(31, 'Portakal', '', 0, 1, 0, 3, 0, '', '', ' inceye yak?n kabu?u ve kokusuyla bask?n bir cinstir. Sipari? verdi?inizde toplar?z. Taze taze adresinize yollar?z.', '', '2018-01-14 01:30:00', 'portakal.jpg', NULL, NULL),
(32, 'PismisInekSutu5Litre', '', 0, 2, 0, 11, 0, '', '', '', '', '2018-01-14 14:32:59', 'pismis-inek-sutu-5-litre-1.jpg', NULL, 'kampanya'),
(33, 'domates1', '', 0, 23, 0, 10, 0, '', '', 'Mis salk?m domatesimiz sulu yap?s?, inceye yak?n kabu?u ve kokusuyla bask?n bir cins domatestir. Sipari? verdi?inizde toplar?z. Taze taze adresinize yollar?z.', '', '2018-01-14 14:30:33', 'domates1.jpg', NULL, NULL),
(34, 'zeytinn', '', 0, 5, 0, 89, 0, '', '', 'Zeytinlerimizi Ayval?k\'?n Kozak yaylas? ve deniz aras?nda kalan topraklar?m?zda yeti?tiriyoruz. Geleneksel yöntemlerler dolduruyor, salamura ediyoruz.', '', '2018-01-14 14:30:37', 'zeytinn.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler_resim`
--

CREATE TABLE `urunler_resim` (
  `Id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `resim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `urunler_resim`
--

INSERT INTO `urunler_resim` (`Id`, `urun_id`, `resim`) VALUES
(8, 2, 'images.jpg'),
(10, 2, 'images1.jpg'),
(11, 2, 'images2.jpg'),
(13, 2, 'domates-34311.jpg'),
(14, 2, 'domates-34312.jpg'),
(15, 2, 'images_(1).jpg'),
(16, 2, 'domates-34313.jpg'),
(21, 4, 'images_(1)1.jpg'),
(26, 10, 'images_(1)4.jpg'),
(27, 10, 'images6.jpg'),
(29, 4, 'domates-34318.jpg'),
(30, 4, 'elma1.jpg'),
(31, 14, 'domates-34329.jpg'),
(32, 14, 'images_(1)5.jpg'),
(33, 14, 'recel1.jpg'),
(35, 23, 'recel21.jpg'),
(36, 15, 'recel3.jpg'),
(37, 30, 'kapya-biber1.jpg'),
(38, 22, 'recel11.jpg'),
(39, 26, 'images_(1)11.jpg'),
(40, 24, 'dogalmandasÃ¼tÃ¼1litre.jpg'),
(41, 33, 'domates-34371.jpg'),
(42, 31, 'portakal1.jpg'),
(43, 18, 'keçisütüsabunu.jpg'),
(44, 18, 'lavanta1.jpg'),
(45, 19, 'keÃ§isÃ¼tÃ¼sabunu.jpg'),
(46, 28, 'siyahzeytin1.jpg'),
(47, 21, 'recel12.jpg'),
(48, 34, 'yag1.jpg'),
(49, 17, 'keÃ§isÃ¼tÃ¼sabunu1.jpg'),
(51, 13, 'domates-343121.jpg'),
(53, 0, 'pismis-inek-sutu-5-litre-11.jpg'),
(54, 27, 'yesilzeytin1.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `adsoy` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sifre` varchar(30) NOT NULL,
  `yetki` varchar(30) NOT NULL,
  `durum` varchar(30) NOT NULL,
  `resim` varchar(30) NOT NULL,
  `tarih` date NOT NULL,
  `sehir` varchar(30) NOT NULL,
  `adres` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `adsoy`, `email`, `sifre`, `yetki`, `durum`, `resim`, `tarih`, `sehir`, `adres`, `tel`) VALUES
(1, 'gamze güneysi', 'gamzeguneysi@hotmail.com', '1234', 'Uye', 'Aktif', '', '0000-00-00', 'Ankara', 'karabuk', '0504788900'),
(3, 'ayse gel', 'aysegel@hotmail.com', '88', 'Uye', 'Aktif', '', '0000-00-00', 'Ankara', '', 'fdgfetre54t53'),
(4, 'Çigdem Altin', 'cigdem@gmail.com', '456', 'admin', 'aktif', '', '0000-00-00', '', '', ''),
(5, 'asd', 'as@gmail.com', '123', '', '', '', '0000-00-00', 'sxfvbg', 'sfgb', '3445'),
(6, 'gazmze', 'g@gmail.com', '123', '', '', '', '0000-00-00', 'xscdvf', 'sd', '234');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `sehir`
--
ALTER TABLE `sehir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `plaka` (`plaka`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler_resim`
--
ALTER TABLE `urunler_resim`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Tablo için AUTO_INCREMENT değeri `sehir`
--
ALTER TABLE `sehir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- Tablo için AUTO_INCREMENT değeri `siparis_urunler`
--
ALTER TABLE `siparis_urunler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- Tablo için AUTO_INCREMENT değeri `urunler_resim`
--
ALTER TABLE `urunler_resim`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
