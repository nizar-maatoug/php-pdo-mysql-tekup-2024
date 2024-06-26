CREATE DATABASE IF NOT EXISTS demo_authorization_db;
USE demo_authorization_db;


CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(60) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('USER', 'ADMIN') DEFAULT 'USER',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO users (username, password, role) VALUES ('admin', '$2y$10$YmZJUPCtlvfqmrn6xAZlZOgWjZPnKXmkhP/fBZVscpxTgQzJ2vwTu', 'ADMIN');
INSERT INTO users (username, password, role) VALUES ('user', '$2y$10$suUp8bAj5H6IA8EoUaiS4OEgGjO4AHQWb/ao7Ac//.NVmWICg/0Va', 'USER');

