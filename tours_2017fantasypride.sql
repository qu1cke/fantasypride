SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE `tours_2017fantasypride` (
  `guestid` int(6) UNSIGNED ZEROFILL NOT NULL,
  `registered` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `eventid` varchar(16) NOT NULL,
  `firstname` varchar(64) NOT NULL,
  `lastname` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `comment` text NOT NULL,
  `userid` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- INDEXES
ALTER TABLE `tours_2017fantasypride`
  ADD PRIMARY KEY (`guestid`);

-- AUTO_INCREMENT

ALTER TABLE `tours_2017fantasypride`
  MODIFY `guestid` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
