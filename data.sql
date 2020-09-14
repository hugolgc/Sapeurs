-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 14 sep. 2020 à 08:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `sapeurs`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `ID` int(10) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`ID`, `libelle`) VALUES
(1, 'Agendas'),
(2, 'Avis de passage'),
(3, 'Calendriers'),
(4, 'Bâche PVC'),
(5, 'Calendriers de poche'),
(6, 'Cahiers de coloriage'),
(7, 'Carnets de reçu'),
(8, 'Carnets de démarchage A5'),
(9, 'Cartes de message'),
(10, 'Cartes de vœux'),
(11, 'Gobelets réutilisables'),
(12, 'Jeux pour enfants'),
(13, 'Menus Sainte-Barbe'),
(14, 'Peluche Pince Panda'),
(15, 'Portes-clés personnalisés'),
(16, 'Pour vos manifestations'),
(17, 'Sacs cabas'),
(18, 'Sacoches'),
(19, 'Stylos'),
(20, 'Taches administratives');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `ID` int(10) NOT NULL,
  `nom` tinytext NOT NULL,
  `description` text NOT NULL,
  `figure` varchar(100) NOT NULL,
  `prix` float NOT NULL,
  `ID_categorie` int(10) NOT NULL,
  `purchase` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`ID`, `nom`, `description`, `figure`, `prix`, `ID_categorie`, `purchase`) VALUES
