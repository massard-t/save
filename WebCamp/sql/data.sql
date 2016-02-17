CREATE DATABASE IF NOT EXISTS data_base CHARACTER SET utf8;

CREATE TABLE data_base.Users (
	firstname VARCHAR(20),
	lastname VARCHAR(20),
	dob DATE,
	town_ob VARCHAR (80),
	country VARCHAR(20),
	phone INT(10),
	password VARCHAR(10),
	mail VARCHAR(20),
	address VARCHAR(20),
	description VARCHAR (140),
	role INT NOT NULL,
	positionx FLOAT,
	positiony FLOAT,
	pic VARCHAR(100),
	ID INT PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE data_base.Internship (
	name VARCHAR(100) NOT NULL,
	place VARCHAR(100) NOT NULL,
	categorie INT NOT NULL,
	skills VARCHAR(100) NOT NULL,
	ID INT PRIMARY KEY AUTO_INCREMENT,
	society VARCHAR(100),
	my_date DATE,
	description VARCHAR(3000)
);
CREATE TABLE data_base.Boss_internship (
	user_ID INT(1) NOT NULL,
	status INT(1) NOT NULL,
	intern_ID INT,
	postule_ID INT
);

CREATE TABLE data_base.Users_internship (
	user_ID INT(1) NOT NULL,
	status INT(1) NOT NULL,
	intern_ID INT(1) NOT NULL
);


CREATE TABLE data_base.Site (
	name VARCHAR(30) NOT NULL,
	description VARCHAR(140)
);

CREATE TABLE data_base.tchat (
	ID INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	prenom VARCHAR (255),
	message VARCHAR (255)
);

CREATE TABLE data_base.messages (
	id int(11) NOT NULL auto_increment,
	email_exp text NOT NULL default '0',
	email_dest text NOT NULL default '0',
	titre text NOT NULL,
	message text NOT NULL,
	PRIMARY KEY  (id)
);

INSERT INTO data_base.Site (name, description) VALUES 
("Bonanza","Rencontrez vos futurs stagieres");

INSERT INTO data_base.Users (mail, password, role) VALUES
("admin@admin.net", "admin", 0),

INSERT INTO data_base.Users_internship(user_ID, status, intern_ID)
(1, 2, 1),
(1, 2, 2),
(1, 2, 3),
(1, 2, 4),
(1, 2, 5),
(1, 2, 6),
(1, 2, 7),
(1, 2, 8),
(1, 2, 9);

INSERT INTO data_base.Internship(`name`, `place`, `categorie`, `skills`, `society`) VALUES
('ingenieur','antony','informatique','bac+5', 'Sofico');
('medecin','clamart','informatique','bac+5', 'Sofico');
('docteur','mordor','informatique','bac+5', 'Sofico');
('conducteur','tatouine','informatique','bac+5', 'Sofico');
('seigneur','galactica','informatique','bac+5', 'Sofico');
('gogo danceuse','Lyoko','informatique','bac+5', 'Sofico');
('codeur','boug-palais','informatique','bac+5', 'Sofico');
('assassin','joto','informatique','bac+5', 'Sofico');