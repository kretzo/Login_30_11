<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastre-se</title>
</head>
<body>
<body>
    <header>
        <div class="titulo">
            <h1>Título</h1>
        </div>
    </header>

    <form class="formulario" method="post">
        <h3 class="campos">Cadastre-se</h3>
        <input class="campos" type="text" placeholder="Nome" name="nome">
        <input class="campos" type="email" placeholder="Email" name="email">
        <input class="campos" type="password" placeholder="Senha" name="senha">
        <input class="botao2" type="submit" value="Cadastrar">
    </form>

    <footer>
    </footer>

</body>
</html>

<?php
    class Conexao {

        private $conec;

        public function __construct() {
            $server= "localhost";
            $user = "root";
            $password = "";
            $database = "bd_cadastro";

            $this->conec = mysqli_connect($server, $user, $password, $database);

            if (!$this -> conec) {
                die("Falha de Conexão");
            }
        }

        public function getConnection() {
            echo "Ok";
            return $this -> conec;
        }
    
        public function close() {
            if ($this -> conec) {
                mysqli_close($this -> conec);
            }
        }
    }

    function Cadastro() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($nome == "" || $email == "" || $senha == ""){
            echo "Preencha todos os dados";
        }
        else{
            $conexao = new Conexao();

            $conectar = $conexao->getConnection();

            $querry="INSERT INTO usuarios VALUES ('$nome', '$email', '$senha')";
            $inserir = mysqli_query($conectar, $querry);

            if($inserir){
                header("location: user.php");
                exit();
            }
        }
    }
?>