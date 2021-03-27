-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 27 Mar 2021, 16:06:32
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

--
-- Tablo döküm verisi `duyurular`
--

INSERT INTO `duyurular` (`duyuruId`, `duyuruBaslik`, `duyuruIcerik`, `fotoYol`) VALUES
(13, 'beleş otel duyurusu', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'adminPanel/admin/dosyalar/four-seasons-otel-miami.jpg'),
(14, 'Kahvaltı', 'şirketimiz herkese sabah kahvaltısı verecektir:', 'adminPanel/admin/dosyalar/kisilik serpme-min.jpg');

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
(1, 'Türkiye’nin en iyi ve en çok tercih edilen yazılım', 'Müşterilerine en iyiyi sunmak, müşteri memnuniyetini en üst düzeyde tutmak üzere şekillendirdiği özel felsefesiyle, kurulduğu günden bugüne, AkdoğanSoft ile çalışmayı seçmiş bütün müşterilerine üst düzey hizmet sunmuştur. Müşterileri ile arasındaki bu bağlılığın temelinde takipçi iş disiplini ve güvene dayalı iş birlikleri bulunmaktadır.', 'Konusunda uzman ve tecrübeli kadromuzla bilgi teknolojileri alanında yenilikçi, dürüst, memnuniyete önem veren ve çoğu kesim tarafından basite indirgenen hizmet alanlarımızın önemini kanıtlayan bir firma olmak. Yazlım ve tasarım sektöründe mutlu ettiği müşterilerle önce İzmir’in, daha sonra da Türkiye’nin yenilikçi, mükemmelliği arayan, saygın ve lider firması olabilmektir.', 'Bizlere şirketlerinin internet dünyasındaki vitrinlerini emanet edenlere en son yenilikler ışığında hızlı, karlı, güvenli ve etkin çözümler sunabilmektir. Ürün ve hizmet kalitemizi sürekli geliştirerek müşteri talep ve beklentilerini en üst seviyede karşılamak, Güçlü bir iletişim ile müşterilerimizle aramızda duygusal bir bağ yaratmak ve müşteri sadakatini sağlamak, rekabet gücümüzü ve kârlılığımızı arttırmak adına kaliteli hizmet sunmaktır.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmetId` int(11) NOT NULL,
  `hizmetBaslik` text NOT NULL,
  `hizmetIcerik` text NOT NULL,
  `hizmetFiyat` int(11) NOT NULL,
  `fotoYol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmetId`, `hizmetBaslik`, `hizmetIcerik`, `hizmetFiyat`, `fotoYol`) VALUES
