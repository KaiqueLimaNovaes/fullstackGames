<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Full stack games</title>
    <link rel="stylesheet" href="./Css/style.css">
    <link rel="stylesheet" href="./Css/gameBoyStyle.css">
</head>
<body>
    <!--Menu-->
    <?php
        include_once('menu.html');
    ?>
    <!--Fim do menu-->
    <!--Login gameboy-->
    <main class="gameboy">
        <div class="gameboyBody">
            <header></header>
            <section class="screen">
                <span></span>
                <div class="glass">
                    <div style="margin: 5px 5px;">
                        <form>
                            <p class="wordScreen">Player:</p>
                            <input type="text" class="wordScreen" style="background-color: #80dfa8;" placeholder="Digite seu usuário ...">
                            <br>
                            <p class="wordScreen">Password:</p>
                            <input type="text" class="wordScreen" style="background-color: #80dfa8;" placeholder="Digite sua senha ...">
                        </form>
                    </div>  
                </div>
            </section>
            <center>
                <p class="wordName" style="margin: 5px 0;">Full stack games</p>
            </center>
            <section class="action">
                <!--A table foi usada para organizar as divs na mesma linha-->
                <table class="tabela" width="100%">
                    <tr style="height: 110px;">
                        <td width="50%" height="100%" align="center">
                            <div class="directions">
                                <button class="bLeft"></button>
                                <button class="bTop"></button>
                                <button class="bRigth"></button>
                                <button class="bBottom"></button>
                            </div>
                        </td>
                        <td width="50%" height="100%" align="center" style="vertical-align: center; margin-top: 0;">
                            <button class="buttonL">Login</button>
                            <br><br>
                            <button class="buttonS">Cadastre-se</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button class="start"></button>
                        </td>
                        <td>
                            <button class="select"></button>
                        </td>
                    </tr>
                </table>
                <br>
                <center>
                    <p class="wordGeneral">Esqueci a senha</p>
                </center>
            </section>
        </div>
    </main>
    <!--Fim login gameboy-->
    <hr>  
    <footer id="rodape">
        <h4>Formas de pagamento</h4>
        <p><img src="./images/fpagamentos.png" alt="Formas de pagamento"></p>
        <p>&copy; Recode pro</p>
    </footer>
</body>
</html>