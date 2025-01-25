create database web-register;

-- Tabla Admin
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_name VARCHAR(40) NOT NULL,
    admin_email VARCHAR(60) NOT NULL,
    admin_password VARCHAR(255) NOT NULL,
    admin_create_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    admin_update_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Tabla Attack
CREATE TABLE attack (
    id INT AUTO_INCREMENT PRIMARY KEY,
    attack_country VARCHAR(35),
    attack_date_incident DATE,
    attack_announcement_date DATE,
    attack_type VARCHAR(20) NOT NULL,
    attack_author VARCHAR(35),
    attack_victim TEXT,
    attack_data_leak BOOLEAN,
    attack_report TEXT,
    attack_status_report ENUM('for sale', 'not available'),
    attack_file_involved TEXT,
    attack_admin_id INT, -- Clave foránea al admin que aprobó el ataque
    attack_create_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    attack_update_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_attack_admin FOREIGN KEY (attack_admin_id) REFERENCES admin(id)
);

-- Tabla Scraping
CREATE TABLE scraping (
    id INT AUTO_INCREMENT PRIMARY KEY,
    scraping_country VARCHAR(35),
    scraping_type VARCHAR(20) NOT NULL,
    scraping_fount TEXT NOT NULL,
    scraping_status_report ENUM('refused', 'earring', 'approved'),
    scraping_admin_id INT, -- Clave foránea al admin que gestionó el caso
    scraping_create_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    scraping_update_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_scraping_admin FOREIGN KEY (scraping_admin_id) REFERENCES admin(id)
);


CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    news_title VARCHAR (65) NOT NULL,
    news_admin_id INT,
    news_content TEXT NOT NULL,
    news_create_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    news_update_in TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT fk_news_admin FOREIGN KEY (news_admin_id) REFERENCES admin(id)
);

