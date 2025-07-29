
<?php
include_once "../classes/produto.inc.php";
include_once "../dao/ProdutoDao.inc.php";

    $opcao = $_REQUEST['opcao'];
    if($opcao == 1){ //incluir
        $produto = new Produto();
        $produto->setProduto($_REQUEST['nome'], $_REQUEST['data_fab'],$_REQUEST['preco'],$_REQUEST['estoque'],$_REQUEST['descricao'],$_REQUEST['resumo'], $_REQUEST['referencia'],$_REQUEST['cod_fab']);

        $produtoDao = new ProdutoDao();
        $produtoDao->incluirProduto($produto);
        header("Location: ../controlerProduto.php?opcao=2");
    }if($opcao == 2){ //seleciona todos e exibe a pagina de produtos

        $produtoDao = new ProdutoDao();
        $produtos = $produtoDao->getProdutos();

        session_start();
        $_SESSION['produtos'] = $produtos;
        header("Location: ../views/exibirProdutos.php");
    }
?>