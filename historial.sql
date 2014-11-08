DROP DATABASE IF EXISTS historial;

CREATE DATABASE historial;
USE historial;

CREATE TABLE usuarios(
	email varchar(35) NOT NULL PRIMARY KEY,
	nickname varchar(25) NOT NULL,
	password varchar(30) NOT NULL
);

CREATE TABLE visitas(
	email varchar(35) NOT NULL,
	url varchar(55) NOT NULL,
	title varchar(70) NOT NULL,
	cantidad int NOT NULL,
	FOREIGN KEY (email) REFERENCES usuarios(email),
	PRIMARY KEY (email, url)
);

INSERT usuarios VALUES
('jim06@hotmail.it', 'Kerbouchard', '123456'),
('juancagb.17@gmail.com', 'JCarlos', '654321');

