USE workshop;

CREATE TABLE Utilisateur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(25),
    email VARCHAR(50)
);

CREATE TABLE Produit (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40),
    Price INT,
    Stock INT,
    Type ENUM('ProduitPhysique', 'ProduitNumerique')
);

CREATE TABLE PanierAchat (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    Produit_id INT,
    FOREIGN KEY (Produit_id) REFERENCES Produit(id),
    FOREIGN KEY (user_id) REFERENCES Utilisateur(id)
);

-- @block
ALTER TABLE Utilisateur
ADD COLUMN role ENUM('user','admin') DEFAULT 'user';

-- @block
INSERT INTO Produit (name, Price, Stock, Type) VALUES ('PhysicalProduct1', 50, 100, 'ProduitPhysique');
INSERT INTO Produit (name, Price, Stock, Type) VALUES ('DigitalProduct1', 20, 50, 'ProduitNumerique');
INSERT INTO Produit (name, Price, Stock, Type) VALUES ('PhysicalProduct2', 75, 80, 'ProduitPhysique');
INSERT INTO Produit (name, Price, Stock, Type) VALUES ('DigitalProduct2', 30, 70, 'ProduitNumerique');

-- @block
