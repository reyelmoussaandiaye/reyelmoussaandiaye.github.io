<?php
//CREATE DATABASE IF NOT

//EXISTS notes_examens;
USE notes_examens;

//CREATE TABLE IF NOT EXISTS
etudiants(
  ine INT PRIMARY KEY,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  email VARCHAR(50),
  telephone VARCHAR(12),
);
CREATE TABLE IF NOT EXISTS
notes(
id INT PRIMARY KEY
AUTO_INCREMENT,
etudiant_ine INT,
matiere_code VARCHAR(20),
note DECIMAL(5,2),
FOREIGN KEY
(etudiant_ine)
REFERENCES
etudiants(ine),
FOREIGN KEY (matiere_code)
REFERENCES matieres(code)
);
CREATE TABLE IF NOT EXISTS
administrateur(
  email VARCHAR(50)
  PRIMARY KEY,
  password VARCHAR(50)
);
?>