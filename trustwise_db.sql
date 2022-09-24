-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : sam. 24 sep. 2022 à 19:51
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `trustwise_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `id_transaction` varchar(60) NOT NULL,
  `montant` int(11) NOT NULL,
  `transaction_date` varchar(128) NOT NULL,
  `transaction_hour` varchar(9) NOT NULL,
  `id_emetteur` int(11) NOT NULL,
  `id_recepteur` int(11) NOT NULL,
  `transaction_status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id_transaction`, `montant`, `transaction_date`, `transaction_hour`, `id_emetteur`, `id_recepteur`, `transaction_status`) VALUES
('38RiUrDt3r2uFy', 50000, '09-23-2022 05:15:40', '', 4, 12, 'pending'),
('cCHf1szKaR0DSL', 80000, '23/09/2022', '', 4, 12, 'pending'),
('snAxT3TBrwdw8b', 634450000, '23/09/2022', '', 4, 5, 'pending'),
('y4EnTpqjvzW5E2', 60000, '23/09/2022', '09:15', 4, 5, 'pending'),
('HvbwbFNKuzdRk4', 50000, '23/09/2022', '09:20', 4, 5, 'pending'),
('cmha4pXDV1blq3', 50000, '24/09/2022', '05:21', 4, 5, 'pending'),
('Od7uhLabHNyCkH', 62300, '23/09/2022', '07:23', 4, 5, 'pending'),
('ogmFf8Nrja5m69', 50000, '23/09/2022', '08:29', 9, 4, 'pending'),
('dEHEiEHzQTEGul', 99000, '24/09/2022', '04:44', 10, 10, 'pending');

-- --------------------------------------------------------

--
-- Structure de la table `users_register`
--

CREATE TABLE `users_register` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `pays` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT 'default.php',
  `is_verified` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users_register`
--

INSERT INTO `users_register` (`user_id`, `user_name`, `date_naissance`, `pays`, `telephone`, `email`, `password`, `created_at`, `profile_pic`, `is_verified`) VALUES
(4, 'Eugene acolatse', '3444-02-12', 'togo', 92035070, 'jookhafor@gmail.com', '$2y$10$AAXX/ZXfIygvsLKfsbpKBe1bqCEYTnk8cwrsXPtr2R7zD8viTMWx6', '09-22-2022 06:35:02', 'default.php', 0),
(5, 'kok', '2002-02-12', 'togo', 92035070, 'nagbekokoutse@gmail.com', '$2y$10$iMLP4p5qA4QghxawhWaagupDtrMkLoBrZJtcHVw/QDKY2GaJ4SwoS', '09-22-2022 06:43:29', 'default.php', 0),
(6, 'marcdoe', '2002-03-12', 'Benin', 92035070, 'marcdoe@gmail.com', '$2y$10$OoGiOFSLQpUSfIYPZL5UjemM5TomgSYExhJ6X/kPGWuwx/kn2dqeS', '09-22-2022 07:54:30', 'default.php', 0),
(8, 'Eugene acolatse', '2012-03-12', 'Togo', 920, 'asd@gmail.com', '$2y$10$4eaTz.N9AZ6YmEsBGGCQvOMqjGW6n4bQjX4/eoUZKpTbCsVjUypfm', '09-22-2022 08:25:01', 'default.php', 0),
(9, 'sam', '2222-03-12', 'Togo', 99384843, 'sam@gmail.com', '$2y$10$KRJan7rkcfKCUlvvrARS/.voBhXF.DxPGaWAK3K6bHFvuI02Rgv.K', '09-23-2022 10:24:03', 'default.php', 0),
(10, 'max mad', '1998-02-12', 'Bénin', 898829939, 'max@gmail.com', '$2y$10$wNmsY24pItL1/fFgMfU2L.tt85oB/1/T/HAzq3VC3YmR0q.ROdJPG', '09-24-2022 06:42:35', 'default.php', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD KEY `id_transaction` (`id_transaction`);

--
-- Index pour la table `users_register`
--
ALTER TABLE `users_register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users_register`
--
ALTER TABLE `users_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
