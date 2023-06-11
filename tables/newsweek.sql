-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 11, 2023 at 05:39 PM
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
-- Database: `newsweek`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsweek`
--

CREATE TABLE `newsweek` (
  `id` int(11) NOT NULL,
  `datum` varchar(32) CHARACTER SET utf8 COLLATE utf8_croatian_ci NOT NULL,
  `naslov` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `sazetak` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `tekst` text CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `slika` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `kategorija` varchar(64) CHARACTER SET latin2 COLLATE latin2_croatian_ci NOT NULL,
  `arhiva` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `newsweek`
--

INSERT INTO `newsweek` (`id`, `datum`, `naslov`, `sazetak`, `tekst`, `slika`, `kategorija`, `arhiva`) VALUES
(2, '07.06.2023.', 'Bill Maher Tears Into Restrictive New Anti-Abortion Laws', 'Comedian Bill Maher used the opening monologue of Friday\'s Real Time to talk about the spate of new, highly restrictive anti-abortion laws being passed in states like Georgia, Alabama, and Missouri. He warned these states that they may end up driving younger women away, resulting in a \"womb drain.\"', 'omedian Bill Maher used the opening monologue of Friday\'s Real Time to talk about the spate of new, highly restrictive anti-abortion laws being passed in states like Georgia, Alabama, and Missouri. He warned these states that they may end up driving younger women away, resulting in a \"womb drain.\"\r\n\r\n\"This week was all about the long game for Republicans coming to fruition now,\" said Maher about the new pieces of legislation that seek to outlaw most abortions in affected states. \"Fetus: Endgame would be the movie we\'re seeing.\"\r\n\r\nDescribing what he saw as a contest between right-leaning states to see \"who could be more hardcore on abortion,\" Maher listed off various legislative attempts to restrict a woman\'s right to the procedure, starting with an actual example and then spinning out into satire.\r\n\r\n\"Georgia made it illegal after six weeks -- women don\'t even know they\'re pregnant sometimes at six weeks,\" noted Maher. \"Alabama made it illegal at conception. Mississippi is thinking about making it illegal when you swipe right on Tinder. Arkansas now says any woman not committing incest must start committing incest; if you can not afford an uncle, one will be provided for you.\"', 'maher.jpg', 'us', 0),
(3, '07.06.2023.', 'John McaFee is Running for President and Wants You to \'Wake the ', 'Software entrepreneur John McAfee has been arrested in Spain on charges of tax evasion from the U.S. Department of Justice (DOJ), pending extradition.', 'Software entrepreneur John McAfee has been arrested in Spain on charges of tax evasion from the U.S. Department of Justice (DOJ), pending extradition.\r\n\r\nThe DOJ announced the charges on Monday, while the Securities and Exchange Commission (SEC) filed parallel civil charges against the businessman, after he allegedly failed to declare earnings that amounted to millions of dollars.\r\n\r\nThe indictment says that McAfee hid millions in income from from the Internal Revenue Service, made from promoting cryptocurrencies, consulting work, speaking engagements, and selling the rights to his life story for a documentary.', 'mcafee.jpg', 'us', 0),
(4, '07.06.2023.', 'John Mcafee Is Running for President and<br> Wants You to \'Wake ', 'John Mcafee Is Running for President and<br> Wants You to \'Wake the F*** Up\'', 'Alongside this, the SEC\'s complaint alleges that \"McAfee promoted multiple ICOs on Twitter,\" and that he was \"pretending to be impartial and independent even though he was paid more than $23 million in digital assets for the promotions.\"\r\n\r\nAn initial coin offering (ICO) is a cryptocurrency variation of an initial public offering (IPO) and a means to raise money.\r\n\r\nProsecutors have also alleged that he used bank and cryptocurrency accounts in others\' names to hide income from 2014 to 2018.', 'mcafee.jpg', 'us', 0),
(5, '07.06.2023.', 'Eurovision 2019: Israelis and Palestinians Fight to Be Heard', 'International performers have gathered in Tel Aviv for one of the world\'s most popular talent shows, but the 2019 Eurovision Song Contest? comes after a spike in violence that has defined the decades-long conflict between Israelis and Palestinians.', 'International performers have gathered in Tel Aviv for one of the world\'s most popular talent shows, but the 2019 Eurovision Song Contest? comes after a spike in violence that has defined the decades-long conflict between Israelis and Palestinians.\r\n\r\nThe singing contest is just one of many high-profile events occurring in the Middle East this May, a month marked with a great deal of history for Israel, a young country with borders that have still yet to be defined. On Tuesday, Israel celebrated its 71st Independence Day, marking the beginning of the world\'s only Jewish-majority country. On Wednesday, Palestinians also recognized the 71st anniversary of the Nakba, referring to the \"catastrophe\" ensuing from the mass displacement of Palestinians that reflected a very different history of Israel\'s founding in 1948.\r\n\r\nThe dueling narratives have become an intrinsic part of Israel\'s image, both at home and abroad, and clashes between the two sides turned fatal earlier this month. Several Palestinians were killed while demonstrating at the border of the Gaza Strip and in airstrikes, to which Islamist Palestinian militant group Hamas responded with its biggest barrage of rockets against Israel since the two sides went to war in 2014. Israel responded with its own massive show of force, causing death and destruction in new airstrikes on the small Palestinian-controlled enclave.\r\n\r\nThen, however, came a quick calm, a rare occurrence in the storied Israeli-Palestinian conflict. And while Eurovision may come to dominate international coverage of Israel on Saturday, at home, peace is as far away as ever.', 'eurovision.jpg', 'world', 0),
(6, '08.06.2023.', 'Could U.S. Defeat Iran\'s Navy? This Exercise Shows War Would Not', 'The United States is widely cited as the world\'s foremost military power, but the country has a spotty record when it comes to asymmetrical warfare. Now-infamous war games conducted nearly 17 years ago showed a maritime matchup against tactics similar to those of Iran would likely prove extremely deadly for the Navy.', 'he United States is widely cited as the world\'s foremost military power, but the country has a spotty record when it comes to asymmetrical warfare. Now-infamous war games conducted nearly 17 years ago showed a maritime matchup against tactics similar to those of Iran would likely prove extremely deadly for the Navy.\r\n\r\nA new wave of tensions between longtime foes Washington and Tehran was set off by alleged reports of Iran pursuing new missile activity in the region, just as it prepared to commemorate the U.S.\' unilateral pullout from a 2015 nuclear deal by stepping back from some of its own commitments to the historic agreement. Among these alleged threats were satellite imagery purporting to show small traditional sailing vessels known as dhows being fitted with cruise missiles.\r\n\r\nIran\'s ambassador to the United Nations Majid Takht Ravanchi dismissed these assessments, telling CBS News on Friday that \"we do not fire missiles out of small boats.\" He rejected such \"fake intelligence\" as deliberate attempts to set up the pretext for conflict?not unlike the false claims that led up to the 2003 invasion of Iraq.\r\n\r\nIran\'s two maritime forces?its conventional navy and the navy of the elite Revolutionary Guards?do, however, maintain a missile-equipped fleet of fast attack craft that it claims could take out even the most advanced U.S. warships although some have dismissed the capabilities of such assets. In a mixed computer and live-fire simulation in 2002, a \"Red Team\" armed with vessels and strategies not unlike those known to be employed by Iran once pummeled a \"Blue Team\" representing the U.S. to the point where the Pentagon needed to step in to ensure a friendly victory.', 'navy.jpg', 'world', 0),
(7, '08.06.2023.', 'Could U.S. Defeat Iran\'s Navy? This Exercise Shows War Would Not', 'he United States is widely cited as the world\'s foremost military power, but the country has a spotty record when it comes to asymmetrical warfare. Now-infamous war games conducted nearly 17 years ago showed a maritime matchup against tactics similar to those of Iran would likely prove extremely deadly for the Navy.', 'A new wave of tensions between longtime foes Washington and Tehran was set off by alleged reports of Iran pursuing new missile activity in the region, just as it prepared to commemorate the U.S.\' unilateral pullout from a 2015 nuclear deal by stepping back from some of its own commitments to the historic agreement. Among these alleged threats were satellite imagery purporting to show small traditional sailing vessels known as dhows being fitted with cruise missiles.\r\n\r\nIran\'s ambassador to the United Nations Majid Takht Ravanchi dismissed these assessments, telling CBS News on Friday that \"we do not fire missiles out of small boats.\" He rejected such \"fake intelligence\" as deliberate attempts to set up the pretext for conflict?not unlike the false claims that led up to the 2003 invasion of Iraq.\r\n\r\nIran\'s two maritime forces?its conventional navy and the navy of the elite Revolutionary Guards?do, however, maintain a missile-equipped fleet of fast attack craft that it claims could take out even the most advanced U.S. warships although some have dismissed the capabilities of such assets. In a mixed computer and live-fire simulation in 2002, a \"Red Team\" armed with vessels and strategies not unlike those known to be employed by Iran once pummeled a \"Blue Team\" representing the U.S. to the point where the Pentagon needed to step in to ensure a friendly victory.', 'navy.jpg', 'world', 0),
(9, '08.06.2023.', 'Zagreb12321312', '123123124213fsdfADFdF', 'Ovdje uistinu treba pravi tekst', 'navy.jpg', 'us', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsweek`
--
ALTER TABLE `newsweek`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsweek`
--
ALTER TABLE `newsweek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
