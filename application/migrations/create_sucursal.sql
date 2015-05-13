CREATE TABLE `sucursal` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(255) DEFAULT NULL, 
  `direccion` VARCHAR(255) DEFAULT NULL, 
  `idempresa` INT DEFAULT NULL, 
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
);
