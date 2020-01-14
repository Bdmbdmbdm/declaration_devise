-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 04 Juillet 2018 à 09:05
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `declaration`
--

-- --------------------------------------------------------

--
-- Structure de la table `apurement`
--

CREATE TABLE `apurement` (
  `id_formulaire` int(11) NOT NULL,
  `id_utilisateur` varchar(50) NOT NULL,
  `date_ap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `apurement`
--

INSERT INTO `apurement` (`id_formulaire`, `id_utilisateur`, `date_ap`) VALUES
(3, 'ilyes-rdah', '2000-01-01'),
(12, 'ilyes-rdah', '2000-01-01'),
(16, 'ag-001', '2018-07-02'),
(19, 'ilyes-rdah', '2018-06-20'),
(26, 'directeur', '2018-07-21'),
(28, 'ag-001', '2018-06-30'),
(29, 'ag-001', '2018-07-02'),
(30, 'ag-001', '2018-07-02'),
(32, 'ag-001', '2018-07-03');

-- --------------------------------------------------------

--
-- Structure de la table `change`
--

CREATE TABLE `change` (
  `id_formulaire` int(11) NOT NULL,
  `date_e` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `nature` varchar(20) DEFAULT NULL,
  `nature2` varchar(20) DEFAULT NULL,
  `montant2` float DEFAULT NULL,
  `date_e2` date DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_ap` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `change`
--

INSERT INTO `change` (`id_formulaire`, `date_e`, `montant`, `nature`, `nature2`, `montant2`, `date_e2`, `image`, `image_ap`) VALUES
(1, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(2, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(3, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(5, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(9, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(10, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(12, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(13, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(14, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(16, '2018-12-31', 5000, 'orue', '0', 0, '2000-01-01', NULL, NULL),
(17, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(18, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(19, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(20, '2000-01-01', 0, '0', '0', 0, '2000-01-01', NULL, NULL),
(21, '2000-01-01', 1000, '0', '0', 0, '2000-01-01', NULL, NULL),
(26, '2018-07-27', 1000, 'orue', '0', 0, '2000-01-01', NULL, NULL),
(28, '2018-09-12', 5000, 'orue', '0', 0, '2000-01-01', NULL, NULL),
(29, '2019-01-01', 5000, 'orue', '0', 0, '2000-01-01', NULL, NULL),
(30, '2018-12-12', 5000, 'orue', '0', 0, '2000-01-01', NULL, NULL),
(31, '2000-01-01', 0, 'orue', '0', 0, '2000-01-01', NULL, NULL),
(32, '2018-07-18', 5000, 'orue', '0', 0, '2000-01-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `depot`
--

CREATE TABLE `depot` (
  `id_formulaire` int(11) NOT NULL,
  `nat_devise_saisie` varchar(20) DEFAULT NULL,
  `val_chiffre` float DEFAULT NULL,
  `val_lettre` varchar(20) DEFAULT NULL,
  `nat_metaux_saisie` varchar(20) DEFAULT NULL,
  `poids_chiffre` float DEFAULT NULL,
  `poids_lettre` varchar(20) DEFAULT NULL,
  `nat_devise_saisie2` varchar(50) DEFAULT NULL,
  `val_chiffre2` float DEFAULT NULL,
  `val_lettre2` varchar(50) DEFAULT NULL,
  `nat_metaux_saisie2` varchar(50) DEFAULT NULL,
  `poids_chiffre2` float DEFAULT NULL,
  `poids_lettre2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `depot`
--

INSERT INTO `depot` (`id_formulaire`, `nat_devise_saisie`, `val_chiffre`, `val_lettre`, `nat_metaux_saisie`, `poids_chiffre`, `poids_lettre`, `nat_devise_saisie2`, `val_chiffre2`, `val_lettre2`, `nat_metaux_saisie2`, `poids_chiffre2`, `poids_lettre2`) VALUES
(16, 'orue', 5000, 'ellim qnic', '', 0, '', '', 0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `echang`
--

CREATE TABLE `echang` (
  `id_formulaire` int(11) NOT NULL,
  `date_c` date DEFAULT NULL,
  `montant` float DEFAULT NULL,
  `nature` varchar(20) DEFAULT NULL,
  `date_c2` date DEFAULT NULL,
  `nature2` int(11) DEFAULT NULL,
  `montant2` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `echang`
--

INSERT INTO `echang` (`id_formulaire`, `date_c`, `montant`, `nature`, `date_c2`, `nature2`, `montant2`, `image`) VALUES
(4, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(7, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(8, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(11, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(12, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(16, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(19, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(21, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(23, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(24, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(25, '2018-07-25', 1, 'orue', '2000-01-01', 0, 0, NULL),
(26, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(28, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(29, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(30, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL),
(32, '2000-01-01', 0, '0', '2000-01-01', 0, 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

CREATE TABLE `etat` (
  `id_formulaire` int(11) NOT NULL,
  `etat` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etat`
--

INSERT INTO `etat` (`id_formulaire`, `etat`) VALUES
(1, 'entreee'),
(2, 'entree'),
(4, 'sortie'),
(5, 'entree'),
(7, 'sortie'),
(8, 'sortie'),
(9, 'entree'),
(10, 'entree'),
(11, 'sortie'),
(13, 'entree'),
(14, 'entree'),
(17, 'entree'),
(18, 'entree'),
(20, 'entree'),
(21, 'entree'),
(22, 'sortie'),
(23, 'sortie'),
(24, 'sortie'),
(25, 'sortie'),
(31, 'entree');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `n_passport` varchar(9) NOT NULL,
  `n_voyage` varchar(20) CHARACTER SET utf8 NOT NULL,
  `id_formulaire` int(11) NOT NULL,
  `id_utilisateur` varchar(50) NOT NULL,
  `valide` int(11) NOT NULL,
  `modifie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `formulaire`
--

INSERT INTO `formulaire` (`n_passport`, `n_voyage`, `id_formulaire`, `id_utilisateur`, `valide`, `modifie`) VALUES
('100000000', '100', 1, 'ag-001', 1, 0),
('200000000', '200', 2, 'ag-004', 1, 0),
('300000000', '300', 3, 'ag-004', 1, 0),
('400000000', '400', 4, 'ag-001', 1, 0),
('500000000', '500', 5, 'ag-004', 1, 0),
('700000000', '700', 7, 'ag-001', 1, 0),
('800000000', '800', 8, 'ag-004', 1, 2),
('900000000', '900', 9, 'ag-001', 1, 0),
('010000000', '010', 10, 'ag-004', 1, 0),
('110000000', '110', 11, 'ag-001', 1, 0),
('210000000', '210', 12, 'ag-004', 2, 0),
('310000000', '310', 13, 'ag-001', 1, 0),
('410000000', '410', 14, 'non', 0, 0),
('610000000', '610', 16, 'ag-004', 2, 0),
('710000000', '710', 17, 'ag-001', 1, 0),
('810000000', '810', 18, 'ag-004', 1, 0),
('910000000', '910', 19, 'ag-001', 2, 0),
('020000000', '020', 20, 'ag-004', 1, 0),
('120000000', '120', 21, 'ag-001', 2, 3),
('220000000', '220', 23, 'ag-004', 1, 2),
('420000000', '420', 24, 'ag-001', 1, 2),
('520000000', '520', 25, 'non', 0, 2),
('620000000', '620', 26, 'DG', 2, 3),
('030000000', '030', 28, 'ag-004', 2, 3),
('130000000', '130', 29, 'ag-001', 2, 0),
('230000000', '230', 30, 'ag-001', 2, 0),
('330000000', '330', 31, 'ag-001', 1, 0),
('550000000', '550', 32, 'ag-001', 2, 0);

-- --------------------------------------------------------

--
-- Structure de la table `imag`
--

CREATE TABLE `imag` (
  `im` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `importations`
--

CREATE TABLE `importations` (
  `id_formulaire` int(11) NOT NULL,
  `devise_declare` varchar(20) DEFAULT NULL,
  `val_chiffre` float DEFAULT NULL,
  `val_lettre` varchar(50) DEFAULT NULL,
  `metaux_declare` varchar(20) DEFAULT NULL,
  `poids_chiffre` float DEFAULT NULL,
  `poids_lettre` varchar(50) DEFAULT NULL,
  `avis_autorisation` varchar(255) DEFAULT NULL,
  `devise_declare2` varchar(50) DEFAULT NULL,
  `val_chiffre2` float DEFAULT NULL,
  `val_lettre2` varchar(50) DEFAULT NULL,
  `metaux_declare2` varchar(50) DEFAULT NULL,
  `poids_chiffre2` float DEFAULT NULL,
  `poids_lettre2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `importations`
--

INSERT INTO `importations` (`id_formulaire`, `devise_declare`, `val_chiffre`, `val_lettre`, `metaux_declare`, `poids_chiffre`, `poids_lettre`, `avis_autorisation`, `devise_declare2`, `val_chiffre2`, `val_lettre2`, `metaux_declare2`, `poids_chiffre2`, `poids_lettre2`) VALUES
(1, 'orue', 5000, 'ruelav', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(2, 'orue', 6000, 'ruelav', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(3, 'orue', 7500, 'ruelav', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(4, 'orue', 6500, 'ruelav', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(5, 'orue', 6300, 'ruelav', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(7, 'orue', 1500, 'ruelav', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(8, 'orue', 1500, 'ruelav', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(9, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(10, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(11, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(12, 'orue', 1000, 'ellim', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(13, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(14, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(16, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(17, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(18, 'orue', 1000, 'ellim', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(19, 'orue', 1000, 'ellim', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(20, 'orue', 1000, 'ellim', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(21, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(23, 'orue', 1000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(24, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(25, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(26, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(28, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(29, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(30, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(31, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0'),
(32, 'orue', 5000, 'ellim qnic', '0', 0, '0', 'nope', '0', 0, '0', '0', 0, '0');

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id_utilisateur` varchar(50) NOT NULL,
  `mdp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `login`
--

INSERT INTO `login` (`id_utilisateur`, `mdp`) VALUES
('ag-001', '123'),
('ag-002', '123'),
('ag-003', '123'),
('ag-004', '123'),
('ag-005', '123'),
('ag-006', '123'),
('ag-007', '123'),
('ag-008', '123'),
('ag-009', '123'),
('ag-010', '123'),
('ag-011', '123'),
('ag-012', '123'),
('ag-013', '123'),
('ag-014', '123'),
('ag-015', '123'),
('ag-016', '123'),
('ag-017', '123'),
('ag-018', '123'),
('ag-019', '123'),
('ag-020', '123'),
('ag-021', '123'),
('ag-022', '123'),
('ag-023', '123'),
('ag-024', '123'),
('ag-025', '123'),
('ag-026', '123'),
('ag-027', '123'),
('ag-028', '123'),
('ag-029', '123'),
('ag-030', '123'),
('ag-031', '123'),
('ag-032', '123'),
('ag-033', '123'),
('ag-034', '123'),
('ag-035', '123'),
('ag-036', '123'),
('ag-037', '123'),
('ag-038', '123'),
('ag-039', '123'),
('ag-040', '123'),
('ag-041', '123'),
('ag-042', '123'),
('ag-043', '123'),
('ag-044', '123'),
('ag-045', '123'),
('DB-constantine', '123'),
('DD-constantine', '123'),
('DG', '123'),
('DR-alger-exterieur', '123'),
('DR-alger-port', '123'),
('DR-annaba', '123'),
('DR-blida', '123'),
('DR-constantine', '123'),
('DR-oran', '123'),
('DR-setif', '123'),
('DR-tebessa', ''),
('DR-telemcen', '');

-- --------------------------------------------------------

--
-- Structure de la table `modification`
--

CREATE TABLE `modification` (
  `id_formulaire` int(11) NOT NULL,
  `observation` varchar(255) NOT NULL,
  `justification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `modification`
--

INSERT INTO `modification` (`id_formulaire`, `observation`, `justification`) VALUES
(14, 'observation', 'Capture.PNG'),
(18, 'observation', 'Capture.PNG'),
(21, 'observation', 'Capture.PNG'),
(23, 'obsevation', 'Capture.PNG'),
(24, 'observation', 'Capture.PNG'),
(26, 'observation', 'Capture.PNG'),
(28, 'observation', 'Capture.PNG');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `region` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `equipe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `grade`, `region`, `division`, `equipe`) VALUES
('ag-001', 'nom1', 'prenom1', 'agent', 'constantine', 'constantine', 'constantine'),
('ag-002', 'nom2', 'prenom2', 'agent', 'alger port', 'alger port', 'alger port'),
('ag-003', 'nom3', 'prenom3', 'agent', 'alger exterieur', 'alger exterieur', 'alger exterieur'),
('ag-004', 'nom4', 'prenom4', 'agent', 'constantine', 'constantine', 'aeroport mohamed boudiaf'),
('ag-005', 'nom5', 'prenom5', 'agent', 'constantine', 'skikda', 'skikda contentieux'),
('ag-006', 'nom6', 'prenom6', 'agent', 'constantine', 'skikda', 'skikda el djadid'),
('ag-007', 'nom7', 'prenom7', 'agent', 'constantine', 'batna', 'batna'),
('ag-008', 'nom8', 'prenom8', 'agent', 'constantine', 'biskra', 'biskra'),
('ag-009', 'nom9', 'prenom9', 'agent', 'oran', 'oran', 'oran'),
('ag-010', 'nom10', 'prenom10', 'agent', 'blida', 'blida', 'blida'),
('ag-011', 'nom11', 'prenom11', 'agent', 'telemcen', 'telemcen', 'telemcen'),
('ag-012', 'nom12', 'prenom12', 'agent', 'telemcen', 'maghnia', 'maghnia contentieux'),
('ag-013', 'nom13', 'prenom13', 'agent', 'telemcen', 'maghnia', 'akid lotfi'),
('ag-014', 'nom14', 'prenom14', 'agent', 'telemcen', 'ghazaouet', 'ghazaouet'),
('ag-015', 'nom15', 'prenom15', 'agent', 'telemcen', 'ghazaouet', 'Boukanoune'),
('ag-016', 'nom16', 'prenom16', 'agent', 'telemcen', 'sidi bel abbes', 'sidi bel abbes'),
('ag-017', 'nom17', 'prenom17', 'agent', 'telemcen', 'sidi bel abbes', 'saida'),
('ag-018', 'nom18', 'prenom18', 'agent', 'telemcen', 'ain temouchent', 'ain temouchent'),
('ag-019', 'nom19', 'prenom19', 'agent', 'setif', 'setif', 'setif'),
('ag-020', 'nom20', 'prenom20', 'agent', 'setif', 'bejaia', 'bejaia'),
('ag-021', 'nom21', 'prenom21', 'agent', 'setif', 'jijel', 'jijel'),
('ag-022', 'nom22', 'prenom22', 'agent', 'setif', 'bordj bou arreridj', 'bordj bou arreridj'),
('ag-023', 'nom23', 'prenom23', 'agent', 'annaba', 'annaba', 'annaba'),
('ag-024', 'nom24', 'prenom24', 'agent', 'tebessa', 'tebessa', 'tebessa contentieux'),
('ag-025', 'nom25', 'prenom25', 'agent', 'tebessa', 'tebessa', 'Bouchebka'),
('ag-026', 'nom26', 'prenom26', 'agent', 'tebessa', 'tebessa', 'el meridj'),
('ag-027', 'nom27', 'prenom27', 'agent', 'tebessa', 'tebessa', 'ras el aioun'),
('ag-028', 'nom28', 'prenom28', 'agent', 'tebessa', 'bir el ater', 'bir el ater'),
('ag-029', 'nom29', 'prenom29', 'agent', 'tebessa', 'oum el bouaghi', 'oum el bouaghi'),
('ag-030', 'nom30', 'prenom30', 'agent', 'illizi', 'in amenas', 'in amenas'),
('ag-031', 'nom31', 'prenom31', 'agent', 'illizi', 'in amenas', 'deb deb'),
('ag-032', 'nom32', 'prenom32', 'agent', 'illizi', 'djanet', 'djanet'),
('ag-033', 'nom33', 'prenom33', 'agent', 'tamenrasset', 'tamenrasset', 'tamenrasset'),
('ag-034', 'nom34', 'prenom34', 'agent', 'bechar', 'bechar', 'bechar'),
('ag-035', 'nom35', 'prenom35', 'agent', 'bechar', 'naama', 'naama'),
('ag-036', 'nom36', 'prenom36', 'agent', 'bechar', 'adrar', 'adrar'),
('ag-037', 'nom37', 'prenom37', 'agent', 'bechar', 'tindouf', 'tindouf'),
('ag-038', 'nom38', 'prenom38', 'agent', 'ouargla', 'ouargla', 'ouargla'),
('ag-039', 'nom39', 'prenom39', 'agent', 'ouargla', 'ouargla', 'touggourt'),
('ag-040', 'nom40', 'prenom40', 'agent', 'ouargla', 'hassi messaoud', 'hassi messaoud'),
('ag-041', 'nom41', 'prenom41', 'agent', 'ouargla', 'laghouat', 'laghouat'),
('ag-042', 'nom42', 'prenom42', 'agent', 'ouargla', 'ghardaia', 'ghardaia'),
('ag-043', 'nom43', 'prenom43', 'agent', 'ouargla', 'ghardaia', 'el golea'),
('ag-044', 'nom44', 'prenom44', 'agent', 'ouargla', 'el oued', 'el oued'),
('ag-045', 'nom45', 'prenom45', 'agent', 'ouargla', 'el oued', 'taleb larbi'),
('DB-adrar', 'directeur', 'brigade', 'DB', 'bechar', 'adrar', 'adrar'),
('DB-aeroport-mohamed-boudiaf', 'directeur', 'brigade', 'DB', 'constantine', 'constantine', 'aeroport mohamed boudiaf'),
('DB-ain-temouchent', 'directeur', 'brigade', 'DB', 'telemcen', 'ain temouchent', 'ain temouchent'),
('DB-akid-lotfi', 'directeur', 'brigade', 'DB', 'telemcen', 'maghnia', 'akid lotfi'),
('DB-alger-exterieur', 'directeur', 'brigade', 'DB', 'alger exterieur', 'alger exterieur', 'alger exterieur'),
('DB-alger-port', 'directeur', 'brigade', 'DB', 'alger port', 'alger port', 'alger port'),
('DB-annaba', 'directeur', 'brigade', 'DB', 'annaba', 'annaba', 'annaba'),
('DB-batna', 'directeur', 'brigade', 'DB', 'constantine', 'batna', 'batna'),
('DB-bechar', 'directeur', 'brigade', 'DB', 'bechar', 'bechar', 'bechar'),
('DB-bejaia', 'directeur', 'brigade', 'DB', 'setif', 'bejaia', 'bejaia'),
('DB-bir-el-ater', 'directeur', 'brigade', 'DB', 'tebessa', 'bir el ater', 'bir el ater'),
('DB-biskra', 'directeur', 'brigade', 'DB', 'constantine', 'biskra', 'biskra'),
('DB-blida', 'directeur', 'brigade', 'DB', 'blida', 'blida', 'blida'),
('DB-bordj', 'directeur', 'brigade', 'DB', 'setif', 'bordj bou arreridj', 'bordj bou arreridj'),
('DB-Bouchebka', 'directeur', 'brigade', 'DB', 'tebessa', 'tebessa', 'Bouchebka'),
('DB-boukanoune', 'directeur', 'brigade', 'DB', 'telemcen', 'ghazaouet', 'Boukanoune'),
('DB-constantine', 'directeur', 'brigade', 'DB', 'constantine', 'constantine', 'constantine'),
('DB-deb-deb', 'directeur', 'brigade', 'DB', 'illizi', 'in amenas', 'deb deb'),
('DB-djanet', 'directeur', 'brigade', 'DB', 'illizi', 'djanet', 'djanet'),
('DB-el-golea', 'directeur', 'brigade', 'DB', 'ouargla', 'ghardaia', 'el golea'),
('DB-el-meridj', 'directeur', 'brigade', 'DB', 'tebessa', 'tebessa', 'el meridj'),
('DB-el-oued', 'directeur', 'brigade', 'DB', 'ouargla', 'el oued', 'el oued'),
('DB-ghardaia', 'directeur', 'brigade', 'DB', 'ouargla', 'ghardaia', 'ghardaia'),
('DB-ghazaouet', 'directeur', 'brigade', 'DB', 'telemcen', 'ghazaouet', 'ghazaouet'),
('DB-hassi-messaoud', 'directeur', 'brigade', 'DB', 'ouargla', 'hassi messaoud', 'hassi messaoud'),
('DB-in-amenas', 'directeur', 'brigade', 'DB', 'illizi', 'in amenas', 'in amenas'),
('DB-jijel', 'directeur', 'brigade', 'DB', 'setif', 'jijel', 'jijel'),
('DB-laghouat', 'directeur', 'brigade', 'DB', 'ouargla', 'laghouat', 'laghouat'),
('DB-maghnia-contentieux', 'directeur', 'brigade', 'DB', 'telemcen', 'maghnia', 'maghnia contentieux'),
('DB-naama', 'directeur', 'brigade', 'DB', 'bechar', 'naama', 'naama'),
('DB-oran', 'directeur', 'brigade', 'DB', 'oran', 'oran', 'oran'),
('DB-ouargla', 'directeur', 'brigade', 'DB', 'ouargla', 'ouargla', 'ouargla'),
('DB-oum-el-bouaghi', 'directeur', 'brigade', 'DB', 'tebessa', 'oum el bouaghi', 'oum el bouaghi'),
('DB-ras-el-aioun', 'directeur', 'brigade', 'DB', 'tebessa', 'tebessa', 'ras el aioun'),
('DB-saida', 'directeur', 'brigade', 'DB', 'telemcen', 'sidi bel abbes', 'saida'),
('DB-setif', 'directeur', 'brigade', 'DB', 'setif', 'setif', 'setif'),
('DB-sidi-bel-abbes', 'directeur', 'brigade', 'DB', 'telemcen', 'sidi bel abbes', 'sidi bel abbes'),
('DB-skikda-contentieux', 'directeur', 'brigade', 'DB', 'constantine', 'skikda', 'skikda contentieux'),
('DB-skikda-el-djadid', 'directeur', 'brigade', 'DB', 'constantine', 'skikda', 'skikda el djadid'),
('DB-taleb-larbi', 'directeur', 'brigade', 'DB', 'ouargla', 'el oued', 'taleb larbi'),
('DB-tamenrasset', 'directeur', 'brigade', 'DB', 'tamenrasset', 'tamenrasset', 'tamenrasset'),
('DB-tebessa-contentieux', 'directeur', 'brigade', 'DB', 'tebessa', 'tebessa', 'tebessa contentieux'),
('DB-telemcen', 'directeur', 'brigade', 'DB', 'telemcen', 'telemcen', 'telemcen'),
('DB-tindouf', 'directeur', 'brigade', 'DB', 'bechar', 'tindouf', 'tindouf'),
('DB-touggourt', 'directeur', 'brigade', 'DB', 'ouargla', 'ouargla', 'touggourt'),
('DD-adrar', 'directeur', 'divisionnaire', 'DD', 'bechar', 'adrar', ''),
('DD-ain-temouchent', 'directeur', 'divisionnaire', 'DD', 'telemcen', 'ain temouchent', ''),
('DD-alger-exterieur', 'directeur', 'divisionnaire', 'DD', 'alger exterieur', 'alger exterieur', ''),
('DD-alger-port', 'directeur', 'divisionnaire', 'DD', 'alger port', 'alger port', ''),
('DD-annaba', 'directeur', 'divisionnaire', 'DD', 'annaba', 'annaba', ''),
('DD-batna', 'directeur', 'divisionnaire', 'DD', 'constantine', 'batna', ''),
('DD-bechar', 'directeur', 'divisionnaire', 'DD', 'bechar', 'bechar', ''),
('DD-bejaia', 'directeur', 'divisionnaire', 'DD', 'setif', 'bejaia', ''),
('DD-bir-el-ater', 'directeur', 'divisionnaire', 'DD', 'tebessa', 'bir el ater', ''),
('DD-biskra', 'directeur', 'divisionnaire', 'DD', 'constantine', 'biskra', ''),
('DD-blida', 'directeur', 'divisionnaire', 'DD', 'blida', 'blida', ''),
('DD-bordj', 'directeur', 'divisionnaire', 'DD', 'setif', 'bordj bou arreridj', ''),
('DD-constantine', 'directeur', 'divisionnaire', 'DD', 'constantine', 'constantine', ''),
('DD-djanet', 'directeur', 'divisionnaire', 'DD', 'illizi', 'djanet', ''),
('DD-el-oued', 'directeur', 'divisionnaire', 'DD', 'ouargla', 'el oued', ''),
('DD-ghardaia', 'directeur', 'divisionnaire', 'DD', 'ouargla', 'ghardaia', ''),
('DD-ghazaouet', 'directeur', 'divisionnaire', 'DD', 'telemcen', 'ghazaouet', ''),
('DD-hassi-messaoud', 'directeur', 'divisionnaire', 'DD', 'ouargla', 'hassi messaoud', ''),
('DD-in-amenas', 'directeur', 'divisionnaire', 'DD', 'illizi', 'in amenas', ''),
('DD-jijel', 'directeur', 'divisionnaire', 'DD', 'setif', 'jijel', ''),
('DD-laghouat', 'directeur', 'divisionnaire', 'DD', 'ouargla', 'laghouat', ''),
('DD-maghnia', 'directeur', 'divisionnaire', 'DD', 'telemcen', 'maghnia', ''),
('DD-naama', 'directeur', 'divisionnaire', 'DD', 'bechar', 'naama', ''),
('DD-oran', 'directeur', 'divisionnaire', 'DD', 'oran', 'oran', ''),
('DD-ouargla', 'directeur', 'divisionnaire', 'DD', 'ouargla', 'ouargla', ''),
('DD-oum-el-bouaghi', 'directeur', 'divisionnaire', 'DD', 'tebessa', 'oum el bouaghi', ''),
('DD-setif', 'directeur', 'divisionnaire', 'DD', 'setif', 'setif', ''),
('DD-sidi-bel-abbes', 'directeur', 'divisionnaire', 'DD', 'telemcen', 'sidi bel abbes', ''),
('DD-skikda', 'directeur', 'divisionnaire', 'DD', 'constantine', 'skikda', ''),
('DD-tamanrasset', 'directeur', 'divisionnaire', 'DD', 'tamanrasset', 'tamanrasset', ''),
('DD-tebessa', 'directeur', 'divisionnaire', 'DD', 'tebessa', 'tebessa', ''),
('DD-telemcen', 'directeur', 'divisionnaire', 'DD', 'telemcen', 'telemcen', ''),
('DD-tindouf', 'directeur', 'divisionnaire', 'DD', 'bechar', 'tindouf', ''),
('DG', 'directeur', 'general', 'DG', '', '', ''),
('DR-alger-exterieur', 'directeur', 'regional', 'DR', 'alger exterieur', '', ''),
('DR-alger-port', 'directeur', 'regional', 'DR', 'alger port', '', ''),
('DR-annaba', 'directeur', 'regional', 'DR', 'annaba', '', ''),
('DR-bechar', 'directeur', 'regional', 'DR', 'bechar', '', ''),
('DR-blida', 'directeur', 'regional', 'DR', 'blida', '', ''),
('DR-constantine', 'directeur', 'regional', 'DR', 'constantine', '', ''),
('DR-illizi', 'directeur', 'regional', 'DR', 'illizi', '', ''),
('DR-oran', 'directeur', 'regional', 'DR', 'oran', '', ''),
('DR-ouargla', 'directeur', 'regional', 'DR', 'ouargla', '', ''),
('DR-setif', 'directeur', 'regional', 'DR', 'setif', '', ''),
('DR-tamenrasset', 'directeur', 'regional', 'DR', 'tamenrasset', '', ''),
('DR-tebessa', 'directeur', 'regional', 'DR', 'tebessa', '', ''),
('DR-telemcen', 'directeur', 'regional', 'DR', 'telemcen', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `n_voyage` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date_v` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`n_voyage`, `type`, `date_v`) VALUES
('010', 'emitiram', '2018-01-10'),
('020', 'emitiram', '2018-07-20'),
('030', 'neirea', '2018-08-30'),
('100', 'neirea', '2018-01-01'),
('110', 'emitiram', '2018-01-11'),
('120', 'niart', '2018-07-21'),
('130', 'emitiram', '2018-12-31'),
('200', 'emitiram', '2018-01-02'),
('210', 'emitiram', '2018-01-01'),
('220', 'emitiram', '2018-07-22'),
('230', 'neirea', '2018-11-12'),
('300', 'emitiram', '2018-01-03'),
('310', 'emitiram', '2018-01-13'),
('330', 'neirea', '2018-07-04'),
('400', 'niart', '2018-01-04'),
('410', 'emitiram', '2018-07-14'),
('420', 'emitiram', '2018-12-24'),
('500', 'neirea', '2018-01-05'),
('520', 'emitiram', '2018-07-25'),
('550', 'neirea', '2018-07-12'),
('600', 'emitiram', '2018-01-06'),
('610', 'emitiram', '2018-07-16'),
('620', 'emitiram', '2018-07-26'),
('700', 'neirea', '2018-01-07'),
('710', 'emitiram', '2018-07-17'),
('800', 'emitiram', '2018-01-08'),
('810', 'emitiram', '2018-07-18'),
('900', 'neirea', '2018-01-09'),
('910', 'emitiram', '2018-07-19');

-- --------------------------------------------------------

--
-- Structure de la table `voyageur`
--

CREATE TABLE `voyageur` (
  `n_passport` varchar(9) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `profession` varchar(30) DEFAULT NULL,
  `nationalite` varchar(30) NOT NULL,
  `adr_alg` varchar(80) DEFAULT NULL,
  `adr_etr` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `voyageur`
--

INSERT INTO `voyageur` (`n_passport`, `nom`, `prenom`, `profession`, `nationalite`, `adr_alg`, `adr_etr`) VALUES
('010000000', 'erbjad', 'rabreb', 'tnaidute', 'neiregla', 'regla', '0'),
('020000000', 'idmah', 'hadder', 'tnaidute', 'neiregla', 'regla', '0'),
('030000000', 'leuoname', 'norkam', 'tnadiserp', 'siacnarf', '0', 'sirap'),
('100000000', 'seyli', 'hadder', 'tnaidute', 'neiregla', 'regla', '0'),
('110000000', 'eniddarsan', 'rathkom', 'tnaidute', 'neiregla', 'regla', '0'),
('120000000', 'seyli', 'jdah', 'tnaidute', 'neiregla', 'regla', '0'),
('130000000', 'mon', 'monerp', 'tnaidute', 'siacnarf', '0', 'sirap'),
('200000000', 'aham', 'haduob', 'tnaidute', 'neiregla', 'regla', '0'),
('210000000', 'nhoj', 'eoD', 'tnaidute', 'ynamreg', '0', 'nilreb'),
('220000000', 'erbjad', 'rabreb', 'tnaidute', 'neiregla', 'regla', '0'),
('230000000', 'nicay', 'iduoad', 'tnaidute', 'naisinut', '0', 'senut'),
('300000000', 'nhoJ', 'eoD', 'OEC', 'necirema', '0', 'kroy wen'),
('310000000', 'seyli', 'iduoad', 'tnaidute', 'neiregla', 'regla', '0'),
('330000000', 'miharb', 'doyab', 'tnaidute', 'neiregla', 'regla', '0'),
('400000000', 'hruotob', 'ahcia', 'forp', 'neiregla', 'regla', '0'),
('410000000', 'idmah', 'rabreb', 'tnaidute', 'neiregla', 'regla', '0'),
('420000000', 'erbjad', 'saruob', 'tnaidute', 'neiregla', 'regla', '0'),
('500000000', 'nicay', 'rabreb', 'tnaidute', 'neiregla', 'regla', '0'),
('520000000', 'demha', 'recan', 'tnaidute', 'neiregla', 'regla', '0'),
('550000000', 'leuoname', 'norcam', 'tnediserp', 'siacnarf', '0', 'sirap'),
('600000000', 'nicuoh', 'jdah', 'tnaidute', 'neiregla', 'regla', '0'),
('610000000', 'norcam', 'leuoname', 'tnediserp', 'siacnarf', '0', 'sirap'),
('620000000', 'ramo', 'rabirb', 'tnaidute', 'siacnarf', '0', 'sirap'),
('700000000', 'demha', 'abaaz', 'tnaidute', 'neiregla', 'regla', '0'),
('710000000', 'idmah', 'rathkom', 'tnaidute', 'neiregla', 'regla', '0'),
('800000000', 'nuohob', 'illekab', 'tnaidute', 'neiregla', 'regla', '0'),
('810000000', 'idmah', 'hadder', 'tnaidute', 'neiregla', 'regla', '0'),
('900000000', 'nicay', 'jdah', 'tnaidute', 'neiregla', 'regla', '0'),
('910000000', 'idmah', 'jdah', 'tnaidute', 'siacnarf', '0', 'sirap');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `apurement`
--
ALTER TABLE `apurement`
  ADD PRIMARY KEY (`id_formulaire`);

--
-- Index pour la table `change`
--
ALTER TABLE `change`
  ADD PRIMARY KEY (`id_formulaire`),
  ADD KEY `id_formulaire` (`id_formulaire`);

--
-- Index pour la table `depot`
--
ALTER TABLE `depot`
  ADD PRIMARY KEY (`id_formulaire`);

--
-- Index pour la table `echang`
--
ALTER TABLE `echang`
  ADD PRIMARY KEY (`id_formulaire`),
  ADD UNIQUE KEY `id_formulaire` (`id_formulaire`),
  ADD KEY `id_formulaire_2` (`id_formulaire`);

--
-- Index pour la table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id_formulaire`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`id_formulaire`),
  ADD KEY `n_passport` (`n_passport`),
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `n_voyage` (`n_voyage`);

--
-- Index pour la table `importations`
--
ALTER TABLE `importations`
  ADD PRIMARY KEY (`id_formulaire`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id_formulaire`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`n_voyage`);

--
-- Index pour la table `voyageur`
--
ALTER TABLE `voyageur`
  ADD PRIMARY KEY (`n_passport`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `id_formulaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `echang`
--
ALTER TABLE `echang`
  ADD CONSTRAINT `echang_ibfk_1` FOREIGN KEY (`id_formulaire`) REFERENCES `formulaire` (`id_formulaire`);

--
-- Contraintes pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD CONSTRAINT `formulaire_ibfk_1` FOREIGN KEY (`n_passport`) REFERENCES `voyageur` (`n_passport`);

--
-- Contraintes pour la table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `modification`
--
ALTER TABLE `modification`
  ADD CONSTRAINT `modification_ibfk_1` FOREIGN KEY (`id_formulaire`) REFERENCES `formulaire` (`id_formulaire`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
