CREATE TABLE `noticia` (
	`idnoticia` INT(11) NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(45) NOT NULL COLLATE 'utf8_general_ci',
	`materia` text NOT NULL COLLATE 'utf8_general_ci',
	`categoria` VARCHAR(200) NOT NULL COLLATE 'utf8_general_ci',
	`foto` VARCHAR(255) NULL DEFAULT 'sem_foto.jpg' COLLATE 'utf8_general_ci',
	PRIMARY KEY (`idnoticia`) USING BTREE
)
COLLATE='utf8_general_ci'
ENGINE=InnoDB
;
