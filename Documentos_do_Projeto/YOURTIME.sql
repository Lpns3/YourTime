-- MySQL Workbench Forward Engineering


SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema yourtime
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema yourtime
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `yourtime` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yourtime`.`agendamento` (
  `ID_AGENDAMENTO` INT NOT NULL AUTO_INCREMENT,
  `DATA_AGENDAMENTO` DATE NOT NULL,
  `HORA` VARCHAR(4) NOT NULL,
  `VALOR_HORA` VARCHAR(5) NOT NULL,
  `AGENDADO` INT(1) NOT NULL,
  `FORMA_PAGAMENTO` INT(1) NOT NULL,
  PRIMARY KEY (`ID_AGENDAMENTO`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yourtime`.`locador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yourtime`.`locador` (
  `ID_LOCADOR` INT NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(200) NOT NULL,
  `TELEFONE` VARCHAR(10) NULL DEFAULT NULL,
  `EMAIL` VARCHAR(40) NOT NULL,
  `CPF` VARCHAR(11) NOT NULL,
  `ENDERECO` VARCHAR(255) NULL DEFAULT NULL,
  `SENHA` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`ID_LOCADOR`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`agendamento_locador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yourtime`.`agendamento_locador` (
  `agendamento_ID_AGENDAMENTO` INT NOT NULL,
  `locador_ID_LOCADOR` INT NOT NULL,
  PRIMARY KEY (`agendamento_ID_AGENDAMENTO`, `locador_ID_LOCADOR`),
  INDEX `fk_agendamento_has_locador_locador1_idx` (`locador_ID_LOCADOR` ASC),
  INDEX `fk_agendamento_has_locador_agendamento_idx` (`agendamento_ID_AGENDAMENTO` ASC),
  CONSTRAINT `fk_agendamento_has_locador_agendamento`
    FOREIGN KEY (`agendamento_ID_AGENDAMENTO`)
    REFERENCES `mydb`.`agendamento` (`ID_AGENDAMENTO`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_agendamento_has_locador_locador1`
    FOREIGN KEY (`locador_ID_LOCADOR`)
    REFERENCES `yourtime`.`locador` (`ID_LOCADOR`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `yourtime` ;

-- -----------------------------------------------------
-- Table `yourtime`.`estabelecimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yourtime`.`estabelecimento` (
  `ID_ESTABELECIMENTO` INT NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(200) NOT NULL,
  `ENDERECO` VARCHAR(255) NULL DEFAULT NULL,
  `TELEFONE` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`ID_ESTABELECIMENTO`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `yourtime`.`proprietario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yourtime`.`proprietario` (
  `ID_PROPRIETARIO` INT NOT NULL AUTO_INCREMENT,
  `NOME` VARCHAR(200) NOT NULL,
  `EMAIL` VARCHAR(40) NOT NULL,
  `SENHA` VARCHAR(10) NOT NULL,
  `estabelecimento_ID_ESTABELECIMENTO` INT NOT NULL,
  PRIMARY KEY (`ID_PROPRIETARIO`),
  INDEX `fk_proprietario_estabelecimento_idx` (`estabelecimento_ID_ESTABELECIMENTO` ASC),
  CONSTRAINT `fk_proprietario_estabelecimento`
    FOREIGN KEY (`estabelecimento_ID_ESTABELECIMENTO`)
    REFERENCES `yourtime`.`estabelecimento` (`ID_ESTABELECIMENTO`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `yourtime`.`locador_estabelecimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yourtime`.`locador_estabelecimento` (
  `locador_ID_LOCADOR` INT NOT NULL,
  `estabelecimento_ID_ESTABELECIMENTO` INT NOT NULL,
  PRIMARY KEY (`locador_ID_LOCADOR`, `estabelecimento_ID_ESTABELECIMENTO`),
  INDEX `fk_locador_has_estabelecimento_estabelecimento1_idx` (`estabelecimento_ID_ESTABELECIMENTO` ASC),
  INDEX `fk_locador_has_estabelecimento_locador1_idx` (`locador_ID_LOCADOR` ASC),
  CONSTRAINT `fk_locador_has_estabelecimento_locador1`
    FOREIGN KEY (`locador_ID_LOCADOR`)
    REFERENCES `yourtime`.`locador` (`ID_LOCADOR`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_locador_has_estabelecimento_estabelecimento1`
    FOREIGN KEY (`estabelecimento_ID_ESTABELECIMENTO`)
    REFERENCES `yourtime`.`estabelecimento` (`ID_ESTABELECIMENTO`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `yourtime`.`proprietario_agendamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `yourtime`.`proprietario_agendamento` (
  `proprietario_ID_PROPRIETARIO` INT NOT NULL,
  `agendamento_ID_AGENDAMENTO` INT NOT NULL,
  PRIMARY KEY (`proprietario_ID_PROPRIETARIO`, `agendamento_ID_AGENDAMENTO`),
  INDEX `fk_proprietario_has_agendamento_agendamento1_idx` (`agendamento_ID_AGENDAMENTO` ASC),
  INDEX `fk_proprietario_has_agendamento_proprietario1_idx` (`proprietario_ID_PROPRIETARIO` ASC),
  CONSTRAINT `fk_proprietario_has_agendamento_proprietario1`
    FOREIGN KEY (`proprietario_ID_PROPRIETARIO`)
    REFERENCES `yourtime`.`proprietario` (`ID_PROPRIETARIO`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proprietario_has_agendamento_agendamento1`
    FOREIGN KEY (`agendamento_ID_AGENDAMENTO`)
    REFERENCES `mydb`.`agendamento` (`ID_AGENDAMENTO`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;