CREATE TABLE garage_VParrot.occasion_cars
(
    Id int not null primary key auto_increment,
    image mediumblob not null,
    marque VARCHAR(50) not null,
    prix Int not null,
    killométrage Int not null,
    année Int not null,
    description VARCHAR(500) not null
)


