create table pais(
nombre varchar(20) primary key,
descripcion varchar(150)
)

﻿create table usuario(
id serial primary key,
nombre varchar(50),
nickname varchar(15),
password varchar (50),
cargo varchar(10)
);
