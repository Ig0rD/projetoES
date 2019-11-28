<?php 
    class Item {
        private $foto;
        private $codCategoria;
        private $precoVenda;
        private $nome;
        private $codItem;
        private $quantidadeDisponivel;
        private $descricao;

        function __construct ($foto, $codCategoria, $precoVenda, $nome, $codItem, $quantidadeDisponivel, $descricao){
            $this->foto = $foto;
            $this->codCategoria = $codCategoria;
            $this->precoVenda = $precoVenda;
            $this->nome = $nome;
            $this->codItem = $codItem;
            $this->quantidadeDisponivel = $quantidadeDisponivel;
            $this->descricao = $descricao;
        }
        public function getFoto (){
            return $this->foto;
        }
        public function setFoto ($f) {
            $this->foto = $f;
        }
        public function getCodCategoria (){
            return $this->CodCategoria;
        }
        public function getPrecoVenda () {
            return $this->precoVenda;
        }
        public function setPrecoVenda ($p){
            $this->precoVenda = $p;
        }
        public function getNome (){
            return $this->nome;
        }
        public function setNome ($n) {
            $this->nome = $n;
        }   
        public function getCodItem (){
            return $this->codItem;
        }     
        public function getQuantidadeDisponivel () {
            return $this->quantidadeDisponivel;
        }
        public function setQuantidadeDisponivel ($q) {
            $this->quantidadeDisponivel = $q;
        }
        public function getDescricao () {
            return $this->descricao;
        }
        public function setDescricao ($d) {
            $this->descricao = $d;
        }
    }
?>