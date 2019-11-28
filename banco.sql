-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25-Nov-2019 às 13:26
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppi`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `comentario` varchar(3000) DEFAULT NULL,
  `idcoment` int(50) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`comentario`, `idcoment`, `id_user`, `id_post`) VALUES
('KKK', 1, 3, 11),
('haha', 2, 3, 11),
('Ahsuahsuhasa', 3, 3, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia_p`
--

CREATE TABLE `denuncia_p` (
  `ofensivo` varchar(500) DEFAULT NULL,
  `palavrao` varchar(500) DEFAULT NULL,
  `nudez` varchar(500) DEFAULT NULL,
  `expositivo` varchar(500) DEFAULT NULL,
  `outro_motivo` varchar(500) DEFAULT NULL,
  `id_den` int(50) NOT NULL,
  `id_post` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `denuncia_p`
--

INSERT INTO `denuncia_p` (`ofensivo`, `palavrao`, `nudez`, `expositivo`, `outro_motivo`, `id_den`, `id_post`) VALUES
('1', '', '3', '', 'csdsdsdsdsds', 68, 11),
('', '', '3', '', 'ausuauhs', 69, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `feedback`
--

CREATE TABLE `feedback` (
  `id_usuario` int(11) DEFAULT NULL,
  `idpub` int(100) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `imagem` varchar(3000) DEFAULT NULL,
  `id_img` int(11) NOT NULL,
  `id_post` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imagem`
--

INSERT INTO `imagem` (`imagem`, `id_img`, `id_post`) VALUES
('publica/982e8b247e825f4f1e5bfcdf71a61b29.jpg', 8, 8),
('publica/a8230b62de0092475598a621e0a866bd.png', 9, 9),
('publica/4715acdcdbcc33d57b5b19deec7e49fd.jpg', 11, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

CREATE TABLE `postagens` (
  `id` int(11) NOT NULL,
  `id_user` int(255) DEFAULT NULL,
  `data` datetime NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `id_user`, `data`, `texto`) VALUES
(8, 3, '2019-11-22 19:04:23', 'saddadadad'),
(9, 3, '2019-11-22 20:27:52', 'juju puto'),
(11, 3, '2019-11-25 11:58:42', 'Claraboia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `fotoperfil` varchar(400) DEFAULT NULL,
  `sobrenome` varchar(400) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `id` int(255) NOT NULL,
  `email` varchar(500) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`fotoperfil`, `sobrenome`, `nome`, `id`, `email`, `senha`) VALUES
(NULL, 'Falcão', 'Gustavo', 1, 'gustavo@gmail.com', '2'),
(NULL, 'Camargo', 'Valentina', 2, 'vale@gmail.com', '3'),
('upload/df691b85a2e603dba93a5d7944ee624d.jpg', 'Prestes', 'Lucas', 3, 'lucas@gmail.com', '5'),
(NULL, 'Falcão', 'Falcão', 4, 'f@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcoment`),
  ADD KEY `fk_post_comentario` (`id_post`),
  ADD KEY `fk_user_comentario` (`id_user`);

--
-- Indexes for table `denuncia_p`
--
ALTER TABLE `denuncia_p`
  ADD PRIMARY KEY (`id_den`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `idpub` (`idpub`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id_img`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcoment` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `denuncia_p`
--
ALTER TABLE `denuncia_p`
  MODIFY `id_den` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_post_comentario` FOREIGN KEY (`id_post`) REFERENCES `postagens` (`id`),
  ADD CONSTRAINT `fk_user_comentario` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);

--
-- Limitadores para a tabela `denuncia_p`
--
ALTER TABLE `denuncia_p`
  ADD CONSTRAINT `denuncia_p_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `postagens` (`id`);

--
-- Limitadores para a tabela `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`idpub`) REFERENCES `postagens` (`id`);

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `imagem_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `postagens` (`id`);

--
-- Limitadores para a tabela `postagens`
--
ALTER TABLE `postagens`
  ADD CONSTRAINT `postagens_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
