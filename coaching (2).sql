-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 09:11 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cat_details` text COLLATE utf8mb4_unicode_ci,
  `fa_icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cat_name`, `cat_slug`, `created_at`, `updated_at`, `cat_details`, `fa_icon`, `cat_image`) VALUES
(1, 'Software Development', 'software-development', '2018-08-29 05:25:43', '2018-09-10 05:39:21', '<p>Very good course</p>', 'fa fa-th', '1536666193.jpg'),
(2, 'Web Development', 'web-development', '2018-08-29 05:26:15', '2018-09-09 04:32:14', '<p>Awesome Web Development is a big thing</p>', 'fa fa-th', '1536666206.jpg'),
(3, 'Awesome Web Development', 'awesome-web-development', '2018-08-29 05:27:26', '2018-09-11 02:19:18', '<p>Awesome Web Development</p>', 'fa fa-th', '1536666215.jpg'),
(6, 'IAS Programs', 'ias-programs', '2018-09-10 05:37:54', '2018-09-10 05:37:54', '<p>IAS Degree</p>', 'fa fa-graduation-cap', '1536666225.jpg'),
(7, 'CBSE Class Maths', 'cbse-class-maths', '2018-09-11 06:04:15', '2018-09-11 06:04:15', '<p>This category contains math tutorial for class 6 to class 10 .</p>', 'fa fa-graduation-cap', '1536666238.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_requirements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_user_rated_count` int(11) NOT NULL DEFAULT '0',
  `course_star_count` int(11) NOT NULL DEFAULT '0',
  `course_lecture_count` int(11) NOT NULL,
  `course_video_length` int(11) DEFAULT NULL,
  `course_language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_intro_video` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `cat_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_slug`, `course_overview`, `course_details`, `course_requirements`, `course_user_rated_count`, `course_star_count`, `course_lecture_count`, `course_video_length`, `course_language`, `course_image`, `course_intro_video`, `user_id`, `created_at`, `updated_at`, `is_deleted`, `is_active`, `cat_id`) VALUES
