-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 05 Ιουλ 2020 στις 15:25:25
-- Έκδοση διακομιστή: 10.1.38-MariaDB
-- Έκδοση PHP: 7.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `musicstore`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `admins`
--

INSERT INTO `admins` (`ID`, `Name`, `Password`) VALUES
(1, 'admin1', '12345'),
(2, 'admin2', '23456');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_ID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` float NOT NULL,
  `express` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `orders`
--

INSERT INTO `orders` (`order_ID`, `Username`, `timestamp`, `product_ID`, `Quantity`, `Price`, `express`) VALUES
(5733120, 'test2', '2020-06-09 15:13:02', 8, 2, 24.99, 'yes'),
(5733120, 'test2', '2020-06-09 15:13:02', 12, 1, 24.99, 'yes'),
(37187608, 'test1', '2020-06-21 14:37:59', 1, 2, 24.99, 'no'),
(37187608, 'test1', '2020-06-21 14:37:59', 2, 1, 24.99, 'no'),
(58755613, 'newUser', '2020-06-21 14:45:24', 4, 2, 24.99, 'no'),
(58755613, 'newUser', '2020-06-21 14:45:24', 5, 1, 24.99, 'no'),
(40116974, 'test3', '2020-06-21 20:36:18', 1, 2, 24.99, 'no'),
(40116974, 'test3', '2020-06-21 20:36:18', 2, 2, 24.99, 'no'),
(13019287, 'final', '2020-07-04 15:54:53', 1, 2, 24.99, 'yes');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `photos`
--

CREATE TABLE `photos` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `photos`
--

INSERT INTO `photos` (`ID`, `Username`, `date`, `file`, `size`, `type`) VALUES
(1, 'test1', '2020-06-08 15:11:25', 'image2.jpeg', 'image/jpeg', '96935'),
(2, 'test2', '2020-06-08 15:12:34', 'image1.jpg', 'image/jpeg', '7555'),
(3, 'test2', '2020-06-08 15:26:50', 'image33.jpg', 'image/jpeg', '7551'),
(4, 'test3', '2020-06-08 20:02:14', 'image55.jpg', 'image/jpeg', '16942');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products`
--

CREATE TABLE `products` (
  `ID` int(11) NOT NULL,
  `Category_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `products`
--

INSERT INTO `products` (`ID`, `Category_ID`, `Name`, `Price`, `image`) VALUES
(1, 1, 'The_Wall', 24.99, 'v3.jpg'),
(2, 1, 'Nevermind', 24.99, 'v2.jpg'),
(3, 1, 'Violator', 24.99, 'v6.jpg'),
(4, 1, 'Back_In_Black', 24.99, 'v1.jpg'),
(5, 1, 'Waiting_For_The_Sun', 24.99, 'v4.jpg'),
(6, 1, 'Fireball', 24.99, 'v5.jpg'),
(7, 2, 'Without_You_Im_Nothing', 24.99, 'cd1.jpg'),
(8, 2, 'Hybrid_Theory', 24.99, 'cd2.jpg'),
(9, 2, 'Parachutes', 24.99, 'cd3.jpg'),
(10, 2, 'Am', 24.99, 'cd6.jpg'),
(11, 2, 'Californication', 24.99, 'cd4.jpg'),
(12, 2, 'The_Resistance', 24.99, 'cd5.jpg');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `products_categories`
--

CREATE TABLE `products_categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `products_categories`
--

INSERT INTO `products_categories` (`ID`, `Name`, `image`) VALUES
(1, 'Vinyls', 'vinyl.jpg'),
(2, 'Cd', 'cd.jpg');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ratings`
--

CREATE TABLE `ratings` (
  `Username` varchar(255) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `ratings`
--

INSERT INTO `ratings` (`Username`, `photo_id`, `comment`, `stars`) VALUES
('test3', 4, '  check comment', 4),
('test3', 2, '  check2', 2),
('test3', 4, '  comment2', 4),
('test3', 4, '  check again', 3),
('test1', 4, '  test1 comment', 5),
('newUser', 4, '  newUser comment', 1);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Full_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`Username`, `Password`, `Email`, `Full_Name`) VALUES
('final', 'VUxKYaMogjs=', 'tsoufis.thodoris@gmail.com', 'final surname'),
('newUser', 'ck0HaIt+jAs=', 'tsoufis.thodoris@gmail.com', 'newUser Surname'),
('test1', 'R0ZKJ7IehiI=', 'tsoufis.thodoris@gmail.com', 'testUser1'),
('test2', 'J3YwXIcools=', 'tsoufis.thodoris@gmail.com', 'testUser2'),
('test3', 'IhdKVp55qD0=', 'tsoufis.thodoris@gmail.com', 'testUser3');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `user_details`
--

CREATE TABLE `user_details` (
  `Username` varchar(255) NOT NULL,
  `order_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Surname` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `AddressNumber` int(11) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Region` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `Phone_Number` varchar(255) NOT NULL,
  `Postcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `user_details`
--

INSERT INTO `user_details` (`Username`, `order_ID`, `Name`, `Surname`, `Address`, `AddressNumber`, `City`, `Region`, `Country`, `Phone_Number`, `Postcode`) VALUES
('test2', 5733120, 'test2', 'test2', 'address', 3, 'athens', 'athens', 'greece', '6999999995', 12555),
('newUser', 58755613, 'newUser', 'newUser', 'newAddress', 6, 'newCity', 'newRegion', 'newCountry', '6988888888', 12345),
('test3', 40116974, 'test3', 'test3', 'test3', 2, 'test3', 'test3', 'test3', '6999999991', 12552),
('test1', 37187608, 'test1', 'test1', 'testAddress', 10, 'test1', 'test1', 'test1', '5498464', 12345),
('final', 13019287, 'Thodoris', 're', 'address', 2, 'athens', 'athens', 'Î•Î»Î»Î¬Î´Î±', '6999999991', 12555);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`ID`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `photos`
--
ALTER TABLE `photos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
