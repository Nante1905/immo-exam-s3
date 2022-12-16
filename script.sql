CREATE DATABASE IMMOBILIER;

create table habitations (id Serial , Types int not null ,nombreDeChambre int not null , LoyerJr numeric(6,2),Quartier int not null ,descri VARCHAR(250));
Alter table habitations add primary key (id), add foreign key (Types) references Types , add foreign key (Quartier) references Quartier ;
insert into habitations values(DEFAULT,1,5,500.00,3,'Maison luxueuse ,paisible et tranquille ,très spacieux');
insert into habitations values(DEFAULT,1,4,450.00,2,'Maison au bord du lac avec vue splandide,parfaite pour les noces');
insert into habitations values(DEFAULT,1,1,210.00,1,'Petite maison confortable pour famille');
insert into habitations values(DEFAULT,2,2,340.99,1,'Eloignée du monde ,trés Artistique,ambiance "Chill"');
insert into habitations values(DEFAULT,2,3,420.10,2,'Studio de photographie,tres bonne eclairage et spacieux');
insert into habitations values(DEFAULT,2,1,250.00,3,'Studio de musique ,enregistrement et repetition avec style');
insert into habitations values(DEFAULT,3,4,200.00,2,'Parfait pour se satisfaire vos petit caprice');
insert into habitations values(DEFAULT,3,5,110.00,3,'Tranquille, et bien faite pour étudiant');

create table quartier (id SERIAL,nomquart VARCHAR(50), primary key (id));
insert into quartier values(DEFAULT,'Andoharanofotsy');
insert into quartier values(DEFAULT,'Itaosy Unis');
insert into quartier values(DEFAULT,'Analakely');

create table photo (id SERIAL,idHab int not null ,namefile VARCHAR(30),primary key (id),foreign key (idHab) references habitations );
insert into photo values(DEFAULT,1,'maison1e.jpg');
insert into photo values(DEFAULT,2,'maison2e.jpg');
insert into photo values(DEFAULT,3,'maison3e.jpg');
insert into photo values(DEFAULT,7,'appart1e.jpg');
insert into photo values(DEFAULT,8,'appart2e.jpg');
insert into photo values(DEFAULT,4,'studio1e.jpg');
insert into photo values(DEFAULT,5,'studio2i.jpg');
insert into photo values(DEFAULT,1,'maison1i.jpg');
insert into photo values(DEFAULT,1,'maison1i2.jpg');
insert into photo values(DEFAULT,2,'maison2i.jpg');
insert into photo values(DEFAULT,2,'maison2i2.jpg');
insert into photo values(DEFAULT,2,'maison2i3.jpg');
insert into photo values(DEFAULT,2,'maison3i.jpg');
insert into photo values(DEFAULT,3,'maison3i2.jpg');
insert into photo values(DEFAULT,7,'appart1i.jpg');
insert into photo values(DEFAULT,7,'appart1i2.jpg');
insert into photo values(DEFAULT,8,'appart2i.jpg');
insert into photo values(DEFAULT,8,'appart2i2.jpg');
insert into photo values(DEFAULT,8,'appart2i3.jpg');
insert into photo values(DEFAULT,4,'studio1i.jpg');
insert into photo values(DEFAULT,4,'studio1i2.jpg');
insert into photo values(DEFAULT,4,'studio1i3.jpg');
insert into photo values(DEFAULT,5,'studio2i2.jpg');
insert into photo values(DEFAULT,5,'studio2i3.jpg');
insert into photo values(DEFAULT,6,'studio3i.jpg');
insert into photo values(DEFAULT,6,'studio3i2.jpg');
insert into photo values(DEFAULT,6,'studio3i3.jpg');

create table utilisateur(id SERIAL ,prenom VARCHAR(30),status VARCHAR(20), primary key (id));

insert into utilisateur values (DEFAULT,'Jean','admin');
insert into utilisateur values (DEFAULT, 'Andrew','client');
insert into utilisateur values (DEFAULT, 'Tom','client');
insert into utilisateur values (DEFAULT, 'Toby','client');

