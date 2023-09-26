CREATE DATABASE ngomanagementsystem;

USE ngomanagementsystem;

CREATE TABLE Users (
  id INT NOT NULL AUTO_INCREMENT,
  username VARCHAR(50) NOT NULL,
  userpassword VARCHAR(255) NOT NULL,
  name VARCHAR(100) NOT NULL,
  category VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE Societies (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  address VARCHAR(255) NOT NULL,
  contact_info VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE Employees (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  contact_info VARCHAR(255) NOT NULL,
  role VARCHAR(50) NOT NULL,
  society_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (society_id) REFERENCES Societies(id)
);

CREATE TABLE Members (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  contact_info VARCHAR(255) NOT NULL,
  society_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (society_id) REFERENCES Societies(id)
);

CREATE TABLE Loans (
  id INT NOT NULL AUTO_INCREMENT,
  loan_amount DECIMAL(10,2) NOT NULL,
  interest_rate DECIMAL(5,2) NOT NULL,
  application_date DATE NOT NULL,
  status VARCHAR(50) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE Loan_Applications (
  id INT NOT NULL AUTO_INCREMENT,
  application_amount DECIMAL(10,2) NOT NULL,
  application_date DATE NOT NULL,
  status VARCHAR(50) NOT NULL,
  member_id INT NOT NULL,
  loan_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (member_id) REFERENCES Members(id),
  FOREIGN KEY (loan_id) REFERENCES Loans(id)
);

CREATE TABLE Share_Collection (
  id INT NOT NULL AUTO_INCREMENT,
  collection_amount DECIMAL(10,2) NOT NULL,
  collection_date DATE NOT NULL,
  member_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (member_id) REFERENCES Members(id)
);

CREATE TABLE Loan_Approvals (
  id INT NOT NULL AUTO_INCREMENT,
  approval_date DATE NOT NULL,
  status VARCHAR(50) NOT NULL,
  user_id INT NOT NULL,
  loan_id INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES Users(id),
  FOREIGN KEY (loan_id) REFERENCES Loans(id)
);
