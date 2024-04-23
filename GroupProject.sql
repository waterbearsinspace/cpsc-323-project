DROP DATABASE IF EXISTS GROUPPROJECT;

CREATE DATABASE GROUPPROJECT;

USE GROUPPROJECT;

CREATE TABLE PRODUCT (
Pname VARCHAR(255),              
Pdescription VARCHAR(255),
Price DECIMAL(10,2),
NumInStock INT,
SKU INT NOT NULL PRIMARY KEY    
);

CREATE TABLE CUSTOMER (
Cname VARCHAR(255),
Address VARCHAR(255),
Email VARCHAR(255),
CustomerID INT NOT NULL PRIMARY KEY
);

CREATE TABLE PURCHASEORDER (       
OrderDate DATE,
OrderNum INT NOT NULL PRIMARY KEY,
CustomerID INT,					 					
FOREIGN KEY (CustomerID) REFERENCES CUSTOMER(CustomerID)
);

CREATE TABLE ORDERDETAILS (
OrderNum INT,
SKU INT,
Quantity INT,					
Price DECIMAL(10,2),	-- is this the total price? or just the price of one product? 				
FOREIGN KEY (OrderNum) REFERENCES PURCHASEORDER(OrderNum),
FOREIGN KEY (SKU) REFERENCES PRODUCT(SKU)
);


 -- This procedure is for changing the quantity of an product
 -- pass in the product ID, and the quantity of items purchased 
 -- THIS DOES NOT CHECK IF THE CUSTOMER IS BUYING MORE THAN WHAT WE HAVE IN STOCK
DELIMITER \\ 
CREATE PROCEDURE UpdateQuantity (ProductID INT, QtyBought INT)
BEGIN
 
	UPDATE PRODUCT
    SET NumInStock = (NumInStock - QtyBought)
    WHERE SKU = ProductID;

    
END \\
	


INSERT INTO PRODUCT (Pname, Pdescription, Price, NumInStock, SKU) VALUES('Cards', 'A deck of 52 cards, rock themed.', 2.99, 10, 123456789);
INSERT INTO PRODUCT (Pname, Pdescription, Price, NumInStock, SKU) VALUES('Clue', 'The classic mystery game of whodunit! Up to 6 people.',10.99, 5, 987654321);
INSERT INTO PRODUCT (Pname, Pdescription, Price, NumInStock, SKU) VALUES('Chess & Checkers','Chess and Checkers set with glass board',14.99, 2,112233445);

INSERT INTO CUSTOMER (Cname, Address, Email, CustomerID) VALUES('John','731 Fondren, Houston,TX','jsmith@gmail.com',012345678);

INSERT INTO PURCHASEORDER (OrderDate, OrderNum, CustomerID) VALUES('2024-04-20',1,012345678);

INSERT INTO ORDERDETAILS (OrderNum,SKU,Quantity,Price) VALUES (1, 123456789, 2, 2.99);
INSERT INTO ORDERDETAILS (OrderNum,SKU,Quantity,Price) VALUES (1, 987654321, 1, 10.99);


SELECT *
FROM PRODUCT;

SELECT *
FROM ORDERDETAILS;





