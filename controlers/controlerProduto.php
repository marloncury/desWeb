<?php

include_once "../classes/produto.inc.php";
include_once "../dao/ProdutoDao.inc.php";

$opcao = $_REQUEST['opcao'];

if($opcao == 1){ // incluir
    $produto = new Produto();
    $produto->setProduto($_REQUEST['pNome'], $_REQUEST['pDescricao'], $_REQUEST['pResumo'], $_REQUEST['pDataFabricacao'], $_REQUEST['pPreco'], $_REQUEST['pEstoque'], $_REQUEST['pReferencia'], $_REQUEST['pFabricante']);
    
    $produtoDao = new ProdutoDao();
    $produtoDao->incluirProduto($produto);

    header("Location: controlerProduto.php?opcao=2");
}

if($opcao == 2){ // selecionar todos
    $produtoDao = new ProdutoDao();
    $produtos = $produtoDao->getProdutos();

    session_start();
    $_SESSION['produtos'] = $produtos;
    if(($opcao==2) || ($opcao==6)){
        header("Location: ../views/exibirProdutos.php");
    }
    else{
        header("Location: ../views/produtosVenda.php");

    }

}

if($opcao == 3){ // exclusão
    $id = (int)$_REQUEST['id'];
    
    $produtoDao = new ProdutoDao();
    $produtoDao->excluirProduto($id);

    header("Location: controlerProduto.php?opcao=2");
}

if($opcao == 4){ // buscar produto para alterar
    $id = (int)$_REQUEST['id'];
    
    $produtoDao = new ProdutoDao();
    $produto =  $produtoDao->getProduto($id);

    session_start();
    $_SESSION['produto'] = $produto;

    header("Location: ../views/formProdutoAtualizar.php");
    
}




?>