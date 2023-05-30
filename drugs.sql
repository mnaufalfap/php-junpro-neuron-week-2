-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 30 Bulan Mei 2023 pada 01.19
-- Versi server: 5.7.40
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `drugs`
--

CREATE TABLE `drugs` (
  `drugs_id` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drugs_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drugs_class` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drugs_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drugs_unit` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `drugs_prices` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `drugs`
--

INSERT INTO `drugs` (`drugs_id`, `drugs_name`, `drugs_class`, `drugs_type`, `drugs_unit`, `drugs_prices`, `created_at`, `updated_at`) VALUES
('D00001', 'Paracetamol', 'Obat Bebas', 'Tablet', 'mg', 1500, '2023-05-29 17:53:20', '2023-05-29 17:53:20'),
('D00002', 'Antimo', 'Obat Bebas Terbatas', 'Tablet', 'pcs', 6000, '2023-05-29 17:53:37', '2023-05-29 17:53:37'),
('D00003', 'Paratusin', 'Obat Bebas Terbatas', 'Tablet', 'pcs', 18000, '2023-05-29 17:54:26', '2023-05-29 17:54:26'),
('D00004', 'Promag', 'Obat Bebas', 'Tablet', 'mg', 3000, '2023-05-29 17:55:03', '2023-05-29 17:55:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drugs_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
