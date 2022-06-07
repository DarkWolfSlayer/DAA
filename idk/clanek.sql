CREATE TABLE `clanok` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `nazov_clanku` VARCHAR(50) NOT NULL,
    `autor` VARCHAR(30) NOT NULL,
    `text` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `nazov_clanku` (`nazov_clanku`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;