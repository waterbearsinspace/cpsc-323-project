DROP DATABASE IF EXISTS GROUPPROJECT;

CREATE DATABASE GROUPPROJECT;

USE GROUPPROJECT;

CREATE TABLE PRODUCT (
Pname VARCHAR(255),              -- Name is a reserved word
Pdescription VARCHAR(255),
Price DECIMAL,
NumInStock INT,
SKU INT NOT NULL PRIMARY KEY    -- Why is this named SKU and not ProductID?? 
);

CREATE TABLE CUSTOMER (
Cname VARCHAR(255),
Address VARCHAR(255),
Email VARCHAR(255),
CustomerID INT NOT NULL PRIMARY KEY
);

CREATE TABLE EMPLOYEE (
Fname VARCHAR(255),				   -- Broke Name apart into Fname and Lname because Name is a reserved word
Lname VARCHAR(255),
Sex CHAR(1),                       -- Added another attribute 
StoreNum INT,
EmployeeID INT NOT NULL PRIMARY KEY
);

CREATE TABLE PURCHASEORDER (       -- Renamed to PurchaseOrder because Order is a reserved word
OrderDate DATE,
OrderNum INT NOT NULL PRIMARY KEY,
CustomerID INT,					 
EmployeeID INT,					
FOREIGN KEY (CustomerID) REFERENCES CUSTOMER(CustomerID),
FOREIGN KEY (EmployeeID) REFERENCES EMPLOYEE(EmployeeID)
);

CREATE TABLE ORDERDETAILS (
OrderNum INT,
SKU INT,
Quantity INT,					
Price DECIMAL,					
FOREIGN KEY (OrderNum) REFERENCES PURCHASEORDER(OrderNum),
FOREIGN KEY (SKU) REFERENCES PRODUCT(SKU)
);
