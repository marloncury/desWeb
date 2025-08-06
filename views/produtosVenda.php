
<?php
      include_once '../classes/produto.inc.php';
      include_once 'includes/cabecalho.inc.php';

      $produtos = $_SESSION['produtos'];
?>
<h1 class="text-center">Show room de produtos</h1>
<p> 

<div class="row row-cols-1 row-cols-md-5 g-4">

<?php
    foreach($produtos as $produto){
      ?>

<div class="col">
    <div class="card">
      <img src="imagens/produtos/<?= $produto->getReferencia()?>.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $produto->getNome()?></h5>
        <p class="card-text"><?= $produto->getResumo()?></p>
        <h6 class="card-text text-end">Marca<?= $produto->getFabricante()?></h6>
        <h4 class="card-title">R$<?= $produto->getPreco()?></h4>
        <div class="text-end"><?php echo "<a href='../controlers/controlerCarrinho.php?opcao=1&id=".$produto->getProduto_id() ."' class='btn btn-danger'>Comprar</a>" ?></div>        
      </div>
    </div>
</div>



  <?php
      
    }
?>
</div>

<?php require_once "includes/rodape.inc.php" ?>
