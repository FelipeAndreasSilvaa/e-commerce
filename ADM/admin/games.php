<?php

Class Jogos
{
	private $pdo;
  public $msgErro = "";

public function conectar($nome,$host,$usuario,$senha){
     
     global $pdo;
     try {
       	$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
       } catch (PDOException $e) {
       	$msgErro = $e->getMessage();
       }  
}
public function cadastrar($img,$nome,$quantidade,$preco){
     
     global $pdo;
     $sql = $pdo->prepare("SELECT codigo FROM estoque WHERE nome = :n");
     $sql->bindValue(":n",$nome);
     $sql->execute();
     if($sql->rowCount()>0){
     	return false;
     }
     else
     {
     	$sql = $pdo->prepare("INSERT INTO estoque(img,nome,quantidade,preco) VALUES (:i,:n,:q,:p)");
     	     $sql->bindValue(":i",$img);
     	     $sql->bindValue(":n",$nome);
     	     $sql->bindValue(":q",$quantidade);
     	     $sql->bindValue(":p",$preco);
     	     $sql->execute();
     	     return true;
     }
}
}
?>