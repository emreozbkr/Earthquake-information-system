-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Ara 2023, 12:47:04
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `deprem_uygulamasi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(11) NOT NULL,
  `anahtar` varchar(500) NOT NULL,
  `aciklama` varchar(250) NOT NULL,
  `url` varchar(350) NOT NULL,
  `durum` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `anahtar`, `aciklama`, `url`, `durum`) VALUES
(1, 'deprem,deprem risk analizi, bina hasar, son 24 saatlik deprem,haberler,deprem haberleri,deprem risk haritası', 'Depremleri kapsayan bir web uygulaması uygulaması.', 'http://localhost/php/DepremUygulamasi', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `depremler`
--

CREATE TABLE `depremler` (
  `id` int(11) NOT NULL,
  `tarih` date NOT NULL,
  `saat` time NOT NULL,
  `enlem` varchar(5) NOT NULL,
  `boylam` varchar(5) NOT NULL,
  `derinlik` varchar(5) NOT NULL,
  `buyukluk` varchar(5) NOT NULL,
  `il_id` varchar(10) NOT NULL,
  `ilce_isim` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `depremler`
--

INSERT INTO `depremler` (`id`, `tarih`, `saat`, `enlem`, `boylam`, `derinlik`, `buyukluk`, `il_id`, `ilce_isim`) VALUES
(1, '2023-12-04', '10:42:46', '40.42', '28.83', '5.4', '5.1', '16', 'Gemlik'),
(2, '2023-11-23', '17:46:42', '38.13', '38.53', '5.1', '5.2', '44', 'Battalgazi'),
(3, '2023-08-10', '20:48:20', '38.30', '38.20', '5.4', '5.3', '44', 'Yeşilyurt'),
(4, '2023-07-25', '08:44:55', '37.63', '35.88', '5.1', '5.6', '1', 'Kozan'),
(5, '2023-02-25', '13:27:21', '37.99', '34.01', '5.4', '5.3', '51', 'Bor'),
(8, '2023-02-20', '20:04:08', '36.11', '36.08', '5.1', '6.5', '31', 'Samandağ'),
(9, '2023-02-06', '13:24:46', '38.07', '41.15', '5.4', '7.6', '46', 'Elbistan'),
(10, '2023-02-06', '04:17:42', '37.11', '37.11', '5.1', '7.7', '46', 'Pazarcık'),
(11, '2022-11-23', '04:08:35', '36.12', '36.08', '5.4', '6.0', '81', 'Gölyaka'),
(12, '2022-11-04', '03:29:14', '38.35', '27.19', '5.1', '4.8', '35', 'Buca'),
(13, '2020-12-27', '09:37:18', '38.50', '39.21', '5.4', '5.6', '76', 'Kavaktepe'),
(16, '2020-06-04', '12:37:42', '37.90', '26.79', '5.1', '5.3', '44', 'Pütürge'),
(17, '2020-06-28', '20:43:31', '35.67', '26.26', '5.4', '5.4', '48', 'Marmaris'),
(20, '2020-06-26', '10:21:52', '38.13', '38.74', '5.1', '5.5', '45', 'Sazoba'),
(21, '2020-01-24', '20:55:16', '36.68', '28.26', '5.4', '6.8', '23', 'Sivrice'),
(22, '2020-01-22', '22:22:20', '38.79', '27.80', '5.1', '5.6', '45', 'Musalar'),
(23, '2019-09-26', '13:59:45', '38.46', '44.13', '5.4', '5.7', '34', 'Silivri'),
(24, '2019-08-08', '14:25:12', '39.34', '40.73', '5.1', '5.9', '20', 'Baklan'),
(25, '2019-08-08', '11:25:46', '37.69', '28.59', '5.4', '6.0', '20', 'Bozkurt'),
(26, '2011-05-19', '23:15:02', '36.45', '29.07', '5.1', '5.9', '43', 'Simav'),
(27, '2011-05-19', '23:15:02', '36.45', '29.07', '5.1', '5.9', '43', 'Simav'),
(31, '2011-05-19', '23:15:02', '36.45', '29.07', '5.5', '5.1', '43', 'asdasdff');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `haber_id` int(11) NOT NULL,
  `haber_baslik` varchar(150) NOT NULL,
  `haber_img` varchar(200) NOT NULL,
  `haber_icerik` text NOT NULL,
  `haber_yuklenme_tarihi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`haber_id`, `haber_baslik`, `haber_img`, `haber_icerik`, `haber_yuklenme_tarihi`) VALUES
