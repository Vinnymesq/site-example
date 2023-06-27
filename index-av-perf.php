<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-av-perfis.css">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="shortcut icon" href="../img/Logo.png" type="image/x-icon">
    <title>Garimpei.com.br</title>
</head>
<body>
    <style> {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Fira Code', monospace;
}

body {
    font-family: 'Fira Code', monospace;
}

.container {
    height: 100vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
}

.nav-bar {
    width: 100vw;
    height: 12vh;
    background-image: linear-gradient(to bottom, #ffbb6e, #ffe791 );
    display: flex;
    padding: 10px 15px 10px 6.3vw;
    /* paddin = cima direita baixo esquerda */
    justify-content: space-between;
    align-items: center;
}


.ic-logo {
    height: 8vh;
}

.ic-user {
    height: 8vh;
}

.ic-opcoes {
    height: 8vh;
    display: none;
}

.page {
    width: 100vw;
    height: 88vh;
    background-color: antiquewhite;
    display: flex;
}

.side-bar {
    background-color: #ffe791 ;
    height:100%;
    width: 17%;
    padding-top: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.opcoes > a {
    margin: 20px 0;
    text-decoration: none;
    color: black;
    font-size: 15px;
}

.opcoes > a > h3 {
    margin: 20px 0;
    color: black;
}

.opcoes > a:hover {
    text-decoration: underline solid 2px;
    font-size: 17px;
    transition: 0.2s;   
}

.page-itens {
    height: 100%;
    width: 83%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    background-color: white;
}

.title {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-box {
    height: 30%;
    width: 100%;
    display: flex;
    justify-content: space-around;
}

.card {
    height: 100%;
    width: 45%;
    border-radius: 30px;
    background-color: #ffe791;
}

.title > h1 {
    font-weight: bold;
    font-size: 40px;
}

.perfil-brecho {
    width: 75%;
    height: 18%;
    padding: 5px;
    background-color: white;
    border: 5px solid #ccb675;
    border-radius: 7px;
    display: flex;
    align-items: center;
}

.perfil-brecho:hover {
    cursor: pointer;
}

.img-perfil-brecho {
    height: 95%;
    width: 20%; 
}

.img-perfil-brecho >img {
    height: 100%;
    width: 100%;
}

.text-info-brecho {
    height: 95%;
    width: 60%;
    margin: 0 10px;
    padding-left: 10px;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.title-brecho {
    width: 100%;
    font-size: 14px;
    margin: 0 0 20px 0;
    overflow: hidden; /* oculta conteúdo que excede a div */
    white-space: nowrap;
}

.func-brecho {
    width: 100%;
    font-size: 11px;
    overflow: hidden; /* oculta conteúdo que excede a div */
    white-space: nowrap;
}

.location-brecho{
    width: 100%;
    font-size: 11px;
    overflow: hidden; /* oculta conteúdo que excede a div */
    white-space: nowrap;
}

.verific-brecho {
    height: 95%;
    width: 20%;
    display: flex;
}

.acept-brecho {
    height: 100%;
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.recuse-brecho {
    height: 100%;
    width: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.check-Ic {
    height: 60%;
    cursor: pointer;
}

.popup {
    justify-content: center;
    align-items: center;
    word-wrap: break-word;
    position: absolute;
    height: 35%;
    width: 30%;
    border-radius: 20px;
    background: white;
    border: #ffbb6e solid 6px;
}

.title-alert {
    width: 100%;
    height: 25%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.msg-alert {
    height: 40;
    width: 80%;
    padding: 30px;
    display: flex;
    justify-content: center;
    margin-left: 40px;
}

.btn-alert {
    width: 100%;
    height: 20%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.btn-alert > input {
    width: 30%;
    height: 80%;
    font-weight: 500;
    font-size: 25px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: none;
}

.btn-alert > input:hover {
    cursor: pointer;
}

/* .msg-alert>h3 , .title-alert>h1 {
    color: white;
} */

#btn_teste {
    width: 40px;
    height: 30px;
}</style>
    <div class="container">
        <div class="nav-bar">
            <a href=""><img class="ic-logo" src='Logo.png' alt=""></a>
            <a href=""><img class="ic-opcoes" src='opções.png' alt=""></a> 
            <a href=""><img class="ic-user" src='user.png' alt=""></a>
        </div>
        <div class="page">
            <div class="side-bar">
                <div class="opcoes">
                    <a href="index-grade.php"><h3>Atualizar grade</h3></a>
                    <a href="index-av-perf.php"><h3>Avaliar Perfis</h3></a>
                    <a href="index-conta.php"><h3>Conta</h3></a>
                    <a href="login.php"><h3>Sair</h3></a>
                </div>
            </div>
                <div class="page-itens">

                    <div class="popup" id="popup" hidden>
                        
                        <div class="title-alert">
                            <h1>Alerta</h1>
                        </div>
                        <div class="msg-alert">
                            <h3>
                                E-mail de confirmação enviado para o brechó
                            </h3>
                        </div>
                        <div class="btn-alert">
                            <input class="" type="button" value="OK" onclick="pupupfalse()">
                        </div>
                    </div>
                    <div class="title">
                        <h1>Avaliar Perfil</h1>
                    </div>
                    <div class="perfil-brecho">
                        <div class="img-perfil-brecho">
                            <img src="brecho1.jpg" alt="">
                        </div>
                        <div class="text-info-brecho">
                            <div class="title-brecho">
                                <p><h1>Brecho da dona Marcia</h1></p>
                            </div>
                            <div class="func-brecho">
                                <p></p><h3>horario de funcionamento 8:00 as 18:00</h3></p>
                            </div>
                            <div class="location-brecho">
                                <p><h3>São Paulo,vila Leopodina - DDD11</h3></p>
                            </div>
                        </div>
                        <div class="verific-brecho">
                            <div class="acept-brecho">
                                <img class="check-Ic " onclick="pupuptrue()" src='check.svg' alt="">
                            </div>
                            <div class="recuse-brecho">
                               <img class="check-Ic" onclick="pupuptrue()" src='x-check.svg' alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="perfil-brecho">
                        <div class="img-perfil-brecho">
                            <img src='bracho2.jpg' alt="">
                        </div>
                        <div class="text-info-brecho">
                            <div class="title-brecho">
                                <p><h1>Brecho da Marcia</h1></p>
                            </div>
                            <div class="func-brecho">
                                <p></p><h3>horario de funcionamento das 8:00 as 18:00</h3></p>
                            </div>
                            <div class="location-brecho">
                                <p><h3>São Paulo,vila Leopodina - DDD11</h3></p>
                            </div>
                        </div>
                        <div class="verific-brecho">
                            <div class="acept-brecho">
                                <img class="check-Ic" onclick="pupuptrue()" src="check.svg" alt="">
                            </div>
                            <div class="recuse-brecho">
                               <img class="check-Ic" onclick="pupuptrue()" src="x-check.svg" onclick="recusepopup()" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="perfil-brecho">
                        <div class="img-perfil-brecho">
                            <img src="brecho3.jpg" alt="">
                        </div>
                        <div class="text-info-brecho">
                            <div class="title-brecho">
                                <p><h1>Brecho da Maria</h1></p>
                            </div>
                            <div class="func-brecho">
                                <p></p><h3>horario de funcionamento 8:00 as 18:00</h3></p>
                            </div>
                            <div class="location-brecho">
                                <p><h3>São Paulo,vila Leopodina - DDD11</h3></p>
                            </div>
                        </div>
                        <div class="verific-brecho">
                            <div class="acept-brecho">
                                <img class="check-Ic "onclick="pupuptrue()" src="check.svg" alt="">
                            </div>
                            <div class="recuse-brecho">
                               <img class="check-Ic" onclick="pupuptrue()" src="x-check.svg" alt="">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/scrypt.js"></script>
        <script src="https://kit.fontawesome.com/cdbb067da2.js" crossorigin="anonymous"></script>
</body>
</html>