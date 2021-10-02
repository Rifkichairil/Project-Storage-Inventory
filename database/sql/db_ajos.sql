-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 02, 2021 at 07:02 AM
-- Server version: 5.7.27-log
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ajos`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ajos', '$2y$10$j4DiBJYxnhsX5Dj.m0mXh.tubBGPoJdZjvYVhrlvMbC8Wf24MlG2S', '2021-06-21 09:26:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `barang_masuk` datetime NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `tipe` varchar(200) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `qty` int(210) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode`, `nama`, `lokasi`, `barang_masuk`, `kategori`, `tipe`, `kondisi`, `qty`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(31, 'KDB-TBbOO', 'Libbie', 'gedung 1', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Repudiandae recusandae voluptate eos aspernatur quia neque. Sint exercitationem qui maiores porro ducimus eveniet. Harum aspernatur neque aspernatur. Laborum accusantium libero tempora maiores.', '2021-06-21 03:51:43', '2021-06-23 02:35:01', NULL),
(32, 'KDB-6rdxw', 'Roslyn', 'gedung 1', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Ut debitis qui voluptates et. Ut minus ut eos deserunt pariatur dolorem. Voluptate fugit amet esse rerum optio earum eum. Vel corporis vitae unde cum ut rerum dignissimos.', '2021-06-21 03:51:43', '2021-06-23 01:54:55', NULL),
(33, 'KDB-httTA', 'Alisha', 'gedung 2', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Qui vero voluptate ea qui deleniti adipisci omnis. Aliquam quae quidem aut dolor ipsam neque. Facere debitis hic totam qui.', '2021-06-21 03:51:43', '2021-06-23 01:52:05', NULL),
(34, 'KDB-gaA57', 'Meta', 'gedung 2', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Aspernatur optio molestias tenetur blanditiis praesentium doloribus. Ex omnis eos maxime aperiam deleniti facilis nihil. Ut numquam assumenda dignissimos quia.', '2021-06-21 03:51:43', '2021-06-23 01:52:05', NULL),
(35, 'KDB-6DkKg', 'Mabelle', 'gedung 3', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Eos consequuntur consequatur incidunt unde quod id. Adipisci dolorum et neque incidunt amet possimus. Qui qui nam non repellat aspernatur incidunt recusandae.', '2021-06-21 03:51:43', '2021-06-23 02:36:26', NULL),
(36, 'KDB-zM69C', 'Matteo', 'gedung 3', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Veritatis aut perspiciatis incidunt sit. Nam velit eligendi qui quia. Sapiente dicta iure assumenda dolorum praesentium.', '2021-06-21 03:51:43', '2021-06-23 02:36:41', NULL),
(37, 'KDB-z6muI', 'Brian', 'gedung 4', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 7, 'Perferendis qui ut quae atque ullam ea. Aut quis quas et et. Amet praesentium asperiores deserunt rerum atque architecto quos.', '2021-06-21 03:51:43', '2021-06-23 02:43:35', NULL),
(38, 'KDB-mGKyc', 'Macey', 'gedung 4', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Molestiae nesciunt non quia non in adipisci est. Non voluptas omnis hic cumque aut iste. Nihil similique explicabo maiores est dolorem est. Praesentium quae porro quas.', '2021-06-21 03:51:43', '2021-06-23 02:35:27', NULL),
(39, 'KDB-yDtuv', 'Florencio', 'gedung 5', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 7, 'Qui quaerat et aliquid ullam quis est. Illo porro nihil aut iusto explicabo. Tempora deleniti culpa ipsum qui corrupti facere natus. Velit molestiae harum totam voluptatem.', '2021-06-21 03:51:43', '2021-06-23 02:43:27', NULL),
(40, 'KDB-ryaLQ', 'Gertrude', 'gedung 5', '2021-06-21 10:51:43', 'Novel', 'Buku', 'Baru', 8, 'Provident in ipsam iure quas alias et cupiditate. Saepe est eos nihil nesciunt praesentium sed laudantium nam. Neque at temporibus quisquam. Et omnis beatae ducimus incidunt illum et.', '2021-06-21 03:51:43', '2021-06-23 01:52:05', NULL),
(41, 'KDB-CMy1Y', 'Alford', 'gedung 6', '2021-06-21 10:56:57', 'Novel', 'Buku', 'Baru', 8, 'Officia ea qui delectus optio voluptatem labore rem. Vero reiciendis quae non eum. Quia hic accusantium et iure accusantium omnis veritatis. Animi ullam quisquam minima natus.', '2021-06-21 03:56:57', '2021-06-23 02:34:47', NULL),
(42, 'KDB-Ebc7f', 'Berta', 'gedung 6', '2021-06-21 10:56:57', 'Novel', 'Buku', 'Baru', 8, 'Ducimus amet ad in. Ipsam ab quasi natus id sint et ipsa. Eos est doloremque distinctio et. Repellendus et est id facilis voluptatum. Magnam amet dolor voluptas nihil dolor culpa.', '2021-06-21 03:56:57', '2021-06-23 02:36:34', NULL),
(43, 'KDB-TsL6y', 'Lauren', 'gedung 7', '2021-06-21 10:56:57', 'Novel', 'Buku', 'Baru', 7, 'Fuga deleniti sunt est nihil sit. Laudantium qui nihil sit quibusdam odio recusandae illo. Aut pariatur nemo sunt odit dolor aut voluptatum mollitia. Aperiam quo debitis est accusantium quos et id.', '2021-06-21 03:56:57', '2021-07-02 04:25:47', NULL),
(44, 'KDB-kqRO0', 'Jordy', 'gedung 7', '2021-06-21 10:56:57', 'Novel', 'Buku', 'Baru', 7, 'Illo voluptas possimus fugit amet doloremque beatae. Nesciunt et velit odio atque asperiores. Omnis sed sed maiores neque accusamus repellendus placeat.', '2021-06-21 03:56:57', '2021-06-23 02:43:27', NULL),
(45, 'KDB-IayFe', 'Maye', 'gedung 8', '2021-06-21 10:56:57', 'Novel', 'Buku', 'Baru', 7, 'Eos dolores vitae nam sed id. Vitae ad consequatur repudiandae nemo fugiat facere velit. Et voluptatem ipsum veniam molestiae consequatur.', '2021-06-21 03:56:57', '2021-07-02 04:09:27', NULL),
(46, 'KDB-KPcKh', 'texting', 'gedung 2', '2021-06-23 00:00:00', 'Novel', 'Buku', 'Baru', 7, 'texting', '2021-06-22 02:10:29', '2021-07-02 04:09:27', NULL),
(47, 'KDB-uqizD', 'dddddd', 'gedung 1', '2021-07-30 00:00:00', 'Novel', 'Buku', 'Baru', 13, 'ddddd', '2021-07-01 17:19:14', '2021-07-01 17:19:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) NOT NULL,
  `account_id` bigint(20) NOT NULL,
  `barang_id` bigint(20) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `pengembalian` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `account_id`, `barang_id`, `nama_peminjam`, `tanggal`, `pengembalian`, `created_at`, `updated_at`, `deleted_at`) VALUES
(12, 1, 45, 'Rifki', '2021-07-01', '2021-07-02', '2021-07-02 04:09:27', '2021-07-02 04:09:27', NULL),
(13, 1, 46, 'Rifki', '2021-07-05', '2021-07-15', '2021-07-02 04:09:27', '2021-07-02 04:09:27', NULL),
(14, 1, 43, 'a a a a', '2021-07-07', '2021-07-21', '2021-07-02 04:25:47', '2021-07-02 04:25:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_barang` (`kode`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `barang_id` (`barang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`barang_id`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
