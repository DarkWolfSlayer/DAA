CREATE TABLE `users` (
	`User_ID` INT(11) NOT NULL AUTO_INCREMENT,
	`Email` VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
	`Meno` VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
	`Priezvisko` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_general_ci',
	`Datum_registracie` TIMESTAMP NOT NULL DEFAULT current_timestamp(),
	`Heslo` VARCHAR(255) NOT NULL COLLATE 'utf8_unicode_ci',
	PRIMARY KEY (`User_ID`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=7
;