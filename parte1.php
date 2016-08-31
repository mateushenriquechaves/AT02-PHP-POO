<html>
    <head>
        <title>Competência 02 - Programação orientada a objetos </title>
        <meta charset="UTF-8" />
        <style>
            .livros {
                float: left;
                width: 24%;
                margin-right: 1%;
                margin-bottom: 1%;
                font-family: Trebuchet MS;
                font-size : 14pt;
                box-shadow: 1px 1px 1px black;
            }
            .link  {
                text-decoration: none;
                color: black;
                text-align: center;
                font-family: Trebuchet MS;
                font-size: 20pt;
                margin-bottom: 3%;
               
            }
             .link a{
                  text-decoration: none;
                  color: black;
                   transition: background-color 1s;

             }
            .link a:hover {
                color:white;
                background-color: slategray;
            }
        </style>
    </head>
        <body>
        <div class="link">
        <a href="parte2.php">Ver modelo somando + 10 </a>  <br><br> <a href="Models/instalar.php"> Instalar Tabela (Precisa de no mínimo um  banco " biblioteca " criado)</a>
        </div>
        <?php
        require 'Models/requestLivros.php';
        ?>

    </body>
</html>

