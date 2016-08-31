<?php

/**
 * Created by PhpStorm.
 * User: mateus
 * Date: 30/08/2016
 * Time: 00:09
 */
class livros
{
        private $livro;
        private $autor;
        private $custoDiario;
        private $tempoEmprestimo;
        private $valorEmprestimo;

        public function __construct($livro, $autor, $custoDiario, $tempoEmprestimo){
                $this -> livro = $livro;
                $this -> autor = $autor;
                $this -> custoDiario = $custoDiario;
                $this -> tempoEmprestimo = $tempoEmprestimo;
                $this -> valorEmprestimo = $this-> valorEmprestimoTotal($this -> tempoEmprestimo, $this -> custoDiario );
        }
        public function valorEmprestimoTotal($tempo, $custo){
            return (($tempo * $custo) + 10 );
        }
    /**
     * @param mixed $autor
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * @return mixed
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @return mixed
     */
    public function getLivro()
    {
        return $this->livro;
    }

    /**
     * @return mixed
     */
    public function getCustoDiario()
    {
        return $this->custoDiario;
    }
    /**
     * @return mixed
     */
    public function getTempoEmprestimo()
    {
        return $this->tempoEmprestimo;
    }

    /**
     * @return mixed
     */
    public function getValorEmprestimo()
    {
        return $this->valorEmprestimo;
    }
}