(5, 'vbdfbfg', 'fgfgfg', 0, 'adminPanel/admin/dosyalar/1KQU.jpg'),
(10, 'hacker hizmeti', 'hackerlardan koruruz', 1234, 'adminPanel/admin/dosyalar/HACKER_hack_hacking_internet_computer_anarchy_sadic_virus_dark_anonymous_code_binary_5261x3159.jpg'),
(11, 'performansı yüksek pcler', 'i12 10.gen işlemci', 20000, 'adminPanel/admin/dosyalar/Chip_IC_PCB_high_tech_5120x2880.jpg'),
(12, 'telefona Rom Atma', 'telefonunuzun android surumünü yükseltin', 50, 'adminPanel/admin/dosyalar/pexels-tyler-lastovich-699122.jpg');

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
(8, 'adminPanel/admin/dosyalar/1KQU.jpg', 'koşan adamss', 'ka', 'ka');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `musteriId` int(11) NOT NULL,
  `musteriAdi` text NOT NULL,
  `musteriMail` text NOT NULL,
  `musteriKonu` text NOT NULL,
  `musteriIcerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`musteriId`, `musteriAdi`, `musteriMail`, `musteriKonu`, `musteriIcerik`) VALUES
(6, 'onur', 'ONUR@ONUR.COM', 'Bayramınız Mübarek olsun akdogabSoft ailesi', '\r\nTüm yürekler sevinç dolsun umutlar gerçek olsun acılar unutulsun dualarımız kabul ve bayramınız mübarek olsun.\r\n');

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
(12, 'kanal D ', 'adminPanel/admin/dosyalar/kanal d.jpg'),
(13, '24 tv', 'adminPanel/admin/dosyalar/24 Tv.jpg'),
(14, '360 tv', 'adminPanel/admin/dosyalar/360  tv.jpg'),
(15, 'Atv', 'adminPanel/admin/dosyalar/atv logo.jpg'),
(16, 'Beyaz Tv', 'adminPanel/admin/dosyalar/beyaz tv.jpg'),
(17, 'Bloomberg ', 'adminPanel/admin/dosyalar/bloomberg.jpg'),
(18, 'Yahşi SOFT YAZILIM ŞİRKETİ', 'adminPanel/admin/dosyalar/logo_180.jpg'),
(19, 'YAhşi Medya', 'adminPanel/admin/dosyalar/yahsi-logo.jpg');

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
(1, 'AkdoğanSoft®', 'Bir yazılım şirketiyiz bilader', 'yazılım,mobil uygulama', '05051313404', 'akdoganSoft@info.com', 'merkez', 'Kırıkkale', 'Yenişehir mah., Kırıkkale Üniversitesi, Ankara Cd. 7. Km, 71450 Yahşihan/Kırıkkale');

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
(20, 'rsliders', 'adminPanel/admin/dosyalar/four-seasons-otel-miami - Kopya.jpg'),
(22, 'bnvbbcv', 'adminPanel/admin/dosyalar/four-seasons-otel-miami.jpg'),
(24, 'dsvdsvds', 'adminPanel/admin/dosyalar/deluxeoda1_3ajfvbemuig4o1.jpg'),
(25, 'dsfsdafsd', 'adminPanel/admin/dosyalar/K7HK0B0351L201664831.jpg'),
(26, 'fsvffdsv', 'adminPanel/admin/dosyalar/four-seasons-otel-miami.jpg'),
(27, 'mobil uygulama', 'adminPanel/admin/dosyalar/indir.jpg'),
(28, 'mobil uygulama', 'adminPanel/admin/dosyalar/pexels-tyler-lastovich-699122.jpg'),
(29, 'hacker korumasından korunun', 'adminPanel/admin/dosyalar/HACKER_hack_hacking_internet_computer_anarchy_sadic_virus_dark_anonymous_code_binary_5261x3159.jpg'),
(30, 'Güvenli Sistem yoktur bunu unutmayın', 'adminPanel/admin/dosyalar/hack_hacking_hacker_virus_anarchy_dark_computer_internet_anonymous_sadic_code_4000x2251.jpg'),
(32, 'Her zaman En güçlüsü sizlerle', 'adminPanel/admin/dosyalar/Chip_IC_PCB_high_tech_5120x2880.jpg');

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
(12, 'Delux Oda', 'Kral dairesi odalarımız mevcut', 1000, 'adminPanel/admin/dosyalar/deluxeoda1_3ajfvbemuig4o1.jpg'),
(17, 'ewrfewr', 'fewrferwferw', 0, 'adminPanel/admin/dosyalar/hi_tech_tecnologia_pc_cam_3840x2400.jpg'),
(18, 'Asus PC', 'işlemci ekran kartı ve kasa başka birşey yok fiyatı bu', 10000000, 'adminPanel/admin/dosyalar/hi_tech_tecnologia_pc_cam_3840x2400.jpg'),
(19, 'İnstagram Çalma', 'eski sevgili insta çalınır', 1000, 'adminPanel/admin/dosyalar/HACKER_hack_hacking_internet_computer_anarchy_sadic_virus_dark_anonymous_code_binary_5261x3159.jpg');

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
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`musteriId`);

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
  MODIFY `duyuruId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `musteriId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `referansId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Tablo için AUTO_INCREMENT değeri `siteayarlar`
--
ALTER TABLE `siteayarlar`
  MODIFY `siteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `sliderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urunId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
