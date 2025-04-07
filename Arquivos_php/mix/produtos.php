<?php
$conn = pg_connect("host=localhost dbname=produtos user=postgres password=32481024");
if (!$conn) {
    echo "Erro na conexão com o banco de dados.";
}
?>
<!DOCTYPE html5>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página Produtos</title>
        <link rel="stylesheet" type="text/css" href="produtos.css">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <body class="body"> <!--Corpo do Html-->
            <header>
                <nav class = "navigation">
                    <img clas = "logo" src="logo_ecommerce.png" alt="Logo">
                    <ul id="ul_menu">
                    <li><a href="index.php">home</a></li>
                        <li><a href="produtos.php">produtos</a></li>
                        <li><a href="#">produto</a></li>
                        <li><a href="login.php">saida</a></li>                
                    </ul>
                </nav>
            </header>
        <main>
            <div class ="conteiner">
                
                <div class="gree">
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="red">
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="blue">
                    <p>kajdksajklalaksd</p>
                    <p>kajdksajklalaksd</p>
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="yellow">
                    <img src="data:image/jpeg;base64,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" alt="">
                    <p>produto:</p>
                    <p>valor:</p>
                </div>
                <div class="gree">
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="red">
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="blue">
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="yellow">
                    <p>kajdksajklalaksd</p>
                </div>
                <div class="yellow">
                    <p>kajdksajklalaksd</p>
                </div>
                <div class="gree">
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="red">
                    <p>kajdksajklalaksd</p>
                </div>
                
                <div class="blue">
                    <p>kajdksajklalaksd</p>
                </div>
                <?php
                
                    echo("É o que?")
                
                
                ?>

            </div>
       </main> 
    </body>