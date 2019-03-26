-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 25 mars 2019 à 14:09
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smartstart`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `id_application` int(11) NOT NULL AUTO_INCREMENT,
  `id_opportunity` int(11) DEFAULT NULL,
  `id_freelancer` int(11) DEFAULT NULL,
  `state` varchar(30) NOT NULL,
  PRIMARY KEY (`id_application`),
  KEY `id_opportunity` (`id_opportunity`),
  KEY `id_freelancer` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `blogposts`
--

DROP TABLE IF EXISTS `blogposts`;
CREATE TABLE IF NOT EXISTS `blogposts` (
  `post_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `Author_id` int(11) DEFAULT NULL,
  `post_date` date NOT NULL,
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8_bin NOT NULL,
  `post_type` varchar(100) COLLATE utf8_bin NOT NULL,
  `post_comment_count` int(11) DEFAULT NULL,
  `article_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_content` longtext COLLATE utf8_bin,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_likes_count` int(11) DEFAULT NULL,
  PRIMARY KEY (`post_ID`),
  KEY `Author_id` (`Author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `blogposts`
--

INSERT INTO `blogposts` (`post_ID`, `Author_id`, `post_date`, `post_content`, `post_status`, `post_type`, `post_comment_count`, `article_title`, `article_content`, `image`, `post_likes_count`) VALUES
(34, 9, '2019-03-13', 'Bijor', 'draft', 'InstructionalPost', 1, 'Bijor', 'Bijor', '73eda3d94a66348527982add02fd9c68.jpeg', 11),
(35, 9, '2019-03-14', 'hahahahah', 'draft', 'InstructionalPost', 1, 'hahhhahah', 'List-based media object\r\nCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.\r\n64x64\r\nList-based media object\r\nCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.\r\n64x64\r\nList-based media object\r\nCras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', '35c439af2a6072150c2d0080f5bddd3c.png', 36),
(36, 9, '2019-03-14', 'hahahahah', 'draft', 'MediaPost', 0, 'hahhhahah', 'hahahahah', '420f30eadcf1d90372683cdb4a8c5718.jpeg', 0),
(37, 9, '2019-03-14', 'hahahahah', 'draft', 'MediaPost', 6, 'hahhhahah', 'hahahahah', '46d994f497b55b9730e5ced44661a4f5.jpeg', 0),
(39, 9, '2019-03-15', 's', 'draft', 'Entertaining', 0, 's', 's', '542b445ede6984b36bb4389383b45a01.png', 11),
(57, 9, '2019-03-23', 'lol', 'draft', 'PersonalSpotlightPost', 0, 'll', '<p><img alt=\"broken heart\" src=\"http://cdn.ckeditor.com/4.11.3/full/plugins/smiley/images/broken_heart.png\" style=\"height:23px; width:23px\" title=\"broken heart\" /></p>', '4a769e799e9e06e435c19bed6f702e09.jpeg', 0),
(58, 9, '2019-03-23', 'a', 'draft', 'NewsjackingPost', 0, 'a', '<p>a</p>', '58a230e22787c22bf5fab40d3023dfa0.jpeg', 1),
(59, 9, '2019-03-23', 'aa', 'draft', 'NewsjackingPost', 0, 'a', '<p>a</p>', '19fee88af10b8ac58a7cf5dd4481378a.jpeg', 0),
(60, 9, '2019-03-23', 'a', 'draft', 'CheatSheetPost', 0, 'aa', '<p>a</p>', '0f3748f4b93ec86c1a8d5f278b95a2d7.jpeg', 0),
(61, 9, '2019-03-23', 'aa', 'draft', 'NewsjackingPost', 0, 'aaa', '<p>aa</p>', '6ae673f17fb87a4b301d5a1fdebe177d.jpeg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `certif_tests`
--

DROP TABLE IF EXISTS `certif_tests`;
CREATE TABLE IF NOT EXISTS `certif_tests` (
  `id_certif` int(11) NOT NULL AUTO_INCREMENT,
  `name_certif` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `id_freelancer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_certif`),
  KEY `id_freelancer` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment_post_ID` bigint(20) DEFAULT NULL,
  `comment_author` int(11) DEFAULT NULL,
  `comment_date` datetime DEFAULT NULL,
  `comment_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_approved` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_ID`),
  KEY `comment_author` (`comment_author`),
  KEY `comment_post_ID` (`comment_post_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_date`, `comment_content`, `comment_approved`) VALUES
