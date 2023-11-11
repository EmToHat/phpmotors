-- Task: Writing SQL Statements for phpmotors site
-- Author: Emilee Hatch
-- Date: 09/30/2023


-- --------------------------------
-- 1 
-- Insert the following into a new client to the clients table.
-- Tony Stark
-- tony@starkent.com
-- Iam1ronM@n
-- "I am the real Ironman"

INSERT INTO clients (
    clientFirstName
    , clientLastName
    , clientEmail
    , clientPassword
    , comment)
VALUES (
    "Tony"
    , "Stark"
    , "tony@starkent.com"
    , "Iam1ronM@n"
    , "I am the real Ironman");


-- --------------------------------
-- 2
-- Modify the Tony Stark record to change the clientLevel to 3.

-- Select from the clients table
SELECT 
    clientId
    , clientFirstName
    , clientLastName
    , clientLevel
FROM
    clients

UPDATE 
    clients
SET 
    clientLevel = "3"
WHERE 
    clientFirstName = "Tony" 
AND 
    clientLastName = "Stark";


-- --------------------------------
-- 3
-- Modify the "GM Hummer" record to read "spacious interior" rather than "small interior" using a single query.
-- SQL Replace Function

UPDATE inventory
SET invDescription = REPLACE(invDescription, "small interior", "spacious interior");


-- --------------------------------
-- 4
-- Use an inner join to select the invModel field from the inventory table and the 
-- classificationName field from the carclassification table for inventory items that belong to the "SUV"
-- category. 

SELECT 
    cc.classificationId
    , cc.classificationName
    , i.invMake
    , i.invModel
FROM 
    inventory i
INNER JOIN 
    carclassification cc
ON 
    i.classificationId = cc.classificationId 
WHERE 
    cc.classificationName = 'SUV';


-- --------------------------------
-- 5
-- Delete the Jeep Wrangler from the database. 
-- You can restore the Inventory table by importing 
-- the SQL file that was used to create it again.

-- Find the SUV
SELECT 
    cc.classificationId
    , cc.classificationName
    , i.invMake
    , i.invModel 
FROM 
    inventory i
INNER JOIN 
    carclassification cc
ON 
    i.classificationId = cc.classificationId 
WHERE 
    cc.classificationName = 'SUV';

-- Find the Jeep
SELECT 
    invId
    , invMake
    , invModel
    , invDescription 
FROM 
    inventory 
WHERE 
    invMake = 'Jeep';

-- Delete the Jeep
DELETE FROM 
    inventory 
WHERE 
    invId = 1 AND invMake = 'Jeep';


-- --------------------------------
-- 6 
-- Update all the records in the Inventory table to add "/phpmotors" to 
-- the beginning of the file path in the invImage and invThumbnail columns
-- using a single query. 

-- Select from the inventory table
SELECT 
    invImage
    , invThumbnail 
FROM 
    inventory;

UPDATE 
    inventory 
SET 
    invImage = CONCAT('/phpmotors', invImage)
    , invThumbnail = CONCAT('/phpmotors', invThumbnail);

-- 7
-- Create a video of you running all of these SQL statements showing the result of running each
-- SQL statements.