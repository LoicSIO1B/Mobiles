Drop database if exists dbmobiles;
Create database dbmobiles;
Use dbmobiles;

CREATE TABLE Client(
	idCl int not null AUTO_INCREMENT,
	nomCl varchar(50) not null,
	prenomCl varchar(50) not null,
	username varchar(50) not null,
	sexe int(1) not null,
	email varchar(255) not null,
	mdp varchar(50) not null,
	date_creation_compte datetime not null,
	level int(1) not null,
	n_mdp int(1) not null,
	PRIMARY key(idCl));


Create table slide(
	idsl int not null,
	nomsl varchar(255) not null,
	photo varchar(255) not null,
	link varchar(255) not null,
	created_at timestamp null default null,
	updated_at timestamp null default null,
	primary key(idsl));

CREATE TABLE Commande(
	refCmd INT NOT NULL AUTO_INCREMENT,
	dateCmd Date,
	Frais FLOAT(6,2),
	Reduction FLOAT(6,2),
	idCl INT NOT NULL,
	PRIMARY KEY(refCmd),
	FOREIGN KEY(idCl) REFERENCES Client(idCl));

	

CREATE TABLE Assistant(
	idAss INT NOT NULL AUTO_INCREMENT,
	nomAss VARCHAR(30),
	prenomAss VARCHAR(30),
	telAss CHAR(10),
	mailAss VARCHAR(80),
	Salaire FLOAT(6,2),
	PRIMARY KEY(idAss));

	INSERT INTO Assistant VALUES
		(NULL,'Strife','Cloud','0606060606','cloud.strife@gmail.com',3000.00),
		(NULL,'Wallace','Barret','0707070707','barret.wallace@gmail.com',3500.00),
		(NULL,'Lockheart','Tifa','0808080808','tifa.lockhear@gmail.com',2800.00),
		(NULL,'Gainsborough','Aerith','0909090909','aerith.gainsborough@gmail.com',2600.00),
		(NULL,'Highwind','Cid','1010101010','cid.highwind@gmail.com',1400.00);


CREATE TABLE Support(
	refSup INT NOT NULL AUTO_INCREMENT,
	Nature VARCHAR(20),
	conditionSup VARCHAR(20),
	CoutSup FLOAT(5,2),
	PRIMARY KEY(refSup));

	INSERT INTO Support VALUES
		(NULL,'Panne','abonnement',300.50),
		(NULL,'Malfonction','assurance',75.20),
		(NULL,'Freeze','bonus',400.50),
		(NULL,'Illsible','supplement',120.00),
		(NULL,'Contraste','justificatif',40.00);

CREATE TABLE Assurer(
	dateHD date,
	dateHF date,
	idCl INT NOT NULL,
	idAss INT NOT NULL,
	refSup INT NOT NULL,
	FOREIGN KEY(idCl) REFERENCES Client(idCl),
	FOREIGN KEY(idAss) REFERENCES Assistant(idAss),
	FOREIGN KEY(refSup) REFERENCES Support(refSup),
	PRIMARY KEY(idCl,idAss,refSup));

	

CREATE TABLE Marque(
	idMarq INT NOT NULL AUTO_INCREMENT,
	nomMarq VARCHAR(30),
	PRIMARY KEY(idMarq));

	INSERT INTO Marque VALUES
		(NULL,'Galaxy'),
		(NULL,'Iphone'),
		(NULL,'Huawei'),
		(NULL,'Xiaomi'),
		(NULL,'Pixel');

CREATE TABLE Produit(
	refPro INT NOT NULL AUTO_INCREMENT,
	nomPro VARCHAR(40),
	dateDispo Date,
	dateFin date,
	dateConcept date,
	serie VARCHAR(20),
	Prix FLOAT(10,2),
	Taille FLOAT(10,2),
	idMarq INT NOT NULL,
	PRIMARY KEY(refPro),
	FOREIGN KEY(idMarq) REFERENCES Marque(idMarq));

CREATE TABLE Contenir(
	Qtt INT NOT NULL,
	refCmd INT NOT NULL,
	refPro INT NOT NULL,
	FOREIGN KEY(refCmd) REFERENCES Commande(refCmd),
	FOREIGN KEY(refPro) REFERENCES Produit(refPro),
	PRIMARY KEY(refCmd,refPro));

CREATE TABLE Offre(
	refOff INT NOT NULL AUTO_INCREMENT,
	debutOff date,
	finOff date,
	type VARCHAR(20),
	montantOff FLOAT(8,2),
	refSup INT NOT NULL,
	refPro INT NOT NULL,
	PRIMARY KEY(refOff),
	FOREIGN KEY(refSup) REFERENCES Support(refSup),
	FOREIGN KEY(refPro) REFERENCES Produit(refPro));

CREATE TABLE Accessoire(
	refPro INT NOT NULL,
	nomPro VARCHAR(40),
	dateDispo Date,
	dateFin date,
	dateConcept date,
	serie VARCHAR(20),
	Prix FLOAT(10,2),
	Taille FLOAT(10,2),
	QttA INT(3),
	Version FLOAT(3,1),
	idMarq INT NOT NULL,
	PRIMARY KEY(refPro),
	FOREIGN KEY(idMarq) REFERENCES Marque(idMarq));


CREATE TABLE ProduitMobile(
	refPro INT NOT NULL,
	nomPro VARCHAR(40),
	dateDispo Date,
	dateFin date,
	dateConcept date,
	serie VARCHAR(20),
	Prix FLOAT(10,2),
	Taille FLOAT(10,2),
	coutTotal FLOAT(10,2),
	idMarq INT NOT NULL,
	PRIMARY KEY(refPro),
	FOREIGN KEY(idMarq) REFERENCES Marque(idMarq));

CREATE TABLE Forfait(
	idFor INT NOT NULL,
	debutFor date,
	finFor date,
	conditionFor VARCHAR(50),
	PRIMARY KEY(idFor));

	INSERT INTO Forfait VALUES
		(1,'2017-01-01','2022-01-01','majeur'),
		(2,'2017-02-02','2022-02-02','etudiant'),
		(3,'2017-03-03','2022-03-03','professionnel'),
		(4,'2017-04-04','2022-04-04','fan club'),
		(5,'2017-05-05','2022-05-05','3 ans');

CREATE TABLE Encadrer(
	refPro INT NOT NULL,
	idFor INT NOT NULL,
	FOREIGN KEY(refPro) REFERENCES Produit(refPro),
	FOREIGN KEY(idFor) REFERENCES Forfait(idFor),
	PRIMARY KEY(refPro,idFor));


CREATE VIEW v_Produits AS
	(SELECT p.refPro, p.nomPro, m.nomMarq
	FROM Produit p, Marque m
	WHERE p.idMarq =m.idMarq
	ORDER BY m.idMarq);

CREATE VIEW v_Commandes AS
	(SELECT cl.nomCl, cl.prenomCl, co.refCmd, co.dateCmd
	FROM Client cl, Commande co
	WHERE cl.idCl=co.idCl
	ORDER BY cl.nomCl);

CREATE VIEW v_support AS
	(SELECT a.nomAss, a.prenomAss, s.refSup, s.Nature
	FROM Assistant a, Support s, Assurer ass
	WHERE a.idAss =ass.idAss AND s.refSup = ass.refSup
	ORDER by s.refSup);