(6, 'Hatay\'da 3,9 büyüklüğünde deprem', 'hatay-1475733_1.jpg', '<h3>Hatay&#39;ın Kırıkhan il&ccedil;esinde 3,9 b&uuml;y&uuml;kl&uuml;ğ&uuml;nde deprem meydana geldi.</h3>\r\n\r\n<p>Afet ve Acil Durum Y&ouml;netimi Başkanlığının (AFAD) internet sitesinde yer alan bilgiye g&ouml;re, saat 05.05&#39;te merkez &uuml;ss&uuml; Hatay&#39;ın Kırıkhan il&ccedil;esi olan 3,9 b&uuml;y&uuml;kl&uuml;ğ&uuml;nde sarsıntı kaydedildi.</p>\r\n\r\n<p>Depremin 8,94 kilometre derinlikte olduğu belirlendi.</p>\r\n', '2023-12-30 11:18:18'),
(7, 'Malatya\'da 4,6 büyüklüğünde deprem | Son depremler', 'ebRQJsxISUG3uaqXoD7EcQ.webp', '<p>AFAD&#39; dan deprem a&ccedil;ıklaması geldi.</p>\r\n\r\n<p>Malatya&#39;nın Yeşilyurt il&ccedil;esinde 4,6 b&uuml;y&uuml;kl&uuml;ğ&uuml;nde bir deprem oldu.&nbsp;</p>\r\n\r\n<p>Saat 12.34&#39;teki depremin derinliği 17,3 kilometre olarak kaydedildi. ,</p>\r\n\r\n<p>&Ccedil;evre il&ccedil;e ve illerde de hissedilen sarsıntı paniğe neden oldu. İlk belirlemelere g&ouml;re herhangi bir olumsuz durum yok, incelemeler ise s&uuml;r&uuml;yor.</p>\r\n', '2023-12-30 11:20:12'),
(8, 'Çankırı’da 4,5 büyüklüğünde deprem | Son depremler', 'Rvrp6z77e0WqVyb4RV-xEQ.webp', '<p>AFAD&#39;dan son dakika deprem a&ccedil;ıklaması geldi. &Ccedil;ankırı&rsquo;da saat 16.04&rsquo;te 4,5 b&uuml;y&uuml;kl&uuml;ğ&uuml;nde deprem meydana geldi.</p>\r\n\r\n<p>Afet ve Acil Durum Y&ouml;netimi Başkanlığı&rsquo;nın (AFAD) sitesinde yer alan bilgiye g&ouml;re, merkez &uuml;ss&uuml; &Ccedil;ankırı&rsquo;nın Ilgaz il&ccedil;esi olan 4,5 b&uuml;y&uuml;kl&uuml;ğ&uuml;nde sarsıntı kaydedildi. Depremin 7 kilometre derinlikte olduğu belirlendi.</p>\r\n\r\n<p>&Ccedil;ankırı ve &ccedil;evre illerden de hissedilen sarsıntının ardından AFAD&rsquo;tan yapılan a&ccedil;ıklamada, &ldquo;Deprem sonrası, an itibarıyla olumsuz bir durum bulunmamaktadır. Saha tarama &ccedil;alışmaları devam etmektedir. Vatandaşlarımıza ge&ccedil;miş olsun dileklerimizi sunarız.&rdquo; denildi.</p>\r\n\r\n<p>&Ccedil;ankırı Valisi Fırat Taşolar da, sosyal medya hesabından yaptığı a&ccedil;ıklamada, depremle ilgili kurumlarına ulaşan herhangi bir olumsuz &ccedil;ağrı olmadığını bildirdi.</p>\r\n', '2023-12-30 11:21:33'),
(9, 'Akdeniz\'de 4,1 büyüklüğünde deprem | Son depremler', 'roYoe22NV0OZADMQBZIwmg.webp', '<p>AFAD&#39;dan son dakika deprem a&ccedil;ıklaması geldi.Afet ve Acil Durum Y&ouml;netimi Başkanlığının (AFAD) internet sitesinde yer alan bilgiye g&ouml;re, saat 19.06&#39;da merkez &uuml;ss&uuml; Akdeniz a&ccedil;ıkları olan 4,1 b&uuml;y&uuml;kl&uuml;ğ&uuml;nde sarsıntı kaydedildi.<br />\r\n<br />\r\nMerkez &uuml;ss&uuml; Muğla&#39;nın Dat&ccedil;a il&ccedil;esine 297,91 kilometre mesafede olan depremin, 7,07 kilometre derinlikte meydana geldiği belirlendi.</p>\r\n', '2023-12-30 11:22:42');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `isim` varchar(100) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `icerik` text NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE `iller` (
  `il_id` int(11) NOT NULL,
  `il_isim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`il_id`, `il_isim`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyonkarahisar'),
(4, 'Ağrı'),
(5, 'Amasya'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(23, 'Elazığ'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eskişehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümüşhane'),
(30, 'Hakkari'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, 'İstanbul'),
(35, 'İzmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'Kırklareli'),
(40, 'Kırşehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmaraş'),
(47, 'Mardin'),
(48, 'Muğla'),
(49, 'Muş'),
(50, 'Nevşehir'),
(51, 'Niğde'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirdağ'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'Kırıkkale'),
(72, 'Batman'),
(73, 'Şırnak'),
(74, 'Bartın'),
(75, 'Ardahan'),
(76, 'Iğdır'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adsoyad` varchar(100) NOT NULL,
  `kullanici_telefon` varchar(15) NOT NULL,
  `kullanici_email` varchar(100) NOT NULL,
  `kullanici_sifre` varchar(200) NOT NULL,
  `kullanici_rol` tinyint(1) NOT NULL DEFAULT 0,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kullanici_id`, `kullanici_adsoyad`, `kullanici_telefon`, `kullanici_email`, `kullanici_sifre`, `kullanici_rol`, `tarih`) VALUES
(6, 'admin', '05555555555', 'admin@gmail.com', '9cbf8a4dcb8e30682b927f352d6559a0', 1, '2023-12-29 22:27:24');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logkaydi`
--

CREATE TABLE `logkaydi` (
  `id` int(11) NOT NULL,
  `kullanici_id` varchar(10) NOT NULL,
  `kullanici_ip` varchar(30) NOT NULL,
  `sayfa_adi` varchar(550) NOT NULL,
  `tarayici_adi` varchar(200) NOT NULL,
  `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `aciklama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `depremler`
--
ALTER TABLE `depremler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`haber_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iller`
--
ALTER TABLE `iller`
  ADD PRIMARY KEY (`il_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `logkaydi`
--
ALTER TABLE `logkaydi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `depremler`
--
ALTER TABLE `depremler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `haber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `iller`
--
ALTER TABLE `iller`
  MODIFY `il_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `logkaydi`
--
ALTER TABLE `logkaydi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
