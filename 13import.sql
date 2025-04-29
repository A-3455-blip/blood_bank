-- Create database
CREATE DATABASE IF NOT EXISTS bloodbank;
USE bloodbank;

-- Donor Table
CREATE TABLE donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    blood_group VARCHAR(10),
    city VARCHAR(50),
    phone VARCHAR(15)
);

-- Blood Request Table
CREATE TABLE blood_requests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_name VARCHAR(100),
    blood_group VARCHAR(10),
    hospital VARCHAR(100),
    contact VARCHAR(15)
);