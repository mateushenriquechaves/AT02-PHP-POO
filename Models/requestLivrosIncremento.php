<?php

require_once 'conexao.php';
require ("./Controllers/livrosIncremento.php");
$pdo = conectar();
$buscarTodosLivros = $pdo -> prepare("SELECT * FROM livros");
$buscarTodosLivros -> execute();
while($linha = $buscarTodosLivros -> fetch(PDO::FETCH_ASSOC)){
    $livros = new livros($linha["nome"],
        $linha["autor"],
        $linha["custoDiario"],
        $linha["tempoEmprestimo"],
        $linha["valorEmprestimo"]);

    echo "<div class='livros'> <b> Livro : </b>" . $livros -> getLivro() . "<br> <b>Autor : </b>" . $livros ->getAutor() . "<br><b> Custo Diário : </b>" . $livros -> getCustoDiario() . "<br> <b>Tempo de Empréstimo : </b>". $livros -> getTempoEmprestimo() . "<br> <b> Valor do Empréstimo :</b> " . $livros -> getValorEmprestimo() . "</div>";
}
?>