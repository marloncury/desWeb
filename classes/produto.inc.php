<?php
class Produto{
    private string $produto_id;
    private string $nome;
    private string $descricao;
    private string $resumo;
    private string $data_fabricacao;
    private float $preco;
    private int $estoque;
    private int $referencia;
    private int $fabricante;

    public function setProduto($nome, $descricao, $resumo, $data, $preco, $estoque, $referencia, $fabricante)
    {
             $this->nome = $nome;
             $this->descricao = $descricao;
             $this->resumo = $resumo;
             $this->preco = $preco;
             $this->estoque = $estoque;
             $this->referencia = $referencia;
             $this->fabricante = $fabricante;            
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
            $this->referencia = $pReferencia;
    }
}
?>