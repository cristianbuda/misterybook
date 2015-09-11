-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2015 at 12:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `misterybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `language_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `book_genres`
--

CREATE TABLE IF NOT EXISTS `book_genres` (
  `book_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_paragraphs`
--

CREATE TABLE IF NOT EXISTS `book_paragraphs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paragraph_no` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Crime'),
(2, 'Mystery'),
(3, 'Thriller'),
(4, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE IF NOT EXISTS `ideas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `language_id` int(11) NOT NULL,
  `length` int(11) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`id`, `user_id`, `title`, `description`, `language_id`, `length`, `rating`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nulla nulla, finibus in mattis vitae, cursus eget nibh. Ut suscipit elit mi, ut vulputate enim semper quis. In metus sem, aliquet ut neque in, iaculis placerat nisi. Ut vulputate urna quis mauris elementum, dapibus molestie nibh eleifend. Quisque gravida, nulla vitae laoreet laoreet, ligula turpis hendrerit quam, sit amet pulvinar felis neque vel velit. Pellentesque blandit tempus enim, non euismod enim imperdiet sed. Nullam id sollicitudin sem. Aenean vitae mollis quam, non porta enim. Integer malesuada augue in lectus pulvinar posuere. In molestie lobortis quam, vitae iaculis enim tincidunt id. Donec molestie arcu enim, quis hendrerit eros viverra quis.', 2, 10, 0),
(2, 1, 'Etiam sit amet volutpat libero', 'Etiam sit amet volutpat libero. Ut cursus mauris leo. Fusce eros metus, lobortis id lobortis id, placerat et turpis. Ut volutpat lobortis velit quis aliquet. Phasellus ligula sem, euismod eget venenatis non, porta a est. Donec sit amet metus feugiat, tincidunt velit a, maximus ligula. Maecenas id lorem purus', 1, 8, 0),
(3, 1, 'A new idea', 'Description text', 5, 10, 0),
(4, 1, 'Another new idea', 'Description text', 6, 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `idea_genres`
--

CREATE TABLE IF NOT EXISTS `idea_genres` (
  `idea_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `idea_genres`
--

INSERT INTO `idea_genres` (`idea_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `idea_ratings`
--

CREATE TABLE IF NOT EXISTS `idea_ratings` (
  `idea_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'Romanian'),
(2, 'English'),
(3, 'Hungarian'),
(4, 'Polish'),
(5, 'Italian'),
(6, 'French');

-- --------------------------------------------------------

--
-- Table structure for table `paragraph_proposals`
--

CREATE TABLE IF NOT EXISTS `paragraph_proposals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `paragraph_no` int(11) NOT NULL,
  `content` text NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `paragraph_ratings`
--

CREATE TABLE IF NOT EXISTS `paragraph_ratings` (
  `paragraph_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `setting_name` varchar(128) NOT NULL,
  `setting_value` varchar(128) NOT NULL,
  PRIMARY KEY (`setting_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `title_proposals`
--

CREATE TABLE IF NOT EXISTS `title_proposals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `title_ratings`
--

CREATE TABLE IF NOT EXISTS `title_ratings` (
  `title_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `bio` text NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `bio`, `password`) VALUES
(1, 'Kadar Imola', 'kadarimola@yahoo.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam at maximus odio. Phasellus eget ipsum at turpis mollis lacinia quis eget nunc', '7685f569a20fa75fca1c8218c7fe13b8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