(1, 'amet, consectetuer adipiscing', 'Proin velit. Sed malesuada augue ut lacus.', '10.png', 3.09, 10, 19),
(2, 'lacus. Quisque purus', 'non, lobortis quis, pede. Suspendisse dui. Fusce', '3.png', 3.07, 3, 7),
(3, 'quam dignissim pharetra.', 'nisi. Aenean eget metus. In nec orci.', '5.png', 7.64, 5, 36),
(4, 'dictum magna. Ut', 'Aliquam fringilla cursus purus. Nullam scelerisque neque', '10.png', 4.37, 10, 23),
(5, 'ut erat. Sed', 'odio vel est tempor bibendum. Donec felis', '8.png', 7.15, 8, 47),
(6, 'quam a felis', 'at, iaculis quis, pede. Praesent eu dui.', '14.png', 3.68, 14, 5),
(7, 'Pellentesque habitant morbi', 'diam dictum sapien. Aenean massa. Integer vitae', '11.png', 8.29, 11, 37),
(8, 'elit erat vitae', 'nibh enim, gravida sit amet, dapibus id,', '4.png', 1.1, 4, 12),
(9, 'eu dui. Cum', 'pede. Suspendisse dui. Fusce diam nunc, ullamcorper', '9.png', 1.16, 9, 6),
(10, 'dui. Fusce diam', 'blandit at, nisi. Cum sociis natoque penatibus', '17.png', 7.92, 17, 2),
(11, 'Cras pellentesque. Sed', 'fermentum convallis ligula. Donec luctus aliquet odio.', '4.png', 8.88, 4, 25),
(12, 'felis. Donec tempor,', 'ut dolor dapibus gravida. Aliquam tincidunt, nunc', '1.png', 9, 1, 27),
(13, 'cursus a, enim.', 'ante ipsum primis in faucibus orci luctus', '15.png', 4.15, 15, 43),
(14, 'nibh dolor, nonummy', 'non, vestibulum nec, euismod in, dolor. Fusce', '7.png', 8.34, 7, 25),
(15, 'sem, consequat nec,', 'fames ac turpis egestas. Fusce aliquet magna', '3.png', 0.13, 3, 21),
(16, 'commodo hendrerit. Donec', 'magnis dis parturient montes, nascetur ridiculus mus.', '20.png', 4.78, 20, 15),
(17, 'purus. Duis elementum,', 'ultrices posuere cubilia Curae; Donec tincidunt. Donec', '6.png', 4.74, 6, 33),
(18, 'Morbi vehicula. Pellentesque', 'pede, nonummy ut, molestie in, tempus eu,', '17.png', 8.15, 17, 33),
(19, 'Aliquam nec enim.', 'Pellentesque habitant morbi tristique senectus et netus', '19.png', 2.17, 19, 8),
(20, 'Etiam vestibulum massa', 'ac turpis egestas. Aliquam fringilla cursus purus.', '11.png', 4.71, 11, 50),
(21, 'lectus justo eu', 'eleifend egestas. Sed pharetra, felis eget varius', '8.png', 1.41, 8, 46),
(22, 'nulla at sem', 'ultricies adipiscing, enim mi tempor lorem, eget', '16.png', 6.46, 16, 31),
(23, 'Aliquam auctor, velit', 'augue ut lacus. Nulla tincidunt, neque vitae', '3.png', 3.18, 3, 47),
(24, 'elementum, lorem ut', 'risus. Nunc ac sem ut dolor dapibus', '12.png', 3.74, 12, 50),
(25, 'Nullam ut nisi', 'iaculis quis, pede. Praesent eu dui. Cum', '15.png', 6.99, 15, 7),
(26, 'Suspendisse ac metus', 'Curabitur ut odio vel est tempor bibendum.', '12.png', 8.09, 12, 19),
(27, 'ac ipsum. Phasellus', 'tristique pharetra. Quisque ac libero nec ligula', '10.png', 5.85, 10, 32),
(28, 'ligula. Donec luctus', 'nisl elementum purus, accumsan interdum libero dui', '1.png', 2.73, 1, 24),
(29, 'luctus, ipsum leo', 'et, eros. Proin ultrices. Duis volutpat nunc', '9.png', 6.83, 9, 41),
(30, 'Duis a mi', 'fringilla mi lacinia mattis. Integer eu lacus.', '18.png', 9.56, 18, 45),
(31, 'sed leo. Cras', 'metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse', '16.png', 5.56, 16, 9),
(32, 'Sed nulla ante,', 'ante. Vivamus non lorem vitae odio sagittis', '6.png', 9.63, 6, 34),
(33, 'Pellentesque ut ipsum', 'eu augue porttitor interdum. Sed auctor odio', '16.png', 4.59, 16, 35),
(34, 'dui, semper et,', 'sit amet diam eu dolor egestas rhoncus.', '7.png', 0.34, 7, 6),
(35, 'Aliquam adipiscing lobortis', 'lorem ut aliquam iaculis, lacus pede sagittis', '17.png', 4.42, 17, 14),
(36, 'tellus non magna.', 'penatibus et magnis dis parturient montes, nascetur', '18.png', 3.47, 18, 5),
(37, 'Donec vitae erat', 'mattis velit justo nec ante. Maecenas mi', '12.png', 2.42, 12, 29),
(38, 'eu, odio. Phasellus', 'Nulla dignissim. Maecenas ornare egestas ligula. Nullam', '12.png', 8.26, 12, 45),
(39, 'auctor non, feugiat', 'cursus vestibulum. Mauris magna. Duis dignissim tempor', '14.png', 8.12, 14, 34),
(40, 'vulputate eu, odio.', 'Aenean eget metus. In nec orci. Donec', '16.png', 3.23, 16, 45),
(41, 'ultrices posuere cubilia', 'facilisis lorem tristique aliquet. Phasellus fermentum convallis', '12.png', 4.11, 12, 49),
(42, 'lorem. Donec elementum,', 'ante lectus convallis est, vitae sodales nisi', '2.png', 5.41, 2, 5),
(43, 'enim. Etiam imperdiet', 'eu sem. Pellentesque ut ipsum ac mi', '11.png', 8.64, 11, 2),
(44, 'mattis semper, dui', 'turpis egestas. Aliquam fringilla cursus purus. Nullam', '12.png', 3.23, 12, 30),
(45, 'iaculis odio. Nam', 'Ut semper pretium neque. Morbi quis urna.', '8.png', 4.34, 8, 44),
(46, 'dolor. Fusce feugiat.', 'vulputate, risus a ultricies adipiscing, enim mi', '18.png', 5.28, 18, 20),
(47, 'vel arcu eu', 'vitae risus. Duis a mi fringilla mi', '2.png', 6.68, 2, 6),
(48, 'Etiam bibendum fermentum', 'amet, dapibus id, blandit at, nisi. Cum', '5.png', 5.51, 5, 20),
(49, 'pede ac urna.', 'lobortis augue scelerisque mollis. Phasellus libero mauris,', '1.png', 2.9, 1, 28),
(50, 'egestas, urna justo', 'dolor dapibus gravida. Aliquam tincidunt, nunc ac', '8.png', 5.49, 8, 25),
(51, 'fames ac turpis', 'cursus et, magna. Praesent interdum ligula eu', '4.png', 8.52, 4, 47),
(52, 'vitae risus. Duis', 'id, libero. Donec consectetuer mauris id sapien.', '14.png', 5.73, 14, 14),
(53, 'aliquet magna a', 'Cras eu tellus eu augue porttitor interdum.', '2.png', 5.47, 2, 42),
(54, 'est tempor bibendum.', 'ac sem ut dolor dapibus gravida. Aliquam', '2.png', 9.13, 2, 41),
(55, 'faucibus orci luctus', 'Vestibulum ante ipsum primis in faucibus orci', '8.png', 2.66, 8, 15),
(56, 'vehicula aliquet libero.', 'volutpat ornare, facilisis eget, ipsum. Donec sollicitudin', '16.png', 6.43, 16, 41),
(57, 'fringilla, porttitor vulputate,', 'a feugiat tellus lorem eu metus. In', '1.png', 7.52, 1, 20),
(58, 'enim non nisi.', 'dis parturient montes, nascetur ridiculus mus. Proin', '19.png', 5.89, 19, 9),
(59, 'Nunc ullamcorper, velit', 'at, egestas a, scelerisque sed, sapien. Nunc', '11.png', 8.76, 11, 22),
(60, 'dolor. Fusce feugiat.', 'Donec feugiat metus sit amet ante. Vivamus', '2.png', 0.54, 2, 1),
(61, 'urna, nec luctus', 'sem eget massa. Suspendisse eleifend. Cras sed', '1.png', 9.23, 1, 46),
(62, 'risus. Duis a', 'sed dui. Fusce aliquam, enim nec tempus', '13.png', 9.23, 13, 29),
(63, 'consectetuer ipsum nunc', 'dolor. Fusce feugiat. Lorem ipsum dolor sit', '19.png', 6.64, 19, 17),
(64, 'malesuada ut, sem.', 'Suspendisse aliquet molestie tellus. Aenean egestas hendrerit', '1.png', 5.14, 1, 38),
(65, 'eu elit. Nulla', 'porttitor eros nec tellus. Nunc lectus pede,', '4.png', 8.16, 4, 6),
(66, 'arcu et pede.', 'habitant morbi tristique senectus et netus et', '1.png', 1.11, 1, 41),
(67, 'est mauris, rhoncus', 'in faucibus orci luctus et ultrices posuere', '12.png', 7.84, 12, 48),
(68, 'faucibus orci luctus', 'accumsan neque et nunc. Quisque ornare tortor', '11.png', 2.88, 11, 46),
(69, 'molestie dapibus ligula.', 'dictum. Phasellus in felis. Nulla tempor augue', '19.png', 6.62, 19, 32),
(70, 'ad litora torquent', 'erat neque non quam. Pellentesque habitant morbi', '18.png', 6.24, 18, 11),
(71, 'diam. Pellentesque habitant', 'Suspendisse sed dolor. Fusce mi lorem, vehicula', '9.png', 1.19, 9, 4),
(72, 'nascetur ridiculus mus.', 'Nunc mauris elit, dictum eu, eleifend nec,', '12.png', 3.69, 12, 46),
(73, 'neque. Nullam ut', 'tempor lorem, eget mollis lectus pede et', '13.png', 7.66, 13, 15),
(74, 'id magna et', 'mollis dui, in sodales elit erat vitae', '20.png', 4.1, 20, 6),
(75, 'pede blandit congue.', 'gravida sit amet, dapibus id, blandit at,', '12.png', 2.76, 12, 47),
(76, 'accumsan convallis, ante', 'nulla at sem molestie sodales. Mauris blandit', '4.png', 9.65, 4, 7),
(77, 'ultricies dignissim lacus.', 'dui, in sodales elit erat vitae risus.', '18.png', 3.54, 18, 27),
(78, 'scelerisque sed, sapien.', 'ultrices iaculis odio. Nam interdum enim non', '14.png', 7.75, 14, 12),
(79, 'elit, pellentesque a,', 'eget nisi dictum augue malesuada malesuada. Integer', '4.png', 5.2, 4, 34),
(80, 'parturient montes, nascetur', 'laoreet lectus quis massa. Mauris vestibulum, neque', '1.png', 2.24, 1, 36),
(81, 'dui, in sodales', 'amet risus. Donec egestas. Aliquam nec enim.', '19.png', 6.2, 19, 10),
(82, 'Duis volutpat nunc', 'vehicula. Pellentesque tincidunt tempus risus. Donec egestas.', '4.png', 9.09, 4, 49),
(83, 'ipsum cursus vestibulum.', 'eu metus. In lorem. Donec elementum, lorem', '9.png', 0.48, 9, 32),
(84, 'ultrices posuere cubilia', 'dapibus ligula. Aliquam erat volutpat. Nulla dignissim.', '17.png', 2.09, 17, 25),
(85, 'cursus non, egestas', 'ligula tortor, dictum eu, placerat eget, venenatis', '19.png', 5.38, 19, 25),
(86, 'Morbi non sapien', 'ut nisi a odio semper cursus. Integer', '16.png', 8.19, 16, 22),
(87, 'vehicula risus. Nulla', 'elit. Nulla facilisi. Sed neque. Sed eget', '16.png', 2.4, 16, 50),
(88, 'aliquet libero. Integer', 'velit eu sem. Pellentesque ut ipsum ac', '2.png', 3.93, 2, 3),
(89, 'dictum sapien. Aenean', 'arcu. Vestibulum ante ipsum primis in faucibus', '6.png', 7.71, 6, 43),
(90, 'Integer vulputate, risus', 'nec tempus mauris erat eget ipsum. Suspendisse', '1.png', 2.59, 1, 50),
(91, 'varius et, euismod', 'Phasellus in felis. Nulla tempor augue ac', '13.png', 6.88, 13, 24),
(92, 'tristique neque venenatis', 'tellus non magna. Nam ligula elit, pretium', '13.png', 5.53, 13, 46),
(93, 'consequat purus. Maecenas', 'Etiam ligula tortor, dictum eu, placerat eget,', '16.png', 0.87, 16, 9),
(94, 'id, libero. Donec', 'Etiam gravida molestie arcu. Sed eu nibh', '9.png', 5.39, 9, 11),
(95, 'libero. Integer in', 'molestie. Sed id risus quis diam luctus', '17.png', 5.17, 17, 22),
(96, 'interdum enim non', 'nisi a odio semper cursus. Integer mollis.', '11.png', 3.56, 11, 25),
(97, 'Sed id risus', 'vehicula risus. Nulla eget metus eu erat', '10.png', 7.73, 10, 49),
(98, 'sodales purus, in', 'Sed id risus quis diam luctus lobortis.', '4.png', 1.66, 4, 29),
(99, 'ante bibendum ullamcorper.', 'aliquam eros turpis non enim. Mauris quis', '9.png', 3.33, 9, 36),
(100, 'Morbi metus. Vivamus', 'sit amet diam eu dolor egestas rhoncus.', '13.png', 0.93, 13, 18);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_category` (`ID_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`ID_categorie`) REFERENCES `categorie` (`ID`);
