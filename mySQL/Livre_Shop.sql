-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2024 at 12:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Livre_Shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `auteurs`
--

CREATE TABLE `auteurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `naissance` date NOT NULL,
  `mort` date DEFAULT NULL,
  `biographie` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auteurs`
--

INSERT INTO `auteurs` (`id`, `nom`, `prenom`, `naissance`, `mort`, `biographie`, `photo`) VALUES
(1, 'BALZAC (DE)', 'Honoré', '1799-05-20', '1850-08-18', 'Honoré de Balzac écrivain français. Romancier, dramaturge, critique littéraire, critique d\'art, essayiste, journaliste et imprimeur, il a laissé l\'une des plus imposantes œuvres romanesques de la littérature française, avec plus de quatre-vingt-dix romans et nouvelles parus de 1829 à 1855, réunis sous le titre La Comédie humaine. À cela s\'ajoutent Les Cent Contes drolatiques, ainsi que des romans de jeunesse publiés sous des pseudonymes et quelque vingt-cinq œuvres ébauchées.', 'https://upload.wikimedia.org/wikipedia/commons/e/e6/Honor%C3%A9_de_Balzac_%281842%29_Detail.jpg'),
(2, 'COLOMBANI', 'Laetitia', '1976-00-00', NULL, 'Lætitia Colombani est née en 1976 ; sa mère est bibliothécaire. Après deux années de classe préparatoire Cinésup à Nantes, elle entre à l’École Nationale Supérieure Louis Lumière. Elle obtient son diplôme en 1998. Elle écrit et réalise des courts-métrages, puis deux longs-métrages : À la folie... pas du tout (2002) avec Audrey Tautou, Samuel Le Bihan et Isabelle Carré, qui remporte le Prix Sopadin Junior du meilleur scénario, puis Mes stars et moi (2008) avec Kad Merad et Catherine Deneuve. Elle travaille aussi pour la scène et coécrit la comédie musicale Résiste en 2015 d’après les chansons de France Gall composées par Michel Berger (Palais des Sports de Paris et tournée dans toute la France).', 'https://fr.web.img6.acsta.net/pictures/19/09/03/10/32/3248990.jpg'),
(3, 'COULON', 'Cécile', '1990-06-13', NULL, 'À l\'âge de 16 ans, elle publie son premier roman intitulé Le Voleur de vie, aux éditions Revoir. Elle passe un baccalauréat option Cinéma. Après une hypokhâgne et une khâgne au lycée Blaise-Pascal à Clermont-Ferrand, elle poursuit ses études en lettres modernes.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/C%C3%A9cile_Coulon_-_Atlantide_2018.jpg/800px-C%C3%A9cile_Coulon_-_Atlantide_2018.jpg'),
(4, 'HUGO', 'Victor', '1802-02-26', '1885-05-22', 'Victor Hugo est un poète, dramaturge, écrivain, romancier et dessinateur romantique français. Il est considéré comme l\'un des plus importants écrivains de la langue française. Il est aussi une personnalité politique et un intellectuel engagé qui a eu un rôle idéologique majeur et occupe une place marquante dans l\'histoire des lettres françaises au xixe siècle.', 'https://upload.wikimedia.org/wikipedia/commons/2/25/Victor_Hugo_001.jpg'),
(5, 'MINIER', 'Bernard', '1960-08-26', NULL, 'Bernard Minier, fils d\'un professeur de l’enseignement technique1, grandit à Montréjeau au pied des Pyrénées, puis fait des études à Tarbes et à Toulouse avant de séjourner un an en Espagne. Il vit aujourd’hui en Île-de-France. Il fait d\'abord carrière dans l\'administration des douanes comme contrôleur principal, tout en participant à des concours de nouvelles avant de franchir le pas et d\'envoyer un manuscrit de roman à des éditeurs.', 'https://upload.wikimedia.org/wikipedia/commons/c/c8/Bernard_Minier_%282019%29.jpg'),
(6, 'NOTHOMB', 'Amélie', '1966-06-13', NULL, 'Auteur prolifique, elle publie un ouvrage par an depuis son premier roman, Hygiène de l\'assassin (1992). Ses romans font partie des meilleures ventes littéraires et certains sont traduits en plusieurs langues. Stupeur et Tremblements remporte en 1999 le grand prix du roman de l\'Académie française.', 'https://upload.wikimedia.org/wikipedia/commons/2/2c/Am%C3%A9lie_Nothomb_14_mars_2009.jpg'),
(7, 'VIAN', 'Boris', '1920-03-10', '1959-06-23', 'Sous le pseudonyme Vernon Sullivan, il a publié plusieurs romans dans le style américain, parmi lesquels J\'irai cracher sur vos tombes qui a fait scandale et lui valut un procès retentissant. Si les écrits de Vernon Sullivan ont attiré à Boris Vian beaucoup d\'ennuis avec la justice et le fisc, ils l\'ont momentanément enrichi à tel point qu\'il pouvait dire que Vernon Sullivan faisait vivre Boris Vian. Il a souvent utilisé d\'autres pseudonymes, parfois sous la forme d\'une anagramme, pour signer une multitude d\'écrits.', 'https://upload.wikimedia.org/wikipedia/commons/f/fd/Boris_Vian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `nom`) VALUES
(6, 'étude de moeurs'),
(4, 'fiction'),
(7, 'fiction domestique'),
(13, 'mystere'),
(1, 'roman'),
(2, 'roman historique'),
(3, 'roman noir'),
(11, 'roman policier'),
(12, 'romantisme'),
(9, 'suspense'),
(8, 'thriller'),
(5, 'tragédie');

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `sorti` varchar(4) NOT NULL,
  `synopsis` text DEFAULT NULL,
  `auteur_id` int(11) NOT NULL,
  `pages` int(11) NOT NULL,
  `prix` double NOT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `sorti`, `synopsis`, `auteur_id`, `pages`, `prix`, `photo`) VALUES
