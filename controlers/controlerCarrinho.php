<?php

include_once "../classes/produto.inc.php";
include_once "../classes/item.inc.php";
include_once "../dao/ProdutoDao.inc.php";

    $opcao = (int)$_REQUEST['opcao'];

    if($opcao == 1){ //incluir no carrinho
        $id = (int)$_REQUEST['id'];

        $produtoDao = new ProdutoDao();
        $produto = $produtoDao->getProduto($id);

        $item = new Item($produto);

        session_start();
        
        if(isset($_SESSION['carrinho'])){
            $carrinho = $_SESSION['carrinho'];
        }else{
            $carrrinho = array();
        }

        $carrinho[] = $item;

        $_SESSION['carrinho'] = $carrinho;

        header("Location: ../views/exibirCarrinho.php");
    }

?>