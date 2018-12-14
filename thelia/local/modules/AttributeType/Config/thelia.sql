
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- attribute_type
-- ---------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `attribute_type`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `slug` VARCHAR(50),
    `has_attribute_av_value` TINYINT DEFAULT 0,
    `is_multilingual_attribute_av_value` TINYINT DEFAULT 0,
    `pattern` VARCHAR(255),
    `css_class` VARCHAR(50),
    `input_type` VARCHAR(25),
    `max` FLOAT,
    `min` FLOAT,
    `step` FLOAT,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `slug_unique` (`slug`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- attribute_attribute_type
-- ---------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `attribute_attribute_type`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `attribute_id` INTEGER NOT NULL,
    `attribute_type_id` INTEGER NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `attribute_attribute_type_unique` (`attribute_id`, `attribute_type_id`),
    INDEX `FI_attribute_attribute_type_attribute_type_id` (`attribute_type_id`),
    CONSTRAINT `fk_attribute_attribute_type_attribute_id`
        FOREIGN KEY (`attribute_id`)
        REFERENCES `attribute` (`id`)
        ON UPDATE RESTRICT
        ON DELETE CASCADE,
    CONSTRAINT `fk_attribute_attribute_type_attribute_type_id`
        FOREIGN KEY (`attribute_type_id`)
        REFERENCES `attribute_type` (`id`)
        ON UPDATE RESTRICT
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- attribute_type_av_meta
-- ---------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `attribute_type_av_meta`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `attribute_av_id` INTEGER NOT NULL,
    `attribute_attribute_type_id` INTEGER NOT NULL,
    `locale` VARCHAR(5) DEFAULT 'en_US' NOT NULL,
    `value` VARCHAR(255),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `attribute_type_av_meta_unique` (`attribute_av_id`, `attribute_attribute_type_id`, `locale`),
    INDEX `FI_attribute_av_meta_attribute_attribute_type_id` (`attribute_attribute_type_id`),
    CONSTRAINT `fk_attribute_av_meta_attribute_av_id`
        FOREIGN KEY (`attribute_av_id`)
        REFERENCES `attribute_av` (`id`)
        ON DELETE CASCADE,
    CONSTRAINT `fk_attribute_av_meta_attribute_attribute_type_id`
        FOREIGN KEY (`attribute_attribute_type_id`)
        REFERENCES `attribute_attribute_type` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- attribute_type_i18n
-- ---------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `attribute_type_i18n`
(
    `id` INTEGER NOT NULL,
    `locale` VARCHAR(5) DEFAULT 'en_US' NOT NULL,
    `title` VARCHAR(255),
    `description` LONGTEXT,
    PRIMARY KEY (`id`,`locale`),
    CONSTRAINT `attribute_type_i18n_FK_1`
        FOREIGN KEY (`id`)
        REFERENCES `attribute_type` (`id`)
        ON DELETE CASCADE
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
