-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 07:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse309_final_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Isbn` varchar(1000) NOT NULL,
  `Name` varchar(1000) NOT NULL,
  `Author` varchar(1000) NOT NULL,
  `Genre` varchar(1000) NOT NULL,
  `Image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Isbn`, `Name`, `Author`, `Genre`, `Image`) VALUES
('9780006546061', 'Fahrenheit 451', 'Ray Bradbury', 'sci-fi', 'Fahrenheit 451.jpg'),
('9780062073488', 'And Then There Were None', 'Agatha Christie', 'mystery', 'And Then There Were None.jpg'),
('9780062798183', 'To Kill a Mockingbird', 'Harper Lee', 'classics', 'to kill a mockingbird.jpg'),
('9780141192413', 'Little Women', 'Louisa May', 'classics', 'Little Women.jpg'),
('9780316540032', 'The Catcher in the Rye', 'J.D. Salinger', 'romance', 'The Catcher in the Rye.jpg'),
('9780375842207', 'The Book Thief', 'Markus Zusak', 'classics', 'the book thief.jpg'),
('9780399534065', 'Lord of the Flies', 'William Golding', 'classics', 'Lord of the Flies.jpg'),
('9780670919796', 'The Diary of a Young Girl', 'Anne Frank', 'classics', 'The Diary of a Young Girl.jpg'),
('9781328869333', '1984', 'George Orwell', 'sci-fi', '1984.png'),
('9781504762236', 'The ABC Murders', 'Agatha Christie', 'mystery', 'the abc murders.jpg'),
('9781679598067', 'Romeo and Juliet', 'William Shakespeare', 'romance', 'Romeo and Juliet.jpg'),
('9781774760963', 'Les Misérables', 'Victor Hugo', 'classics', 'Les Misérables.jpg'),
('9781785301544', 'Harry Potter and the Philosopher’s Stone', 'J.K. Rowling', 'fantasy', 'Harry Potter and the Philosopher’s Stone.jpg'),
('9788854418738', 'The Little Prince', 'Antoine', 'fantasy', 'The Little Prince.jpg'),
('9791259912145', 'Animal Farm', 'George Orwell', 'classics', 'Animal Farm.jpg'),
('9798409130329', 'The Great Gatsby', 'F. Scott', 'classics', 'The Great Gatsby.jpg'),
('9798448688768', 'Wuthering Heights', 'Emily Bronte', 'classics', 'Wuthering Heights.jpg'),
('9798711229872', 'Jane Eyre', 'Charlotte Bronte', 'classics', 'Jane Eyre.jpg'),
('9798753046000', 'The tempest', 'William Shakespeare', 'romance', 'The Tempest.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactinfo`
--

