<?php
      require_once '../classes/produto.inc.php';
      require_once '../classes/item.inc.php';

      require_once 'includes/cabecalho.inc.php';
      $carrinho = $_SESSION['carrinho'];
    
?>

<h1 class="text-center">Carrinho de compra</h1>
<p> 
<?php
     // validação de carrinho vazio

?>
<div class="table-responsive">
<table class="table table-ligth table-striped">
      <thead class="table-danger">
            <tr class="align-middle" style="text-align: center">
                <th witdh="10%">Item No</th>
                <th>Ref.</th>
                <th>Nome</th>
                <th>Fabricante</th>
                <th>Preço</th>
                <th>Qde.</th>
                <th>Total</th>                
                <th>Remover</th>
            </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
            $cont = 1;
            $soma = 0;

          foreach($carrinho as $item){            
      ?>
            <tr class="align-middle" style="text-align: center">
                  <td><?= $cont?></td>
                  <td><?= $item->getProduto()->getProduto_id()?></td>
                  <td><?= $item->getProduto()->getNome()?></td>
                  <td><?= $item->getProduto()->getFabricante()?></td>
                  <td>R$<?=number_format($item->getValorItem(),2,',','.')?></td>
                  <td>1</td>
                  <td>R$<?= number_format($item->getValorItem(),2,',','.')?></td>
                  <td><a href="../controlers/controlerCarrinho.php?opcao=2&index=<?=$cont-1?>" class='btn btn-danger btn-sm'>X</a></td>
                  
            </tr>

            <?php
            $soma += $item->getValorItem();
            $cont++;
            }
            ?>
            <tr align="right"><td colspan="8"><font face="Verdana" size="4" color="red"><b>Valor Total = R$ <?= number_format($soma,2,',','.')?></b></font></td></tr>
      </table> 
      <div class="container text-center">
            <div class="row">
                  <div class="col">
                        <a class="btn btn-warning" role="button" href="../controlers/controlerProduto.php?opcao=6"><b>Continuar comprando</b></a>
                  </div>
                  <div class="col">
                        <a class="btn btn-danger" role="button" href="#"><b>Esvaziar carrinho</b></a>
                  </div>
                  <div class="col">
                        <a class="btn btn-success" role="button" href="#"><b>Finalizar compra</b></a>
                  </div>
            </div>
      </div>

<?php
     require_once 'includes/rodape.inc.php';
?>