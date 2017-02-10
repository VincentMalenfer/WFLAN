-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 10 Février 2017 à 10:20
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wflanfreorwfan`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `idarticles` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `text` longtext,
  `pictures` varchar(255) DEFAULT NULL,
  `publishdate` date DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL,
  `actif` tinyint(1) DEFAULT NULL,
  `description_pictures` varchar(30) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`idarticles`, `title`, `text`, `pictures`, `publishdate`, `author`, `users_idusers`, `actif`, `description_pictures`, `description`) VALUES
(1, 'Svfsd', 'gerqg', '', '2017-02-15', 'frgrze', 1, 1, NULL, NULL),
(2, 'Svfsd', 'gerqg', '', '2017-02-15', 'frgrze', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `idevent` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `location_idlocation` int(11) NOT NULL,
  `users_idusers` int(11) NOT NULL,
  `url` varchar(500) NOT NULL,
  `class` varchar(500) NOT NULL,
  `start` bigint(20) NOT NULL,
  `end` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`idevent`, `title`, `location`, `desc`, `location_idlocation`, `users_idusers`, `url`, `class`, `start`, `end`) VALUES
(296, 'Fin de Webforce', 'chez moi', 'sextape', 1, 1, 'raf', 'event-single', 1487089800000, 1487089801000),
(299, 'Machin bidule', 'A droite', 'Blablabla', 1, 1, 'www.google.fr', 'event-single', 1486226793000, 1486233993000),
(300, 'Le calendrier marche enfin', 'Chez Thibaud', 'Une fete avec du champagne et des clopes', 1, 1, 'www.google.com', 'event-single', 1487484098000, 1487527298000);

-- --------------------------------------------------------

--
-- Structure de la table `event_has_games`
--

CREATE TABLE `event_has_games` (
  `event_idevent` int(11) NOT NULL,
  `games_idgames` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `event_has_users`
--

CREATE TABLE `event_has_users` (
  `event_idevent` int(11) NOT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `idgames` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `games_has_articles`
--

CREATE TABLE `games_has_articles` (
  `games_idgames` int(11) NOT NULL,
  `articles_idarticles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `location`
--

CREATE TABLE `location` (
  `idlocation` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `adress` varchar(45) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `log` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `location`
--

INSERT INTO `location` (`idlocation`, `name`, `adress`, `lat`, `log`) VALUES
(1, 'chez moi', 'icila', 10.000000, 20.000000);

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

CREATE TABLE `token` (
  `id_token` varchar(45) NOT NULL,
  `token_temp` varchar(45) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `nickname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `firstname`, `lastname`, `nickname`, `email`, `password`, `birthdate`, `status`) VALUES
(1, 'Mike', 'Sylvestre', 'LeBoss', NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idarticles`),
  ADD KEY `fk_articles_users1_idx` (`users_idusers`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`),
  ADD KEY `fk_event_location1_idx` (`location_idlocation`),
  ADD KEY `fk_event_users1_idx` (`users_idusers`);

--
-- Index pour la table `event_has_games`
--
ALTER TABLE `event_has_games`
  ADD PRIMARY KEY (`event_idevent`,`games_idgames`),
  ADD KEY `fk_event_has_games_games1_idx` (`games_idgames`),
  ADD KEY `fk_event_has_games_event1_idx` (`event_idevent`);

--
-- Index pour la table `event_has_users`
--
ALTER TABLE `event_has_users`
  ADD PRIMARY KEY (`event_idevent`,`users_idusers`),
  ADD KEY `fk_event_has_users_users1_idx` (`users_idusers`),
  ADD KEY `fk_event_has_users_event_idx` (`event_idevent`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`idgames`);

--
-- Index pour la table `games_has_articles`
--
ALTER TABLE `games_has_articles`
  ADD PRIMARY KEY (`games_idgames`,`articles_idarticles`),
  ADD KEY `fk_games_has_articles_articles1_idx` (`articles_idarticles`),
  ADD KEY `fk_games_has_articles_games1_idx` (`games_idgames`);

--
-- Index pour la table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`idlocation`);

--
-- Index pour la table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`),
  ADD KEY `fk_token_users1_idx` (`users_idusers`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `idarticles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;
--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `idgames` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `games_has_articles`
--
ALTER TABLE `games_has_articles`
  MODIFY `games_idgames` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `location`
--
ALTER TABLE `location`
  MODIFY `idlocation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `fk_articles_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `fk_event_location1` FOREIGN KEY (`location_idlocation`) REFERENCES `location` (`idlocation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `event_has_games`
--
ALTER TABLE `event_has_games`
  ADD CONSTRAINT `fk_event_has_games_event1` FOREIGN KEY (`event_idevent`) REFERENCES `event` (`idevent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_has_games_games1` FOREIGN KEY (`games_idgames`) REFERENCES `games` (`idgames`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `event_has_users`
--
ALTER TABLE `event_has_users`
  ADD CONSTRAINT `fk_event_has_users_event` FOREIGN KEY (`event_idevent`) REFERENCES `event` (`idevent`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_has_users_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `games_has_articles`
--
ALTER TABLE `games_has_articles`
  ADD CONSTRAINT `fk_games_has_articles_articles1` FOREIGN KEY (`articles_idarticles`) REFERENCES `articles` (`idarticles`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_games_has_articles_games1` FOREIGN KEY (`games_idgames`) REFERENCES `games` (`idgames`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_token_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
