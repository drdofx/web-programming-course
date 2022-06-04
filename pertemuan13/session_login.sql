CREATE DATABASE IF NOT EXISTS session_login;

USE session_login;

-- Table structure for table `users`
CREATE TABLE IF NOT EXISTS users (
    id SERIAL,
    username varchar(255) not null,
    password varchar(255) not null,
    is_admin boolean not null default false,
    PRIMARY KEY (id)
);

-- Create dummy admin user
INSERT INTO users (username, password, is_admin) VALUES ('admin', 'admin', true);

-- Create dummy user
INSERT INTO users (username, password) VALUES 
('andi', 'andi'),
('budi', 'budi'),
('caca', 'caca');