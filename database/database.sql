DROP DATABASE IF EXISTS `Fidalgo`;

CREATE DATABASE `fidalgo`;

USE `fidalgo`;

-- Table for roles
CREATE TABLE Roles (
    `RoleId` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(255) NOT NULL
);

-- Table for users
CREATE TABLE Users (
    `UserId` INT AUTO_INCREMENT PRIMARY KEY,
    `RoleId` INT NOT NULL,
    `Username` VARCHAR(255) NOT NULL UNIQUE,
    `Password` VARCHAR(255) NOT NULL,
    `Email` VARCHAR(255) NOT NULL UNIQUE,
    FOREIGN KEY (RoleId) REFERENCES Roles(RoleId)
);

-- Table for categories
CREATE TABLE Categories (
    `CategoryId` INT AUTO_INCREMENT PRIMARY KEY,
    `Name` VARCHAR(255) NOT NULL
);

-- Table for products
CREATE TABLE Products (
    `ProductId` INT AUTO_INCREMENT PRIMARY KEY,
    `CategoryId` INT NOT NULL,
    `Name` VARCHAR(255) NOT NULL,
    `Description` VARCHAR(255) NOT NULL,
    `Price` INT NOT NULL,
    `ImageFileName` VARCHAR(255) NOT NULL, 
    FOREIGN KEY (CategoryId) REFERENCES Categories(CategoryId)
);

-- Table for orders
CREATE TABLE Orders (
    `OrderId` INT AUTO_INCREMENT PRIMARY KEY,
    `UserId` INT NOT NULL,
    `Status` VARCHAR(255) NOT NULL,
    `Total` INT NOT NULL,
    FOREIGN KEY (UserId) REFERENCES Users(UserId)
);

-- Table for order details
CREATE TABLE OrderDetails (
    `OrderDetailId` INT AUTO_INCREMENT PRIMARY KEY,
    `OrderId` INT NOT NULL,
    `ProductId` INT NOT NULL,
    `Quantity` INT NOT NULL,
    `Price` INT NOT NULL,
    FOREIGN KEY (OrderId) REFERENCES Orders(OrderId),
    FOREIGN KEY (ProductId) REFERENCES Products(ProductId)
);

-- Table for coupons
CREATE TABLE Coupons (
    `CouponId` INT AUTO_INCREMENT PRIMARY KEY,
    `Code` VARCHAR(255) NOT NULL UNIQUE,
    `Discount` INT NOT NULL,
    `Expires` TIMESTAMP
);

-- Table for wishlist
CREATE TABLE Wishlist (
    `WishlistId` INT AUTO_INCREMENT PRIMARY KEY,
    `UserId` INT NOT NULL,
    `ProductId` INT NOT NULL,
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    FOREIGN KEY (ProductId) REFERENCES Products(ProductId)
);

-- Table for cart
CREATE TABLE Cart (
    `CartId` INT AUTO_INCREMENT PRIMARY KEY,
    `UserId` INT,
    `ProductId` INT,
    `Quantity` INT NOT NULL,
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    FOREIGN KEY (ProductId) REFERENCES Products(ProductId)
);

-- Table for feedbacks
CREATE TABLE Feedbacks (
    `FeedbackId` INT AUTO_INCREMENT PRIMARY KEY,
    `UserId` INT NOT NULL,
    `ProductId` INT NOT NULL,
    `Rating` INT NOT NULL,
    `Comment` VARCHAR(255),
    FOREIGN KEY (UserId) REFERENCES Users(UserId),
    FOREIGN KEY (ProductId) REFERENCES Products(ProductId)
);
