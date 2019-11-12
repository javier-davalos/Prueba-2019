-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cursodwp
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema cursodwp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `cursodwp` DEFAULT CHARACTER SET utf8 ;
USE `cursodwp` ;

-- -----------------------------------------------------
-- Table `cursodwp`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NULL,
  `emial` VARCHAR(255) NULL,
  `password` VARCHAR(255) NULL,
  `avatar` VARCHAR(255) NULL,
  `activo` TINYINT(1) NULL,
  `fecha_add` DATE NULL,
  `fecha_act` DATE NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`parametros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`parametros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `logo` VARCHAR(255) NULL,
  `favicon` VARCHAR(255) NULL,
  `email` VARCHAR(255) NULL,
  `direccion` VARCHAR(255) NULL,
  `whatsapp` VARCHAR(255) NULL,
  `phone` VARCHAR(255) NULL,
  `horarios` LONGTEXT NULL,
  `facebook` VARCHAR(255) NULL,
  `twitter` VARCHAR(255) NULL,
  `instagram` VARCHAR(255) NULL,
  `youtube` VARCHAR(255) NULL,
  `map` LONGTEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `imagen` VARCHAR(255) NULL,
  `url` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL,
  `fecha_add` DATE NULL,
  `fecha_upd` DATE NULL,
  `usuario_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`servicios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `descripcion_corta` VARCHAR(255) NULL,
  `descripcion_larga` LONGTEXT NULL,
  `imagen` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL,
  `fecha_add` DATE NULL,
  `fecha_upd` DATE NULL,
  `usuario_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`mensajes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`mensajes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `asunto` VARCHAR(255) NOT NULL,
  `telefono` VARCHAR(255) NOT NULL,
  `mansaje` LONGTEXT NULL,
  `ip` VARCHAR(255) NULL,
  `fecha_add` DATE NULL,
  `fecha_upd` DATE NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`sliders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`sliders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `imagen` VARCHAR(255) NULL,
  `url` VARCHAR(255) NULL,
  `target` VARCHAR(45) NULL,
  `visible` TINYINT(1) NULL,
  `fecha_add` DATE NULL,
  `fecha_upd` DATE NULL,
  `usuario_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`colaboradores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`colaboradores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `imagen` VARCHAR(255) NULL,
  `facebook` VARCHAR(255) NULL,
  `twitter` VARCHAR(255) NULL,
  `instagram` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL,
  `fecha_add` DATE NULL,
  `fecha_upd` DATE NULL,
  `usuario_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`cms`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`cms` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(255) NOT NULL,
  `descripcion_corta` VARCHAR(255) NULL,
  `descripcion_larga` LONGTEXT NULL,
  `imagen` VARCHAR(255) NULL,
  `icono` VARCHAR(45) NULL,
  `video` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL,
  `fecha_add` DATE NULL,
  `fecha_upd` DATE NULL,
  `usuario_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cursodwp`.`links`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `cursodwp`.`links` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) NOT NULL,
  `id_padre` INT NULL,
  `url` VARCHAR(255) NULL,
  `target` VARCHAR(255) NULL,
  `visible` TINYINT(1) NULL,
  `fecha_add` DATE NULL,
  `fecha_upd` DATE NULL,
  `usuario_id` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
