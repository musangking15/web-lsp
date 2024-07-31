-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jul 2024 pada 18.14
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lsp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `katalog_id` int(5) NOT NULL,
  `nama_katalog` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`katalog_id`, `nama_katalog`, `deskripsi`, `harga`, `gambar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Paket 1', '                                                        <b>ahhahaha</b>                        ', '40000000', '1722425271_25e8c7b1d63c36b3f2ac.jpg', 'd', '2024-07-31 01:45:08', '2024-07-31 04:30:55'),
(2, 'Paket 2', 'Tsfasfafasf', '35000000', '1722425204_83fe16b0983ea3968c1f.jpg', 'd', '2024-07-31 03:51:15', '2024-07-31 04:26:44'),
(3, 'Paket 5', '<span style=\"background-color: rgb(255, 255, 0);\">ahaahaah</span>', '1234343', '1722425069_5b4058174e5a7f960a7d.png', 'p', '2024-07-31 04:13:11', '2024-07-31 04:24:29'),
(4, 'Paket 5', '                            <span style=\"background-color: rgb(255, 255, 0);\">ahaahaah</span>                        ', '1234343', '1722424493_57f01e7cedf4099dba0d.jpg', 'p', '2024-07-31 04:14:53', '2024-07-31 04:14:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-07-30-144854', 'App\\Database\\Migrations\\CreateUser', 'default', 'App', 1722352589, 1),
(2, '2024-07-30-144859', 'App\\Database\\Migrations\\CreateKatalog', 'default', 'App', 1722352589, 1),
(3, '2024-07-30-144911', 'App\\Database\\Migrations\\CreateSetting', 'default', 'App', 1722352589, 1),
(4, '2024-07-30-145047', 'App\\Database\\Migrations\\CreateTransaksi', 'default', 'App', 1722352624, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(5) NOT NULL,
  `alamat` text DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`setting_id`, `alamat`, `logo`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, '                                                                                                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.19265357161!2d106.83061947316963!3d-6.369109262300077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ed01b68548ad%3A0x89aea3afc2b2e77d!2sUniversitas%20Gunadarma%20Kampus%20D!5e0!3m2!1sid!2sid!4v1722439586652!5m2!1sid!2sid\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>                                                                                                        ', '1722442282_e9c230ee07613d5588cc.png', '85717219640', 'jewepe@gmail.com', '2024-07-31 08:28:50', '2024-07-31 09:11:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `alamat` text DEFAULT NULL,
  `kat_id` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin123', '$2y$10$jlZxERaNHdmSwwvxIZwec.xlFzehBw2iWHAjil2muSmdXCD99MsmG', '2024-07-31 06:20:11', '2024-07-31 06:20:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`katalog_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `transaksi_kat_id_foreign` (`kat_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `katalog_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_kat_id_foreign` FOREIGN KEY (`kat_id`) REFERENCES `katalog` (`katalog_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
