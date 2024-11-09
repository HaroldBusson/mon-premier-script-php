CREATE DATABASE IF NOT EXISTS ECOMMERCE;
USE ECOMMERCE;

CREATE TABLE Customer (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
firstname VARCHAR (100) NOT NULL,
familyname VARCHAR (100) NOT NULL
);

CREATE TABLE IF NOT EXISTS `Order` (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
`date` DATETIME NOT NULL,
`status` ENUM('Created', 'check', 'ship') NOT NULL, -- ENUM est plus explicite et plus facile à gérer pour des opérations de lecture et d'écriture.
idCustomer INT NOT NULL,
FOREIGN KEY (idCustomer) REFERENCES Customer (id),
total DECIMAL (10,2) NOT NULL -- Décimal arrondi le nombre
);

CREATE TABLE IF NOT EXISTS Product (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
`name` VARCHAR (100) NOT NULL,
price DECIMAL (10, 2) NOT NULL
);

CREATE TABLE IF NOT EXISTS Order_Product (
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
id_order INT NOT NULL,
id_product INT NOT NULL,
id_customer INT NOT NULL,
FOREIGN KEY (id_order) REFERENCES `Order` (id), -- `` pour ne pas SQL ne confonde avec une fonction
FOREIGN KEY (id_product) REFERENCES Product (id),
FOREIGN KEY (id_customer) REFERENCES Customer (id),
quantity INT NOT NULL CHECK (quantity > 0 ) -- Pour garantir que la quantité soit pas négative
);

