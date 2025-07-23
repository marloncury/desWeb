<?php
class Produto{
    private $id;
    private $nome;
    private $data_fab;
    private $preco;
    private $estoque;
    private $descricao;
    private $resumo;
    private $referencia;
    private $cod_fab;

    function setProduto($nome, $data_fab, $preco, $estoque, $descricao, $resumo, $referencia, $cod_fab){
        $this->nome = $nome;
        $this->data_fab = strtotime($data_fab);
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->descricao = $descricao;
        $this->resumo = $resumo;
        $this->referencia = $referencia;
        $this->cod_fab = $cod_fab;
    }

    function getId(){
        return $this->id;
    }

    function setId($id){
        $this->id = $id;
    }
    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getData_fab(){
        return $this->data_fab;
    }

    function setData($data_fab){
        $this->data_fab = strtotime($data_fab);
    }

    function getPreco(){
        return $this->preco;
    }

    function setPreco($preco){
        $this->preco = $preco;
    }

    function getEstoque(){
        return $this->estoque;
    }

    function setEstoque($estoque){
        $this->estoque = $estoque;
    }

    function getDescricao(){
        return $this->descricao;
    }

    function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    function getResumo(){
        return $this->resumo;
    }

    function setResumo($resumo){
        $this->resumo = $resumo;
    }

    function getReferencia(){
        return $this->referencia;
    }

    function setReferencia($referencia){
        $this->referencia = $referencia;
    }

    function getCodigo(){
        return $this->cod_fab;
    }

    function setCodigo($cod_fab){
        $this->cod_fab = $cod_fab;
    }


}

?>
