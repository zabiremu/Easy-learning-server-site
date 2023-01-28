-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 07:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE `charts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charts`
--

INSERT INTO `charts` (`id`, `Technology`, `project`, `created_at`, `updated_at`) VALUES
(1, 'JavaScript', '100', NULL, NULL),
(2, 'Django', '60', NULL, NULL),
(3, 'Vue Js', '70', NULL, NULL),
(4, 'Opencart', '80', NULL, NULL),
(5, 'React', '85', NULL, NULL),
(6, 'Laravel', '95', NULL, NULL),
(7, 'Mysqli', '90', NULL, NULL),
(8, 'PHP', '100', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_reviews`
--

CREATE TABLE `client_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_reviews`
--

INSERT INTO `client_reviews` (`id`, `client_img`, `client_name`, `client_description`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:3000/static/media/face.00def55428174b0ca1c3.png', 'Jhon Doe', 'Perfect!!!!! Zabir was very nice and helpful and also professional with completing my design for my landing page.I’m new to the entrepreneur world and he just make me feel like I can take this world on with much more confidence.', NULL, NULL),
(2, 'http://localhost:3000/static/media/young-attractive-woman-smiling-feeling-healthy-hair-flying-wind.fccfb533c713fedd1e82.jpg', 'Loilita Het', 'Perfect!!!!! Zabir was very nice and helpful and also professional with completing my design for my landing page.I’m new to the entrepreneur world and he just make me feel like I can take this world on with much more confidence.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(4, 'Apple', 'user@gmail.com', 'Fine', NULL, NULL),
(5, 'Shwakat Hossain', 'shwakat@gmail.com', 'Hi are u?', NULL, NULL),
(6, 'Times of India offical', 'admin@gmail.com', 'You are a great', NULL, NULL),
(7, 'Ferris Moss', 'kecyp@mailinator.com', 'Aut aute enim molest', NULL, NULL),
(8, 'Sybil Pittman', 'vowutifyfy@mailinator.com', 'Quia architecto sit', NULL, NULL),
(9, 'Rowan Vincent', 'beziniga@mailinator.com', 'Cupiditate minima ac', NULL, NULL),
(10, 'Rowan Vincent', 'beziniga@mailinator.com', 'Cupiditate minima ac', NULL, NULL),
(11, 'Kirsten Casey', 'votibaxiha@mailinator.com', 'Ipsum ex consequat', NULL, NULL),
(12, 'Jade Galloway', 'rygupejupy@mailinator.com', 'Deleniti sequi saepe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_lecture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `short_title`, `short_description`, `short_img`, `long_title`, `long_description`, `total_student`, `total_duration`, `total_lecture`, `category`, `tags`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Laravel 9', 'Some quick example text to build on the Project Name One and\n            make up the bulk of the card\'s content.', 'https://img.freepik.com/free-photo/learning-education-ideas-insight-intelligence-study-concept_53876-120116.jpg?w=900&t=st=1673674140~exp=1673674740~hmac=e875b31074240e45ebb75dbf4664d5c4e024fa50117964fa2e01edbfc2c0ea6c', 'Laravel 9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\nquia. Quo neque error repudiandae fuga?', '2000', '62 Hours', '71', 'Laravel', '\r\nLaravel 9', 'Zabir Emu', NULL, NULL),
(2, '\nRact js with Laravel', 'Some quick example text to build on the Project Name One and\n            make up the bulk of the card\'s content.', 'https://img.freepik.com/free-photo/freelance-business-women-casual-wear-using-laptop-working-call-video-conference-with-customer-workplace-living-room-home-happy-young-asian-girl-relax-sitting-desk-job-internet_7861-2448.jpg?w=826&t=st=1673674160~exp=1673', '\nRact js with Laravel', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\nquia. Quo neque error repudiandae fuga?', '2300', '102 Hours', '30', 'React', '\nLaravel and   React', 'Zabir Emu', NULL, NULL),
(3, 'PHP with Laravel', 'Some quick example text to build on the Project Name One and\n            make up the bulk of the card\'s content.', 'https://img.freepik.com/free-photo/brainstorm-meeting_1098-15871.jpg?w=740&t=st=1673674204~exp=1673674804~hmac=a7d7d9e0dce50794636b66d86f8706a148a11413f8c3d059f1556dade896c0cc', 'PHP with Laravel', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\nquia. Quo neque error repudiandae fuga?', '2067', '32 Hours', '30', 'PHP', 'Web Development ', 'Zabir Emu', NULL, NULL),
(4, 'Mern Stact Developer', 'Some quick example text to build on the Project Name One and\n            make up the bulk of the card\'s content.', 'https://img.freepik.com/free-photo/woman-headphones-using-laptop-studying-home_651396-12.jpg?w=740&t=st=1673674221~exp=1673674821~hmac=8c77e20e00cc4bae1a8bf39171022242f2860c3cef65b23eafca6b624a829869', 'Mern Stact Developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\nquia. Quo neque error repudiandae fuga?', '1000', '28 Hours', '48', 'Mern Stack', 'Mern Stact', 'Zabir Emu', NULL, NULL),
(5, 'App developer', 'Some quick example text to build on the Project Name One and\n            make up the bulk of the card\'s content.', 'https://img.freepik.com/free-photo/happy-teacher-talking-with-her-students-online_23-2148771465.jpg?w=740&t=st=1673674239~exp=1673674839~hmac=bacec349b70defc65e3647f7e972eecd479d23f12149aa879884b0796c84856a', 'App developer', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\nquia. Quo neque error repudiandae fuga?', '3000', '12 Hours', '52', 'App Developer', 'App Developer', 'Zabir Emu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_credit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `address`, `email`, `phone`, `facebook`, `youtube`, `twitter`, `footer_credit`, `created_at`, `updated_at`) VALUES
(1, '320 Polmart Road National Pike Caston Villa', 'support@gmail.com', '424242424', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/', '© Copyright 2016 by easy learning All rights reserve', NULL, '2023-01-27 09:10:45');

-- --------------------------------------------------------

--
-- Table structure for table `home_pages`
--

CREATE TABLE `home_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tech_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_student` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_review` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_pages`
--

INSERT INTO `home_pages` (`id`, `home_title`, `home_sub_title`, `tech_description`, `total_student`, `total_course`, `total_review`, `video_review`, `video_description`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'Easy Learning', 'Learn Profesionally', '<p><span style=\"font-size: 1rem;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.\r\n\r\nVeritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?\r\n\r\nSed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem!</span><br></p>', '3499', '35', '3000', '3000', '<p><span style=\"font-size: 1rem;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.\r\n\r\nVeritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?\r\n\r\nSed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem!Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?</span><br></p>', 'https://media.w3.org/2010/05/sintel/trailer_hd.mp4', NULL, '2023-01-27 08:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refund` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `terms` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `about`, `refund`, `terms`, `privacy`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum!\r\n\r\nProvident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?\r\n\r\nSed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum!\r\n\r\nProvident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?\r\n\r\nSed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum!\r\n\r\nProvident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?\r\n\r\nSed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum!\r\n\r\nProvident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint?\r\n\r\nSed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque.', NULL, '2023-01-27 08:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_11_094044_create_services_table', 2),
(6, '2023_01_11_094224_create_client_reviews_table', 2),
(7, '2023_01_11_094934_create_projects_table', 3),
(8, '2023_01_11_095421_create_contacts_table', 4),
(9, '2023_01_12_043243_create_footers_table', 5),
(10, '2023_01_12_043829_create_home_pages_table', 6),
(11, '2023_01_12_044334_create_charts_table', 7),
(12, '2023_01_12_044832_create_information_table', 8),
(13, '2023_01_12_045406_create_courses_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_features` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `live_preview` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `image_one`, `image_two`, `project_name`, `project_description`, `project_features`, `live_preview`, `created_at`, `updated_at`) VALUES
(1, 'https://img.freepik.com/free-photo/workplace-results-professional-report-accounting-during_1418-61.jpg?w=740&t=st=1673672237~exp=1673672837~hmac=054d64545192e3056ed8eba40ab80a637db4d890cdddd6f3376514ea6504ef4aa', 'https://img.freepik.com/free-photo/workplace-results-professional-report-accounting-during_1418-61.jpg?w=740&t=st=1673672237~exp=1673672837~hmac=054d64545192e3056ed8eba40ab80a637db4d890cdddd6f3376514ea6504ef4aa', 'Project Name One', 'Some quick example text to build on the Project Name One and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate illum quos nemo fugiat cum exercitationem totam quis error, reiciendis possimus et sapiente, repudiandae libero minima quia dolor quibusdam, aut velit.', 'www.facebook.com', NULL, NULL),
(2, 'https://img.freepik.com/free-photo/image-engineering-objects-workplace-top-view-construction-concept-engineering-tools-vintage-tone-retro-filter-effect-soft-focus-selective-focus_1418-474.jpg?w=740&t=st=1673672270~exp=1673672870~hmac=931f6875b2de88d4b861e', 'https://img.freepik.com/free-photo/image-engineering-objects-workplace-top-view-construction-concept-engineering-tools-vintage-tone-retro-filter-effect-soft-focus-selective-focus_1418-474.jpg?w=740&t=st=1673672270~exp=1673672870~hmac=931f6875b2de88d4b861e', 'Project Name Two', 'Some quick example text to build on the Project Name One and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate illum quos nemo fugiat cum exercitationem totam quis error, reiciendis possimus et sapiente, repudiandae libero minima quia dolor quibusdam, aut velit.', 'www.facebook.com', NULL, NULL),
(3, 'https://img.freepik.com/free-photo/image-engineering-objects-workplace-top-view-construction-concept-engineering-tools-vintage-tone-retro-filter-effect-soft-focus-selective-focus_1418-469.jpg?w=740&t=st=1673672331~exp=1673672931~hmac=ba106e76df984847976af', 'https://img.freepik.com/free-photo/image-engineering-objects-workplace-top-view-construction-concept-engineering-tools-vintage-tone-retro-filter-effect-soft-focus-selective-focus_1418-469.jpg?w=740&t=st=1673672331~exp=1673672931~hmac=ba106e76df984847976af', 'Project Name Three\n', 'Some quick example text to build on the Project Name One and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate illum quos nemo fugiat cum exercitationem totam quis error, reiciendis possimus et sapiente, repudiandae libero minima quia dolor quibusdam, aut velit.', 'www.facebook.com', NULL, NULL),
(4, 'https://img.freepik.com/free-photo/finance-economics-work-male-discussion-laptop_1418-79.jpg?w=740&t=st=1673672385~exp=1673672985~hmac=00b36d6c54de6aa6d3073d57f8665931d07a8fae9d8e5ca8c92779ea1f8aca66', 'https://img.freepik.com/free-photo/finance-economics-work-male-discussion-laptop_1418-79.jpg?w=740&t=st=1673672385~exp=1673672985~hmac=00b36d6c54de6aa6d3073d57f8665931d07a8fae9d8e5ca8c92779ea1f8aca66', 'Project Name Four', 'Some quick example text to build on the Project Name One and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate illum quos nemo fugiat cum exercitationem totam quis error, reiciendis possimus et sapiente, repudiandae libero minima quia dolor quibusdam, aut velit.', 'www.facebook.com', NULL, NULL),
(5, 'https://img.freepik.com/free-photo/disaster-protection-down-row-danger-failure_1418-54.jpg?w=740&t=st=1673672405~exp=1673673005~hmac=761baedd7e9b67179844d12e97b64ee305302d84f9479603598e263e749d88dc', 'https://img.freepik.com/free-photo/disaster-protection-down-row-danger-failure_1418-54.jpg?w=740&t=st=1673672405~exp=1673673005~hmac=761baedd7e9b67179844d12e97b64ee305302d84f9479603598e263e749d88dc', 'Project Name Five', 'Some quick example text to build on the Project Name One and make up the bulk of the card\'s content.', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate illum quos nemo fugiat cum exercitationem totam quis error, reiciendis possimus et sapiente, repudiandae libero minima quia dolor quibusdam, aut velit.', 'www.facebook.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_img`, `service_name`, `service_description`, `created_at`, `updated_at`) VALUES
(1, 'http://localhost:3000/static/media/ecommerce.b768fece35bff81e9394.png', 'Ecommerce', 'I will design and develop ecommerce online store website', NULL, NULL),
(2, 'http://localhost:3000/static/media/design.f41ad80baaf09ec53c3b.png', 'Web Design', 'Qualified web design and attractive effects whichs catches visitor\'s Eye', NULL, NULL),
(3, 'http://localhost:3000/static/media/web.b4891cbb7903d573e0f9.png', 'Web Development', 'Clean and fresh issue free code to make your website dynamic prefectly', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Zabir Emu', 'admin@admin.com', 'http://127.0.0.1:8000/uploads/profile/Profile-63ccc51957340.jpg', '2023-01-21 07:38:43', '$2y$10$G.GfI7crNcxlWt9k6WT7BO5IYjN.kD9B1E6QSxOPLDC5S/0Rh/WTe', 'avHHuwIw0lj11sBrZNZTK1jRSVmz9vJsaVb1XPbR014TlZ08lbTTs959wkUM', '2023-01-11 03:35:27', '2023-01-25 09:25:20'),
(2, 'zabir', 'zabir@gmail.com', NULL, NULL, '$2y$10$bMsSoBJBlriXvs4UDa1ht.vUuorwzYA99I.pck.9RU69Zs/XUCH32', NULL, '2023-01-21 07:27:33', '2023-01-21 07:27:33'),
(3, 'zabir emu', 'user@gmail.com', NULL, '2023-01-21 07:40:38', '$2y$10$n/4wAaIG5gqAacWup/fLROWL7DS8aTSWSsY04fA/2mux6QObDr0U6', NULL, '2023-01-21 07:40:08', '2023-01-21 07:40:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charts`
--
ALTER TABLE `charts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_reviews`
--
ALTER TABLE `client_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charts`
--
ALTER TABLE `charts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_reviews`
--
ALTER TABLE `client_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
