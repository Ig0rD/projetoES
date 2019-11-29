<?php
    class ItemDAO {
        private function getConexao() {
            $con = new PDO("pgsql:host=localhost;dbname=ProjetoPadel;port=5432",
            "postgres", "clinicapadel");
            return $con;
        }

        public function listarItems ($id){
            $catfill = "";
            $con = $this->getConexao();
            $sql = 'SELECT * FROM "Item" WHERE codcategoria = ?';
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $id);
            $res = $stm->execute();
            $items = array();
            if($res) {
                while($linha = $stm->fetch(PDO::FETCH_ASSOC)) {
                    $item = new Item($linha['foto'], $linha['codcategoria'], $linha['precovenda'], $linha['nome'], $linha['coditem'], $linha['quantidadedisponivel'], $linha['descricao']);
                    array_push($items, $item);
                  }
            }
            $stm->closeCursor();
            $stm = NULL;
            $con = NULL;
            return $items;
        }
        public function buscarItem ($id){
            $catfill = "";
            $con = $this->getConexao();
            $sql = 'SELECT * FROM "Item" WHERE coditem = ?';
            $stm = $con->prepare($sql);
            $stm->bindValue(1, $id);
            $res = $stm->execute();
            if($res) {
            $linha = $stm->fetch(PDO::FETCH_ASSOC);
                $item = new Item($linha['foto'], $linha['codcategoria'], $linha['precovenda'], $linha['nome'], $linha['coditem'], $linha['quantidadedisponivel'], $linha['descricao']);   
            }
            $stm->closeCursor();
            $stm = NULL;
            $con = NULL;
            return $item;
        }
    }      
?>
