CREATE DATABASE `galleryDB`;

CREATE TABLE `gallerys` 
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `title`   varchar(80) NOT NULL,
    `description`	 text NOT NULL, 
    `date` date NOT NULL,
    `image_url` VARCHAR(255), 
    PRIMARY KEY (`id`)
);

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('The Lobotomy', 'This is the first artpiece.', '2022-06-17', '/images/spooky4.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Part 8', 'This is the second artpiece.', '2023-01-10', '/images/jojo.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Lovers', 'This is the third artpiece.', '2023-07-12', '/images/circle.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Christmas Tree', 'This is the fourth artpiece.', '2023-11-21', '/images/tree.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Spiderman Perler', 'This is the fifth artpiece.', '2023-12-19', '/images/spiderman.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Squirrel & Rat', 'This is the sixth artpiece.', '2024-01-20', '/images/squirell.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Breakthrough', 'This is the seventh artpiece.', '2025-01-05', '/images/mangle2.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Valentine FNF', 'This is the eighth artpiece.', '2025-03-16', '/images/fnf.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Dream', 'This is the ninth artpiece.', '2025-03-28', '/images/dream.jpg');

INSERT INTO gallerys (title, description, date, image_url)
VALUES ('Orea', 'This is the tenth artpiece.', '2025-03-29', '/images/orea.jpg');
