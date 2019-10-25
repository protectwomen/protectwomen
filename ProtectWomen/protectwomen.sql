-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Paź 2019, 14:17
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `protectwomen`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `userId` int(10) UNSIGNED NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `post`
--

INSERT INTO `post` (`id`, `userId`, `content`, `data`) VALUES
(1, 1, 'testowy komentarz', '2019-10-24'),
(2, 1, 'testowy komentarz ktory ma minimum 20 znakow', '2019-10-24'),
(3, 1, 'inny testowy komentarz, ktory tez posiada minimum 20 znakow', '2019-10-24');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `userName` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `gender` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `userName`, `gender`, `email`, `password`) VALUES
(1, 'admin', 'mezczyzna', 'testowy@email.com', '1efef3d9bb589dc1747c6fe2deb3e8da3cfc3ca9'),
(2, 'Rafalala', 'kobieta', 'email@gmail.com', '1efef3d9bb589dc1747c6fe2deb3e8da3cfc3ca9');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