create table reservation (id SERIAL ,idClient int not null, idHab int not null,datereservation timestamp,primary key (id),foreign key (idClient) references utilisateur);
insert into reservation values (DEFAULT,2,7,'2022-08-10 17:29:00');
insert into reservation values (DEFAULT,3,2,'2022-08-22 18:13:00');
insert into reservation values (DEFAULT,3,2,'2022-08-23 10:28:10');
insert into reservation values (DEFAULT,1,4,'2022-09-02 07:46:12');
insert into reservation values (DEFAULT,2,3,'2022-09-07 14:41:30');
insert into reservation values (DEFAULT,2,3,'2022-12-15 08:15:16');
insert into reservation values (DEFAULT,3,5,'2022-12-16 23:52:00');
insert into reservation values (DEFAULT,3,1,'2022-10-07 14:20:10');
insert into reservation values (DEFAULT,3,1,'2022-10-08 07:31:56');
insert into reservation values (DEFAULT,1,8,'2022-10-10 15:49:38');
insert into reservation values (DEFAULT,1,4,'2022-10-23 20:23:10');
insert into reservation values (DEFAULT,2,6,'2022-11-22 13:25:10');
insert into reservation values (DEFAULT,2,6,'2022-11-23 11:19:45');
insert into reservation values (DEFAULT,1,7,'2022-12-16 19:27:59');

select * from habitations;

insert into habitations values (DEFAULT,1,2,3333.33,1);

update habitations set nomtable where id=1 ;

delete from habitations where id=1 ;

-- disponibilité
create or replace view dispo as select * from habitations where id not in (select idHab from reservation where extract(day from datereservation)=16 and extract(month from datereservation)=12 and extract(year from datereservation=)2022);

select * from habitations where types=1;
create table users (
    idusers serial,
    email varchar(100),
    nom varchar(100),
    mdp varchar(250),
    tel varchar(30)
CREATE TABLE TYPES (
    IDTYPES SERIAL,
    NOMTYPE VARCHAR(30),
    PRIMARY KEY (idtypes)
);

INSERT INTO TYPES VALUES(
    DEFAULT,
    'Maison'
);

<<<<<<< HEAD
select count(*) from users where email='' and mdp=''


select * from habitation where idHabitation=1;
=======
INSERT INTO TYPES VALUES(
    DEFAULT,
    'Studio'
);

INSERT INTO TYPES VALUES(
    DEFAULT,
    'Appartement'
);

CREATE TABLE QUARTIER (
    IDQUARTIER SERIAL,
    NOMQUART VARCHAR(50),
    PRIMARY KEY (IDQUARTIER)
);

INSERT INTO QUARTIER VALUES(
    DEFAULT,
    'Andoharanofotsy'
);

INSERT INTO QUARTIER VALUES(
    DEFAULT,
    'Itaosy Unis'
);

INSERT INTO QUARTIER VALUES(
    DEFAULT,
    'Analakely'
);

CREATE TABLE HABITATIONS (
    IDHABITATIONS SERIAL,
    TYPES INT NOT NULL,
    NOMBREDECHAMBRE INT NOT NULL,
    LOYER NUMERIC,
    QUARTIER INT NOT NULL,
    DESCRI VARCHAR(250)
);

ALTER TABLE HABITATIONS ADD PRIMARY KEY (IDHABITATIONS), ADD FOREIGN KEY (TYPES) REFERENCES TYPES(IDTYPES), ADD FOREIGN KEY (QUARTIER) REFERENCES QUARTIER(IDQUARTIER);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    1,
    5,
    500.00,
    3,
    'Maison luxueuse ,paisible et tranquille ,très spacieux'
);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    1,
    4,
    450.00,
    2,
    'Maison au bord du lac avec vue splandide,parfaite pour les noces'
);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    1,
    1,
    210.00,
    1,
    'Petite maison confortable pour famille'
);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    2,
    2,
    340.99,
    1,
    'Eloignée du monde ,trés Artistique,ambiance "Chill"'
);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    2,
    3,
    420.10,
    2,
    'Studio de photographie,tres bonne eclairage et spacieux'
);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    2,
    1,
    250.00,
    3,
    'Studio de musique ,enregistrement et repetition avec style'
);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    3,
    4,
    200.00,
    2,
    'Parfait pour se satisfaire vos petit caprice'
);

INSERT INTO HABITATIONS VALUES(
    DEFAULT,
    3,
    5,
    110.00,
    3,
    'Tranquille, et bien faite pour étudiant'
);

