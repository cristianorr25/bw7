CREATE DATABASE bw7_aluguel_carros DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
USE bw7_aluguel_carros;

CREATE TABLE `bw7_aluguel_carros`.`usuarios` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(250) NOT NULL,
  `senha` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`idusuario`));

CREATE TABLE `bw7_aluguel_carros`.`veiculos` (
  `idveiculo` INT NOT NULL AUTO_INCREMENT,
  `marca` VARCHAR(250) NOT NULL,
  `cor` VARCHAR(250) NOT NULL,
  `status` INT(11) NOT NULL,
  PRIMARY KEY (`idveiculo`));

INSERT INTO `usuarios` (`idusuario`,`usuario`,`senha`) VALUES (1,'admin','202cb962ac59075b964b07152d234b70');

 