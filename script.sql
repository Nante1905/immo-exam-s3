create table users (
    idusers serial,
    email varchar(100),
    nom varchar(100),
    mdp varchar(250),
    tel varchar(30)
);

insert into users values
(default, 'jeanba@immo.com', 'Jean Ba', 'jeanba', '+261340000001'),
(default, 'jeanmark@immo.com', 'Jean Mark', 'jeanmark', '+261340000002'),
(default, 'louise@immo.com', 'Louise', 'louise', '+261340000003'),
(default, 'carole@immo.com', 'Carole Griffin', 'carole', '+261340000004');

select count(*) from users where email='' and mdp=''