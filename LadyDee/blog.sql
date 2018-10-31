-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2018 at 05:40 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ladydee`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(250) NOT NULL auto_increment,
  `title` varchar(250) NOT NULL,
  `brief` varchar(250) NOT NULL,
  `body` text NOT NULL,
  `date` timestamp NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `brief`, `body`, `date`) VALUES
(1, ' Detoxifying With Aloe Vera', 'I launched a campaign some years back against junk foods. While the article appealed to most of my readers I also proceeded to write an ebook "The science of healthy Nigerian foods" and also made sure the ultimate Nigerian cookbook featured healthy.', 'I launched a campaign some years back against junk foods. While the article appealed to most of my readers I also proceeded to write an ebook "the science of healthy Nigerian foods" and also made sure the ultimate Nigerian cookbook featured healthy tips in the first five pages.<br><br>\r\nI talk about eating healthy foods with every chance I get because I believe you are as healthy as what you eat.<br><br>\r\nWhen I write articles like this most people won''t read it to the end because they wouldn''t want to stop eating some of the foods they love.<br><br>\r\nDid you read the email  " Don''t forget the vegetables? " yet, if you are subscribed to receive my newsletters, you will get it soon.<br><br>\r\nIronically, most of the good foods are not sweet and most of the sweet foods are not healthy; with fruits being the exception of course.<br><br>\r\nI read that the average lifespan of a Nigerian is less than 40 for men and about 42 for women. So my question is What is killing Nigerians? Aside the fact that most of us use generators and don''t care if the exhaust is directly facing our windows. Well, that''s talk for another day.<br><br>\r\nThe average lifespan of the Chinese people was 67.77 years some years back, now it is 71 years. At that age, they still play football and ride bicycles. You can''t say the same about Nigerians.<br><br>\r\nThe topic is really about bitter stuff and sweet stuff detoxification process to keep your cells healthy.\r\n<br><br>\r\nMost people wouldn''t eat stuff that isn''t sweet even if it was going to save their life. Someone once told me "no matter how healthy it is, if it is not sweet, it won''t pass my throat" lol.\r\n<br><br>\r\nThe truth is "you are as healthy as your body cells", and your body cells are directly depending on your daily food choices.\r\n<br><br>\r\nSo the question is "What do you feed your cells?" Are your decision swayed by your appetite or you are disciplined enough to conform your appetite to a healthy standard?\r\n<br><br>\r\nIf your cells don''t get any healthy nutrient, they die faster; and when they die faster, you age faster. So when you are 40, you will be looking like 55.\r\n<br><br>\r\nI used to make this aloe vera juice, it was super nourishing and healthy but it was bitter. I would like to call it my detoxification remedy. I would share the recipe with you if you ask for it, but in the meantime, let''s talk about routine detoxification as a means to keeping your cells healthy.\r\n<br><br>\r\nCommon sense tells me that while I go about taking soft drinks, sodas and all sorts of baked stuff, occasionally, It is very necessary to detoxify!. For this reason, I cooked up an aloe vera juice recipe and planted aloe vera at my backyard. Aloe vera has antiviral and antibacterial properties, and the ability to help treat everything from constipation to diabetes, acne, hair loss, cough, wounds and repair damaged cell.\r\n<br><br>\r\nAcemannan is one of the wonderful elements found in Aloe vera gel. It is a complex carbohydrate that allows nutrients to reach the cells, nourish them and at the same time relieve them of toxins.\r\n<br><br>\r\nIsn''t that reason enough?\r\n<br><br>\r\nIf all you get from aloe vera juice is just detoxification, don''t you think that is good enough? even if it is bitter.\r\n<br><br>\r\nOn the contrary, sugar, chocolate and everything with synthetic sweetener does the exact opposite. They are the reason your body gets toxic in the first place.\r\n<br><br>\r\nSugar speeds up ageing process; it is the major cause of fatigue and tiredness. Results in weakness of the cell, lowers your immune system and ensure you are always on drugs. Do you want my aloe vera juice recipe already?\r\n<br><br>\r\nWhat I am proposing is that while you go about eating chocolates, cakes, cookies and taking all sort of drink with additives, Occasionally, you should drink bitter stuff.\r\n<br><br>\r\nAs much as possible, avoid sugar, honey is a wonderful substitute.\r\n<br><br>\r\nAs much as you can, take aloe vera juice, a glass for every week would go a long way in detoxifying your <b>body.</b>', '2018-10-26 00:00:00'),
(2, 'Are you searching for Nigerian food, looking to make that top of the world Nigeria food dish for your spouse or family?', 'Nigerian is a country in the western part of Africa with over 500 distinct ethnic groups. As expected with such diversity, each region has its own unique cuisine. However, as a result of interaction between the different ethnic groups dishes that wer', 'Nigerian is a country in the western part of Africa with over 500 distinct ethnic groups. As expected with such diversity, each region has its own unique cuisine. However, as a result of interaction between the different ethnic groups dishes that were once regional are now considered national.<br><br>\r\nWestern and early Arabian contact has also influence the preferences and choices you would find on the Nigerian table. <br><br>\r\nIrrespective of where you live or look at though, the Nigerian food recipes come mainly from a selection of semi solid doughs or boiled servings prepared from cassava, plantain, yam, cocoyam, millet, beans, maize, or rice, served with a typical Nigerian soup or stew. <br><br>\r\nSoups and stews are generally a careful and deliberate blend of spices and seeds or thickeners in a broth enriched with fish and assortment of meats and leafy vegetables if desired. <br><br>\r\nMeals are also served with plenty of fruits easily grown near homes.\r\nBelow are a list typical breakfast, lunch and dinner, not an exhaustive lists but an overview of what to expect.\r\n', '2018-10-26 00:00:00'),
(3, 'Nigerian Food: Typical Breakfast Menu List', 'The typical Nigerian breakfast largely depends on where in the country you live in, and to a large extent on your income or buying power. It might be very light or as elaborate as dinner.', 'The typical Nigerian breakfast largely depends on where in the country you live in, and to a large extent on your income or buying power. It might be very light or as elaborate as dinner.<br><br>\r\nThe following are the most commonly found items on the Nigerian breakfast table, from Yola to Calaba, Lekki to Kontagora. <br><br>\r\nThey  may include the folowing:<br>\r\n<ol>\r\n<li><u>Akara:</u>served with pap (ogi or akamu). Akara is made from soaked pealed beans (black eye beans), blended into a thick paste and fried. If you live abroad, you can substitute custard for pap or ogi. </li>\r\n<li><u>Bread</u>smeared with butter or margarine sometimes dunked in tea or hot chocolate, or served with fried, scrambled or boiled egg and a cup of tea.</li>\r\n<li><u>Moi-Moi</u>and bread or pap with a bowl of fresh fruits.</li>\r\n<li><u>Fura de nunu</u>This is pasteurized milk served with millet or corn flour. This is a popular breakfast item in Northern Nigerian, though increasingly consumed all over the country. You can make your very own Fura (millet flour) and nuno (milk) at home or buy from market and ensure you boil to pasteurize before consumption.</li>\r\n<li><u>Fried Ripe Plantain (Dodo)<u>Served with boiled or fried egg and a cup of tea</li>\r\n<li><u>Boiled Yam and Green Plantain</u>served with nice pepper soup and fresh fish - more in Southern / Midwestern Nigeria.</li>\r\n<li><u>Boiled Yam</u>served with scrambled eggs or corned beef sauce. You can substitute potatoes for yam, if you cannot find yam abroad.</li>\r\n<li><u>Boiled Rice and stew</u></li> \r\n</ol>', '2018-10-30 05:17:51');
