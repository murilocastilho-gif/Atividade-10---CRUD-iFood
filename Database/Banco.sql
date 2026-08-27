CREATE DATABASE Banco;

USE Banco;

CREATE TABLE Clientes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefone VARCHAR(15),
    endereco VARCHAR(255),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE Restaurante (
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL,
       categoria VARCHAR(50),
       telefone VARCHAR(15),
       endereco VARCHAR(255),
        fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

CREATE TABLE Pedidos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    cliente_id INT,
    restaurante_id INT,
    data_pedido TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    valor DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES Clientes(id),
    FOREIGN KEY (restaurante_id) REFERENCES Restaurante(id)
);