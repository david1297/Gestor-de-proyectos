create database Gestor_Proyectos;
USE Gestor_Proyectos;

CREATE TABLE Roles (
Numero int primary key,
Tipo Varchar(80)
);

insert into Roles(Numero,Tipo) Values (1,'Administrador');


CREATE TABLE Permisos (
Numero int primary key,
Tipo int,
Modulo Varchar(80),
Permiso Varchar(80),
FOREIGN KEY (Tipo) references Roles(Numero)
);
Insert into Permisos values (1,1,'Nuevo Proyecto','Aceptado');


create table Usuarios (
Usuario Varchar(80) primary key,
Correo Varchar(80),
Rol int,
Clave varchar(255) COLLATE utf8_unicode_ci NOT NULL,
Nombre Varchar(80),
Apellido Varchar(80),
Genero Varchar(80),
Direccion Varchar(80),
Telefono Varchar(80),
Imagen Varchar(255),
FOREIGN KEY (Rol) references Roles(Numero)
);
select Usuario,Correo,Clave,nombre,Apellido,Genero,Direccion,Telefono,Imagen,Tipo from Usuarios
inner join Roles on Usuarios.Rol =Roles.Numero;

insert into Usuarios values ('Admin','juandavid.andrade1997@gmail.com',1,'$2y$10$fqKpbmA1EccJdQTLaIp74ed0o1eLrcMfRvQ3PVvXYyolZBkenR2qW','Juan David','Andrade','Masculino','Calle 23 # 49a-16','3106949631','');

CREATE TABLE Terceros(
Nit Varchar(80) primary key,
Nombre Varchar(255),
Direccion Varchar(80),
Ciudad Varchar(80),
Departamento Varchar(80),
Pais Varchar(80),
Telefono Varchar(80),
Ext Varchar(80),
Vendedor int,
Cv int,
Correo Varchar(80)
);

CREATE TABLE Productos(
Codigo Varchar(80) primary key,
Nombre Varchar(120),
Unidad Varchar(80),
Precio Float,
Precio_Iva Float,
Iva Int,
Porc_Iva Float,
Tipo Varchar(80),
Costo float
);


CREATE TABLE ProyectoEn(
Numero int primary key,
Tercero varchar(255),
FechaDeRealizacion date,
Subtotal Float,
Total Float,
Iva Float,
FechaInicio date,
FechaFin date,
Autorizado boolean,
Finalizado boolean,
Descripcion varchar(1024),
Usuario varchar(80),
Costo float,
FOREIGN KEY (Tercero) references Terceros(Nit),
FOREIGN KEY (Usuario) references Usuarios(Usuario)
);
drop table ProyectoEn;

CREATE TABLE ProyectoDe(
Numero int,
Producto Varchar(80),
Cantidad float,
Faltantes float,
ValorUnitario float,
ValorIva float,
PorcentajeIva float,
ValorTotal float,
Descripcion varchar(1024),
Costo float,
FOREIGN KEY (Producto) references Productos(Codigo),
FOREIGN KEY (Numero) references ProyectoEn(Numero)
);
drop table ProyectoDe;


CREATE TABLE AvanceEn(
Numero int primary key,
Proyecto int,
FechaDeRealizacion date,
Subtotal Float,
Total Float,
Iva Float,
FechaEntrega date,
Autorizado boolean,
Finalizado boolean,
Descripcion varchar(1024),
Usuario varchar(80),
Costo float,
FOREIGN KEY (Usuario) references Usuarios(Usuario),
FOREIGN KEY (Proyecto) references ProyectoEn(Numero)
);
drop table AvanceEn;

CREATE TABLE AvanceDe(
Numero int,
Producto Varchar(80),
Cantidad float,
ValorUnitario float,
ValorIva float,
PorcentajeIva float,
ValorTotal float,
Descripcion varchar(1024),
Costo float,
FOREIGN KEY (Producto) references Productos(Codigo),
FOREIGN KEY (Numero) references AvanceEn(Numero)
);
drop table AvanceDe;






