-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2018 at 07:32 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sport`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'Wtf', 15, 5, '2018-02-22 20:42:37', '2018-02-22 20:42:37'),
(17, 'I got ya!', 15, 2, '2018-02-22 22:03:07', '2018-02-23 19:15:31'),
(19, 'Good Job boys!', 13, 2, '2018-02-24 01:31:25', '2018-02-24 01:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_02_20_035040_create_posts_table', 1),
(4, '2018_02_21_073535_create_comments_table', 1),
(5, '2018_02_21_235749_create_types_table', 1),
(6, '2018_02_22_000237_create_user_type_table', 1),
(7, '2018_02_22_054712_create_tags_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `photo`, `title`, `body`, `tag`, `user_id`, `created_at`, `updated_at`) VALUES
(13, 'article1.jpg', 'Neymar Will Have Surgery on Fractured Foot', 'PARIS — Neymar will have surgery in Brazil on his fractured foot, ruling him out of Paris Saint-Germain’s Champions League match next week against Real Madrid.\r\n\r\n A day after P.S.G. Coach Unai Emery denied reports that Neymar, a star for the Brazilian national team, would have an operation, the club walked back that statement on Wednesday and announced that he would have surgery. “After an initial treatment period of three days in line with a strict medical protocol, a joint decision has been taken between the medical staffs of both Paris Saint-Germain and the Brazil national team,” P.S.G. said in a statement.\r\n\r\nP.S.G. broke soccer’s transfer record last year by paying Barcelona 222 million euros ($260 million) to buy Neymar, in part with the hope that he would lead the club to the Champions League title. \r\n\r\nBut those hopes took a massive blow when he was injured on Sunday during P.S.G.’s 3-0 win over Marseille.\r\n\r\nTests later revealed he had a cracked fifth metatarsal in his right foot along with an ankle injury. P.S.G., the runaway French league leaders, said that “in accordance with the player, it has been decided that Neymar Jr. will undergo surgery in Brazil at the end of this week. He will be operated on by Dr. Rodrigo Lasmar, accompanied by Professor Saillant, representing PSG.” \r\n\r\nGerard Saillant has operated on high-profile athletes, including the former Brazil striker Ronaldo. After Emery said on Tuesday that Neymar had a chance to recover in time to play at the Parc des Princes against Madrid, the player’s father, Neymar Santos, had cast a doubt on whether his son would participate in the match, saying he believed Neymar would need surgery. \r\n\r\nThere were concerns that Neymar could aggravate the injury and potentially threaten his chances of playing in the World Cup this summer if he continued playing for P.S.G. instead of having surgery. Continue reading the main story Metatarsal injuries are common in soccer and can sometimes lead to a lengthy absence. P.S.G., which beat Marseille by 3-0 in a French Cup match on Wednesday without their star striker, did not say how long Neymar would be sidelined, but his father estimated that the recovery would take “between six and eight weeks.”', 'Soccer', 2, '2018-02-22 18:40:06', '2018-02-28 22:15:44'),
(14, 'article5.jpg', 'Warriors Wake From Slumber Just in Time to Crush the Knicks', 'The youthful Knicks put up a surprisingly stiff fight against the mighty Golden State Warriors in the first half on Monday night, sneaking into the locker room with a 64-63 lead at Madison Square Garden.\r\n\r\nBut it took just 41 seconds in the second half for the Warriors to retake the lead, and a subsequent 11-0 run started what would be a machine-like third quarter for the Warriors. They outscored the Knicks by 39-18 in the period en route to an eventual 125-111 victory. What had looked like a close game ended with Stephen Curry and Kevin Durant cheering on their teammates from the sidelines as they sat out the entire fourth quarter.\r\n\r\nGolden State’s Klay Thompson led all scorers with 26 points on 9 of 13 shooting, and all five of the Warriors’ starters scored in double-digits. Curry finished with 21 points, 5 rebounds and 5 assists, Durant had 22 points and 9 rebounds, and the team shot 15 of 31 from 3-point range.\r\n\r\nIt was Golden State’s 35th game this season in which the team had 30 or more assists, and the team’s record improved to 31-4 in such games.\r\n\r\nThe story of this game, however, was Golden State’s second-half defense. After initially struggling to contain a free-flowing Knicks offense, the Warriors completely shut things down after halftime. They harassed the Knicks on both ends of the court, with Draymond Green, JaVale McGee and Durant largely leading what was a teamwide effort.\r\n\r\nMudiay got plenty of help from Trey Burke and Frank Ntilikina, who finished with 18 and 13 points, but the Knicks’ offense took a major hit when Michael Beasley was forced out of the game late in the first half so he could be treated for a bad cut to his eyebrow sustained when Green’s elbow hit his face as the two fought for space under the basket.\r\n\r\nBeasley, who received five stitches according to the Knicks’ medical staff, returned in the second half but finished the game with just 2 points.\r\n\r\nThe win was the second in a row for the Warriors, who briefly moved back into a tie at the top of the Western Conference standings before the Houston Rockets regained their half-game lead with a win over the Utah Jazz later Monday. The Knicks lost for the 10th time in 11 games.', 'Basketball', 5, '2018-02-22 19:53:47', '2018-02-28 21:03:15'),
(15, 'article4.jpg', 'Marion Bartoli Is Nearly Back', 'Indeed, in 14 years on the professional tennis tour, Bartoli was not known for conformity. In addition to that odd serve, she had a rare, two-handed forehand and relied on a series of unusual training methods that involved elastic ropes tied from torso to limbs.\r\n\r\nHer latest unconventional move is a comeback to the tour after four and a half years of a retirement that was at times agonizing and frightening. Her return will begin at the Tie Break Tens, a one-day exhibition tournament on Monday at Madison Square Garden, where she will join Serena Williams, Venus Williams and five other players.\r\n\r\nBartoli pounded weights and spent two weeks training at 9,800 feet in the French Alps, which she said was exhausting but critical to her revival. Her stamina and muscle structure have largely returned, she said, and although she is still not fully fit, she has gotten close enough to play.\r\n\r\nTraining has shifted back to Paris, where she has played regularly against Ugo Humbert, a 19-year-old Frenchman ranked No. 331 on the ATP Tour. She also reported feeling no pain in her shoulder.\r\n\r\nBartoli spent the last few months learning new mechanics with her serve, which was the real beginning for her comeback.\r\n\r\nIn her old service motion, her right arm remained stiff as she brought it around to strike the ball, mostly without bending her elbow. Now, she said, she has learned to bend the elbow in a way to take pressure off her shoulder. The velocity is steadily increasing, but it remains a challenge.\r\n\r\n“It’s not easy to learn something new at 32 years of age,” she said.\r\n\r\nWhen Bartoli returns — either at Madison Square Garden or another tournament — at least one thing will look the same: the two-handed forehand that has defined her game.\r\n\r\n“That hasn’t changed,” she said, “and I don’t think it will ever change.”', 'Tennis', 5, '2018-02-22 20:30:44', '2018-02-28 21:01:47'),
(16, 'article6.jpg', 'N.B.A. Draft: Analysis of Every Pick and Trade in Round 1', 'The story of the 2017 N.B.A. draft was youth, with a record-setting 16 freshmen taken in the first 30 picks, compared with just two seniors. Washington’s Markelle Fultz (No. 1, Philadelphia) got things rolling as the leader of an elite group of young point guards that also includes Lonzo Ball (No. 2, Lakers), De’Aaron Fox (No. 5, Sacramento) and Dennis Smith (No. 9, Dallas). And after the point guards were off the board, the night was spent discussing the league’s current favorite attributes: length and long-range shooting.\r\n\r\n While the various young players selected all represent huge potential, the Minnesota Timberwolves may have been the biggest winners thanks to a trade for the veteran All-Star Jimmy Butler of the Chicago Bulls. Butler barely squeaked into the first round when he came out of Marquette in 2011, but Coach Tom Thibodeau molded him into one of the game’s most spectacular two-way players. Butler and Thibodeau will now be reunited following a trade in which the Timberwolves got Butler and the draft rights to Creighton’s Justin Patton in exchange for Zach LaVine, Kris Dunn and the draft rights to Arizona’s Lauri Markkanen.', 'Basketball', 6, '2018-02-24 04:36:46', '2018-02-28 22:13:55'),
(17, 'article2.jpg', 'Roger Federer, Wimbledon’s Constant, Is Turning Back Time', 'WIMBLEDON, England — Roger Federer is back in the second week at Wimbledon, and he has his usual companions.\r\n\r\nThe rest of the Big Four — Novak Djokovic, Andy Murray and Rafael Nadal — are right there with him. The good old days seem as fresh as ever.\r\n\r\n“I think one of those four men will hold up the trophy again,” said Boris Becker, a three-time Wimbledon champion who coached Djokovic in 2015 and 2016.\r\n\r\nFederer, 35, is the senior club member by almost five years. He is the only one who has four young children, all of whom are staying with him and his wife, Mirka, in Wimbledon Village. He is the only one battling a cold in the middle of an unusually torrid English summer.\r\n\r\n“I’ve almost had more problems with my cold than the opponents, even though there were some problems today, and a tiebreaker is always a bit delicate,” Federer said Saturday, still sounding congested after defeating Mischa Zverev in straight sets in the third round.\r\n\r\nFederer soon appeared on the bridge, holding his arms wide and smiling down at a following he has acquired over 19 Wimbledons.\r\n\r\nHe exited the stage, but the crowd wanted more and began chanting, “Roger.” Marcus Willis, the unlikely British qualifier who reached the main draw in singles last year and is still in contention in doubles this year, seized the moment instead: He walked onto the bridge and did his best arms-outstretched Federer impression for the fans.\r\n\r\n“You’ve got to milk it while you can,” Willis said with a wink as he walked toward the players’ garden.\r\n\r\nFor Federer, however, the big moment never seems to end.', 'Tennis', 6, '2018-02-24 04:38:04', '2018-02-28 20:55:59'),
(18, 'article3.jpg', 'At Manchester United, a Win to Celebrate but Not to Savor', 'MANCHESTER, England — Emblazoned on the great glass frontage of Old Trafford’s East Stand, sandwiched between the soft bronze statue of Sir Matt Busby and the neon red letters of the club’s name, was proof of Manchester United’s complete conversion to the digital age.\r\n\r\n This week, United launched its own YouTube channel. To celebrate, the club placed a vast YouTube logo on its stadium. Underneath it, towering over Busby’s head, was the page’s address. Every other Premier League club has long been on the platform. Now, at last and in style, United has succumbed to the future. For a team that has long been so pioneering and so groundbreaking off the field, United has always seemed curiously hesitant when it comes to social media. \r\n\r\nThis was the first club, after all, to realize the potential in soccer’s emerging markets, and then to work out how to monetize that popularity. There are still prizes to play for, of course: Both United and Chelsea might soon reach the quarterfinals of the Champions League; one or both might return to that stage next year, too. But if the worst happens, then what can Mourinho and Conte fall back on? For Klopp and Pochettino — neither of whom, it should be said, has won a trophy with his current team — there is a style and a swagger, a sense that these are teams fans want to watch, teams that make waves, and go viral. \r\n\r\nNeither United nor Chelsea can say the same. Both have fallen behind City — that much is clear — but in a sense, they are losing ground to Liverpool and Spurs, too, if only in intangibles: They are not as compelling, not as entertaining, not as much fun. \r\n\r\nThere is a desire, at times, to skip ahead. That is at odds with the demands of the YouTube age. This is the world United has stepped into. Now, it is at its mercy.', 'Soccer', 6, '2018-02-24 04:38:53', '2018-02-28 22:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(13, 1),
(14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Basketball', '2018-02-22 05:52:29', '2018-02-22 05:52:29'),
(2, 'Soccer', '2018-02-22 05:52:50', '2018-02-22 05:52:50'),
(3, 'Tennis', '2018-02-22 05:52:50', '2018-02-22 05:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `created_at`, `updated_at`, `name`, `description`) VALUES
(4, '2018-02-23 05:10:26', '2018-02-23 05:10:26', 'Admin', 'An Admin'),
(5, '2018-02-23 05:10:26', '2018-02-23 05:10:26', 'Author', 'An Author'),
(6, '2018-02-23 05:10:45', '2018-02-23 05:10:45', 'User', 'A User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Fedricco', 'fedriccorabaya@gmail.com', '$2y$10$bbaz4XgXgNV0cJhzycu7TuL6awRDDokVtU1dcOxbCg5t2zUYmS7TC', 'user', 'HCTaV3T7CNwNNWT11mzbQ0qNf7bofHEijd3BBE8VolkqDmOKet3BIEcNAvIa', '2018-02-21 20:22:48', '2018-02-21 20:22:48'),
(5, 'Top Admin', 'admin@example.com', '$2y$10$Hd1ZW30fG5/NpQJSAyvAV.o/Lb167NJ2NaYcJHfI8OR4HJDni/YGC', 'admin', 'iSKma4Yk5idrG3j7UyFqA7AEDBXTXNqo3k8XIL2oKqruFtViRS8pl4vRRcTJ', '2018-02-22 19:52:49', '2018-02-22 19:52:49'),
(6, 'Admin', 'admin2@example.com', '$2y$10$apbwVlfBlX7gXl98..6V4Oyw2IFt8OrNgudJx5iqpaBoAgyFN9NrK', 'admin', 'Sg2emgIVOZ2J6E5hEodKRBI6XiE2vHsU3BKs5QKYGc4IlURYFypW5mbHpQ7h', '2018-02-22 22:01:13', '2018-02-22 22:01:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `created_at`, `updated_at`, `user_id`, `type_id`) VALUES
(3, '2018-02-23 05:11:45', '2018-02-23 05:11:45', 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`post_id`,`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_type_user_id_foreign` (`user_id`),
  ADD KEY `user_type_type_id_foreign` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `user_type`
--
ALTER TABLE `user_type`
  ADD CONSTRAINT `user_type_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_type_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
