<?php
include_once "conexao.inc.php";
include_once "../classes/produto.inc.php";
include_once "../utils/funcoesUteis.php";

class ProdutoDao{
    private $con;

    function __construct(){
        $c = new Conexao();
        $this->con = $c->getConexao();
    }

    public function incluirProduto(Produto $produto){
        $sql = $this->con->prepare("insert into produtos 
        (nome, descricao, data_fabricacao, resumo, preco, estoque, referencia, cod_fabricante) values 
        (:nom, :desc, :data, :res, :preco, :est, :ref, :fab)");
         $sql->bindValue(':nom', $produto->getNome());
         $sql->bindValue(':desc', $produto->getDescricao());
         $sql->bindValue(':res', $produto->getResumo());
         $sql->bindValue(':preco', $produto->getPreco());
         $sql->bindValue(':est', $produto->getEstoque());
         $sql->bindValue(':ref', $produto->getReferencia());
         $sql->bindValue(':fab', $produto->getFabricante());
         $sql->bindValue(':data', converteDataMysql($produto->getDataFabricacao()));
         $sql->execute();
    }

    public function excluirProduto($id){
        $sql = $this->con->prepare("delete from produtos where produto_id=:id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    public function alterarProduto(Produto $produto){
         $sql = $this->con->prepare("update produtos set nome=:nom, descricao=:desc, resumo=:res, preco=:preco, estoque=:est, cod_fabricante=:fab, data_fabricacao=:data where produto_id=:id");
          $sql->bindValue(':nom', $produto->getNome());
         $sql->bindValue(':desc', $produto->getDescricao());
         $sql->bindValue(':res', $produto->getResumo());
         $sql->bindValue(':preco', $produto->getPreco());
         $sql->bindValue(':est', $produto->getEstoque());
         $sql->bindValue(':fab', $produto->getFabricante());
         $sql->bindValue(':data', converteDataMysql($produto->getDataFabricacao()));
         $sql->bindValue(':id', $produto->getProduto_id());
         $sql->execute();
    }

    public function getProduto($id){
        $sql = $this->con->prepare("select * from produtos where produto_id=:id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        $row = $sql->fetch(PDO::FETCH_OBJ);
       
            $produto = new Produto();
            $produto->setProduto_id($row->produto_id);
            $produto->setNome($row->nome);
            $produto->setDescricao($row->descricao);
            $produto->setResumo($row->resumo);
            $produto->setPreco($row->preco);
            $produto->setDescricao($row->descricao);
            $produto->setDataFabricacao($row->data_fabricacao);
            $produto->setEstoque($row->estoque);
            $produto->setReferencia($row->referencia);
            $produto->setFabricante($row->cod_fabricante);
 
            return $produto;
        
        }
        


    public function getProdutos(){
        $rs = $this->con->query("select * from produtos");

        $lista = array();
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            $produto = new Produto();
            $produto->setProduto_id($row->produto_id);
            $produto->setNome($row->nome);
            $produto->setDescricao($row->descricao);
            $produto->setResumo($row->resumo);
            $produto->setPreco($row->preco);
            $produto->setDescricao($row->descricao);
            $produto->setDataFabricacao($row->data_fabricacao);
            $produto->setEstoque($row->estoque);
            $produto->setReferencia($row->referencia);
            $produto->setFabricante($row->cod_fabricante);

            $lista[] = $produto;
        }
        return $lista;
    }
}


?>