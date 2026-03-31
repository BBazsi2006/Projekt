-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2026. Már 31. 19:08
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `nonprofit`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adomanynevek`
--

CREATE TABLE `adomanynevek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `adomanynevek`
--

INSERT INTO `adomanynevek` (`id`, `nev`) VALUES
(19, 'Ágynemű csomag'),
(10, 'Babaápolási csomag'),
(7, 'Bútor'),
(2, 'Élelmiszercsomag'),
(6, 'Elsősegély készlet'),
(18, 'Gyógyszer csomag'),
(16, 'Háztartási csomag'),
(5, 'Higiéniai csomag'),
(3, 'Játék készlet'),
(15, 'Konyhai eszköz csomag'),
(8, 'Könyvcsomag'),
(20, 'Lakásfelszerelési csomag'),
(9, 'Laptop'),
(13, 'Nyári ruhacsomag'),
(1, 'Ruhacsomag'),
(14, 'Sportfelszerelés'),
(4, 'Takaró'),
(11, 'Tanszercsomag'),
(12, 'Téli ruhacsomag'),
(17, 'Tisztítószer csomag');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adomanyok`
--

CREATE TABLE `adomanyok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `darabszam` int(11) NOT NULL,
  `adomanyNev` bigint(20) UNSIGNED NOT NULL,
  `anyag` bigint(20) UNSIGNED NOT NULL,
  `adomanyozoId` bigint(20) UNSIGNED NOT NULL,
  `kep` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `adomanyok`
--

INSERT INTO `adomanyok` (`id`, `darabszam`, `adomanyNev`, `anyag`, `adomanyozoId`, `kep`) VALUES
(1, 2, 1, 1, 1, 'ruha.jpg'),
(2, 1, 2, 6, 2, 'konzervek.jpg'),
(3, 0, 3, 2, 3, 'jatek.jpg'),
(4, 6, 4, 1, 4, 'takaro.jpg'),
(5, 1, 5, 10, 5, 'csomag.jpg'),
(6, 1, 6, 5, 6, 'lada.jpg'),
(7, 1, 7, 3, 7, 'fiokos.jpg'),
(8, 1, 8, 4, 8, 'konyv.jpg'),
(9, 1, 9, 7, 9, 'laptop.jpg'),
(10, 1, 11, 15, 10, 'iskolai.jpg');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adomanyozok`
--

CREATE TABLE `adomanyozok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `ember` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `adomanyozok`
--

