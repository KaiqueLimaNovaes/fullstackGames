

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Produtos - Full stack games</title>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="./Js/funcoes.js"></script>
</head>
<body>
    <!--Menu-->
    <?php
        include_once('menu.html');
    ?>
    <!--Fim do menu-->
    <section>
        <h2>Produtos</h2>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Categorias</h3>
                    <div class="row">
                        <ol id="listaLinha">
                            <li class="lisP" onclick="exibirTodos()">Todos (16)</li>
                            <li class="lisP" onclick="exibirCategoria('consoles')">Consoles (5)</li>
                            <li class="lisP" onclick="exibirCategoria('jogos')">Jogos (6)</li>
                            <li class="lisP" onclick="exibirCategoria('acessorios')">Acessórios (3)</li>
                            <li class="lisP" onclick="exibirCategoria('pc')">PC (2)</li>
                        </ol>
                    </div>
                </div>
            </div>
                    <br>
                    <hr>
                    <br>
                    <!--Inicio produtos-->
            <div class="container">
                <div class="row">
                    <?php
                        $dados_json = file_get_contents("http://localhost/fullstack%20games/fullstack%20games/getContent.php?table=produtos");
                        $dados = json_decode($dados_json, true);
                        //print_r($dados);

                        foreach ($dados as $key => $rows){
                            //print_r($row);
                            
                    ?>
                        <div class="produtos col-sm-12 col-md-4" id="<?php echo $rows["categoria"]; ?>">
                            <img src="<?php echo $rows["imagem"]; ?>" alt="ps5" width="150px" onclick="destaque(this)">
                            <br>
                            <p><?php echo $rows["descricao"]; ?></p>
                            <hr>
                            <p><strike>R$<?php echo $rows["preco"]; ?></strike></p>
                            <p class="preco">R$<?php echo $rows["preco_venda"]; ?></p>
                            <br><br>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>     
   <!--Fim produtos-->
   <?php
        include_once('footer.html');
    ?>
</body>
</html>