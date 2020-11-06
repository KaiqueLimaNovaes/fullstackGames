<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackgames";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("A conexão com o banco de dados falhou: ".mysqli_connect_error());
    }

    if (isset($_POST['cliente']) && isset($_POST['endereco']) && isset($_POST['produto']) && isset($_POST['preco']) && isset($_POST['quantidade'])){
        $cliente = $_POST['cliente'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $produto = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $preco_total = $_POST['preco_total'];

        $sql = "insert into pedidos (cliente, endereco, telefone, produto, preco, quantidade, preco_total) values('$cliente','$endereco','$telefone','$produto','$preco','$quantidade','$preco_total')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Pedido - Full stack games</title>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!--Menu-->
    <?php
        include_once('menu.html');
    ?>
    <!--Fim do menu-->
    <h2>Pedido</h2>
    <hr>
    <div class="container">
        <div>
            <form method="post" action="">
            <div class="form-group">
                <h4>Cliente:</h4>
                <input type="text" name="cliente" placeholder="Digite seu nome ..." class="form-control">
            </div>
            <div class="form-group">
                <h4>Endereço:</h4>
                <input type="text" name="endereco" placeholder="Digite seu endereço ..." class="form-control"> 
            </div>
            <div class="form-group">
                <h4>Telefone:</h4>
                <input type="number" name="telefone" placeholder="Digite seu telefone ..." class="form-control">
            </div>
            <div class="form-group">
                <h4>Produto:</h4>
                <input type="text" name="produto" placeholder="Digite o produto ..." class="form-control">
            </div>
            <div class="form-group">
                <h4>Preço:</h4>
                <input type="number" name="preco" placeholder="Digite o preço ..." class="form-control">
            </div>
            <div class="form-group">
                <h4>Quantidade:</h4>
                <input type="number" name="quantidade" placeholder="Digite a quantidade ..." class="form-control">
            </div>
            <div class="form-group">
                <h4>Total:</h4>
                <input type="number" name="preco_total" placeholder="Digite o valor total ..." class="form-control">
            </div>
            <br><br>
            <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
    
    <?php
        include_once('footer.html');
    ?>
</body>
</html>