-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 08 Avril 2016 à 13:23
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `1a_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet1a_categories`
--

CREATE TABLE IF NOT EXISTS `projet1a_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cat_descr` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet1a_comments`
--

CREATE TABLE IF NOT EXISTS `projet1a_comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clé primaire',
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date du commentaire',
  `comment_content` text NOT NULL COMMENT 'Texte du commentaire',
  `comment_post_ID` int(11) NOT NULL COMMENT 'Clé vers le post',
  `comment_author` int(11) NOT NULL COMMENT 'Clé vers l''auteur',
  PRIMARY KEY (`comment_id`),
  KEY `fk_blog_comments_blog_posts1_idx` (`comment_post_ID`),
  KEY `fk_blog_comments_blog_users1_idx` (`comment_author`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet1a_contacts`
--

CREATE TABLE IF NOT EXISTS `projet1a_contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_firstname` varchar(45) DEFAULT NULL,
  `contact_lastname` varchar(45) DEFAULT NULL,
  `contact_company` varchar(45) DEFAULT NULL,
  `contact_mail` varchar(100) DEFAULT NULL,
  `contact_phone` varchar(15) DEFAULT NULL,
  `contact_message` text,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet1a_pictures`
--

CREATE TABLE IF NOT EXISTS `projet1a_pictures` (
  `pict_id` int(11) NOT NULL AUTO_INCREMENT,
  `pict_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pict_url` varchar(255) NOT NULL,
  `pict_descr` varchar(45) NOT NULL,
  `blog_posts_post_ID` int(11) NOT NULL,
  PRIMARY KEY (`pict_id`),
  KEY `fk_blog_pictures_blog_posts1_idx` (`blog_posts_post_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet1a_posts`
--

CREATE TABLE IF NOT EXISTS `projet1a_posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clé primaire',
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Date du post',
  `post_title` text NOT NULL COMMENT 'Titre du post',
  `post_content` longtext NOT NULL COMMENT 'Contenu du post',
  `post_author` int(11) NOT NULL COMMENT 'Clé vers l''auteur',
  `post_category` int(11) NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `fk_blog_posts_blog_users_idx` (`post_author`),
  KEY `fk_blog_posts_blog_categories1_idx` (`post_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `projet1a_users`
--

CREATE TABLE IF NOT EXISTS `projet1a_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clé primaire',
  `user_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_login` varchar(20) NOT NULL COMMENT 'Login',
  `user_password` varchar(32) NOT NULL COMMENT 'Password',
  `user_email` varchar(100) NOT NULL COMMENT 'Email',
  `display_name` varchar(255) NOT NULL COMMENT 'Nom affiché',
  `user_photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `projet1a_comments`
--
ALTER TABLE `projet1a_comments`
  ADD CONSTRAINT `fk_blog_comments_blog_posts1` FOREIGN KEY (`comment_post_ID`) REFERENCES `projet1a_posts` (`post_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_blog_comments_blog_users1` FOREIGN KEY (`comment_author`) REFERENCES `projet1a_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `projet1a_pictures`
--
ALTER TABLE `projet1a_pictures`
  ADD CONSTRAINT `fk_blog_pictures_blog_posts1` FOREIGN KEY (`blog_posts_post_ID`) REFERENCES `projet1a_posts` (`post_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `projet1a_posts`
--
ALTER TABLE `projet1a_posts`
  ADD CONSTRAINT `fk_blog_posts_blog_users` FOREIGN KEY (`post_author`) REFERENCES `projet1a_users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_blog_posts_blog_categories1` FOREIGN KEY (`post_category`) REFERENCES `projet1a_categories` (`cat_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
