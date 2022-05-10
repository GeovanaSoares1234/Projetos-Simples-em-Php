-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Maio-2016 às 17:47
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `login` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `type` varchar(1) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `login`, `password`, `type`) VALUES
(1, 'adm', '308f2f75ca0108e0333ef99129f32327', 'a'),
(2, 'visitante', 'visitante', 'v'),
(3, 'joao', 'dccd96c256bc7dd39bae41a405f25e43', 'a'),
(4, 'carlos', 'dc599a9972fde3045dab59dbd1ae170b', 'v'),
(5, 'eduardo', '6d6354ece40846bf7fca65dfabd5d9d4', 'v'),
(6, 'guassi', '777092945f0ea157b145a0f93b0c85e3', 'a'),
(7, 'antonio', '4a181673429f0b6abbfd452f0f3b5950', 'v'),
(8, 'olga', 'e44d46e0bb9691cf448a9bb19391e8ab', 'v'),
(9, 'cecilia', 'd432eb18017c004fd305969713a17aa8', 'v'),
(10, 'ribeiro', 'e3e46bfa662c32af38baaf5f1705ecb8', 'a'),
(11, 'sandra', '308f2f75ca0108e0333ef99129f32327', 'a'),
(12, 'adriana', 'a01183854d7e784f0455d559f4327d55', 'v'),
(13, 'regina', '221182760f5b980c97c7a74a94d57364', 'a'),
(14, 'guilherme', '192309aaddc500140db28668e1bbd8b5', 'a'),
(15, 'henrique', '83a6c8fb8e054de73cb4f76c3c6f9701', 'v'),
(16, 'frederico', '9c63f5e4892289a3e85147dede4dcb75', 'v'),
(17, 'helena', '237391cf8685346ec9124eac31cb77fd', 'v'),
(18, 'cunha', '34e299984ef9a6a236767d1c4a0bdeff', 'a'),
(19, 'luiz', '77949c9f02621a4c85964be115a9dcc9', 'v'),
(20, 'francisco', '117735823fadae51db091c7d63e60eb0', 'v'),
(21, 'gustavo', '4c96f8324e3ba54a99e78249b95daa30', 'v'),
(22, 'paulo', '308f2f75ca0108e0333ef99129f32327', 'v'),
(23, 'gabriela', '276e697e74e8b5264465139a480db556', 'v'),
(24, 'alice', '6384e2b2184bcbf58eccf10ca7a6563c', 'v'),
(25, 'valeria', '7902b7c0be5cedb6fbada8d4c7fc42a0', 'v'),
(26, 'fernando', 'cebdd715d4ecaafee8f147c2e85e0754', 'v'),
(27, 'carla', '1fa4a2211b4e290f2a066de6b84187ec', 'a'),
(28, 'fabio', 'a53bd0415947807bcb95ceec535820ee', 'v'),
(29, 'maria', '263bce650e68ab4e23f28263760b9fa5', 'v'),
(30, 'marcos', 'c5e3539121c4944f2bbe097b425ee774', 'a'),
(31, 'marco', 'f5888d0bb58d611107e11f7cbc41c97a', 'v'),
(32, 'alexandre', '3d65fd70d95a4edfe9555d0ebeca2b17', 'v'),
(33, 'pholio', 'e925b3c915a0d36d6afe5179b16eedff', 'a'),
(34, 'carlito', '1342f88ca345c44819ecb7e20137f283', 'a'),
(35, 'guerino', 'cacdf923dc05147e9c30923284769e88', 'a'),
(36, 'franciele', '47fd2c4089ceda5eba6c87a38205cdb0', 'a'),
(41, 'victor', 'ffc150a160d37e92012c196b6af4160d', 'a'),
(42, 'matheus', '45339359513f09155110f63f7ca91c3e', 'v'),
(43, 'mateus', 'e42b6a82864b7060c447ecebd62518a3', 'v'),
(44, 'vitor', '997d13b90da22b35ce43bebdd332ad11', 'v'),
(45, 'maria', '263bce650e68ab4e23f28263760b9fa5', 'v'),
(46, 'vitoria', '2c03e6a8b100b6bf46ad21d47734cbb3', 'v'),
(47, 'victoria', 'e0e34c5ad05aac3eef6ab31eacbf7a5c', 'v'),
(48, 'eduarda', '6d6354ece40846bf7fca65dfabd5d9d4', 'v'),
(49, 'dirce', 'a5734bb0d5a79297eb46bf7d99b1046e', 'a'),
(50, 'dirceu', '249bf8df91f5aa68fb86047b5d96cedb', 'a'),
(51, 'patricia', '823fec7a2632ea7b498c1d0d11c11377', 'a'),
(52, 'edilson', '515cb7a03da6ff46f76829a36c8efcc5', 'v'),
(57, 'teresa', '2eb1f74718222b9cab10e7d8b0120535f7a7ad72', 'a'),
(58, 'brigite', '5ff008c8a76e880275ee24c92d33d6a58f429c89', 'v'),
(59, 'brenda', 'e156bbc5ceceeb6fda9be0b72d4a265ea1b40f79', 'v'),
(60, 'jenifer', '85a3cd8970773b7c162a4b2de25030a4340d67b5', 'v');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
