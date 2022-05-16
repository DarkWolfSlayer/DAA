CREATE DATABASE `registration`;
USE `registration`;

CREATE TABLE `users` (
	`id` INT(100) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(100),
	`surname` VARCHAR(100),
	`password` VARCHAR(100),
	`email` VARCHAR(100),
	`avatar` VARCHAR(100),
	PRIMARY KEY (`id`)
);