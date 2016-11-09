create table cargo(
id_cargo serial primary key,
nombre varchar(15),
intensidad varchar(10),
salario double precision,
descripcion varchar(150)
);

create table pais(
id_pais serial primary key,
nombre varchar(20),
descripcion varchar(150)
);

create table departamento(
id_departamento serial primary key,
nombre varchar(20),
descripcion varchar(150),
id_pais int,
foreign key(id_pais) references pais(id_pais)
);

create table municipio(
id_municipio serial primary key,
nombre varchar(20),
descripcion varchar(150),
id_departamento int,
foreign key(id_departamento) references departamento(id_departamento)
);

create table juntadirectiva(
nombre varchar(20),
apellido varchar(20),
cedula varchar(10) primary key,
telefono varchar(10),
fechadenacimiento date,
id_municipio int,
foreign key(id_municipio) references municipio(id_municipio)
); 

create table banco(
nombre varchar(20) primary key,
nit varchar(20),
mision varchar(2000),
vision varchar(2000),
direccion varchar(30)
);

create table sucursal(
id_sucursal serial primary key,
nombre varchar(20),
descripcion varchar(150),
id_municipio int,
id_banco int,
foreign key(id_municipio) references municipio(id_municipio),
foreign key(id_banco) references banco(id_banco)
);

create table empleado(
id_empleado serial primary key,
cedula varchar(10),
nombre varchar(20),
edad varchar(3),
descripcion varchar(200),
cargo varchar(15),
idsucursal int,
foreign key(cargo) references cargo(nombre),
foreign key(id_sucursal) references sucursal(id_sucursal)
);

﻿create table usuario(
id_usuario serial primary key,
nombre varchar(50),
nickname varchar(15),
password varchar (50),
cargo varchar(10)
);
