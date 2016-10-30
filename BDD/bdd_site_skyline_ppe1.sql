-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 20 Novembre 2015 à 10:14
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdd_site_skyline_ppe1`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `contenu` text,
  `id_auteur` int(11) DEFAULT NULL,
  `id_theme` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `date`, `contenu`, `id_auteur`, `id_theme`) VALUES
(1, 'Welcome to SkYLINE : Votre réseau de carnet de voyages', '2015-11-20', 'Bonjour ici Marth l''administrateur de Skyline, \r\n\r\nBienvenue sur le réseau social qui vous permettra de faire part de vos voyages à vos amis. J''espère qu''il vous incitera à aller vers d''autres horizons. \r\nVous pourez consulter les articles auquels vous allez souscrire selon un thème ou une loccalisation. Mais également partager vos contenus avec les contacts que vous aurez ajouté. \r\nCe sont par ailleurs des administrateurs qui vous partageront des cadres uniques et insoupçonnés. \r\n\r\nNotre monde regorge de merveilles dont nous n''ignorons l''existance, partageons-les. Amusez vous bien !', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
`id` int(11) NOT NULL,
  `pseudo` varchar(25) DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `mdp` varchar(25) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id`, `pseudo`, `nom`, `prenom`, `mdp`, `dateNaissance`, `qualification`) VALUES
(1, 'Marth', 'Delage', 'Romain', 'RODELAMAsky7', '1996-03-07', 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `continent`
--

CREATE TABLE IF NOT EXISTS `continent` (
`id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
`id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `se_situe_dans`
--

CREATE TABLE IF NOT EXISTS `se_situe_dans` (
  `id` int(11) NOT NULL,
  `id_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE IF NOT EXISTS `theme` (
`id` int(11) NOT NULL,
  `libelle` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `theme`
--

INSERT INTO `theme` (`id`, `libelle`) VALUES
(1, 'general'),
(2, 'nature sauvage'),
(3, 'villes atypiques'),
(4, 'specialités culinaires'),
(5, 'monuments historiques');

-- --------------------------------------------------------

--
-- Structure de la table `traite`
--

CREATE TABLE IF NOT EXISTS `traite` (
  `id` int(11) NOT NULL,
  `id_pays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`), ADD KEY `FK_article_id_auteur` (`id_auteur`), ADD KEY `FK_article_id_theme` (`id_theme`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `continent`
--
ALTER TABLE `continent`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `se_situe_dans`
--
ALTER TABLE `se_situe_dans`
 ADD PRIMARY KEY (`id`,`id_pays`), ADD KEY `FK_se_situe_dans_id_pays` (`id_pays`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `traite`
--
ALTER TABLE `traite`
 ADD PRIMARY KEY (`id`,`id_pays`), ADD KEY `FK_traite_id_pays` (`id_pays`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `continent`
--
ALTER TABLE `continent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
ADD CONSTRAINT `FK_article_id_auteur` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id`),
ADD CONSTRAINT `FK_article_id_theme` FOREIGN KEY (`id_theme`) REFERENCES `theme` (`id`);

--
-- Contraintes pour la table `se_situe_dans`
--
ALTER TABLE `se_situe_dans`
ADD CONSTRAINT `FK_se_situe_dans_id` FOREIGN KEY (`id`) REFERENCES `continent` (`id`),
ADD CONSTRAINT `FK_se_situe_dans_id_pays` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id`);

--
-- Contraintes pour la table `traite`
--
ALTER TABLE `traite`
ADD CONSTRAINT `FK_traite_id` FOREIGN KEY (`id`) REFERENCES `article` (`id`),
ADD CONSTRAINT `FK_traite_id_pays` FOREIGN KEY (`id_pays`) REFERENCES `pays` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
