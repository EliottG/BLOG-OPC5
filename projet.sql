-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 30 avr. 2020 à 15:50
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : projet
--

-- --------------------------------------------------------

--
-- Structure de la table comment_post
--

CREATE TABLE comment_post (
  ID int(11) NOT NULL,
  author varchar(255) NOT NULL,
  content longtext NOT NULL,
  creation_date datetime NOT NULL,
  post_id int(11) NOT NULL,
  is_validate tinyint(1) NOT NULL,
  user_id int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table comment_post
--

INSERT INTO comment_post (ID, author, content, creation_date, post_id, is_validate, user_id) VALUES
(2, 'Administrateur', 'Très bon article\r\n', '2020-04-17 11:11:48', 2, 1, 2),
(4, 'Test', 'Très très bon article', '2020-04-28 14:46:45', 2, 1, 4),
(5, 'Test', 'Très bon article', '2020-04-28 16:39:08', 2, 1, 4),
(6, 'Administrateur', 'Très bon article !', '2020-04-28 18:38:48', 4, 1, 1),
(7, 'Administrateur', 'Il ne faut pas oublier le C# ! ', '2020-04-29 12:24:55', 6, 1, 1),
(13, 'Administrateur', 'C\'est mieux PHP!', '2020-04-29 18:32:16', 5, 1, 1),
(14, 'Test', 'Pas mal ! ', '2020-04-30 11:09:14', 2, 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table post
--

CREATE TABLE post (
  ID int(11) NOT NULL,
  title varchar(255) NOT NULL,
  chapo longtext NOT NULL,
  last_update varchar(255) NOT NULL,
  content longtext NOT NULL,
  user_id int(11) NOT NULL,
  author varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table post
--

INSERT INTO post (ID, title, chapo, last_update, content, user_id, author) VALUES
(2, 'Vendredi 13', '                Vendredi 13 est pour moi le film phare en matière de film d\'horreur. Il s\'agit là de la meilleur création de Sean S. Cunningham, et c\'est ce film qui va démocratiser le genre du Slasher Movie.', '2020-04-16 18:00:16', 'Vendredi 13 (Friday the 13th) est une série de films d\'horreur américains composée de douze films, de sous-genre slasher, d\'une émission de télévision, de nombreux romans et autres bandes dessinées, de jeux vidéos ainsi que de plusieurs produits dérivés.\r\n\r\nLa franchise se concentre principalement sur le personnage fictif, imaginé par le scénariste du film original, Victor Miller, connu aujourd\'hui pour être le plus célèbre tueur au masque de hockey, Jason Voorhees. Jason s\'était supposément noyé au camp Crystal Lake lorsqu\'il avait onze ans à cause de la négligence des moniteurs qui firent l\'amour au lieu d\'encadrer les enfants correctement. Les années passèrent et tout le monde oublia le drame, mis à part sa mère, Pamela Voorhees (en). Pamela est allée jusqu\'à déclencher des feux de forêt et même à empoisonner l\'eau du lac pour faire croire que le territoire du camp était maudit afin d\'empêcher toute réouverture potentielle. Elle s\'est cependant fait décapitée sous les yeux de son fils, Jason, ce qui poussa ce dernier dans une folie meurtrière. Il décida par la suite d\'éliminer toutes les personnes qui entreront à Crystal Lake afin de venger sa mère.\r\n\r\nLe film original, sorti en 1980, fut créé pour tirer profit du succès d\'Halloween sorti deux années auparavant. L\'histoire fut écrite par le scénariste Victor Miller et la réalisation a été octroyée à Sean S. Cunningham. Les films ont rapporté plus de 500 millions de dollars de recettes au box-office mondial. C\'était la franchise d\'horreur la plus rentable au monde jusqu\'à la sortie du nouvel Halloween en 2018, plaçant la franchise de celui-ci devant Vendredi 13.\r\n\r\nFrank Mancuso Jr. a également développé une série télévisée après la sortie du sixième chapitre de la franchise (Vendredi 13, chapitre VI : Jason le mort-vivant) qu\'il nomma Vendredi 13. Elle n\'était reliée à aucun personnage, aucun cadre de la franchise, mais était basée sur la même idée de malchance et de malédiction qu\'a symbolisée la série de films.\r\n\r\nPar la suite, alors que Paramount Pictures possédait encore les droits de licence, quatre films ont été adaptés en roman. Lorsque la franchise a été vendue à New Line Cinema, Cunningham est revenu pour superviser deux films supplémentaires en plus du crossover entre Freddy et Jason. Sous la supervision de New Line Cinema, treize nouvelles et diverses bandes dessinées mettant en vedette le tueur au masque de hockey ont été publiées.\r\n\r\nBien que les films n\'aient pas été reçus positivement par les critiques professionnelles, la franchise est tout de même considérée comme l\'une des franchises les plus médiatisées et les plus prospères en Amérique, non seulement pour son succès mais aussi pour les nombreux produits dérivés qui en découlent1. La popularité de la franchise a généré une base de fans qui ont eux-mêmes créé des « fans films » en façonnant la réplique des costumes de Jason et même en tatouant leurs corps d\'œuvre provenant de la saga. Le masque de hockey de Jason est devenu aujourd\'hui l\'une des images les plus reconnaissables de l\'horreur et de la culture populaire.', 2, 'Mickael'),
(4, 'Pourquoi il faut relire &quot;Alice au pays des merveilles&quot; ', '  &quot;Alice au pays des merveilles&quot; est un imaginaire dense, complexe, entre la figure mythique de l’enfance et le récit d’origine. Avec Alice s’exprime une certaine représentation de l’expérience humaine, en relation avec l’idée d’une enfance perdue, objet de désir et de nostalgie pour l’adulte.\r\n\r\n', '2020-04-30 17:35:48', 'Alice est une figure mythique de l’enfance où s’exprime une certaine représentation de l’expérience humaine saisie dans son originalité. Alice est un classique, peut-être le classique de la littérature d’enfance, par lequel une mythologie de l’enfance entre dans la littérature (…) Qui ne connait l\'histoire d\'Alice, de cette petite anglaise qui s\'endormit par une belle journée printanière au son de la voix de sa sœur, et s\'embarqua pour un voyage onirique aussi instructif que fantaisiste ? Qui n\'a rêvé d\'entreprendre un pareil voyage dans les bras de Morphée, abandonnant tous ses repères, parlant aux animaux et aux plantes, allant vers l\'inconnu, tantôt fragile tantôt dominateur selon la taille que l\'on a ?\r\n\r\nLe personnage d’Alice est une invention personnelle sortie de l’imagination de Lewis Carroll, mais il a échappé à son créateur en débordant le cadre strictement livresque à l’intérieur duquel il avait été conçu. Vivant donc d’une vie autonome, qui plus que celle du personnage littéraire est à proprement parler celle du mythe. Tout le monde aujourd\'hui sur la planète connait Alice.', 1, 'EliottG'),
(5, 'Qu’est-ce que le JavaScript ?', 'JavaScript est le langage de programmation de référence sur le web. Le langage a été créé en 1995. Entre la date de sa création et aujourd’hui, il a beaucoup évolué. Aujourd’hui on peut aussi bien utilisé le JavaScript pour développer une application côté front que côté back-end grâce à l’apparition de Node.js.', '2020-04-29 12:19:46', 'Quel est l’objectif du JavaScript ?\r\n\r\nComme indiqué au-dessus, le JavaScript est devenu un langage très complet au fil du temps. Il peut aussi bien être utilisé par un développeur front-end avec les technologies HTML et CSS, ou bien par un développeur back-end grâce à Node.js et aux frameworks tels que Express.js pour créer une API.\r\n\r\n Quelle est la popularité du JavaScript en 2019 ?\r\n\r\nComme vous pouvez le voir dans le graphique ci-dessous, JavaScript est devenu le langage de programmation le plus populaire sur GitHub ces dernières années, et l’écart continue de se creuser en sa faveur d’année en année !', 1, 'Jackson'),
(6, 'Les langages de développement qui ont la cote en 2018', 'Les langages de développement sont tellement nombreux, avec des caractéristiques diverses, qu’il peut être difficile d\'en sélectionner quelques-uns de manière objective.', '2020-04-29 12:24:15', 'Quelles sont les tendances fortes en matière de langages de développement qui vont s’accroître au fil des 12 prochains mois ? Voici les langages les plus utilisés par les développeurs.\r\n\r\nSi vous êtes un développeur indépendant ou professionnel, la popularité d’un langage est un excellent critère de sélection. Mesuré par PYPL, l’indicateur de popularité PYPL permet d’observer l’évolution des tendances telle que la constance de Java pour les applications web et mobile (Android) ou la perte de vitesse du PHP. &quot;La force du PHP repose sur des frameworks performants comme Symfony qui n’a de limite que votre propre imagination&quot; explique Guillaume de l\'agence TheTribe, spécialiste de la techno Symfony.\r\n\r\nJavaScript arrive toujours dans le trio de tête, car il propose une interface simple et facile à manipuler avec une multitude de fonctionnalités au choix et des framewoks front. Il sera difficile de s’en passer pour le développement web tant il est complet. La grande majorité des développeurs savent coder dans ce langage. Il ne suffit donc plus de mentionner celui-ci dans son CV pour faire la différence, mais il est essentiel de le connaître pour mieux appréhender les nouveautés. \r\n\r\n', 1, 'EliottG'),
(7, 'Breaking Bad” : Pourquoi l\'épisode culte de la mouche est fondamental', 'Alors que la brillante série de Vince Gilligan s\'apprête à faire son grand retour sur Netflix au travers du long-métrage El Camino, retour sur le segment le plus mythique de Breaking Bad, épisode dont la singularité lui permet de transcender les enjeux du récit.', '2020-04-29 12:32:19', 'Avec le succès grandissant des plateformes de streaming, et la réaction nécessaire des chaînes de télévision pour y survivre, il est indéniable que le 21ème siècle a été jusque-là un champ d\'expérimentations merveilleux pour le format sériel. La série a gagné le respect, et suscite désormais la crainte, du cinéma. Si la frontière entre les deux est toujours plus floue (Twin Peaks : The Return, film de 18 heures ou série ?), la petite sœur du cinéma a enfin gagné ses lettres de noblesse, tout en marquant les spécificités dramatiques que lui permet sa durée.\r\n\r\nDans le domaine, Breaking Bad a été un véritable bouleversement, la confirmation que certaines trajectoires, comme celle de Walter White et son comparse Jesse Pinkman, ne pouvaient se faire correctement qu\'avec le temps. Le professeur de chimie devenant un baron de la drogue s\'est imposé dans nos vies au travers de cinq saisons exceptionnelles, nous embarquant avec lui dans un parcours fou et improbable, et pourtant si cohérent. On ne peut alors que se montrer curieux lorsque Netflix, après des années de rumeurs, annonce la sortie prochaine d\'El Camino, long métrage faisant suite aux mésaventures de Jesse, et réalisé par le showrunner de la série, Vince Gilligan.', 1, 'EliottG');

-- --------------------------------------------------------

--
-- Structure de la table user
--

CREATE TABLE user (
  ID int(11) NOT NULL,
  name varchar(255) NOT NULL,
  firstname varchar(255) NOT NULL,
  pseudo varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  creation_date datetime NOT NULL,
  role varchar(255) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table user
--

INSERT INTO user (ID, name, firstname, pseudo, password, creation_date, role) VALUES
(1, 'Geoffroy', 'Eliott', 'Administrateur', '$2y$10$ljJVs.EmoGiZ8y0eBmqATuhvJFPUakJWDsjobMZCCokSW9LhojJam', '2020-04-16 11:29:26', 'Admin'),
(2, 'Geoffroy', 'Eliott', 'Michel-Alain', '$2y$10$uiZbhkIDc1s12zPCPkxWA.ZAos6yP.mC7OmQddCrrMaITAWhmhAKS', '2020-04-21 14:35:01', 'User'),
(3, 'Geoffroy', 'Eliott', 'Conj', '$2y$10$1ppihjODY0SokLsU87n20O8/D9wDbgudCHAcS63QB2grSaNszCEVi', '2020-04-27 15:50:46', 'User'),
(4, 'Geoffroy', 'Eliott', 'Test', '$2y$10$RZ.2W.pJAaXUQNTncqPXr.wZ7WfOiOoMCHlAjp75sp8gbR6fgNLti', '2020-04-28 14:29:33', 'User'),
(5, 'Eliott', 'Geoffroy', 'egegeg', '$2y$10$ghEndB85QArEBCgHx7Pi1.e9oPc7O57jbnFFhJ.AklbFgAyHFg0gu', '2020-04-28 19:15:27', 'User');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table comment_post
--
ALTER TABLE comment_post
  ADD PRIMARY KEY (ID),
  ADD KEY post_id (post_id,user_id),
  ADD KEY comment_post_ibfk_1 (user_id);

--
-- Index pour la table post
--
ALTER TABLE post
  ADD PRIMARY KEY (ID),
  ADD UNIQUE KEY ID (ID),
  ADD KEY user_id (user_id);

--
-- Index pour la table user
--
ALTER TABLE user
  ADD PRIMARY KEY (ID),
  ADD UNIQUE KEY pseudo (pseudo);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table comment_post
--
ALTER TABLE comment_post
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table post
--
ALTER TABLE post
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table user
--
ALTER TABLE user
  MODIFY ID int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table comment_post
--
ALTER TABLE comment_post
  ADD CONSTRAINT comment_post_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (ID) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT comment_post_ibfk_2 FOREIGN KEY (post_id) REFERENCES post (ID) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table post
--
ALTER TABLE post
  ADD CONSTRAINT post_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (ID) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
