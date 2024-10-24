-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 23 oct. 2024 à 10:26
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `zeduc_web`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Numero` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Etudiant',
  `status` varchar(255) NOT NULL DEFAULT ' Inactive',
  `points_de_fidelites` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Numero`, `role`, `status`, `points_de_fidelites`) VALUES
(1, 'willem', 'willem.ndtoungou@2028.ucac-icam.com', NULL, '$2y$12$P9yw9w7ciwTCHQduNqyh7OnlUvybY.sraCHfVYKnG2N8JZDkZzYdq', NULL, '2024-10-19 00:40:46', '2024-10-19 00:40:46', '620113038', 'Etudiant', ' Inactive', '0'),
(2, 'Azerty', 'dfghjkj@gmail.com', NULL, 'Azertyuiop', NULL, '2024-10-21 02:00:30', '2024-10-21 02:00:30', '54186946', 'Etudiant', ' Inactive', '0'),
(3, 'test', 'test@test.com', NULL, 'djfkjhgoriehopv', NULL, '2024-10-21 06:19:23', '2024-10-21 06:19:23', '556', 'Etudiant', ' Inactive', '0'),
(4, 'test', 'tssy@test.com', NULL, 'cskdjfvhzoveziu', NULL, '2024-10-21 06:23:20', '2024-10-21 06:23:20', '225', 'Etudiant', ' Inactive', '0'),
(5, 'Aurel', 'toto@gmail.com', NULL, 'Azerty@123', NULL, '2024-10-22 00:27:55', '2024-10-22 00:27:55', '65555555', 'Etudiant', ' Inactive', '0'),
(6, 'TATI', 'tati@gmail.com', NULL, '$2y$12$i5Sja82J6soU3KCLU7PSa.YHyitQE25V50RlBD3TXYJSv0JcX0fsy', NULL, '2024-10-22 01:49:29', '2024-10-22 01:49:29', '65555555', 'Etudiant', ' Inactive', '0'),
(7, 'Gaby', 'gaby@gmail.com', NULL, '$2y$12$UDJnsooomJKaLiPcofYrgOXllyUjwkQV501uDYDTtu1GiBZwv8GgO', NULL, '2024-10-23 05:41:34', '2024-10-23 05:41:34', '4555555555', 'Etudiant', ' Inactive', '0'),
(8, 'elie', 'elie@gmail.com', NULL, '$2y$12$28RLNGGBCRKUzwTvixYvR.cN6VaMceZRSdzbD1cIQ7zfLIpTEbCDe', NULL, '2024-10-23 05:49:56', '2024-10-23 05:49:56', '655889988', 'Etudiant', ' Inactive', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
