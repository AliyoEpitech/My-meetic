DROP DATABASE IF EXISTS cinema;
CREATE DATABASE meetic;

USE meetic;

DROP TABLE IF EXISTS user; 

CREATE TABLE user (
    id            INT          NOT NULL AUTO_INCREMENT,
    firstname     VARCHAR(50),
    lastname      VARCHAR(50),
    birthdate     INT,
    email         VARCHAR(255),
    city          VARCHAR(255)
    );

INSERT INTO user 
       (email, firstname, lastname, city, birthdate)
VALUES ('randy.black@ore.com', 'Randy', 'Black', 'Lyon', '2000-04-10'),
       ('jeffrey.wheeler@ota.com', 'Jeffrey', 'Wheeler', 'Paris', '1998-12-14'),
       ('bill.garza@mom.eu', 'Bill', 'Garza', 'London', '2006-02-10')

