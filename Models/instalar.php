<?php

    require_once 'conexao.php';
    $pdo = conectar();

    // Monstando a tabela
    $mostarTabela = $pdo -> prepare("CREATE TABLE livros (
id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) NOT NULL,
  autor varchar(50) NOT NULL,
  custoDiario float NOT NULL,
  tempoEmprestimo int(11) NOT NULL,
  valorEmprestimo float DEFAULT NULL,
  PRIMARY KEY (id)
)");
    if($mostarTabela -> execute()){
        echo "<p style='color: green; text-align: center;'>Tabela criada com sucesso ! </p>";
    }


    $gerarDados = $pdo -> prepare("INSERT INTO `livros` (`id`, `nome`, `autor`, `custoDiario`, `tempoEmprestimo`, `valorEmprestimo`) VALUES (NULL, 'teste', 'teste', '9', '5', NULL),
  (NULL, 'teste', 'teste', '9', '5', NULL),(NULL, 'teste', 'teste', '9', '5', NULL),(NULL, 'teste', 'teste', '9', '5', NULL),(NULL, 'teste', 'teste', '9', '5', NULL),(NULL, 'teste', 'teste', '9', '5', NULL),(NULL, 'teste', 'teste', '9', '5', NULL),(NULL, 'teste', 'teste', '9', '5', NULL);");
    if($gerarDados -> execute()){
        echo "<p style='color: green; text-align: center;'>Dados gerados com sucesso ! </p>";
    }