(1, 'Python Network Programming - Part 3: Scapy & Security Tools', 'python-network-programming---part-3-scapy-security-tools', 'Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!', '<p>Are you a network professional who wants to&nbsp;<strong>learn security concepts&nbsp;</strong>and&nbsp;<strong>the intricacies of network attacks or scans&nbsp;</strong>and then build various tools with Scapy to put those concepts into practice, in an educational environment?</p>\r\n\r\n<p>Are you looking to&nbsp;<strong>become a better network engineer</strong>&nbsp;and&nbsp;<strong>start learning about network security and threats</strong>?</p>\r\n\r\n<p>Or maybe you&#39;re&nbsp;<strong>seeking a raise</strong>&nbsp;or even&nbsp;<strong>a career change</strong>?</p>\r\n\r\n<p>Are you here after going through my&nbsp;<strong><em>&quot;Python Network Programming - Part 1: Build 7 Python Apps&quot;</em></strong>&nbsp;course, which became a bestcourse on Eduonix (Or) did you went through my&nbsp;<strong><em>&ldquo;Python&nbsp;Network Programming - Part 2: Multivendor Environment&rdquo;&nbsp;</em></strong>and decided you want even more?</p>\r\n\r\n<p><strong>Join thousands of successful students who have decided to upgrade their networking skills and boost their careers using this&nbsp;<em>Python Network Programming</em>&nbsp;course series!</strong></p>\r\n\r\n<p><strong>This course covers many network security concepts and attack/scanning tools:</strong></p>\r\n\r\n<ul>\r\n	<li>OSI and TCP/IP</li>\r\n	<li>Scapy and all of its main functions</li>\r\n	<li>Network sniffer</li>\r\n	<li>Basic traceroute</li>\r\n	<li>TCP SYN traceroute</li>\r\n	<li>UDP traceroute</li>\r\n	<li>DNS traceroute</li>\r\n	<li>TCP SYN scanner</li>\r\n	<li>TCP ACK scanner</li>\r\n	<li>TCP FIN scanner</li>\r\n	<li>TCP Xmas scanner</li>\r\n	<li>TCP Null scanner</li>\r\n	<li>TCP Port scanner</li>\r\n	<li>ARP / ICMP / TCP / UDP ping</li>\r\n	<li>ARP monitor</li>\r\n	<li>ARP cache poisoning attack</li>\r\n	<li>SYN flooding attack</li>\r\n	<li>DHCP starvation attack</li>\r\n	<li>Rogue DHCP server detector</li>\r\n	<li>OS fingerprinting</li>\r\n	<li>NMAP application</li>\r\n</ul>\r\n\r\n<p>This Python Network Programming course is aimed at network professionals having little or no experience in network security and a great desire to&nbsp;<strong>use Python and Scapy to build various network security tools for their network</strong>. This hands-on Python Network Programming training walks you through lots of scenarios, attacks and useful tools to help you get started with network security.</p>\r\n\r\n<p>Well, let me tell you what&#39;s this course all about:</p>\r\n\r\n<ul>\r\n	<li>Learning to use the&nbsp;amazing Scapy module and all its capabilities.</li>\r\n	<li>Building network attacking and scanning tools and testing them against Windows&nbsp;/&nbsp;Linux&nbsp;/&nbsp;Cisco targets.</li>\r\n	<li><strong>Building your own (basic) version of NMAP and scanning Windows&nbsp;/&nbsp;Linux hosts.</strong></li>\r\n	<li>Performing various small network tests and operations using the Scapy interpreter.</li>\r\n</ul>', 'You should have a great desire to learn network security concepts and do it in a hands-on fashion, without having to watch countless lectures filled with slides and theory.\r\nYou should already be familiar with networking concepts like: TCP/IP, UDP, OSI Layers, Packets, Frames, ICMP, ARP, DHCP\r\nI am going to use only free software throughout the course: VirtualBox, Linux, free VM etc.', 20, 86, 10, 11, 'English', '1536564833.png', NULL, 3, '2018-08-31 06:43:52', '2018-08-31 06:43:52', 0, 1, 1),
(2, 'Python Network Programming - Part 3: Scapy & Security Tools', 'python-network-programming---part-3-scapy-security-tools-1', 'Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!', '<p>Are you a network professional who wants to&nbsp;<strong>learn security concepts&nbsp;</strong>and&nbsp;<strong>the intricacies of network attacks or scans&nbsp;</strong>and then build various tools with Scapy to put those concepts into practice, in an educational environment?</p>\r\n\r\n<p>Are you looking to&nbsp;<strong>become a better network engineer</strong>&nbsp;and&nbsp;<strong>start learning about network security and threats</strong>?</p>\r\n\r\n<p>Or maybe you&#39;re&nbsp;<strong>seeking a raise</strong>&nbsp;or even&nbsp;<strong>a career change</strong>?</p>\r\n\r\n<p>Are you here after going through my&nbsp;<strong><em>&quot;Python Network Programming - Part 1: Build 7 Python Apps&quot;</em></strong>&nbsp;course, which became a bestcourse on Eduonix (Or) did you went through my&nbsp;<strong><em>&ldquo;Python&nbsp;Network Programming - Part 2: Multivendor Environment&rdquo;&nbsp;</em></strong>and decided you want even more?</p>\r\n\r\n<p><strong>Join thousands of successful students who have decided to upgrade their networking skills and boost their careers using this&nbsp;<em>Python Network Programming</em>&nbsp;course series!</strong></p>\r\n\r\n<p><strong>This course covers many network security concepts and attack/scanning tools:</strong></p>\r\n\r\n<ul>\r\n	<li>OSI and TCP/IP</li>\r\n	<li>Scapy and all of its main functions</li>\r\n	<li>Network sniffer</li>\r\n	<li>Basic traceroute</li>\r\n	<li>TCP SYN traceroute</li>\r\n	<li>UDP traceroute</li>\r\n	<li>DNS traceroute</li>\r\n	<li>TCP SYN scanner</li>\r\n	<li>TCP ACK scanner</li>\r\n	<li>TCP FIN scanner</li>\r\n	<li>TCP Xmas scanner</li>\r\n	<li>TCP Null scanner</li>\r\n	<li>TCP Port scanner</li>\r\n	<li>ARP / ICMP / TCP / UDP ping</li>\r\n	<li>ARP monitor</li>\r\n	<li>ARP cache poisoning attack</li>\r\n	<li>SYN flooding attack</li>\r\n	<li>DHCP starvation attack</li>\r\n	<li>Rogue DHCP server detector</li>\r\n	<li>OS fingerprinting</li>\r\n	<li>NMAP application</li>\r\n</ul>\r\n\r\n<p>This Python Network Programming course is aimed at network professionals having little or no experience in network security and a great desire to&nbsp;<strong>use Python and Scapy to build various network security tools for their network</strong>. This hands-on Python Network Programming training walks you through lots of scenarios, attacks and useful tools to help you get started with network security.</p>\r\n\r\n<p>Well, let me tell you what&#39;s this course all about:</p>\r\n\r\n<ul>\r\n	<li>Learning to use the&nbsp;amazing Scapy module and all its capabilities.</li>\r\n	<li>Building network attacking and scanning tools and testing them against Windows&nbsp;/&nbsp;Linux&nbsp;/&nbsp;Cisco targets.</li>\r\n	<li><strong>Building your own (basic) version of NMAP and scanning Windows&nbsp;/&nbsp;Linux hosts.</strong></li>\r\n	<li>Performing various small network tests and operations using the Scapy interpreter.</li>\r\n</ul>', 'You should have a great desire to learn network security concepts and do it in a hands-on fashion, without having to watch countless lectures filled with slides and theory.\r\nYou should already be familiar with networking concepts like: TCP/IP, UDP, OSI Layers, Packets, Frames, ICMP, ARP, DHCP\r\nI am going to use only free software throughout the course: VirtualBox, Linux, free VM etc.', 0, 0, 10, NULL, 'English', '1536561067_1867.png', NULL, 3, '2018-08-31 06:49:03', '2018-08-31 06:49:03', 0, 1, 3),
(3, 'GraphQL for Absolute Beginners: The Newbie Guide', 'graphql-for-absolute-beginners-the-newbie-guide', 'Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!', '<p>Fetching data when coding is often a huge problem, especially when the load times slow down or crash your apps. This is exactly what happened at Facebook, when they tried to design their app and translate their code from their website to their app. Now, they needed a solution &ndash; a great one.</p>\r\n\r\n<p>So, they designed GraphQL! GraphQL allows developers to fetch data from different sources using one common language so that it not only got the right data, but also reduced the app loading time. Since, then GraphQL API has become one of the most popular data fetching APIs for developers around the world.</p>\r\n\r\n<p>GraphQL allows developers to get exactly what data they need and get multiple resources in the same request. Think of GraphQL as your own personal assistant that does the hard work of searching multiple resources for you, instead of you having to manually fetch data from different places.</p>\r\n\r\n<p><strong>This course is exactly what you need to get up and running with GraphQL!</strong></p>\r\n\r\n<p>Our beginner&rsquo;s course will start you off from the beginning to help you master the fundamentals of GraphQL, including learning data types, schemas, queries and so on. It will teach you the basic knowledge that you will need to understand the core concepts of this amazing application layer query language.</p>\r\n\r\n<p>If you are tired of trying to learn GraphQL with confusing resources and tutorials, well then this is the perfect course for you. Cause we won&rsquo;t rely on the difficult and confusing textbook methods, but instead focus on helping you actually become acquainted with the technology using a hands-on approach. With our course, you will learn how to actually fetch data, and manipulate it. You will also learn everything else you need to know about the API by actually working with it in GraphQL&rsquo;s playground.</p>\r\n\r\n<p>The course will help you breakdown the fundamentals of GraphQL API, the language and anything else that you need to get started. The course assumes that you have no knowledge of GraphQL and will start at the very beginning, making it a great refresher course for advanced developers as well. You will also learn features of GraphQL, the REST routing and even its drawbacks.</p>\r\n\r\n<p>You will then become acquainted with the GraphQL interface and how it works with Express and React. You will also learn how to carry data with Query, including how to make requests, different errors that you can encounter, how to build GraphQL servers from scratch, including how to integrate it with React.</p>\r\n\r\n<p>Let&rsquo;s break down what you will learn in this course:</p>\r\n\r\n<ul>\r\n	<li>Introduction into GraphQL, including features, the REST Routing, drawbacks of REST routing</li>\r\n	<li>How to use GraphQL with Express, different clients, schema, queries, the GraphQL Tool, resolvers, and so on.</li>\r\n	<li>How with carry data with Query including understand terms such as fields, arguments, aliases, fragments, directives, etc.</li>\r\n	<li>How to spot and solve errors in GraphQL</li>\r\n	<li>Building GraphQL Server from scratch</li>\r\n</ul>\r\n\r\n<p>Enroll now and learn how to make fetching data as easy as a piece of pie!</p>', 'Basic knowledge of SQL is required to complete the courseBasic knowledge of JavaScript or Python will help understand the concepts', 0, 0, 20, NULL, 'English', '1536564881.jpeg', NULL, 3, '2018-08-31 13:32:10', '2018-08-31 13:32:10', 0, 1, 2),
(4, 'Learn to setup your Ecommerce website using WooCommerce', 'learn-to-setup-your-ecommerce-website-using-woocommerce', 'Complete guide to creating and running your shop with Woocommerce and WordPress for beginners', '<p>Everyone remembers the early days of Ebay and Amazon that offered a simple platform for purchasing goods online. Then came the days of Etsy and online stores that allowed individual buyers to get into that action by requiring them to build their own stores online for a fraction of the cost of building e-commerce websites.</p>\r\n\r\n<p>The cost of building e-commerce websites are significantly high and set back companies for a large amount. This worsens if you want to add a secure payment gateway to ensure a seamless monetary transaction to your own website. This is why building an online store or an e-commerce website are extremely expensive.</p>\r\n\r\n<p>Well, what if all of that could be solved with a plugin? WooCommerce does exactly that by removing the hassle that comes with building an e-commerce website from scratch. Add a plugin and WooCommerce will add a cart directly to your website.</p>\r\n\r\n<p>WooCommerce is a plugin that allows a lot of features and functionalities out of the box. You can not only design your own website and sell items on there, but also keep track of your inventory, calculate shipping rates, check your sales and profits, as well as offer a wide range of payment options.</p>\r\n\r\n<p>While all of this might seem a little complicated to master, we&rsquo;ve got you covered! This course has been designed to help you breakdown WooCommerce into simple and easy to master segments. In this tutorial, you&rsquo;ll learn not only learn how to install WooCommerce but also how to integrate it successfully into your website to turn it into an easy to run online store.</p>\r\n\r\n<p>That&rsquo;s not all, we&rsquo;ll also show you how to start and set up your WordPress website, which means you&rsquo;ll learn how to start everything from the beginning. In case, you&rsquo;ve already got your own website, you can simply skip ahead to the WooCommerce set up.</p>\r\n\r\n<p>At the end of this course, you will not only know what WooCommerce is but you&rsquo;ll have set up your own WordPress website, become familiar with the WordPress Dashboard, downloaded and integrated WooCommerce and also become familiar with the plugin&rsquo;s Dashboard. That&rsquo;s not all, together with the instructor you&rsquo;ll also create an entire online store from scratch including adding payment options.</p>\r\n\r\n<p><strong>What you&rsquo;ll learn in this course:</strong></p>\r\n\r\n<ul>\r\n	<li>Setting up the environment</li>\r\n	<li>Installing essentials such as Notepad++, WAMP, etc.</li>\r\n	<li>Installing and Setting up WordPress</li>\r\n	<li>Going through the WordPress Dashboard</li>\r\n	<li>Installing and Setting up WooCommerce</li>\r\n	<li>Touring the WooCommerce Dashboard</li>\r\n	<li>Install Theme and Payments</li>\r\n	<li>Designing the Store Front</li>\r\n	<li>Setting up PayPal payment option</li>\r\n	<li>Adding Products and Categories</li>\r\n	<li>Marketing &amp; Monitoring your sales</li>\r\n</ul>\r\n\r\n<p>Enroll now and start building your own store from scratch!</p>', 'Basic knowledge of web and WordPress is sufficient to complete this course', 0, 0, 114, NULL, 'English', '1536564898.png', NULL, 3, '2018-08-31 13:35:02', '2018-08-31 13:35:02', 0, 1, 3),
(12, 'PHP Codeigniter Tutorial for Beginners step - by -  step', 'phpcodeignitertutorialforbeginnersstep-by-step', 'PHP Codeigniter tutorial for beginners step by step. Best video tutorial for beginners having prior knowledge to PHP.Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!', '<p>Codeigniter is a MVC framework of PHP that is used to develop high end web apploicatiosn with an ease. Here we will teach you the basics of a Codeigniter so that you can make projects on to this.&nbsp;</p>', 'You should have prior knowledge to PHP, HTML, CSS, AJAX.\r\nPHP OOPS concept is an added advantage.', 0, 0, 55, NULL, 'English', '1536564916.jpg', NULL, 3, '2018-09-07 05:18:29', '2018-09-07 06:14:29', 0, 1, 2),
(13, 'test', 'test', 'Learn GraphQL query language for APIs and GraphQL servers from scratch in this Getting Started with GraphQL Tutorial.', '<p>sd&nbsp; sd&nbsp;</p>', '.,dsmmsdl', 0, 0, 11, NULL, 'English', '1536564932.png', NULL, 3, '2018-09-10 01:01:07', '2018-09-10 01:01:07', 0, 1, 2),
(14, 'test', 'test-1', 'Learn GraphQL query language for APIs and GraphQL servers from scratch in this Getting Started with GraphQL Tutorial.Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!', '<p>sd&nbsp; sd&nbsp;</p>', '.,dsmmsdl', 0, 0, 11, NULL, 'English', '1536561429_3180.png', NULL, 3, '2018-09-10 01:07:08', '2018-09-10 01:07:10', 0, 1, 2),
(15, 'Asterisk and FreePBX - Begin Your VoIP Dev Journey', 'asteriskandfreepbx-beginyourvoipdevjourney', 'Learn to build Asterisk and FreePBX from source and set up local phones. Focus on practical with very little theory. Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!Build Lots of Network Security and Monitoring Tools Using the Amazing Power of Python and Scapy. 20+ Scripts Included!', '<p><strong>This course is for you if you are new to VoIP and want to learn how to setup Asterisk - the flexible and extremely popular open source platform for enabling VoIP based systems.</strong></p>\r\n\r\n<p>In this course, we will&nbsp;<strong>start from the very scratch</strong>. This is a very&nbsp;<strong>applied course</strong>, so we will only look at one brief theory lesson and then start building asterisk from source. I will explain all the concepts as they come along. You only&nbsp;<strong>need a basic understanding of the Linux command line</strong>. I will try to explain all the asterisk-related commands in this course.</p>\r\n\r\n<p>We will also set up FreePBX - a GUI-based system that allows you to handle your asterisk installation in an easy-to-use and powerful interface. Once you set it up, even a moderately knowledgeable client can use it to set up their systems and perform their day-to-day operations - thus making your life as an administrator much easier.</p>\r\n\r\n<p>In this course, I will explain all the steps necessary to setup Asterisk, dial a hello world call to this system and then set up FreePBX. Afterwards, we will set up two local extensions that will allow you to create an exchange within an office environment. Since this is a basic course, we will not cover inter-organization VoIP such as DIDs, SIP trunks etc. However, we work in.a way that after completing this course, these other aspects will also be easy for you to set up.</p>\r\n\r\n<p>And remember: The primary reason you pay for a course is because of support. So, make sure you ask questions if you ever get stuck and I will respond as quickly as possible. My maximum response time is about 10 hours across all my courses.</p>', 'Very basic understanding of Linux (I will try to explain commands though)\r\nAccess to three machines — Physical or Virtual. One for Asterisk', 0, 0, 15, NULL, 'English', '1536563364_3675.jpeg', NULL, 3, '2018-09-10 01:39:24', '2018-09-10 01:39:25', 0, 1, 2),
(16, 'test2', 'test2', 'Learn GraphQL query language for APIs and GraphQL servers from scratch in this Getting Started with GraphQL Tutorial.', '<p>Using ViewComposer is the correct way to pass data to your views. You should probably consider accepting this answer.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1628226/roastedtoast\">roastedtoast</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment60825416_28608795\">Apr 14 &#39;16 at 5:19</a></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>The first one saved my date, Thanks.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/4569865/%d9%90allloush\">ِAllloush</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment61117996_28608795\">Apr 21 &#39;16 at 12:57</a></p>\r\n	</li>\r\n	<li>\r\n	<p>Your example is missing the&nbsp;<code>register()</code>&nbsp;method - it&#39;s not optional&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1090438/jonathan\">Jonathan</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment64623534_28608795\">Jul 27 &#39;16 at 16:50</a>&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>@jonathan thanks to point it out, but example contains only those section need to take care of. perspective to sharing data with view.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1728836/safoor-safdar\">Safoor Safdar</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment64651681_28608795\">Jul 28 &#39;16 at 10:50</a>&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>1</p>\r\n\r\n	<p>This is not a good idea, View composers create the composer instance for each individual view it means if you run a 1000 times loop, 1000 composer instances would be created and, 1000 times the firing event is handled which is not something you want.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1907919/reza-shadman\">Reza Shadman</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment68699222_28608795\">Nov 22 &#39;16 at 8:11</a>&nbsp;</p>\r\n	</li>\r\n</ul>', 'Using ViewComposer is the correct way to pass data to your views. You should probably consider accepting this answer. – roastedtoast Apr 14 \'16 at 5:19\r\nThe first one saved my date, Thanks. – ِAllloush Apr 21 \'16 at 12:57\r\nYour example is missing the register() method - it\'s not optional – Jonathan Jul 27 \'16 at 16:50 \r\n@jonathan thanks to point it out, but example contains only those section need to take care of. perspective to sharing data with view. – Safoor Safdar Jul 28 \'16 at 10:50 \r\n1\r\nThis is not a good idea, View composers create the composer instance for each individual view it means if you run a 1000 times loop, 1000 composer instances would be created and, 1000 times the firing event is handled which is not something you want. – Reza Shadman Nov 22 \'16 at 8:11', 0, 0, 57, NULL, 'English', '1536580288_2659.jpeg', NULL, 3, '2018-09-10 06:21:27', '2018-09-10 06:21:29', 0, 0, 2),
(17, 'test2', 'test2-1', 'Learn GraphQL query language for APIs and GraphQL servers from scratch in this Getting Started with GraphQL Tutorial.', '<p>Using ViewComposer is the correct way to pass data to your views. You should probably consider accepting this answer.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1628226/roastedtoast\">roastedtoast</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment60825416_28608795\">Apr 14 &#39;16 at 5:19</a></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>The first one saved my date, Thanks.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/4569865/%d9%90allloush\">ِAllloush</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment61117996_28608795\">Apr 21 &#39;16 at 12:57</a></p>\r\n	</li>\r\n	<li>\r\n	<p>Your example is missing the&nbsp;<code>register()</code>&nbsp;method - it&#39;s not optional&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1090438/jonathan\">Jonathan</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment64623534_28608795\">Jul 27 &#39;16 at 16:50</a>&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>@jonathan thanks to point it out, but example contains only those section need to take care of. perspective to sharing data with view.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1728836/safoor-safdar\">Safoor Safdar</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment64651681_28608795\">Jul 28 &#39;16 at 10:50</a>&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p>1</p>\r\n\r\n	<p>This is not a good idea, View composers create the composer instance for each individual view it means if you run a 1000 times loop, 1000 composer instances would be created and, 1000 times the firing event is handled which is not something you want.&nbsp;&ndash;&nbsp;<a href=\"https://stackoverflow.com/users/1907919/reza-shadman\">Reza Shadman</a>&nbsp;<a href=\"https://stackoverflow.com/questions/28608527/how-to-pass-data-to-all-views-in-laravel-5#comment68699222_28608795\">Nov 22 &#39;16 at 8:11</a>&nbsp;</p>\r\n	</li>\r\n</ul>', 'Using ViewComposer is the correct way to pass data to your views. You should probably consider accepting this answer. – roastedtoast Apr 14 \'16 at 5:19\r\nThe first one saved my date, Thanks. – ِAllloush Apr 21 \'16 at 12:57\r\nYour example is missing the register() method - it\'s not optional – Jonathan Jul 27 \'16 at 16:50 \r\n@jonathan thanks to point it out, but example contains only those section need to take care of. perspective to sharing data with view. – Safoor Safdar Jul 28 \'16 at 10:50 \r\n1\r\nThis is not a good idea, View composers create the composer instance for each individual view it means if you run a 1000 times loop, 1000 composer instances would be created and, 1000 times the firing event is handled which is not something you want. – Reza Shadman Nov 22 \'16 at 8:11', 0, 0, 57, NULL, 'English', '1536580324_3681.jpeg', NULL, 3, '2018-09-10 06:22:03', '2018-09-10 06:22:04', 0, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_languages`
--

CREATE TABLE `course_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_languages`
--

INSERT INTO `course_languages` (`id`, `lang_name`, `created_at`, `updated_at`) VALUES
(1, 'English', '2018-07-31 18:30:00', '2018-07-31 18:30:00'),
(2, 'Hindi', '2018-07-31 18:30:00', '2018-07-31 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `course_tag`
--

CREATE TABLE `course_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_tag`
--

INSERT INTO `course_tag` (`id`, `course_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 12, 2, NULL, NULL),
(2, 12, 1, NULL, NULL),
(3, 12, 3, NULL, NULL),
(4, 13, 10, NULL, NULL),
(5, 14, 10, NULL, NULL),
(6, 15, 10, NULL, NULL),
(7, 16, 10, NULL, NULL),
(8, 16, 3, NULL, NULL),
(9, 17, 10, NULL, NULL),
(10, 17, 3, NULL, NULL);

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
(3, '2018_08_23_083120_add_superuser_to_users', 2),
(4, '2018_08_23_110019_edit_default_mobile_value_to_users', 3),
(5, '2018_08_23_114706_update_is_superuser_field_to_users', 4),
(6, '2018_08_23_122357_add_avatar_to_users', 5),
(7, '2018_08_23_130529_update_password_to_nullable_to_users', 6),
(8, '2018_08_24_123353_create_categories_table', 7),
(9, '2018_08_29_082359_add_cat_details_to_category', 8),
(10, '2018_08_29_100609_add_cat_fa_icon_to_category', 9),
(11, '2018_08_29_104336_add_cat_slug_unique_to_categories', 10),
(12, '2018_08_29_184659_create_tags_table', 11),
(13, '2018_08_29_191034_add_is_deleted_to_tags', 12),
(14, '2018_08_30_061851_add_is_user_to_tags', 13),
(15, '2018_08_30_071652_add_default_value_to_is_deleted_to_tags', 14),
(16, '2018_08_30_082919_create_courses_table', 15),
(20, '2018_08_30_194859_add_is_deleted_to_courses', 17),
(21, '2018_08_31_074139_add_is_active_to_courses', 18),
(22, '2018_08_31_082803_create_course_languages_table', 19),
(23, '2018_08_31_103335_add_cat_id_to_courses', 20),
(24, '2018_08_31_120727_add_nullable_to_course_video_length_to_courses', 21),
(25, '2018_08_31_121153_add_text_to_course_details_to_courses', 22),
(26, '2018_08_31_121301_add_text_to_course_requirements_to_courses', 23),
(27, '2018_09_03_061200_create_sections_table', 24),
(28, '2018_09_03_063309_create_video_lectures_table', 25),
(29, '2018_09_03_105806_add_nullable_to_video_link_in_videolecture', 26),
(30, '2018_09_04_071812_add_is_trainer_to_users', 27),
(31, '2018_08_30_191016_create_course_tag_table', 28),
(32, '2018_09_09_083650_add_text_to_catgeory', 29),
(33, '2018_09_10_061304_add_course_image_to_courses', 30),
(34, '2018_09_10_071217_change_course_overview_to_text_to_courses', 31),
(35, '2018_09_10_102308_create_seos_table', 32);

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
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section_name`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to the course', 1, '2018-09-03 04:44:33', '2018-09-03 04:44:33'),
(2, 'Setting Up the Environment', 1, '2018-09-03 04:44:33', '2018-09-03 04:44:33'),
(3, 'Introduction to the course', 1, '2018-09-03 04:44:33', '2018-09-03 04:44:33'),
(4, 'Introduction to the course', 1, '2018-09-03 04:44:33', '2018-09-03 04:44:33'),
(5, 'Getting Started With This Course', 4, '2018-09-07 05:02:49', '2018-09-07 05:02:49'),
(6, 'Course Resources', 4, '2018-09-07 05:02:49', '2018-09-07 05:02:49'),
(7, 'Quick Overview Of The OSI Stack And TCP/IP', 4, '2018-09-07 05:02:49', '2018-09-07 05:02:49'),
(8, 'Exploring The Scapy Tool And Its Features', 4, '2018-09-07 05:02:49', '2018-09-07 05:02:49'),
(9, 'Building Basic Network And Security Tools With Scapy', 4, '2018-09-07 05:02:49', '2018-09-07 05:02:49'),
(10, 'Building A Basic NMAP Application With Python And Scapy', 4, '2018-09-07 05:02:49', '2018-09-07 05:02:49'),
(11, 'Final Considerations', 4, '2018-09-07 05:02:49', '2018-09-07 05:02:49'),
(12, 'Introduction to the course', 12, '2018-09-07 05:31:44', '2018-09-07 05:31:44'),
(13, 'Basics', 12, '2018-09-07 05:31:44', '2018-09-07 05:31:44'),
(14, 'Codeigniter In Deep', 12, '2018-09-07 05:32:00', '2018-09-07 05:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED DEFAULT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `tag_id` int(10) UNSIGNED DEFAULT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `title`, `keyword`, `description`, `cat_id`, `course_id`, `tag_id`, `page_name`, `created_at`, `updated_at`) VALUES
(1, 'Hello higheness', 'How are youHello higheness', 'GoodHello higheness', 6, NULL, NULL, NULL, '2018-09-10 05:37:54', '2018-09-10 06:13:47'),
(2, 'Software Development', 'Software Development', 'Software Development', 1, NULL, NULL, NULL, NULL, '2018-09-11 02:18:29'),
(3, 'Web Development', 'Web Development', 'Web Development', 2, NULL, NULL, NULL, NULL, '2018-09-11 02:19:03'),
(4, 'Awesome Web Development', 'Awesome Web Development', 'Awesome Web Development', 3, NULL, NULL, NULL, NULL, '2018-09-11 02:19:18'),
(5, 'Using ViewComposer is the correct way to pass data to your views. You should probably consider accepting this answer. – roastedtoast Apr 14 \'16 at 5:19 The first one saved my date, Thanks. – ِAllloush Apr 21 \'16 at 12:57 Your example is missing the register() method - it\'s not optional – Jonathan Jul 27 \'16 at 16:50  @jonathan thanks to point it out, but example contains only those section need to take care of. perspective to sharing data with view. – Safoor Safdar Jul 28 \'16 at 10:50  1 This is not a good idea, View composers create the composer instance for each individual view it means if you run a 1000 times loop, 1000 composer instances would be created and, 1000 times the firing event is handled which is not something you want. – Reza Shadman Nov 22 \'16 at 8:11', 'Using ViewComposer is the correct way to pass data to your views. You should probably consider accepting this answer. – roastedtoast Apr 14 \'16 at 5:19\r\nThe first one saved my date, Thanks. – ِAllloush Apr 21 \'16 at 12:57\r\nYour example is missing the register() method - it\'s not optional – Jonathan Jul 27 \'16 at 16:50 \r\n@jonathan thanks to point it out, but example contains only those section need to take care of. perspective to sharing data with view. – Safoor Safdar Jul 28 \'16 at 10:50 \r\n1\r\nThis is not a good idea, View composers create the composer instance for each individual view it means if you run a 1000 times loop, 1000 composer instances would be created and, 1000 times the firing event is handled which is not something you want. – Reza Shadman Nov 22 \'16 at 8:11', 'Using ViewComposer is the correct way to pass data to your views. You should probably consider accepting this answer. – roastedtoast Apr 14 \'16 at 5:19\r\nThe first one saved my date, Thanks. – ِAllloush Apr 21 \'16 at 12:57\r\nYour example is missing the register() method - it\'s not optional – Jonathan Jul 27 \'16 at 16:50 \r\n@jonathan thanks to point it out, but example contains only those section need to take care of. perspective to sharing data with view. – Safoor Safdar Jul 28 \'16 at 10:50 \r\n1\r\nThis is not a good idea, View composers create the composer instance for each individual view it means if you run a 1000 times loop, 1000 composer instances would be created and, 1000 times the firing event is handled which is not something you want. – Reza Shadman Nov 22 \'16 at 8:11', NULL, 12, NULL, NULL, '2018-09-10 06:22:05', '2018-09-10 06:22:05'),
(6, 'My Courseeras is her', 'My CourseeraMy Courseeras is her', 'My CourseeraMy Courseeras is herMy Courseeras is her', NULL, NULL, NULL, 'homepage', '2018-09-11 04:56:42', '2018-09-11 05:43:15'),
(7, 'aboutus is good', 'aboutusMy CourseeMy My Courseeras is herMy Courseeras is herCourseeras is herras is her', 'aboutusMy Courseeras is herMy Courseeras is herMy Courseeras is herMy Courseeras is herMy Courseeras is her', NULL, NULL, NULL, 'aboutus', '2018-09-11 05:29:00', '2018-09-11 05:43:35'),
(8, 'Math tutorial', 'hello', 'how are you', 7, NULL, NULL, NULL, '2018-09-11 06:04:15', '2018-09-11 06:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_deleted` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `tag_slug`, `created_at`, `updated_at`, `is_deleted`, `user_id`) VALUES
(1, 'HTML', 'html', '2018-08-30 01:48:05', '2018-08-30 01:48:05', '0', 3),
(2, 'CSS', 'css', '2018-08-30 01:59:46', '2018-08-30 01:59:46', '0', 3),
(3, 'PHP', 'php', '2018-08-30 01:59:59', '2018-08-30 01:59:59', '0', 3),
(4, 'Python', 'python', '2018-08-30 02:00:47', '2018-08-30 02:00:47', '0', 3),
(5, 'Class 9', 'class-9', '2018-08-30 02:05:38', '2018-08-30 02:05:38', '0', 3),
(6, 'Class 7', 'class-7', '2018-08-30 02:05:44', '2018-08-30 02:05:44', '0', 3),
(7, 'CBSE', 'cbse', '2018-08-30 02:19:19', '2018-08-30 02:19:19', '0', 3),
(8, 'Class 11', 'class-11', '2018-08-30 02:21:08', '2018-08-30 02:21:08', '0', 3),
(9, 'Class 6', 'class-6', '2018-08-30 02:22:06', '2018-08-30 02:22:06', '0', 3),
(10, 'Class 12', 'class-12', '2018-08-30 02:22:17', '2018-08-30 02:22:17', '0', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_superuser` tinyint(1) NOT NULL DEFAULT '0',
  `is_staff` tinyint(1) NOT NULL DEFAULT '0',
  `google_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar_original` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_trainer` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `remember_token`, `created_at`, `updated_at`, `is_superuser`, `is_staff`, `google_id`, `avatar`, `avatar_original`, `is_trainer`) VALUES
