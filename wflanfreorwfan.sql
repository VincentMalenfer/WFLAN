-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 09 Février 2017 à 12:49
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `idevent` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `desc` varchar(45) DEFAULT NULL,
  `location_idlocation` int(11) NOT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `event_has_games`
--

CREATE TABLE `event_has_games` (
  `event_idevent` int(11) NOT NULL,
  `games_idgames` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `event_has_users`
--

CREATE TABLE `event_has_users` (
  `event_idevent` int(11) NOT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `idgames` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `games_has_articles`
--

CREATE TABLE `games_has_articles` (
  `games_idgames` int(11) NOT NULL,
  `articles_idarticles` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

CREATE TABLE `token` (
  `token_temp` varchar(45) DEFAULT NULL,
  `users_idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `phonenumber` varchar(12) NOT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`idusers`, `firstname`, `lastname`, `nickname`, `email`, `password`, `birthdate`, `phonenumber`, `status`) VALUES
(6, 'Romain', 'PARIS', '2_33_10', 'paris-romain@live.fr', '$2y$10$QbquAno2Bb0yigoj/TzNbekZIGTxUViPDturpK77Vj0FVVsdDxCum', '1991-04-20', '0660282324', NULL),
(7, 'Sonny', 'Cabrisseau', 'sonny', 'sonny.cabrisseau@gmail.com', '$2y$10$Xf957tlfrjBypXAKYJIFker9NuHCv.i9r.g6NGO2Dkx3cbnudfTw2', '1995-02-14', '0663950466', NULL),
(15, 'Amandine', 'Marchand', '789456', 'amandinealice@hotmail.fr', '$2y$10$tvgGJAczZSN/lueBgjdg9epK1tcu5h9E8pJzHCz3y/2MEJatPAbiC', '2017-02-01', '78994563210', NULL),
(16, 'Romain', 'PARIS', 'azerty', 'paris-romain@live.fr', '$2y$10$AabyYVWNal/.f6ATuKpwHulezWAQudfEz3mzqWad9zMZ493znQ1UW', '2017-02-01', '660282324', NULL),
(17, 'Romain', 'PARIS', 'azerty', 'paris-romain@live.fr', '$2y$10$0CgCLzuBs94cS6qiDmvc5.O/xkOPCIhwGbXbKUb//HvrD9xqLMroG', '2017-02-01', '660282324', NULL);

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
  MODIFY `idarticles` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `idlocation` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
