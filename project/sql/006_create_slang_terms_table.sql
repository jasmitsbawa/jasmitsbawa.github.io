CREATE TABLE `slang_terms` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `created` DATETIME DEFAULT CURRENT_TIMESTAMP,
  `modified` DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `term` VARCHAR(255) NOT NULL,
  `definition` TEXT NOT NULL,
  `example` TEXT,
  `source` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id`)
);
