<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackgames";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("A conexão com o banco de dados falhou: ".mysqli_connect_error());
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos - Full stack games</title>
    <link rel="stylesheet" href="./Css/style.css">
    <script src="./Js/funcoes.js"></script>
</head>
<body>
    <!--Menu-->
    <?php
        include_once('menu.html');
    ?>
    <!--Fim do menu-->
    <h2>Produtos</h2>
    <hr>
            <section class="lista">
                <h3>Categorias</h3>
                <ol id="listaLinha">
                    <li onclick="exibirTodos()">Todos (16)</li>
                    <li onclick="exibirCategoria('consoles')">Consoles (5)</li>
                    <li onclick="exibirCategoria('jogos')">Jogos (6)</li>
                    <li onclick="exibirCategoria('acessorios')">Acessórios (3)</li>
                    <li onclick="exibirCategoria('pc')">PC (2)</li>
                </ol>
            </section>
            <br>
            <hr>
            <br>
            <!--Inicio produtos-->
    <section>
        <?php
            $sql = "select * from produtos";
            $result = $conn->query($sql);
        
            if ($result->num_rows > 0){
                while ($rows = $result->fetch_assoc()){
        ?>
            <div class="produtos" id="<?php echo $rows["categoria"]; ?>">
                <img src="<?php echo $rows["imagem"]; ?>" alt="ps5" width="150" onclick="destaque(this)">
                <br>
                <p><?php echo $rows["descricao"]; ?></p>
                <hr>
                <p><strike>R$<?php echo $rows["preco"]; ?></strike></p>
                <p class="preco">R$<?php echo $rows["preco_venda"]; ?></p>
                <br><br>
            </div>
        <?php
                }
            }else{
                echo "Nenhum produto cadastrado!";
            }
        ?>
    </section>     
   <!--Fim produtos-->
<footer id="rodape">
    <h4>Formas de pagamento</h4>
    <p><img src="./images/fpagamentos.png" alt="Formas de pagamento"></p>
    <p>&copy; Recode pro</p>
</footer>
</body>
</html>