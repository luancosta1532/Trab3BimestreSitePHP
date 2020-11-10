-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema TrabModel3
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `TrabModel3` ;

-- -----------------------------------------------------
-- Schema TrabModel3
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `TrabModel3` DEFAULT CHARACTER SET utf8 ;
USE `TrabModel3` ;

-- -----------------------------------------------------
-- Table `TrabModel3`.`Tipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TrabModel3`.`Tipo` (
  `idTipo` INT NOT NULL AUTO_INCREMENT,
  `umtipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TrabModel3`.`Loja`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TrabModel3`.`Loja` (
  `idLoja` INT NOT NULL AUTO_INCREMENT,
  `loja` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idLoja`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TrabModel3`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TrabModel3`.`Produto` (
  `idProduto` INT NOT NULL AUTO_INCREMENT,
  `Nome` VARCHAR(100) NOT NULL,
  `Preco` DECIMAL(10,2) NOT NULL,
  `Tipo_idTipo` INT NOT NULL,
  `Loja_idLoja` INT NOT NULL,
  PRIMARY KEY (`idProduto`),
  INDEX `fk_Produto_Tipo_idx` (`Tipo_idTipo` ASC) VISIBLE,
  INDEX `fk_Produto_Loja1_idx` (`Loja_idLoja` ASC) VISIBLE,
  CONSTRAINT `fk_Produto_Tipo`
    FOREIGN KEY (`Tipo_idTipo`)
    REFERENCES `TrabModel3`.`Tipo` (`idTipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produto_Loja1`
    FOREIGN KEY (`Loja_idLoja`)
    REFERENCES `TrabModel3`.`Loja` (`idLoja`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `TrabModel3`.`Tipo`
-- -----------------------------------------------------
START TRANSACTION;
USE `TrabModel3`;
INSERT INTO `TrabModel3`.`Tipo` (`idTipo`, `umtipo`) VALUES (DEFAULT, 'Tecnologia');
INSERT INTO `TrabModel3`.`Tipo` (`idTipo`, `umtipo`) VALUES (DEFAULT, 'Eletrodomestico');
INSERT INTO `TrabModel3`.`Tipo` (`idTipo`, `umtipo`) VALUES (DEFAULT, 'Esporte');
INSERT INTO `TrabModel3`.`Tipo` (`idTipo`, `umtipo`) VALUES (DEFAULT, 'Joia');
INSERT INTO `TrabModel3`.`Tipo` (`idTipo`, `umtipo`) VALUES (DEFAULT, 'Brinquedo');
INSERT INTO `TrabModel3`.`Tipo` (`idTipo`, `umtipo`) VALUES (DEFAULT, 'Ferramenta');

COMMIT;


-- -----------------------------------------------------
-- Data for table `TrabModel3`.`Loja`
-- -----------------------------------------------------
START TRANSACTION;
USE `TrabModel3`;
INSERT INTO `TrabModel3`.`Loja` (`idLoja`, `loja`) VALUES (DEFAULT, 'loja1');
INSERT INTO `TrabModel3`.`Loja` (`idLoja`, `loja`) VALUES (DEFAULT, 'loja2');
INSERT INTO `TrabModel3`.`Loja` (`idLoja`, `loja`) VALUES (DEFAULT, 'loja3');
INSERT INTO `TrabModel3`.`Loja` (`idLoja`, `loja`) VALUES (DEFAULT, 'loja4');

COMMIT;


-- -----------------------------------------------------
-- Data for table `TrabModel3`.`Produto`
-- -----------------------------------------------------
START TRANSACTION;
USE `TrabModel3`;
INSERT INTO `TrabModel3`.`Produto` (`idProduto`, `Nome`, `Preco`, `Tipo_idTipo`, `Loja_idLoja`) VALUES (DEFAULT, 'Produto1', DEFAULT, DEFAULT, DEFAULT);
INSERT INTO `TrabModel3`.`Produto` (`idProduto`, `Nome`, `Preco`, `Tipo_idTipo`, `Loja_idLoja`) VALUES (DEFAULT, 'Produto2', DEFAULT, DEFAULT, DEFAULT);
INSERT INTO `TrabModel3`.`Produto` (`idProduto`, `Nome`, `Preco`, `Tipo_idTipo`, `Loja_idLoja`) VALUES (DEFAULT, 'Produto3', DEFAULT, DEFAULT, DEFAULT);
INSERT INTO `TrabModel3`.`Produto` (`idProduto`, `Nome`, `Preco`, `Tipo_idTipo`, `Loja_idLoja`) VALUES (DEFAULT, 'Produto4', DEFAULT, DEFAULT, DEFAULT);

COMMIT;

