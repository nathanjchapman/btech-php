
-- Create a database called widget_corp.
DROP DATABASE IF EXISTS widget_corp;
CREATE DATABASE widget_corp DEFAULT CHARACTER SET utf8;

use widget_corp;

-- Create table subjects with the following fields:
    --     id int(11) not null auto_increment
    --     menu_name varchar(30) not null
    --     position int(3) not null
    --     visible tinyint(1) not null
    --     make id the primary key
CREATE TABLE subjects (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    menu_name VARCHAR(30) NOT NULL,
    position INT(3) NOT NULL,
    visible TINYINT(1) NOT NULL
) ENGINE=InnoDB;

-- Create table pages with the following fields:
    --     id int(11) not null auto_increment
    --     subject_id int(11) not null
    --     menu _name varchar(30) not null
    --     position int(3)
    --     visible tinyint(1) not null
    --     content text
    --     id will be primary key
    --     create an index on subject_id
    --     create foreign key on subject_id
CREATE TABLE pages (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    subject_id INT UNSIGNED NOT NULL,
    menu_name VARCHAR(30) NOT NULL,
    position INT(3),
    VISIBLE TINYINT(1) NOT NULL,
    content TEXT,
    CONSTRAINT `fk_pages_subjects`
        FOREIGN KEY (subject_id) REFERENCES subjects(id)
            ON DELETE CASCADE
            ON UPDATE RESTRICT
) ENGINE=InnoDB;

-- Create table admins with the following fields:
    --     id int(11) not null auto_increment
    --     username varchar(50)not null
    --     hashed_password varchar(60) null
    --     make id the primary key
CREATE TABLE admins (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    hashed_password VARCHAR(60) NOT NULL
) ENGINE=InnoDB;


-- INSERT DATA

-- Subjects

INSERT IGNORE INTO `subjects` (`menu_name`, `position`, `visible`) VALUES ('About Widget Corp',1,1);
INSERT IGNORE INTO `subjects` (`menu_name`, `position`, `visible`) VALUES ('Products',2,1);
INSERT IGNORE INTO `subjects` (`menu_name`, `position`, `visible`) VALUES ('Services',3,1);
INSERT IGNORE INTO `subjects` (`menu_name`, `position`, `visible`) VALUES ('Today\'s Widget Trivia',4,0);


-- Pages

INSERT IGNORE INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (1,'Our Mission',1,1,'Our mission has always been...');
INSERT IGNORE INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (1,'Our History',2,1,'Founded in 1898 by two enterprising engineers...\r\n\r\nMore recently...');
INSERT IGNORE INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (2,'Large Widgets',1,1,'Our large widgets have to be seen to be believed...');
INSERT IGNORE INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (2,'Small Widgets',2,1,'They say big things come in small packages...');
INSERT IGNORE INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (3,'Retrofitting',1,1,'We love to replace widgets...');
INSERT IGNORE INTO `pages` (`subject_id`, `menu_name`, `position`, `visible`, `content`) VALUES (3,'Certification',2,0,'We can certify any widget, not just our own...');

