
create database brazatel;
	use brazatel;

create table roles(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombre VARCHAR(20),
	UNIQUE(nombre)
);

	insert into roles values (1, 'Administrador');

CREATE TABLE usuarios(
	id INT PRIMARY KEY AUTO_INCREMENT,
	nombres VARCHAR(20),
	papellido VARCHAR(20),
	sapellido VARCHAR(20),
	username VARCHAR(20),
	password VARCHAR(50), 
	estado INT,
	id_roles INT,
	UNIQUE (username),
	FOREIGN KEY (id_roles) REFERENCES roles (id)
);

	insert into usuarios values ( 1, 'Maria', 'Gutierrez', 'Huarachi', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 1);



