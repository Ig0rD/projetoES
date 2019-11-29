<?php
    require_once('header.php');
    require_once('./php/categoria.class.php');
    require_once('./php/categoria.DAO.php');
    require_once('./php/item.class.php');
    require_once('./php/item.DAO.php');
    $iDAO = new ItemDAO;
    $itemcod = $_GET['coditem'];
    $item = $iDAO->buscarItem($itemcod); 
?>
    <main>
        <div class="container blue darken-3 produto-container">
                <div class="center prod-title">
                    <h4 class="grey-text text-lighten-3"><?php echo $item->getNome(); ?></h4>
                </div>  
                <div class="center">
                    <img class="center responsive-img" src="<?php echo $item->getFoto() ?>" alt="produto">
                </div>
                    <div class="center">
                        <h5 class="grey-text text-lighten-3">Preco por unidade: R$ <?php echo $item->getPrecoVenda() ?></h2>
                </div>
                    <div class="center">
                        <p class="center-align grey-text text-lighten-3"><?php echo $item->getDescricao() ?></p>
                </div>
                <div class="row">
                    <div class="col s6">
                        <h5 class="grey-text text-lighten-3">Status: <span class="<?php 
                        if($item->getQuantidadeDisponivel() > 0) {
                            echo "light-green-text text-accent-3";
                        } else {
                            echo "red-text";
                        }
                        ?>
                        "><?php 
                        if($item->getQuantidadeDisponivel() > 0) {
                            echo Disponível;
                        } else {
                            echo Indisponível;
                        }

                        ?></span></h5>
                    </div>
                    <div class="col s6">
                        <h5 class="grey-text text-lighten-3 right-align">Quantidade: <?php echo $item->getQuantidadeDisponivel() ?></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="center-align"><a class="waves-effect waves-light btn-large btnproduto" <?php if($item->getQuantidadeDisponivel() == 0) {echo disabled;} ?>>Fazer Compra</a>
                    </div>
                </div>
            </div>
    </main>
<?php include_once("footer.php");?>