CREATE DATABASE IF NOT EXISTS tsa1_2_guansing
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_general_ci;

USE tsa1_2_guansing;

DROP TABLE IF EXISTS tasks;
DROP TABLE IF EXISTS users;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Configure the staging development server', 'completed', '2026-10-05', '2026-10-04 09:10:00'),
('Review priority client support tickets', 'pending', '2026-10-06', '2026-10-05 08:30:00'),
('Deploy the company website update', 'completed', '2026-10-06', '2026-10-05 10:15:00'),
('Check application and firewall logs', 'pending', '2026-10-06', '2026-10-05 14:40:00'),
('Test the overnight backup recovery process', 'pending', '2026-10-07', '2026-10-06 08:20:00'),
('Update network maintenance documentation', 'pending', '2026-10-07', '2026-10-06 09:35:00'),
('Meet with the client about portal requirements', 'pending', '2026-10-08', '2026-10-06 11:00:00'),
('Review branch office network status', 'completed', '2026-10-08', '2026-10-06 13:25:00');

INSERT INTO users (username, full_name, email, created_at) VALUES
('hurris.guansing', 'Hurris Guansing', 'hurris.guansing@gmail.com', '2026-10-06 08:00:00');
