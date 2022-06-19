-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 09:58 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `film`
--

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `Judul`, `Keterangan`, `Genre`) VALUES
(1, 'Revenge of The Fallen', 'Sam Witwicky meninggalkan Autobots untuk kehidupan normal. Tetapi ketika pikirannya dipenuhi dengan ', 'Action Adventure'),
(2, 'Transformers: Dark of the Moon', 'Autobots mempelajari pesawat ruang angkasa Cybertronian yang tersembunyi di bulan, dan berlomba mela', 'Action Adventure'),
(3, 'Teenage Mutant Ninja Turtles', 'Empat kura-kura mutan keluar dari lorong-lorong selokan kota New York untuk melawan Foot Clan yang b', 'Action Adventure'),
(4, 'Season of the Witch', 'Ksatria abad keempat belas mengangkut seorang penyihir yang dicurigai ke sebuah biara, di mana para ', 'Action Adventure'),
(5, 'The Spiderwick Chronicles', 'Saudara kembar Jared dan Simon Grace pindah ke Spiderwick Estate bersama ibu dan saudara perempuan m', 'Action Adventure'),
(6, 'Star Trek', 'James Kirk, seorang pemuda kurang ajar, dan Spock, alien dengan darah manusia dan Vulcan, bergabung ', 'Action Adventure'),
(7, 'The Amazing Spider-Man', 'Setelah Peter Parker digigit oleh laba-laba yang diubah secara genetik, ia memperoleh kekuatan seper', 'Action Adventure'),
(8, 'Spider-Man: Homecoming', 'Peter Parker menyeimbangkan hidupnya sebagai siswa sekolah menengah biasa di Queens dengan alter-ego', 'Action Adventure'),
(9, 'Jumanji: Welcome to the Jungle', 'Empat remaja tersedot ke dalam permainan video ajaib, dan satu-satunya cara mereka dapat melarikan d', 'Action Crime'),
(10, 'The Divergent Series: Allegiant', 'Setelah pengungkapan Insurgent yang menghancurkan bumi, Tris harus melarikan diri dengan Four di lua', 'Action Adventure'),
(11, 'Inside Men', 'Seorang mantan antek politik berusaha membalas dendam karena dijatuhkan oleh seorang politisi yang k', 'Thriller Action'),
(12, 'The Call Up', 'Sekelompok pemain game online diundang untuk mencoba video game virtual reality yang canggih, tetapi', 'Action Scifi'),
(13, 'The Bad Guys: Reign of Chaos', 'Sebuah bus yang mengangkut narapidana terbalik sehingga penjahat melarikan diri. Untuk menangkap dan', 'Action Thriller'),
(14, 'Kartini', 'Film yang menceritakan tentang kisah pahlawan wanita Indonesia bernama Kartini. Pada awal 1900-an, k', 'Drama Historical'),
(15, 'Rudy Habibie', 'Film ini mengikuti kisah Presiden ke-3 Indonesia, B.J. Habibie, kehidupan muda saat kuliah di univer', 'Drama Biography'),
(16, 'Air & Api : Si Jago Merah 2', 'Film ini merupakan sikuel dari film si jago merah (2008). Radit, Sisi, Dipo, Gito, dan Rojak merupak', 'Comedy Drama'),
(17, 'Cek Toko Sebelah', 'Erwin memiliki karir gemilang di usia muda, dan kekasih cantik yang tak kalah sukses, Natalie. Tapi ', 'Comedy Drama'),
(18, 'The Underdogs', 'Bercerita tentang sosial media yang dijadikan sebagai wadah berkarya yang dimanfaatkan oleh 4 orang ', 'Conedy Musical'),
(19, 'Sayap Pelindungmu', 'Cleo adalah anak dari Abimanyu pengusaha yang kaya. Ada Sultan tangan kanan ABimanyu, dan Refal tang', 'Comedy Romance'),
(20, 'Ganteng Ganteng Gokil', 'bercerita tentang tiga anak muda yang bernama Gading, Tarjo dan Poltak. Tiga sahabat ini bersekolah ', 'Comedy Drama'),
(21, 'Seblak Empire Hentikan Ledakan Cinta', 'Cantik-cantik, Airin (Shanice Margaretha) gak malu untuk jualan seblak. Walaupun awalnya kesal karen', 'Drama Comedy'),
(22, 'The Swordsman', 'Setelah Gwanghaegun digulingkan, pendekar pedang terbaik negara itu Tae Yool lenyap. Joseon sendiri ', 'Action Drama'),
(23, 'The Fatal Encounter', 'Usaha Raja Jeongjo (Hyun-Bin) untuk mempertahankan harta, tahta dan kuasanya dari konflik tak berkes', 'Action Drama'),
(24, 'Confidential Assignment', 'Ketika sebuah organisasi kejahatan dari Korea Utara melintasi perbatasan dan memasuki wilayah Korea ', 'Action Drama'),
(25, 'Veteran', 'Detektif Seo Do-cheol sangat tangguh dan tanpa ampun ketika menangani kejahatan. Tapi sementara meny', 'Action Comedy'),
(26, 'Broken City', 'Di kota yang penuh dengan ketidakadilan, mantan polisi Billy Taggart mencari penebusan dan balas den', 'Action Crime'),
(27, 'Dead Man Down', 'Kota New York, tangan kanan kepala penjahat, Victor, diam-diam ingin membalas dendam terhadap bosnya', 'Drama Action'),
(28, 'Warrior', 'Seorang mantan marinir, kembali ke rumah dan dilatih ayahnya untuk ikut dalam kompetisi beladiri. Ta', 'Action Crime'),
(29, 'The Hitman\'s Bodyguard', 'Pengawal top dunia mendapat klien baru, pembunuh bayaran yang harus bersaksi di Pengadilan Kriminal ', 'Action Comedy'),
(30, 'Barely Lethal', 'Saat menjalani misi, Megan Walsh, seorang pembunuh, tertarik dengan kehidupan para remaja lain seusi', 'Action Comedy'),
(31, 'Men In Black II', 'Agen Jay dikirim untuk menemukan Agen Kay dan memulihkan ingatannya setelah kemunculan kembali kasus', 'Action Comedy'),
(32, 'Robin Hood', 'Seorang Tentara Salib yang keras terhadap perang dan komandan Moor-nya melakukan pemberontakan yang ', 'Action Drama'),
(33, 'Surga yang Tak Dirindukan 2', 'Pertemuan dengan Arini membuat Meirose menjadi ragu dengan pilihan hidupnya selama ini. Apalagi keti', 'Drama Romance'),
(34, 'Taken', 'Seorang mantan agen rahasia tiba-tiba menerima kabar bahwa sang putri diculik dalam perjalanan ke Pa', 'Action Thriller'),
(35, 'A, Aku Benci Dan Cinta', 'Alvaro adalah anak menyebalkan yang menjadi Ketua OSIS, sedangkan Anggia adalah wakilnya. Mereka tid', 'Drama Romance'),
(36, 'Soekarno: Indonesia Merdeka', 'Setelah pemerintah Hindia Belanda menangkap pemimpin perjuangan kemerdekaan Indonesia, Soekarno, dia', 'Drama Historical'),
(37, 'The Legend of Hercules', 'Cerita asli dari legenda Yunani Hercules. Dikhianati oleh ayah angkatnya, diasingkan dan dijual seba', 'Action Drama'),
(38, 'Unstoppable', 'Seorang gangster yang dulu legendaris, Dong-chul mencoba untuk menikmati kehidupan biasa bersama ist', 'Action Crime'),
(39, 'The Tarix Jabrix 3', 'Cacing, saat ini bekerja disebuah perusahaan asuransi dimintai tolong oleh atasannya untuk bertemu m', 'Drama Comedy'),
(40, 'Momentum', 'Saat mantan agen militer beralih profesi menjadi seorang pencuri, lalu beraksi membobol bank. Sialny', 'Crime Action'),
(41, 'Hit & Run', 'Seorang polisi selebriti yang diikuti oleh kamera di mana-mana karena ia memiliki reality show sendi', 'Action Comedy'),
(42, 'Prince Charming', 'bercerita tentang konflik berkepanjangan antara dua keluarga yang memperebutkan harta dan kekuasaan.', 'Comedy Romance'),
(43, 'Cinta Brontosaurus', 'Dika adalah seorang penulis yang baru saja putus cinta dengan Nina. Semenjak putus, dia percaya bahw', 'Comedy Drama'),
(44, 'Habibie & Ainun', 'Rudy Habibie seorang jenius ahli pesawat terbang bertemu dengan wanita yang berprofesi sebagai dokte', 'Romance Biography'),
(45, 'Beauty & The Best', 'Ira adalah seorang model, dan Kelly, teman sekelasnya, adalah anak yang berprestasi. Suatu kali Kell', 'Drama Comedy'),
(46, 'Yowis Ben', 'Bayu menyukai Susan sejak lama, namun merasa minder dengan keadaan dirinya yang pas-pasan. Bayu bert', 'Drama Family'),
(47, 'Generasi Micin vs Kevin', 'Tiga transisi keluarga Tionghoa, mulai dari jaman orde baru yang apa-apa serba tidak boleh, lalu mem', 'Drama Romance'),
(48, 'Megamind', 'Jenius jahat Megamind akhirnya mengalahkan musuh bebuyutannya, Metro Man, tetapi dibiarkan tanpa tuj', 'Cartoon Action'),
(49, 'V.I.P.', 'Putra seorang pejabat tinggi Korea Utara dicurigai melakukan pembunuhan berantai di seluruh dunia, d', 'Action Thriller'),
(50, 'Madagascar: Escape 2 Africa', 'Hewan-hewan Madagaskar terbang kembali ke New York City, tetapi mendarat di cagar alam Afrika, di ma', 'Cartoon Adventure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54533;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
