-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2025 at 06:18 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'CUST_0001', 'Joy Paul1', '2025-07-19 07:27:32', '2025-07-20 01:06:46'),
(3, 'CUST_0002', 'Mr. Jhon Dou', '2025-07-19 21:38:20', '2025-07-19 21:38:20');

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
-- Table structure for table `form_one`
--

CREATE TABLE `form_one` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `restaurantname` varchar(255) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `managing_director` varchar(255) NOT NULL,
  `post_address` text NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location_address` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `opening_hours_days` varchar(255) DEFAULT NULL,
  `vat_id` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `start_fee` decimal(8,2) NOT NULL DEFAULT 0.00,
  `additional_kitchen_equipment` text DEFAULT NULL,
  `delivery_licensee` tinyint(1) NOT NULL DEFAULT 0,
  `delivery_platform` tinyint(1) NOT NULL DEFAULT 0,
  `signature_licensee` varchar(255) DEFAULT NULL,
  `signature_licensor` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_one`
--

INSERT INTO `form_one` (`id`, `customer_id`, `restaurantname`, `owner_name`, `managing_director`, `post_address`, `contact_person`, `phone_number`, `mobile_number`, `email`, `location_address`, `start_date`, `opening_hours_days`, `vat_id`, `iban`, `start_fee`, `additional_kitchen_equipment`, `delivery_licensee`, `delivery_platform`, `signature_licensee`, `signature_licensor`, `created_at`, `updated_at`) VALUES
(1, 2, 'Restaurantname', '11', '2132', '1212', '12', '123', '213213', 'demotestlara@gmail.com', 'asdsad', '2025-07-20', 'ev2b1122', '111', '111', 111100.03, 'qwewewe', 1, 1, 'signatures/FOVyaVhc3HPNXy2HK5CCNv4hal2FVAiOWyLCC1PU.png', 'signatures/uZHIiLLlYrbdNiwB16PfJbqtZY0P1zjRWKL79oKs.png', '2025-07-19 13:42:23', '2025-07-19 13:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `form_threes`
--

CREATE TABLE `form_threes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `chain` varchar(255) DEFAULT NULL,
  `framework_agreement` varchar(255) DEFAULT NULL,
  `old_customer_number` varchar(255) DEFAULT NULL,
  `legal_name` varchar(255) DEFAULT NULL,
  `owner_name` varchar(255) DEFAULT NULL,
  `company_phone` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `contact_mobile` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `postal_code_city` varchar(255) DEFAULT NULL,
  `billing_email` varchar(255) DEFAULT NULL,
  `communication_email` varchar(255) DEFAULT NULL,
  `commercial_register_number` varchar(255) DEFAULT NULL,
  `vat_id` varchar(255) DEFAULT NULL,
  `tax_number` varchar(255) DEFAULT NULL,
  `has_eu_branch` tinyint(1) NOT NULL DEFAULT 0,
  `is_pep` tinyint(1) NOT NULL DEFAULT 0,
  `fee_own_delivery` decimal(8,2) DEFAULT NULL,
  `fee_platform_delivery` decimal(8,2) DEFAULT NULL,
  `fee_pickup` decimal(8,2) DEFAULT NULL,
  `fee_online_payment` decimal(8,2) DEFAULT NULL,
  `terminal_cost` decimal(8,2) DEFAULT NULL,
  `banner_fee` decimal(8,2) DEFAULT NULL,
  `setup_fee` decimal(8,2) DEFAULT NULL,
  `monthly_fee` decimal(8,2) DEFAULT NULL,
  `order_transmission_cost` decimal(8,2) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `signatory_name` varchar(255) DEFAULT NULL,
  `signatory_date` date DEFAULT NULL,
  `signature_file` varchar(255) DEFAULT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_category` varchar(255) DEFAULT NULL,
  `site_street` varchar(255) DEFAULT NULL,
  `site_postal_code_city` varchar(255) DEFAULT NULL,
  `site_phone` varchar(255) DEFAULT NULL,
  `site_contact_person` varchar(255) DEFAULT NULL,
  `site_contact_mobile` varchar(255) DEFAULT NULL,
  `site_customer_email` varchar(255) DEFAULT NULL,
  `service_start_date` date DEFAULT NULL,
  `delivery_type` varchar(255) DEFAULT NULL,
  `pickup_option` tinyint(1) NOT NULL DEFAULT 0,
  `access_info` varchar(255) DEFAULT NULL,
  `cash_payment` tinyint(1) NOT NULL DEFAULT 0,
  `stempelkarte_participation` tinyint(1) NOT NULL DEFAULT 0,
  `website_domain` varchar(255) DEFAULT NULL,
  `connection_method` varchar(255) DEFAULT NULL,
  `delivery_area_postal_codes` varchar(255) DEFAULT NULL,
  `min_order_value` decimal(8,2) DEFAULT NULL,
  `delivery_cost` decimal(8,2) DEFAULT NULL,
  `free_delivery_threshold` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_threes`
--

INSERT INTO `form_threes` (`id`, `customer_id`, `brand`, `chain`, `framework_agreement`, `old_customer_number`, `legal_name`, `owner_name`, `company_phone`, `contact_person`, `contact_mobile`, `street`, `postal_code_city`, `billing_email`, `communication_email`, `commercial_register_number`, `vat_id`, `tax_number`, `has_eu_branch`, `is_pep`, `fee_own_delivery`, `fee_platform_delivery`, `fee_pickup`, `fee_online_payment`, `terminal_cost`, `banner_fee`, `setup_fee`, `monthly_fee`, `order_transmission_cost`, `account_holder`, `iban`, `signatory_name`, `signatory_date`, `signature_file`, `site_name`, `site_category`, `site_street`, `site_postal_code_city`, `site_phone`, `site_contact_person`, `site_contact_mobile`, `site_customer_email`, `service_start_date`, `delivery_type`, `pickup_option`, `access_info`, `cash_payment`, `stempelkarte_participation`, `website_domain`, `connection_method`, `delivery_area_postal_codes`, `min_order_value`, `delivery_cost`, `free_delivery_threshold`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cupiditate porro ven', 'Velit minima ut corp', 'Dolores quo est odi', '635', 'Sharon Conner', 'Talon Beck', 'Cantrell Bartlett Plc', 'Culpa maiores quia m', 'Ut qui in aute velit', 'Id obcaecati est con', 'Ex pariatur Ea debi', 'kokyludysa@mailinator.com', 'zuruc@mailinator.com', '732', 'Libero minus nulla n', '490', 1, 1, 69.00, 86.00, 43.00, 52.00, 25.00, 99.00, 83.00, 9.00, 45.00, 'Modi eaque ea rerum', 'Sint adipisci deseru', 'Carla Stout', '1989-06-21', 'signatures/w0639Jp6PqBfnmO3sdzHsdwXcq51fsQQLK1hpgH4.png', 'Mechelle Obrien', 'Qui natus natus aut', 'Ex laudantium sint', 'Excepturi proident', '+1 (436) 333-8109', 'Fugiat occaecat und', 'Expedita vero distin', 'wozama@mailinator.com', '1983-11-18', 'Sed maiores sint ea', 0, 'Deleniti aperiam sed', 1, 1, 'https://www.duraxefoly.ca', 'Et sit incididunt i', 'Nobis impedit dolor', 58.00, 51.00, 65.00, '2025-07-21 11:10:22', '2025-07-21 11:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `form_two`
--

CREATE TABLE `form_two` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `billing_address` text NOT NULL,
  `delivery_address` text NOT NULL,
  `bank_details` varchar(255) NOT NULL,
  `vat_id_number` varchar(255) NOT NULL,
  `tax_number` varchar(255) NOT NULL,
  `primary_contact` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `first_delivery_date` date DEFAULT NULL,
  `handheld_contact` varchar(255) DEFAULT NULL,
  `email_trans_gourmet` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form_two`
--

INSERT INTO `form_two` (`id`, `customer_id`, `date`, `company_name`, `billing_address`, `delivery_address`, `bank_details`, `vat_id_number`, `tax_number`, `primary_contact`, `mobile_number`, `email`, `landline`, `first_delivery_date`, `handheld_contact`, `email_trans_gourmet`, `created_at`, `updated_at`) VALUES
(1, 2, '2025-07-20', 'Rangs', 'Dhaka,Bangladesh', 'Dhaka', 'IBAN', '4123', '12312', 'ererer', '01705102555', 'demotestlara@gmail.com', '23123123', '2025-07-21', 'sadasdas', 'demotestlara@gmail.com', '2025-07-21 00:53:09', '2025-07-21 00:53:09');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_07_19_122713_create_customers_table', 2),
(6, '2025_07_19_132505_add_customer_id_to_customers_table', 3),
(7, '2025_07_19_164903_create_form_1_table', 4),
(8, '2025_07_20_033045_create_form_two_table', 5),
(9, '2025_07_21_160004_create_form_threes_table', 6),
(10, '2025_07_21_160005_create_form_threes_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@test.com', NULL, '$2y$12$pRPgZMN3fHX4K21eYL4HheqOiFHj/czHsBYIVxClI8pbw00bZaATe', NULL, '2025-07-12 04:04:55', '2025-07-12 04:04:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_name_unique` (`name`),
  ADD UNIQUE KEY `customers_customer_id_unique` (`customer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `form_one`
--
ALTER TABLE `form_one`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_1_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `form_threes`
--
ALTER TABLE `form_threes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_threes_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `form_two`
--
ALTER TABLE `form_two`
  ADD PRIMARY KEY (`id`),
  ADD KEY `form_two_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form_one`
--
ALTER TABLE `form_one`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_threes`
--
ALTER TABLE `form_threes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form_two`
--
ALTER TABLE `form_two`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `form_one`
--
ALTER TABLE `form_one`
  ADD CONSTRAINT `form_1_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `form_threes`
--
ALTER TABLE `form_threes`
  ADD CONSTRAINT `form_threes_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `form_two`
--
ALTER TABLE `form_two`
  ADD CONSTRAINT `form_two_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
