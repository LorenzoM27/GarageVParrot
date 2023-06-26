CREATE TABLE garage_VParrot.services
(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    services VARCHAR(100) not null,
    description VARCHAR(500) not null,
    image mediumblob not null
)