(20, 34, 9, '2019-03-13 11:18:27', 'hahahaahahhahaah', NULL),
(21, 37, 9, '2019-03-14 02:32:36', 'hahahahaa', NULL),
(22, 37, 9, '2019-03-14 02:34:39', 'ahahahhaha', NULL),
(23, 37, 9, '2019-03-14 02:35:12', 'ahahahhaha', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
CREATE TABLE IF NOT EXISTS `complaints` (
  `id_complaint` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `mail_user` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `added_date` date NOT NULL,
  `id_opp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_complaint`),
  KEY `id_user` (`id_user`),
  KEY `id_opp` (`id_opp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contract`
--

DROP TABLE IF EXISTS `contract`;
CREATE TABLE IF NOT EXISTS `contract` (
  `id_contract` int(11) NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(30) DEFAULT NULL,
  `Start_date` date DEFAULT NULL,
  `finish_date` date DEFAULT NULL,
  `sum` float DEFAULT NULL,
  `id_application` int(11) DEFAULT NULL,
  `prio` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contract`),
  KEY `id_application` (`id_application`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contract`
--

INSERT INTO `contract` (`id_contract`, `payment_method`, `Start_date`, `finish_date`, `sum`, `id_application`, `prio`) VALUES
(2, 'cheque', '2018-10-05', '2018-10-05', 0, NULL, 1),
(3, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id_edu` int(11) NOT NULL AUTO_INCREMENT,
  `edu_name` varchar(100) NOT NULL,
  `id_freelancer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_edu`),
  KEY `id_freelancer` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `Rating` float NOT NULL,
  `comment` varchar(100) NOT NULL,
  `added_date` date NOT NULL,
  `id_application` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_feedback`),
  KEY `id_user` (`id_user`),
  KEY `id_application` (`id_application`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE IF NOT EXISTS `fos_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Birth_date` date DEFAULT NULL,
  `Bio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Register_Date` date DEFAULT NULL,
  `Earnings` float DEFAULT NULL,
  `Expenses` float DEFAULT NULL,
  `Budget` float DEFAULT NULL,
  `field_company` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `name`, `last_name`, `Birth_date`, `Bio`, `location`, `Register_Date`, `Earnings`, `Expenses`, `Budget`, `field_company`) VALUES
(8, 'mounir', 'mounir', 'mounir@gmail.com', 'mounir@gmail.com', 1, NULL, '$2y$13$JbXb0rewMp10hMkApHLs9ubLyxhTmFX1m0vvLVOrYqYz4I4sN0cFW', '2019-03-23 22:14:11', NULL, NULL, 'N;', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'achir', 'achir', 'Mom@gmail.com', 'mom@gmail.com', 1, NULL, '$2y$13$kMQ63yBOmL6D6dl0RJbba.xZJKhDva7CtviagaYXjOixVQo8a5BbW', '2019-03-24 16:51:23', NULL, NULL, 'N;', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'momo', 'momo', 'm@m.fr', 'm@m.fr', 1, NULL, '$2y$13$bzg0jFvlYaVMxNymahnvFesS1GanPeUFR1BQsR/h4hsi7LmGtaDi2', '2019-03-21 15:13:39', NULL, NULL, 'N;', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `has_skill`
--

DROP TABLE IF EXISTS `has_skill`;
CREATE TABLE IF NOT EXISTS `has_skill` (
  `id_freelancer` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  PRIMARY KEY (`id_freelancer`,`id_skill`),
  KEY `IDX_A5B4F4C9B0B8A547` (`id_skill`),
  KEY `IDX_A5B4F4C9E9A4513F` (`id_freelancer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `message_from` int(11) DEFAULT NULL,
  `message_to` int(11) DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `attachement` int(11) DEFAULT NULL,
  `date_message` date NOT NULL,
  `viewed` int(11) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `message_from` (`message_from`),
  KEY `message_to` (`message_to`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `needed_skills`
--

DROP TABLE IF EXISTS `needed_skills`;
CREATE TABLE IF NOT EXISTS `needed_skills` (
  `id_opp` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL,
  PRIMARY KEY (`id_opp`,`id_skill`),
  KEY `IDX_412451235D54B59F` (`id_opp`),
  KEY `IDX_41245123B0B8A547` (`id_skill`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notifiable_entity`
--

DROP TABLE IF EXISTS `notifiable_entity`;
CREATE TABLE IF NOT EXISTS `notifiable_entity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `notifiable_entity`
--

INSERT INTO `notifiable_entity` (`id`, `identifier`, `class`) VALUES
(1, '9', 'AppBundle\\Entity\\FosUser');

-- --------------------------------------------------------

--
-- Structure de la table `notifiable_notification`
--

DROP TABLE IF EXISTS `notifiable_notification`;
CREATE TABLE IF NOT EXISTS `notifiable_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification_id` int(11) DEFAULT NULL,
  `notifiable_entity_id` int(11) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_ADCFE0FAEF1A9D84` (`notification_id`),
  KEY `IDX_ADCFE0FAC3A0A4F8` (`notifiable_entity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `notifiable_notification`
--

INSERT INTO `notifiable_notification` (`id`, `notification_id`, `notifiable_entity_id`, `seen`) VALUES
(1, 2, 1, 1),
(2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `subject` varchar(4000) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(4000) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`id`, `date`, `subject`, `message`, `link`) VALUES
(1, '2019-03-21 00:00:00', 'lolol', 'lol', NULL),
(2, '2019-03-23 12:39:46', 'Hello world !', 'This a notification.', 'http://symfony.com/'),
(3, '2019-03-23 13:35:48', 'Hello world !', 'This a notification.', 'http://symfony.com/');

-- --------------------------------------------------------

--
-- Structure de la table `opportunity`
--

DROP TABLE IF EXISTS `opportunity`;
CREATE TABLE IF NOT EXISTS `opportunity` (
  `id_opp` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(50) NOT NULL,
  `job_category` varchar(50) NOT NULL,
  `job_description` varchar(50) NOT NULL,
  `Budget` float NOT NULL,
  `job_Draft` int(11) NOT NULL,
  `job_Duration` varchar(50) NOT NULL,
  `Expiry_date` date NOT NULL,
  `added_date` date NOT NULL,
  `id_entreprise` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_opp`),
  KEY `id_entreprise` (`id_entreprise`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post_like`
--

DROP TABLE IF EXISTS `post_like`;
CREATE TABLE IF NOT EXISTS `post_like` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) DEFAULT NULL,
  `Author_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_653627B8748471B8` (`Author_id`),
  KEY `IDX_653627B84B89032C` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `post_like`
--

INSERT INTO `post_like` (`id`, `post_id`, `Author_id`) VALUES
(95, 34, 8),
(104, 39, 8),
(107, 58, 9);

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id_question` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `question` varchar(50) NOT NULL,
  `description` varchar(256) NOT NULL,
  `added_date` date NOT NULL,
  `answered` date DEFAULT NULL,
  `subject` varchar(256) NOT NULL,
  `Vues` int(11) NOT NULL,
  PRIMARY KEY (`id_question`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `questions`
--

INSERT INTO `questions` (`id_question`, `id_user`, `question`, `description`, `added_date`, `answered`, `subject`, `Vues`) VALUES
(1, NULL, 'loool', 'loool', '2019-02-25', '2019-02-25', 'PHP', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reply`
--

DROP TABLE IF EXISTS `reply`;
CREATE TABLE IF NOT EXISTS `reply` (
  `id_rep` int(11) NOT NULL AUTO_INCREMENT,
  `content` longtext NOT NULL,
  `date_reply` date NOT NULL,
  `id_question` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL,
  PRIMARY KEY (`id_rep`),
  KEY `id_user` (`id_user`),
  KEY `id_question` (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reply`
--

INSERT INTO `reply` (`id_rep`, `content`, `date_reply`, `id_question`, `id_user`, `likes`, `dislikes`) VALUES
(1, 'replyman2', '2019-02-25', 1, NULL, 1, 0),
(2, 'reply2', '2019-02-25', 1, NULL, 2, 0),
(3, 'Selem', '2019-02-26', 1, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id_skill` int(11) NOT NULL AUTO_INCREMENT,
  `name_skill` varchar(60) NOT NULL,
  PRIMARY KEY (`id_skill`,`name_skill`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `suggestedopps`
--

DROP TABLE IF EXISTS `suggestedopps`;
CREATE TABLE IF NOT EXISTS `suggestedopps` (
  `freelancerId` int(11) NOT NULL,
  `opportunityId` int(11) NOT NULL,
  PRIMARY KEY (`freelancerId`,`opportunityId`),
  KEY `IDX_3777032F4DCE947A` (`freelancerId`),
  KEY `IDX_3777032FE6A900A9` (`opportunityId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `views`
--

DROP TABLE IF EXISTS `views`;
CREATE TABLE IF NOT EXISTS `views` (
  `id_view` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `view_identification` int(11) NOT NULL,
  `dateView` date NOT NULL,
  PRIMARY KEY (`id_view`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `views`
--

INSERT INTO `views` (`id_view`, `id_user`, `type`, `view_identification`, `dateView`) VALUES
(1, 2, 1, 1, '2019-02-25');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `FK_A45BDDC19B9B0E20` FOREIGN KEY (`id_opportunity`) REFERENCES `opportunity` (`id_opp`),
  ADD CONSTRAINT `FK_A45BDDC1E9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `blogposts`
--
ALTER TABLE `blogposts`
  ADD CONSTRAINT `FK_35A84671748471B8` FOREIGN KEY (`Author_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `certif_tests`
--
ALTER TABLE `certif_tests`
  ADD CONSTRAINT `FK_5431F6BFE9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962A16106556` FOREIGN KEY (`comment_post_ID`) REFERENCES `blogposts` (`post_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5F9E962A77BC80DA` FOREIGN KEY (`comment_author`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `FK_A05AAF3A5D54B59F` FOREIGN KEY (`id_opp`) REFERENCES `opportunity` (`id_opp`),
  ADD CONSTRAINT `FK_A05AAF3A6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `contract`
--
ALTER TABLE `contract`
  ADD CONSTRAINT `FK_E98F2859BC491036` FOREIGN KEY (`id_application`) REFERENCES `application` (`id_application`);

--
-- Contraintes pour la table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `FK_DB0A5ED2E9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_D22944586B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_D2294458BC491036` FOREIGN KEY (`id_application`) REFERENCES `application` (`id_application`);

--
-- Contraintes pour la table `has_skill`
--
ALTER TABLE `has_skill`
  ADD CONSTRAINT `FK_A5B4F4C9B0B8A547` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`),
  ADD CONSTRAINT `FK_A5B4F4C9E9A4513F` FOREIGN KEY (`id_freelancer`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_DB021E96108F3AA9` FOREIGN KEY (`message_from`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_DB021E963BC4A6BD` FOREIGN KEY (`message_to`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `needed_skills`
--
ALTER TABLE `needed_skills`
  ADD CONSTRAINT `FK_412451235D54B59F` FOREIGN KEY (`id_opp`) REFERENCES `opportunity` (`id_opp`),
  ADD CONSTRAINT `FK_41245123B0B8A547` FOREIGN KEY (`id_skill`) REFERENCES `skills` (`id_skill`);

--
-- Contraintes pour la table `notifiable_notification`
--
ALTER TABLE `notifiable_notification`
  ADD CONSTRAINT `FK_ADCFE0FAC3A0A4F8` FOREIGN KEY (`notifiable_entity_id`) REFERENCES `notifiable_entity` (`id`),
  ADD CONSTRAINT `FK_ADCFE0FAEF1A9D84` FOREIGN KEY (`notification_id`) REFERENCES `notification` (`id`);

--
-- Contraintes pour la table `opportunity`
--
ALTER TABLE `opportunity`
  ADD CONSTRAINT `FK_8389C3D7A8937AB7` FOREIGN KEY (`id_entreprise`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `post_like`
--
ALTER TABLE `post_like`
  ADD CONSTRAINT `FK_653627B84B89032C` FOREIGN KEY (`post_id`) REFERENCES `blogposts` (`post_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_653627B8748471B8` FOREIGN KEY (`Author_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `FK_8ADC54D56B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `FK_FDA8C6E06B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_FDA8C6E0E62CA5DB` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`);

--
-- Contraintes pour la table `suggestedopps`
--
ALTER TABLE `suggestedopps`
  ADD CONSTRAINT `FK_3777032F4DCE947A` FOREIGN KEY (`freelancerId`) REFERENCES `fos_user` (`id`),
  ADD CONSTRAINT `FK_3777032FE6A900A9` FOREIGN KEY (`opportunityId`) REFERENCES `opportunity` (`id_opp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
