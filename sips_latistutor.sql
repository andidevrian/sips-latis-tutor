-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table sips_latistutor.cache: ~0 rows (approximately)

-- Dumping data for table sips_latistutor.cache_locks: ~0 rows (approximately)

-- Dumping data for table sips_latistutor.failed_jobs: ~0 rows (approximately)

-- Dumping data for table sips_latistutor.jobs: ~0 rows (approximately)

-- Dumping data for table sips_latistutor.job_batches: ~0 rows (approximately)

-- Dumping data for table sips_latistutor.lembagas: ~0 rows (approximately)
REPLACE INTO `lembagas` (`id`, `nama_lembaga`, `created_at`, `updated_at`) VALUES
	(1, 'Latiseducation', '2025-11-19 04:20:06', '2025-11-19 04:20:06'),
	(2, 'Tutorindonesia', '2025-11-19 04:20:06', '2025-11-19 04:20:06');

-- Dumping data for table sips_latistutor.migrations: ~1 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_11_19_103648_create_siswas_table', 2),
	(5, '2025_11_19_111215_create_lembagas_table', 2);

-- Dumping data for table sips_latistutor.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table sips_latistutor.sessions: ~1 rows (approximately)
REPLACE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('8EJMix1wEnUOWLrYd2hqjOWRXgzkzeTILlGyTlHp', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNVd4MkwxZXdmM2M5amRLam5GQ2xKaU92QXJuSFZiSDBOSHRRRDdjYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9jMjhlYzE0NDM4MGYubmdyb2stZnJlZS5hcHAvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763610582),
	('B5J55AhDZVIOgiTZ6B1PmAABHgNocTCEiJtbEpuD', NULL, '127.0.0.1', 'WhatsApp/2.23.20.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEhjRVZtekQ0SFo4SlpEZU02TDFhNnNNTmRXM1F5T2E5OWs2eGFRZyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9jMjhlYzE0NDM4MGYubmdyb2stZnJlZS5hcHAvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1763609222),
	('CUuh9eHASllYg37Pi7NNUsPD9v0duEMLEFxRjRn7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM0tidnR1aGM3Ykd5SDNOTGtMQjVlaHBhYXJ5UmRDU1NXcEJrY1dreCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vYzI4ZWMxNDQzODBmLm5ncm9rLWZyZWUuYXBwL2xvZ2luIjtzOjU6InJvdXRlIjtzOjU6ImxvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1763611449),
	('DRixWpoDIvJGLUeHWd8v6xesjZAKXFXFLAd06JKB', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYTdiZ2xyV00wVHFsRlNNRk1SekY2UFVVYldFMXhVdFJFUDFzWWFnNSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vYzI4ZWMxNDQzODBmLm5ncm9rLWZyZWUuYXBwL2xvZ2luIjtzOjU6InJvdXRlIjtzOjU6ImxvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1763610636),
	('eneS2d0D8o2jClvmZ7QZbTToSrz1JNjTwHAIsTkf', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUdnNms0MUp2SVk3Rko3QmtPaEtibEk4cUpvSHZCMlI5Q1NvZW5KVSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9jMjhlYzE0NDM4MGYubmdyb2stZnJlZS5hcHAvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1763609331),
	('iXaYXOY8SdgxQCFeBQLfF6lhZIPaGoVUtOFuivLx', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQmJqd2ZVM2QwVWRpWUhqMFZsbkhlN3VjSzR0Wjh0V1hHWUhTeUdGeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763610173),
	('jPSiiZfijGyeTAAtAF0ZUqaU9XUXam5b0WnBK7pQ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiT3B3cWlxZ285TjBQdkZndE44eFdMY0gzT29GNmdEWmNDTm92N3ZFMCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly8xMjY0MDg4MTJkYzQubmdyb2stZnJlZS5hcHAvc2lzd2EiO3M6NToicm91dGUiO3M6MTE6InNpc3dhLmluZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1763613794),
	('l9NRzFmEqISUY9vUCJtExetd5daKIJigT1M6YqUX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ1RLQlIwbUw3R0JJTTU0b1RMNFJFWmNmakdGUEswYTZKdnRTYWYxViI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0NDoiaHR0cDovL2MyOGVjMTQ0MzgwZi5uZ3Jvay1mcmVlLmFwcC9kYXNoYm9hcmQiO31zOjk6Il9wcmV2aW91cyI7YToyOntzOjM6InVybCI7czo0MDoiaHR0cDovL2MyOGVjMTQ0MzgwZi5uZ3Jvay1mcmVlLmFwcC9sb2dpbiI7czo1OiJyb3V0ZSI7czo1OiJsb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1763611450),
	('NGudWMnNhdoqHN53qsFeMV7o9XZvmyG9rOHhSPr0', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid2VocDFzYTFWTVNrODFqQ0UyRUV5TFFlZGs4SjdVTWUxR0s4bk1wSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zaXN3YSI7czo1OiJyb3V0ZSI7czoxMToic2lzd2EuaW5kZXgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763614040),
	('uvUqdJmTDPZDFsZnpyaGgn0bJYrTeDbXfsEkN9JU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiM1UwNU1IT0ZyOFlVWjBOQlhrbnJmYnM4a21hdURwa3NET0Z6RFdLcSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1763610207),
	('wTUrMyj9VQ2TSi4gY4hnZ4Y0NrFDMiWaMljzG8rJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiT2h5SzFHdTI4cEpzRjFRcnVPTmpuU2ZDWkN6dUNhWHd2bEVXVzJsZiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vYzI4ZWMxNDQzODBmLm5ncm9rLWZyZWUuYXBwL2xvZ2luIjtzOjU6InJvdXRlIjtzOjU6ImxvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1763610720),
	('zBtZ30SV0m9djo6tZAsJ1KCqOXlTB26b8qqsVIXU', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibmo1ejVabjYyeXcwOUtieWR5RmUzN09ZOGF1dUM2Y29GV1ByUnUzOSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjI6e3M6MzoidXJsIjtzOjQwOiJodHRwOi8vYzI4ZWMxNDQzODBmLm5ncm9rLWZyZWUuYXBwL2xvZ2luIjtzOjU6InJvdXRlIjtzOjU6ImxvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1763611411);

-- Dumping data for table sips_latistutor.siswas: ~0 rows (approximately)
REPLACE INTO `siswas` (`id`, `nis`, `nama`, `email`, `lembaga_id`, `foto`, `created_at`, `updated_at`) VALUES
	(1, '20250001', 'Ahmad Rizki', 'ahmad.rizki@student.com', 1, 'siswa/siswa_1.jpg', '2025-11-19 07:28:01', '2025-11-19 07:28:01'),
	(2, '20250002', 'Siti Aisyah', 'siti.aisyah@student.com', 2, 'siswa/siswa_2.jpg', '2025-11-19 07:28:01', '2025-11-19 07:28:01'),
	(3, '20250003', 'Budi Santoso', 'budi.santoso@student.com', 1, 'siswa/siswa_3.jpg', '2025-11-19 07:28:01', '2025-11-19 07:28:01'),
	(4, '20250004', 'Rina Wulandari', 'rina.wulandari@student.com', 2, 'siswa/siswa_4.jpg', '2025-11-19 07:28:02', '2025-11-19 07:28:02'),
	(5, '20250005', 'Dika Pratama', 'dika.pratama@student.com', 1, 'siswa/siswa_5.jpg', '2025-11-19 07:28:02', '2025-11-19 07:28:02'),
	(6, '20250006', 'Nadia Putri', 'nadia.putri@student.com', 2, 'siswa/siswa_6.jpg', '2025-11-19 07:28:02', '2025-11-19 07:28:02'),
	(7, '20250007', 'Fajar Nugroho', 'fajar.nugroho@student.com', 1, 'siswa/siswa_7.jpg', '2025-11-19 07:28:03', '2025-11-19 07:28:03'),
	(8, '20250008', 'Laras Sari', 'laras.sari@student.com', 2, 'siswa/siswa_8.jpg', '2025-11-19 07:28:03', '2025-11-19 07:28:03'),
	(9, '20250009', 'Galih Pratama', 'galih.pratama@student.com', 1, 'siswa/siswa_9.jpg', '2025-11-19 07:28:03', '2025-11-19 07:28:03'),
	(10, '20250010', 'Intan Permata', 'intan.permata@student.com', 2, 'siswa/siswa_10.jpg', '2025-11-19 07:28:04', '2025-11-19 10:20:47'),
	(11, '20250011', 'Raka Wijaya', 'raka.wijaya@student.com', 1, 'siswa/siswa_11.jpg', '2025-11-19 07:28:04', '2025-11-19 07:28:04'),
	(12, '20250012', 'Dewi Lestari', 'dewi.lestari@student.com', 2, 'siswa/siswa_12.jpg', '2025-11-19 07:28:05', '2025-11-19 07:28:05'),
	(13, '20250013', 'Arief Rahman', 'arief.rahman@student.com', 1, 'siswa/siswa_13.jpg', '2025-11-19 07:28:05', '2025-11-19 07:28:05'),
	(14, '20250014', 'Maya Anggraini', 'maya.anggraini@student.com', 2, 'siswa/siswa_14.jpg', '2025-11-19 07:28:05', '2025-11-19 07:28:05'),
	(15, '20250015', 'Tian Saputra', 'tian.saputra@student.com', 1, 'siswa/siswa_15.jpg', '2025-11-19 07:28:05', '2025-11-19 07:28:05'),
	(19, '20250016', 'Lodie', 'lodi@gmail.com', 1, 'siswa/1763576313.jpg', '2025-11-19 11:18:33', '2025-11-19 16:19:44');

-- Dumping data for table sips_latistutor.users: ~0 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Andi Devrian', 'andidevrian@gmail.com', NULL, '$2y$12$j4djhsdOtzGm/UKmAwYJ.OJ5WeQLpxfO/by2jsyrPYYEOTfzYn1Ru', NULL, '2025-11-19 01:03:21', '2025-11-19 01:03:21'),
	(2, 'Test User', 'test@example.com', '2025-11-19 04:20:05', '$2y$12$3snnnYAHoF0fUc6/oTRcPO5mjsarRB9eqAE40CoLGuvI8YRoFBlBC', 'zLqEbZW6ux', '2025-11-19 04:20:06', '2025-11-19 04:20:06');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
