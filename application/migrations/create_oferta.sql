CREATE TABLE `oferta` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `empresa` INT DEFAULT NULL, 
  `sucursal` INT DEFAULT NULL, 
  `producto` INT DEFAULT NULL, 
  `precio` INT DEFAULT NULL, 
  `url_image` VARCHAR(255) DEFAULT NULL, 
  `created_at` DATETIME NOT NULL,
  `updated_at` DATETIME DEFAULT NULL,
  PRIMARY KEY (`id`)
);
