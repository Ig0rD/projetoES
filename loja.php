  <?php
    require_once('header.php');
?>
  <main>
    <div class="searchbar row blue darken-4 valign-wrapper">
        <div class="input-field col s9 offset-s1 grey-text text-lighten-3">
            <form action="" name="searchprod">
                <select multiple>
                    <option class="grey-text text-lighten-3" value="todas" selected>Todas</option>
                    <option class="grey-text text-lighten-3" value="raquetes">Raquetes</option>
                    <option class="grey-text text-lighten-3" value="bolas">Bolas</option>
                    <option class="grey-text text-lighten-3" value="grips">Grips</option>
                </select>
                <label class="grey-text text-lighten-3">Pesquisar Categorias</label>
                </div>
                <div class="col s2">
                    <button class="btn-flat waves-effect waves-blue" type="submit"><i class="material-icons grey-text text-lighten-3">search</i></button>
                </div>
            </form>
    </div>
    <div class="row container catprod z-depth-1 blue darken-3">
        <div class="cathead col s12 valign-wrapper blue darken-4">
            <h5 class="cathead grey-text text-lighten-3">Categoria</h6>
        </div>
        <div class="row">
            <div class="col s6 m4 l3">
                <div class="center">
                    <a href="produto.html"><img class="responsive-img" src="https://via.placeholder.com/150" alt="produto"></a>
                </div>
                <div>
                    <p class="titleProd grey-text text-lighten-3 flow-text center-align"><b>Nome Prod</b></p>
                    <p class="truncate grey-text text-lighten-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio corrupti molestias consequatur hic cumque velit, aliquid officia mollitia ab, neque vel asperiores excepturi alias, iusto fuga corporis culpa magni in?</p>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once("footer.php");?>