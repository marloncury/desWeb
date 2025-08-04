<?php
include_once "conexao.inc.php";

class ClienteDao{
    private $con;

    function __construct(){
        $c = new Conexao();
        $this->con = $c->getConexao();
    }
    
    function autenticar($email, $senha){
        $sql = $this->con->prepare('select * from clientes where email = :em and senha = :pass');
        $sql->bindValue(":em", strtolower($email));
        $sql->bindValue(":pass", $senha);
        $sql->execute();

        $cliente = NULL;    
        if($sql->rowCount() == 1){
           $cliente = $sql->fetch(PDO::FETCH_OBJ);
        }
        
        return $cliente;
    }
}


?>