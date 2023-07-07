CREATE TABLE garage_VParrot.occasion_cars
(
    id int not null primary key auto_increment,
    brand VARCHAR(100) not null,
    price Int not null,
    km Int not null,
    year Int not null,
    first_hand VARCHAR(100) not null,
    owners Int not null,
    energy VARCHAR(100) not null,
    gearbox VARCHAR(100) not null,
    color VARCHAR(100) not null,
    doors Int not null,
    seats Int not null,
    puissance_fiscale Int not null,
    puissance_chevaux Int not null,
    crit_air Int not null,
    consommation Int not null,
    description VARCHAR(500) not null,
    image1 mediumblob not null,
    image2 mediumblob not null,
    image3 mediumblob not null,
    image4 mediumblob not null,
    image5 mediumblob not null
)


