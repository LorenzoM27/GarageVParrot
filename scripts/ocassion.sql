CREATE SCHEMA garage_VParrot;
CREATE TABLE garage_VParrot.occasion_cars
(
    Id int not null primary key auto_increment,
    ImageDuVehicule mediumblob not null,
    MarqueModèle VARCHAR(50) not null,
    Prix Int not null,
    Killométrage Int not null,
    Année Int not null,
    DescriptionDuVehicule VARCHAR(500) not null
)


