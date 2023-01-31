-- drop off and create database
DROP DATABASE IF EXISTS `assignment2`;
CREATE DATABASE `assignment2`;


-- create tables
USE `assignment2`;
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `email` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL , 
    `password` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , 
    `other` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL , PRIMARY KEY (`id`)) 
    ENGINE = InnoDB;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `img` VARCHAR(50) NOT NULL , 
    `description` VARCHAR(100) NOT NULL , 
    `price` DECIMAL(20) NOT NULL , 
    `brand` VARCHAR(30) NULL , PRIMARY KEY (`id`)) 
    ENGINE = InnoDB;


-- insert customer data
INSERT INTO `customer` (`id`, `email`, `password`, `other`) VALUES 
(NULL, 'abc@abc.abc', 'abc123', NULL), 
(NULL, 'aaa@bbb.ccc', 'a123456', NULL);


-- insert products data
INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai1.jpg', '4MP Starlight 4-In-1 80m IR Bullet Camera', '49.00', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai2.jpeg', '4MP IR Fixed-focal Eyeball Network Camera Black', '129.99', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai3.jpeg', '4MP Smart Dual Illumination Fixed-focal Eyeball Camera', '219.99', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai4.jpeg', '5MP IR Vari-focal Eyeball Network Camera', '259.99', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai5.jpeg', '5MP IR Vari-focal Dome Network Camera', '129.99', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai6.jpeg', '8MP 25x Starlight IR Network PTZ Camera', '169.99', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai7.jpeg', '4MP 24x Startlight IR PTZ Camema', '319.99','Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai8.jpeg', '5MP Smart Fixed-focal Eyeball Network Camera', '179.99', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/ai9.jpeg', '4MP THERMAL NETWORK MINI HYBRID BULLET CAMERA', '139.99', 'Aibase');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h1.jpg', '4MP Starlight 4-In-1 80m IR Bullet Camera', '79.00', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h2.jpeg', '4MP Starlight 3.6mm Eyeball Network Camera', '109.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h3.jpg', '5MP IR Network PTZ Eyeball Camera', '99.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h4.jpeg', '8MP IR Vari-focal Turret Network Camera', '299.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h5.jpeg', '4MP Outdoor TurboHD PTZ Camera', '139.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h6.jpg', '4MP 2.88mm IR Network Camera', '119.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h7.jpg', '4MP IR Fixed Turret Network Camema', '89.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h8.jpeg', '5MP Smart Fixed-focal Eyeball Network Camera', '179.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/h9.jpg', '5MP Fisheye Network Camera', '109.99', 'Hikvision');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e1.jpg', '4MP HDCVI & analog dual output Camera', '79.00', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e2.jpg', '5MP 2.8mm IR 30m Fixed Eyeball Network Camera', '169.99', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e3.jpg', '5MP IR 50m IP66 Built-in Mic Eyeball Camera', '299.99', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e4.jpg', '5MP 2.8-12mm Motorized IR 50m Camera', '229.99', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e5.jpg', '5MP 3.6mm Fixed Full Color Camera', '269.99', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e6.jpg', '4MP 2.88mm IR50 Network Camera', '99.99', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e7.jpg', '4K SMT 8PoE Network Video Record', '189.99', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e8.jpg', '4K 16CH 16 PoE Network Video Record', '179.99', 'Eyeonet');

INSERT INTO `products` (`img`, `description`, `price`,`brand`) 
VALUES ('./image/e9.jpg', '4K 8CH P2P Fisheye Network Video Record', '89.99', 'Eyeonet');



INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/con1.jpg', 'Connector 01', '1.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/con2.jpg', 'Connector 02', '1.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/con3.jpg', 'Connector 03', '0.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/con4.jpg', 'Connector 04', '2.99');

INSERT INTO `products` (`img`, `description`, `price`)
VALUES ('./image/con5.jpg', 'Connector 05', '0.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/con6.jpg', 'Connector 06', '1.99');



INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/b1.jpg', 'Bracket 01', '15.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/b2.jpg', 'Bracket 02', '13.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/b3.jpg', 'Bracket 03', '9.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/b4.jpg', 'Bracket 04', '12.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/b5.jpg', 'Bracket 05', '10.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/b6.jpg', 'Bracket 06', '10.99');



INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/m1.jpg', 'Cable management 01', '1.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/m2.jpg', 'Cable management 02', '0.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/m3.jpg', 'Cable management 03', '2.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/m4.jpg', 'Cable management 04', '1.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/m5.jpg', 'Cable management 05', '2.99');

INSERT INTO `products` (`img`, `description`, `price`) 
VALUES ('./image/m6.jpg', 'Cable management 06', '1.99');