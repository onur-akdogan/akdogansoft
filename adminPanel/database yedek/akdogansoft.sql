-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 17 Mar 2021, 19:46:33
-- Sunucu sürümü: 5.7.17-log
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `akdogansoft`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyurular`
--

CREATE TABLE `duyurular` (
  `duyuruId` int(11) NOT NULL,
  `duyuruBaslik` text NOT NULL,
  `duyuruIcerik` text NOT NULL,
  `fotoYol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkimizda_id` int(11) NOT NULL,
  `hakkimizda_baslik` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_vizyon` text COLLATE utf8_turkish_ci NOT NULL,
  `hakkimizda_misyon` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkimizda_id`, `hakkimizda_baslik`, `hakkimizda_icerik`, `hakkimizda_vizyon`, `hakkimizda_misyon`) VALUES
(1, 'Sanane', 'banane', 'bizene', 'Misyoneriz amk');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmetId` int(11) NOT NULL,
  `hizmetBaslik` text NOT NULL,
  `hizmetIcerik` text NOT NULL,
  `hizmetFiyat` int(11) NOT NULL,
  `fotoYol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmetId`, `hizmetBaslik`, `hizmetIcerik`, `hizmetFiyat`, `fotoYol`) VALUES
(1, 'fsvdsfvsdfa', 'vsdfzz', 0, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_resim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_password` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_resim`, `kullanici_ad`, `kullanici_mail`, `kullanici_password`) VALUES
(1, 'https://avatars2.githubusercontent.com/u/55892556?s=460&u=5ce4362136d8e0938f8b536471b5abc924c2c138&v=4', 'Onur', 'onurakdogan0@outlook.com', '18811938'),
(2, 'https://onurakdogan.website/images/img_avatar1.png', 'Admin', 'admin@admin.com', '18811938'),
(3, '', 'onur', 'a', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE `referanslar` (
  `referansId` int(11) NOT NULL,
  `referansBaslik` text NOT NULL,
  `fotoYol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`referansId`, `referansBaslik`, `fotoYol`) VALUES
(1, 'yahşi Medya', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siteayarlar`
--

CREATE TABLE `siteayarlar` (
  `siteId` int(11) NOT NULL,
  `sitebaslik` text NOT NULL,
  `siteaciklama` text NOT NULL,
  `anahtarkelimeler` text NOT NULL,
  `telno` text NOT NULL,
  `mail` text NOT NULL,
  `ilce` text NOT NULL,
  `il` text NOT NULL,
  `acikadres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `siteayarlar`
--

INSERT INTO `siteayarlar` (`siteId`, `sitebaslik`, `siteaciklama`, `anahtarkelimeler`, `telno`, `mail`, `ilce`, `il`, `acikadres`) VALUES
(1, 'AkdoğanSoft', 'Bir yazılım şirketiyiz bilader', 'yazılım,mobil uygulama', '05051313404', 'admin@admin.com', 'merkez', 'kırıkkale', 'kk/merkez');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `sliderId` int(11) NOT NULL,
  `sliderBaslik` text NOT NULL,
  `fotoYol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`sliderId`, `sliderBaslik`, `fotoYol`) VALUES
(9, '404 resmi eklendimi', 'ok'),
(10, 'Oteller zincirimiz var reis', 'deluxeoda1_3ajfvbemuig4o1.jpg'),
(11, '404 resmi eklendimi', 'adminPanel/admin/dosyalar/404.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urunId` int(11) NOT NULL,
  `UrunBaslik` text NOT NULL,
  `urunIcerik` text NOT NULL,
  `urunFiyat` int(11) NOT NULL,
  `fotoYol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urunId`, `UrunBaslik`, `urunIcerik`, `urunFiyat`, `fotoYol`) VALUES
(1, 'Android uygulama', 'sizinde olmasınmı ama', 10, ''),
(2, 'Android uygulama', 'sizinde olmasınmı ama', 10, ''),
(3, '', '', 0, ''),
(4, 'hizmettttsssss', 'sizinde olmasınmı ama', 10, '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `duyurular`
--
ALTER TABLE `duyurular`
  ADD PRIMARY KEY (`duyuruId`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD UNIQUE KEY `hakkimizda_id` (`hakkimizda_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmetId`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`),
  ADD UNIQUE KEY `kullanici_id` (`kullanici_id`);

--
-- Tablo için indeksler `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`referansId`);

--
-- Tablo için indeksler `siteayarlar`
--
ALTER TABLE `siteayarlar`
  ADD PRIMARY KEY (`siteId`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sliderId`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urunId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `duyurular`
--
ALTER TABLE `duyurular`
  MODIFY `duyuruId` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `referansId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `siteayarlar`
--
ALTER TABLE `siteayarlar`
  MODIFY `siteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urunId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
