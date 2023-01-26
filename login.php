<?php
    if(isset($_POST['submit'])){
        $user = $_POST['usuario'];
        $password = $_POST['senha'];

        $conn = mysqli_connect("localhost", "root", "", "fdaweb");

        $query = "SELECT * FROM login_table WHERE usuario='$user' AND senha='$password'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        if($row){
            //redirect to welcome page
            header('Location: principal.html');
        }else{
            echo "Usuário ou senha inválidos";
        }
    }
?>