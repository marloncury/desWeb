<?php

class Produto{
      public $produto_id;
      public $nome;
      public $descricao;
      public $resumo;
      public $data_fabricacao;
      public $preco;
      public $estoque;
      public $referencia;
      public $fabricante;

      function Produto()
      {
               
      }

      function setProduto($nome, $descricao, $resumo, $data, $preco, $estoque, $referencia, $fabricante)
      {
               $this->nome = $nome;
               $this->descricao = $descricao;
               $this->resumo = $resumo;
               $this->preco = $preco;
               $this->estoque = $estoque;
               $this->referencia = $referencia;
               $this->fabricante = $fabricante;
              // $this->data_fabricacao = strtotime(str_replace('/','-',$data));
               $this->data_fabricacao = strtotime($data);
      }

      public function getProduto_id()
      {
             return $this->produto_id;
      }

      public function setProduto_id($pId)
      {
             return $this->produto_id = $pId;
      }

      public function getNome()
      {
             return $this->nome;
      }

      public function setNome($pNome)
      {
             return $this->nome = $pNome;
      }

      public function getDescricao()
      {
             return $this->descricao;
      }

      public function setDescricao($pDescricao)
      {
             return $this->descricao = $pDescricao;
      }

      public function getResumo()
      {
             return $this->resumo;
      }

      public function setResumo($pResumo)
      {
             return $this->resumo = $pResumo;
      }

      public function getPreco()
      {
             return $this->preco;
      }

      public function setPreco($pPreco)
      {
             return $this->preco = $pPreco;
      }

      public function getEstoque()
      {
             return $this->estoque;
      }

      public function setEstoque($pEstoque)
      {
             return $this->estoque = $pEstoque;
      }

      public function getDataFabricacao()
      {
             return $this->data_fabricacao;
      }

      public function setDataFabricacao($pData)
      {
             return $this->data_fabricacao = strtotime($pData);
      }

      public function getFabricante()
      {
             return $this->fabricante;
      }

      public function setFabricante($pFabricante)
      {
             return $this->fabricante = $pFabricante;
      }

      public function getReferencia()
      {
             return $this->referencia;
      }

      public function setReferencia($pReferencia)
      {
             return $this->referencia = $pReferencia;
      }
}


class Venda
{
      private $id_venda;
      private $cpf;
      private $valorTotal;
      private $data;

      function Venda($cp, $valor)
      {
          $this->cpf = $cp;
          $this->valorTotal = $valor;
          $this->data = time();
      }

      public function setId($id)
      {
            $this->id_venda = $id;
      }

      public function setCpf($cp)
      {
            $this->cpf = $cp;
      }

      public function setData($dt)
      {
            $this->data = $dt;
      }

      public function setValorTotal($total)
      {
            $this->valorTotal = $total;
      }

      public function getId()
      {
            return $this->id_venda;
      }

      public function getCpf()
      {
            return $this->cpf;
      }

      public function getData()
      {
            return $this->data;
      }

      public function getValorTotal()
      {
            return $this->valorTotal;
      }
}

class Item{
      private Produto $produto;
      private $quantidade;
      private $valorItem;      

      function __construct($produto)
      {
          $this->produto = $produto;
          $this->quantidade = 1;
          $this->valorItem = $this->produto->getPreco();
      }
      
      public function getValorItem(){
              return $this->valorItem;
      }
      
      public function setValorItem(){
              $this->valorItem = $this->quantidade * $this->produto->getPreco();
      }

      public function getQuantidade(){
              return $this->quantidade;
      }

      public function setQuantidade(){
              $this->quantidade++;
      }

      public function getProduto(){
              return $this->produto;
      }
    
}


?>
