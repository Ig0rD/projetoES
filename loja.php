  <?php
    require_once('header.php');
    require_once('./php/categoria.class.php');
    require_once('./php/categoria.DAO.php');
    require_once('./php/item.class.php');
    require_once('./php/item.DAO.php');

    $cDAO = new CategoriaDAO;
    $iDAO = new ItemDAO;;
    $valores = array();

    if (isset($_GET['searchprod']) == false) {
        $listCategorias = $cDAO->listarCategorias(['todas']); 
        $valores = ["todas"];       
    } else {
        foreach ($_GET['searchprod'] as $value) {
            if($value !== "todas"){
                array_push($valores, intval($value));          
            } else {
                array_push($valores, $value);
            }

        }
        $listCategorias = $cDAO->listarCategorias($valores);
    }

?>
  <main>
    <div class="searchbar row blue darken-4 valign-wrapper">
        <div class="input-field col s9 offset-s1 grey-text text-lighten-3">
            <form action="" method="get">
                <select multiple  name="searchprod[]">
                    <option class="grey-text text-lighten-3" value="todas" <?php if(in_array("todas", $valores)) {echo "selected";} ?>>Todas</option>
                    <?php foreach($listCategorias as $categoria) {
                        ?>
                    <option class="grey-text text-lighten-3" value="<?php echo $categoria->getcodCategoria(); ?>" <?php if(in_array($categoria->getcodCategoria(), $valores)) {echo selected;} ?> ><?php echo $categoria->getNome(); ?></option>
                    <?php }?>
                </select>
                <label class="grey-text text-lighten-3">Pesquisar Categorias</label>
                </div>
                <div class="col s2">
                    <button class="btn-flat waves-effect waves-blue" type="submit"><i class="material-icons grey-text text-lighten-3">search</i></button>
                </div>
            </form>
    </div>
    <?php foreach ($listCategorias as $categoria) {
        $listItems = $iDAO->listarItems($categoria->getcodCategoria());  
        if(in_array($categoria->getcodCategoria(), $valores) || in_array("todas", $valores)) {
    ?>
    <div class="row container catprod z-depth-1 blue darken-3">
        <div class="cathead col s12 valign-wrapper blue darken-4">
            <h5 class="cathead grey-text text-lighten-3"><?php echo $categoria->getNome(); ?></h6>
        </div>
        <div class="row">        
        <?php foreach($listItems as $item) {?>
            <div class="col s6 m4 l3">
                <div class="center">
                    <a href="produto.php?coditem=<?php echo $item->getCodItem() ?>"><img class="responsive-img" src="<?php echo $item->getFoto() ?>" alt="produto"></a>
                </div>
                <div>
                    <p class="titleProd grey-text text-lighten-3 flow-text center-align"><b><?php echo $item->getNome() ?></b></p>
                    <p class="titleProd grey-text text-lighten-3 flow-text center-align"><b>R$: <?php echo $item->getPrecoVenda() ?></b></p>
                    <p class="truncate grey-text text-lighten-3"><?php echo $item->getDescricao() ?></p>
                </div>
            </div>
        <?php }} ?>
        </div>        
    </div>
    <?php } ?>
</main>
<?php include_once("footer.php");?>