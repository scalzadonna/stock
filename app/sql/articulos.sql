CREATE TABLE `articulos` (
`id` INT NOT NULL AUTO_INCREMENT ,
`codigo` INT NOT NULL ,
`proveedor_id` INT NOT NULL ,
`categoria_id` INT NOT NULL ,
`rubro_id` INT NOT NULL ,
`ubicacion_id` INT NOT NULL ,
`fabricante_id` INT NOT NULL ,
`nombre` VARCHAR( 100 ) NOT NULL ,
`stock` INT NOT NULL DEFAULT '0' ,
`creado` DATETIME NOT NULL ,
`modificado` DATETIME NOT NULL ,
`costo` DECIMAL(10,4) DEFAULT 0,
`margen` DECIMAL(10,4) DEFAULT 0,
`precio` DECIMAL(10,4) DEFAULT 0,
`status` TINYINT( 1 ) NOT NULL DEFAULT '1',
`imagen` TEXT NOT NULL DEFAULT '',
`observaciones` TEXT NOT NULL DEFAULT '',
PRIMARY KEY ( `id` )
);