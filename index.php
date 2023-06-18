<?php
session_start();
?>
<html>
<head>
    <title>Página Inicial</title>
    <style>
        body {
            background-image: url('https://a-static.besthdwallpaper.com/demon-slayer-kimetsu-no-yaiba-kyojuro-rengoku-swing-a-sword-wallpaper-2880x1800-91297_8.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        center {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <?php if (isset($_SESSION['nome'])) {
            echo "<h1>Olá, " . $_SESSION['nome'] . "</h1><br><br>";
            if ($_SESSION['nome'] === 'administrador') {
                ?>
                <a href="cadastro.php">Cadastrar Usuário</a><br><br>
                <a href="listar.php">Listar Usuários</a><br><br>
                <?php
            }
            ?>
            <a href="alterarsenha.php">Alterar Senha</a><br>
            <a href="logout.php">Sair</a><br>
            <?php
        } else {
            ?>
            <h1>Olá, visitante.</h1> <a href="login.php">Login</a>
            <?php
        }
        ?>
    </center>
</body>
</html>