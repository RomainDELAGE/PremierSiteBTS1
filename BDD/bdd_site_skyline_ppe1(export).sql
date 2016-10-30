-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 05 Janvier 2016 à 14:40
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
  `photo` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `id_auteur` int(11) DEFAULT NULL,
  `id_theme` int(11) DEFAULT NULL,
  `id_continent` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `date`, `contenu`, `photo`, `id_auteur`, `id_theme`, `id_continent`) VALUES
(1, 'Welcome to SkYLINE : Votre réseau de carnet de voyages', '2015-11-20', 'Bonjour ici Marth l''administrateur de Skyline,</br> Bienvenue sur le réseau social qui vous permettra de faire part de vos voyages à vos amis. J''espère qu''il vous incitera à aller vers d''autres horizons.</br>Vous pourez consulter les articles auquels vous allez souscrire selon un thème ou une loccalisation. Mais également partager vos contenus avec les contacts que vous aurez ajouté. Ce sont par ailleurs des administrateurs qui vous partageront des cadres uniques et insoupçonnés.</br>Notre monde regorge de merveilles dont nous n''ignorons l''existance, partageons-les. Amusez vous bien!', 'toronto-skyline.jpg', 1, 1, 0),
(2, 'mon beau sapin', '2015-12-01', 'coucoucoucou', NULL, 1, 2, 0),
(3, 'le BTS SIO est un voyage !', '2015-12-02', 'plein de surprises', NULL, 1, 1, 0),
(4, 'Un plat russe extrêmement gouteux : la goulache  ', '2015-12-02', 'découvrez la goulache au boeuf', NULL, 1, 4, 3),
(5, 'Découvrez notre dossier sur l''île de la Réunion', '2015-12-28', 'blalalalal\r\n\r\n\r\nalala', 'panorama-réunion.jpg', 1, 2, 3),
(6, 'Retrouvez notre dossier sur les plus belles viles de chine !', '2015-12-31', ' C’est le « Journal du Peuple » qui a publié en Chine le classement des dix meilleurs villes où vivre lorsque l’on est un expatrié. L’enquête a été menée auprès de 175 000 étrangers installés dans le pays.</br><ul>  <li> N°10 – Qingdao  qingdao  Population : 8 175 000 habitants PIP par habitant : 65 827 CNY (8 242 euros)  Les plus : Cadre de vie Les moins : Administration, Education, Ouverture sur le monde extérieur</li></br> <li> N°9 – Xiamen  xiamen  Population : 5 144 000 PIB par habitant : 77 392 CNY (9 690 euros)  Les plus : Cadre de vie, Propice à la création d’entreprise Les moins : Salaire moyen des étrangers  </li></br> <li>N°8 – Tianjin  tianjin  Population : 12 938 000 PIB par habitant : 84 337 CNY (10 560 euros)  Les plus : Travail, Services de santé Les moins : Politique de création d’entreprise  </li></br> <li>N°7 – Nanjing  nanjing  Population : 8 161 000 PIB par habitant : 83 036 CNY (10 397 euros)  Les plus : Cadre de vie Les moins : Administration, Salaire moyen des étrangers  </li></br> <li>N°6 – Hangzhou  hangzhou  Population : 8 700 000 PIB par habitant : 80 000 CNY (10 017 euros)  Les plus : Cadre de vie (végétation abondante) Les moins : Cadre professionnel, Salaire moyen  </li></br> <li>N°5 – Kunming  kunming  Population : 6 432 000 PIB par habitant : 28 894 CNY (3 618 euros)  Les plus : Administration, Cadre de vie Les moins : Cadre professionnel, Soins de santé, Education  </li></br> <li>N°4 – Suzhou  suzhou  Population : 10 465 000 PIB par habitant : 102 129 CNY (12 788 euros)  Les plus : Environnement de travail, Propice à la création d’entreprises Les moins : Administration  </li></br> <li>N°3 – Shenzhen  shenzhen  Population : 10 357 000 PIB par habitant : 110 421 CNY (13 826 euros)  Les plus : Environnement de travail, Hauts salaires, Propice à la création d’entreprises Les moins : Cadre de vie, Soins de santé, Education  </li></br> <li>N°2 – Pékin  pekin  Population : 20 693 000 PIB par habitant : 80 394 CNY (10 066 euros)  Les plus : Administration, Environnement politique, Soins de santé, Education Les moins : Cadre de vie, Environnement de travail, Circulation dans la ville  </li></br> <li>N°1 – Shanghai  shanghai  Population : 23 019 000 PIB par habitant : 82 560 CNY (10 337 euros)  Les plus : Ville cosmopolite, Culture, Soins de santé, Education Les moins : Cadre de vie, Administration </li> </ul></br>Quel ville vous tente le plus ? Prêts à faire vos valises et venir vous installer en Chine ? ', 'ville-chine.jpg', 1, 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `continent`
--

INSERT INTO `continent` (`id`, `nom`) VALUES
(1, 'les pays asiatiques'),
(2, 'les pays d''Afrique'),
(3, 'l''Amerique du Nord'),
(4, 'l''Amerique du sud'),
(5, 'l''Europe');

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
-- Index pour la table `theme`
--
ALTER TABLE `theme`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `continent`
--
ALTER TABLE `continent`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
