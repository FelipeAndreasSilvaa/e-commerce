<?php 
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/estilo.css">
    <script type="text/javascript" src="javascript.js"></script>
</head>	
<style>
    img{
	border-radius:225px;
	height: 225px;
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 24em;
	border-color:black;
}

</style>
<body>
	<img src="IMG/logo.png" alt="">
	<div id="corpo-form">
	<h1>CADASTRO</h1>
    <form method="POST" name="form" onsubmit="return validar()">
    	<input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
        <input type="text" name="telefone" placeholder="Telefone" maxlength="30">
        <input type="email" name="email" placeholder="Email" maxlength="42">
    	<input type="password" name="senha" placeholder="Senha" maxlength="15">
        <input type="password" name="confSenha" placeholder="Confirmar Senha" maxlength="15">
        <input type="submit" name="start" value="CADASTRAR" >
        <a href="index.php">Voltar para o<strong> Login</strong></a>

    	
    </form>	
    </div>
<?php
if(isset($_POST['nome'])){
    $nome =addslashes($_POST['nome']);
    $telefone =addslashes($_POST['telefone']);
    $email =addslashes($_POST['email']);
    $senha =addslashes (md5($_POST['senha']));
    $confSenha =addslashes(md5($_POST['confSenha']));
   if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confSenha))
   {
         $u->conectar("test","localhost","root","");
        if($u->msgErro == "")
        {  if($senha == $confSenha){
               
               if($u->cadastrar($nome,$telefone,$email,$senha))
               {
                   echo"<br>";
                   ?>
                   <div id="msg-sucesso">
                   Cadastrado com sucesso! Acesse pelo login!
               </div>
                   <?php
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                    Email ja cadastrado!
                </div>
                    <?php
                }
            }
            else 
            {
                ?>
                <div class="msg-erro">
               Email e senha incorretos!
            </div>
                <?php
            }
        }
        else
        {
            echo "Erro: ".$u->msgErro;
        }
   }
   else
   {
       echo "Preencha todos os campos!";
   } 

}
?>
</body>

</html>
