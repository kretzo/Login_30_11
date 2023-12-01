<?php
    class Login{
        function __construct(){
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            if($nome == "" || $senha == "" ){
                echo "Preencha todos os dados solicitados";
            }
            else{
                include('conexaoBD.php');

                $conexao = new Conexao();

                $conectar = $conexao->getConnection();

                $query = "SELECT * FROM usuarios WHERE Nome = '$nome' AND Senha = '$senha';";

                $verific = mysqli_query($conectar, $query);

                $contagem = mysqli_num_rows($verific);

                if($contagem == 1){
                    session_start();

                    $usuario = mysqli_fetch_assoc($verific);
                    
                    $_SESSION['IdUsuario'] = $usuario['IdUsuario'];
                    $_SESSION['Nome'] = $usuario['Nome'];
                    $_SESSION['Email'] = $usuario['Email'];
                    $_SESSION['Senha'] = $usuario['Senha'];

                    header("location: paginausuario.php");
                    exit();
                }
                else{
                    die("Usuário não encontrado.");
                }
                $conexao -> close();
            }
        }
    }

    new Login();
?>