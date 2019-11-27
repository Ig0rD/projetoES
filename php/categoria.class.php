<?php 
    class Categoria {
        private $codCategoria;
        private $nome;

        public function __construct($codCategoria, $nome){
            $this->nome = $nome;
            $this->codCategoria = $codCategoria;
            $this->itens = $itens;
        }
        public function getNome (){
            return $this->nome;
        }
        public function setNome ($n) {
            $this->nome = $n;
        }
        public function getcodCategoria () {
            return $this->codCategoria;
        }
    }
?>
