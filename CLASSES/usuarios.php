<?php

Class Usuario
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
public function cadastrar($nome,$telefone,$email,$senha){
     
     global $pdo;
     $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
     $sql->bindValue(":e",$email);
     $sql->execute();
     if($sql->rowCount()>0){
     	return false;
     }
     else
     {
     	$sql = $pdo->prepare("INSERT INTO usuarios(nome,telefone,email,senha) VALUES (:n,:t,:e,:s)");
     	     $sql->bindValue(":n",$nome);
     	     $sql->bindValue(":t",$telefone);
     	     $sql->bindValue(":e",$email);
     	     $sql->bindValue(":s",$senha);
     	     $sql->execute();
     	     return true;
     }
}
 public function logar($email,$senha){
      global $pdo;
      $cmd = $pdo->prepare("SELECT id_usuario,email,senha FROM usuarios WHERE email= :e AND senha = :s");
      $cmd->BindValue(":e",$email);
      $cmd->BindValue(":s",$senha);
      $cmd->execute();
      if($cmd->rowCount() > 0){
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
         $_SESSION['id_usuario'] =['id_usuario'];
         return true;
      }else{
           return false;
      }
   }
   public function administracao($email,$senha){
     global $pdo;
     $cmd = $pdo->prepare("SELECT id FROM administracao WHERE email= :e AND senha = :s");
     $cmd->BindValue(":e",$email);
     $cmd->BindValue(":s",$senha);
     $cmd->execute();
     if($cmd->rowCount() > 0){
       $res = $cmd->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id'] = $cmd['id'];
        return true;
     }else{
          return false;
     }
  }


}
?>