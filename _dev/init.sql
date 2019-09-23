CREATE DATABASE IF NOT EXISTS test_db;

USE test_db;

--
-- Tabellenstruktur für Tabelle `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `email` varchar(255) DEFAULT NULL,
    `password` varchar(255) DEFAULT NULL,
    `changeStamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `createStamp` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
    PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `users` (`id`, `email`, `password`, `changeStamp`, `createStamp`)
VALUES
(1, 'max@mustermann.local', '1a1dc91c907325c69271ddf0c944bc72', NOW(), NOW()),
(2, 'john@doo.local', '5ebe2294ecd0e0f08eab7690d2a6ee69', NOW(), NOW());
