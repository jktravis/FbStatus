SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';


-- -----------------------------------------------------
-- Table `fb_gen`.`verb`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fb_gen`.`verb` ;

CREATE  TABLE IF NOT EXISTS `fb_gen`.`verb` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `verb` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `verb` (`verb` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `fb_gen`.`noun`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fb_gen`.`noun` ;

CREATE  TABLE IF NOT EXISTS `fb_gen`.`noun` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `noun` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `fb_gen`.`action`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `fb_gen`.`action` ;

CREATE  TABLE IF NOT EXISTS `fb_gen`.`action` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `action` TEXT NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
