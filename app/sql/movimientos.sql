CREATE TABLE `movimientos` (
`id` INT NOT NULL AUTO_INCREMENT ,
`proveedor_id` INT ,
`cliente_id` INT ,
`nombre` VARCHAR( 255 ) NOT NULL ,
`remito` VARCHAR( 255 ) NOT NULL ,
`fecha` DATETIME NOT NULL ,
`created` DATETIME NOT NULL ,
`modified` DATETIME NOT NULL ,
`status` TINYINT( 1 ) NOT NULL DEFAULT '1',
PRIMARY KEY ( `id` )
);