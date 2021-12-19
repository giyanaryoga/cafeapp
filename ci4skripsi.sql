-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 04:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_meja` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `name`, `no_hp`, `created_at`, `updated_at`, `id_meja`) VALUES
(3, 'customer1@gmail.com', 'Customer 1', '089378362', NULL, NULL, 2),
(4, 'customer2@gmail.com', 'Customer 2', '08937452312', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detailpesan`
--

CREATE TABLE `detailpesan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `id_pesan` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailpesan`
--

INSERT INTO `detailpesan` (`id`, `id_menu`, `qty`, `note`, `id_pesan`, `created_at`, `updated_at`) VALUES
(1, 2, 2, NULL, 1, NULL, NULL),
(2, 3, 1, NULL, 1, NULL, NULL),
(3, 5, 3, NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategorimenu`
--

CREATE TABLE `kategorimenu` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaKategori` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategorimenu`
--

INSERT INTO `kategorimenu` (`id`, `namaKategori`, `created_at`, `updated_at`) VALUES
(1, 'coffee', '2021-07-27 13:36:06', '2021-07-27 13:36:06'),
(2, 'tea', '2021-07-27 13:36:06', '2021-07-27 13:36:06'),
(3, 'food', '2021-07-27 13:36:06', '2021-07-27 13:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomor` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `meja`
--

INSERT INTO `meja` (`id`, `nomor`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'meja 2 orang', '2021-07-27 13:36:46', '2021-07-27 13:36:46'),
(2, 2, 'meja 2 orang', '2021-07-27 13:36:46', '2021-07-27 13:36:46'),
(3, 3, 'meja 4 orang', '2021-07-27 13:36:46', '2021-07-27 13:36:46'),
(4, 4, 'meja 2 orang', '2021-07-27 13:36:46', '2021-07-27 13:36:46'),
(5, 5, 'meja 4 orang', '2021-07-27 13:36:46', '2021-07-27 13:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `namaMenu` varchar(255) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `id_status` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `slug`, `namaMenu`, `harga`, `gambar`, `id_kategori`, `id_status`, `created_at`, `updated_at`) VALUES
(2, 'teh', 'Teh', 15000, '1627656533_2fbb63f61a22d6ec6558.jpg', 2, 1, '2021-07-30 09:48:53', '2021-07-30 09:48:53'),
(3, 'kopi-vietnam', 'kopi vietnam', 12000, 'default.jpg', 1, 1, '2021-07-30 09:49:43', '2021-07-30 09:49:43'),
(5, 'kopi-tubruk', 'kopi tubruk', 12200, '1627656692_57cd54f03223ef03f210.jpg', 1, 1, '2021-07-30 09:51:32', '2021-07-30 09:51:32'),
(6, 'americano', 'americano', 12000, 'default.jpg', 1, 1, '2021-07-30 22:34:37', '2021-07-30 22:34:37'),
(7, 'cappucino', 'Cappucino', 15000, 'default.jpg', 1, 1, '2021-07-30 22:49:17', '2021-07-30 22:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-07-27-050452', 'App\\Database\\Migrations\\Role', 'default', 'App', 1627362801, 1),
(2, '2021-07-27-050515', 'App\\Database\\Migrations\\User', 'default', 'App', 1627362802, 1),
(3, '2021-07-27-050559', 'App\\Database\\Migrations\\Meja', 'default', 'App', 1627362802, 1),
(4, '2021-07-27-050621', 'App\\Database\\Migrations\\StatusMenu', 'default', 'App', 1627362803, 1),
(5, '2021-07-27-050632', 'App\\Database\\Migrations\\StatusPesanan', 'default', 'App', 1627362803, 1),
(6, '2021-07-27-050643', 'App\\Database\\Migrations\\KategoriMenu', 'default', 'App', 1627362803, 1),
(7, '2021-07-27-050701', 'App\\Database\\Migrations\\Menu', 'default', 'App', 1627362804, 1),
(8, '2021-07-27-050709', 'App\\Database\\Migrations\\Customer', 'default', 'App', 1627362805, 1),
(9, '2021-07-27-050715', 'App\\Database\\Migrations\\Pesanan', 'default', 'App', 1627362805, 1),
(10, '2021-07-27-050728', 'App\\Database\\Migrations\\DetailPesanan', 'default', 'App', 1627362805, 1),
(11, '2021-07-27-050737', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1627362806, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) UNSIGNED NOT NULL,
  `id_status` int(10) UNSIGNED NOT NULL,
  `jumlah_harga` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_customer`, `id_status`, `jumlah_harga`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 20000, NULL, NULL),
(2, 4, 1, 22000, NULL, NULL),
(3, 3, 2, 120000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_role` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-07-27 13:35:36', '2021-07-27 13:35:36'),
(2, 'user', '2021-07-27 13:35:36', '2021-07-27 13:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `statusmenu`
--

CREATE TABLE `statusmenu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statusmenu`
--

INSERT INTO `statusmenu` (`id`, `name`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'available', 'menu tersedia', '2021-07-27 13:33:56', '2021-07-27 13:33:56'),
(2, 'unavailable', 'menu tidak tersedia', '2021-07-27 13:33:56', '2021-07-27 13:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `statuspesanan`
--

CREATE TABLE `statuspesanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statuspesanan`
--

INSERT INTO `statuspesanan` (`id`, `name`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'unpaid', 'belum terbayar', '2021-07-27 13:34:54', '2021-07-27 13:34:54'),
(2, 'paid', 'sudah terbayar', '2021-07-27 13:34:54', '2021-07-27 13:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_pesan` int(10) UNSIGNED NOT NULL,
  `ppn` int(11) DEFAULT NULL,
  `total_bayar` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tanggal`, `id_pesan`, `ppn`, `total_bayar`, `created_at`, `updated_at`) VALUES
(1, '0000-00-00 00:00:00', 1, 2000, 24000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_role` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `name`, `created_at`, `updated_at`, `id_role`) VALUES
(6, 'user112', '$2y$10$WyymkuR80E6CfiWiS0Tu9OysquF1BnO2xMo/ydObkJ002RHTCHqsa', 'user@user.com', 'User Yoga', '2021-08-14 08:40:40', '2021-08-17 07:42:10', 2),
(8, 'giyanaryoga', '$2y$10$du9G2ec24WJxV4NkilkCl.TpVoQmPR/nLl23JiK7g4dpNcV7sqoYK', 'giyanaryoga@gmail.com', 'Giyanaryoga Puguh', '2021-08-15 09:43:59', '2021-08-15 09:43:59', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Customer_id_meja_foreign` (`id_meja`);

--
-- Indexes for table `detailpesan`
--
ALTER TABLE `detailpesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DetailPesan_id_menu_foreign` (`id_menu`),
  ADD KEY `DetailPesan_id_pesan_foreign` (`id_pesan`);

--
-- Indexes for table `kategorimenu`
--
ALTER TABLE `kategorimenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meja`
--
ALTER TABLE `meja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Menu_id_kategori_foreign` (`id_kategori`),
  ADD KEY `Menu_id_status_foreign` (`id_status`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Pesanan_id_customer_foreign` (`id_customer`),
  ADD KEY `Pesanan_id_status_foreign` (`id_status`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusmenu`
--
ALTER TABLE `statusmenu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuspesanan`
--
ALTER TABLE `statuspesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Transaksi_id_pesan_foreign` (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `User_id_role_foreign` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detailpesan`
--
ALTER TABLE `detailpesan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategorimenu`
--
ALTER TABLE `kategorimenu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meja`
--
ALTER TABLE `meja`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statusmenu`
--
ALTER TABLE `statusmenu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statuspesanan`
--
ALTER TABLE `statuspesanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `Customer_id_meja_foreign` FOREIGN KEY (`id_meja`) REFERENCES `meja` (`id`);

--
-- Constraints for table `detailpesan`
--
ALTER TABLE `detailpesan`
  ADD CONSTRAINT `DetailPesan_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menu` (`id`),
  ADD CONSTRAINT `DetailPesan_id_pesan_foreign` FOREIGN KEY (`id_pesan`) REFERENCES `pesanan` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `Menu_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategorimenu` (`id`),
  ADD CONSTRAINT `Menu_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `statusmenu` (`id`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `Pesanan_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `Pesanan_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `statuspesanan` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `Transaksi_id_pesan_foreign` FOREIGN KEY (`id_pesan`) REFERENCES `pesanan` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
