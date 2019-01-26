
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- fedex_ship
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `fedex_ship`;

CREATE TABLE `fedex_ship`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `client_id` INTEGER,
    `client_date_order` DATE,
    `order_id` TEXT,
    `fedex_order_id` TEXT,
    `version` INTEGER DEFAULT 0,
    `version_created_at` DATETIME,
    `version_created_by` VARCHAR(100),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- fedex_ship_version
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `fedex_ship_version`;

CREATE TABLE `fedex_ship_version`
(
    `id` INTEGER NOT NULL,
    `client_id` INTEGER,
    `client_date_order` DATE,
    `order_id` TEXT,
    `fedex_order_id` TEXT,
    `version` INTEGER DEFAULT 0 NOT NULL,
    `version_created_at` DATETIME,
    `version_created_by` VARCHAR(100),
    PRIMARY KEY (`id`,`version`),
    CONSTRAINT `fedex_ship_version_FK_1`
        FOREIGN KEY (`id`)
        REFERENCES `fedex_ship` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
