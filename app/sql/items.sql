CREATE TABLE `items` (
`id` INT NOT NULL AUTO_INCREMENT ,
`movimiento_id` INT NOT NULL,
`articulo_id` INT NOT NULL,
`cantidad` INT NOT NULL DEFAULT '0' ,
`precio` DECIMAL(10,4) DEFAULT 0,
`created` DATETIME NOT NULL ,
`modified` DATETIME NOT NULL ,
`status` TINYINT( 1 ) NOT NULL DEFAULT '1',
PRIMARY KEY ( `id` )
);