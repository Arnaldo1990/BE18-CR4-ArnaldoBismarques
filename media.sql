-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Mrz 2023 um 22:07
-- Server-Version: 10.4.27-MariaDB
-- PHP-Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `be18_cr4_arnaldobismarques_biglibrary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `picture` varchar(300) DEFAULT NULL,
  `ISBN` int(20) NOT NULL,
  `short_description` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `author_first_name` varchar(30) NOT NULL,
  `author_last_name` varchar(30) NOT NULL,
  `publisher_name` varchar(30) NOT NULL,
  `publisher_address` varchar(40) NOT NULL,
  `publish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `picture`, `ISBN`, `short_description`, `type`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_address`, `publish_date`) VALUES
(3, 'Lodger, The', 'picture3', 23, 'Poisoning by saline and osmotic laxtv, self-harm, ', 'DVD', 'Maryanna', 'Seviour', 'Edgeclub', '824 American Junction', '2022-07-27'),
(4, 'Thief of Bagdad, The', 'picture4', 17, 'Unsp comp of fb acc left in body fol inject or imm', 'Book', 'Yetta', 'Frodsham', 'Blogtag', '2 Stuart Pass', '2022-09-15'),
(7, 'Child\'s Christmas in Wales, A', 'picture7', 2647, 'Toxic effect of unsp snake venom, undetermined, su', 'Book', 'Iormina', 'Winslade', 'Rhybox', '23 Waubesa Circle', '2023-01-07'),
(8, 'Zanjeer', 'picture8', 21474878, 'Anisometropia and aniseikonia', 'Book', 'Pandora', 'Essex', 'Cogibox', '49720 Dixon Trail', '2022-06-09'),
(40, 'wrtwrt', 'defaultpicture.jpg', 0, '', '', '', 'wrtwrt', 'wertwt', '', '0000-00-00'),
(42, 'wrtwrt', 'defaultpicture.jpg', 0, '', '', '', 'wrtwrt', 'wertwt', '', '0000-00-00'),
(43, 'erqewr', 'defaultpicture.jpg', 0, '', '', '', 'qerqwr', '', '', '0000-00-00'),
(44, 'erqewr', 'defaultpicture.jpg', 0, '', '', '', 'qerqwr', '', '', '0000-00-00'),
(45, 'erqewr', 'defaultpicture.jpg', 0, '', '', '', 'qerqwr', '', '', '0000-00-00'),
(46, 'erqewr', 'defaultpicture.jpg', 0, '', '', '', 'qerqwr', '', '', '0000-00-00'),
(47, 'erqewr', 'defaultpicture.jpg', 0, '', '', '', 'qerqwr', '', '', '0000-00-00'),
(48, 'adfadf', '641dde6deeccb.jpg', 0, '', '', '', 'adfadf', 'afdfaf', '', '0000-00-00'),
(49, 'adfadf', '641ddeacecd5a.jpg', 0, '', '', '', 'adfadf', 'afdfaf', '', '0000-00-00'),
(50, 'adfadf', '641ddeec5936b.jpg', 0, '', '', '', '', 'afdfaf', '', '0000-00-00'),
(51, 'adfadf', '641ddf0b0a97c.jpg', 0, '', '', '', 'adfadf', 'afdfaf', '', '0000-00-00'),
(52, 'adfadf', '641ddf2d2581d.jpg', 0, '', '', '', 'adfadf', 'afdfaf', '', '0000-00-00'),
(53, 'adfadf', '641de13dde321.jpg', 0, '', '', '', 'adfadf', 'afdfaf', '', '0000-00-00'),
(54, 'afdf', 'defaultpicture.jpg', 0, '', '', '', 'adfasdf', '', '', '0000-00-00'),
(55, 'adfaf', 'defaultpicture.jpg', 1523, '', '', 'dfdsfs', 'wefwef', 'adfasf', '', '0000-00-00'),
(56, 'adfaf', 'defaultpicture.jpg', 1523, '', '', 'dfdsfs', 'wefwef', 'adfasf', '', '0000-00-00'),
(57, 'adfadf', 'defaultpicture.jpg', 123, '', 'book', 'adf', 'fda', 'dsfa', '', '0000-00-00'),
(58, 'adfadf', 'defaultpicture.jpg', 123, '', 'book', 'adf', 'fda', 'dsfa', '', '0000-00-00'),
(59, 'dddddddd', 'defaultpicture.jpg', 123, '', 'adf', 'fafd', 'sdf', 'ffsdfs', 'adf', '0000-00-00'),
(60, 'dddddddd', 'defaultpicture.jpg', 123, '', 'adf', 'fafd', 'sdf', 'ffsdfs', 'adf', '0000-00-00'),
(61, 'dddddddd', 'defaultpicture.jpg', 123, '', 'adf', 'fafd', 'sdf', 'ffsdfs', 'adf', '0000-00-00'),
(62, 'adfaf', 'defaultpicture.jpg', 123456879, '', 'book', 'adfdf', 'gafgafg', 'werewrfa', 'adafasdfadf', '0000-00-00'),
(63, 'adfaf', 'defaultpicture.jpg', 123456879, '', 'book', 'adfdf', 'gafgafg', 'werewrfa', 'adafasdfadf', '0000-00-00'),
(64, 'adfaf', 'defaultpicture.jpg', 123456879, '', 'book', 'adfdf', 'gafgafg', 'werewrfa', 'adafasdfadf', '0000-00-00'),
(65, 'adfadf', 'defaultpicture.jpg', 13564, '', 'CD', 'arfff', 'bsss', 'dfsdfsf', 'adfasf', '0000-00-00'),
(66, 'adfadf', 'defaultpicture.jpg', 13564, '', 'CD', 'arfff', 'bsss', 'dfsdfsf', 'adfasf', '0000-00-00'),
(67, 'asdfasff', 'defaultpicture.jpg', 123456, '', 'book', 'thomas', 's', 'bjlsjdfsdf', 'dsfasdfa', '0000-00-00'),
(69, '', 'defaultpicture.jpg', 0, '', '', '', '', '', '', '0000-00-00'),
(70, '', 'defaultpicture.jpg', 0, '', '', 'fadfadf', '', '', '', '0000-00-00'),
(71, '', 'defaultpicture.jpg', 0, '', '', '', '', 'adfasdf', '', '0000-00-00'),
(73, 'Legend II, The', NULL, 2147483647, 'Toxic effect of glycols, Book, sequela', 'Book', 'Kimberli', 'Mettrick', 'Oyoloo', '9 Shelley Way', '2022-06-28'),
(74, 'New York: A Documentary Film', NULL, 2147483647, 'Chondromalacia, left wrist', 'DVD', 'Malissa', 'Spyer', 'Brainbox', '7276 Texas Court', '2022-06-08'),
(75, 'Transamerica', NULL, 1117471470, 'Stiffness of left foot, not elsewhere classified', 'CD', 'Marcello', 'Barry', 'Voonix', '92 Northland Center', '2022-08-27'),
(76, 'Curse of the Golden Flower ', NULL, 2147483647, 'Moderate laceration of pancreas', 'CD', 'Mathe', 'Farrimond', 'Jaloo', '8561 Waubesa Avenue', '2022-12-25'),
(77, 'Superhero Movie', NULL, 2147483647, 'Disp fx of 5th metatarsal bone, l ft, 7thG', 'Book', 'Dorine', 'Asche', 'Zoovu', '555 Autumn Leaf Parkway', '2022-05-26'),
(78, 'Lost Boys: The Tribe', NULL, 2147483647, 'Contusion of eyeball and orbital tissues, unsp eye', 'CD', 'Gianna', 'Checo', 'Aimbo', '56 Hansons Pass', '2022-08-12'),
(79, 'Al-risâlah', NULL, 2147483647, 'Open bite of left breast', 'DVD', 'Page', 'Sainer', 'Devpulse', '98 Ohio Road', '2023-02-09');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
