SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `bravomedia_test`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `productID` int(16) NOT NULL AUTO_INCREMENT COMMENT 'unique product key',
  `name` varchar(128) NOT NULL COMMENT 'the name of the product',
  `image` varchar(128) NOT NULL COMMENT 'image filename',
  `price` float NOT NULL COMMENT 'product price',
  `createdTime` datetime NOT NULL COMMENT 'the date and time the product was created',
  PRIMARY KEY (`productID`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumpning av Data i tabell `products`
--

INSERT INTO `products` (`productID`, `name`, `image`, `price`, `createdTime`) VALUES
(1, 'Nigel Foster Explorer Red', 'lifewest.png', 245, '2016-01-25 12:00:15'),
(2, 'Nigel Foster Explorer 2 Red', 'lifewest.png', 295, '2016-01-26 10:10:30'),
(3, 'Nigel Foster Explorer 3 Red', 'lifewest.png', 315, '2016-02-02 18:20:35'),
(4, 'Nigel Foster Explorer 4 Red', 'lifewest.png', 335, '2016-01-05 08:10:10'),
(5, 'Nigel Foster Explorer Denim', 'lifewest_denim.png', 245, '2016-03-25 12:00:15'),
(6, 'Nigel Foster Explorer 2 Denim', 'lifewest_denim.png', 295, '2016-03-26 10:10:30'),
(7, 'Nigel Foster Explorer 3 Denim', 'lifewest_denim.png', 315, '2016-04-02 18:20:35'),
(8, 'Nigel Foster Explorer 4 Denim', 'lifewest_denim.png', 335, '2016-03-05 08:10:10'),
(9, 'Nigel Foster Explorer Mango', 'lifewest_mango.png', 245, '2016-01-15 12:00:15'),
(10, 'Nigel Foster Explorer 2 Mango', 'lifewest_mango.png', 295, '2016-01-16 10:10:30'),
(11, 'Nigel Foster Explorer 3 Mango', 'lifewest_mango.png', 315, '2016-02-22 18:20:35'),
(12, 'Nigel Foster Explorer 4 Mango', 'lifewest_mango.png', 335, '2016-01-15 08:10:10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
