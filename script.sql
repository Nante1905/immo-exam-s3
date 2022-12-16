create Database Immobilier;

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
insert into quartier values(DEFAULT,'Commerciaux');
insert into quartier values(DEFAULT,'Centre ville');
insert into quartier values(DEFAULT,'Affaire');

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


create table types (id SERIAL,nomType VARCHAR(30),primary key (id));
insert into types values(DEFAULT,'Maison');
insert into types values(DEFAULT,'Studio');
insert into types values(DEFAULT,'Appartement');

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

create or replace view dispo as select * from habitations where id not in (select idHab from reservation where extract(day from datereservation)=16 and extract(month from datereservation)=12 and extract(year from datereservation=)2022);

select * from habitations where types=1;
