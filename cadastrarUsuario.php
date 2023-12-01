<?php
    class Cadastro {
        function __construct() {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($nome == "" || $email == "" || $senha == ""){
                echo "Preencha todos os dados";
            }
            else{
                include('conexaoBD.php');

                $conexao = new Conexao();

                $conectar = $conexao->getConnection();

                $query="INSERT INTO usuarios (Nome, Email, Senha) VALUES ('$nome', '$email', '$senha')";
                $inserir = mysqli_query($conectar, $query);

                if($inserir){
                    header("location: login.html");
                    exit();
                }
                else{
                    die("Falha ao cadastrar usuário");
                }
                $conexao = close();
            }
        }
    }

    new Cadastro();
?>