(1, 'Paurush Ankit', 'paurushankit5@gmail.com', NULL, '$2y$10$ptERu7RCQlOhjMVgfGm8f.hBhPDzE3B0Q8cYSpOOx6/kDCb7S6S46', '3VGxbbLyAUUyKC0OYB9oZSWEdbPqAiGFMKxDKLlnwronE3fXge1gGAe4BdjK', '2018-08-23 06:18:22', '2018-08-23 07:31:48', 0, 0, '100263653485699806988', 'https://lh5.googleusercontent.com/-5tmAJrdDTz4/AAAAAAAAAAI/AAAAAAAAABI/mtV0VhDlQbQ/photo.jpg?sz=50', 'https://lh5.googleusercontent.com/-5tmAJrdDTz4/AAAAAAAAAAI/AAAAAAAAABI/mtV0VhDlQbQ/photo.jpg', 0),
(2, 'Paurush Ankit', 'paurush.a@mantralabsglobal.com', NULL, NULL, 'oF6mPGnQLF8UZUihnv49kWlnvQQRfbM2wXraqSGr29Qg3icDIHSBcUde6RIf', '2018-08-23 07:38:03', '2018-08-23 07:38:03', 0, 0, '108373151982918326932', 'https://lh6.googleusercontent.com/-NXFs0BuuJIA/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaNPzVZZ664ZjhzzhAIlW44h-TaJUw/mo/photo.jpg?sz=50', 'https://lh6.googleusercontent.com/-NXFs0BuuJIA/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaNPzVZZ664ZjhzzhAIlW44h-TaJUw/mo/photo.jpg', 0),
(3, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ptERu7RCQlOhjMVgfGm8f.hBhPDzE3B0Q8cYSpOOx6/kDCb7S6S46', 'EYyACiNEz9fgTPjyU0aKggUHmRbyASKRqPb1saw3N05513ZvrgI3j4WPLwWd', '2018-08-24 01:17:55', '2018-08-24 01:17:55', 1, 1, NULL, NULL, NULL, 0),
(4, 'Paurush Ankit', 'paurushankit0@gmail.com', NULL, NULL, 'QJB15gnwC7iu8okHb186RP0Qcp5kK0fuROPXx8SwXID9WKguzK6kSg1wp6zh', '2018-09-04 02:14:39', '2018-09-04 02:14:39', 0, 0, '106058711788562868108', 'https://lh5.googleusercontent.com/-0quzotnTXIY/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaPLflbj2ZNyFx9-5Jq9AGy2Zur0Dg/mo/photo.jpg?sz=50', 'https://lh5.googleusercontent.com/-0quzotnTXIY/AAAAAAAAAAI/AAAAAAAAAAA/APUIFaPLflbj2ZNyFx9-5Jq9AGy2Zur0Dg/mo/photo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video_lectures`
--

CREATE TABLE `video_lectures` (
  `id` int(10) UNSIGNED NOT NULL,
  `lecture_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_lectures`
--

INSERT INTO `video_lectures` (`id`, `lecture_name`, `video_link`, `section_id`, `created_at`, `updated_at`) VALUES
(1, 'Introduction', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 1, '2018-09-03 05:31:13', '2018-09-03 05:31:13'),
(2, 'Basic Requirements', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 1, '2018-09-03 05:31:13', '2018-09-03 05:31:13'),
(3, 'Introduction', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 1, '2018-09-03 05:32:07', '2018-09-03 05:32:07'),
(4, 'Downloading - All The Files (Version 2)', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 2, '2018-09-03 06:45:00', '2018-09-03 06:45:00'),
(5, 'How To Install Notepad++ v2 (Version 2)', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 2, '2018-09-03 06:45:00', '2018-09-03 06:45:00'),
(6, 'How to fix the error mbstring extension is missing (Version 2)', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 2, '2018-09-03 06:45:00', '2018-09-03 06:45:00'),
(7, 'How to install Wamp on Windows (Version 2)', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 2, '2018-09-03 06:45:00', '2018-09-03 06:45:00'),
(8, 'How to setup the Database for WordPress (Version 2)', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 3, '2018-09-03 06:47:38', '2018-09-03 06:47:38'),
(9, 'How to install Wordpress on your local host (Version 2)', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 3, '2018-09-03 06:47:38', '2018-09-03 06:47:38'),
(10, 'How to Go through your Wordpress Dashboard', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 3, '2018-09-03 06:47:38', '2018-09-03 06:47:38'),
(11, 'How to install woocommerce', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 4, '2018-09-03 06:48:02', '2018-09-03 06:48:02'),
(12, 'WooCommerce Dashboard Tour', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 4, '2018-09-03 06:48:02', '2018-09-03 06:48:02'),
(13, 'test lecture', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 2, '2018-09-04 04:57:42', '2018-09-04 04:57:42'),
(14, 'Codeigniter Tutorial in Hindi (Introduction & Installation) | Part-1', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 12, '2018-09-07 05:36:21', '2018-09-07 05:36:21'),
(15, 'Codeigniter Tutorial in Hindi (How it Works) | Part-2', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 12, '2018-09-07 05:36:21', '2018-09-07 05:36:21'),
(16, 'Codeigniter Tutorial in Hindi (How it Works) | Part-3', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 12, '2018-09-07 05:36:21', '2018-09-07 05:36:21'),
(17, 'Codeigniter Tutorial in Hindi (Controllers) | Part-4', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 13, '2018-09-07 05:38:54', '2018-09-07 05:38:54'),
(18, 'Codeigniter Tutorial in Hindi (Models) | Part-5', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 13, '2018-09-07 05:38:54', '2018-09-07 05:38:54'),
(19, 'Codeigniter Tutorial in Hindi (Views) | Part-6', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 13, '2018-09-07 05:38:54', '2018-09-07 05:38:54'),
(20, 'Codeigniter Tutorial in Hindi (Database) | Part-7', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 13, '2018-09-07 05:38:54', '2018-09-07 05:38:54'),
(21, 'Codeigniter Tutorial in Hindi (Active Records) | Part-8', 'https://www.youtube.com/embed/Ie8cXbzEppw?rel=0&iv_load_policy=3&vq=hd1080', 13, '2018-09-07 05:38:54', '2018-09-07 05:38:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_cat_slug_unique` (`cat_slug`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `courses_course_slug_unique` (`course_slug`),
  ADD UNIQUE KEY `courses_course_image_unique` (`course_image`),
  ADD KEY `courses_user_id_foreign` (`user_id`),
  ADD KEY `courses_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `course_languages`
--
ALTER TABLE `course_languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_languages_lang_name_unique` (`lang_name`);

--
-- Indexes for table `course_tag`
--
ALTER TABLE `course_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_tag_course_id_foreign` (`course_id`),
  ADD KEY `course_tag_tag_id_foreign` (`tag_id`);

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
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_course_id_foreign` (`course_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seos_cat_id_foreign` (`cat_id`),
  ADD KEY `seos_course_id_foreign` (`course_id`),
  ADD KEY `seos_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_tag_name_unique` (`tag_name`),
  ADD UNIQUE KEY `tags_tag_slug_unique` (`tag_slug`),
  ADD KEY `tags_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- Indexes for table `video_lectures`
--
ALTER TABLE `video_lectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `video_lectures_section_id_foreign` (`section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `course_languages`
--
ALTER TABLE `course_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_tag`
--
ALTER TABLE `course_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_lectures`
--
ALTER TABLE `video_lectures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `course_tag`
--
ALTER TABLE `course_tag`
  ADD CONSTRAINT `course_tag_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `seos`
--
ALTER TABLE `seos`
  ADD CONSTRAINT `seos_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `seos_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `seos_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `video_lectures`
--
ALTER TABLE `video_lectures`
  ADD CONSTRAINT `video_lectures_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
