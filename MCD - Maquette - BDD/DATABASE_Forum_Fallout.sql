-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour forum
CREATE DATABASE IF NOT EXISTS `forum` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `forum`;

-- Listage de la structure de la table forum. categorie
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomcategorie` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Listage des données de la table forum.categorie : ~4 rows (environ)
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` (`id_categorie`, `nomcategorie`, `description`) VALUES
	(1, 'Quête Principal', 'Bloqué dans votre avancé de la quête Principal ? Cette catégorie est faites pour vous.'),
	(2, 'Quête Secondaire', 'Bloqué dans votre avancé de vos quête Secondaire ? Vous êtes fait pour cette catégorie.'),
	(3, 'Ressources', 'Besoin de farmer des ressources d\'artisanat comme un boss ? Tout se passse ici jeune éboueur des Wastlands'),
	(4, 'Equipement ', 'La forge fait le forgeron, mais c\'est en forgeant qu\'on le deviens.'),
	(5, 'Bug', 'It\'s simply work');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;

-- Listage de la structure de la table forum. message
CREATE TABLE IF NOT EXISTS `message` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` varchar(50) DEFAULT NULL,
  `datepublication` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  PRIMARY KEY (`id_message`),
  KEY `FK_message_utilisateur` (`user_id`),
  KEY `FK_message_topic` (`topic_id`),
  CONSTRAINT `FK_message_topic` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`id_topic`),
  CONSTRAINT `FK_message_utilisateur` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table forum.message : ~0 rows (environ)
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Listage de la structure de la table forum. topic
CREATE TABLE IF NOT EXISTS `topic` (
  `id_topic` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` varchar(50) DEFAULT NULL,
  `statut` tinyint(1) DEFAULT NULL,
  `datecreation` datetime DEFAULT CURRENT_TIMESTAMP,
  `contenu` text,
  `categorie_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_topic`),
  KEY `FK_topic_categorie` (`categorie_id`),
  KEY `FK_topic_utilisateur` (`user_id`),
  CONSTRAINT `FK_topic_categorie` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id_categorie`),
  CONSTRAINT `FK_topic_utilisateur` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Listage des données de la table forum.topic : ~0 rows (environ)
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;

-- Listage de la structure de la table forum. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `mdp` varchar(10) DEFAULT NULL,
  `pseudo` varchar(18) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `dateinscription` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Listage des données de la table forum.utilisateur : ~1 rows (environ)
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` (`id_user`, `email`, `role`, `mdp`, `pseudo`, `avatar`, `dateinscription`) VALUES
	(1, 'harlem.sawn@gmail.com', 'Admin', 'pmd945586@', 'User_test', 'https://staticdelivery.nexusmods.com/mods/1151/images/thumbnails/44148/44148-1585561295-399041543.png', '2020-10-08 16:31:30');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
