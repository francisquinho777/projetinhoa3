<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <style>
        body {
            background-image: url('https://s1.1zoom.me/b4445/4/Planets_Nebulae_in_space_518424_1920x1080.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        #login {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 5px;
        }

        #login input[type="text"],
        #login input[type="password"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        #login input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #login input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <center>
        <div id="login">
            <h1>LOGIN</h1>
            <form action="logado.php" method="POST">
                Login: <input type="text" name="login" required><br>
                Senha: <input type="password" name="senha" required><br><br>
                <input type="submit" value="Entrar">
            </form>
        </div>
    </center>
</body>
</html>