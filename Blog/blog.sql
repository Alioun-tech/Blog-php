-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : jeu. 23 sep. 2021 à 17:45
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id_commentaires` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `date_com` datetime NOT NULL,
  `id_Posts` int(11) NOT NULL,
  `id_User` int(11) NOT NULL,
  PRIMARY KEY (`id_commentaires`),
  KEY `COMMENTAIRES_POSTS_FK` (`id_Posts`),
  KEY `COMMENTAIRES_USER0_FK` (`id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaires`, `contenu`, `date_com`, `id_Posts`, `id_User`) VALUES
(1, 'Article intéressant', '2021-08-26 02:04:48', 1, 3),
(2, 'Peut mieux faire!!!!', '2021-08-27 02:04:48', 1, 5),
(3, 'Test', '2021-08-27 02:06:18', 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id_Posts` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `chapo` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `image_post` varchar(50) NOT NULL,
  `date_post` datetime NOT NULL,
  `id_User` int(11) NOT NULL,
  PRIMARY KEY (`id_Posts`),
  KEY `POSTS_USER_FK` (`id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id_Posts`, `titre`, `chapo`, `contenu`, `image_post`, `date_post`, `id_User`) VALUES
(1, ' Article 1', ' Exemple article 1', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consequat dolor eros, vel ultrices lectus aliquet molestie. Fusce in purus leo. Fusce a efficitur ante. Vivamus ligula neque, egestas vel lacus vel, sagittis tincidunt nibh. Nullam sit amet maximus velit, quis dignissim tortor. Nunc ornare enim vel sem vulputate, sit amet vestibulum urna commodo. Nullam sollicitudin mattis tincidunt. Nullam eget convallis nisl, sed efficitur magna. Cras vel leo erat. Maecenas commodo eget metus quis commodo. Curabitur dui libero, gravida sed fermentum a, ornare sit amet turpis. Proin semper ut nunc nec convallis. Sed facilisis turpis eget ullamcorper euismod.', 'img_1.jpg', '2021-08-19 00:00:00', 1),
(2, ' Article 2', '  Exemple article 2', ' Sed at turpis diam. Curabitur nec velit elementum, porta odio a, suscipit dolor. In vitae tellus vel enim porta ultricies. Pellentesque vitae ultricies nibh, vitae eleifend sem. Praesent aliquet purus nec turpis pharetra egestas. Vivamus gravida consequat enim, a ultrices leo. Mauris consequat dignissim leo vel dignissim. Curabitur malesuada ullamcorper sem in scelerisque. Maecenas id tortor consequat, facilisis est eget, laoreet leo. Curabitur ante eros, volutpat in condimentum ullamcorper, consectetur sed quam. Vestibulum molestie aliquet ante, ac finibus lorem sollicitudin et. Sed a ultricies tortor. Quisque vel vulputate nulla.', 'inbound-marketing-blog.jpg', '2021-08-20 00:00:00', 3),
(3, 'Article 3', 'Exemple titre 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin justo magna, eleifend vitae felis eu, dapibus condimentum sapien. Nam vel pulvinar ante. Mauris sodales neque lorem, at porttitor neque hendrerit sed. Nullam viverra nisi eu odio auctor fringilla. In sem libero, dapibus sit amet accumsan nec, condimentum a eros. Praesent laoreet justo nec porta pellentesque. Nullam ultricies dui nisi, vel fringilla quam ultricies a. Mauris lobortis congue felis, sit amet porttitor ante pellentesque at. Quisque vehicula ante eros, ut luctus nibh dapibus eget. Vivamus sit amet gravida nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;', 'newspaper_3.png', '2021-08-24 02:27:00', 1),
(5, ' Article 4', ' exemple article 4', ' test', '', '2021-09-03 10:17:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_User` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `mot_de_passe` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_User`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_User`, `pseudo`, `nom`, `prenom`, `mail`, `mot_de_passe`, `type`) VALUES
(1, 'Bada', 'Diedhiou', 'Alioune', 'diedhiou.alioun@gmail.com', 'aq15dbf5add748fc85f0fd58a8c93835b530ee5a39625', 'admin'),
(2, 'Admin', 'Diedhiou', 'Alioune', 'admin_blog@blogvrap.com', 'aq1f2c9547da6589610a33c46fa047dcbda2164c1a925', 'admin'),
(3, 'Leon', 'Guetta', 'David', 'd.guetta@zik.fr', 'aq1e6f3806ad1c5004ab3dd16e3e58f2097696c7ae025', 'user'),
(5, 'User1', 'User', 'User', 'user@gmail.com', 'aq15dbf5add748fc85f0fd58a8c93835b530ee5a39625', 'user');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `COMMENTAIRES_POSTS_FK` FOREIGN KEY (`id_Posts`) REFERENCES `posts` (`id_Posts`),
  ADD CONSTRAINT `COMMENTAIRES_USER0_FK` FOREIGN KEY (`id_User`) REFERENCES `user` (`id_User`);

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `POSTS_USER_FK` FOREIGN KEY (`id_User`) REFERENCES `user` (`id_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
