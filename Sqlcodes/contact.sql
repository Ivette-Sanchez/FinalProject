CREATE DATABASE `contactsDB`;

CREATE TABLE contacts 
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `name`   varchar(80) NOT NULL,
    `message` text NOT NULL, 
    `email`	 text NOT NULL, 
    PRIMARY KEY (`id`)
);x

INSERT INTO contacts (name, message, )
VALUES ('Testing Contact', 'Test@gmail.com', 'This is a test for the contacts');
