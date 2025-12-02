-- HR MANAGEMENT SYSTEM DATABASE

-- Create Database
CREATE DATABASE IF NOT EXISTS hrms_db;
USE hrms_db;

-- User Table (Admin + HR Officers)
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'hr') NOT NULL DEFAULT 'hr',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Employee Table
CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20),
    position VARCHAR(100),
    salary DECIMAL(10, 2) DEFAULT 0,
    hire_date DATE,
    status ENUM('active', 'resigned') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Attendance Table
CREATE TABLE attendance (
    id INT  AUTO_INCREMENT PRIMARY KEY,
    employee_id INT NOT NULL,
    date DATE NOT NULL,
    time_in TIME DEFAULT NULL,
    time_out TIME DEFAULT NULL,
    FOREIGN KEY (employee_id) REFERENCES employees(id) ON DELETE CASCADE
);