CREATE TABLE `contactinfo` (
  `id` int(128) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Feedback` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contactinfo`
--

INSERT INTO `contactinfo` (`id`, `Name`, `Email`, `Phone`, `Feedback`) VALUES
(1, 'Ezhar', 'ezhasha@gmail.com', '01641726653', 'Add more books please!'),
(2, 'EUJ01', 'ezharuddin00@gmail.com', '01711847389', 'Couldn\'t find the book I was looking for... Neat website tho!'),
(3, 'Mr Allen', '2120117@iub.edu.bd', '01765205641', 'Color palette is cuteeeee'),
(5, 'ezhar uddin', 'ezhasha@gmail.com', '01711847389', 'I like the idea, but needs more polish and resources.'),
(6, 'Sumaiya Karim Katha', '2010189@iub.edu.bd', '', 'Please Add Islamic Books too!'),
(8, 'Farid Mia', 'fariduddin@gmail.com', '01766567181', 'Heard from a twitter friend, stayed for the homepage tagline <3'),
(9, 'Rowshan', '', '232323', 'Make the website public somehowwww'),
(10, 'Mahi Enam', 'Mahi@hotmail.com', '', 'Please Add bangla books, I am from EM background and I have difficulty understanding some bangla words'),
(11, 'Mr Cheems', 'Cheems@funyun.com', '', 'Add more books pleaseee'),
(12, 'Manik', '', '', 'Add more functionality to the User Profile Menu'),
(13, 'Mr. Dark', '', '', 'Some day in the future please bring dark mode pleaseee'),
(14, 'doggo', '', '', 'Bark Bark Bark');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userName` text NOT NULL,
  `userEmail` text NOT NULL,
  `userPass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userName`, `userEmail`, `userPass`) VALUES
('euj01', 'ezhar@gmail.com', '1234'),
('katha', 'adera@gmail.com', '1234'),
('phahim', 'phahim@hotmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `id` int(255) NOT NULL,
  `bookIsbn` varchar(1000) NOT NULL,
  `wordName` varchar(1000) NOT NULL,
  `wordMeaning` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`id`, `bookIsbn`, `wordName`, `wordMeaning`) VALUES
(24, '9780006546061', 'Incinerator', 'A furnace or apparatus for burning waste material, especially industrial waste, at high temperatures.'),
(25, '9780006546061', 'Dystopia', 'An imagined society or state characterized by oppressive, often totalitarian control, and a lack of individual freedoms'),
(26, '9780006546061', 'Censorship', 'The suppression or prohibition of any parts of books, films, news, etc., that are considered obscene, politically unacceptable, or a threat to security'),
(27, '9780006546061', 'Conformity', 'Compliance with standards, rules, or laws; behavior in accordance with socially accepted conventions or standards'),
(28, '9780006546061', 'Totalitarianism', 'A system of government that is centralized and dictatorial and requires complete subservience to the state'),
(29, '9780062073488', 'Decimate', ' To kill, destroy, or remove a large proportion of.'),
(30, '9780062073488', 'Vindictive', 'Having or showing a strong or unreasoning desire for revenge.'),
(32, '9780062073488', 'Perjury', 'The offense of willfully telling an untruth in a court after having taken an oath or affirmation.'),
(33, '9780062798183', 'Iniquity', 'Immoral or grossly unfair behavior; wickedness.'),
(34, '9780062798183', 'Malevolent', 'Having or showing a wish to do evil to others.'),
(35, '9780062798183', 'Vehement', 'Showing strong feeling; forceful, passionate, or intense.'),
(36, '9780141192413', 'Alacrity', 'Brisk and cheerful readiness.'),
(37, '9780141192413', 'Ineffable', ' Too great or extreme to be expressed or described in words.'),
(38, '9780141192413', 'Redolent', 'Strongly reminiscent or suggestive of something.'),
(39, '9780316540032', 'Cacophony', 'A harsh, discordant mixture of sounds.'),
(41, '9780141192413', 'Sycophant', ' A person who acts obsequiously toward someone important in order to gain advantage.'),
(42, '9780141192413', 'Pernicious', 'Having a harmful effect, especially in a gradual or subtle way.'),
(43, '9780316540032', 'Ubiquitous', 'Present, appearing, or found everywhere.'),
(44, '9780316540032', 'Disparate', 'Essentially different in kind; not allowing comparison.'),
(45, '9780316540032', 'Diaphanous', 'Light, delicate, and translucent.'),
(46, '9780375842207', 'Sibilant', 'Making or characterized by a hissing sound.'),
(47, '9780375842207', 'Supercilious', ' Behaving or looking as though one thinks one is superior to others.'),
(48, '9780375842207', 'Inscrutable', 'Impossible to understand or interpret.'),
(49, '9780399534065', 'Poignant', 'Evoking a keen sense of sadness or regret.'),
(50, '9780399534065', 'Panacea', 'A solution or remedy for all difficulties or diseases.'),
(51, '9780399534065', 'Inextricable', ' Impossible to disentangle or separate.'),
(52, '9780670919796', 'Newspeak', 'Ambiguous euphemistic language used chiefly in political propaganda.'),
(53, '9780670919796', 'Proletariat', 'Workers or working-class people, regarded collectively.'),
(54, '9780670919796', 'Thoughtcrime', 'The criminal act of holding unspoken beliefs or doubts that oppose or question the ruling party.'),
(55, '9781328869333', 'Cacophony', 'A harsh, discordant mixture of sounds.'),
(56, '9781328869333', 'Insouciant', 'Showing a casual lack of concern; indifferent.'),
(57, '9781328869333', 'Perspicacious', 'Having a ready insight into and understanding of things.'),
(58, '9781504762236', 'Mellifluous', '(of a voice or words) Sweet or musical; pleasant to hear.'),
(59, '9781504762236', 'Pernicious', 'Having a harmful effect, especially in a gradual or subtle way.'),
(60, '9781504762236', 'Augment', 'Make (something) greater by adding to it; increase.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`Isbn`);

--
-- Indexes for table `contactinfo`
--
ALTER TABLE `contactinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userName`(100));

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookIsbn_fk` (`bookIsbn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactinfo`
--
ALTER TABLE `contactinfo`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `word`
--
ALTER TABLE `word`
  ADD CONSTRAINT `word_ibfk_1` FOREIGN KEY (`bookIsbn`) REFERENCES `book` (`Isbn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
