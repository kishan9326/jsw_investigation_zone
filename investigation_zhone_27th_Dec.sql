-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 07:37 AM
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
-- Database: `investigation_zhone`
--

-- --------------------------------------------------------

--
-- Table structure for table `coral_empire`
--

CREATE TABLE `coral_empire` (
  `id` int(10) NOT NULL,
  `ticker_time` varchar(20) DEFAULT NULL,
  `first_screen_title` varchar(100) DEFAULT NULL,
  `first_screen_circle_img` varchar(100) DEFAULT NULL,
  `first_screen_center_img` varchar(100) DEFAULT NULL,
  `first_screen_background_img` varchar(100) DEFAULT NULL,
  `first_screen_button_text` varchar(50) DEFAULT NULL,
  `second_screen_text` longtext DEFAULT NULL,
  `second_screen_img` varchar(100) DEFAULT NULL,
  `second_screen_center_img` varchar(100) DEFAULT NULL,
  `second_screen_background_img` varchar(100) DEFAULT NULL,
  `second_screen_button_text` varchar(50) DEFAULT NULL,
  `third_screen_text` longtext DEFAULT NULL,
  `third_screen_background_img` varchar(100) DEFAULT NULL,
  `third_screen_center_img` varchar(100) DEFAULT NULL,
  `third_screen_button_text` varchar(50) DEFAULT NULL,
  `fourth_screen_text` longtext DEFAULT NULL,
  `fourth_screen_sub_text` longtext DEFAULT NULL,
  `fourth_screen_img` varchar(100) DEFAULT NULL,
  `fourth_screen_background_img` varchar(100) DEFAULT NULL,
  `fourth_screen_center_img` varchar(100) DEFAULT NULL,
  `fourth_screen_button_text` varchar(50) DEFAULT NULL,
  `fifth_screen_background_img` varchar(100) DEFAULT NULL,
  `fifth_screen_center_img` varchar(100) DEFAULT NULL,
  `fifth_screen_img` varchar(100) DEFAULT NULL,
  `fifth_screen_text` longtext DEFAULT NULL,
  `fifth_screen_button_text` varchar(50) DEFAULT NULL,
  `sixth_screen_background_img` varchar(100) DEFAULT NULL,
  `sixth_screen_center_img` varchar(100) DEFAULT NULL,
  `sixth_screen_img` varchar(100) DEFAULT NULL,
  `sixth_screen_text` longtext DEFAULT NULL,
  `sixth_screen_sub_text` longtext DEFAULT NULL,
  `sixth_screen_button_text` varchar(50) DEFAULT NULL,
  `seventh_screen_background_img` varchar(100) DEFAULT NULL,
  `seventh_screen_center_img` varchar(100) DEFAULT NULL,
  `seventh_screen_img` varchar(100) DEFAULT NULL,
  `seventh_screen_text` longtext DEFAULT NULL,
  `seventh_screen_calling_img` varchar(50) DEFAULT NULL,
  `seventh_screen_button_text` varchar(50) DEFAULT NULL,
  `eight_screen_text` longtext DEFAULT NULL,
  `eight_screen_background_img` varchar(100) DEFAULT NULL,
  `eight_screen_center_img` varchar(100) DEFAULT NULL,
  `eight_screen_img` varchar(100) DEFAULT NULL,
  `eight_screen_button_text` varchar(50) DEFAULT NULL,
  `nine_screen_text` longtext DEFAULT NULL,
  `nine_screen_background_img` varchar(100) DEFAULT NULL,
  `nine_screen_center_img` varchar(100) DEFAULT NULL,
  `nine_screen_img` varchar(100) DEFAULT NULL,
  `nine_screen_button_text` varchar(50) DEFAULT NULL,
  `ten_screen_text` longtext DEFAULT NULL,
  `ten_screen_sub_text` longtext DEFAULT NULL,
  `ten_screen_background_img` varchar(100) DEFAULT NULL,
  `ten_screen_center_img` varchar(100) DEFAULT NULL,
  `right_background_img` varchar(100) DEFAULT NULL,
  `wrong_background_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coral_empire`
--

INSERT INTO `coral_empire` (`id`, `ticker_time`, `first_screen_title`, `first_screen_circle_img`, `first_screen_center_img`, `first_screen_background_img`, `first_screen_button_text`, `second_screen_text`, `second_screen_img`, `second_screen_center_img`, `second_screen_background_img`, `second_screen_button_text`, `third_screen_text`, `third_screen_background_img`, `third_screen_center_img`, `third_screen_button_text`, `fourth_screen_text`, `fourth_screen_sub_text`, `fourth_screen_img`, `fourth_screen_background_img`, `fourth_screen_center_img`, `fourth_screen_button_text`, `fifth_screen_background_img`, `fifth_screen_center_img`, `fifth_screen_img`, `fifth_screen_text`, `fifth_screen_button_text`, `sixth_screen_background_img`, `sixth_screen_center_img`, `sixth_screen_img`, `sixth_screen_text`, `sixth_screen_sub_text`, `sixth_screen_button_text`, `seventh_screen_background_img`, `seventh_screen_center_img`, `seventh_screen_img`, `seventh_screen_text`, `seventh_screen_calling_img`, `seventh_screen_button_text`, `eight_screen_text`, `eight_screen_background_img`, `eight_screen_center_img`, `eight_screen_img`, `eight_screen_button_text`, `nine_screen_text`, `nine_screen_background_img`, `nine_screen_center_img`, `nine_screen_img`, `nine_screen_button_text`, `ten_screen_text`, `ten_screen_sub_text`, `ten_screen_background_img`, `ten_screen_center_img`, `right_background_img`, `wrong_background_img`) VALUES
(1, '2830', 'Save The Coral Empire', '24Asset_1.png', '67Champs_screen_FG_VP8.webm', 'first_bakcground.png', 'Enter', '<p>Hi there, tech divers I&rsquo;m Eva Hawke &ndash; you can refer to me as Hawk because that&rsquo;s what my colleagues call me.</p>\r\n\r\n<p>I am an underwater archaeologist and have been visiting the beautiful shipwreck of SS Thistlegorm in the Red Sea to study the corals. A little about what I do professionally lies on the board in front of you and in the case files.</p>\r\n\r\n<p>Dive with me and document the corals that have grown on the shipwreck.</p>', '81Asset_2.png', '60ChampsNew--1ai-11_VP8.webm', '71Rescue_Champs_BG.mp4', 'Enter To Dive', '<p>As you may know, we divers have a secret signal to communicate when we see underwater creatures.</p>\r\n\r\n<p>On my last dive at SS Thistlegorm I found an animal that I photographed.</p>', '44Rescue_Champs_BG.mp4', '26ChampsNew--1ai-02_VP8.webm', 'Next', '<p><strong>Did you know like many other creatures, the octopus also makes the coral reef its home. Come, Let&rsquo;s get ready for our dive....</strong></p>', '<p><strong>Enter to move to the next step</strong></p>', '19Asset_5.png', '71Rescue_Champs_BG.mp4', '40ChampsNew--1ai-11_VP8.webm', 'Enter', '83Rescue_Champs_BG.mp4', '89ChampsNew--1ai-11_VP8.webm', '27Asset_2.png', '<p>Oh no! You cannot dive without your gear!<br />\r\n<br />\r\nGo to the <strong>LOCKER ZONE TO UNLOCK AND GET YOUR GEAR. </strong><br />\r\n<strong>THEN INPUT AN </strong>important date<strong> IN THE CONTROL STATION</strong> without which we wouldn&rsquo;t have anything to investigate!!</p>', 'Enter', '61Rescue_Champs_BG.mp4', '71ChampsNew--1ai-11_VP8.webm', 'asset_19.png', '<p><strong>Woohoo! You are almost there.</strong></p>', '<p>Remember to capture everything you see in our Video Headquarters.</p>', 'Enter', '27Rescue_Champs_BG.mp4', '67ChampsNew--1ai-11_VP8.webm', '39Asset_3.png', '<p>SOS!!!!!!! We need more hands on deck.<br />\r\nDial number on screen and call my colleague drake<br />\r\nwho will record what you saw</p>', '94Asset_2_(1).png', 'Submit', '<p>Shine your light using your<strong> TORCH IN THE DARK ZONE</strong> to uncover the mystery</p>', '58Rescue_Champs_BG.mp4', '27ChampsNew--1ai-11_VP8.webm', '73Asset_24.png', 'Enter', '<p>Divers, Welcome back to land. Your findings will be very useful to the world. An experiment will verify your findings and give us answers as to why this happened to the corals. Experiments are best conducted in a <strong>science lab.</strong></p>', '18Rescue_Champs_BG.mp4', '25ChampsNew--1ai-11_VP8.webm', '72Asset_22.png', 'Enter', '<p>Divers you have reached the end of your Mission Save our Coral Empire!<strong> Congratulations!</strong></p>', '<p>This is Underwater Archaeologist Eva Hawke signing off!! Hope to catch you on the flip side of my next excursion. Don&rsquo;t forget to take a group picture as a souvenir of a job well done!!</p>', 'coral_empire.png', '24ChampsNew--1ai-03_VP8.webm', '71Rescue_Champs_BG.mp4', '71Rescue_Champs_BG.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `coral_empire_quetions`
--

CREATE TABLE `coral_empire_quetions` (
  `id` int(11) NOT NULL,
  `question` longtext DEFAULT NULL,
  `question_sub_text` longtext DEFAULT NULL,
  `quetion_button_text` varchar(50) DEFAULT NULL,
  `right_fact` longtext DEFAULT NULL,
  `wrong_fact` longtext DEFAULT NULL,
  `right_text` varchar(100) DEFAULT NULL,
  `wrong_text` varchar(100) DEFAULT NULL,
  `quetion_image` varchar(100) DEFAULT NULL,
  `quetion_background_img` varchar(100) DEFAULT NULL,
  `answer` varchar(200) DEFAULT NULL,
  `macq_option` text DEFAULT NULL,
  `mcq_images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coral_empire_quetions`
--

INSERT INTO `coral_empire_quetions` (`id`, `question`, `question_sub_text`, `quetion_button_text`, `right_fact`, `wrong_fact`, `right_text`, `wrong_text`, `quetion_image`, `quetion_background_img`, `answer`, `macq_option`, `mcq_images`) VALUES
(1, '<p>&nbsp;</p>\r\n\r\n<p><strong>Click on the hand signal of the animal I found.<br />\r\nPS: Don&rsquo;t skip anything in the case file.</strong></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, NULL, NULL, '<p>Well Done!</p>', '<p>Investigate again</p>', NULL, NULL, 'Octopus', 'Shark,Hammerhead,Turtle,Manata ray,Moray eel,Octopus,Lobster,Crab,Angelfish,Triggerfish,Jellyfish,Stonefish', 'asset_3.png,asset_4.png,asset_5.png,asset_6.png,asset_7.png,asset_8.png,89Asset_9.png,asset_10.png,asset_11.png,asset_12.png,asset_13.png,asset_14.png'),
(2, '<br><p>What date did the SS Thistlegorm sink ?</p>', '<p>Answer</p>', 'Submit', NULL, NULL, '<p>Well done!</p>', '<p>Try again</p>', '', '71Rescue_Champs_BG.mp4', '06 10 1941,06-10-1941,06/10/1941,06101941,06.10.1941', NULL, NULL),
(3, '<p>Good going Tech Divers! You will now be diving 32 meters deep into the Red Sea..</p>', '<br><p>Have you collected all the gear you need to dive? Tick on the checklist below</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>', 'Submit', '<p>Congratulations! You are now equipped to dive underwater</p>', NULL, '<p>Congratulations</p>', '<p>Wrong Answer</p>', 'diver.png', 'coral_empire.mp4', 'Wetsuit,Fins,Mask,Snorkel,Dive Computer,Torches', 'Wetsuit,Fins,Mask,Snorkel,Dive Computer,Torches', NULL),
(4, '<br><p>What phenomenon under water did you see that was shocking ?</p>', NULL, 'Submit', '<p>You&rsquo;re right! The corals turned white due to Coral bleaching in the oceans.</p>', '<p>Hint: What caused the corals to turn white?</p>', '<p>Correct Answer</p>', '<p>Wrong Answer! Try again!</p>', '52Asset_2.png', '71Rescue_Champs_BG.mp4', 'Coral Bleaching,Coral bleach', NULL, NULL),
(5, '<p><strong>We&rsquo;re almost there!</strong></p>\r\n\r\n<p>&nbsp;</p>', '<br><p>To go to the next step, tell me --- what gives the coral its bright colors?</p>', 'Submit', '<p>The bright colors on coral reefs come from special symbiotic algae called zooxanthellae, which live inside the coral and act as their food.</p>', '<p>Oops! Look again.</p>', '<p>Correct Answer</p>', '<p>Opps! Look Again</p>', '52Asset_2.png', '71Rescue_Champs_BG.mp4', 'Zooxanthellae', NULL, NULL),
(6, '<br><p>Why did the coral reef become white ?</p>', NULL, 'Submit', '<p>You are correct !A warming planet means a warming ocean. When water is too warm, corals <strong>will expel the algae zooxanthellae living in their tissues causing the coral to turn completely white.</strong>This is happening in oceans across the world! And you have to find solutions!</p>', NULL, '<p>Correct Answer</p>', '<p>Try again</p>', '', '71Rescue_Champs_BG.mp4', 'Warm water', NULL, NULL),
(7, '<br><p>A coral growing technology is closer than you think<br />\nThe scanning zone has a few items. One of them is the correct technology being used to grow more corals. Which one is it? Scan for the right answer&nbsp;</p>', '<p>1) Sea star&nbsp;&nbsp;&nbsp; 2) Fishing net<br />\n3) Biorock&nbsp;&nbsp;&nbsp;&nbsp; 4) Submarine<br />\n5) Sunscreen</p>', 'Submit', '<p>Yes, you are correct! You have found the technology that can save the coral empire. Biorock speeds up the process of coral growth. The electricity that is passed through the biorock interacts with minerals in the seawater and causes solid limestone to grow on the structure.</p>', NULL, '<p>Yes,you are correct!</p>', '<p>You have almost saved the coral empire, try again!</p>', 'asset_9.png', '71Rescue_Champs_BG.mp4', 'Biorock', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cosmic_cleanup`
--

CREATE TABLE `cosmic_cleanup` (
  `id` int(11) NOT NULL,
  `ticker_time` varchar(10) DEFAULT NULL,
  `Bgvideo1` varchar(100) DEFAULT NULL,
  `S1headline` longtext DEFAULT NULL,
  `S1FirstText` longtext DEFAULT NULL,
  `S1SecondText` longtext DEFAULT NULL,
  `S1Enter` longtext DEFAULT NULL,
  `S1Image` varchar(100) DEFAULT NULL,
  `Bgvideo2` varchar(100) DEFAULT NULL,
  `S2Infotext` longtext DEFAULT NULL,
  `S2Image` varchar(100) DEFAULT NULL,
  `S2Enter` longtext DEFAULT NULL,
  `S3Infotext` longtext DEFAULT NULL,
  `S3subtext` varchar(200) DEFAULT NULL,
  `S3enter_two` varchar(100) DEFAULT NULL,
  `S3Enter` longtext DEFAULT NULL,
  `S4Infotext` longtext DEFAULT NULL,
  `S4Question` longtext DEFAULT NULL,
  `S4Answer1` longtext DEFAULT NULL,
  `S4Answer2` longtext DEFAULT NULL,
  `S4Submit` longtext DEFAULT NULL,
  `S4Rightanswer` longtext DEFAULT NULL,
  `S4RightImage` varchar(100) DEFAULT NULL,
  `S4RightFact` longtext DEFAULT NULL,
  `S4Next` longtext DEFAULT NULL,
  `S4Wronganswer` longtext DEFAULT NULL,
  `S4Tryagain` longtext DEFAULT NULL,
  `S5Bgimage` varchar(100) DEFAULT NULL,
  `S5Infotext1` longtext DEFAULT NULL,
  `S5Infotext2` longtext DEFAULT NULL,
  `S5Enter` longtext DEFAULT NULL,
  `S5QuestionImage` varchar(100) DEFAULT NULL,
  `S5Question` longtext DEFAULT NULL,
  `S5Submit` longtext DEFAULT NULL,
  `S5Answer` longtext DEFAULT NULL,
  `S5Answer_2` varchar(200) DEFAULT NULL,
  `S5Rightanswer` longtext DEFAULT NULL,
  `S5RightFact` longtext DEFAULT NULL,
  `S5Next` longtext DEFAULT NULL,
  `S5Wronganswer` longtext DEFAULT NULL,
  `S5WrongInfo` longtext DEFAULT NULL,
  `S5Tryagain` longtext DEFAULT NULL,
  `S6Infotext` longtext DEFAULT NULL,
  `S6Enter` longtext DEFAULT NULL,
  `S6Question` longtext DEFAULT NULL,
  `S6Answer` longtext DEFAULT NULL,
  `S6Submit` longtext DEFAULT NULL,
  `S6Rightanswer` longtext DEFAULT NULL,
  `S6RightFact` longtext DEFAULT NULL,
  `S6Wronganswer` longtext DEFAULT NULL,
  `S6Tryagain` longtext DEFAULT NULL,
  `S7Infotext` longtext DEFAULT NULL,
  `S7Enter` longtext DEFAULT NULL,
  `S8Question` longtext DEFAULT NULL,
  `S8Answer1` longtext DEFAULT NULL,
  `S8Answer2` longtext DEFAULT NULL,
  `S8Submit` longtext DEFAULT NULL,
  `S8Rightanswer` longtext DEFAULT NULL,
  `S8RightFact` longtext DEFAULT NULL,
  `S6Next` longtext DEFAULT NULL,
  `S8Next` longtext DEFAULT NULL,
  `S8Wronganswer` longtext DEFAULT NULL,
  `S8Tryagain` longtext DEFAULT NULL,
  `S9Infotext` longtext DEFAULT NULL,
  `S9Enter` longtext DEFAULT NULL,
  `S10Infotext` longtext DEFAULT NULL,
  `S11Title` longtext DEFAULT NULL,
  `S11Infotext` longtext DEFAULT NULL,
  `S10Enter` longtext DEFAULT NULL,
  `Bgvideo3` varchar(100) DEFAULT NULL,
  `Bgvideo3_sub` varchar(100) DEFAULT NULL,
  `Bgvideo4` varchar(100) DEFAULT NULL,
  `Bgvideo5` varchar(100) DEFAULT NULL,
  `Bgvideo6` varchar(100) DEFAULT NULL,
  `Bgvideo7` varchar(100) DEFAULT NULL,
  `Bgvideo8` varchar(100) DEFAULT NULL,
  `Bgvideo9` varchar(100) DEFAULT NULL,
  `Bgvideo10` varchar(100) DEFAULT NULL,
  `Bgvideo11` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cosmic_cleanup`
--

INSERT INTO `cosmic_cleanup` (`id`, `ticker_time`, `Bgvideo1`, `S1headline`, `S1FirstText`, `S1SecondText`, `S1Enter`, `S1Image`, `Bgvideo2`, `S2Infotext`, `S2Image`, `S2Enter`, `S3Infotext`, `S3subtext`, `S3enter_two`, `S3Enter`, `S4Infotext`, `S4Question`, `S4Answer1`, `S4Answer2`, `S4Submit`, `S4Rightanswer`, `S4RightImage`, `S4RightFact`, `S4Next`, `S4Wronganswer`, `S4Tryagain`, `S5Bgimage`, `S5Infotext1`, `S5Infotext2`, `S5Enter`, `S5QuestionImage`, `S5Question`, `S5Submit`, `S5Answer`, `S5Answer_2`, `S5Rightanswer`, `S5RightFact`, `S5Next`, `S5Wronganswer`, `S5WrongInfo`, `S5Tryagain`, `S6Infotext`, `S6Enter`, `S6Question`, `S6Answer`, `S6Submit`, `S6Rightanswer`, `S6RightFact`, `S6Wronganswer`, `S6Tryagain`, `S7Infotext`, `S7Enter`, `S8Question`, `S8Answer1`, `S8Answer2`, `S8Submit`, `S8Rightanswer`, `S8RightFact`, `S6Next`, `S8Next`, `S8Wronganswer`, `S8Tryagain`, `S9Infotext`, `S9Enter`, `S10Infotext`, `S11Title`, `S11Infotext`, `S10Enter`, `Bgvideo3`, `Bgvideo3_sub`, `Bgvideo4`, `Bgvideo5`, `Bgvideo6`, `Bgvideo7`, `Bgvideo8`, `Bgvideo9`, `Bgvideo10`, `Bgvideo11`) VALUES
(2, '2830', '26Champs_screen_BG.mp4', 'MISSION COSMIC CLEANUP', '<p><strong>PROBLEM</strong>: Earths orbit is cluttered with 170 Million pieces of space junk, endangering the ozone layer. Satellites that don&rsquo;t work are being dumped into ocean.</p>', '<p><strong>CALL TO COSMIC WARRIORS</strong>: Your mission is to find solutions to save the oceans from becoming a dumping ground and protecting the most pristine place on earth..but it all starts from space.</p>', 'ENTER', '35Asset_1.png', '74Rescue_Champs_BG.mp4', '<p>Astronauts! The future looks like&nbsp;<br />\r\na haze I see a night sky marred by&nbsp;<br />\r\ncountless bright dots, not stars!<br />\r\nAll I see is space debris that&nbsp;<br />\r\nclutter the once starry sky..&nbsp;<br />\r\nYoung astronauts from the Future,&nbsp;<br />\r\nThe cosmos needs your help. . .</p>\r\n\r\n<p>Look around for a scroll or message from me and read it carefully</p>', '11Asset_2.png', 'ENTER', '<p>Make a call to the scientist donald kessler. He has&nbsp;<br />\r\nsomething to tell you and where to go next.<br />\r\nDial the correct number on the phone.</p>', '<p>Your answers to the next step are in the lab</p>', 'ENTER', 'ENTER', '<p>First look for the message and follow what it says<br />\r\n<strong>INPUT YOUR FINDINGS FROM THE LAB HERE</strong></p>', '<p>This metal is most used in rockets and does not attract magnets&nbsp;</p>', 'ALUMINIUM', 'ALUMINUM', 'NEXT', 'RIGHT ANSWER', '36Asset_3.png', 'When aluminum burns to become aluminum oxide, it could damage and even rip a new hole in the ozone layer. Space debris has a lot of aluminium', 'NEXT', 'WRONG ANSWER', 'TRY AGAIN', '39Asset_8.png', 'Space and Earth environments are connected. Rockets made of aluminum are affecting our ozone layer and space junk is being dumped into a place where no man has gone before!', '<p>This place is called the graveyard of satellites. <strong>THE DARK ROOM</strong> will help You locate this point. USE YOUR TORCHES TO FIND THE MOST REMOTE PLACE ON EARTH</p>', 'ENTER', '90Asset_7.png', 'Which is the most remote place on earth', 'SUBMIT', 'POINT NEMO', 'POINTNEMO', 'RIGHT ANSWER', 'Defunct satellites crash here because there is no life in Point Nemo. Preserving Point Nemo is essential to protect one of the most remote and pristine locations on Earth.', 'NEXT', 'WRONG ANSWER', 'Oops..there is another point you need to look for', 'TRY AGAIN', '<p>The <strong>SCANNING ZONE</strong> has objects left in space orbit by mistake. Scan them to find a word to input at the control station to take you to the next step.</p>', 'ENTER', 'What is the word you found after scanning objects in the scanning zone?', 'LOCKER', 'SUBMIT', 'RIGHT ANSWER', 'Well done astronauts.', 'WRONG ANSWER', 'TRY AGAIN', '<p>An important message in the locker must be transmitted to the future to all astronauts and ocean experts.<br />\r\nA SECRET CODE: The exact coordinates of Point Nemo are <strong>48&deg;52.6&prime;S 123&deg;23.6&prime;W.</strong><br />\r\nThe first four numbers will unlock the locker.</p>', 'ENTER', 'What is the name of the space station that is supposed to crash at the point nemo in 2031', 'INTERNATIONAL SPACE STATION', 'ISS', 'SUBMIT', 'RIGHT ANSWER', 'The INTERNATIONAL SPACE STATION is the largest artificial satellite in orbit and closest to Point Nemo. NASA is going to crash the ISS into Point Nemo as it retires in 2030', 'NEXT', 'NEXT', 'WRONG ANSWER', 'TRY AGAIN', 'To complete your mission a message awaits you at the Video HQ', 'ENTER', 'Have you signed the plea which is a petition to save earths orbit and a call to save our oceans from space debris?', 'YOU DID IT !!! CONGRATULATIONS TEAM', '<p>You took the first step to protect point nemo<br />\r\ntake a picture and go up in the hall of fame<br />\r\ncongratulations team astronauts!</p>', 'ENTER', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '74Rescue_Champs_BG.mp4', '44Investigation_Photobooth_25102023_Cosmic_Cleanup_mission.png');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game1`
--

CREATE TABLE `game1` (
  `id` int(11) NOT NULL,
  `ticker_time` varchar(10) DEFAULT NULL,
  `first_screen_title` varchar(100) DEFAULT NULL,
  `first_screen_main_background_img` varchar(50) DEFAULT NULL,
  `first_screen_circle_img` varchar(100) DEFAULT NULL,
  `first_screen_button_text` varchar(50) DEFAULT NULL,
  `intro_screen_video` varchar(100) DEFAULT NULL,
  `intro_screen_button` varchar(30) DEFAULT NULL,
  `second_screen_title` varchar(100) DEFAULT NULL,
  `second_main_background_img` varchar(50) DEFAULT NULL,
  `second_screen_button_text` varchar(50) DEFAULT NULL,
  `third_screen_main_background_img` varchar(50) DEFAULT NULL,
  `third_screen_wardname` longtext DEFAULT NULL,
  `seven_screen_text` longtext DEFAULT NULL,
  `eight_screen_button_text` varchar(20) DEFAULT NULL,
  `nine_screen_video` varchar(100) DEFAULT NULL,
  `ten_screen_text` longtext DEFAULT NULL,
  `ten_screen_button_text` varchar(50) DEFAULT NULL,
  `eleven_screen_image` varchar(50) DEFAULT NULL,
  `eleven_screen_text` longtext DEFAULT NULL,
  `twelve_screen_image` varchar(50) DEFAULT NULL,
  `therteen_screen_image` varchar(50) DEFAULT NULL,
  `therteen_screen_text` longtext DEFAULT NULL,
  `fourteen_screen_image` varchar(50) DEFAULT NULL,
  `fourteen_screen_text` longtext DEFAULT NULL,
  `fourteen_screen_sub_text` longtext DEFAULT NULL,
  `right_title_text` varchar(100) DEFAULT NULL,
  `wrong_title_text` varchar(100) DEFAULT NULL,
  `try_again_button_text` varchar(20) DEFAULT NULL,
  `next_button_text` varchar(20) DEFAULT NULL,
  `enter_button_text` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game1`
--

INSERT INTO `game1` (`id`, `ticker_time`, `first_screen_title`, `first_screen_main_background_img`, `first_screen_circle_img`, `first_screen_button_text`, `intro_screen_video`, `intro_screen_button`, `second_screen_title`, `second_main_background_img`, `second_screen_button_text`, `third_screen_main_background_img`, `third_screen_wardname`, `seven_screen_text`, `eight_screen_button_text`, `nine_screen_video`, `ten_screen_text`, `ten_screen_button_text`, `eleven_screen_image`, `eleven_screen_text`, `twelve_screen_image`, `therteen_screen_image`, `therteen_screen_text`, `fourteen_screen_image`, `fourteen_screen_text`, `fourteen_screen_sub_text`, `right_title_text`, `wrong_title_text`, `try_again_button_text`, `next_button_text`, `enter_button_text`) VALUES
(1, '3005', 'UNLOCK CC TV CAMERA PRESS', 'champs_screen_BG.mp4', '29CCTV.png', 'Enter', 'SocietyManagerVideo.mp4', 'next', 'THIS IS A CONFIDENTIAL SOCIETY CAMERA AND NEEDS A PASSWORD', '34Rescue_Champs_BG.mp4', 'SUBMIT', '78Rescue_Champs_BG.mp4', '<p>USE THE PHONE AND CALL THE CORRECT NUMBER FOR THE WARD OFFICE FROM WHERE CHAMPS DISAPPEARED</p>', '<pTHE SCANNING ZONE HAS  OBJECTS YOU NEED TO SCAN . THE SCANNING CARDS WILL REVEAL AN ITEM THAT TAKES LONGEST TO DECOMPOSE IN THE OCEAN . SCAN THE CARDS AND INPUT CORRECT ANSWER AT YOUR CONTROL STATION.</p>', 'Next', '24photo.png', '<p>This Screen is not used</p>', 'Submit', '71Asset_1.png', '<p>MITHI RIVER IS OVERFLOWING , DRAINS ARE CLOGGED</p>\r\n\r\n<p>THE <strong>CONFIDENTIAL REPORT</strong> INSIDE THE LOCKER <strong>&lsquo;MUST BE READ&rsquo;</strong> TO KNOW WHERE TO GO NEXT</p>', '44image-box1.png', '12image-box.png', '<p>QUESTION</p>\r\n\r\n<p><strong>THE SCANNING ZONE HAS</strong> OBJECTS YOU NEED TO SCAN. THE SCANNING CARDS WILL REVEAL AN ITEM THAT TAKES LONGEST TO DECOMPOSE IN THE OCEAN. <strong>SCAN THE CARDS AND INPUT A CORRECT ANSWER AT YOUR CONTROL STATION.</strong></p>', '94img_3.png', '<p>Rescue Champs Mission Accomplished !</p>', '<p>CELEBRATE YOUR VICTORY IN THE PHOTO BOOTH<br />\r\nCLICK A PICTURE WITH YOUR TEAM</p>', 'RIGHT', 'WRONG', 'TRY AGAIN', 'NEXT', 'ENTER');

-- --------------------------------------------------------

--
-- Table structure for table `game_info`
--

CREATE TABLE `game_info` (
  `id` int(10) NOT NULL,
  `game_id` int(10) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `big_img` varchar(50) NOT NULL,
  `about_text` longtext NOT NULL,
  `duration_time` varchar(50) NOT NULL,
  `players_count` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_info`
--

INSERT INTO `game_info` (`id`, `game_id`, `game_name`, `big_img`, `about_text`, `duration_time`, `players_count`) VALUES
(1, 1, 'RESCUE CHAMPS', '83Asset_19.png', '<p>Red alert! Mumbai is flooding. And Champs the neighborhood dog is missing. Gather your squad and get into action! &nbsp;Can you bring Champs home?</p>', '30', '5'),
(2, 2, 'RECONNECT THE WORLD', '23Asset_20.png', '<p>What if you cannot text your friend or scroll through your Instagram? Or ask google to guide you? Techies get your team and get ready &mdash; an important mission needs to be solved IMMEDIATELY!</p>', '30', '5'),
(3, 3, 'SAVE OUR CORAL EMPIRE', '73Asset_21.png', '<p>It is impossible to imagine our planet without corals. Our reefs are dying and need your protection Its time to dive right in and save our oceans!</p>', '30', '5'),
(4, 4, 'COSMIC CLEANUP', '87Asset_22.png', '<p>Young astronauts &mdash; space needs your help! Earth needs your intervention! Sign up for a covert cleanup mission. Your team&rsquo;s effort can save our planet.</p>', '30', '5');

-- --------------------------------------------------------

--
-- Table structure for table `game_list`
--

CREATE TABLE `game_list` (
  `id` int(10) NOT NULL,
  `game_name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_list`
--

INSERT INTO `game_list` (`id`, `game_name`, `image`) VALUES
(1, 'RESCUE CHAMPS', '20Asset_28.png'),
(2, 'RECONNECT THE WORLD', '80Asset_29.png'),
(3, 'SAVE OUR CORAL EMPIRE', '38Asset_30.png'),
(4, 'COSMIC CLEANUP', '23Asset_31.png');

-- --------------------------------------------------------

--
-- Table structure for table `game_slots`
--

CREATE TABLE `game_slots` (
  `id` int(10) NOT NULL,
  `slots` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_slots`
--

INSERT INTO `game_slots` (`id`, `slots`) VALUES
(1, '9:30AM'),
(2, '12:30PM'),
(3, '2:30PM'),
(4, '4:30PM');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) NOT NULL,
  `game_id` int(10) DEFAULT NULL,
  `question` longtext NOT NULL,
  `answer` varchar(100) NOT NULL,
  `right_answer_fact` longtext DEFAULT NULL,
  `wrong_answer_fact` longtext DEFAULT NULL,
  `hint` longtext DEFAULT NULL,
  `right_title_text` longtext DEFAULT NULL,
  `wrong_title_text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `game_id`, `question`, `answer`, `right_answer_fact`, `wrong_answer_fact`, `hint`, `right_title_text`, `wrong_title_text`) VALUES
(1, 1, '<p>Input A significant date YOU SAW AT THE VIDEO HEADQUARTERS FOR YOUR MISSION</p>', '26/07/2005,26.07.2005,26-07-2005,26072005', '<p>The Mumbai deluge happened in 26.05.2005. The city recorded a rainfall of 944 MM IN 24 hours. THOUSANDS LOST LIVES AND THE CITY CAME TO A STANDSTILL</p>\r\n\r\n<p>YOUR NEXT CLUE WILL BE FOUND IN LOCKER ROOM</p>\r\n\r\n<p>UNLOCK 3 LOCKERS WITH THE DATE OF THE MUMBAI FLOOD</p>', '<p>REMEMBER SIGNIFICANT DATES! TRY AGAIN!</p>', NULL, '<p><strong>RIGHT ANSWER</strong></p>', '<p><strong>WRONG ANSWER</strong></p>'),
(2, 1, '<p>INPUT YOUR FINDINGS FROM THE <strong>SCIENCE LAB IN YOUR CONTROL STATION,</strong> WHICH WILL TELL YOU</p>\r\n\r\n<p>WHAT IS CONTAINING THE AREA WHERE CHAMPS IS STUCK?</p>', 'PLASTIC', '<p>YOU ARE ON FIRE TEAM !!</p>\r\n\r\n<p>Fact :PLASTIC IS ONE OF THE MOST GRAVE ISSUES THREATENING OUR WATER BODIES.</p>\r\n\r\n<p>BUT OTHER GRAVE ITEMS ALSO CLOG THE DRAINS AND FLOOD MUMBAI.</p>', '<p>OOPS! WRONG ANSWER..</p>', NULL, '<p>RIGHT ANSWER</p>', '<p>WRONG ANSWER</p>'),
(3, 1, '<p>THIS ITEM WHICH IS IN THE SCANNING ZONE ALSO CLOGS THE DRAINS AND OCEANS TAKES MANY YEARS TO DECOMPOSE IN THE OCEAN. WHAT IS IT?</p>', 'GLASS', '<p>GLASS : YOU ARE CORRECT!</p>\r\n\r\n<p>FACT :GLASS TAKES 1000000 YEARS TO DECOMPOSE SO THINK BEFORE YOU THROW IT IN THE WATER!</p>', '<p>TRY AGAIN</p>', NULL, '<p>RIGHT ANSWER</p>', '<p>WRONG ANSWER</p>'),
(4, 1, '<p>CHAMPS WILL RESPOND TO THIS WORD ..WOOF WOOF</p>', 'CHAMPION,CHAMPION!!', '<p>YOU ARE TRUE CHAMPION!!! CHAMPS SAYS A BIG THANK YOU!YOU ARE SUCCESSFUL IN COMPLETING &ldquo;RESCUE MISSION CHAMPS&rdquo;</p>', '<p>TRY AGAIN</p>', NULL, '<p>RIGHT ANSWER</p>', '<p>WRONG ANSWER</p>'),
(5, 1, '<p>THIS IS A CONFIDENTIAL SOCIETY <strong>CAMERA </strong>AND NEEDS A PASSWORD</p>', 'silversands,silver sands', NULL, NULL, NULL, '<p>RIGHT ANSWER</p>', '<p>WRONG ANSWER</p>');

-- --------------------------------------------------------

--
-- Table structure for table `questions_hindi`
--

CREATE TABLE `questions_hindi` (
  `id` int(10) NOT NULL,
  `game_id` int(10) NOT NULL,
  `question` longtext NOT NULL,
  `answer` varchar(100) NOT NULL,
  `right_answer_fact` longtext DEFAULT NULL,
  `wrong_answer_fact` longtext DEFAULT NULL,
  `hint` longtext DEFAULT NULL,
  `right_title_text` longtext DEFAULT NULL,
  `wrong_title_text` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions_hindi`
--

INSERT INTO `questions_hindi` (`id`, `game_id`, `question`, `answer`, `right_answer_fact`, `wrong_answer_fact`, `hint`, `right_title_text`, `wrong_title_text`) VALUES
(1, 1, '<p>एक महत्वपर् ू डतारीख ललखे िब मुंब ुई शहर बाढ़ के दौरान थम गया था</p>', '26/07/2005,26.07.2005,26-07-2005,26072005', '<p>मुंब ुई मेंिल प्रलय २६.०७.२००५ में घलटत हुआ। शहर में 24 घटुं ेके अन्दर ९४४ लमलीमीटर वर्ाड दिड की गई।हिारों लोगों की िान गई और शहर लबलक ु ल ठहर गया। आपका अगला सुंकेत इन नुंबरों केसाथ &#39;अनलॉक&#39; लकया िाएगा।</p>', '<p>महत्वपर् ू डलतलथयों को याद रखें! लिर सेप्रयास करें!</p>', NULL, '<p>सही उत्तर</p>', '<p>गलत उत्तर</p>'),
(2, 1, '<p>जिस क्षेत्र में चैंप्स फंसा हुआ है, वो कैसे प्रदूषित हो रहा है?</p>', 'Plastic', '<p>प्लास्टिक हमारे जल स्रोतों को खतरे में डालने वाली सबसे गंभीर समस्याओं में से एक है। लेकिन अन्य गंभीर वस्तुएँ भी नालियों को बंद करके मुंबई में बाढ़ का कारण बनती है।</p>\r\n\r\n<p>चैंप्स के करीब बढ़ने के लिए और समाधान खोजने के लिए वस्तुओं को स्कैन करें...</p>', '<p>पन: प्रयास करें</p>', '<p>Hindi Test Check</p>', '<p>सही उत्तर</p>', '<p>गलत िवाब</p>'),
(3, 1, '<p>चैंप्स जिस क्षेत्र में है वहां बाढ़ आ गई है, क्यूंकि वहां नालियाँ किसी वस्तु से बंद हो गई हैं!! यह वस्तु समुद्र में घुल जाने में सबसे ज्यादा समय लेती है। यह वस्तु क्या है?</p>', 'कांच', '<p>कांच को सड़ जाने में १०००००० वर्ष लगते हैं, इसलिए इसे पानी में फेंकने से पहले सोचें!</p>', '<p>Hindi <em>Test </em>Check</p>', '<p><strong>Hindi </strong>Test Check</p>', '<p>Hindi Test <s>Check</s></p>', '<p>Hindi Test <u>Check</u></p>'),
(4, 1, '<p>चैंप्स इस शब्द का जवाब देगा.. वूफ-वूफ</p>', 'चैंपियन !', '<p>आप एक सच्चे चैंपियन हो! चैंप्स कह रहा है, &ldquo; आपका बहुत धन्यवाद&rdquo; आप &#39;रेस्क्यू मिशन चैंप्स&#39; पूरा करने में सफल रहे।</p>', '<p>&nbsp;</p>\r\n\r\n<p>Wrong hindi</p>', '<p>hindi</p>', '<p><em>hindi</em></p>', '<p><em>hindi</em></p>'),
(5, 1, '<p>यहएक गप्त ु सोसाइटी कै मरा है लिसेपासवर्ड की आवश्यकता है</p>', 'silversands,silver sands', NULL, NULL, NULL, '<p>सही उत्तर</p>', '<p>गलत उत्तर</p>');

-- --------------------------------------------------------

--
-- Table structure for table `reconnect_quetions`
--

CREATE TABLE `reconnect_quetions` (
  `id` int(10) NOT NULL,
  `quetions` longtext NOT NULL,
  `answer` varchar(200) DEFAULT NULL,
  `background_img` varchar(50) DEFAULT NULL,
  `right_answer_fact` longtext DEFAULT NULL,
  `wrong_answer_fact` longtext DEFAULT NULL,
  `button_text` varchar(50) DEFAULT NULL,
  `mcq_options` varchar(200) DEFAULT NULL,
  `mcq_correct_answer` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reconnect_quetions`
--

INSERT INTO `reconnect_quetions` (`id`, `quetions`, `answer`, `background_img`, `right_answer_fact`, `wrong_answer_fact`, `button_text`, `mcq_options`, `mcq_correct_answer`) VALUES
(1, '<p>There has been a leak in the cable under the indian ocean/arabian sea connection lost, troubleshooting now Help locate the breakage in the <strong>DARK ROOM</strong> and along with the authorities re-connect the world! Make use of the torches to identify the leak in the submarine cable systems at the Mumbai Cable Landing Station (MumbaiCLS)&nbsp;</p>', 'SEA-ME-WE-3,SEAMEWE3,SEA ME WE 3', '68Reconnect_The_World_Mission_For_BG-05.mp4', '<p>Did you know - the station owner for SEA-ME-WE-3 is Tata Communications. It connects Middle East - Europe &amp; South East Asia.&nbsp;</p>', '<p>Hint: Oops, That cable you mentioned is operating at a data capacity of 2.43 Tbps we suggest you do a thorough search once more, and identify the data leak!&nbsp;</p>', 'ANSWER NOW', NULL, NULL),
(2, '<p>Speculate and discover various reasons of how human activities and natural phenomena cause destruction to sea cables.</p>', 'Tsunami,Ship Anchor,Shark Bites,Over Fishing', '36Reconnect_The_World_Mission_For_BG-05.mp4', NULL, '<p>Select all the correct options!</p>', 'SUBMIT', 'Moss growth,Over Fishing,Tsunami,Scuba Diving,Ship Anchor,Oil Drilling,Shark Bites', 'Tsunami / Ship Anchor / Shark Bites / Over Fishing'),
(3, '<p>It&#39;s time you guys know where it all started, knowledge is the only key that can unlock the door to wisdom. Let&rsquo;s travel back in Time to the year all of this started.Step back in time to unlock the lockers and explore the history of communication. Decode the year the first time a message was received over the sea. <strong>&quot;Look for Puzzles on the Pinboard which you can rotate to reveal the correct date&quot;</strong></p>', '1850', '11Reconnect_The_World_Mission_For_BG-07.mp4', '<p>Did you know - The first submarine cable &ndash; a copper-based telegraph cable &ndash; was laid across the Channel between the United Kingdom and France in 1850</p>', '<p>Ooops! You have time travelled to the wrong year! Hint - Also the year The Indian National Movement started :)</p>', 'ANSWER NOW', NULL, NULL),
(4, '<p>Tell us the full form of</p>\n<p>WWW | DNS | GPS</p>', 'WORLD WIDE WEB, DOMAIN NAME SYSTEM, GLOBAL POSITIONING SYSTEM', '33Reconnect_The_World_Mission_For_BG-05.mp4', '<p>Did you know - The first submarine cable &ndash; a copper-based telegraph cable &ndash; was laid across the Channel between the United Kingdom and France in 1850.</p>', '<p>Recheck all the answers</p>', 'SUBMIT', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reconnect_world`
--

CREATE TABLE `reconnect_world` (
  `id` int(10) NOT NULL,
  `ticker_time` varchar(20) DEFAULT NULL,
  `first_screen_title` varchar(100) DEFAULT NULL,
  `description_first` longtext DEFAULT NULL,
  `description_second` longtext DEFAULT NULL,
  `first_screen_center_img` varchar(50) DEFAULT NULL,
  `first_screen_circle_img` varchar(100) DEFAULT NULL,
  `button_text` varchar(20) DEFAULT NULL,
  `bottom_line_text` longtext DEFAULT NULL,
  `background_img` varchar(50) DEFAULT NULL,
  `second_screen_bakground_img` varchar(50) DEFAULT NULL,
  `second_screen_bakground_center_img` varchar(50) DEFAULT NULL,
  `second_screen_title` varchar(100) DEFAULT NULL,
  `second_screen_text` longtext DEFAULT NULL,
  `second_screen_password` varchar(50) DEFAULT NULL,
  `second_screen_bottom_line_text` longtext DEFAULT NULL,
  `second_screen_button_text` longtext DEFAULT NULL,
  `third_background_img` varchar(50) DEFAULT NULL,
  `third_screen_bakground_center_img` varchar(50) DEFAULT NULL,
  `fourth_screen_background_img` varchar(50) DEFAULT NULL,
  `fourth_screen_center_img` varchar(50) DEFAULT NULL,
  `fourth_screen_img` varchar(200) DEFAULT NULL,
  `fourth_screen_text` longtext DEFAULT NULL,
  `fourth_screen_quetion_selection` varchar(150) DEFAULT NULL,
  `fourth_screen_button` varchar(50) DEFAULT NULL,
  `fifth_screen_background_img` varchar(50) DEFAULT NULL,
  `fifth_screen_background_centerimg` varchar(50) DEFAULT NULL,
  `fifth_screen_text` longtext DEFAULT NULL,
  `fifth_screen_img` varchar(50) DEFAULT NULL,
  `fifth_screen_button_text` varchar(50) DEFAULT NULL,
  `sixth_screen_background_img` varchar(50) DEFAULT NULL,
  `sixth_screen_background_center_img` varchar(50) DEFAULT NULL,
  `sixth_screen_img` varchar(50) DEFAULT NULL,
  `sixth_text` longtext DEFAULT NULL,
  `sixth_button_text` varchar(50) DEFAULT NULL,
  `sevanth_screen_background_img` varchar(50) DEFAULT NULL,
  `sevanth_screen_background_center_img` varchar(50) DEFAULT NULL,
  `sevanth_screen_img` varchar(50) DEFAULT NULL,
  `sevanth_text` longtext DEFAULT NULL,
  `seven_button_text` varchar(50) DEFAULT NULL,
  `sevanth_screen_option` longtext DEFAULT NULL,
  `final_screen_background_img` varchar(50) DEFAULT NULL,
  `final_screen_img` varchar(50) DEFAULT NULL,
  `final_screen_title` varchar(50) DEFAULT NULL,
  `final_screen_bottom_text` longtext DEFAULT NULL,
  `answer_background_img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reconnect_world`
--

INSERT INTO `reconnect_world` (`id`, `ticker_time`, `first_screen_title`, `description_first`, `description_second`, `first_screen_center_img`, `first_screen_circle_img`, `button_text`, `bottom_line_text`, `background_img`, `second_screen_bakground_img`, `second_screen_bakground_center_img`, `second_screen_title`, `second_screen_text`, `second_screen_password`, `second_screen_bottom_line_text`, `second_screen_button_text`, `third_background_img`, `third_screen_bakground_center_img`, `fourth_screen_background_img`, `fourth_screen_center_img`, `fourth_screen_img`, `fourth_screen_text`, `fourth_screen_quetion_selection`, `fourth_screen_button`, `fifth_screen_background_img`, `fifth_screen_background_centerimg`, `fifth_screen_text`, `fifth_screen_img`, `fifth_screen_button_text`, `sixth_screen_background_img`, `sixth_screen_background_center_img`, `sixth_screen_img`, `sixth_text`, `sixth_button_text`, `sevanth_screen_background_img`, `sevanth_screen_background_center_img`, `sevanth_screen_img`, `sevanth_text`, `seven_button_text`, `sevanth_screen_option`, `final_screen_background_img`, `final_screen_img`, `final_screen_title`, `final_screen_bottom_text`, `answer_background_img`) VALUES
(1, '2530', 'Reconnect The World', '<p>There are many things and services in our everyday life that we take for granted, and telecommunications is one of them.</p>', '<p>Guess the right password to connect to a network and begin your mission.</p>', 'Champs screen FG_VP8.webm', '54Asset_1.png', 'Enter', '<p>You&rsquo;ll need an internet connection to begin setting up your mission.</p>\r\n\r\n<p>Once connected, you&rsquo;ll get to explore the world with all the information available on the world wide web.</p>', '54Reconnect_The_World_Mission_For_BG-01.mp4', '64Reconnect_The_World_Mission_For_BG-04.mp4', '73ChampsNew--1ai-03_VP8.webm', 'Let’s connect you to a network', '<p>Hint : It&rsquo;s a distress signal often used ...---...&nbsp;</p>', 'SOS', '<p>There are many things and services in our everyday life that we take for granted, and telecommunications is one of them.</p>\r\n\r\n<p>We surf the internet, send emails to friends and colleagues abroad, talk to family members in foreign countries over the phone, book airline seats and make banking transactions without actually realizing and appreciating the sophisticated technology that enables us to do so......&nbsp;<br />\r\n&nbsp;</p>', 'Submit', '49_connect_to_network.mp4', '76ChampsNew--1ai-03_VP8.webm', '54Reconnect_The_World_Mission_For_BG-05.mp4', '37ChampsNew--1ai-13_VP8.webm', '10Moss_growth.png,70Over_Fishing.png,19Tsunami.png,54Scuba_Diving.png,18Ship_Anchor.png,65Oil_Drilling.png,66Shark_Bites.png', '<p>How a cable interacts with the environment depends on the many influences and factors that shape the ocean.&nbsp;<strong>SCANNING ZONE</strong>&nbsp;for finding various models to find four different / correct reasons for this breach.&nbsp;<br />\r\n&nbsp;</p>', '<p>Select four reasons for breakage in cable</p>', 'Submit', '32Reconnect_The_World_Mission_For_BG-05.mp4', '91ChampsNew--1ai-13_VP8.webm', '<p>Whether sending an email, making an airline booking or simply telephoning overseas, there is more than a 95 per cent probability that those actions will involve the international submarine cable network! Well, done Agents! Rush to the Video HQs. Your station owner has left a message for you. To activate the video, decode the password using the telegraph machine.</p>', '13Reconnect_The_World_Mission_For_BG-02.mp4', 'Next', '40Reconnect_The_World_Mission_For_BG-05.mp4', '55ChampsNew--1ai-03_VP8.webm', '47Cable.png', '<p>Complete the circuit by choosing the correct cable material suitable for this mission Hurry to the Science Lab. Incoming signals at your workstation number 3&nbsp;</p>', 'Next', '95Reconnect_The_World_Mission_For_BG-05.mp4', '17ChampsNew--1ai-03_VP8.webm', '60Cable.png', '<p>Hurray! You&rsquo;ve connected India back to the world! One last task! Quickly name the parts for the next agents so that they can be well prepared for a situation like this&nbsp; Rembember to check for spellings and look for the diagram.</p>', 'Submit', 'Optical Fibres, Petroleum Jelly, Aluminium Tube, Copper, Aluminium Water, Stranded steel wire, Mylar Tape, Polyethylene', '17Mission_accomplished_img.png', '25ChampsNew--1ai-03_VP8.webm', 'RECONNECT THE WORLD   MISSION ACCOMPLISHED!', '<p>RUSH TO THE PHOTOBOOTH AND COLLECT YOUR VICTORY PICTURE</p>', '66Reconnect_The_World_Mission_For_BG-02.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `rescue_champ_hindi`
--

CREATE TABLE `rescue_champ_hindi` (
  `id` int(11) NOT NULL,
  `ticker_time` varchar(10) DEFAULT NULL,
  `first_screen_title` varchar(100) DEFAULT NULL,
  `first_screen_main_background_img` varchar(50) DEFAULT NULL,
  `first_screen_circle_img` varchar(100) DEFAULT NULL,
  `first_screen_button_text` varchar(50) DEFAULT NULL,
  `intro_screen_video` varchar(100) DEFAULT NULL,
  `intro_screen_button` varchar(30) DEFAULT NULL,
  `second_screen_title` varchar(100) DEFAULT NULL,
  `second_main_background_img` varchar(50) DEFAULT NULL,
  `second_screen_button_text` varchar(50) DEFAULT NULL,
  `third_screen_main_background_img` varchar(50) DEFAULT NULL,
  `third_screen_wardname` longtext DEFAULT NULL,
  `eight_screen_button_text` varchar(50) DEFAULT NULL,
  `nine_screen_video` varchar(100) DEFAULT NULL,
  `ten_screen_text` longtext DEFAULT NULL,
  `ten_screen_button_text` varchar(50) DEFAULT NULL,
  `eleven_screen_image` varchar(50) DEFAULT NULL,
  `eleven_screen_text` longtext DEFAULT NULL,
  `twelve_screen_image` varchar(50) DEFAULT NULL,
  `therteen_screen_image` varchar(50) DEFAULT NULL,
  `therteen_screen_text` longtext DEFAULT NULL,
  `fourteen_screen_image` varchar(50) DEFAULT NULL,
  `fourteen_screen_text` longtext DEFAULT NULL,
  `fourteen_screen_sub_text` longtext DEFAULT NULL,
  `right_title_text` varchar(100) DEFAULT NULL,
  `wrong_title_text` varchar(100) DEFAULT NULL,
  `try_again_button_text` varchar(50) DEFAULT NULL,
  `next_button_text` varchar(50) DEFAULT NULL,
  `enter_button_text` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rescue_champ_hindi`
--

INSERT INTO `rescue_champ_hindi` (`id`, `ticker_time`, `first_screen_title`, `first_screen_main_background_img`, `first_screen_circle_img`, `first_screen_button_text`, `intro_screen_video`, `intro_screen_button`, `second_screen_title`, `second_main_background_img`, `second_screen_button_text`, `third_screen_main_background_img`, `third_screen_wardname`, `eight_screen_button_text`, `nine_screen_video`, `ten_screen_text`, `ten_screen_button_text`, `eleven_screen_image`, `eleven_screen_text`, `twelve_screen_image`, `therteen_screen_image`, `therteen_screen_text`, `fourteen_screen_image`, `fourteen_screen_text`, `fourteen_screen_sub_text`, `right_title_text`, `wrong_title_text`, `try_again_button_text`, `next_button_text`, `enter_button_text`) VALUES
(1, '2530', 'सी-सी-टीवी कैमरा अनलॉक करने के लिए एन्टर', '82Champs_screen_BG.mp4', '84CCTV.png', 'एन्टर दबाएँ', '26VID-20231108-WA0035.mp4', 'एन्टर दबाएँ', 'यह एक गुप्त सोसाइटी कैमरा है जिसे पासवर्ड की आवश्यकता है', '34Rescue_Champs_BG.mp4', 'सबमिट करें', '62Rescue_Champs_BG.mp4', '<p>वार्ड का नाम और नंबर&nbsp;</p>', 'Next', '26VID-20231108-WA0035.mp4', '<p>This Screen is not used&nbsp;</p>', 'सबमिट करें', '71Asset_1.png', '<p>नमस्कार, छोटे जासूसों! हमारी सोसायटी का पसंदीदा कुत्ता, चैंप्स, कहीं गुम हो गया है! जैसा कि आप जानते है, चैंप्स सिर्फ हमारा ही नहीं बल्कि सबका पसंदीदा कुत्ता था। सिल्वर सैंड्स हाउसिंग सोसायटी में हम सभी आप से निवेदन करते है कि चैंप्स को जल्दी से जल्दी ढूंढें, इससे पहले कि बहुत देर हो जाए! एक शिकायत आपके निकटतम वार्ड ऑफिस में दर्ज की गई है। आप वार्ड ऑफिसर को विवरण देने के लिए कॉल कर सकते है। तूफ़ान की चेतावनी जारी की गई हैं और ३० मिनट में लाल अलर्ट की घोषणा की जाएगी! जल्दी करें और चैंप्स को उसी जगह वापस लाएं जहां वह रहता है!- अगला&nbsp;</p>', '97Img_2.png', '34img_1.png', '<p>डार्क रूम में मिलने वाले अक्षरों को सुलजाओ ।&nbsp;</p>', '94img_3.png', '<p>आप एक सच्चे चैंपियन हो! चैंप्स कह रहा है, &ldquo; आपका बहुत धन्यवाद&rdquo;&nbsp;</p>', '<p>आप &#39;रेस्क्यू मिशन चैंप्स&#39; पूरा करने में सफल रहे।&nbsp;</p>', 'सही उत्तर', 'गलत उत्तर', 'पुनःप्रयास करें / फिर से प्रयास करें', 'अगला', 'एन्टर दबाएँ');

-- --------------------------------------------------------

--
-- Table structure for table `temp_game_data`
--

CREATE TABLE `temp_game_data` (
  `id` int(10) NOT NULL,
  `game_id` int(10) NOT NULL,
  `slots_id` int(10) NOT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ashish Gosavi', 'agosavi52@gmail.com', NULL, '$2y$10$BpKxU.ccbfO07w32MUvjx.1e6yQsweg20zc4PlY19ke3l3zPoQrl.', 1, 'pL7MACH0EIyAG6tKV6j23cYs8wcZx3v1meSL6TJnrGfA9hvmUUA8zlX9R87Y', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_signup`
--

CREATE TABLE `users_signup` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `game_id` int(10) NOT NULL,
  `slots_id` int(10) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_signup`
--

INSERT INTO `users_signup` (`id`, `name`, `game_id`, `slots_id`, `created_at`) VALUES
(1, 'werqr', 2, 2, '2023-11-08  15:35:38'),
(2, 'asdas', 2, 2, '2023-11-08  15:35:38'),
(3, 'qweqe', 2, 2, '2023-11-08  15:35:38'),
(4, 'sadas', 1, 2, '2023-11-08  22:31:30'),
(5, 'asda', 1, 2, '2023-11-08  22:31:30'),
(6, 'asdsd', 1, 2, '2023-11-08  22:31:30'),
(7, 'erdtct', 1, 2, '2023-11-08  23:42:37'),
(8, 'tfgvg', 1, 2, '2023-11-08  23:42:37'),
(9, 'gyuvh', 1, 2, '2023-11-08  23:42:37'),
(10, 'xcdsd', 3, 2, '2023-11-09  01:25:01'),
(11, 'sadasd', 3, 2, '2023-11-09  01:25:01'),
(12, 'sadas', 3, 2, '2023-11-09  01:25:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coral_empire`
--
ALTER TABLE `coral_empire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coral_empire_quetions`
--
ALTER TABLE `coral_empire_quetions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cosmic_cleanup`
--
ALTER TABLE `cosmic_cleanup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `game1`
--
ALTER TABLE `game1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_info`
--
ALTER TABLE `game_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_list`
--
ALTER TABLE `game_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_slots`
--
ALTER TABLE `game_slots`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_hindi`
--
ALTER TABLE `questions_hindi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reconnect_quetions`
--
ALTER TABLE `reconnect_quetions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reconnect_world`
--
ALTER TABLE `reconnect_world`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rescue_champ_hindi`
--
ALTER TABLE `rescue_champ_hindi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_game_data`
--
ALTER TABLE `temp_game_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_signup`
--
ALTER TABLE `users_signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coral_empire`
--
ALTER TABLE `coral_empire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coral_empire_quetions`
--
ALTER TABLE `coral_empire_quetions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cosmic_cleanup`
--
ALTER TABLE `cosmic_cleanup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game1`
--
ALTER TABLE `game1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `game_info`
--
ALTER TABLE `game_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `game_list`
--
ALTER TABLE `game_list`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `game_slots`
--
ALTER TABLE `game_slots`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions_hindi`
--
ALTER TABLE `questions_hindi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reconnect_quetions`
--
ALTER TABLE `reconnect_quetions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reconnect_world`
--
ALTER TABLE `reconnect_world`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rescue_champ_hindi`
--
ALTER TABLE `rescue_champ_hindi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_game_data`
--
ALTER TABLE `temp_game_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_signup`
--
ALTER TABLE `users_signup`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
