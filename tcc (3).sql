-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2020 às 20:45
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ajuda`
--

CREATE TABLE `ajuda` (
  `id` int(11) NOT NULL,
  `Nome` varchar(40) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Assunto` varchar(50) NOT NULL,
  `mensage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `arquivo`
--

CREATE TABLE `arquivo` (
  `codigo` int(11) NOT NULL,
  `arquivo` varchar(40) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descriçao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `logadouro` varchar(80) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `estado` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `quantidade` varchar(55) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id`, `img`, `nome`, `quantidade`, `preco`) VALUES
(1, 'Bomba Patch Ps2.png', 'Bomba patch (usado) Playstation 2', '3', '249.00'),
(2, 'GTA San Andreas(usado) Ps2.png', 'GTA San Andreas (usado) Playstation 2', '4', '200.00'),
(3, 'Bully Ps2.jpg', 'Bully (usado) Playstation 2', '4', '100.00'),
(4, 'Gran Turismo 4 Ps2.png', 'Gran Turismo 4 Playstation 2', '5', '95.00'),
(5, 'GTA V(usado) Ps3.png', 'GTA V (usado) Playstation 3', '5', '150.00'),
(6, 'Call Of Duty Black Ops 2 Ps3.png', 'Call Of Dutty Black Ops II (usado) Playstation 3', '6', '200.00'),
(7, 'Modern Wafare 2(usado) Ps3.png', 'Modern Wafare 2 (usado) Playstation 3', '5', '145.00'),
(8, 'Lego Marvel Super Hero.png', 'Lego Marvel Super Hero Playstation 3', '7', '89.00'),
(9, 'Red Dead Redemption II Ps4.png', 'Red Dead Redemption II PlayStation 4', '8', '145.00'),
(10, 'Destiny 2 Ps4.jpg', 'Destiny 2 PlayStation 4', '6', '50.00'),
(11, 'Ghost of Tsushima Pa4.png', 'Ghost of Tsushima PlayStation 4', '7', '289.00'),
(12, 'Crash Ps2.png', 'Crash PlayStation 2', '3', '200.00'),
(13, 'Battlefield Ps4.png', 'Battlefield PlayStation 4', '2', '289.00'),
(14, 'Mortal Kombat 11 Ps4.png', 'Mortal Kombat 11 PlayStation 4', '3', '200.00'),
(15, 'Mortal Kombat Shaolin Monks Ps2.png', 'Mortal Kombat Shaolin Monks PlayStation 2', '10', '289.00'),
(16, 'Naruto Storm 3 Ps3.png', 'Naruto Storm 3 PlayStation 3', '5', '55.00'),
(17, 'Red Dead Redemption II Xbox One.png', 'Red Dead Redemption II Xbox One ', '3', '249.00'),
(18, 'NBA 2K20(usado) Xbox One.png', 'NBA 2K20 (usado) Xbox One ', '2', '120.00'),
(19, 'Fifa 2020 Xbox One.png', 'Fifa 2020 Xbox One', '6', '200.00'),
(20, 'Halo Infinite(usado) Xbox One.png', 'Halo Infinite (usado) Xbox One', '7', '103.00'),
(21, 'Session(usado) Xbox One.png', 'Session (usado) Xbox One', '5', '100.00'),
(22, 'DayZ(usado) Xbox One.png', 'DayZ (usado) Xbox One', '6', '207.00'),
(23, 'Just Cause 4 Xbox One.png', 'Just Cause 4 Xbox One', '7', '212.00'),
(24, 'CTR Crash Nintendo Switch.png', 'CTR Crash Nintendo Switch', '5', '46.00'),
(25, 'Destiny 2 Xbox One.png', 'Destiny 2 Xbox One', '6', '200.00'),
(26, 'Raimbow Six Siege(usado) Xbox One.png', 'Raimbow Six Siege (usado) Xbox One', '4', '120.00'),
(27, 'Resident Evil 3(usado) Xbox One.png', 'Resident Evil 3 (usado) Xbox One', '6', '289.00'),
(28, 'The Witcher Xbox One.png', 'The Witcher Xbox One', '5', '125.00'),
(29, 'Pes2020 Xbox One.png', 'Pes 2020 Xbox One', '5', '100.00'),
(30, 'Mario e Sonic Olynpic Games(usado) Portateis Nintendo.png', 'Mario e Sonic (usado) Nintendo Switch Portáteis Ni', '3', '49.00'),
(31, 'Pokemon(usado) Nintendo Switch.png', 'Pokemon (usado) Nintendo Switch', '7', '200.00'),
(32, 'MarioKart Deluxe Nintendo Switch.png', 'MarioKart Deluxe Nintendo Switch', '5', '33.00'),
(33, 'CTR Crash Nintendo Switch.png', 'CTR Crash Nintendo Switch', '5', '46.00'),
(34, 'Donk Kong Nintendo Switch.png', 'Donk Kong Nintendo Switch', '5', '83.00'),
(35, 'Minecraft(usado) Nintendo Switch.png', 'Minecraft (usado) Nintendo Switch', '6', '44.00'),
(36, 'MegaMan Nintendo Switch.png', 'Mega Man Nintendo Switch', '5', '95.00'),
(37, 'Kirb Nintendo Switch.png', 'Kirb Nintendo Switch', '6', '89.00'),
(38, 'Sonic Mania Nintendo Switch.png', 'Sonic Mania Nintendo Switch', '5', '39.00'),
(39, 'CRASH(usado) Nintendo Switch.png', 'CRASH (usado) Nintendo Switch', '7', '77.00'),
(40, 'Lego Marvel Super Heroes Nintendo Switch.jpg', 'Lego Marvel Super Heroes Nintendo Switch', '5', '33.00'),
(41, 'Kart Race(usado).png', 'Kart Race (usado) Nintendo Switch', '5', '29.00'),
(42, 'Super Mario(usado) Portateis Nintendo.png', 'Super Mario Portáteis Nintendo', '6', '180.00'),
(43, 'Mario Portateis Nintendo.png', 'Mario Portáteis Nintendo', '7', '100.00'),
(44, 'Donk Kong Portateis Nintendo.png', 'Donk Kong Portáteis Nintendo', '5', '77.00'),
(45, 'Mario Party 9 Portateis Nintendo.png', 'Mario Party 9 Portáteis Nintendo', '2', '103.00'),
(46, 'The Legend Of Zelda Portateis Nintendo.png', 'The Legend Of Zelda Portáteis Nintendo', '1', '83.00'),
(47, 'Pokemon tournament(usado) Portateis Nintendo.png', 'Pokemon tournament (usado) Portáteis Nintendo', '3', '207.00'),
(48, 'New Super Luige Portateis Nintendo.png', 'New Super Luige Portáteis Nintendo', '2', '100.00'),
(49, 'Super Mario Maker Portateis Nintendo.png', 'Super Mario Maker Portáteis Nintendo', '3', '289.00'),
(50, 'Mario e Sonic Olynpic Games(usado) Portateis Nintendo.png', 'Mario e Sonic Olynpic Games (usado) Portáteis Nint', '2', '150.00'),
(51, 'Splatton(usado) Portateis Nintendo.png', 'Splatton (usado) Portáteis Nintendo', '1', '200.00'),
(52, 'Bowling Pinbusters.png', 'Bowling Pinbusters Portáteis Nintendo', '3', '100.00'),
(53, 'Captain Toad(usado) Portateis Nintendo.png', 'Captain Toad (usado) Portáteis Nintendo', '3', '35.00'),
(54, 'secret quest.png', 'Secret Quest Atari', '4', '80.00'),
(55, 'pitfaal.png', ' PitFall Atari', '1', '74.00'),
(56, 'tempest.png', 'Tempest Atari', '2', '68.00'),
(57, 'gravital.png', 'Gravitar Atari', '3', '68.00'),
(58, 'pac man.png', 'Pac Man Atari', '2', '80.00'),
(59, 'donk kong.png', 'Donk kong Atari', '5', '85.00'),
(60, 'desert falcon.png', ' Desert Falcon Atari', '6', '75.00'),
(61, 'space invaders.png', 'Space Invadrs Atari', '3', '80.00'),
(62, 'sim city.png', 'SimCity Atari', '7', '100.00'),
(63, 'galaxyan.png', 'galaxian Atari', '4', '80.00'),
(64, 'pong.png', 'Pong Atari', '5', '85.00'),
(65, 'river raid.png', 'River Raid Atari', '6', '65.00'),
(66, 'Street fight II Anos 90.png', 'Street fight II Anos 90', '1', '100.00'),
(67, 'Super Metroid(usado) Anos 90.jpg', 'Super Metroid (usado) Anos 90', '2', '89.00'),
(68, 'StarCraft(Usado) Anos 90.png', 'StarCraft (Usado) Anos 90', '1', '79.00'),
(69, 'Resident Evil(usado) Anos 90.png', 'Resident Evil (usado) Anos 90', '1', '70.00'),
(70, 'Galaga Anos 80.png', 'Galaga Anos 80', '3', '80.00'),
(71, 'jungle Hunt Anos 80.png', 'jungle Hunt Anos 80', '6', '60.00'),
(72, 'Centipede Anos 80.png', 'Centipede Anos 80', '6', '54.00'),
(73, 'Prince of Persia Anos 80.png', 'Prince of Persia Anos 80', '5', '50.00'),
(74, 'kaboom Anos 80.png', 'kaboom Anos 80', '4', '80.00'),
(75, 'Super Mario Bros Anos 80.png', 'Super Mario Bros Anos 80', '3', '70.00'),
(76, 'Megamania Anos 80.png', 'Megamania Anos 80', '5', '80.00'),
(77, 'Tetris Anos 80.png', 'Tetris Anos 80', '3', '60.00'),
(78, 'Fone HeadSet camuflada.png', 'Fone HeadSet camuflada Fone de ouvido', '4', '100.00'),
(79, 'Fone Feminino cor rosa.png', 'Fone Feminino cor rosa Fone de ouvido', '5', '125.00'),
(80, 'HeadSet gamer Onikuma profissional pc.png', 'HeadSet gamer Onikuma profissional pc Fone de ouvi', '4', '180.00'),
(81, 'HeadSet Gamer Sade cor rosa.png', ' HeadSet Gamer Sade cor rosa Fone de ouvido', '3', '140.00'),
(82, 'Fone De Ouvido + Adptador.png', '  Fone De Ouvido + Adptador Fone de ouvido', '6', '83.00'),
(83, 'Fone De Ouvido FlyCatcher.png', ' Fone De Ouvido FlyCatcher Fone de ouvido', '7', '120.00'),
(84, 'Fone De Ouvido Langstom G100X Intra-Articular.png', 'Fone De Ouvido Langstom G100X Intra-Articular Pret', '6', '70.00'),
(85, 'Fone De Ouvido Langstom G100X Intra-Articular Vermelho.png', 'Fone De Ouvido Langstom G100X Intra-Articular Verm', '5', '70.00'),
(86, 'Fone De Ouvido Gamer K8 camuflada.png', 'Fone De Ouvido Gamer K8 camuflada Fone de ouvido', '4', '120.00'),
(87, 'Fone De Ouvido HeadSet Led Microfone-Soldado.png', 'Fone De Ouvido HeadSet Led Microfone-Soldado Fone', '3', '100.00'),
(88, 'Fone De Ouvido HeadSet Gamer K3.png', 'Fone De Ouvido HeadSet Gamer K3 Fone de ouvido', '5', '120.00'),
(89, 'Fone De Ouvido HeadSet Gamer profissional Camuflado.png', 'Fone De Ouvido HeadSet Gamer profissional Camuflad', '3', '139.00'),
(90, 'Funko Pop Crash.png', 'Funko Pop Crash Edição de colecionador', '8', '150.00'),
(91, 'Funko Pop SubZero.jpg', 'Funko Pop SubZero Edição de colecionador', '4', '125.00'),
(92, 'Funko Pop Good Of War.jpg', 'Funko Pop God Of War Edição de colecionador', '7', '180.00'),
(93, 'Funko Pop Thanos.png', '  Funko Pop Thanos Edição de colecionador', '6', '120.00'),
(94, 'Funko Pop Mega Man.png', 'Funko Pop Mega Man Edição de colecionador', '6', '83.00'),
(95, 'Funko Pop Game Of Thrones.png', 'Funko Pop Game Of Thrones Edição de colecionador', '4', '20.00'),
(96, 'Funko Pop Nemesis.png', 'Funko Pop Nemesis Edição de colecionador', '6', '70.00'),
(97, 'Funko Pop Ryu.png', 'Funko Pop Ryu Edição de colecionador', '5', '70.00'),
(98, 'Modern Wafare 2(limited) Edição Especial.png', 'Modern Wafare 2 (limited) Edição especial', '4', '50.00'),
(99, 'Ovoide Asa Noturna(limited) Edição Especial.png', 'Ovoide Asa Noturna (limited) Edição especial', '3', '9.00'),
(100, 'Ovoide Dark Side Edição Especial.png', 'Ovoide Dark Side Edição especial', '2', '8.00'),
(101, 'Action Figure Thor.png', 'Action Figure Thor Edição especial', '3', '20.00'),
(102, 'Action Figure The Witcher(limited).png', 'Action Figure The Witcher (limited) Edição especia', '4', '83.00'),
(103, 'Action Figure Crash(limited).png', 'Action Figure Crash (limited) Edição especial', '1', '120.00'),
(104, 'Far Cry 4 Edição Especial.png', 'Far Cry 4 Edição especial', '4', '70.00'),
(105, 'Call Of Duty Black Ops 3 Ps3.png', 'Call Of duty 3-Ps3 (limited) Edição especial', '2', '70.00'),
(106, 'NBA 2K20 Ps4.png', 'NBA 2K20 Ps4', '5', '100.00'),
(107, 'Good Of War Ps4.png', 'Good Of War Ps4', '5', '150.00'),
(108, 'Pes2020 Xbox One.png', 'Pes2020 Xbox One', '5', '100.00'),
(109, 'The last of Us Ps4.png', 'The last of Us Ps4', '5', '95.00'),
(110, 'Spider Man Ps4.png', 'Spider Man Ps4', '5', '100.00'),
(111, 'Overwatch Ps4.png', 'Overwatch Ps4', '5', '138.00'),
(112, 'Raimbow Six Siege Xbox One.png', 'Raimbow Six Siege Xbox One', '5', '145.00'),
(113, 'Call Of Duty Modern Warface Xbox One.png', 'Call Of Duty Modern Warface Xbox One', '5', '90.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `conteudo` text NOT NULL,
  `first` int(11) NOT NULL DEFAULT 1,
  `showinmenu` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `titulo`, `conteudo`, `first`, `showinmenu`) VALUES
(16, 'alien-', '', 1, 0),
(17, 'alien-', '', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

CREATE TABLE `suporte` (
  `id` int(6) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(55) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(6) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(35) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`) VALUES
(16, 'A', '798979', 'A@GMAIL.COM', 'e10adc3949ba59abbe56e057f20f883e'),
(17, 'Gabriel Pereira', '199999999', 'gabrielpereira@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ajuda`
--
ALTER TABLE `ajuda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `arquivo`
--
ALTER TABLE `arquivo`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `paginas`
--
ALTER TABLE `paginas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `suporte`
--
ALTER TABLE `suporte`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ajuda`
--
ALTER TABLE `ajuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `arquivo`
--
ALTER TABLE `arquivo`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73262;

--
-- AUTO_INCREMENT de tabela `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `suporte`
--
ALTER TABLE `suporte`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
