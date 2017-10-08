-- phpMyAdmin SQL
-- version 4.5.1
-- https://www.phpmyadmin.net/
-- Server version: 10.1.16-MariaDB
-- User: root@localhost
-- Server charset: UTF-8 Unicode (utf8)
-- PHP-version: 5.6.24



/* CREATING ARTIST TABLE */

CREATE TABLE artist
(
    artist_id int NOT NULL AUTO_INCREMENT,
    artist_name varchar(50) NOT NULL,
    artist_country varchar(20) NULL,
    artist_music_style varchar(20) NULL,
    PRIMARY KEY (artist_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* INSERTING DATA INTO ARTIST TABLE */

INSERT INTO artist (artist_id, artist_name, artist_country, artist_music_style) VALUES
(1, 'Primus', 'USA', 'Rock'),
(2, 'Tina Dico', 'Denmark', 'Rock'),
(3, 'Mø', 'Denmark', 'Electropop'),
(4, 'Soulwax', 'Belgium', 'Rock-Electronic'),
(5, 'Veronica Maggio', 'Sweden', 'Soulpop'),
(6, 'Run the Jewels', 'USA', 'Hip-Hop'),
(7, 'Bastille', 'UK', 'Indiepop' ),
(8, 'Frank Ocean', 'USA', 'R&B'),
(9, 'Off Bloom', 'Denmark', 'Pop'),
(10, 'Cigarettes After Sex', 'USA', 'Pop');


/* CREATE STAGE TABLE */

CREATE TABLE stage
(
    stage_id int NOT NULL,
    stage_name varchar(50) NOT NULL,
    PRIMARY KEY (stage_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/* INSERTING DATA INTO STAGE TABLE */

INSERT INTO stage (stage_id, stage_name) VALUES
(1, 'Red Stage'),
(2, 'Green Stage'),
(3, 'Blue Stage');


/* CREATING STAGEARTIST TABLE */

CREATE TABLE performances 
(
    sta_id int NOT NULL AUTO_INCREMENT,
    artist_id int NOT NULL,
    stage_id int NOT NULL,
    sta_date DATETIME NOT NULL,
    PRIMARY KEY (sta_id),
    CONSTRAINT fk_artistid FOREIGN KEY (artist_id) REFERENCES artist(artist_id),
    CONSTRAINT fk_stageid FOREIGN KEY (stage_id) REFERENCES stage(stage_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/* INSERTING DATA INTO STAGEARTIST TABLE */

INSERT INTO performances (sta_id, artist_id, stage_id, sta_date) VALUES
(1, 1, 3, '2017-05-26 16:30:00'),
(2, 2, 3, '2017-05-26 19:00'),
(3, 3, 3, '2017-05-26 21:45'),
(4, 4, 3, '2017-05-27 01:00'),
(5, 5, 2, '2017-05-27 15:15'),
(6, 6, 2, '2017-05-27 17:45'),
(7, 7, 2, '2017-05-28 20:15'),
(8, 8, 2, '2017-05-28 23:15'),
(9, 9, 1, '2017-05-28 14:00'),
(10, 10, 1, '2017-05-28 16:30');

/* FIRST CREATE STAGE AND ARTIST TABLE, it's like child can't exist without a mother. STAGE and ARTIST are mother.*/
