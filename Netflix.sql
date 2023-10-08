-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2023 lúc 10:16 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `netflix`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `advertisement`
--

CREATE TABLE `advertisement` (
  `id` int(11) NOT NULL,
  `adsFrom` varchar(1000) DEFAULT NULL,
  `adsLink` varchar(2000) DEFAULT NULL,
  `watchedTimes` int(11) DEFAULT NULL,
  `addDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `accountId` int(11) DEFAULT NULL,
  `voucherId` int(11) DEFAULT NULL,
  `serviceId` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `purchaseStatus` int(11) DEFAULT NULL,
  `paymentMethod` int(11) DEFAULT NULL,
  `createDate` datetime DEFAULT current_timestamp(),
  `purchaseDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoicepaymentmethod`
--

CREATE TABLE `invoicepaymentmethod` (
  `id` int(11) NOT NULL,
  `method` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `invoicepurchasestatus`
--

CREATE TABLE `invoicepurchasestatus` (
  `id` int(11) NOT NULL,
  `state` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `resolution`
--

CREATE TABLE `resolution` (
  `id` int(11) NOT NULL,
  `resolution` varchar(20) DEFAULT NULL,
  `resValue` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `resolution`
--

INSERT INTO `resolution` (`id`, `resolution`, `resValue`) VALUES
(1, '720p', '1280x720'),
(2, '1080p', '1920x1080'),
(3, '2K', '2048x1080'),
(4, '4K UHD', '3840x2160'),
(5, '8K UHD', '7680x4320'),
(6, '480p', '854x480'),
(7, '360p', '640x360'),
(8, '240p', '426x240'),
(9, '144p', '256x144'),
(10, '2160p', '3840x2160'),
(11, '1440p', '2560x1440'),
(12, '720x576', '720x576'),
(13, '720x480', '720x480'),
(14, '720x404', '720x404'),
(15, '640x480', '640x480'),
(16, '640x360', '640x360'),
(17, '320x240', '320x240'),
(18, '240x160', '240x160'),
(19, '160x120', '160x120');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `createDate` datetime DEFAULT current_timestamp(),
  `maxResolution` int(11) DEFAULT NULL,
  `haveAds` bit(1) DEFAULT NULL,
  `haveHistory` bit(1) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `createDate`, `maxResolution`, `haveAds`, `haveHistory`, `duration`) VALUES
(4, 'Basic Service', 9.99, '2023-01-15 00:00:00', 2, b'1', b'1', 30),
(5, 'Premium Service', 14.99, '2023-02-10 00:00:00', 4, b'0', b'1', 30),
(6, 'Family Plan', 19.99, '2023-03-05 00:00:00', 4, b'0', b'1', 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `addDate` datetime DEFAULT current_timestamp(),
  `totalPaying` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `addDate`, `totalPaying`) VALUES
(1, 'Marvel Studios', '2023-01-15 00:00:00', 2500),
(2, 'Warner Bros. Pictures', '2023-02-10 00:00:00', 3200.5),
(3, 'Sony Pictures Entertainment', '2023-03-05 00:00:00', 1850.75),
(4, '20th Century Studios', '2023-04-20 00:00:00', 4200.25),
(5, 'Universal Pictures', '2023-05-12 00:00:00', 3100),
(6, 'Paramount Pictures', '2023-06-28 00:00:00', 2700.75),
(7, 'Lionsgate Films', '2023-07-09 00:00:00', 1980.5),
(8, 'New Line Cinema', '2023-08-14 00:00:00', 3750.25),
(9, 'Columbia Pictures', '2023-09-30 00:00:00', 2800),
(10, 'Legendary Pictures', '2023-10-02 00:00:00', 1950.75),
(11, 'Disney Pixar', '2023-11-18 00:00:00', 3100.25),
(12, 'DreamWorks Pictures', '2023-12-22 00:00:00', 2450.75),
(13, '20th Century Fox', '2024-01-10 00:00:00', 3750),
(14, 'A24 Films', '2024-02-28 00:00:00', 1800.5),
(15, 'Miramax Films', '2024-03-15 00:00:00', 2250.25),
(16, 'Focus Features', '2024-04-09 00:00:00', 2600),
(17, 'CJ Entertainment', '2024-05-25 00:00:00', 3400.75),
(18, 'STX Films', '2024-06-14 00:00:00', 1980),
(19, 'Studio Ghibli', '2024-07-03 00:00:00', 3100.25),
(20, 'Summit Entertainment', '2024-08-22 00:00:00', 2800.75);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `useraccount`
--

CREATE TABLE `useraccount` (
  `id` int(11) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `pass` varchar(4000) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `registerDate` datetime DEFAULT current_timestamp(),
  `fullname` varchar(200) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `currentService` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userrole`
--

CREATE TABLE `userrole` (
  `id` int(11) NOT NULL,
  `roleName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videohistory`
--

CREATE TABLE `videohistory` (
  `videoId` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `lastWatched` datetime DEFAULT NULL,
  `stoppedTime` int(11) DEFAULT NULL,
  `firstWatched` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videolanguage`
--

CREATE TABLE `videolanguage` (
  `id` int(11) NOT NULL,
  `lang` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `videolanguage`
--

INSERT INTO `videolanguage` (`id`, `lang`) VALUES
(1, 'Afrikaans'),
(2, 'Albanian'),
(3, 'Amharic'),
(4, 'Arabic'),
(5, 'Armenian'),
(6, 'Azerbaijani'),
(7, 'Basque'),
(8, 'Belarusian'),
(9, 'Bengali'),
(10, 'Bosnian'),
(11, 'Bulgarian'),
(12, 'Burmese'),
(13, 'Catalan'),
(14, 'Cebuano'),
(15, 'Chichewa'),
(16, 'Chinese (Simplified)'),
(17, 'Chinese (Traditional)'),
(18, 'Corsican'),
(19, 'Croatian'),
(20, 'Czech'),
(21, 'Danish'),
(22, 'Dutch'),
(23, 'English'),
(24, 'Esperanto'),
(25, 'Estonian'),
(26, 'Filipino'),
(27, 'Finnish'),
(28, 'French'),
(29, 'Frisian'),
(30, 'Galician'),
(31, 'Georgian'),
(32, 'German'),
(33, 'Greek'),
(34, 'Gujarati'),
(35, 'Haitian Creole'),
(36, 'Hausa'),
(37, 'Hawaiian'),
(38, 'Hebrew'),
(39, 'Hindi'),
(40, 'Hmong'),
(41, 'Hungarian'),
(42, 'Icelandic'),
(43, 'Igbo'),
(44, 'Indonesian'),
(45, 'Irish'),
(46, 'Italian'),
(47, 'Japanese'),
(48, 'Javanese'),
(49, 'Kannada'),
(50, 'Kazakh'),
(51, 'Khmer'),
(52, 'Kinyarwanda'),
(53, 'Korean'),
(54, 'Kurdish'),
(55, 'Kyrgyz'),
(56, 'Lao'),
(57, 'Latin'),
(58, 'Latvian'),
(59, 'Lithuanian'),
(60, 'Luxembourgish'),
(61, 'Macedonian'),
(62, 'Malagasy'),
(63, 'Malay'),
(64, 'Malayalam'),
(65, 'Maltese'),
(66, 'Maori'),
(67, 'Marathi'),
(68, 'Mongolian'),
(69, 'Nepali'),
(70, 'Norwegian'),
(71, 'Odia'),
(72, 'Pashto'),
(73, 'Persian'),
(74, 'Polish'),
(75, 'Portuguese'),
(76, 'Punjabi'),
(77, 'Romanian'),
(78, 'Russian'),
(79, 'Samoan'),
(80, 'Scots Gaelic'),
(81, 'Serbian'),
(82, 'Sesotho'),
(83, 'Shona'),
(84, 'Sindhi'),
(85, 'Sinhala'),
(86, 'Slovak'),
(87, 'Slovenian'),
(88, 'Somali'),
(89, 'Spanish'),
(90, 'Sundanese'),
(91, 'Swahili'),
(92, 'Swedish'),
(93, 'Tajik'),
(94, 'Tamil'),
(95, 'Tatar'),
(96, 'Telugu'),
(97, 'Thai'),
(98, 'Turkish'),
(99, 'Turkmen'),
(100, 'Ukrainian'),
(101, 'Urdu'),
(102, 'Uyghur'),
(103, 'Uzbek'),
(104, 'Vietnamese'),
(105, 'Welsh'),
(106, 'Xhosa'),
(107, 'Yiddish'),
(108, 'Yoruba'),
(109, 'Zulu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videoresolution`
--

CREATE TABLE `videoresolution` (
  `videoId` int(11) NOT NULL,
  `resolution` int(11) NOT NULL,
  `link` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `videostorage`
--

CREATE TABLE `videostorage` (
  `id` int(11) NOT NULL,
  `videoName` varchar(200) DEFAULT NULL,
  `description` varchar(4000) DEFAULT NULL,
  `videoLength` int(11) DEFAULT NULL,
  `link` varchar(2000) DEFAULT NULL,
  `banner` varchar(1000) DEFAULT NULL,
  `image1` varchar(1000) DEFAULT NULL,
  `image2` varchar(1000) DEFAULT NULL,
  `videoLanguage` int(11) DEFAULT NULL,
  `licenseCost` float DEFAULT NULL,
  `releaseDate` date DEFAULT NULL,
  `purchaseDate` datetime DEFAULT current_timestamp(),
  `watchedTimes` int(11) DEFAULT NULL,
  `supplier` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `videostorage`
--

INSERT INTO `videostorage` (`id`, `videoName`, `description`, `videoLength`, `link`, `banner`, `image1`, `image2`, `videoLanguage`, `licenseCost`, `releaseDate`, `purchaseDate`, `watchedTimes`, `supplier`) VALUES
(2, 'Titanic', 'DẢK', 120, 'h...', '123', '123', '123', NULL, 123, '2023-10-04', '2023-10-05 18:28:02', 1, NULL),
(27, 'The Avengers', 'Earth\'s mightiest heroes join forces to save the world from an alien invasion.', 143, 'https://www.example.com/theavengers', 'Avengers Banner', 'Avengers Image1', 'Avengers Image2', 1, 9.99, '2012-05-04', '2022-12-15 00:00:00', 350000, 1),
(28, 'The Dark Knight', 'Batman faces off against the Joker in this epic crime thriller.', 152, 'https://www.example.com/thedarkknight', 'Dark Knight Banner', 'Dark Knight Image1', 'Dark Knight Image2', 1, 14.99, '2008-07-18', '2022-11-10 00:00:00', 280000, 2),
(29, 'Jurassic Park', 'Dinosaurs are brought back to life in this thrilling adventure.', 127, 'https://www.example.com/jurassicpark', 'Jurassic Park Banner', 'Jurassic Park Image1', 'Jurassic Park Image2', 2, 9.99, '1993-06-11', '2022-10-05 00:00:00', 400000, 3),
(30, 'Inception', 'A thief enters the dreams of others in this mind-bending sci-fi thriller.', 148, 'https://www.example.com/inception', 'Inception Banner', 'Inception Image1', 'Inception Image2', 1, 12.99, '2010-07-16', '2023-01-20 00:00:00', 220000, 2),
(31, 'Frozen', 'Join Elsa and Anna in the magical world of Arendelle.', 102, 'https://www.example.com/frozen', 'Frozen Banner', 'Frozen Image1', 'Frozen Image2', 3, 7.99, '2013-11-27', '2022-09-30 00:00:00', 500000, 4),
(32, 'The Lion King', 'Simba embarks on a journey to reclaim his throne as king of the Pride Lands.', 118, 'https://www.example.com/lionking', 'Lion King Banner', 'Lion King Image1', 'Lion King Image2', 1, 9.99, '1994-06-15', '2022-08-12 00:00:00', 420000, 4),
(33, 'Pulp Fiction', 'A series of interconnected crime stories unfold in this Quentin Tarantino classic.', 154, 'https://www.example.com/pulpfiction', 'Pulp Fiction Banner', 'Pulp Fiction Image1', 'Pulp Fiction Image2', 1, 14.99, '1994-10-14', '2022-07-25 00:00:00', 360000, 2),
(34, 'Toy Story', 'Join Woody and Buzz Lightyear on a toy-tastic adventure.', 81, 'https://www.example.com/toystory', 'Toy Story Banner', 'Toy Story Image1', 'Toy Story Image2', 3, 7.99, '1995-11-22', '2022-06-18 00:00:00', 480000, 4),
(35, 'The Shawshank Redemption', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption.', 142, 'https://www.example.com/shawshank', 'Shawshank Banner', 'Shawshank Image1', 'Shawshank Image2', 1, 9.99, '1994-10-14', '2022-05-30 00:00:00', 380000, 2),
(36, 'The Lord of the Rings: The Fellowship of the Ring', 'Frodo embarks on a perilous journey to destroy the One Ring.', 178, 'https://www.example.com/lotr1', 'LOTR Banner', 'LOTR Image1', 'LOTR Image2', 1, 12.99, '2001-12-19', '2022-04-14 00:00:00', 420000, 3),
(37, 'Titanic', 'A love story unfolds aboard the ill-fated RMS Titanic.', 195, 'https://www.example.com/titanic', 'Titanic Banner', 'Titanic Image1', 'Titanic Image2', 1, 14.99, '1997-12-19', '2022-03-20 00:00:00', 560000, 1),
(38, 'Avatar', 'A paraplegic marine becomes torn between following orders and protecting the world he feels is his home.', 162, 'https://www.example.com/avatar', 'Avatar Banner', 'Avatar Image1', 'Avatar Image2', 1, 11.99, '2009-12-18', '2022-02-10 00:00:00', 490000, 1),
(39, 'The Matrix', 'A computer hacker discovers a dystopian world ruled by machines.', 136, 'https://www.example.com/matrix', 'Matrix Banner', 'Matrix Image1', 'Matrix Image2', 1, 9.99, '1999-03-31', '2022-01-15 00:00:00', 340000, 3),
(40, 'Forrest Gump', 'The life story of a man with a low IQ who accidentally influences several historic events.', 142, 'https://www.example.com/forrestgump', 'Forrest Gump Banner', 'Forrest Gump Image1', 'Forrest Gump Image2', 1, 12.99, '1994-07-06', '2021-12-20 00:00:00', 420000, 2),
(41, 'E.T. the Extra-Terrestrial', 'A young boy befriends a stranded alien and helps him return home.', 115, 'https://www.example.com/et', 'E.T. Banner', 'E.T. Image1', 'E.T. Image2', 1, 7.99, '1982-06-11', '2021-11-05 00:00:00', 390000, 4),
(42, 'The Godfather', 'The aging patriarch of an organized crime dynasty transfers control to his reluctant son.', 175, 'https://www.example.com/godfather', 'Godfather Banner', 'Godfather Image1', 'Godfather Image2', 1, 14.99, '1972-03-24', '2021-10-10 00:00:00', 480000, 3),
(43, 'Spider-Man: No Way Home', 'Spider-Man teams up with other Spider-People to stop villains from across the multiverse.', 148, 'https://www.example.com/spiderman', 'Spider-Man Banner', 'Spider-Man Image1', 'Spider-Man Image2', 1, 12.99, '2021-12-17', '2021-09-15 00:00:00', 260000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `remaining` int(11) DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `specificFor` int(11) DEFAULT NULL,
  `createDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `accountId` (`accountId`),
  ADD KEY `voucherId` (`voucherId`),
  ADD KEY `serviceId` (`serviceId`),
  ADD KEY `purchaseStatus` (`purchaseStatus`),
  ADD KEY `paymentMethod` (`paymentMethod`);

--
-- Chỉ mục cho bảng `invoicepaymentmethod`
--
ALTER TABLE `invoicepaymentmethod`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `invoicepurchasestatus`
--
ALTER TABLE `invoicepurchasestatus`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `resolution`
--
ALTER TABLE `resolution`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maxResolution` (`maxResolution`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `currentService` (`currentService`);

--
-- Chỉ mục cho bảng `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `videohistory`
--
ALTER TABLE `videohistory`
  ADD PRIMARY KEY (`videoId`,`accountId`),
  ADD KEY `accountId` (`accountId`);

--
-- Chỉ mục cho bảng `videolanguage`
--
ALTER TABLE `videolanguage`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `videoresolution`
--
ALTER TABLE `videoresolution`
  ADD PRIMARY KEY (`videoId`,`resolution`),
  ADD KEY `resolution` (`resolution`);

--
-- Chỉ mục cho bảng `videostorage`
--
ALTER TABLE `videostorage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `supplier` (`supplier`),
  ADD KEY `videoLanguage` (`videoLanguage`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specificFor` (`specificFor`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invoicepaymentmethod`
--
ALTER TABLE `invoicepaymentmethod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `invoicepurchasestatus`
--
ALTER TABLE `invoicepurchasestatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `resolution`
--
ALTER TABLE `resolution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `userrole`
--
ALTER TABLE `userrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `videolanguage`
--
ALTER TABLE `videolanguage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `videostorage`
--
ALTER TABLE `videostorage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`accountId`) REFERENCES `useraccount` (`id`),
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`voucherId`) REFERENCES `voucher` (`id`),
  ADD CONSTRAINT `invoice_ibfk_3` FOREIGN KEY (`serviceId`) REFERENCES `service` (`id`),
  ADD CONSTRAINT `invoice_ibfk_4` FOREIGN KEY (`purchaseStatus`) REFERENCES `invoicepurchasestatus` (`id`),
  ADD CONSTRAINT `invoice_ibfk_5` FOREIGN KEY (`paymentMethod`) REFERENCES `invoicepaymentmethod` (`id`);

--
-- Các ràng buộc cho bảng `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`maxResolution`) REFERENCES `resolution` (`id`);

--
-- Các ràng buộc cho bảng `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`role`) REFERENCES `userrole` (`id`),
  ADD CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`currentService`) REFERENCES `service` (`id`);

--
-- Các ràng buộc cho bảng `videohistory`
--
ALTER TABLE `videohistory`
  ADD CONSTRAINT `videohistory_ibfk_1` FOREIGN KEY (`videoId`) REFERENCES `videostorage` (`id`),
  ADD CONSTRAINT `videohistory_ibfk_2` FOREIGN KEY (`accountId`) REFERENCES `useraccount` (`id`);

--
-- Các ràng buộc cho bảng `videoresolution`
--
ALTER TABLE `videoresolution`
  ADD CONSTRAINT `videoresolution_ibfk_1` FOREIGN KEY (`videoId`) REFERENCES `videostorage` (`id`),
  ADD CONSTRAINT `videoresolution_ibfk_2` FOREIGN KEY (`resolution`) REFERENCES `resolution` (`id`);

--
-- Các ràng buộc cho bảng `videostorage`
--
ALTER TABLE `videostorage`
  ADD CONSTRAINT `videostorage_ibfk_1` FOREIGN KEY (`supplier`) REFERENCES `supplier` (`id`),
  ADD CONSTRAINT `videostorage_ibfk_2` FOREIGN KEY (`videoLanguage`) REFERENCES `videolanguage` (`id`);

--
-- Các ràng buộc cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD CONSTRAINT `voucher_ibfk_1` FOREIGN KEY (`specificFor`) REFERENCES `service` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;