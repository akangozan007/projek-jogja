-- phpMyAdmin SQL Dump
-- version 5.2.1deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2024 at 01:14 PM
-- Server version: 10.11.6-MariaDB-0+deb12u1
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interquizz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(255) NOT NULL,
  `quiz_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `comments` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `result_id` int(255) NOT NULL,
  `quiz_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `score` float NOT NULL,
  `completed_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban_benar`
--

CREATE TABLE `jawaban_benar` (
  `jawaban_benar_id` int(255) NOT NULL,
  `question_id` int(255) NOT NULL,
  `option_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kelas_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_member`
--

CREATE TABLE `kelas_member` (
  `kelas_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kuis`
--

CREATE TABLE `kuis` (
  `quiz_id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `creator_id` int(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kuis`
--

INSERT INTO `kuis` (`quiz_id`, `title`, `description`, `creator_id`, `created_at`, `updated_at`) VALUES
(1, 'quizz microsoft word', 'teknologi ', 19, '2024-08-25 09:31:30', '2024-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `kuis_kategori`
--

CREATE TABLE `kuis_kategori` (
  `quiz_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `option_id` int(255) NOT NULL,
  `question_id` int(255) NOT NULL,
  `option_text` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`option_id`, `question_id`, `option_text`, `is_correct`) VALUES
(1, 1, 'Pilihan A', 0),
(2, 1, 'Pilihan B', 1),
(3, 1, 'Pilihan C', 0),
(4, 1, 'Pilihan D', 0),
(5, 1, 'dsadasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `question_id` int(255) NOT NULL,
  `quiz_id` int(255) NOT NULL,
  `question_text` text NOT NULL,
  `question_type` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`question_id`, `quiz_id`, `question_text`, `question_type`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'pilihan-ganda', '2024-08-25', '2024-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `username`, `password`, `email`, `role`, `created_at`) VALUES
(19, 'Muhammad Razan Rizqullah', 'root', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 'akangozan007@gmail.com', NULL, '2024-08-16 00:00:00'),
(20, 'hahi', 'hahi', 'b0d47edd0595981eca3a14db072a85045c21096ac49bf325b2183adb518a191c', 'valnares15@gmail.com', NULL, '2024-08-18 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `feedback_quiz_id_fk` (`quiz_id`),
  ADD KEY `feedback_user_id_fk` (`user_id`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `hasil.quiz_id_kuis.quiz_id` (`quiz_id`),
  ADD KEY `hasil.user_id_user.user_id` (`user_id`);

--
-- Indexes for table `jawaban_benar`
--
ALTER TABLE `jawaban_benar`
  ADD PRIMARY KEY (`jawaban_benar_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `option_id` (`option_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indexes for table `kelas_member`
--
ALTER TABLE `kelas_member`
  ADD KEY `user.user_id_kelas_member.user_id` (`user_id`),
  ADD KEY `kelas_member.kelas_id_kelas.kelas_id` (`kelas_id`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`quiz_id`),
  ADD KEY `creator_id_index` (`creator_id`);

--
-- Indexes for table `kuis_kategori`
--
ALTER TABLE `kuis_kategori`
  ADD KEY `fk_quizzes_quiz_id` (`quiz_id`),
  ADD KEY `kuis_kategori.category_id` (`category_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`option_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`question_id`),
  ADD KEY `tb_pertanyaan.quiz_id_kuis.quiz_id` (`quiz_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `result_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawaban_benar`
--
ALTER TABLE `jawaban_benar`
  MODIFY `jawaban_benar_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `kelas_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `quiz_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `option_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `question_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban_benar`
--
ALTER TABLE `jawaban_benar`
  ADD CONSTRAINT `jawaban_benar_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `pertanyaan` (`question_id`),
  ADD CONSTRAINT `jawaban_benar_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `options` (`option_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
