<html lang="pt-br"><head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="loginStyle.css">
        <script src="loginScript.js"></script>
<body>
        <h2 style="text-align: center;">Rpgzin?</h2>
        <form action="sessionManagement.php" method="POST">
            <input required name="loginName" id="loginName" onmouseenter="loginEscrever()" onmouseleave="loginDescrever()" type="text" placeholder="Login" style="border-color: rgb(255, 110, 150);">
            <br><br>
            <input name="senha" required type="password" onmouseenter="senhaEscrever()" onmouseleave="senhaDescrever()" id="senha" placeholder="Senha" style="border-color: rgb(255, 110, 150);">
            <br>
            <br>
            <button id="enter" onmouseenter="crescer()" onmouseleave="diminuir()" type="submit" style="font-size: 30px; color: rgb(255, 110, 150);">»»»</button>
        </form>
        <br>
        <br>
        <br>
        <br>
        <img src="images/d20.gif" alt="gif dado">
</body></html>