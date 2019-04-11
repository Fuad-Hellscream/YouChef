-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 12:59 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youchef`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `MealID` int(11) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `CommentInfo` varchar(200) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentID`, `MealID`, `Email`, `CommentInfo`, `Date`, `Time`) VALUES
(1, 37, 'mproma162089@bscse.uiu.ac.bd', 'This tasted bad!', '2018-09-30', '16:03:09'),
(2, 37, 'mshowmik162146@bscse.uiu.ac.bd', 'I thought it tasted quite well!', '2018-09-30', '16:03:33'),
(3, 37, 'admin@g.com', 'I will look into it!', '2018-09-30', '16:04:02'),
(4, 37, 'mproma162089@bscse.uiu.ac.bd', 'New comment!', '2018-09-30', '17:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `comment_forum`
--

CREATE TABLE `comment_forum` (
  `ForumID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Details` varchar(1000) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment_likes`
--

CREATE TABLE `comment_likes` (
  `CommentID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ContactID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cooking_lessons`
--

CREATE TABLE `cooking_lessons` (
  `CourseName` varchar(50) NOT NULL,
  `Difficulty` varchar(10) DEFAULT 'easy',
  `Certificate` blob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_review`
--

CREATE TABLE `delivery_review` (
  `OrderID` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Rating` int(2) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `EquipmentName` varchar(60) NOT NULL,
  `Specifications` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`EquipmentName`, `Specifications`) VALUES
('Grill', 'None'),
('Oven', '450V'),
('Stove', '260V');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_recipe`
--

CREATE TABLE `equipment_recipe` (
  `EquipmentName` varchar(60) NOT NULL,
  `MealID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_recipe`
--

INSERT INTO `equipment_recipe` (`EquipmentName`, `MealID`) VALUES
('Grill', 40),
('Oven', 36),
('Oven', 37),
('Oven', 40),
('Oven', 43);

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `ForumID` int(11) NOT NULL,
  `Topic` varchar(100) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `MealID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `QuantityPerPerson` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`MealID`, `ItemID`, `QuantityPerPerson`) VALUES
(36, 19, 7.5),
(36, 20, 32),
(36, 21, 0.25),
(36, 22, 0.1),
(36, 23, 0.25),
(36, 24, 0.2),
(36, 25, 0.4),
(36, 26, 0.1),
(36, 27, 5),
(36, 28, 20),
(36, 29, 30),
(36, 30, 0.5),
(36, 31, 0.13),
(36, 33, 0.25),
(37, 34, 1),
(38, 35, 0.5),
(38, 36, 100),
(38, 37, 0.15),
(40, 40, 0.5),
(40, 41, 0.01);

-- --------------------------------------------------------

--
-- Table structure for table `lesson_progress`
--

CREATE TABLE `lesson_progress` (
  `Email` varchar(30) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `CourseCompleted` varchar(15) DEFAULT 'not completed',
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_progress_recipe`
--

CREATE TABLE `lesson_progress_recipe` (
  `Email` varchar(30) NOT NULL,
  `CourseName` varchar(30) NOT NULL,
  `MealID` int(11) NOT NULL,
  `Completed` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lesson_recipe`
--

CREATE TABLE `lesson_recipe` (
  `CourseName` varchar(50) NOT NULL,
  `MealID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `DuePayment` float DEFAULT '0',
  `DiscountDetails` int(11) DEFAULT '0',
  `EstimatedTime` float DEFAULT '60',
  `OrderTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Email`, `DuePayment`, `DiscountDetails`, `EstimatedTime`, `OrderTime`) VALUES
(18, 'admin@g.com', 425, 15, 120, '00:00:00'),
(21, 'mshowmik162146@bscse.uiu.ac.bd', 5900, 0, 120, '02:05:08'),
(24, 'mproma162089@bscse.uiu.ac.bd', 475, 5, 120, '09:56:55'),
(25, 'mproma162089@bscse.uiu.ac.bd', 475, 5, 120, '10:31:42'),
(26, 'mproma162089@bscse.uiu.ac.bd', 3000, 0, 120, '10:32:15'),
(27, 'mproma162089@bscse.uiu.ac.bd', 80, 0, 120, '10:33:02'),
(28, 'mproma162089@bscse.uiu.ac.bd', 210, 0, 120, '10:33:37'),
(29, 'mproma162089@bscse.uiu.ac.bd', 1260, 0, 120, '10:34:05'),
(30, 'mproma162089@bscse.uiu.ac.bd', 5900, 0, 120, '10:53:48'),
(31, 'mproma162089@bscse.uiu.ac.bd', 35, 0, 120, '10:54:03'),
(32, 'mproma162089@bscse.uiu.ac.bd', 0, 0, 120, '10:54:35'),
(33, 'mproma162089@bscse.uiu.ac.bd', 240, 0, 120, '10:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_raw`
--

CREATE TABLE `order_raw` (
  `OrderID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_raw`
--

INSERT INTO `order_raw` (`OrderID`, `ItemID`, `Quantity`) VALUES
(21, 20, 750),
(27, 22, 1),
(28, 23, 3),
(29, 19, 900),
(30, 20, 750),
(31, 21, 1),
(33, 22, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order_ready_meals`
--

CREATE TABLE `order_ready_meals` (
  `orderID` int(11) NOT NULL,
  `readyMealID` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_recipe`
--

CREATE TABLE `order_recipe` (
  `OrderID` int(11) NOT NULL,
  `MealID` int(11) NOT NULL,
  `NumberOfPeople` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_recipe`
--

INSERT INTO `order_recipe` (`OrderID`, `MealID`, `NumberOfPeople`) VALUES
(18, 36, 2),
(24, 36, 2),
(26, 37, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rawingredients`
--

CREATE TABLE `rawingredients` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(30) NOT NULL,
  `Brand` varchar(30) NOT NULL DEFAULT 'None',
  `PremiumCheck` varchar(10) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `AvailableQuantity` int(11) DEFAULT NULL,
  `Unit` varchar(15) NOT NULL DEFAULT 'kg',
  `MinimumPurchasable` float NOT NULL DEFAULT '1',
  `Type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawingredients`
--

INSERT INTO `rawingredients` (`ItemID`, `ItemName`, `Brand`, `PremiumCheck`, `Price`, `AvailableQuantity`, `Unit`, `MinimumPurchasable`, `Type`) VALUES
(19, 'Olive Oil', 'None', 'premium', 420, 6000, 'ml', 300, 'vegan'),
(20, 'Red Wine', 'None', 'premium', 5900, 6000, 'ml', 750, 'vegan'),
(21, 'Onion', '', 'regular', 35, 500, 'kg', 1, 'vegan'),
(22, 'Garlic', '', 'premium', 80, 20, 'kg', 1, 'vegan'),
(23, 'Carrot', '', 'regular', 70, 40, 'kg', 1, 'vegan'),
(24, 'Celery Stalk', '', 'regular', 30, 200, 'kg', 1, 'vegan'),
(25, 'Tomato Puree', '', 'regular', 120, 7, 'kg', 1, 'vegan'),
(26, 'Tomato', '', 'regular', 90, 250, 'kg', 1, 'vegan'),
(27, 'Basil Leaves', 'Chaldal', 'regular', 3, 1000, 'g', 50, 'vegan'),
(28, 'Black Pepper', 'Chaldal', 'regular', 1, 1000, 'g', 100, 'vegan'),
(29, 'Parmesan', '', 'regular', 400, 20000, 'g', 500, 'meat'),
(30, 'Smoked Bacon Lardons', '', 'regular', 130, 6000, 'kg', 1, 'meat'),
(31, 'Beef Mince', 'Bengal Meat', 'premium', 885, 20, 'kg', 1, 'meat'),
(32, 'Bay Leaves', '', 'regular', 300, 20, 'kg', 1, 'vegan'),
(33, 'Pasta Shapes', 'None', 'premium', 250, 1000, 'kg', 1, 'vegan'),
(34, 'Flour', '', 'regular', 50, 1000, 'kilo', 1, 'vegan'),
(35, 'Rice', '', 'regular', 60, 50, 'kg', 1, 'Vegan'),
(36, 'Capsicum', '', 'regular', 420, 30000, 'g', 250, 'vegan'),
(37, 'Sunflower Oil', '', 'regular', 265, 50, 'litres', 1, 'vegan'),
(38, 'Noodles', 'Mr Noodles', 'regular', 15, 2000, 'g', 50, 'vegan'),
(39, 'Egg', '', 'regular', 95, 20, 'dozen', 1, 'meat'),
(40, 'Boneless Chicken Breast', 'Bengal Meat', 'premium', 570, 30, 'kg', 1, 'meat'),
(41, 'Salt', 'ACI Pure Salt', 'regular', 38, 100, 'kg', 1, 'vegan');

-- --------------------------------------------------------

--
-- Table structure for table `readymeals`
--

CREATE TABLE `readymeals` (
  `readyMealID` int(11) NOT NULL,
  `mealName` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Calories` int(11) DEFAULT '100',
  `NutritionalInfo` varchar(500) DEFAULT NULL,
  `Popularity` int(11) DEFAULT NULL,
  `restaurantID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `MealID` int(11) NOT NULL,
  `MealName` varchar(50) NOT NULL,
  `Price` float NOT NULL,
  `Difficulty` varchar(15) DEFAULT 'Easy',
  `Instruction` varchar(5000) NOT NULL,
  `Calories` int(11) DEFAULT '0',
  `NutritionalInfo` varchar(1000) NOT NULL,
  `PromotionalDiscounts` int(11) DEFAULT '0',
  `Picture` varchar(100) DEFAULT '"images/recipe/default.png"',
  `Popularity` int(11) DEFAULT '0',
  `Email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`MealID`, `MealName`, `Price`, `Difficulty`, `Instruction`, `Calories`, `NutritionalInfo`, `PromotionalDiscounts`, `Picture`, `Popularity`, `Email`) VALUES
(36, 'Beef Ragu Pasta with Linguine', 250, 'Medium', 'Ingredients:\r\n2 tbsp olive oil\r\n1 onion, finely chopped\r\n2 garlic cloves, finely chopped\r\n1 large carrot, finely chopped\r\n1 celery stalk, trimmed, finely chopped\r\n200g/7oz smoked bacon lardons\r\n500g/1lb 2oz beef mince\r\n2 tbsp tomato purÃ©e\r\n1 x 400g tin tomatoes\r\n150ml/5fl oz red wine\r\nhandful fresh basil leaves, roughly torn\r\nsalt and freshly ground black pepper\r\n3-4 tbsp freshly grated Parmesan, to serve\r\n2 450g Pasta Shapes\r\n\r\nRecipe:\r\nFor the homemade pasta, tip the flour onto a clean work surface and make a well in the centre. Crack the eggs into the well, then gradually draw the flour into the eggs until the mixture comes together as a sticky dough. Knead the dough on a lightly floured work surface until all of the flour has been incorporated and the dough is smooth. Alternatively, blend the flour and eggs in a food processor until the mixture forms small crumbs. Tip it out onto a clean, lightly floured work surface and squish into a ball, then knead for a few minutes until smooth. \r\nWrap the pasta dough in cling film and chill for 20 minutes in the fridge.\r\nDust the rollers of your pasta-rolling machine with flour.\r\nCut the chilled pasta dough into 3 equally sized pieces and flatten them with the palms of your hand to a thickness of 1cm/Â½in. \r\nStarting at the lowest (thickest) setting, feed the dough through the machine, turning the handle with one hand and holding the dough as it comes through the machine with the other.\r\nChange the setting on the pasta machine to the next-thickest setting, flour it again and feed the pasta sheet through the machine again, as before.\r\nRepeat this process 3 or 4 more times, flouring the machine and changing the setting down each time until the last but one setting. You should end up with a long sheet of pasta.\r\nRepeat the rolling process with the remaining pieces of pasta dough.\r\nFold the rolled pasta sheets over into a manageable size, then cut them lengthways to form strips of linguine about 3mm thick. Hang the linguine over a rack so that it can dry out slightly while you make the ragu.\r\nFor the ragu, heat the oil in a large flameproof casserole over a medium heat. Add the onions and garlic and fry for 2-3 minutes, or until softened but not coloured.\r\nAdd the carrot and celery and fry for another 2-3 minutes. Add the bacon and fry for a further 1-2 minutes. \r\nAdd the beef mince and fry for 2-3 minutes on each side, or until just browned.\r\nStir in the tomato purÃ©e and continue to cook for 1-2 minutes, then pour in the tinned tomatoes and red wine and bring the mixture to the boil. \r\nStir in half of the basil leaves, then reduce the heat until the mixture is simmering. Simmer for 45 minutes, or until the sauce has thickened. Season, to taste, with salt and freshly ground black pepper. Stir in the remaining basil leaves just before serving. \r\nTo serve, bring a large pan of salted water to the boil. Add the pasta and cook for 3-4 minutes, or until tender. Drain well, then add the pasta to the pan of ragu and mix well to coat the pasta in the sauce. Serve sprinkled with the Parmesan.', 543000, 'Carbohydrates: 130g\r\nFat: 298g\r\nProtein: 360g\r\nSugar: 30g\r\nSalt: 14g', 5, NULL, 0, 'admin@g.com'),
(37, 'Chocolate Cake', 750, 'Hard', 'Bake bake bake', 700000, 'Fat : 500g', 0, NULL, 0, 'mproma162089@bscse.uiu.ac.bd'),
(38, 'Fried RIce', 85, 'Easy', 'Stir rice in frying pan.', 130000, 'Fat: 100g\r\nCarbohydrate: 70g\r\nProtein: 135g', 0, NULL, 0, 'admin@g.com'),
(40, 'Grilled Chicken', 160, 'Medium', 'Grill the chicken well', 690000, 'Fat: 100g\r\nCarbohydrate: 70g\r\nProtein: 250g', 0, NULL, 0, 'admin@g.com'),
(43, 'Something', 1231, 'Easy', 'Random', 1232141, 'Random', 0, NULL, 0, 'admin@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_submission`
--

CREATE TABLE `recipe_submission` (
  `SubmissionID` int(11) NOT NULL,
  `Picture` blob NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `MealName` varchar(50) DEFAULT NULL,
  `Instruction` varchar(5000) DEFAULT NULL,
  `Calories` int(11) DEFAULT NULL,
  `NutritionalInfo` varchar(1000) DEFAULT NULL,
  `RawIngredients` varchar(2000) DEFAULT NULL,
  `KitchenEquipments` varchar(1000) DEFAULT NULL,
  `Accepted` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_submission`
--

INSERT INTO `recipe_submission` (`SubmissionID`, `Picture`, `Email`, `MealName`, `Instruction`, `Calories`, `NutritionalInfo`, `RawIngredients`, `KitchenEquipments`, `Accepted`) VALUES
(2, '', 'mproma162089@bscse.uiu.ac.bd', 'Smashed Potatos', 'Smash the potatoes', 132, 'Fat: 10g\r\nProtein : 15g', 'Potatoes', '', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurantID` int(11) NOT NULL,
  `restaurantName` varchar(50) NOT NULL,
  `restaurantDetails` varchar(300) DEFAULT 'Not enough information has been provided'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_food`
--

CREATE TABLE `review_food` (
  `ReviewID` int(11) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `MealID` int(11) DEFAULT NULL,
  `Rating` int(2) DEFAULT NULL,
  `Description` varchar(1500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_food`
--

INSERT INTO `review_food` (`ReviewID`, `Email`, `MealID`, `Rating`, `Description`) VALUES
(1, 'admin@g.com', 36, 5, 'I loved it!'),
(2, 'admin@g.com', 37, 3, 'Not so good!');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`Email`) VALUES
('raihan@gmail.com'),
('raihan@gmail.com'),
('arponcandy@gmail.com'),
('asa@gmail.com'),
('arponcandy@gmail.com'),
('gasdio@gasiof.com'),
('gdsjk@gmail.om');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `PasswordEnc` varchar(50) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Gender` varchar(7) NOT NULL DEFAULT 'male',
  `DateOfBirth` varchar(10) NOT NULL,
  `Points` int(11) DEFAULT NULL,
  `UserType` varchar(30) DEFAULT NULL,
  `Picture` varchar(50) DEFAULT 'images/null.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `FirstName`, `LastName`, `PasswordEnc`, `Contact`, `Address`, `Gender`, `DateOfBirth`, `Points`, `UserType`, `Picture`) VALUES
('admin@g.com', 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '01674664884', 'Mohammadpur', 'Male', '1993-06-23', 245, 'admin', 'images/null.jpg'),
('anu@gmail.com', 'Sunehra', 'Anusha', '89a4b5bd7d02ad1e342c960e6a98365c', '017124124124', 'MOhammap', 'male', '0000-00-00', 50, 'regular', 'images/null.jpg'),
('arponcandy@gmail.com', 'Arpon', 'Kundu', 'a8967afc1cabcf2af29b0a9f44771005', '019123456789', 'Khamarbari', '', '1995-06-27', 50, 'regular', 'images/null.jpg'),
('lebu@gmail.com', 'Labib', 'Tajremin', '3f24e567591e9cbab2a7d2f1f748a1d4', '01903680368', 'Jafrabad', '', '1996-04-06', 50, 'regular', 'images/null.jpg'),
('mehedi@gmail.com', 'Mehedi', 'Hasan', '91ec8d992540095dccbaa04a3e5ba55f', '01937348373', 'Savar', '', '1997-04-04', 50, 'regular', 'images/null.jpg'),
('mproma162089@bscse.uiu.ac.bd', 'Mahfuz Ara', 'Proma', '86b3e135d83a92a4bcdd84838a85b35d', '01924534233', 'Mirpur', 'Female', '1996-01-01', 40, 'regular', 'images/null.jpg'),
('mshowmik162146@bscse.uiu.ac.bd', 'Muhtasim Fuad', 'Showmik', 'a74c2126d6d08b201e6aaa32a57974ac', '01749135046', 'Mohammadpur', 'Male', '1993-06-23', 5, 'admin', 'images/null.jpg'),
('piyu@gmail.com', 'Romana', 'Piyu', 'c5d0fa27363044291af3d969a298a4ce', '0190', 'Dhanmondi', '', '1995-06-06', 50, 'regular', 'images/null.jpg'),
('raihan@g.com', 'Raihan Chowdhury', 'Ridoy', 'daa6b8d04ce72d953d5501adc53ddd82', '01912345678', 'Vatara', 'Male', '1997-01-01', 50, 'regular', 'images/null.jpg'),
('sangidamumu10@gmail.com', 'Sangida Benta', 'Mannan', '61042037df04835a51acfe63b71312da', '01777830535', 'Mirpur', 'Female', '1995-04-29', 0, 'admin', 'images/null.jpg'),
('shahriardot@gmail.com', 'Shahriar', 'Haque', 'bb090b21bafe2e3fd6c387dace419457', '01751817181', 'Vatara', 'Male', '1995-05-25', 0, 'regular', 'images/null.jpg'),
('sumona@gmail.com', 'Sumona', 'Chokroborty', '3556622040606d58c302117c90e5ab4f', '01728907127', 'Indira Road', '', '1995-09-09', 50, 'regular', 'images/null.jpg'),
('tanaz@gmail.com', 'Sabrina Sultana', 'Tanaz', 'efddeba31223af9b570f3aade8089237', '01951711517', 'Dhanmondi', '', '1995-06-06', 50, 'regular', 'images/null.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users_food_review`
--

CREATE TABLE `users_food_review` (
  `Email` varchar(30) NOT NULL,
  `ReviewID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_food_review`
--

INSERT INTO `users_food_review` (`Email`, `ReviewID`) VALUES
('admin@g.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_ingredients`
--

CREATE TABLE `user_ingredients` (
  `Email` varchar(30) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ingredients`
--

INSERT INTO `user_ingredients` (`Email`, `ItemID`, `Date`, `Time`) VALUES
('admin@g.com', 34, '2018-09-30', '09:36:43'),
('admin@g.com', 35, '2018-09-30', '13:56:50'),
('admin@g.com', 36, '2018-09-30', '13:57:56'),
('admin@g.com', 37, '2018-09-30', '14:00:30'),
('admin@g.com', 38, '2018-09-30', '14:05:02'),
('admin@g.com', 39, '2018-09-30', '14:05:59'),
('admin@g.com', 40, '2018-09-30', '14:10:45'),
('admin@g.com', 41, '2018-09-30', '14:11:36'),
('mshowmik162146@bscse.uiu.ac.bd', 19, '2018-09-29', '13:27:15'),
('mshowmik162146@bscse.uiu.ac.bd', 20, '2018-09-29', '13:28:25'),
('mshowmik162146@bscse.uiu.ac.bd', 21, '2018-09-29', '13:50:27'),
('mshowmik162146@bscse.uiu.ac.bd', 22, '2018-09-29', '13:51:17'),
('mshowmik162146@bscse.uiu.ac.bd', 23, '2018-09-29', '13:52:37'),
('mshowmik162146@bscse.uiu.ac.bd', 24, '2018-09-29', '13:53:20'),
('mshowmik162146@bscse.uiu.ac.bd', 25, '2018-09-29', '13:54:58'),
('mshowmik162146@bscse.uiu.ac.bd', 26, '2018-09-29', '13:55:45'),
('mshowmik162146@bscse.uiu.ac.bd', 27, '2018-09-29', '13:57:29'),
('mshowmik162146@bscse.uiu.ac.bd', 28, '2018-09-29', '13:58:31'),
('mshowmik162146@bscse.uiu.ac.bd', 29, '2018-09-29', '13:59:29'),
('mshowmik162146@bscse.uiu.ac.bd', 30, '2018-09-29', '14:01:57'),
('mshowmik162146@bscse.uiu.ac.bd', 31, '2018-09-29', '14:03:13'),
('mshowmik162146@bscse.uiu.ac.bd', 32, '2018-09-29', '14:05:56'),
('mshowmik162146@bscse.uiu.ac.bd', 33, '2018-09-29', '14:06:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `MealID` (`MealID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `comment_forum`
--
ALTER TABLE `comment_forum`
  ADD PRIMARY KEY (`ForumID`,`Email`),
  ADD UNIQUE KEY `ForumID` (`ForumID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD PRIMARY KEY (`CommentID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ContactID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `cooking_lessons`
--
ALTER TABLE `cooking_lessons`
  ADD PRIMARY KEY (`CourseName`);

--
-- Indexes for table `delivery_review`
--
ALTER TABLE `delivery_review`
  ADD PRIMARY KEY (`OrderID`,`Email`),
  ADD UNIQUE KEY `OrderID` (`OrderID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`EquipmentName`);

--
-- Indexes for table `equipment_recipe`
--
ALTER TABLE `equipment_recipe`
  ADD PRIMARY KEY (`EquipmentName`,`MealID`),
  ADD KEY `MealID` (`MealID`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`ForumID`),
  ADD UNIQUE KEY `ForumID` (`ForumID`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`MealID`,`ItemID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `lesson_progress`
--
ALTER TABLE `lesson_progress`
  ADD PRIMARY KEY (`Email`,`CourseName`),
  ADD KEY `CourseName` (`CourseName`);

--
-- Indexes for table `lesson_progress_recipe`
--
ALTER TABLE `lesson_progress_recipe`
  ADD PRIMARY KEY (`Email`,`CourseName`,`MealID`),
  ADD KEY `CourseName` (`CourseName`),
  ADD KEY `MealID` (`MealID`);

--
-- Indexes for table `lesson_recipe`
--
ALTER TABLE `lesson_recipe`
  ADD PRIMARY KEY (`CourseName`,`MealID`),
  ADD KEY `MealID` (`MealID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD UNIQUE KEY `OrderID` (`OrderID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `order_raw`
--
ALTER TABLE `order_raw`
  ADD PRIMARY KEY (`OrderID`,`ItemID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- Indexes for table `order_ready_meals`
--
ALTER TABLE `order_ready_meals`
  ADD PRIMARY KEY (`orderID`,`readyMealID`),
  ADD KEY `orm_fk2` (`readyMealID`);

--
-- Indexes for table `order_recipe`
--
ALTER TABLE `order_recipe`
  ADD PRIMARY KEY (`OrderID`,`MealID`),
  ADD KEY `MealID` (`MealID`);

--
-- Indexes for table `rawingredients`
--
ALTER TABLE `rawingredients`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `readymeals`
--
ALTER TABLE `readymeals`
  ADD PRIMARY KEY (`readyMealID`),
  ADD KEY `restaurantFk` (`restaurantID`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`MealID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `recipe_submission`
--
ALTER TABLE `recipe_submission`
  ADD PRIMARY KEY (`SubmissionID`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurantID`);

--
-- Indexes for table `review_food`
--
ALTER TABLE `review_food`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `Email` (`Email`),
  ADD KEY `MealID` (`MealID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `users_food_review`
--
ALTER TABLE `users_food_review`
  ADD PRIMARY KEY (`Email`,`ReviewID`),
  ADD KEY `ReviewID` (`ReviewID`);

--
-- Indexes for table `user_ingredients`
--
ALTER TABLE `user_ingredients`
  ADD PRIMARY KEY (`Email`,`ItemID`),
  ADD KEY `ItemID` (`ItemID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment_likes`
--
ALTER TABLE `comment_likes`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ContactID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `ForumID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `rawingredients`
--
ALTER TABLE `rawingredients`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `readymeals`
--
ALTER TABLE `readymeals`
  MODIFY `readyMealID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `MealID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `recipe_submission`
--
ALTER TABLE `recipe_submission`
  MODIFY `SubmissionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurantID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_food`
--
ALTER TABLE `review_food`
  MODIFY `ReviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`MealID`) REFERENCES `recipe` (`MealID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `comment_forum`
--
ALTER TABLE `comment_forum`
  ADD CONSTRAINT `comment_forum_ibfk_1` FOREIGN KEY (`ForumID`) REFERENCES `forum` (`ForumID`),
  ADD CONSTRAINT `comment_forum_ibfk_2` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `comment_likes`
--
ALTER TABLE `comment_likes`
  ADD CONSTRAINT `comment_likes_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `delivery_review`
--
ALTER TABLE `delivery_review`
  ADD CONSTRAINT `delivery_review_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `delivery_review_ibfk_2` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `equipment_recipe`
--
ALTER TABLE `equipment_recipe`
  ADD CONSTRAINT `equipment_recipe_ibfk_1` FOREIGN KEY (`EquipmentName`) REFERENCES `equipment` (`EquipmentName`),
  ADD CONSTRAINT `equipment_recipe_ibfk_2` FOREIGN KEY (`MealID`) REFERENCES `recipe` (`MealID`);

--
-- Constraints for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD CONSTRAINT `ingredients_ibfk_1` FOREIGN KEY (`MealID`) REFERENCES `recipe` (`MealID`),
  ADD CONSTRAINT `ingredients_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `rawingredients` (`ItemID`);

--
-- Constraints for table `lesson_progress`
--
ALTER TABLE `lesson_progress`
  ADD CONSTRAINT `lesson_progress_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`),
  ADD CONSTRAINT `lesson_progress_ibfk_2` FOREIGN KEY (`CourseName`) REFERENCES `cooking_lessons` (`CourseName`);

--
-- Constraints for table `lesson_progress_recipe`
--
ALTER TABLE `lesson_progress_recipe`
  ADD CONSTRAINT `lesson_progress_recipe_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`),
  ADD CONSTRAINT `lesson_progress_recipe_ibfk_2` FOREIGN KEY (`CourseName`) REFERENCES `cooking_lessons` (`CourseName`),
  ADD CONSTRAINT `lesson_progress_recipe_ibfk_3` FOREIGN KEY (`MealID`) REFERENCES `recipe` (`MealID`);

--
-- Constraints for table `lesson_recipe`
--
ALTER TABLE `lesson_recipe`
  ADD CONSTRAINT `lesson_recipe_ibfk_1` FOREIGN KEY (`CourseName`) REFERENCES `cooking_lessons` (`CourseName`),
  ADD CONSTRAINT `lesson_recipe_ibfk_2` FOREIGN KEY (`MealID`) REFERENCES `recipe` (`MealID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `order_raw`
--
ALTER TABLE `order_raw`
  ADD CONSTRAINT `order_raw_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `order_raw_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `rawingredients` (`ItemID`);

--
-- Constraints for table `order_ready_meals`
--
ALTER TABLE `order_ready_meals`
  ADD CONSTRAINT `orm_fk1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `orm_fk2` FOREIGN KEY (`readyMealID`) REFERENCES `readymeals` (`readyMealID`);

--
-- Constraints for table `order_recipe`
--
ALTER TABLE `order_recipe`
  ADD CONSTRAINT `order_recipe_ibfk_1` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `order_recipe_ibfk_2` FOREIGN KEY (`MealID`) REFERENCES `recipe` (`MealID`);

--
-- Constraints for table `readymeals`
--
ALTER TABLE `readymeals`
  ADD CONSTRAINT `restaurantFk` FOREIGN KEY (`restaurantID`) REFERENCES `restaurants` (`restaurantID`);

--
-- Constraints for table `recipe`
--
ALTER TABLE `recipe`
  ADD CONSTRAINT `recipe_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `recipe_submission`
--
ALTER TABLE `recipe_submission`
  ADD CONSTRAINT `recipe_submission_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`);

--
-- Constraints for table `review_food`
--
ALTER TABLE `review_food`
  ADD CONSTRAINT `review_food_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`),
  ADD CONSTRAINT `review_food_ibfk_2` FOREIGN KEY (`MealID`) REFERENCES `recipe` (`MealID`);

--
-- Constraints for table `users_food_review`
--
ALTER TABLE `users_food_review`
  ADD CONSTRAINT `users_food_review_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`),
  ADD CONSTRAINT `users_food_review_ibfk_2` FOREIGN KEY (`ReviewID`) REFERENCES `review_food` (`ReviewID`);

--
-- Constraints for table `user_ingredients`
--
ALTER TABLE `user_ingredients`
  ADD CONSTRAINT `user_ingredients_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `users` (`Email`),
  ADD CONSTRAINT `user_ingredients_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `rawingredients` (`ItemID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