(1, 'J’irai cracher sur vos tombes', '1946', 'Lee Anderson, un homme né d\'une mère mulâtre, et qui a la peau blanche et les cheveux blonds, quitte sa ville natale après la mort de son frère noir, lynché parce qu\'il était amoureux d\'une blanche.', 1, 192, 2.8, 'https://www.glenat.com/sites/default/files/styles/large/public/images/livres/couv/9782344020562-001-T.jpeg'),
(2, 'Stupeur et Tremblements', '1999', 'Amélie, originaire de la Belgique qui a vécu sa petite enfance au Japon, a toujours admiré le raffinement et l’art de vivre du pays. À l’âge adulte, elle retourne au Japon pour un contrat d’interprète au sein de la prestigieuse compagnie Yumimoto, afin d’y travailler et d’y vivre comme une Japonaise en tant qu\'employée.', 6, 174, 6.2, 'https://www.magnard.fr/sites/default/files/styles/couverture_grande/public/couvertures/9782210754959-g.jpg?itok=TFfMwppL'),
(3, 'Le Père Goriot', '1835', 'Le roman s\'ouvre en 1819, avec la description sordide et répugnante du quartier du Val-de-Grâce et de la Maison-Vauquer, une pension parisienne située dans la rue Neuve-Sainte-Geneviève et appartenant à la veuve madame Vauquer. Plusieurs résidents s\'y côtoient, dont : Eugène de Rastignac, jeune étudiant en droit, ambitieux, à l\'esprit sagace et d\'origine modeste ; un mystérieux personnage au physique imposant et aux manières un peu rustres et grossières, nommé Vautrin ; et un ancien vermicellier ayant fait fortune pendant la Révolution, maintenant retraité, complètement désargenté et veuf, surnommé le père Goriot.', 1, 445, 3, 'https://www.label-emmaus.co/media/ext/768x768_cropcenter/d1kvfoyrif6wzg.cloudfront.net/assets/images/56/13201/none_ba81a3954d2fb025b0aa8bdf7a6fd4d9_ba81a39.JPEG'),
(4, 'L’écume des Jours', '1974', 'L\'Écume des jours est un conte, d\'abord enchanteur, où les êtres, les souris, les objets, sont animés des meilleures intentions. », mais aussi, selon Raymond Queneau, « le plus poignant des romans d\'amour contemporains ». Cette œuvre poignante, lourde de sens, est tout à fait hors-série. Elle plonge le lecteur dans un univers dont les lois sont absurdes et impitoyables, où la mort s\'abat sans crier ', 7, 320, 6.9, 'https://images.epagine.fr/571/9782806290571_1_75.jpg'),
(5, 'Illusions perdues', '1839', 'L’action se déroule sous la Restauration. Le roman peint les milieux de l\'imprimerie et des cercles littéraires. Il raconte les illusions perdues de Lucien Chardon, qui préfère se faire appeler du nom noble de sa mère, Rubempré. Lucien de Rubempré est un jeune provincial cultivé qui monte à Paris pour devenir écrivain. Mais, devant les difficultés, il se lance dans le journalisme et y connaît un certain succès. Son revirement monarchiste cause sa ruine. De retour à Angoulême, il essaie d\'obtenir l\'appui de son ami imprimeur, David Séchard. Mais ce dernier, à qui des concurrents tentent de voler un procédé de fabrication du papier, est emprisonné à cause de Lucien. Rubempré veut se suicider, mais il en est empêché par un prêtre qui, en échange de sa servilité totale, lui donne l\'argent pour délivrer son ami.', 1, 846, 6.6, 'https://images.epagine.fr/177/9782383041177_1_75.jpg'),
(6, 'La tresse', '2017', 'Le roman suit trois femmes dans leur lutte contre les discriminations et leur quête d’émancipation.', 2, 240, 7.4, 'https://images.epagine.fr/300/9782246816300_1_75.jpg'),
(7, 'L\'Arrache-cœur', '1953', 'Jacquemort, psychiatre, arrive chez Angel et Clémentine, celle ci étant sur le point d\'accoucher. Jacquemort va l\'aider à mettre au monde trois garçons : des jumeaux, Noël et Joël et « un isolé », Citroën. Angel, le mari délaissé, n\'a pas le droit de voir ni d\'assister à cet accouchement. Ce n\'est qu\'après que Clémentine lui redonnera sa liberté paternelle. Jacquemort s\'installe ensuite chez eux et explique son projet à Angel : il veut psychanalyser les gens et se remplir de leurs pensées car il se sent \'vide\' intérieurement.', 7, 224, 5.9, 'https://images.epagine.fr/626/9782253006626_1_75.jpg'),
(8, 'Notre-Dame de Paris, 1482', '1831', 'Dans Paris, une jeune gitane, Esméralda, danse sur le parvis de vaucanson. Sa beauté bouleverse l’archidiacre de Notre-Dame, qui tente de l\'enlever.', 4, 733, 4.6, 'https://images.epagine.fr/412/9782080704412_1_75.jpg'),
(9, 'Les Travailleurs de la mer', '1866', 'Pour pouvoir reconstruire un nouveau bateau à vapeur après le naufrage de La Durande, il faudrait sauver la précieuse machine du navire dont le constructeur est mort. Donc qu\'un homme seul, matelot mais aussi forgeron, ait l\'audace de se risquer plusieurs jours jusqu\'aux rochers Douvres où repose l\'épave', 4, 674, 7.5, 'https://images.epagine.fr/976/9782070371976_1_75.jpg'),
(10, 'Glacé', '2011', 'Décembre 2008, dans une vallée encaissée des Pyrénées. Au petit matin, les ouvriers d’une centrale hydroélectrique découvrent le cadavre d’un cheval sans tête, accroché à la falaise glacée.', 5, 590, 20.9, 'https://images.epagine.fr/976/9782266219976_1_75.jpg'),
(11, 'Le Dernier Jour d\'un condamné', '1829', 'Les derniers moments d\'un être que la justice a condamné à mort. Espoir et désepoir, joies et souffrances ainsi que le séisme moral que subit cet homme.', 4, 208, 2, 'https://images.epagine.fr/917/9782072699917_1_75.jpg'),
(12, 'Bug-Jargal', '1826', 'En 1791, pendant la révolte, des noirs de Saint-Domingue dénoncent l\'esclavage.', 4, 272, 2, 'https://images.epagine.fr/783/9782073019783_1_75.jpg'),
(13, 'Une Putain d\'histoire', '2015', 'Au commencement est la peur. La peur de se noyer. La peur des autres, ceux qui me détestent, ceux qui veulent ma peau. Autant vous le dire tout de suite : Ce n’est pas une histoire banale. Ça non. c’est une putain d’histoire. Ouais, une putain d’histoire…', 5, 524, 21.9, 'https://images.epagine.fr/779/9782266267779_1_75.jpg'),
(14, 'Lucia', '2022', 'À l’université de Salamanque, un groupe d’étudiants en criminologie découvre l’existence d’un tueur passé sous les radars depuis plusieurs décennies et qui met en scène ses victimes en s’inspirant de tableaux de la Renaissance.', 5, 480, 22.9, 'https://images.epagine.fr/200/9782266332200_1_75.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `livres_genres`
--

CREATE TABLE `livres_genres` (
  `livre_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livres_genres`
--

INSERT INTO `livres_genres` (`livre_id`, `genre_id`) VALUES
(1, 1),
(1, 3),
(2, 1),
(2, 4),
(3, 1),
(3, 2),
(3, 4),
(4, 1),
(4, 4),
(4, 5),
(5, 1),
(5, 4),
(5, 6),
(6, 4),
(6, 7),
(7, 4),
(8, 1),
(8, 2),
(9, 1),
(9, 4),
(10, 4),
(10, 8),
(10, 9),
(10, 11),
(11, 1),
(11, 4),
(11, 12),
(12, 1),
(12, 2),
(13, 4),
(13, 8),
(13, 9),
(14, 4),
(14, 8),
(14, 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auteur_id` (`auteur_id`);

--
-- Indexes for table `livres_genres`
--
ALTER TABLE `livres_genres`
  ADD PRIMARY KEY (`livre_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `livres`
--
ALTER TABLE `livres`
  ADD CONSTRAINT `livres_ibfk_1` FOREIGN KEY (`auteur_id`) REFERENCES `auteurs` (`id`);

--
-- Constraints for table `livres_genres`
--
ALTER TABLE `livres_genres`
  ADD CONSTRAINT `livres_genres_ibfk_1` FOREIGN KEY (`livre_id`) REFERENCES `livres` (`id`),
  ADD CONSTRAINT `livres_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
