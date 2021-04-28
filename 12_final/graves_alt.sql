
DROP DATABASE IF EXISTS graves;
CREATE DATABASE graves DEFAULT CHARACTER SET utf8;

use graves;

CREATE TABLE users (
    userID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(120) NOT NULL
) ENGINE=InnoDB;

CREATE TABLE graves (
    graveID INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `firstName` VARCHAR(25),
    `middleName` VARCHAR(25),
    `lastName` VARCHAR(25),
    `birthDate` DATE,
    `deathDate` DATE,
    `imageName` VARCHAR(255)
) ENGINE=InnoDB;

INSERT INTO `users` VALUES (1,'chuck', '$2y$10$MzcyZGQ4MTdhMGY0M2I5YOTCpKGxetRkOefInqjZ98Ja4ppdMXAZG');

INSERT INTO `graves` VALUES (12,'Lola Margaret','R','Coley','1907-12-04','1965-11-09','_DSC0001.JPG'),(13,'\\"Jake\\" Stewart','Leroy','Coley','1904-01-30','1982-12-28','_DSC0002.JPG');
