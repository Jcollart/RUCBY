-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 15 Mai 2019 à 15:45
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `futsal`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `id_news` int(11) NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `appartenir`
--

INSERT INTO `appartenir` (`id_news`, `id_image`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6);

-- --------------------------------------------------------

--
-- Structure de la table `correspond`
--

CREATE TABLE `correspond` (
  `id_photo` int(11) NOT NULL,
  `id_galerie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `correspond`
--

INSERT INTO `correspond` (`id_photo`, `id_galerie`) VALUES
(1, 1),
(2, 1),
(3, 1),
(9, 1),
(3, 2),
(9, 2),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3);

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `id_galerie` int(11) NOT NULL,
  `nom_galerie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `galerie`
--

INSERT INTO `galerie` (`id_galerie`, `nom_galerie`) VALUES
(1, 'Tournois'),
(2, 'Matchs'),
(3, 'Soirées');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `nom_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id_image`, `nom_image`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `titre_news` varchar(255) NOT NULL,
  `date_news` date NOT NULL,
  `description_news` text NOT NULL,
  `redacteur_news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_news`, `titre_news`, `date_news`, `description_news`, `redacteur_news`) VALUES
(1, 'titre1', '2019-05-10', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.\r\n\r\nem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.', 'toto'),
(2, 'titre2', '2019-05-09', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.', 'tutu'),
(3, 'titre 3', '2019-05-09', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.\r\n\r\nem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.', 'tete'),
(4, 'titre4', '2019-05-08', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.', 'tete'),
(5, 'titre5', '2019-05-10', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.', 'toto'),
(6, 'titre6', '2019-05-06', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis, sapiente. Blanditiis, numquam\r\n                cupiditate! Magnam inventore\r\n                praesentium quibusdam. Voluptatum tempore suscipit cumque doloremque deserunt possimus vero nesciunt\r\n                incidunt voluptates rem. Veritatis?<br>\r\n                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum repudiandae exercitationem veniam non?\r\n                Vitae itaque doloremque, sunt sint nam sapiente optio, facilis dolorem ab quam aliquid id explicabo\r\n                earum non.', 'titi');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `nom_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`id_photo`, `nom_photo`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.jpg'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.jpg'),
(9, '9.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`id_news`,`id_image`),
  ADD KEY `appartenir_image0_FK` (`id_image`);

--
-- Index pour la table `correspond`
--
ALTER TABLE `correspond`
  ADD PRIMARY KEY (`id_photo`,`id_galerie`),
  ADD KEY `correspond_galerie0_FK` (`id_galerie`);

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`id_galerie`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `id_galerie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `appartenir_image0_FK` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`),
  ADD CONSTRAINT `appartenir_news_FK` FOREIGN KEY (`id_news`) REFERENCES `news` (`id_news`);

--
-- Contraintes pour la table `correspond`
--
ALTER TABLE `correspond`
  ADD CONSTRAINT `correspond_galerie0_FK` FOREIGN KEY (`id_galerie`) REFERENCES `galerie` (`id_galerie`),
  ADD CONSTRAINT `correspond_photo_FK` FOREIGN KEY (`id_photo`) REFERENCES `photo` (`id_photo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
