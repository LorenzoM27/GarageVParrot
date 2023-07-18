CREATE TABLE garage_VParrot.reviews
(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    score VARCHAR(100) not null,
    display VARCHAR(5) DEFAULT 'non',
    message VARCHAR(1000) not null
    
)