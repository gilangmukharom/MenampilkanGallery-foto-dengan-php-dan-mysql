--INPUTAN PERINTAH SQL UNTUK DATABASE--

--Ubah zona waktu--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--- Nama Database : tugasproyek ---

--buat terlebih dahulu tabel dengan nama tabel 'galeri' untuk menampung data yang diupload--
--buat 3 kolom : id, tgl_upload, nama-- 
CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `tgl_upload` date NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Masukan data foto ke database urut sesuai format :
--

INSERT INTO `galeri` (`id`, `tgl_upload`, `nama`) VALUES
(1, '2017-07-16', '1.jpg'),
(2, '2017-07-16', '2.jpg'),
(3, '2017-07-16', '3.jpg'),
(4, '2017-07-16', '4.jpg'),
(5, '2017-07-16', '2.jpg'),
(6, '2017-07-16', '6.jpg'),
(7, '2017-07-16', '7.jpg'),
(8, '2017-07-16', '8.jpg'),
(9, '2017-07-16', 'hijabdosa1.jpg'),
(10, '2017-07-16', 'Cup-with-coffee-abstract-illustration-vector-02.jpg'),
(11, '2017-07-16', 'miulan-logo.jpg');

--jadikan kolom 'id' sebagai PRYMARY KEY--

ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--ubah format pada kolom 'id' menjadi AUTO_INCREMENT
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

