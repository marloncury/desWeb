<?php        
      require_once '../classes/produto.inc.php';
      require_once '../utils/funcoesUteis.php';
      require_once 'includes/cabecalho.inc.php';   

      //session_start(); como no arquivo cabecalho.inc.php ja esta com a sessao aberta nao posso abrir outra.
      $produtos = $_SESSION['produtos'];
?>
<p>
<h1 class="text-center">Produtos do estoque</h1>
<p> 
<div class="table-responsive">
<table class="table table-light table-hover">
      <thead class="table-primary">
            <tr class="align-middle" style="text-align: center">
                <th witdh="10%">ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Data de Fabricação</th>
                <th>Preço unitário</th>
                <th>Em Estoque</th>
                <th>Fabricante</th>
                <th>Operação</th>
            </tr>
      </thead>
      <tbody class="table-group-divider">
      <?php
            foreach($produtos as $produto){

            
               echo "<tr align='center'>";
               echo "<td>".$produto->getId()."</td>";
               echo "<td><strong>".$produto->getNome()."</strong></td>";
               echo "<td>".$produto->getResumo()."</td>";
               echo "<td>".formatarData($produto->getData_fab())."</td>";
               echo "<td>".$produto->getPreco()."</td>";
               echo "<td>".$produto->getEstoque()."</td>";
               echo "<td>".$produto->getCodigo()."</td>";
               echo "<td><a href='#' class='btn btn-success btn-sm'>A</a> ";
               echo "<a href='#' class='btn btn-danger btn-sm'>X</a></td>";
               echo "</tr>";
            }
      ?>
      </tbody>  
</table>
</div>

<?php
       require_once 'includes/rodape.inc.php';
?>

