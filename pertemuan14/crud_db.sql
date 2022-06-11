-- Database: crud_db

CREATE DATABASE IF NOT EXISTS crud_db;

USE crud_db;

CREATE TABLE IF NOT EXISTS users (
    id SERIAL,
    name varchar(255),
    email varchar(255),
    mobile_number varchar(15),
    PRIMARY KEY (id)
);

