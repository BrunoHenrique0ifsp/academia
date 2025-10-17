<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/topo.css">
</head>
<body>
    <div class = "principal">
        <div class ="plano"><a href="plano.php"><img src="img/Plano.png" alt=""></a></div>
        <div class="caixa-pesquisa">
            <form action="sql/pesquisa.php" method="get">
                <input type="text" placeholder="Pesquisar...">
                <button type="submit">
                    <img src="img/lupa.png" alt="Pesquisar">
                </button>
            </form>
        </div>

        <div class ="direita">
            <div class ="login"><a href="login.html"><img src="img/Login.png" alt="Logar"></a>
           <a href="login.html"> <p>Logar</p></a>
        </div>
            <div class="carrinho"><a href="carrinho.php"><img src="img/Compra.png" alt="Compra"></a>
            <a href="carrinho.php"><p>carrinho</p></a>
        </div>
        </div>
    </div>
</body>
</html>