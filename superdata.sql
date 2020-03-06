-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 06 mars 2020 à 14:31
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `b-e-p-form`
--

-- --------------------------------------------------------

--
-- Structure de la table `superdata`
--

CREATE TABLE `superdata` (
  `id` int(11) NOT NULL,
  `mandataire_id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `typeDeMandat` varchar(255) NOT NULL,
  `nMandat` int(11) NOT NULL,
  `nDeReference` int(11) NOT NULL,
  `natureDuBien` varchar(255) NOT NULL,
  `adressseDuBien` varchar(255) NOT NULL,
  `prixVenteNet` int(11) NOT NULL,
  `honorairesTTC` int(11) NOT NULL,
  `chargeHonoraire` varchar(255) NOT NULL,
  `gesteCommercial` int(11) NOT NULL,
  `nomVendeur` varchar(255) NOT NULL,
  `prenomVendeur` varchar(255) NOT NULL,
  `adresseVendeur` varchar(255) NOT NULL,
  `nomVendeur2` varchar(255) NOT NULL,
  `prenomVendeur2` varchar(255) NOT NULL,
  `adresseVendeur2` varchar(255) NOT NULL,
  `typeSocieteVendeur` varchar(255) NOT NULL,
  `nomSocieteVendeur` varchar(255) NOT NULL,
  `nomRepresentantVendeur` varchar(255) NOT NULL,
  `nomNotaireVendeur` varchar(255) NOT NULL,
  `adresseNotaireVendeur` varchar(255) NOT NULL,
  `nomAcquereur` varchar(255) NOT NULL,
  `prenomAcquereur` varchar(255) NOT NULL,
  `adresseAcquereur` varchar(255) NOT NULL,
  `typeSocieteAcquereur` varchar(255) NOT NULL,
  `nomSocieteAcquereur` varchar(255) NOT NULL,
  `nomRepresentantAcquereur` varchar(255) NOT NULL,
  `nomNotaireAcquereur` varchar(255) NOT NULL,
  `adresseNotaireAcquereur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `superdata`
--

INSERT INTO `superdata` (`id`, `mandataire_id`, `mail`, `typeDeMandat`, `nMandat`, `nDeReference`, `natureDuBien`, `adressseDuBien`, `prixVenteNet`, `honorairesTTC`, `chargeHonoraire`, `gesteCommercial`, `nomVendeur`, `prenomVendeur`, `adresseVendeur`, `nomVendeur2`, `prenomVendeur2`, `adresseVendeur2`, `typeSocieteVendeur`, `nomSocieteVendeur`, `nomRepresentantVendeur`, `nomNotaireVendeur`, `adresseNotaireVendeur`, `nomAcquereur`, `prenomAcquereur`, `adresseAcquereur`, `typeSocieteAcquereur`, `nomSocieteAcquereur`, `nomRepresentantAcquereur`, `nomNotaireAcquereur`, `adresseNotaireAcquereur`) VALUES
(1, 1, 'rayane.dev@bonne-etoile.fr', 'Vente', 11, 0, 'Appartement', '88 rue zozo', 159, 9, 'Vendeur', 0, 'ty', 'er', '88 t fyutgfuytc gdyf', 'cezc', 'cece', 'ccze', 'G.I.E', 'csdc', 'sdcsdc', 'sdcdsc', 'sdcsdc', 'sdc', 'scdsc', 'sdcsdc', 'S.C.I', 'csdcds', 'csdcds', 'sdcsdcd', 'sdcdsc'),
(2, 1, 'rayane.dev@bonne-etoile.fr', 'Vente', 234323, 3223, 'Appartement', 'FEVRVRVRVB', 3423423, 234, 'Acquéreur', 234, 'BRBRBR', 'BRBRBRBR', 'RBRTTRBGRF', '', '', '', 'Aucune', 'aucun', 'aucun', 'FGBFGBGB', ' c fd fg fg', 'fbbgbf', 'gfbfgbgfb', 'fgbfgbfgbfg', 'Aucune', 'aucun', 'aucun', 'FGBFGBFGBFGB', 'FGBFGBGFB'),
(3, 1, 'rayane.dev@bonne-etoile.fr', 'Location', 16, 1583, 'Parking', '55 rts rtgvrgbdrgbr', 55588, 88858, 'Vendeur', 33, 'regfr', 'rfgrtgrt', 'trhthtrhtrg', '', '', '', 'Aucune', '', '', 'vvrverv', 'rbrbrfb', 'rdfbdrfbfb', 'bfdrbswdbsw', 'dbdebwsqfrbq', 'Aucune', '', '', 'fswbdefbwfqr', 'bedfbdefbdf'),
(4, 1, 'rayane.dev@bonne-etoile.fr', 'Vente', 71, 23, 'Bureau / Commerce', 'cccccccccccccccc', 24, 28, 'Acquéreur', 12, 'dddddddddddddddd', 'ddddddddddd', 'dzzzz', '', '', '', 'Aucune', 'aucun', 'aucun', 'sssssssssssssssss', 'sssssssssssss', 'sssssssssssssa', 'aaaaaaaaa', 'aaaaaaaaa', 'Aucune', 'aucun', 'aucun', 'dddddd', 'dddddddddddd'),
(5, 1, 'rayane.dev@bonne-etoile.fr', 'Vente', 12, 12, 'Appartement', '12', 12, 12, 'Vendeur', 12, '12', '12', '12', '', '', '', 'Aucune', 'aucun', 'aucun', '12', '12', '12', '12', '12', 'Aucune', 'aucun', 'aucun', '12', '12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `superdata`
--
ALTER TABLE `superdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `superdata`
--
ALTER TABLE `superdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
