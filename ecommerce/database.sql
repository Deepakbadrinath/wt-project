-- Create Database
CREATE DATABASE IF NOT EXISTS ecommerce;
USE ecommerce;

-- Products Table
CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  price DECIMAL(10,2),
  image VARCHAR(255)
);

-- Insert Products
INSERT INTO products (name, price, image) VALUES
('Laptop', 55000, 'laptop.jpg'),
('Headphones', 2500, 'headphones.jpg'),
('Smartphone', 20000, 'phone.jpg');

-- Users Table
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100) UNIQUE,
  password VARCHAR(255)
);

CREATE TABLE admin (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50),
  password VARCHAR(255)
);

INSERT INTO admin (username, password)
VALUES ('admin', md5('admin123'));
