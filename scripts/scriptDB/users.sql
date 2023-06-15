CREATE SCHEMA garage_VParrot;
CREATE TABLE garage_VParrot.users
(
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  email varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
)