CREATE TABLE PHOTO (
    IDPHOTO SERIAL,
    IDHABITATIONS INT NOT NULL,
    NAMEFILE VARCHAR(30),
    PRIMARY KEY (IDPHOTO),
    FOREIGN KEY (IDHABITATIONS) REFERENCES HABITATIONS(IDHABITATIONS)
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    1,
    'maison1e.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    2,
    'maison2e.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    3,
    'maison3e.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    7,
    'appart1e.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    8,
    'appart2e.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    4,
    'studio1e.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    5,
    'studio2i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    1,
    'maison1i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    1,
    'maison1i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    2,
    'maison2i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    2,
    'maison2i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    2,
    'maison2i3.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    2,
    'maison3i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    3,
    'maison3i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    7,
    'appart1i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    7,
    'appart1i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    8,
    'appart2i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    8,
    'appart2i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    8,
    'appart2i3.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    4,
    'studio1i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    4,
    'studio1i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    4,
    'studio1i3.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    5,
    'studio2i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    5,
    'studio2i3.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    6,
    'studio3i.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    6,
    'studio3i2.jpg'
);

INSERT INTO PHOTO VALUES(
    DEFAULT,
    6,
    'studio3i3.jpg'
);

CREATE TABLE USERS (
    IDUSERS SERIAL,
    EMAIL VARCHAR(100),
    NOM VARCHAR(100),
    MDP VARCHAR(250),
    TEL VARCHAR(30),
    PRIMARY key(idusers)
);

INSERT INTO USERS VALUES (
    DEFAULT,
    'jeanba@immo.com',
    'Jean Ba',
    'jeanba',
    '+261340000001'
),
(
    DEFAULT,
    'jeanmark@immo.com',
    'Jean Mark',
    'jeanmark',
    '+261340000002'
),
(
    DEFAULT,
    'louise@immo.com',
    'Louise',
    'louise',
    '+261340000003'
),
(
    DEFAULT,
    'carole@immo.com',
    'Carole Griffin',
    'carole',
    '+261340000004'
);

CREATE TABLE RESERVATION (
    IDRESERVATION SERIAL,
    IDCLIENT INT NOT NULL,
    IDHAB INT NOT NULL,
    DATERESERVATION TIMESTAMP,
    PRIMARY KEY (IDRESERVATION),
    FOREIGN KEY (IDCLIENT) REFERENCES USERS(IDUSERS)
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    2,
    7,
    '2022-08-10 17:29:00'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    3,
    2,
    '2022-08-22 18:13:00'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    3,
    2,
    '2022-08-23 10:28:10'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    1,
    4,
    '2022-09-02 07:46:12'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    2,
    3,
    '2022-09-07 14:41:30'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    2,
    3,
    '2022-12-15 08:15:16'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    3,
    5,
    '2022-12-16 23:52:00'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    3,
    1,
    '2022-10-07 14:20:10'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    3,
    1,
    '2022-10-08 07:31:56'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    1,
    8,
    '2022-10-10 15:49:38'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    1,
    4,
    '2022-10-23 20:23:10'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    2,
    6,
    '2022-11-22 13:25:10'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    2,
    6,
    '2022-11-23 11:19:45'
);

INSERT INTO RESERVATION VALUES (
    DEFAULT,
    1,
    7,
    '2022-12-16 19:27:59'
);

SELECT
    *
FROM
    HABITATIONS;

INSERT INTO HABITATIONS VALUES (
    DEFAULT,
    1,
    2,
    3333.33,
    1
);

UPDATE HABITATIONS
SET
    NOMTABLE
WHERE
    ID=1;

DELETE FROM HABITATIONS
WHERE
    ID=1;

-- disponibilité
CREATE OR REPLACE VIEW DISPO AS
    SELECT
        *
    FROM
        HABITATIONS
    WHERE
        ID NOT IN (
            SELECT
                IDHAB
            FROM
                RESERVATION
            WHERE
                EXTRACT(DAY FROM DATERESERVATION)=16
                AND EXTRACT(MONTH FROM DATERESERVATION)=12
                AND EXTRACT(YEAR FROM DATERESERVATION=)2022
        );

SELECT
    *
FROM
    HABITATIONS
WHERE
    TYPES=1;

SELECT
    COUNT(*)
FROM
    USERS
WHERE
    EMAIL=''
    AND MDP=''
>>>>>>> dev
