-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Jul-2019 às 05:04
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modulo_8`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Geral'),
(2, 'Esportes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `momento_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `titulo`, `categoria_id`, `conteudo`) VALUES
(1, 'Minha noticia geral', 1, 'Meu texto de exemplo'),
(2, 'Minha noticia 2', 1, 'MEU TEXTO DE EXEMPLO2'),
(3, 'Noticia de Esporte', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum est at ex varius, quis gravida eros ultricies. Praesent aliquam risus quis tellus tincidunt lacinia. Vivamus vitae dapibus arcu. Phasellus vitae tellus a neque tincidunt facilisis. Suspendisse nunc augue, viverra ut accumsan ut, consectetur ac nunc. Phasellus mattis justo eget eleifend ultricies. Nam luctus dolor quis risus laoreet suscipit. Vestibulum et volutpat libero. Integer molestie, orci vitae pellentesque blandit, libero arcu rhoncus turpis, quis mattis urna leo nec risus. Curabitur pulvinar aliquet enim, id fermentum quam hendrerit sit amet. Phasellus hendrerit vestibulum justo ac posuere. Nam ante enim, dignissim et lorem vitae, pharetra molestie mi.'),
(4, 'MINHA OUTRA NOTICIA DE ESPORTE', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum est at ex varius, quis gravida eros ultricies. Praesent aliquam risus quis tellus tincidunt lacinia. Vivamus vitae dapibus arcu. Phasellus vitae tellus a neque tincidunt facilisis. Suspendisse nunc augue, viverra ut accumsan ut, consectetur ac nunc. Phasellus mattis justo eget eleifend ultricies. Nam luctus dolor quis risus laoreet suscipit. Vestibulum et volutpat libero. Integer molestie, orci vitae pellentesque blandit, libero arcu rhoncus turpis, quis mattis urna leo nec risus. Curabitur pulvinar aliquet enim, id fermentum quam hendrerit sit amet. Phasellus hendrerit vestibulum justo ac posuere. Nam ante enim, dignissim et lorem vitae, pharetra molestie mi.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
