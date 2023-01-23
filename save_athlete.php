<?php
// Estabelece a conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "fdaweb");

// Verifica se houve algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Recupera as informações do formulário
$registration_number = $_POST["registration_number"];
$name = $_POST["name"];
$birthdate = $_POST["birthdate"];
$cpf = $_POST["cpf"];
$gender = $_POST["gender"];
$email = $_POST["email"];
$mother_name = $_POST["mother_name"];
$father_name = $_POST["father_name"];
$contact_number = $_POST["contact_number"];
$category = $_POST["category"];
$club = $_POST["club"];


// Prepara a query de inserção
$sql = "INSERT INTO athletes (registration_number, name, birthdate, cpf, gender, email, mother_name, father_name, contact_number, category, club) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepara a declaração
$stmt = $conn->prepare($sql);

// Vincula as variáveis à declaração
$stmt->bind_param("ssssssssssss", $registration_number, $name, $birthdate, $cpf, $gender, $email, $mother_name, $father_name, $contact_number, $category, $club);

// Executa a declaração
if ($stmt->execute()) {
    echo "Atleta cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar atleta: " . $stmt->error;
}

// Fecha a conexão
$conn->close();

?>