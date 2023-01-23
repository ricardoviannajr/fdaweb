<?php
// Estabelece a conexão com o servidor MySQL
$conn = new mysqli("localhost", "root", "");

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Cria o banco de dados
$sql = "CREATE DATABASE fdaweb";
if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado com sucesso!";
} else {
    echo "Erro ao criar banco de dados: " . $conn->error;
}

// Fecha a conexão
$conn->close();

// Estabelece a nova conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "fdaweb");

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Cria a tabela de atletas
$sql = "CREATE TABLE athletes (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    registration_number VARCHAR(30) NOT NULL,
    name VARCHAR(100) NOT NULL,
    birthdate DATE NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    gender ENUM('male', 'female') NOT NULL,
    email VARCHAR(50) NOT NULL,
    mother_name VARCHAR(100) NOT NULL,
    father_name VARCHAR(100) NOT NULL,
    contact_number VARCHAR(20) NOT NULL,
    category VARCHAR(30) NOT NULL,
    club VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela criada com sucesso!";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}

// Fecha a conexão
$conn->close();

?>