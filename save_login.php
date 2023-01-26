<?php
    // Conexão com o banco de dados
    $conn = mysqli_connect('localhost', 'root', '', 'fdaweb');

    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verifica se já existe um registro com o mesmo CPF
    $query = "SELECT cpf FROM login_table WHERE cpf = '$cpf'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows > 0) {
        echo "Já existe um usuário com esse CPF. Por favor, escolha outro CPF";
    } else {
        // Insere os dados no banco de dados
        $query = "INSERT INTO login_table (nome, cpf, usuario, senha) VALUES ('$nome', '$cpf', '$usuario', '$senha')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            // Redireciona o usuário para a página home.html
            header('Location: home.html');
        } else {
            echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
?>
