<?php

if(isset($_POST['submit']))
{
    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO adm(nome, email, senha)
    VALUES ('$nome', '$email', '$senha')");

    header('Location: login.php');

    
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">

    <title>Garimpei.com.br</title>
    <style> 
       body {
    background-image: linear-gradient(to bottom, #ffbb6e, #ffe791 );
    margin: 0;
    font-family: 'Fira Code', monospace;
}

.main-login {
    width: 100vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.left-login {
    width: 60vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: left;
    flex-direction: row;
}

.left-login >h1 {

    text-transform: uppercase;
    font-weight: bold;
    font-size: 45px;

}

.img-login {
    width: 58vw;
}

.right-login {
    width: 50vw;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-login {
    width:  100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 30px 35px;
    background: white;
    border-radius: 20px;
}


.card-login > h1{
    text-transform: uppercase;
    letter-spacing: 2px;
    font-weight: 900;
    font-size: 40px;
    margin: 0;
    color: black;
}

.textfield {
    width: 80%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px 0;
}

.textfield > input {
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 15px;
    color: black;
    border: solid 3.4px black;
    font-size: 12pt;
    outline: none;
    box-sizing: border-box;
}

.textfield > label {
    color: white;
    margin-bottom: 10px;
}

.textfield > input ::placeholder {
    color: white;
    font-weight: 600;
}

#eye-Ic {
    position: absolute;
    height: 25px;
    bottom: 19%;
    left: 86%;
    cursor: pointer;
}

.eye-pos{
    position: relative;
}

#errorMsg {
    margin: 0;
    color: red;
    font-weight: bold;
}

.btn-login {
    width: 100%;
    padding: 16px 0;
    margin: 0;
    border: none;
    border-radius: 10px;
    text-transform: uppercase;
    cursor: pointer;
    font-weight: 900;
    font-size: 15px;
    box-sizing: border-box;
    letter-spacing: 2px;
}
.btn-login:hover {
    background: #ffe791;
}

.a-btn {
    width: 80%;
    margin: 25px 0 10px 0;
}
         
</style>
</head>
    <body> 
    <div class="main-login">
            <div class="left-login">
                <img class="img-login" src='telalogin.png' alt="">
            </div>  
            <form action="cadastro.php" method="POST">
                <!-- <form class="form-login" action=""> -->
                    <div class="card-login">
                    <h1>Cadastro</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input id="user_input" type="text" name="nome" placeholder="Usuário" maxlength="36" required>
                    </div>

                     <div class="textfield">
                        <label for="usuario">Email</label>
                        <input id="user_input" type="text" name="email" placeholder="Email" maxlength="36" required>
                    </div>

                    <div class="textfield eye-pos">
                        <label for="senha">Senha</label>
                        <input id="password_input" type="password" id="senha" name="senha" placeholder="Senha" maxlength="30" required>
                        <img id="eye-Ic"  onclick="eyeClick()" >
                        <!-- <i id="eye-Ic" class="fa-regular fa-eye fa-xl" onclick() ></i> -->
                        <!-- <i id="close-eye" class="fa-regular fa-eye-slash fa-xl"></i> -->
                    </div>
                    <div>
                    <p>
        <a href="login.php" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Já tenho uma conta</a></p>

                    </div>
                    <br><br>
                <input type="submit"  name="submit" id="submit" class="btn-login"  id="btn-log">
                

                    </a>
                    <!-- olhe o botao quando estiver com defeito -->
                </div>
            <!-- </form> -->
            </form>
        </div>

    </body>
</html>