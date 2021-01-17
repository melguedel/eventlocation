-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 17. Jan 2021 um 11:06
-- Server-Version: 5.7.24
-- PHP-Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `eventlocation`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `inhalt` text NOT NULL,
  `site_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `content`
--

INSERT INTO `content` (`id`, `title`, `inhalt`, `site_category`) VALUES
(1, 'Explore and enjoy', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis modi deleniti saepe ea cumque sunt, dolorem aperiam, consequuntur voluptate sed totam eaque tempora error sequi neque. Iste, corporis blanditiis. Quas, error ut. Maxime, voluptas similique dolores vero iusto itaque aliquid ratione adipisci sit! Distinctio nobis sequi dolor obcaecati porro quod. Praesentium quo repudiandae delectus sit. Fugiat in, harum inventore consequatur consequuntur recusandae delectus suscipit ex eligendi qui iste, voluptatem ipsum exercitationem veritatis? A, impedit? Expedita eveniet illum blanditiis ab laudantium assumenda saepe ipsa quos iure totam. Fugit qui molestiae commodi non illum labore, pariatur quae assumenda, doloribus recusandae accusantium consequatur voluptatem eaque aliquid totam maiores optio deserunt, autem beatae iusto dignissimos quod quis! Nesciunt rerum sapiente veniam iusto suscipit eveniet. Maxime culpa quam mollitia eius distinctio placeat atque, suscipit assumenda quis voluptate cum eum nesciunt dignissimos ad non error illum delectus eos ipsa architecto laborum ab quibusdam rerum doloribus. Dicta delectus minus non quo dolorum animi aperiam repudiandae, amet quos fuga corporis recusandae rem voluptatibus dignissimos possimus perspiciatis aspernatur atque tenetur mollitia, beatae quia exercitationem odit! Minus, nemo quia! Cumque repellat obcaecati placeat optio incidunt fuga adipisci at quibusdam beatae accusamus quod vitae sed aspernatur unde mollitia reprehenderit, distinctio rerum!\r\n', 'explore'),
(2, 'About this Location', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis modi deleniti saepe ea cumque sunt, dolorem aperiam, consequuntur voluptate sed totam eaque tempora error sequi neque. Iste, corporis blanditiis. Quas, error ut. Maxime, voluptas similique dolores vero iusto itaque aliquid ratione adipisci sit! Distinctio nobis sequi dolor obcaecati porro quod. Praesentium quo repudiandae delectus sit. Fugiat in, harum inventore consequatur consequuntur recusandae delectus suscipit ex eligendi qui iste, voluptatem ipsum exercitationem veritatis? A, impedit? Expedita eveniet illum blanditiis ab laudantium assumenda saepe ipsa quos iure totam. Fugit qui molestiae commodi non illum labore, pariatur quae assumenda, doloribus recusandae accusantium consequatur voluptatem eaque aliquid totam maiores optio deserunt, autem beatae iusto dignissimos quod quis! Nesciunt rerum sapiente veniam iusto suscipit eveniet. Maxime culpa quam mollitia eius distinctio placeat atque, suscipit assumenda quis voluptate cum eum nesciunt dignissimos ad non error illum delectus eos ipsa architecto laborum ab quibusdam rerum doloribus. Dicta delectus minus non quo dolorum animi aperiam repudiandae, amet quos fuga corporis recusandae rem voluptatibus dignissimos possimus perspiciatis aspernatur atque tenetur mollitia, beatae quia exercitationem odit! Minus, nemo quia! Cumque repellat obcaecati placeat optio incidunt fuga adipisci at quibusdam beatae accusamus quod vitae sed aspernatur unde mollitia reprehenderit, distinctio rerum!\r\n', 'home'),
(3, 'Contact', 'Do you have any questions? Please get in touch with us! We are looking forward to hear from you!&nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sapiente nam dolores perferendis, quo deserunt dicta veritatis totam atque nulla ea animi quam rerum expedita optio reprehenderit voluptate vero odit.\r\n', 'contact');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `guestbook`
--

INSERT INTO `guestbook` (`id`, `username`, `email`, `time`, `message`) VALUES
(1, 'NicoleMR', 'nicky.k@gmail.com', '2020-12-20 17:49:40', 'This was the absolute perfect venue, they took all of our ideas and made it the perfect night. Food and drinks were amazing and the atmosphere cannot be beat. We loved our experience planning with all of the staff. They were amazing. Highly recommend!'),
(2, 'Meghan', 'meg.H@yahoo.com', '2020-12-20 18:54:14', 'Crystal Lake is a beautiful venue! They have exposed brick, wooden accents & twinkling lights. We did not need much decor to showcase the natural beauty of this place. Not only is it a picture perfect view, the staff is amazing there!'),
(7, 'MinnieMouse', 'minnie@mouse.com', '2020-12-22 17:58:23', 'What a wonderful location! We enjoyed the concert very much!'),
(9, 'Walter White', 'heisenberg@cook.com', '2020-12-22 18:12:53', 'Recommend this place! I did a cooking show and invited 200 people. Very fun!'),
(18, 'Luke', 'skywalker@yahoo.co', '2020-12-28 15:21:19', 'They should have a greater variety in beers'),
(19, 'Gr00t', 'grootie@earth.yahoo', '2021-01-04 14:15:30', 'I am Groot');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(255) NOT NULL,
  `user_category` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `gender`, `user`, `mail`, `time`, `password`, `user_category`) VALUES
(1, 'other', 'admin', 'admin@admin.ch', '2021-01-04 14:19:15', '$2y$10$SJNcFc.inbSjzP6GFHEeW.dPOQsiOAQkxa/Bbuifm1pF1aY3V8CGa', 'admin'),
(5, 'female', 'mel', 'straying.star@gmx.ch', '2020-12-30 18:55:16', '$2y$10$xeQgrxMshaW7a7raScr5F.dkxcF/GYE/1TQPGx7/FdxU2IxsThdVO', 'user'),
(7, 'male', 'WilhelmTell', 'willieT@apple.com', '2020-12-30 18:55:22', '$2y$10$mrjC8KIBN1.qy3nFWOoWxe5OAMdnuyl.xQBpgqH10p7zz9PuZ6JD6', 'user'),
(8, 'female', 'Layla', 'l.sky@blah.ch', '2020-12-30 18:55:36', '$2y$10$siN.IgbWpRe9I8zEALkVG.jEyBkCEnVVtSNBQzYD9YRz2kyxmeuFW', 'user'),
(9, 'male', 'Luke', 'luke.sky@blah.ch', '2020-12-30 18:55:30', '$2y$10$.Sa5Bh06j7yJ9jlIZOgo3OyDAMgmdVT5Y96UykK1.7BR5FnBHztnu', 'user'),
(10, 'female', 'Sailor Moon', 'moonpower@stars.ch', '2021-01-17 10:37:31', '$2y$10$T.fsxaQgUfloogVWrzQ6LuAugmiVpDb18NXjY3SiyL0bQonHXbhhW', 'user');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
