<?php
    class ContaDAO {
        private function getConexao() {
            $con = new PDO("pgsql:host=localhost;dbname=ProjetoPadel;port=5432",
            "postgres", "clinicapadel");
            return $con;
        }
 

        public function listarCategorias ($cat){
            $catfill = "";
            $con = $this->getConexao();
            for($i=0;i<count($cat);$i++){
                if($cat[0] == "todas") {
                    $catfill = "*" ;
                    break;
                } else {
                    if((i-1) == count($cat)){
                        $catfill += "?";
                    } else {
                        $catfill += "?,";
                    }
                }
            }
            $sql = 'SELECT ' + $catfill + 'FROM "Categoria"';
            $stm = $con->prepare($sql);

            for($i=1;i<=count($cat);$i++) {
                if($cat[0] == "todas") {
                    break;
                } else {
                    $stm->bindValue(i, $cat[i-1]);
                }            
            } 
            $res = $stm->execute();
            $categorias = array();
            if($res) {
                while($linha = $stm->fetch(PDO::FETCH_ASSOC)) {
                    $categoria = new Categoria($linha['codCategoria'], $linha['nome']);
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
