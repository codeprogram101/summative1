CREATE DATABASE IF NOT EXISTS `summative1sapnu` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `summative1sapnu`;

DROP TABLE IF EXISTS `tasks`;
DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `migrations` (`version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
('2026-10-03-000001', 'App\\Database\\Migrations\\CreateTaskTables', 'default', 'App', UNIX_TIMESTAMP(), 1);

INSERT INTO `tasks` (`title`, `status`, `task_date`, `created_at`) VALUES
('[F3-FORMATIVE] Module 3: CodeIgniter Data Layer', 'pending', CURDATE(), NOW()),
('[F1-FORMATIVE] First Formative Assessment', 'pending', CURDATE(), NOW()),
('[F1-FORMATIVE] Module 1: CodeIgniter Foundations', 'pending', CURDATE(), NOW()),
('[F2-FORMATIVE] Second Formative Assessment', 'pending', CURDATE(), NOW()),
('[F3-FORMATIVE] Module 3: CodeIgniter Forms, Validation, Files', 'pending', CURDATE(), NOW()),
('[TECHNICAL] [AI-ASSISTED] Technical Summative Assessment 1', 'pending', CURDATE(), NOW()),
('[TECHNICAL] [AI-ASSISTED] Technical Summative Assessment 2', 'pending', CURDATE(), NOW()),
('[TECHNICAL] [AI-PROHIBITED] Technical Summative Assessment 1', 'pending', CURDATE(), NOW()),
('[AI-INTEGRATED] Module 1: CodeIgniter Foundations', 'pending', CURDATE(), NOW()),
('[AI-INTEGRATED] Module 2: CodeIgniter Data Layer', 'pending', CURDATE(), NOW()),
('[AI-INTEGRATED] Module 3: CodeIgniter Forms, Validation, Files', 'pending', CURDATE(), NOW()),
('[AI-ASSISTED] Module 1: CodeIgniter Foundations', 'pending', CURDATE(), NOW()),
('[AI-ASSISTED] Module 2: CodeIgniter Data Layer', 'pending', CURDATE(), NOW()),
('[AI-ASSISTED] Module 3: CodeIgniter Forms, Validation, Files', 'pending', CURDATE(), NOW());

INSERT INTO `users` (`username`, `full_name`, `email`, `created_at`) VALUES
('josapnu', 'Josapnu', 'josapnu@example.com', NOW());
