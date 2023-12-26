CREATE DATABASE aws CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;

CREATE TABLE users(
    id_user int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    username varchar(50)
)
CREATE TABLE game(
    id_game int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    score int,
    id_user int,
    FOREIGN KEY (id_user) REFERENCES users(id_user)
)
CREATE TABLE theme(
    id_theme int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    theme varchar(250),
)
CREATE TABLE question(
    id_question int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    question varchar(250),
    id_theme int,
    FOREIGN KEY (id_theme) REFERENCES theme(id_theme)
)
CREATE TABLE answer(
    id_answer int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_question int,
    answer varchar(250),
    correction boolean,
    explication text
     FOREIGN KEY (id_question) REFERENCES question(id_question)
)
CREATE TABLE gameQuestion(
    id_gameQuestion int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_game int
    id_question int,
    user_answer boolean,
     FOREIGN KEY (id_question) REFERENCES question(id_question),
     FOREIGN KEY (id_game) REFERENCES game(id_game)
)




