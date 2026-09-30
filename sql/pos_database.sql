CREATE DATABASE IF NOT EXISTS pos_database;
USE pos_database;

DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS customers;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Maria Santos', 'maria.santos@example.com', '09171234567', '2026-09-01 09:00:00'),
('Juan Dela Cruz', 'juan.delacruz@example.com', '09181234567', '2026-09-02 10:15:00'),
('Angela Reyes', 'angela.reyes@example.com', '09191234567', '2026-09-03 11:30:00'),
('Carlo Mendoza', 'carlo.mendoza@example.com', '09201234567', '2026-09-04 13:45:00'),
('Sofia Garcia', 'sofia.garcia@example.com', '09211234567', '2026-09-05 15:00:00');

INSERT INTO users (username, full_name, created_at) VALUES
('admin01', 'John Einstein Sison', '2026-09-01 08:00:00'),
('cashier01', 'Beatrice Lim', '2026-09-01 08:30:00'),
('cashier02', 'Miguel Torres', '2026-09-02 09:00:00'),
('manager01', 'Patricia Cruz', '2026-09-03 09:30:00'),
('staff01', 'Daniel Flores', '2026-09-04 10:00:00');
