-- This SQL file creates one database 'Shopping' which is used for this e-commerce platform.
-- We create two tables - 'users' and 'products'

-- Users table has three fields:
--      'username' - that acts as primary key for each user, i.e., no two users can have the same username
--      'email' - to store the email address of the user
--      'password' - to store the password of the user for their account

-- Products table has three fields:
--      'id' - that represents unique identifier for each of the products currently availbale in the e-commerce website
--      'name' - stores the name of the product
--      'price' - stores the price of the product

CREATE DATABASE `Shopping`;
USE `Shopping`;

DROP TABLE IF EXISTS `users`;

CREATE TABLE IF NOT EXISTS `users`(
	username VARCHAR(30) PRIMARY KEY,
    email VARCHAR(40) NOT NULL UNIQUE,
    password VARCHAR(40) NOT NULL
);


DROP TABLE IF EXISTS `products`;

CREATE TABLE IF NOT EXISTS `products`(
	id INT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price INT NOT NULL
);

INSERT INTO `products` VALUES(2, 'Mouse', 1590);
INSERT INTO `products` VALUES(3, 'Watch', 1299);
INSERT INTO `products` VALUES(4, 'Neckband', 1590);