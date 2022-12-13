/*
 Navicat Premium Data Transfer

 Source Server         : project
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : petshop

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 07/02/2022 20:17:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for barangs
-- ----------------------------
DROP TABLE IF EXISTS `barangs`;
CREATE TABLE `barangs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 78 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of barangs
-- ----------------------------
INSERT INTO `barangs` VALUES (54, 'Royal Canin Oral', 'post-images/0PaUfiKrvc1nHkSCq9sHpKCKpoes2eyey4w4Zjq5.jpg', 1, 35000, 14, 'Berat 1 Kg | Dry Food', '2022-01-28 07:30:54', '2022-02-05 19:45:18');
INSERT INTO `barangs` VALUES (55, 'Royal Canin Persian', 'post-images/GCTAskdmSpMYSMsQz23mpl1DVUFHQptNoml1Lh1B.jpg', 1, 35000, 13, 'Berat 1 Kg | Dry Food', '2022-01-28 07:31:52', '2022-02-06 18:27:41');
INSERT INTO `barangs` VALUES (58, 'Whiskas Hairball Control', 'post-images/AYgxSRuGFpOp1kwrdpnYFmyuE6cQbmioMV3og5O6.png', 1, 35000, 11, 'Berat 1 Kg | Dry Food', '2022-01-28 07:41:09', '2022-01-28 19:53:26');
INSERT INTO `barangs` VALUES (61, 'ProPlan Urinary Health', 'post-images/GOnSkqt7B39Z49OJWxP48gLPJgDxNdDDd2glLjmI.jpg', 1, 10000, 15, 'Makanan Sachet', '2022-01-28 07:56:55', '2022-02-06 18:27:41');
INSERT INTO `barangs` VALUES (62, 'Whiskas Dry Beef Flavor', 'post-images/xkqHcJHrhXWyJH2q8zcvXZNZIscrgdOovfLwNsRa.jpg', 1, 35000, 13, 'Berat 1 Kg | Dry Food', '2022-01-28 08:03:20', '2022-01-28 08:03:20');
INSERT INTO `barangs` VALUES (63, 'Dog Carrier & Cat Carrier', 'post-images/2Y2dzAPTbNbOQ16Ght6cmibQ12eXbvEDbyxIBR4o.jpg', 2, 135000, 7, 'Pet Carrier Backpack', '2022-01-28 08:13:06', '2022-01-28 08:28:17');
INSERT INTO `barangs` VALUES (64, 'Dog Carrier & Cat Carrier', 'post-images/l3myvqZPxBma1g5PETNOLhbSNVHXSpGa4BApAwDd.jpg', 2, 135000, 8, 'Ukuran Kecil', '2022-01-28 08:17:17', '2022-01-28 08:28:55');
INSERT INTO `barangs` VALUES (65, 'Dog Carrier & Cat Carrier', 'post-images/gLkH3izs6letzV3eMaaGUZMfVvEYMQpYtuEezgW9.jpg', 2, 135000, 7, 'Soft Material', '2022-01-28 08:21:41', '2022-01-28 20:07:55');
INSERT INTO `barangs` VALUES (66, 'Dog Carrier & Cat Carrier', 'post-images/YsqbjX869pmXrFFyqb515FJFnLjR8R1e5uU8bbWc.jpg', 2, 135000, 8, 'Pet Carrier Backpack', '2022-01-28 08:26:04', '2022-01-28 08:26:43');
INSERT INTO `barangs` VALUES (67, 'Dog Carrier & Cat Carrier', 'post-images/B6gStxgjC4E89lcc1o3M7uoftGGydNyyoDMZgasH.jpg', 2, 200000, 6, 'Stroller Lipat Praktis', '2022-01-28 08:31:27', '2022-01-28 08:31:27');
INSERT INTO `barangs` VALUES (68, 'Obat Kutu Detick', 'post-images/vDrrkeNcLDh7e9rx1jrQrAxkZQwZhXh3UuzGQbrA.jpg', 3, 15000, 10, 'Obat Kutu Untuk Kucing dan Anjing', '2022-01-28 08:35:12', '2022-01-28 09:07:50');
INSERT INTO `barangs` VALUES (69, 'Obat Mata Trixin', 'post-images/HPIotIQu9CW4jL2KTEnL8pw2g6lbNvnHQLHBAnHE.jpg', 3, 8000, 20, 'Obat Mata Untuk Kucing', '2022-01-28 08:40:27', '2022-01-28 08:40:27');
INSERT INTO `barangs` VALUES (70, 'Obat FluCat', 'post-images/nIiXA2SuvMmgDDBFGkduyy9rVPxRszli6upcDZ2y.jpg', 3, 5000, 20, 'Obat Flu Kucing', '2022-01-28 08:43:05', '2022-01-28 08:43:05');
INSERT INTO `barangs` VALUES (71, 'Obat Diare PrimaCat', 'post-images/IZ9SQlwRNGaujGRQ5hN9qXVwLXsJFLMjK1c6K9V9.jpg', 3, 8000, 15, 'Obat Diare Untuk Kucing', '2022-01-28 08:45:25', '2022-01-28 08:45:25');
INSERT INTO `barangs` VALUES (72, 'Mangkuk Makanan Kucing', 'post-images/26mpU6Sadp7V5i44X1itKyVSaOuVhhr7m6nEFKjN.jpg', 4, 15000, 14, 'Mangkung Makanan Hewan', '2022-01-28 08:48:10', '2022-01-28 08:48:10');
INSERT INTO `barangs` VALUES (73, 'Kalung Kucing', 'post-images/BS6zZPq0Iuy3gQmFzsNv7MEWpBxKumUH5QqecLOJ.jpg', 4, 5000, 10, 'Kalung Untuk Kucing', '2022-01-28 08:50:46', '2022-01-28 08:53:14');
INSERT INTO `barangs` VALUES (74, 'Pasir Hewan', 'post-images/oRiQQUmHYCy0TBDn6C1EfwIw5H12DOn1eP8OjVBA.jpg', 4, 40000, 5, 'Berat 10 L Dengan Aroma Lavender', '2022-01-28 08:56:39', '2022-01-28 09:00:47');
INSERT INTO `barangs` VALUES (75, 'Box Pasir', 'post-images/bOSLBZYQVX3VRnIRbntVdRREns0YIEDcCJ1Y6qDW.jpg', 4, 30000, 9, 'Box Pasir Kucing Dewasa', '2022-01-28 09:03:05', '2022-01-28 09:03:05');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for kategoris
-- ----------------------------
DROP TABLE IF EXISTS `kategoris`;
CREATE TABLE `kategoris`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategoris
-- ----------------------------
INSERT INTO `kategoris` VALUES (1, 'Pet Food', 'pet-food.png', '2022-01-21 20:47:07', '2022-01-29 08:57:32');
INSERT INTO `kategoris` VALUES (2, 'Pet Carrier', 'pet-carrier.png', '2022-01-21 20:47:07', '2022-01-21 20:47:07');
INSERT INTO `kategoris` VALUES (3, 'Pet Medicine', 'syringe.png', '2022-01-21 20:47:07', '2022-01-21 20:47:07');
INSERT INTO `kategoris` VALUES (4, 'Pet Accessories', 'dog-collar.png', '2022-01-21 20:47:07', '2022-01-21 20:47:07');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2022_01_05_050813_create_barangs_table', 1);
INSERT INTO `migrations` VALUES (6, '2022_01_05_051249_create_pesanans_table', 1);
INSERT INTO `migrations` VALUES (7, '2022_01_05_051454_create_pesanan_details_table', 1);
INSERT INTO `migrations` VALUES (8, '2022_01_21_082746_create_kategoris_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp(0) NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token`) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for pesanan_details
-- ----------------------------
DROP TABLE IF EXISTS `pesanan_details`;
CREATE TABLE `pesanan_details`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `barang_id` int(11) NOT NULL,
  `pesanan_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanan_details
-- ----------------------------
INSERT INTO `pesanan_details` VALUES (2, 18, 2, 2, 80000, '2022-01-25 20:17:36', '2022-01-25 20:17:36');
INSERT INTO `pesanan_details` VALUES (3, 46, 3, 2, 80000, '2022-01-25 22:08:27', '2022-01-25 22:08:27');
INSERT INTO `pesanan_details` VALUES (4, 16, 4, 1, 40000, '2022-01-26 11:20:36', '2022-01-26 11:20:36');
INSERT INTO `pesanan_details` VALUES (5, 19, 5, 2, 80000, '2022-01-26 13:54:07', '2022-01-26 13:54:07');
INSERT INTO `pesanan_details` VALUES (6, 46, 6, 1, 40000, '2022-01-26 20:36:41', '2022-01-26 20:36:41');
INSERT INTO `pesanan_details` VALUES (7, 46, 7, 10, 400000, '2022-01-26 20:57:34', '2022-01-26 20:57:34');
INSERT INTO `pesanan_details` VALUES (8, 46, 8, 1, 40000, '2022-01-26 21:18:29', '2022-01-26 21:18:29');
INSERT INTO `pesanan_details` VALUES (9, 15, 8, 1, 40000, '2022-01-26 21:18:43', '2022-01-26 21:18:43');
INSERT INTO `pesanan_details` VALUES (11, 16, 10, 1, 40000, '2022-01-27 19:09:25', '2022-01-27 19:09:25');
INSERT INTO `pesanan_details` VALUES (12, 52, 11, 2, 80000, '2022-01-27 20:03:06', '2022-01-27 20:03:06');
INSERT INTO `pesanan_details` VALUES (13, 58, 12, 2, 70000, '2022-01-28 09:51:03', '2022-01-28 09:51:03');
INSERT INTO `pesanan_details` VALUES (14, 55, 12, 1, 35000, '2022-01-28 09:51:29', '2022-01-28 09:51:29');
INSERT INTO `pesanan_details` VALUES (15, 61, 13, 2, 20000, '2022-01-28 10:00:10', '2022-01-28 10:00:10');
INSERT INTO `pesanan_details` VALUES (16, 61, 14, 2, 20000, '2022-01-28 19:51:03', '2022-01-28 19:51:03');
INSERT INTO `pesanan_details` VALUES (17, 58, 15, 2, 70000, '2022-01-28 19:53:21', '2022-01-28 19:53:21');
INSERT INTO `pesanan_details` VALUES (18, 65, 16, 1, 135000, '2022-01-28 20:07:29', '2022-01-28 20:07:29');
INSERT INTO `pesanan_details` VALUES (19, 58, 17, 1, 35000, '2022-01-30 09:56:41', '2022-01-30 09:56:41');
INSERT INTO `pesanan_details` VALUES (20, 54, 18, 1, 35000, '2022-02-05 19:44:08', '2022-02-05 19:44:08');
INSERT INTO `pesanan_details` VALUES (21, 55, 19, 1, 35000, '2022-02-06 18:23:52', '2022-02-06 18:23:52');
INSERT INTO `pesanan_details` VALUES (22, 61, 19, 1, 10000, '2022-02-06 18:24:06', '2022-02-06 18:24:06');

-- ----------------------------
-- Table structure for pesanans
-- ----------------------------
DROP TABLE IF EXISTS `pesanans`;
CREATE TABLE `pesanans`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode` int(11) NOT NULL,
  `jumlah_harga` int(11) NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 20 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pesanans
-- ----------------------------
INSERT INTO `pesanans` VALUES (13, 4, '2022-01-28', '1', 699, 20000, '2022-01-28 10:00:10', '2022-01-28 10:00:16');
INSERT INTO `pesanans` VALUES (16, 2, '2022-01-28', '1', 346, 135000, '2022-01-28 20:07:29', '2022-01-28 20:07:55');
INSERT INTO `pesanans` VALUES (19, 4, '2022-02-06', '1', 607, 45000, '2022-02-06 18:23:52', '2022-02-06 18:27:41');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `nohp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Admin', 'admin@gmail.com', 1, '$2y$10$iZh5isa5wL6mR/tdlmSTx.VUaKspS8AvemiYcYZ31MmJesOHig1zy', 'jalanajalan', '089229829', NULL, NULL, '2022-01-21 20:47:47', '2022-01-25 20:18:27');
INSERT INTO `users` VALUES (2, 'bambang', 'bambang1@gmail.com', 0, '$2y$10$.L4EE.kRksNAT45k7b3LB.A4ARUzuo8HxkgaNAlIOXbFGRfmDr39y', 'jalanjalan', '0876547382', NULL, NULL, '2022-01-21 20:47:47', '2022-01-28 20:07:48');
INSERT INTO `users` VALUES (4, 'samsul', 'samsul1@gmail.com', NULL, '$2y$10$stUcs455WafHCs5ZSWnj/uv4Ob5aaRyqsMC5Ud4pkq.23iP69Q3gW', 'jalan jalan jalan', '089695748', NULL, NULL, '2022-01-25 10:07:48', '2022-01-27 19:09:45');
INSERT INTO `users` VALUES (6, 'sutoyo', 'sutoyo@gmail.com', NULL, '$2y$10$9gWNIxNn9JF.MA737I6KU.PqUO0jw5aPuHOrerehBoriYI6dqrJi.', 'Jalan Jalan', '089796547', NULL, NULL, '2022-01-26 13:53:44', '2022-01-26 13:54:31');

SET FOREIGN_KEY_CHECKS = 1;
