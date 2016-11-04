create table cargo(
nombre varchar(15) primary key,
intensidad varchar(10),
salario double precision,
descripcion varchar(150)
);

create table pais(
nombre varchar(20) primary key,
descripcion varchar(150)
);

create table departamento(
nombre varchar(20) primary key,
descripcion varchar(150),
pais varchar(20),
foreign key(pais) references pais(nombre)
);

create table municipio(
nombre varchar(20) primary key,
descripcion varchar(150),
departamento varchar(20),
foreign key(departamento) references departamento(nombre)
);

create table juntadirectiva(
nombre varchar(20),
apellido varchar(20),
cedula varchar(10) primary key,
telefono varchar(10),
fechadenacimiento date,
municipio varchar(20),
foreign key(municipio) references municipio(nombre)
); 

create table banco(
nombre varchar(20) primary key,
nit varchar(20),
mision varchar(2000),
vision varchar(2000),
direccion varchar(30)
);

create table sucursal(
idsucursal serial primary key,
nombre varchar(20),
descripcion varchar(150),
municipio varchar(20),
banco varchar(20),
foreign key(municipio) references municipio(nombre),
foreign key(banco) references banco(nombre)
);

create table empleado(
idempleado serial primary key,
cedula varchar(10),
nombre varchar(20),
edad varchar(3),
descripcion varchar(200),
cargo varchar(15),
idsucursal integer,
foreign key(cargo) references cargo(nombre),
foreign key(idsucursal) references sucursal(idsucursal)
);

﻿create table usuario(
id serial primary key,
nombre varchar(50),
nickname varchar(15),
password varchar (50),
cargo varchar(10)
);
