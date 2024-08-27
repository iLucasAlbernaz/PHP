-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/04/2024 às 01:21
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `goleadores`
--

CREATE TABLE `goleadores` (
  `nome` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL,
  `gols` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `goleadores`
--

INSERT INTO `goleadores` (`nome`, `time`, `gols`) VALUES
('Fred', 'Atl?tico', 20),
('Lu?s Fabiano', 'Vasco', 17),
('Luan', 'Gr?mio', 15),
('Wellington Paulista', 'Chapecoense', 12),
('Rafael', 'Cruzeiro', 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `jogo` varchar(100) NOT NULL,
  `local` varchar(50) NOT NULL,
  `horario` char(5) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`jogo`, `local`, `horario`, `data`) VALUES
('Gr?mio x Atl?tico-MG', 'Arena do Gr?mio', '20:30', '2021-06-10'),
('Goi?s x Fluminense', 'Serra Dourada', '20:30', '2021-06-11'),
('Crici?ma x Vasco', 'Heriberto Hulse', '20:30', '2021-06-12'),
('Vit?ria x S?o Caetano', 'Barrad?o', '21:30', '2021-06-12'),
('Cruzeiro x Flamengo', 'Mineir?o', '21:30', '2021-06-12'),
('FLAxFLU', 'Catar', '00:45', '2023-11-20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
