CREATE TABLE `fabricantes` (
`id` INT NOT NULL AUTO_INCREMENT ,
`nombre` VARCHAR( 255 ) NOT NULL ,
`descripcion` VARCHAR( 255 ) NOT NULL ,
`imagen` TEXT NOT NULL ,
`created` DATETIME NOT NULL ,
`modified` DATETIME NOT NULL ,
`status` TINYINT( 1 ) NOT NULL DEFAULT '1',
PRIMARY KEY ( `id` )
);