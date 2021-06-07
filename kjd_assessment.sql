-- Database export via SQLPro (https://www.sqlprostudio.com/allapps.html)
-- Exported by josh at 07-06-2021 12:36.
-- WARNING: This file may contain descructive statements such as DROPs.
-- Please ensure that you are running the script at the proper location.


-- BEGIN TABLE categories
DROP TABLE IF EXISTS categories;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 4 rows into categories
-- Insert batch #1
INSERT INTO categories (id, name, created_at, updated_at, deleted_at) VALUES
(1, 'Automotive', '2021-06-04 14:42:24', '2021-06-04 14:42:24', NULL),
(2, 'Books', '2021-06-04 14:42:24', '2021-06-04 14:42:24', NULL),
(3, 'Electronics', '2021-06-04 14:42:24', '2021-06-04 14:42:24', NULL),
(4, 'Furniture', '2021-06-04 14:42:24', '2021-06-04 14:42:24', NULL);

-- END TABLE categories

-- BEGIN TABLE failed_jobs
DROP TABLE IF EXISTS failed_jobs;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table failed_jobs contains no data. No inserts have been genrated.
-- Inserting 0 rows into failed_jobs


-- END TABLE failed_jobs

-- BEGIN TABLE migrations
DROP TABLE IF EXISTS migrations;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 10 rows into migrations
-- Insert batch #1
INSERT INTO migrations (id, migration, batch) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_02_142556_create_permission_tables', 1),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(7, '2021_06_02_144609_create_sessions_table', 2),
(8, '2021_06_03_070742_create_categories_table', 3),
(10, '2021_06_03_070752_create_products_table', 4),
(11, '2021_06_04_211604_create_wishlist_items_table', 5);

-- END TABLE migrations

-- BEGIN TABLE model_has_permissions
DROP TABLE IF EXISTS model_has_permissions;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table model_has_permissions contains no data. No inserts have been genrated.
-- Inserting 0 rows into model_has_permissions


-- END TABLE model_has_permissions

-- BEGIN TABLE model_has_roles
DROP TABLE IF EXISTS model_has_roles;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 5 rows into model_has_roles
-- Insert batch #1
INSERT INTO model_has_roles (role_id, model_type, model_id) VALUES
(4, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(1, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 7);

-- END TABLE model_has_roles

-- BEGIN TABLE password_resets
DROP TABLE IF EXISTS password_resets;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table password_resets contains no data. No inserts have been genrated.
-- Inserting 0 rows into password_resets


-- END TABLE password_resets

-- BEGIN TABLE permissions
DROP TABLE IF EXISTS permissions;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 7 rows into permissions
-- Insert batch #1
INSERT INTO permissions (id, name, guard_name, created_at, updated_at) VALUES
(1, 'create product', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(2, 'edit product', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(3, 'delete product', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(4, 'publish product', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(5, 'create user', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(6, 'edit user', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(7, 'delete user', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09');

-- END TABLE permissions

-- BEGIN TABLE personal_access_tokens
DROP TABLE IF EXISTS personal_access_tokens;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table personal_access_tokens contains no data. No inserts have been genrated.
-- Inserting 0 rows into personal_access_tokens


-- END TABLE personal_access_tokens

-- BEGIN TABLE products
DROP TABLE IF EXISTS products;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `creator_id` bigint(20) unsigned NOT NULL,
  `category_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `is_published` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 3 rows into products
-- Insert batch #1
INSERT INTO products (id, creator_id, category_id, name, image_url, price, description, is_published, created_at, updated_at, deleted_at) VALUES
(1, 1, 1, 'Audi S3 Sportback', '1622837843_mldYqe1QJp.png', '1450000', 'Audi S3 Grey in colour', 1, '2021-06-04 15:19:46', '2021-06-04 20:17:23', NULL),
(2, 1, 1, 'Audi TTRS', '1622838076_0DryZkFYGW.png', '1150000', 'White in colour', 1, '2021-06-04 15:21:00', '2021-06-04 20:21:16', NULL),
(3, 1, 1, 'Lambo Urus', '1623057847_yaI2JCfV3O.png', '6500000', 'Powerful SUV', 1, '2021-06-07 09:24:07', '2021-06-07 09:24:21', NULL);

-- END TABLE products

-- BEGIN TABLE roles
DROP TABLE IF EXISTS roles;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 4 rows into roles
-- Insert batch #1
INSERT INTO roles (id, name, guard_name, created_at, updated_at) VALUES
(1, 'Client', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(2, 'Author', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(3, 'Publisher', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09'),
(4, 'Admin', 'web', '2021-06-02 14:39:09', '2021-06-02 14:39:09');

-- END TABLE roles

-- BEGIN TABLE role_has_permissions
DROP TABLE IF EXISTS role_has_permissions;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 13 rows into role_has_permissions
-- Insert batch #1
INSERT INTO role_has_permissions (permission_id, role_id) VALUES
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4);

-- END TABLE role_has_permissions

-- BEGIN TABLE sessions
DROP TABLE IF EXISTS sessions;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 1 row into sessions
-- Insert batch #1
INSERT INTO sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES
('cJ8lZjDRtetSi9eBXOnl3KPDkiAmp4k3TFPDLiXB', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYXQxSFpRV1YyUGJ2dVlobTVhcFRFNXhhYnVVYWN4RkFrNmE1YzVlQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9tZWRpYS8zIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJE5mdTJsdHNlOENvTWg0d3htUk0zL09iUWVMMkEweVNiOGMxaHZPb0J2d1RPVXVWUHp6eEhDIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCROZnUybHRzZThDb01oNHd4bVJNMy9PYlFlTDJBMHlTYjhjMWh2T29CdndUT1V1VlB6enhIQyI7fQ==', 1623057863);

-- END TABLE sessions

-- BEGIN TABLE users
DROP TABLE IF EXISTS users;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 6 rows into users
-- Insert batch #1
INSERT INTO users (id, name, email, email_verified_at, password, two_factor_secret, two_factor_recovery_codes, remember_token, created_at, updated_at) VALUES
(1, 'Admin', 'admin@test.com', NULL, '$2y$10$Nfu2ltse8CoMh4wxmRM3/ObQeL2A0ySb8c1hvOoBvwTOUuVPzzxHC', NULL, NULL, '2dq6L5spYCsO23UPfol797DXNoLRhZwhIZBnXkbtEtFfXTEBHAeMQFSbdPZk', '2021-06-02 14:43:26', '2021-06-04 20:57:02'),
(2, 'Author', 'author@test.com', NULL, '$2y$10$d.6VUTpQ5Us.flHglokyseGVmA.91qp.88.dZz3oDj5tyjas0y9DW', NULL, NULL, 'RoUcb6hk7uz7nS3i3whgJ9GvpsL9HZ3jAEWLkiheSdhGcgpIXIxECAuGGKq9', '2021-06-02 14:43:26', '2021-06-02 14:43:26'),
(3, 'Publisher', 'publisher@test.com', NULL, '$2y$10$d.6VUTpQ5Us.flHglokyseGVmA.91qp.88.dZz3oDj5tyjas0y9DW', NULL, NULL, 'HKaVbxC2X1yPdvilZoREciBnN0ziabTBPJ4JVofMM7epewffeYuFe2M1ItEY', '2021-06-02 14:43:26', '2021-06-02 14:43:26'),
(4, 'Client', 'client@test.com', NULL, '$2y$10$/BH87eeTiDQlQMJ7JqQuf.iZb0vkG3Vx6gF5ybSTXmaU/9dugw3HK', NULL, NULL, 'PSNUOjyQsfuJADxF6wFuCdEU101nsB0nWJGP2JpHsJeXygjsfzn82lGUbBTt', '2021-06-02 14:43:26', '2021-06-04 20:57:43'),
(5, 'Test', 'test@test.com', NULL, '$2y$10$4C01PLF82gXHs6HSVSZ2f.nl/eH2k/2gYB2JhXm8Fia2JccyzrYsq', NULL, NULL, NULL, '2021-06-04 20:36:38', '2021-06-04 20:36:38'),
(7, 'Test', 'test@test1.com', NULL, '$2y$10$q.pSoa7sX8zaO4EKjVjr6eRgwUPtVaGcAWjhfPT46klYZAQEK2Yjy', NULL, NULL, NULL, '2021-06-04 20:39:00', '2021-06-04 20:39:00');

-- END TABLE users

-- BEGIN TABLE wishlist_items
DROP TABLE IF EXISTS wishlist_items;
CREATE TABLE `wishlist_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `product_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Inserting 12 rows into wishlist_items
-- Insert batch #1
INSERT INTO wishlist_items (id, user_id, product_id, created_at, updated_at, deleted_at) VALUES
(1, 1, 1, '2021-06-04 21:38:29', '2021-06-04 21:39:40', '2021-06-04 21:39:40'),
(2, 1, 1, '2021-06-04 21:38:31', '2021-06-04 21:38:31', '2021-06-04 21:39:40'),
(3, 1, 1, '2021-06-04 21:38:32', '2021-06-04 21:38:32', '2021-06-04 21:39:40'),
(4, 1, 2, '2021-06-04 21:38:41', '2021-06-04 21:39:58', '2021-06-04 21:39:58'),
(5, 1, 1, '2021-06-04 21:40:54', '2021-06-04 21:41:00', '2021-06-04 21:41:00'),
(6, 1, 1, '2021-06-04 21:43:44', '2021-06-04 21:43:46', '2021-06-04 21:43:46'),
(7, 1, 1, '2021-06-04 21:43:48', '2021-06-04 21:43:49', '2021-06-04 21:43:49'),
(8, 1, 1, '2021-06-04 21:43:58', '2021-06-04 21:44:05', '2021-06-04 21:44:05'),
(9, 1, 2, '2021-06-04 21:44:04', '2021-06-04 21:44:12', '2021-06-04 21:44:12'),
(10, 4, 1, '2021-06-04 21:57:37', '2021-06-04 21:57:38', '2021-06-04 21:57:38'),
(11, 4, 2, '2021-06-04 21:57:39', '2021-06-04 21:57:40', '2021-06-04 21:57:40'),
(12, 1, 1, '2021-06-06 21:39:40', '2021-06-06 21:39:41', '2021-06-06 21:39:41');

-- END TABLE wishlist_items

