<?php
include_once "conexao.inc.php";
include_once "../classes/produto.inc.php";
include_once "../utils/funcoesUteis.php";

class ProdutoDao{
    private $con;

    function __construct(){ //conectando no banco de dados
        $c = new Conexao();
        $this->con = $c->getConexao();
    }


    public function incluirProduto(Produto $produto){
        $sql = $this-> con->prepare("insert into produtos (nome, data_fab, preco, estoque, descricao, resumo, referencia, cod_fab) 
        values (:nom, :dat_fab, :prec, :est,:des, :resu, :ref, :cod_f");

        $sql -> bindValue(":nom", $produto->getNome());
        $sql -> bindValue(":dat_fab", converterDataMysql($produto->getData_fab()));
        $sql -> bindValue(":prec", $produto->getPreco());
        $sql -> bindValue(":est", $produto->getEstoque());
        $sql -> bindValue(":des", $produto->getDescricao());
        $sql -> bindValue(":resu", $produto->getResumo());
        $sql -> bindValue(":ref", $produto->getResumo());
        $sql -> bindValue(":cod_f", $produto->getCodigo());
        $sql -> execute();
    }
   


   

    public function excluirProduto($id){

    }

    public function alterarProduto(Produto $produto){

    }

    public function getProduto($id){

    }

    public function getProdutos(){

    }
    
}
?>