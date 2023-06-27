<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-att-grade.css">
    <link rel="stylesheet" href='reset.css'>
    <link rel="shortcut icon" href="Logo.png" type="image/x-icon">
    <title>Garimpei.com.br</title>
</head>
<body>
    <style> 

{
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
    background-color: white;
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

.img-grade {
    width: 100%;
    height: 100%;
    border-radius: 30px;
}

.img-grade:hover {
    cursor: pointer;
}



</style>
    <div class="container">
        <div class="nav-bar">
            <a href=""><img class="ic-logo" src="Logo.png" alt=""></a>
            <a href=""><img class="ic-opcoes" src="opções.png" alt=""></a> 
            <a href=""><img class="ic-user" src="user.png" alt=""></a>
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
                    <div class="title">
                        <h1 class="title-att">Atualizar Grade</h1>
                    </div>
                        <div class="card-box">
                            <div class="card">
                                <img class="img-grade" src="background-card.jpeg" alt="">
                            </div>
                            <div class="card">
                                <img class="img-grade" src="background-card1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="card-box">
                            <div class="card">
                                <img class="img-grade" src="background-card2.jpeg" alt="">
                            </div>
                            <div class="card">
                                <img class="img-grade" src="background-card3.jpeg" alt="">
                            </div>
                        </div>
                </div>
            </div>
        </div>
</body>
</html>