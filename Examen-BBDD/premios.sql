CREATE DATABASE `premios` /*!40100 COLLATE 'latin1_spanish_ci' */;
USE `premios`;
CREATE TABLE `persona` (
`id_persona` INT NOT NULL,
`nombre` VARCHAR(50) NOT NULL,
`acumulado` INT NOT NULL DEFAULT '0',
`NPremios` INT NOT NULL DEFAULT '0',
PRIMARY KEY (`id_persona`)
) COLLATE='latin1_spanish_ci';

CREATE TABLE `premio` (
`id_premio` INT NOT NULL,
`id_persona` INT NOT NULL,
`euros` INT NOT NULL DEFAULT '0',
PRIMARY KEY (`id_premio`)
) COLLATE='latin1_spanish_ci';
ALTER TABLE `premio`
ADD CONSTRAINT `FK_premio_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`);

INSERT INTO `premios`.`persona` (`id_persona`, `nombre`) VALUES ('1', 'Pedro');
INSERT INTO `premios`.`persona` (`id_persona`, `nombre`) VALUES ('2', 'Teresa');
INSERT INTO `premios`.`persona` (`id_persona`, `nombre`) VALUES ('3', 'Ana');
INSERT INTO `premios`.`persona` (`id_persona`, `nombre`) VALUES ('4', 'Juan');

INSERT INTO `premios`.`premio` (`id_premio`, `id_persona`, `euros`) VALUES ('1', '1', '100');
INSERT INTO `premios`.`premio` (`id_premio`, `id_persona`, `euros`) VALUES ('2', '1', '50');
INSERT INTO `premios`.`premio` (`id_premio`, `id_persona`, `euros`) VALUES ('3', '2', '250');
INSERT INTO `premios`.`premio` (`id_premio`, `id_persona`, `euros`) VALUES ('4', '2', '50');
INSERT INTO `premios`.`premio` (`id_premio`, `id_persona`, `euros`) VALUES ('5', '3', '175');
INSERT INTO `premios`.`premio` (`id_premio`, `id_persona`, `euros`) VALUES ('6', '3', '50');
INSERT INTO `premios`.`premio` (`id_premio`, `id_persona`, `euros`) VALUES ('7', '3', '25');
