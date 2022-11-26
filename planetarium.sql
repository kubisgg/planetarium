/* Usuwanie wczesniejszej bazy danych */
DROP DATABASE IF EXISTS `planetarium`;
CREATE DATABASE `planetarium` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


/* Tabela users */
CREATE TABLE `planetarium`.`users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp(),
  `institution` varchar(255) DEFAULT NULL
);

/* Testowe dane dla tabeli users */
INSERT INTO `planetarium`.`users` (login, email, password, institution) VALUES ("login", "asd@asd.asd", "pass", "inst");



/* Tabela quotes */
CREATE TABLE `planetarium`.`quotes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `content` varchar(255) NOT NULL,
  `author` varchar(128) NOT NULL
);

/* Testowe dlane dla tabeli quotes */
INSERT INTO `planetarium`.`quotes` (content, author) VALUES ("Głodująca armia jest gorsza, niż brak armii.", "Napoleon Bonaparte");
INSERT INTO `planetarium`.`quotes` (content, author) VALUES ("Ryszardowi całuski dałem, zemściłem się od rana, bo zemstę dopełniłem i na nim się zemściłem.", "Dawid Kamil Wójcik");
INSERT INTO `planetarium`.`quotes` (content, author) VALUES ("Boże, ty masz te CyberLinki YouCam, weź idź Pan!", "Bartosz Marek");
INSERT INTO `planetarium`.`quotes` (content, author) VALUES ("Idę dawać przykład uczniom.", "Autor Nieznany");


/* Tabela planets */
CREATE TABLE `planetarium`.`planets` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `distance` float DEFAULT NULL,
  `azimuth` float DEFAULT NULL,
  `file_path` varchar(255),
  `gallery_id` int(10) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
);



/* Tabela galleries */
CREATE TABLE `planetarium`.`galleries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(255) NOT NULL,
  `thumbnail_file_path` varchar(255) DEFAULT NULL
);
