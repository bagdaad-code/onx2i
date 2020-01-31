-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 30 Janvier 2020 à 8h30
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


--
-- Base de données :  `on2ix`
--

-- --------------------------------------------------------

--
-- Structure de la table `bijoux`
--
CREATE TABLE `bijoux` (
	`id` int(11) NOT NULL,
	`titre` varchar(255)  NOT NULL,
	`popularite` int(1) DEFAULT 0,
	`prix` float(20) NOT NULL,
	`poids` float(20) NOT NULL,
	`alliage` varchar(255) NOT NULL,
	`pierre` varchar(255) NOT NULL,
	`genre` char(1) ,
	`taille` float(20) NOT NULL,
	`purete` varchar(5) ,
	`codeArticle` varchar(255) NOT NULL,
	CONSTRAINT PK_bijoux PRIMARY KEY(id),
	--ADD CONSTRAINT CHK_genre CHECK(`genre`= `M` OR `genre`=`F`),
	--ADD CONSTRAINT CHK_purete CHECK(`purete`=`SI1`OR `purete`=`VS2`);
);

--
-- Structure de la table `users`
--


CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `idCookie` varchar(255)  NOT NULL,
  `dateCreation` date,
  `dateVisite` date,
  CONSTRAINT PK_users PRIMARY KEY(id)
);

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `idUser` int(11) NOT NULL,
  `idBijoux` int(11)  NOT NULL
);

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `idUser` int(11) NOT NULL,
  `idBijoux` int(11)  NOT NULL
) ;

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
	`id` int(11) NOT NULL,
	`idUser` int(11) NOT NULL,
	`datePayment` date NOT NULL,
	`mail` varchar(255) NOT NULL,
	`nom` varchar(255) NOT NULL,
	`prenom` varchar(255) NOT NULL,
	`ville` varchar(255) NOT NULL,
	`codePostal` float(50) NOT NULL,
	`pays` float(50) NOT NULL,
	`telephone` varchar(15) NOT NULL,
     `PrixTotal` float(50) NOT NULL,
	 `images` varchar(50) NOT NULL,
	`remarques` varchar(255) NOT NULL,
	CONSTRAINT PK_commande PRIMARY KEY(id)
);

--
-- Structure de la table `archive`
--

CREATE TABLE `archive` (
  `idUser` int(11) NOT NULL,
  `idBijoux` int(11)  NOT NULL,
  `idCommande` int(11)  NOT NULL

);
--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `bijoux`
--
ALTER TABLE `bijoux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Contraintes pour les tables exportées
--




--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_panier_user` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;
ALTER TABLE `panier`
  ADD CONSTRAINT `FK_panier_bijoux` FOREIGN KEY (`idBijoux`) REFERENCES `bijoux` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `FK_favoris_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;
ALTER TABLE `favoris`
  ADD CONSTRAINT `FK_favoris_bijoux` FOREIGN KEY (`idBijoux`) REFERENCES `bijoux` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_commande_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `archive`
--
ALTER TABLE `archive`
  ADD CONSTRAINT `FK_archive_users` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE;
ALTER TABLE `archive`
  ADD CONSTRAINT `FK_archive_bijoux` FOREIGN KEY (`idBijoux`) REFERENCES `bijoux` (`id`) ON DELETE CASCADE;
ALTER TABLE `archive`
  ADD CONSTRAINT `FK_archive_commande` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`id`) ON DELETE CASCADE;



