<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackgames";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        die("A conexão com o banco de dados falhou: ".mysqli_connect_error());
    }

    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];

        $sql = "insert into cometarios (nome, msg) values('$nome','$msg')";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato - Full stack games</title>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!--Menu-->
    <?php
        include_once('menu.html');
    ?>
    <!--Fim do menu-->
    <h2>Contato</h2>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="./images/email.png" alt="email" width="40px">
                <p class="lead">contato@fullstackgames.com</p>
            </div>
            <div class="col">
                <img src="./images/wapp.png" alt="whatsapp" width="60px">
                <p class="lead">11 986634923</p>
            </div>
        </div>
        <form method="post" action="">
            <div class="form-group">
                <h4>Nome:</h4>
                <input type="text" name="nome" placeholder="Digite seu nome ..." class="form-control">
            </div>
            <div class="form-group">
                <h4>Mensagem:</h4>
                <textarea name="msg" placeholder="Digite sua mensagem ..." class="form-control"></textarea>
            </div>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
        
        <?php
                $sql = "select * from cometarios";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0){
                    while ($rows = $result->fetch_assoc()){
                        echo "<br>";
                        echo "Data: ", $rows['data'], "<br>";
                        echo "Nome: ", $rows['nome'], "<br>";
                        echo "Mensagem: ", $rows['msg'], "<br>";
                        echo "<hr>";
                    }
                }else{
                    echo "Nenhum comentário ainda";
                }
        ?>
    </div>
    
    <?php
        include_once('footer.html');
    ?>
</body>
</html>