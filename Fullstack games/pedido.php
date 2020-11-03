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
</head>
<body>
    <!--Menu-->
    <?php
        include_once('menu.html');
    ?>
    <!--Fim do menu-->
    <h2>Pedido</h2>
    <hr>
    <form method="post" action="">
        <h4>Cliente:</h4>
        <input type="text" name="cliente" style="width: 400px;" placeholder="Digite seu nome ...">
        <h4>Endereço:</h4>
        <input type="text" name="endereco" style="width: 400px;" placeholder="Digite seu endereço ...">
        <h4>Telefone:</h4>
        <input type="number" name="telefone" style="width: 400px;" placeholder="Digite seu telefone ...">
        <h4>Produto:</h4>
        <input type="text" name="produto" style="width: 400px;" placeholder="Digite o produto ...">
        <h4>Preço:</h4>
        <input type="number" name="preco" style="width: 400px;" placeholder="Digite o preço ...">
        <h4>Quantidade:</h4>
        <input type="number" name="quantidade" style="width: 400px;" placeholder="Digite a quantidade ...">
        <h4>Total:</h4>
        <input type="number" name="preco_total" style="width: 400px;" placeholder="Digite o valor total ...">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    
    <footer id="rodape">
        <h4>Formas de pagamento</h4>
        <p><img src="./images/fpagamentos.png" alt="Formas de pagamento"></p>
        <p>&copy; Recode pro</p>
    </footer>
</body>
</html>