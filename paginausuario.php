<?php
    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION["IdUsuario"])) {
        die("Você não tem acesso a esta página.");
    }
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Informações do Usuário</title>
</head>
<body>
<header>
        <div class="titulo">
            <h1>Cabeçalho</h1>
        </div>
        <div class="nav">
            <p><a href="cadastro.html">Cadastro</a></p>
        </div>
        <div class="nav">
        <p><a href="login.html">Login</a></p>
        </div>
        <div class="nav">
            <p><a href="paginausuario.php">Usuário</a></p>
        </div>
    </header>

        <div class="boasvindas">
            <h2>Bem-vindo, <?php echo $_SESSION['Nome']?>.</h2>
        </div>

        <div class="containerUsuario">
            <img class="fotoUser" src="https://static.vecteezy.com/system/resources/previews/018/765/757/original/user-profile-icon-in-flat-style-member-avatar-illustration-on-isolated-background-human-permission-sign-business-concept-vector.jpg" height="180vh" alt="user.jpg" >

            <div class="dadosUsuario">
                <h2>Nome: <?php echo $_SESSION['Nome']; ?></h2>
                <h2>Email: <?php echo $_SESSION['Email']; ?></h2>
                <h2>Senha: <?php echo $_SESSION['Senha']; ?></h2>
            </div>
        </div>

    <footer>
        <h4>Atividade de Desenvolvimento de Sistemas - 30/11/2023</h4>
    </footer>
</body>
</html>