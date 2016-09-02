-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 12:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `href` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `href`) VALUES
(17, 'Home', 'index.php'),
(18, 'Articles', 'articles.php'),
(19, 'Services', 'services.php'),
(20, 'Help', 'Help.php'),
(22, 'Logos', 'logos.php');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) NOT NULL,
  `heading` varchar(400) NOT NULL,
  `paragraph` text NOT NULL,
  `img` varchar(150) NOT NULL,
  `author` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `click` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `heading`, `paragraph`, `img`, `author`, `date`, `click`) VALUES
(2, 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.', 'images/01092016215728.jpg', 'Nigar Jafar', '2016-09-01', 6),
(3, 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret', 'In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret. Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur, quam non erat mirum sapientiae lorem cupido patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.', 'images/01092016225058.jpg', 'Ulvi G', '2016-09-01', 7),
(4, 'â€œTaxt-taclarÄ±n oyunuâ€ Ginnesin Rekordlar kitabÄ±na dÃ¼ÅŸÃ¼b AmerikanÄ±n â€œHBOâ€ telekanalÄ±nda yayÄ±mlanan â€œTaxt-taclarÄ±n oyunuâ€ serialÄ± â€œpirat saytlardanâ€ É™n Ã§ox yÃ¼klÉ™nÉ™n serial kimi Ginnesin Rekordlar kitabÄ±na dÃ¼ÅŸÃ¼b, bu barÉ™dÉ™ tÉ™ÅŸkilatÄ±n rÉ™smi saytÄ±nda mÉ™lumat yayÄ±lÄ±b', 'â€œTaxt-taclarÄ±n oyunuâ€ Ginnesin Rekordlar kitabÄ±na dÃ¼ÅŸÃ¼b AmerikanÄ±n â€œHBOâ€ telekanalÄ±nda yayÄ±mlanan â€œTaxt-taclarÄ±n oyunuâ€ serialÄ± â€œpirat saytlardanâ€ É™n Ã§ox yÃ¼klÉ™nÉ™n serial kimi Ginnesin Rekordlar kitabÄ±na dÃ¼ÅŸÃ¼b, bu barÉ™dÉ™ tÉ™ÅŸkilatÄ±n rÉ™smi saytÄ±nda mÉ™lumat yayÄ±lÄ±b.   Oxu.Az xÉ™bÉ™r verir ki, â€œTorrentFreakâ€ - yÃ¼klÉ™mÉ™lÉ™rin monitorinq saytÄ±nÄ±n mÉ™lumatÄ±na gÃ¶rÉ™, 2015-ci ilin aprel ayÄ±ndan iyuna qÉ™dÉ™r serialÄ±n 14,4 milyon qanunsuz yÃ¼klÉ™nmÉ™si qeydÉ™ alÄ±nÄ±b.    Bundan baÅŸqa serial TV-ÅŸou arasÄ±nda da rekord vurub, belÉ™ ki, beÅŸinci mÃ¶vsÃ¼mÉ™ gÃ¶rÉ™, 12 â€œEmmiâ€ mÃ¼kafatÄ± alÄ±b.   â€œGinnesin Rekordlar kitabÄ± - 2017â€-nin yeni nÉ™ÅŸri satÄ±ÅŸa sentyabrÄ±n 8-dÉ™n Ã§Ä±xacaq.   Daha Ã¶ncÉ™ â€œTaxt-taclarÄ±n oyunuâ€ serialÄ±nÄ±n altÄ±ncÄ± mÃ¶vsÃ¼mÃ¼nÃ¼n finalÄ±na rekord sayda baxÄ±ÅŸ olduÄŸu barÉ™dÉ™ mÉ™lumat yayÄ±lmÄ±ÅŸdÄ±. â€œQÄ±ÅŸÄ±n kÃ¼lÉ™klÉ™riâ€ epizoduna HBO kanalÄ±nda 8,9 milyon nÉ™fÉ™r baxÄ±b.', 'images/0209201692153.jpg', 'Chingiz', '2016-09-02', 9),
(5, 'Ã–lkÉ™dÉ™ turizm mÉ™ktÉ™blÉ™ri aÃ§Ä±lacaq AzÉ™rbaycanda MÉ™dÉ™niyyÉ™t vÉ™ Turizm vÉ™ TÉ™hsil nazirliklÉ™ri birgÉ™ turizm vÉ™ rekreasiya zonalarÄ±nda turizm Ã¼zrÉ™ ilk peÅŸÉ™-ixtisas tÉ™hsili mÃ¼É™ssisÉ™lÉ™ri (peÅŸÉ™ mÉ™ktÉ™blÉ™ri vÉ™ peÅŸÉ™ liseylÉ™ri) yaradacaq', 'Ã–lkÉ™dÉ™ turizm mÉ™ktÉ™blÉ™ri aÃ§Ä±lacaq AzÉ™rbaycanda MÉ™dÉ™niyyÉ™t vÉ™ Turizm vÉ™ TÉ™hsil nazirliklÉ™ri birgÉ™ turizm vÉ™ rekreasiya zonalarÄ±nda turizm Ã¼zrÉ™ ilk peÅŸÉ™-ixtisas tÉ™hsili mÃ¼É™ssisÉ™lÉ™ri (peÅŸÉ™ mÉ™ktÉ™blÉ™ri vÉ™ peÅŸÉ™ liseylÉ™ri) yaradacaq.  Oxu.Az xÉ™bÉ™r verir ki, bu barÉ™dÉ™ Prezident Ä°lham Æliyevin turizmin inkiÅŸafÄ± ilÉ™ baÄŸlÄ± É™lavÉ™ tÉ™dbirlÉ™r haqqÄ±nda sÉ™rÉ™ncamÄ±nda É™ks olunub.   SÉ™nÉ™dÉ™ É™sasÉ™n, yeni il peÅŸÉ™-ixtisas tÉ™hsil mÃ¼É™ssisÉ™lÉ™ri Turizm vÉ™ Menecment Universitetinin nÉ™zdindÉ™ tÉ™ÅŸkil edilÉ™cÉ™k.  Prezident bu mÉ™qsÉ™dlÉ™ mÃ¼vafiq torpaq sahÉ™sinin vÉ™ É™mlakÄ±n ayrÄ±lmasÄ± ilÉ™ baÄŸlÄ± tÉ™dbirlÉ™rin gÃ¶rÃ¼lmÉ™si ilÉ™ baÄŸlÄ± adiyyÉ™ti dÃ¶vlÉ™t qurumlarÄ±na mÃ¼vafiq tapÅŸÄ±rÄ±qlar verib. ', 'images/0209201692249.jpg', 'Ulviyya', '2016-09-02', 7),
(6, 'AzÉ™rbaycanda yeni bayram gÃ¼nÃ¼ tÉ™sis olunub AzÉ™rbaycanda â€œTurizm iÅŸÃ§ilÉ™ri gÃ¼nÃ¼â€ tÉ™sis edilib', 'AzÉ™rbaycanda yeni bayram gÃ¼nÃ¼ tÉ™sis olunub AzÉ™rbaycanda â€œTurizm iÅŸÃ§ilÉ™ri gÃ¼nÃ¼â€ tÉ™sis edilib.  Oxu.Az-Ä±n mÉ™lumatÄ±na gÃ¶rÉ™, prezident Ä°lham Æliyevin sÉ™rÉ™ncamÄ± ilÉ™ hÉ™r il sentyabr ayÄ±nÄ±n 27-si AzÉ™rbaycan RespublikasÄ±nda â€œTurizm iÅŸÃ§ilÉ™ri gÃ¼nÃ¼â€ peÅŸÉ™ bayramÄ± kimi qeyd edilÉ™cÉ™k.', 'images/0209201692414.jpg', 'Ali', '2016-09-02', 14),
(7, 'Ceki Ã‡an â€œOskarâ€ alacaq Amerika Kinematoqrafiya sÉ™nÉ™ti vÉ™ ElmlÉ™ri AkademiyasÄ± kino sahÉ™sindÉ™ki nailiyyÉ™tlÉ™rinÉ™ gÃ¶rÉ™ â€œOskarâ€ mÃ¼kafatÄ± laureatlarÄ±nÄ±n adÄ±nÄ± aÃ§Ä±qlayÄ±b', 'Ceki Ã‡an â€œOskarâ€ alacaq Amerika Kinematoqrafiya sÉ™nÉ™ti vÉ™ ElmlÉ™ri AkademiyasÄ± kino sahÉ™sindÉ™ki nailiyyÉ™tlÉ™rinÉ™ gÃ¶rÉ™ â€œOskarâ€ mÃ¼kafatÄ± laureatlarÄ±nÄ±n adÄ±nÄ± aÃ§Ä±qlayÄ±b.  Oxu.Az bu barÉ™dÉ™ â€œVarietyâ€ saytÄ±na istinadÉ™n xÉ™bÉ™r verir.   MÉ™lumata gÃ¶rÉ™, mÉ™ÅŸhur aktyor Ceki Ã‡an fÉ™xri mÃ¼kafatÄ±n sahibi olacaq. Bundan baÅŸqa mÃ¼kafatÄ± kinorejissor Frederik Uayzman, montajÃ§Ä± Enn Kouts vÉ™ aktyor seÃ§imi Ã¼zrÉ™ rejissor Linn Stalmaster dÉ™ alacaq.   MÃ¼kafatlarÄ±n tÉ™qdimetmÉ™ mÉ™rasimi noyabrÄ±n 12-dÉ™ Los-AncelesdÉ™ keÃ§irilÉ™cÉ™k. ', 'images/0209201692457.jpg', 'Memmed', '2016-09-02', 1),
(9, 'AzÉ™rbaycan dÃ¼nya gÃ¶zÉ™llik atlasÄ±nda â€“ FOTO DÃ¼nyaca mÉ™ÅŸhur rumÄ±niyalÄ± fotoqraf Mixayel Norok bir neÃ§É™ gÃ¼n É™vvÉ™l AzÉ™rbaycanda olub', 'AzÉ™rbaycan dÃ¼nya gÃ¶zÉ™llik atlasÄ±nda â€“ FOTO DÃ¼nyaca mÉ™ÅŸhur rumÄ±niyalÄ± fotoqraf Mixayel Norok bir neÃ§É™ gÃ¼n É™vvÉ™l AzÉ™rbaycanda olub.   Oxu.Az Milli.Az-a istinadla xÉ™bÉ™r verir ki, dÃ¼nya Ã¶lkÉ™lÉ™rini gÉ™zib tÉ™bii gÃ¶zÉ™l qÄ±zlar taparaq onlarÄ±n fotolarÄ±nÄ± Ã§É™kÉ™n fotoqrafÄ±n sonuncu dayanacaÄŸÄ± paytaxtÄ±mÄ±z BakÄ± olub. O, burada Fidan adlÄ± gÃ¶zÉ™l azÉ™rbaycanlÄ± qÄ±zla tanÄ±ÅŸ olub vÉ™ onun fotosunu Ã§É™kib.   FidanÄ±n ÅŸÉ™klini rÉ™smi â€œThe Atlas of Beautyâ€ sÉ™hifÉ™sindÉ™ paylaÅŸaraq bu sÃ¶zlÉ™ri yazÄ±b:   â€œBir neÃ§É™ hÉ™ftÉ™ É™vvÉ™l AzÉ™rbaycanÄ±n paytaxtÄ± BakÄ±da olarkÉ™n xeyli gÃ¶zÉ™l qadÄ±nla danÄ±ÅŸmaq imkanÄ±m oldu. KiÅŸilÉ™rin dominion rolunu oynadÄ±ÄŸÄ±, qadÄ±nlarÄ±n É™ksÉ™riyyÉ™tinin É™rlÉ™rinin icazÉ™sini almadan ÅŸÉ™kil Ã§É™kdirmÉ™kdÉ™n Ã§É™kindiklÉ™ri yerli cÉ™miyyÉ™tdÉ™ vÉ™ziyyÉ™t dÉ™yiÅŸir.  Gender bÉ™rabÉ™rliyi uÄŸrunda mÃ¼barizÉ™ aparan azÉ™rbaycanlÄ± qadÄ±nlar hÉ™lÉ™lik azlÄ±qda olsalar da, onlarÄ±n sayÄ± artÄ±r vÉ™ É™minÉ™m ki, yaxÄ±nda onlar Ã§oxluq tÉ™ÅŸkil edÉ™cÉ™klÉ™r.  Fidan da belÉ™ ecazkar xanÄ±mlardan biridir. O, qarÅŸÄ±lÄ±qlÄ± sayÄŸÄ± vÉ™ bÉ™rabÉ™rlik olmadan mÃ¼nasibÉ™tlÉ™r qurmayacaÄŸÄ±nÄ± deyir.  BÉ™zilÉ™ri Ã¼Ã§Ã¼n bu sÃ¶zlÉ™r, bÉ™lkÉ™ dÉ™ adi tÉ™sir baÄŸÄ±ÅŸlaya bilÉ™r. Amma inanÄ±n ki, dÃ¼nyanÄ±n Ã§ox mÉ™kanlarÄ±nda qadÄ±nÄ±n belÉ™ sÃ¶zlÉ™ri dilÉ™ gÉ™tirmÉ™si cÉ™sarÉ™t vÉ™ qÉ™tiyyÉ™t tÉ™lÉ™b edirâ€.', 'images/0209201693140.jpg', 'Aysel', '2016-09-02', 1),
(12, '<h1>Sabaha olan hava proqnozu a&ccedil;Ä±qlandÄ±</h1>\r\n\r\n<p><strong>Rayonlara yaÄŸÄ±ÅŸ yaÄŸacaq', '<h1>Sabaha olan hava proqnozu a&ccedil;Ä±qlandÄ±</h1>\r\n\r\n<p><strong>Rayonlara yaÄŸÄ±ÅŸ yaÄŸacaq.</strong></p>\r\n\r\n<p>Sabah BakÄ±da vÉ™ AbÅŸeron yarÄ±madasÄ±nda hava ÅŸÉ™raitinin dÉ™yiÅŸkÉ™n buludlu olacaÄŸÄ±, arabir tutulacaÄŸÄ±, É™sasÉ™n yaÄŸmursuz ke&ccedil;É™cÉ™yi g&ouml;zlÉ™nilir.</p>\r\n\r\n<p>Ekologiya vÉ™ TÉ™bii SÉ™rvÉ™tlÉ™r Nazirliyinin Milli Hidrometeorologiya DepartamentindÉ™n&nbsp;<strong>Oxu.Az</strong>-a verilÉ™n mÉ™lumata g&ouml;rÉ™, g&uuml;n&uuml;n birinci yarÄ±sÄ±nda yarÄ±madanÄ±n bÉ™zi yerlÉ™rindÉ™ qÄ±sam&uuml;ddÉ™tli yaÄŸÄ±ÅŸ yaÄŸacaÄŸÄ± ehtimalÄ± var.&nbsp;</p>\r\n\r\n<p>Åžimal-ÅŸÉ™rq k&uuml;lÉ™yi g&uuml;nd&uuml;z cÉ™nub-ÅŸÉ™rq k&uuml;lÉ™yi ilÉ™ É™vÉ™z olunacaq.</p>\r\n\r\n<p>HavanÄ±n temperaturu gecÉ™ 18-21, g&uuml;nd&uuml;z 25-28 dÉ™rÉ™cÉ™ isti, BakÄ±da gecÉ™ 19-21, g&uuml;nd&uuml;z 26-28 dÉ™rÉ™cÉ™ isti olacaÄŸÄ± g&ouml;zlÉ™nilir.</p>\r\n\r\n<p>AzÉ™rbaycanÄ±n rayonlarÄ±nda ÅŸimÅŸÉ™k &ccedil;axacaÄŸÄ±, arabir yaÄŸÄ±ÅŸ yaÄŸacaÄŸÄ±, g&uuml;nd&uuml;z bÉ™zi rayonlarda tÉ™dricÉ™n kÉ™silÉ™cÉ™yi g&ouml;zlÉ™nilir. ÅžÉ™rq k&uuml;lÉ™yi É™sÉ™cÉ™k.</p>\r\n\r\n<p>HavanÄ±n temperaturu gecÉ™ 18-23, g&uuml;nd&uuml;z 26-31 dÉ™rÉ™cÉ™ isti, daÄŸlarda gecÉ™ 10-15, g&uuml;nd&uuml;z 16-21 dÉ™rÉ™cÉ™ isti olacaÄŸÄ± g&ouml;zlÉ™nilir.</p>\r\n\r\n<p>Tibbi-meteoroloji proqnoza gÉ™lincÉ™, sentyabrÄ±n 3-4-dÉ™ AbÅŸeron yarÄ±madasÄ±nda meteoroloji amillÉ™rin zÉ™if vÉ™ m&uuml;layim tÉ™rÉ™dd&uuml;d&uuml; meteohÉ™ssas insanlar &uuml;&ccedil;&uuml;n É™lveriÅŸlidir.</p>\r\n', 'images/02092016120411.jpg', 'Farid', '2016-09-02', 1),
(13, '<h1>Åžahmat OlimpiadasÄ±nda AzÉ™rbaycan yÄ±ÄŸmalarÄ±nÄ±n rÉ™qiblÉ™ri mÃ¼É™yyÉ™nlÉ™ÅŸdi</h1>', '<h1>Åžahmat OlimpiadasÄ±nda AzÉ™rbaycan yÄ±ÄŸmalarÄ±nÄ±n rÉ™qiblÉ™ri mÃ¼É™yyÉ™nlÉ™ÅŸdi</h1><p>BakÄ±da keÃ§irilÉ™n BakÄ± Åžahmat OlimpiadasÄ±nÄ±n ilk turunun pÃ¼ÅŸkÃ¼ atÄ±lÄ±b.Â </p><p><strong>Oxu.Az</strong>Â <a href=', 'images/02092016123715.jpg', 'Memmed', '2016-09-02', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
