drop database if exists km12;
Create database km12;
use km12;




create table empleado(
    id int auto_increment,
	nombreYApe varchar(255),
    cargo int,
    dni int(20),
    primary key(id)
);

create table camion(
    id int auto_increment,
    marca varchar(50),
    modelo varchar(50),
    id_Empleado int,
    primary key(id),
    foreign key(id_Empleado) references empleado(id)
        
);

create table mercaderia(
    id int auto_increment,
    id_Mercaderia int,
    cantidad int,
    id_Camion int,
    primary key(id),
    foreign key(id_Camion) references camion(id)
);


Create table contrasenas(
    pwd varchar(50),
    pwdDueno varchar(50),
    primary key(pwd)
);

create table estanteria(
    id int auto_increment,
    fila int,
    columna int,
    primary key(id)

);

create table pallet(
    id int auto_increment,
    ListProd varchar(255),
    fila int,
    columna int,
    fechaSa date,
    fechaLl date,
    estanteria int,
    primary key(id),
    foreign key(estanteria) references estanteria(id)
);

INSERT INTO empleado (nombreYApe, cargo, dni)
VALUES ('Juan Perez', 1, 12345678),
       ('Maria Gomez', 2, 23456789),
       ('Pedro Rodriguez', 1, 34567890);

INSERT INTO camion (marca, modelo, id_Empleado)
VALUES ('Ford', 'F150', 1),
       ('Chevrolet', 'Silverado', 2),
       ('Dodge', 'Ram', 3);


INSERT INTO contrasenas (pwd, pwdDueno)
VALUES ('eg001', 'dl001');

INSERT INTO estanteria (id, fila, columna)
VALUES (1, 3, 5),
       (2, 5, 6),
       (3, 5, 3);


INSERT INTO pallet (ListProd, fila, columna, fechaSa, fechaLl, estanteria)
VALUES ('Azucar', 1, 2, '2023-07-05', '2023-07-10', 1),
       ('Yerba Mate', 2, 3, '2023-07-06', '2023-07-11', 2),
       ('Papel Higienico', 3, 2, '2023-07-06', '2023-07-11', 3);

