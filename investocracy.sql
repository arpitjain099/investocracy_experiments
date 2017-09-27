-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 27, 2017 at 02:38 AM
-- Server version: 5.7.18
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investocracy`
--

-- --------------------------------------------------------
use investocracy;
--
-- Table structure for table `bookmarkforlater`
--

CREATE TABLE `bookmarkforlater` (
  `investorusername` text NOT NULL,
  `companyid` text NOT NULL,
  `timestamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `username` text NOT NULL,
  `campaigndescription` text NOT NULL,
  `additionalcomments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `interest_fmv`
--

CREATE TABLE `interest_fmv` (
  `username` text NOT NULL,
  `value` text NOT NULL,
  `comments` text NOT NULL,
  `linkedin` text NOT NULL,
  `companyname` text NOT NULL,
  `timestamp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `modalventuresignup`
--

CREATE TABLE `modalventuresignup` (
  `modalemail` text NOT NULL,
  `modalcontactnumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_fmv`
--

CREATE TABLE `users_fmv` (
  `name` text NOT NULL,
  `password` text,
  `entity` text,
  `email` text,
  `linkedin` text,
  `phone` text,
  `headline` text,
  `location` text,
  `preferences` text,
  `pastinvestments` text,
  `industry_preferences` text,
  `countryofresidence` text,
  `currentorganization` text,
  `designation` text,
  `pending` text,
  `investor_type` text,
  `twitter` text,
  `typicalinvestmentamount` text,
  `portofolio` text,
  `image_url` text,
  `userid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_fmv`
--

INSERT INTO `users_fmv` (`name`, `password`, `entity`, `email`, `linkedin`, `phone`, `headline`, `location`, `preferences`, `pastinvestments`, `industry_preferences`, `countryofresidence`, `currentorganization`, `designation`, `pending`, `investor_type`, `twitter`, `typicalinvestmentamount`, `portofolio`, `image_url`, `userid`) VALUES
('root', '12345678', '', 'xaxa@ga.co', 'Not Available', '', 'Angel Investor', 'Not Available', 'yes', 'no', 'Aerospace,', 'India', 'Not Available', 'Not Available', 'pending', 'Angel', 'Not Available', 'Not Available', 'Not Available', 'http://fundmyventure.co/assets/images/investor_profile.png', ''),
('root', '12345678', '', 'ss@ga.co', 'Not Available', '', 'Angel Investor', 'Not Available', 'yes', 'no', 'Aerospace,', 'India', 'Not Available', 'Not Available', 'pending', 'Angel', 'Not Available', 'Not Available', 'Not Available', 'http://fundmyventure.co/assets/images/investor_profile.png', '1506410966'),
('', '', '', '', 'Not Available', '', 'Angel Investor', 'Not Available', 'yes', 'no', '', 'India', 'Not Available', 'Not Available', 'pending', 'Angel', 'Not Available', 'Not Available', 'Not Available', 'http://fundmyventure.co/assets/images/investor_profile.png', '1506494827'),
('root', '12345678', '', 'aaa@gm.ccxa', 'Not Available', 'xa', 'Angel Investor', 'Not Available', 'yes', 'no', '[\"Enterprise Storage\",\"Enterprise Networking\",\"IT Operations\"]', 'India', 'Not Available', 'Not Available', 'pending', 'Angel', 'Not Available', 'Not Available', 'Not Available', 'http://fundmyventure.co/assets/images/investor_profile.png', '1506494866'),
('root', '12345678', '', 'xaxaxaagva@Gaa.cxa', 'Not Available', 'xaxa', 'Angel Investor', 'Not Available', 'yes', 'no', '[\"Enterprise Storage\",\"Enterprise Networking\",\"IT Operations\"]', 'India', 'Not Available', 'Not Available', 'pending', 'Angel', 'Not Available', 'Not Available', 'Not Available', 'http://fundmyventure.co/assets/images/investor_profile.png', '1506494898');

-- --------------------------------------------------------

--
-- Table structure for table `venture_fmv`
--

CREATE TABLE `venture_fmv` (
  `companyname` text,
  `companylocation` text NOT NULL,
  `companytagline` text,
  `companykeywords` text,
  `companyemail` text,
  `companywebsite` text,
  `companycontactnumber` text,
  `companylinkedin` text,
  `companyfacebook` text,
  `companytwitter` text,
  `companyvideo` text,
  `companypitchvideo` text,
  `companypitchdeck` text,
  `companylogo` text,
  `companyfeaturedimage` text,
  `companyteamimage` text,
  `companyoverview` text,
  `companyfundraisestage` text,
  `companyfundraisetarget` text,
  `companyfundraiseminimuminvestment` text,
  `companymoneyraisedsofar` text,
  `companypremoneyvaluation` text,
  `companyhighlight1` text,
  `companyhighlight2` text,
  `companyhighlight3` text,
  `companyelevatorpitch` text,
  `teammembername` text,
  `teammemberrole` text,
  `teammemberbio` text,
  `teammemberemail` text,
  `teammemberphone` text,
  `teammemberphotourl` text,
  `leadershipname` text,
  `leadershiprole` text,
  `leadershipbio` text,
  `leadershipemail` text,
  `leadershipphone` text,
  `leadershipphotourl` text,
  `advisorname` text,
  `advisorrole` text,
  `advisorbio` text,
  `advisoremail` text,
  `advisorphone` text,
  `advisorphotourl` text,
  `testimonialname` text,
  `testimonialrole` text,
  `testimonialcontent` text,
  `testimonialemail` text,
  `testimonialphone` text,
  `testimonialphotourl` text,
  `pressurl` text,
  `partnername` text,
  `partnerlogo` text,
  `previousfundingsource` text,
  `previousfundingamount` text,
  `previousfundingdate` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
