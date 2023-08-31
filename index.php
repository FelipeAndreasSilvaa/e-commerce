<?php 
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;
?>

<html>
 <head>
	 <meta charset="utf-8">
	 <title>Login</title>
	 <link rel="stylesheet" href="CSS/estilo.css">
 </head>	
  <body>
	 <img src="IMG/logo.png">
	 <div id="corpo-form">
	 <h1>LOGIN</h1>
      <form method="POST" name="form" onsubmit="return validar()">
    	<input type="email" name="email" placeholder="Email">
    	<input type="password" name="senha" placeholder="Senha">
    	<input type="submit" name="start" value="START" >
    	<a href="cadastrar.php">Ainda não é inscrito? <strong> Cadastre-se</strong></a>
      </form>	
     </div>
<?php
if(isset($_POST['email']))
{
  $email =addslashes($_POST['email']);
  $senha =addslashes(md5($_POST['senha']));

  if (!empty($email) && !empty($senha))
  {
   $u->conectar("test","localhost","root","");
   if($u->msgErro == "")
   {
     if ($u->logar($email,$senha)) 
     {
      session_start();
       $_SESSION["id_usuario"]=$email;
       header("location: dashboard.php");
     }
     else
    {
      ?>
      <div class="msg-erro">
         <h2>Email/ou Senha incorretos</h2>
      </div>
    <?php
    }
    }
    else
    {
      echo "Erro:" .$u->msgErro;
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