CREATE TABLE garage_VParrot.occasion_cars
(
    Id int not null primary key auto_increment,
    marque VARCHAR(100) not null,
    prix Int not null,
    killométrage Int not null,
    année Int not null,
    premiere_main VARCHAR(100) not null,
    nbr_proprietaires Int not null,
    energie VARCHAR(100) not null,
    boite_vitesse VARCHAR(100) not null,
    couleur VARCHAR(100) not null,
    nbre_portes Int not null,
    nbre_places Int not null,
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


