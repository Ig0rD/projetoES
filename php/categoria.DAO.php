<?php
    class CategoriaDAO {
        private function getConexao() {
            $con = new PDO("pgsql:host=localhost;dbname=ProjetoPadel;port=5432",
            "postgres", "clinicapadel");
            return $con;
        }
 

        public function listarCategorias ($cat){
            $catfill = "";
            $con = $this->getConexao();
            $sql = 'SELECT * FROM "Categoria"';
            $stm = $con->prepare($sql);
            $res = $stm->execute();
            $categorias = array();
            if($res) {
                while($linha = $stm->fetch(PDO::FETCH_ASSOC)) {
                    $categoria = new Categoria($linha['codcategoria'], $linha['nome']);
                    array_push($categorias, $categoria);
                  }
            }
            $stm->closeCursor();
            $stm = NULL;
            $con = NULL;
            return $categorias;
        }
    }      
?>
