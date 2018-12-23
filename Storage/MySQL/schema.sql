
DROP TABLE IF EXISTS bono_module_booking_calendar;

CREATE TABLE `bono_module_booking_calendar` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `start` DATETIME NOT NULL COMMENT 'Start date',
    `end` DATETIME NOT NULL COMMENT 'End date',
    `comment` TEXT NOT NULL
) DEFAULT CHARSET=UTF8;
