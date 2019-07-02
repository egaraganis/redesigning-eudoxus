-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: localhost
-- Χρόνος δημιουργίας: 14 Ιαν 2019 στις 21:55:29
-- Έκδοση διακομιστή: 10.1.37-MariaDB
-- Έκδοση PHP: 7.3.0
CREATE DATABASE eudoxus;
USE eudoxus;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `eudoxus`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `AccessPoints`
--

CREATE TABLE `AccessPoints` (
  `idAccessPoint` int(11) NOT NULL,
  `brandName` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `address` varchar(64) NOT NULL,
  `map` varchar(512) NOT NULL COMMENT 'Map embed url'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `AccessPoints`
--

INSERT INTO `AccessPoints` (`idAccessPoint`, `brandName`, `telephone`, `address`, `map`) VALUES
(1, 'Στοά Βιβλίου, Κατάστημα 5', '210-3839201', 'Πεσμαζόγλου 5, Αθήνα', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7479.6137210708675!2d23.729126826201608!3d37.982025602080704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3a5e42468b%3A0x7116e8520e3545a1!2zzqPPhM6_zqwgzpLOuc6yzrvOr86_z4U!5e0!3m2!1sel!2sgr!4v1546912557905'),
(3, 'Βιβλιοθήκη ΕΚΠΑ', '210-1603948', 'Πανεπιστημιούπολη Ζωγράφου', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12581.539485807874!2d23.768663504120003!3d37.96814657481646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bd3a2dbf1ac5%3A0x9437dcc2e294da4d!2zzpXOuM69zrnOus-MIM66zrHOuSDOms6xz4DOv860zrnPg8-Ez4HOuc6xzrrPjCDOoM6xzr3Otc-AzrnPg8-Ezq7OvM65zr8gzpHOuM63zr3Pjs69!5e0!3m2!1sel!2sgr!4v1546914038349');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Announcements`
--

CREATE TABLE `Announcements` (
  `idAnnouncement` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` varchar(2048) DEFAULT NULL,
  `date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Announcements`
--

INSERT INTO `Announcements` (`idAnnouncement`, `title`, `content`, `date`) VALUES
(4, 'Νέα Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων', 'Το έγγραφο του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων με θέμα τη νέα παράταση της περιόδου δήλωσης και διανομής των συγγραμμάτων για το χειμερινό εξάμηνο 2018-2019 μπορείτε να το βρείτε εδώ.', '09-01-2019'),
(5, 'Παράταση Περιόδου Δηλώσεων και Διανομής Συγγραμμάτων', 'Το έγγραφο του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων με θέμα την παράταση της περιόδου δήλωσης και διανομής των συγγραμμάτων για το χειμερινό εξάμηνο του 2018-2019 μπορείτε να το βρείτε εδώ.', '20-12-2018'),
(6, 'Πρόβλημα λειτουργίας της εφαρμογής εκδοτών μέσω Mozilla Firefox', 'Σας ενημερώνουμε οτι λόγω απροσδόκητου προβλήματος που οφείλεται σε νεότερη έκδοση του περιηγητή Mozilla Firefox, η χρήση της εφαρμογής των Εκδοτών υπό τον συγκεκριμένο browser παρουσιάζει προσωρινή αρρυθμία.', '01-11-2018'),
(7, 'Έναρξη Δήλωσης και Διανομής Συγγραμμάτων Χειμερινής Περιόδου 2018-19', 'Το έγγραφο του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων σχετικά με την έναρξη των δηλώσεων και της διανομής συγγραμμάτων για τη χειμερινή περιόδο του ακαδημαϊκού έτους 2018-19 μπορείτε να βρείτε εδώ.', '23-09-2018'),
(8, 'Κ.Υ.Α. Θεμάτων Διανομής και Κοστολόγησης Συγγραμμάτων', 'Στον παρακάτω σύνδεσμο ΦΕΚ 2433Β/05.08.2016 θα βρείτε τις Κοινές Υπουργικές Αποφάσεις που αφορούν στην διαδικασία διανομής και κοστολόγησης διδακτικών συγγραμμάτων:', '17-11-2017'),
(9, 'Τροποποίηση της υπ’ αριθμ. Φ.12/97315/Β3/30−8−2011 (Β΄1915) κοινής υπουργικής απόφασης\r\n', 'Την τροποποίηση της υπ’ αριθμ. Φ.12/97315/Β3/30−8−2011 (Β΄1915) κοινής υπουργικής απόφασης που αφορά στις νέες διαδικασίες και προθεσμίες κοστολόγησης, μπορείτε να τη βρείτε εδώ.', '30-08-2011');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Books`
--

CREATE TABLE `Books` (
  `idBook` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `subtitle` varchar(45) DEFAULT NULL,
  `author` varchar(45) NOT NULL,
  `situation` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `dimensions` varchar(45) NOT NULL,
  `firstYearPublished` int(11) NOT NULL,
  `pricetag` int(11) NOT NULL,
  `coverPage` varchar(256) DEFAULT NULL COMMENT 'Picture url, same below',
  `backPage` varchar(256) DEFAULT NULL,
  `contentArray` varchar(256) DEFAULT NULL COMMENT 'Pdf url, same below',
  `exampleSnippet` varchar(256) DEFAULT NULL,
  `publisherId` int(11) NOT NULL,
  `lessonId` int(11) DEFAULT NULL COMMENT 'Not necessarily linked to a lesson',
  `accessPointId1` int(11) NOT NULL,
  `accessPointId2` int(11) DEFAULT NULL COMMENT 'Optionial 2nd access point'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Books`
--

INSERT INTO `Books` (`idBook`, `title`, `subtitle`, `author`, `situation`, `category`, `dimensions`, `firstYearPublished`, `pricetag`, `coverPage`, `backPage`, `contentArray`, `exampleSnippet`, `publisherId`, `lessonId`, `accessPointId1`, `accessPointId2`) VALUES
(1, 'Η Γλώσσα C σε Βάθος', 'Εύκολη Εισαγωγή', 'Ν. Χατζηγιαννάκης', 'Άριστη', 'Πληροφορική', '17x24', 2012, 25, 'https://c.bytes.gr/images/C_5th_big.jpg', NULL, 'https://static.eudoxus.gr/books/86/toc-22767986.pdf', 'https://static.eudoxus.gr/books/86/chapter-22767986.pdf', 1, 1, 1, NULL),
(2, 'Δομές Δεδομένων σε C', NULL, 'Ν. Μισυρλής', 'Μέτρια', 'Πληροφορική', '17x24', 2009, 10, 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw4PCg0ODQ4RCAgJDQoICAgIDg8IDwcNFREWFhURExMYHSggGBolGxMVITEhJSkrLi4uFx8/ODMsNyg5OjcBCgoKDQ0OGBAQFSsdFR4tKzArLSsrKysrKystLSsrKy0tLSstLSsrLSsrLTArKy0rNystKysrKystLSstLS0rK//AABEIAMgAoAMBEQACEQEDEQH/x', NULL, NULL, 'https://static.eudoxus.gr/books/82/chapter-7982.pdf', 3, 3, 1, 3),
(3, 'Τρόπος σκέψης σε c++', 'Πρακτικός προγραμματισμός', 'Bruce Eckel', 'Άριστη', 'Πληροφορική', '17x24', 1980, 10, 'https://webstorage.public.gr/ProductImages/1063772/9789605125271-1000-1063772.jpg', NULL, NULL, NULL, 3, 1, 3, NULL),
(5, 'Δικτύωση Υπολογιστών', 'Προσέγγιση απο πάνω προς τα κάτω', 'Kurose', '', 'Πληροφορική', '30x10', 2015, 100, 'https://www.mgiurdas.gr/sites/default/files/styles/product_display/public/books/30-6575-bookcover_0.jpg?itok=PtpAaTC6', NULL, NULL, NULL, 3, 6, 1, NULL),
(8, 'Εισαγωγή στους Αλγορίθμους', 'Επιστήμη Υπολογιστών', 'Thomas', '', 'Πληροφορική', '40x30', 1999, 90, 'https://www.cup.gr/wp-content/uploads/2016/12/%CE%91%CE%9B%CE%93%CE%9F%CE%A1%CE%99%CE%98%CE%9C%CE%9F%CE%99.png?w=640', NULL, NULL, NULL, 1, 7, 3, NULL),
(9, 'Ψηφιακή Σχεδίαση', 'Μια εισαγωγή στην VHDL', 'Mano', '', 'Πληροφορική', '23x15', 2001, 35, 'https://www.newtech-pub.com/wp-content/uploads/2013/10/vhdl_front_450px.jpg', NULL, NULL, NULL, 1, 2, 3, NULL),
(10, 'Απειροστικός Λογισμός Ι', 'Ανάλυση Ι', 'Thomas', '', 'Μαθηματικά', '40x50', 1970, 40, 'https://www.cup.gr/wp-content/uploads/2016/03/978-960-524-182-7.png', NULL, NULL, NULL, 3, 4, 1, NULL),
(11, 'Απειροστικός Λογισμός ΙΙ', 'Ανάλυση ΙΙ', 'Thomas', '', 'Mαθηματικά', '50x40', 1971, 60, 'https://www.cup.gr/wp-content/uploads/2016/03/978-960-524-183-4.png', NULL, NULL, NULL, 1, 8, 3, NULL),
(12, 'Εισαγωγή στα Σήματα', NULL, 'Καραμπογιάς', '', 'Φυσική', '30x15', 1999, 3, 'https://i2.wp.com/www.tziola.gr/wp-content/uploads/2015/03/313-thickbox_default-eisagogi-sta-simata-systimata-e1464062965192.jpg?fit=352%2C510&ssl=1', NULL, NULL, NULL, 3, 5, 3, NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Departments`
--

CREATE TABLE `Departments` (
  `idDepartment` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `universityId` int(11) NOT NULL,
  `numOfBooksOffered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Departments`
--

INSERT INTO `Departments` (`idDepartment`, `name`, `universityId`, `numOfBooksOffered`) VALUES
(2, 'School of Dentistry', 2, 0),
(3, 'Department of Informatics and Telecom.', 1, 40),
(4, 'Department of Maritime Studies', 3, 50);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Lessons`
--

CREATE TABLE `Lessons` (
  `idLesson` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `semesterId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Lessons`
--

INSERT INTO `Lessons` (`idLesson`, `name`, `semesterId`) VALUES
(1, 'Εισαγωγή στον Προγραμματισμό', 1),
(2, 'Λογική Σχεδίαση', 1),
(3, 'Δομες Δεδομένων', 2),
(4, 'Ανάλυση 1', 2),
(5, 'Σήματα και Συστήματα', 3),
(6, 'Δίκτυα Ι', 4),
(7, 'Αλγόριθμοι και πολυπλοκότητα', 4),
(8, 'Ανάλυση ΙΙ', 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Notes`
--

CREATE TABLE `Notes` (
  `idNote` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `category` varchar(45) NOT NULL,
  `content` varchar(256) NOT NULL COMMENT 'Pdf url',
  `coverPage` varchar(256) DEFAULT NULL COMMENT 'Picture url',
  `noteProviderId` int(11) NOT NULL,
  `lessonId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Notes`
--

INSERT INTO `Notes` (`idNote`, `title`, `category`, `content`, `coverPage`, `noteProviderId`, `lessonId`) VALUES
(1, 'Σημειώσεις Ανάλυσης 1', 'Μαθηματικά', 'http://users.math.uoc.gr/~tertikas/analysis_mitsis.pdf', NULL, 2, 4);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `NotesProviders`
--

CREATE TABLE `NotesProviders` (
  `idNotesProvider` int(11) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `numOfNotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `NotesProviders`
--

INSERT INTO `NotesProviders` (`idNotesProvider`, `telephone`, `numOfNotes`) VALUES
(2, '6937529041', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Publishers`
--

CREATE TABLE `Publishers` (
  `idPublisher` int(11) NOT NULL,
  `brandName` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL,
  `website` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Publishers`
--

INSERT INTO `Publishers` (`idPublisher`, `brandName`, `telephone`, `website`) VALUES
(1, 'Κλειδάριθμος', '210-8042385', 'http://www.klidarithmos.gr/'),
(3, 'Εκδόσεις ΕΚΠΑ', '210-2673097', 'https://www.uoa.gr/'),
(12, 'Νίτσα', '6973420866', 'Nitsa.com');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Semesters`
--

CREATE TABLE `Semesters` (
  `idSemester` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `departmentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Semesters`
--

INSERT INTO `Semesters` (`idSemester`, `name`, `departmentId`) VALUES
(1, '1ο Εξάμηνο', 3),
(2, '2ο Εξάμηνο', 3),
(3, '3ο Εξάμηνο', 3),
(4, '4ο Εξάμηνο', 3);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `StudentHasBook`
--

CREATE TABLE `StudentHasBook` (
  `studentId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `statementDate` varchar(100) DEFAULT NULL COMMENT 'Null when selected, insert date when received'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `StudentHasBook`
--

INSERT INTO `StudentHasBook` (`studentId`, `bookId`, `statementDate`) VALUES
(2, 1, '7-10-2014'),
(5, 1, '7-10-2014'),
(5, 2, '23-04-2015'),
(5, 1, NULL),
(5, 2, NULL),
(2, 1, NULL),
(2, 3, NULL);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Students`
--

CREATE TABLE `Students` (
  `idStudent` int(11) NOT NULL,
  `universityId` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `numOfReceivedBooks` int(11) NOT NULL,
  `numOfRemainingBooks` int(11) NOT NULL,
  `booksPoints` int(11) NOT NULL COMMENT 'Eudoxus+ not implemented, random value'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Students`
--

INSERT INTO `Students` (`idStudent`, `universityId`, `departmentId`, `numOfReceivedBooks`, `numOfRemainingBooks`, `booksPoints`) VALUES
(2, 1, 3, 1, 39, 0),
(5, 1, 3, 2, 38, 12),
(11, 1, 3, 0, 50, 0);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Universities`
--

CREATE TABLE `Universities` (
  `idUniversity` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Universities`
--

INSERT INTO `Universities` (`idUniversity`, `name`) VALUES
(2, 'Aristoteleion University of Thessaloniki'),
(1, 'National Kapodistrian University of Athens'),
(3, 'University of Piraeus');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `UserDepartments`
--

CREATE TABLE `UserDepartments` (
  `idUserDepartment` int(11) NOT NULL,
  `universityId` int(11) NOT NULL,
  `departmentId` int(11) NOT NULL,
  `position` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `UserDepartments`
--

INSERT INTO `UserDepartments` (`idUserDepartment`, `universityId`, `departmentId`, `position`) VALUES
(4, 1, 3, 'Γραμματεία');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Users`
--

CREATE TABLE `Users` (
  `idUser` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Άδειασμα δεδομένων του πίνακα `Users`
--

INSERT INTO `Users` (`idUser`, `email`, `password`, `name`, `surname`) VALUES
(1, 'sdi1400025@di.uoa.gr', 'sdi1400025', 'Orestis', 'Garmpis'),
(2, 'sdi1400033@di.uoa.gr', 'sdi1400033', 'Vaggelis', 'Garaganis'),
(3, 'vasilis@gmail.com', 'vasilis7', 'Vasilis', 'Petrou'),
(4, 'kostas@gmail.com', 'kostas7', 'Kostas', 'Prekas'),
(5, 'sdi1400074@di.uoa.gr', 'sdi1400074', 'Kostas', 'Kotronis'),
(11, 'ste1700001@di.uoa.gr', 'ste1700001', 'Σωτήρης', 'Γκαραγκάνης'),
(12, 'elena@di.uoa.gr', '11111111', 'Έλενα', 'Κοτρώνη');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `AccessPoints`
--
ALTER TABLE `AccessPoints`
  ADD PRIMARY KEY (`idAccessPoint`),
  ADD UNIQUE KEY `idAccessPoint_UNIQUE` (`idAccessPoint`);

--
-- Ευρετήρια για πίνακα `Announcements`
--
ALTER TABLE `Announcements`
  ADD PRIMARY KEY (`idAnnouncement`),
  ADD UNIQUE KEY `idAnnouncement_UNIQUE` (`idAnnouncement`);

--
-- Ευρετήρια για πίνακα `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`idBook`),
  ADD UNIQUE KEY `idBook_UNIQUE` (`idBook`),
  ADD KEY `fk_Books_1_idx` (`publisherId`),
  ADD KEY `fk_Books_2_idx` (`lessonId`),
  ADD KEY `fk_Books_3_idx` (`accessPointId1`),
  ADD KEY `fk_Books_4_idx` (`accessPointId2`);

--
-- Ευρετήρια για πίνακα `Departments`
--
ALTER TABLE `Departments`
  ADD PRIMARY KEY (`idDepartment`),
  ADD UNIQUE KEY `idDepartments_UNIQUE` (`idDepartment`),
  ADD KEY `fk_Departments_1_idx` (`universityId`);

--
-- Ευρετήρια για πίνακα `Lessons`
--
ALTER TABLE `Lessons`
  ADD PRIMARY KEY (`idLesson`),
  ADD UNIQUE KEY `idLesson_UNIQUE` (`idLesson`),
  ADD KEY `fk_Lessons_1_idx` (`semesterId`);

--
-- Ευρετήρια για πίνακα `Notes`
--
ALTER TABLE `Notes`
  ADD PRIMARY KEY (`idNote`),
  ADD UNIQUE KEY `idNote_UNIQUE` (`idNote`),
  ADD KEY `fk_Notes_1_idx` (`noteProviderId`),
  ADD KEY `fk_Notes_2_idx` (`lessonId`);

--
-- Ευρετήρια για πίνακα `NotesProviders`
--
ALTER TABLE `NotesProviders`
  ADD PRIMARY KEY (`idNotesProvider`),
  ADD UNIQUE KEY `idNotesProvider_UNIQUE` (`idNotesProvider`);

--
-- Ευρετήρια για πίνακα `Publishers`
--
ALTER TABLE `Publishers`
  ADD PRIMARY KEY (`idPublisher`),
  ADD UNIQUE KEY `idPublisher_UNIQUE` (`idPublisher`);

--
-- Ευρετήρια για πίνακα `Semesters`
--
ALTER TABLE `Semesters`
  ADD PRIMARY KEY (`idSemester`),
  ADD UNIQUE KEY `idSemester_UNIQUE` (`idSemester`),
  ADD KEY `fk_Semesters_1_idx` (`departmentId`);

--
-- Ευρετήρια για πίνακα `StudentHasBook`
--
ALTER TABLE `StudentHasBook`
  ADD KEY `StudentHasBook_Books_FK` (`bookId`),
  ADD KEY `StudentHasBook_Students_FK` (`studentId`);

--
-- Ευρετήρια για πίνακα `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`idStudent`),
  ADD UNIQUE KEY `idStudent_UNIQUE` (`idStudent`),
  ADD KEY `fk_Students_1_idx` (`universityId`),
  ADD KEY `fk_Students_2_idx` (`departmentId`);

--
-- Ευρετήρια για πίνακα `Universities`
--
ALTER TABLE `Universities`
  ADD PRIMARY KEY (`idUniversity`),
  ADD UNIQUE KEY `idUniversity_UNIQUE` (`idUniversity`),
  ADD UNIQUE KEY `name_UNIQUE` (`name`);

--
-- Ευρετήρια για πίνακα `UserDepartments`
--
ALTER TABLE `UserDepartments`
  ADD PRIMARY KEY (`idUserDepartment`),
  ADD UNIQUE KEY `idDepartmentSecretary_UNIQUE` (`idUserDepartment`),
  ADD KEY `fk_UserDepartments_1_idx` (`universityId`),
  ADD KEY `fk_UserDepartments_2_idx` (`departmentId`);

--
-- Ευρετήρια για πίνακα `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `idUsers_UNIQUE` (`idUser`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `Announcements`
--
ALTER TABLE `Announcements`
  MODIFY `idAnnouncement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT για πίνακα `Books`
--
ALTER TABLE `Books`
  MODIFY `idBook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT για πίνακα `Departments`
--
ALTER TABLE `Departments`
  MODIFY `idDepartment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `Lessons`
--
ALTER TABLE `Lessons`
  MODIFY `idLesson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT για πίνακα `Notes`
--
ALTER TABLE `Notes`
  MODIFY `idNote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT για πίνακα `Semesters`
--
ALTER TABLE `Semesters`
  MODIFY `idSemester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `Universities`
--
ALTER TABLE `Universities`
  MODIFY `idUniversity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `Users`
--
ALTER TABLE `Users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `AccessPoints`
--
ALTER TABLE `AccessPoints`
  ADD CONSTRAINT `fk_AccessPoint_User1` FOREIGN KEY (`idAccessPoint`) REFERENCES `Users` (`idUser`);

--
-- Περιορισμοί για πίνακα `Books`
--
ALTER TABLE `Books`
  ADD CONSTRAINT `fk_Books_1` FOREIGN KEY (`publisherId`) REFERENCES `Publishers` (`idPublisher`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Books_2` FOREIGN KEY (`lessonId`) REFERENCES `Lessons` (`idLesson`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Books_3` FOREIGN KEY (`accessPointId1`) REFERENCES `AccessPoints` (`idAccessPoint`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Books_4` FOREIGN KEY (`accessPointId2`) REFERENCES `AccessPoints` (`idAccessPoint`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `Departments`
--
ALTER TABLE `Departments`
  ADD CONSTRAINT `fk_Departments_1` FOREIGN KEY (`universityId`) REFERENCES `Universities` (`idUniversity`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `Lessons`
--
ALTER TABLE `Lessons`
  ADD CONSTRAINT `fk_Lessons_1` FOREIGN KEY (`semesterId`) REFERENCES `Semesters` (`idSemester`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `Notes`
--
ALTER TABLE `Notes`
  ADD CONSTRAINT `fk_Notes_1` FOREIGN KEY (`noteProviderId`) REFERENCES `NotesProviders` (`idNotesProvider`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Notes_2` FOREIGN KEY (`lessonId`) REFERENCES `Lessons` (`idLesson`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `NotesProviders`
--
ALTER TABLE `NotesProviders`
  ADD CONSTRAINT `fk_NotesProvider_User1` FOREIGN KEY (`idNotesProvider`) REFERENCES `Users` (`idUser`);

--
-- Περιορισμοί για πίνακα `Publishers`
--
ALTER TABLE `Publishers`
  ADD CONSTRAINT `fk_Publisher_Users1` FOREIGN KEY (`idPublisher`) REFERENCES `Users` (`idUser`);

--
-- Περιορισμοί για πίνακα `Semesters`
--
ALTER TABLE `Semesters`
  ADD CONSTRAINT `fk_Semesters_1` FOREIGN KEY (`departmentId`) REFERENCES `Departments` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `StudentHasBook`
--
ALTER TABLE `StudentHasBook`
  ADD CONSTRAINT `StudentHasBook_Books_FK` FOREIGN KEY (`bookId`) REFERENCES `Books` (`idBook`),
  ADD CONSTRAINT `StudentHasBook_Students_FK` FOREIGN KEY (`studentId`) REFERENCES `Students` (`idStudent`);

--
-- Περιορισμοί για πίνακα `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `fk_Student_Users` FOREIGN KEY (`idStudent`) REFERENCES `Users` (`idUser`),
  ADD CONSTRAINT `fk_Students_1` FOREIGN KEY (`universityId`) REFERENCES `Universities` (`idUniversity`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Students_2` FOREIGN KEY (`departmentId`) REFERENCES `Departments` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Περιορισμοί για πίνακα `UserDepartments`
--
ALTER TABLE `UserDepartments`
  ADD CONSTRAINT `fk_UserDepartment_User1` FOREIGN KEY (`idUserDepartment`) REFERENCES `Users` (`idUser`),
  ADD CONSTRAINT `fk_UserDepartments_1` FOREIGN KEY (`universityId`) REFERENCES `Universities` (`idUniversity`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_UserDepartments_2` FOREIGN KEY (`departmentId`) REFERENCES `Departments` (`idDepartment`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
