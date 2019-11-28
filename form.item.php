<?php 
require_once('./php/categoria.class.php');
require_once('./php/categoria.DAO.php');
$cDAO = new CategoriaDAO;
$valores = array();
foreach ($_GET['searchprod'] as $value) {
    if(isset($value)) {
        array_push($valores, $value);
    }
    if(count($valores) == 0) {
        array_push($valores,'value');
    }
}
$listCategorias = $cDAO->listarCategorias($valores);


 header("Location: ./loja.php");
?>