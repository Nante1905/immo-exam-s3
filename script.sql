create Database Immobilier;

create table habitations (id Serial , Types int not null ,nombreDeChambre int not null , LoyerJr numeric(6,2),Quartier int not null );
Alter table habitations add primary key (id), add foreign key (Types) references Types , add foreign key (Quartier) references Quartier ;

insert into habitations values(DEFAULT,1,5,1200.00,3);
insert into habitations values(DEFAULT,1,4,1000.00,2);
insert into habitations values(DEFAULT,1,1,600.00,1);
insert into habitations values(DEFAULT,2,2,700.00,1);
insert into habitations values(DEFAULT,2,3,750.00,2);
insert into habitations values(DEFAULT,2,1,800.00,3);
insert into habitations values(DEFAULT,3,4,800.00,2);
insert into habitations values(DEFAULT,3,5,1600.00,3);

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
insert into photo values(DEFAULT,2,'maison2i3.jpg');
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

create table types (id SERIAL,nomType VARCHAR(30),primary key (id));
insert into types values(DEFAULT,'Maison');
insert into types values(DEFAULT,'Studio');
insert into types values(DEFAULT,'Appartement');

select * from habitations;

insert into habitations values (DEFAULT,1,2,3333.33,1);

update habitations set nomtable where id=1 ;

delete from habitations where id=1 ;


