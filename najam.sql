-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 07 avr. 2024 à 04:13
-- Version du serveur : 8.0.36-0ubuntu0.22.04.1
-- Version de PHP : 8.1.2-1ubuntu2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `najam`
--

-- --------------------------------------------------------

--
-- Structure de la table `ashab`
--

CREATE TABLE `ashab` (
  `id` int NOT NULL,
  `id_invit` int DEFAULT NULL,
  `n_sender` varchar(255) DEFAULT NULL,
  `n_recipient` varchar(255) DEFAULT NULL,
  `date_send` date DEFAULT NULL,
  `date_confirm` date DEFAULT NULL,
  `date_seen` date DEFAULT NULL,
  `active` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inbox`
--

CREATE TABLE `inbox` (
  `id_cov` int NOT NULL,
  `sujet_cov` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `mes`
--

CREATE TABLE `mes` (
  `id_mes` int NOT NULL,
  `id_cov` int DEFAULT NULL,
  `n_sender` int DEFAULT NULL,
  `message` text,
  `date_message` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_cov` int DEFAULT NULL,
  `n_recipient` int DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `n_user` varchar(255) NOT NULL,
  `n_email` varchar(255) NOT NULL,
  `n_password` varchar(255) NOT NULL,
  `n_city` varchar(255) NOT NULL,
  `n_avatar` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ashab`
--
ALTER TABLE `ashab`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id_cov`);

--
-- Index pour la table `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`id_mes`),
  ADD KEY `id_cov` (`id_cov`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD KEY `id_cov` (`id_cov`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ashab`
--
ALTER TABLE `ashab`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id_cov` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mes`
--
ALTER TABLE `mes`
  MODIFY `id_mes` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
