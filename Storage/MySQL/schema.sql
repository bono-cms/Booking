
CREATE TABLE `bono_module_booking_dates` (
    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date` DATE
);

CREATE TABLE `bono_module_booking_time` (

    `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    `date_id` INT NOT NULL,
    `time` TIME NOT NULL,
    `comment` TEXT NOT NULL

) DEFAULT CHARSET=UTF8;