INSERT INTO `adomanyozok` (`id`, `nev`, `email`, `jelszo`, `ember`) VALUES
(1, 'Kiss Anna', 'kiss.anna@gmail.com', 'BlueSky24', 2),
(2, 'Nagy Péter', 'nagy.peter@gmail.com', 'River89', 2),
(3, 'Szabó Lilla', 'szabo.lilla@gmail.com', 'Green77', 2),
(4, 'Tóth Márk', 'toth.mark@gmail.com', 'Stone2023', 2),
(5, 'Varga Eszter', 'varga.eszter@gmail.com', 'Moon91', 2),
(6, 'Kovács Bence', 'kovacs.bence@gmail.com', 'Cloud88', 2),
(7, 'Horváth Dóra', 'horvath.dora@gmail.com', 'Sun1995', 2),
(8, 'Molnár Gergő', 'molnar.gergo@gmail.com', 'Hill90', 2),
(9, 'Farkas Zsófia', 'farkas.zsofia@gmail.com', 'Light2022', 2),
(10, 'Balogh Tamás', 'balogh.tamas@gmail.com', 'Road85', 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `alapitvanyok`
--

CREATE TABLE `alapitvanyok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cegnev` varchar(255) NOT NULL,
  `helyszin` varchar(255) NOT NULL,
  `telszam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `ember` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `alapitvanyok`
--

INSERT INTO `alapitvanyok` (`id`, `cegnev`, `helyszin`, `telszam`, `email`, `jelszo`, `ember`) VALUES
(1, 'Remény Hídja Alapítvány', 'Budapest', '36301234567', 'kapcsolat@remenyi-hidja.hu', 'remenyi123', 1),
(2, 'Zöld Jövő Egyesület', 'Debrecen', '+36302345678', 'info@zoldjovo.hu', 'zoldjovo456', 1),
(3, 'GyermekMosoly Alapítvány', 'Szeged', '+36303456789', 'hello@gyermekmosoly.hu', 'mosoly789', 1),
(4, 'Mancsmentő Alapítvány', 'Pécs', '+36304567890', 'segitseg@mancsmento.hu', 'mancsmento321', 1),
(5, 'Mindennapi Kenyér Alapítvány', 'Győr', '+36305678901', 'iroda@mindennapikenyer.hu', 'kenyer654', 1),
(6, 'Esély a Holnapért', 'Miskolc', '+36306789012', 'info@eselyaholnapert.hu', 'holnap987', 1),
(7, 'Új Élet Alapítvány', 'Kecskemét', '+36307890123', 'kapcsolat@uj-elet.hu', 'ujelet159', 1),
(8, 'Biztonságos Otthon', 'Székesfehérvár', '+36308901234', 'info@biztonsagosotthon.hu', 'otthon753', 1),
(9, 'Tiszta Forrás Egyesület', 'Nyíregyháza', '+36309012345', 'iroda@tisztaforras.hu', 'forras852', 1),
(10, 'Szívvel-Lélekkel Alapítvány', 'Eger', '+36301122334', 'hello@szivvellelekkel.hu', 'szivvel123', 1),
(11, 'Admin', 'Budapest', '+36300000000', 'admin@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `anyagok`
--

CREATE TABLE `anyagok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nev` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `anyagok`
--

INSERT INTO `anyagok` (`id`, `nev`) VALUES
(12, 'Bőr'),
(15, 'Egyéb'),
(7, 'Elektronika'),
(3, 'Fa'),
(5, 'Fém'),
(10, 'Gumi'),
(9, 'Karton'),
(11, 'Kerámia'),
(2, 'Műanyag'),
(4, 'Papír'),
(6, 'Tartós élelmiszer'),
(1, 'Textil'),
(14, 'Újrahasznosított anyag'),
(8, 'Üveg'),
(13, 'Vegyes');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `emberek`
--

CREATE TABLE `emberek` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `emberek`
--

INSERT INTO `emberek` (`id`, `kategoria`) VALUES
(2, 'adomanyozo'),
(1, 'alapitvany');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kiszallitasok`
--

CREATE TABLE `kiszallitasok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alapitvanyId` bigint(20) UNSIGNED NOT NULL,
  `adomanyId` bigint(20) UNSIGNED NOT NULL,
  `mennyiseg` int(11) DEFAULT NULL,
  `megrendelesDatuma` date NOT NULL,
  `elszallitasDatuma` date NOT NULL DEFAULT current_timestamp(),
  `pontosCim` varchar(255) DEFAULT NULL,
  `teljesitve` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `kiszallitasok`
--

INSERT INTO `kiszallitasok` (`id`, `alapitvanyId`, `adomanyId`, `mennyiseg`, `megrendelesDatuma`, `elszallitasDatuma`, `pontosCim`, `teljesitve`) VALUES
(1, 1, 1, 1, '2024-01-10', '2024-01-15', 'Budapest', 1),
(2, 2, 2, 1, '2024-02-05', '2024-02-10', 'Debrecen', 1),
(3, 3, 3, 1, '2024-03-12', '2024-03-20', 'Szeged', 1),
(4, 4, 4, 1, '2024-04-01', '2024-04-06', 'Pécs', 1),
(5, 5, 5, 1, '2024-05-07', '2024-05-12', 'Győr', 1),
(6, 1, 6, 1, '2024-06-18', '2024-06-25', 'Miskolc', 0),
(7, 2, 7, 1, '2024-07-02', '2024-07-10', 'Kecskemét', 0),
(8, 3, 8, 1, '2024-08-09', '2024-08-14', 'Székesfehérvár', 0),
(9, 4, 9, 1, '2024-09-15', '2024-09-20', 'Nyíregyháza', 0),
(10, 5, 10, 1, '2024-10-01', '2024-10-08', 'Eger', 0),
(11, 1, 3, 1, '2026-03-29', '2026-04-01', 'Budapest', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- A tábla adatainak kiíratása `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2026_01_21_104944_create_embers_table', 1),
(2, '2026_01_21_105647_create_alapitvanies_table', 1),
(3, '2026_01_21_114908_create_adomanyozos_table', 1),
(4, '2026_01_21_115550_create_adomany_nevs_table', 1),
(5, '2026_01_21_120815_create_anyags_table', 1),
(6, '2026_01_22_071348_create_adomanies_table', 1),
(7, '2026_01_22_071907_create_kiszallitas_table', 1);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `adomanynevek`
--
ALTER TABLE `adomanynevek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adomanynevek_nev_unique` (`nev`);

--
-- A tábla indexei `adomanyok`
--
ALTER TABLE `adomanyok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adomanyok_adomanynev_foreign` (`adomanyNev`),
  ADD KEY `adomanyok_anyag_foreign` (`anyag`),
  ADD KEY `adomanyok_adomanyozoid_foreign` (`adomanyozoId`);

--
-- A tábla indexei `adomanyozok`
--
ALTER TABLE `adomanyozok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adomanyozok_email_unique` (`email`),
  ADD KEY `adomanyozok_ember_foreign` (`ember`);

--
-- A tábla indexei `alapitvanyok`
--
ALTER TABLE `alapitvanyok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alapitvanyok_cegnev_unique` (`cegnev`),
  ADD UNIQUE KEY `alapitvanyok_telszam_unique` (`telszam`),
  ADD UNIQUE KEY `alapitvanyok_email_unique` (`email`),
  ADD KEY `alapitvanyok_ember_foreign` (`ember`);

--
-- A tábla indexei `anyagok`
--
ALTER TABLE `anyagok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anyagok_nev_unique` (`nev`);

--
-- A tábla indexei `emberek`
--
ALTER TABLE `emberek`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emberek_kategoria_unique` (`kategoria`);

--
-- A tábla indexei `kiszallitasok`
--
ALTER TABLE `kiszallitasok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kiszallitasok_alapitvanyid_foreign` (`alapitvanyId`),
  ADD KEY `kiszallitasok_adomanyid_foreign` (`adomanyId`);

--
-- A tábla indexei `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `adomanynevek`
--
ALTER TABLE `adomanynevek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT a táblához `adomanyok`
--
ALTER TABLE `adomanyok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT a táblához `adomanyozok`
--
ALTER TABLE `adomanyozok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `alapitvanyok`
--
ALTER TABLE `alapitvanyok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `anyagok`
--
ALTER TABLE `anyagok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT a táblához `emberek`
--
ALTER TABLE `emberek`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `kiszallitasok`
--
ALTER TABLE `kiszallitasok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `adomanyok`
--
ALTER TABLE `adomanyok`
  ADD CONSTRAINT `adomanyok_adomanynev_foreign` FOREIGN KEY (`adomanyNev`) REFERENCES `adomanynevek` (`id`),
  ADD CONSTRAINT `adomanyok_adomanyozoid_foreign` FOREIGN KEY (`adomanyozoId`) REFERENCES `adomanyozok` (`id`),
  ADD CONSTRAINT `adomanyok_anyag_foreign` FOREIGN KEY (`anyag`) REFERENCES `anyagok` (`id`);

--
-- Megkötések a táblához `adomanyozok`
--
ALTER TABLE `adomanyozok`
  ADD CONSTRAINT `adomanyozok_ember_foreign` FOREIGN KEY (`ember`) REFERENCES `emberek` (`id`);

--
-- Megkötések a táblához `alapitvanyok`
--
ALTER TABLE `alapitvanyok`
  ADD CONSTRAINT `alapitvanyok_ember_foreign` FOREIGN KEY (`ember`) REFERENCES `emberek` (`id`);

--
-- Megkötések a táblához `kiszallitasok`
--
ALTER TABLE `kiszallitasok`
  ADD CONSTRAINT `kiszallitasok_adomanyid_foreign` FOREIGN KEY (`adomanyId`) REFERENCES `adomanyok` (`id`),
  ADD CONSTRAINT `kiszallitasok_alapitvanyid_foreign` FOREIGN KEY (`alapitvanyId`) REFERENCES `alapitvanyok` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
