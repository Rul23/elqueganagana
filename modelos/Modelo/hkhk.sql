SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table1` (
  `b vbn` INT NOT NULL AUTO_INCREMENT,
  `table1_b vbn` INT NOT NULL,
  PRIMARY KEY (`b vbn`),
  INDEX `fk_table1_table1_idx` (`table1_b vbn` ASC),
  CONSTRAINT `fk_table1_table1`
    FOREIGN KEY (`table1_b vbn`)
    REFERENCES `mydb`.`table1` (`b vbn`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`table2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`table2` (
  `idtable2` INT NOT NULL,
  `table1_b vbn` INT NOT NULL,
  PRIMARY KEY (`idtable2`),
  INDEX `fk_table2_table11_idx` (`table1_b vbn` ASC),
  CONSTRAINT `fk_table2_table11`
    FOREIGN KEY (`table1_b vbn`)
    REFERENCES `mydb`.`table1` (`b vbn`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
