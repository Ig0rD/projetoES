<?php 
    class Categoria {
        private $codCategoria;
        private $nome;

        public function __construct($codCategoria, $nome){
            $this->nome = $nome;
            $this->codCategoria = $codCategoria;
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
        public function getCategoriasSelecionadas($s) {
            if (in_array($s, $this->codCategoria)) {
                return true;
            } else {
                return false;
            }
        }
    }
?>
