<?php 
    require_once 'games.php';
    $j = new Jogos();
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <title>Cadastro de Jogos</title>
    <link rel="stylesheet" href="">
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
*{
	margin: 0px;
	padding: 0px;
}
body{
background-image: url("./IMG/fundo.jpg");
}
a{
color:orange;   
display: block;
	height: 55px;
	width: 400px;
	margin: 50px auto 0px auto;
	text-align: center;
}
h1{ 
	font-family: cooper black; 
	color: white;
	display: block;
	height: 55px;
	width: 400px;
	margin: 30px auto 0px auto;
	text-align: center;
}
input[type=submit]{
	background-color: orangered;
	border:none; 
}
input[type=text]{
	display: block;
	height: 55px;
	width: 400px;
	margin: 10px;
	border-radius: 30px;
	border: 2px solid black;
	font-size: 16pt;
	font-color:black;
	padding: 10px 20px;
}
input[type=number]{
	display: block;
	height: 55px;
	width: 400px;
	margin: 10px;
	border-radius: 30px;
	border: 2px solid black;
	font-size: 16pt;
	font-color:black;
	padding: 10px 20px;
}
input[type=submit]{
	display: block;
	height: 55px;
	width: 400px;
	margin: 10px;
	border-radius: 30px;
	border: 2px solid black;
	font-size: 16pt;
	font-color:black;
	padding: 10px 20px;
}
div#corpo-form{
	border-radius:30px;  
    height: 380px;
	width: 420px;
	margin:10px auto 0px auto;
	
}
img{
	border-radius:225px;
	height: 225px;
	display: block;
	margin-left: auto;
	margin-right: auto;
	width: 24em;
	border-color:black;
}
div#msg-sucesso{
    width: 400px;
   margin: 54px auto;
   padding: 10px;
   background-color: rgba(50,205,50, .3);
   border: 1px solid rgba(34,139,34);
}
div.msg-erro{
    width: 400px;
   margin: 10px auto;
   padding: 10px;
   background-color: rgba(250, 128, 114,.3);
   border: 1px solid rgba(165, 42, 42);

}

</style>
<body>
	<img src="IMG/logo.png" alt="">
	<div id="corpo-form">
	<h1>CADASTRO DE JOGOS</h1>
    <form method="POST" name="form" onsubmit="return validar()">
        <input type="file" name="image" >
        <input type="text" name="nome" placeholder="Nome do jogo" maxlength="30">
        <input type="number" name="quantidade" placeholder="Quantidade" maxlength="42">
    	<input id="input" type="number" step="0.10" name="preco" placeholder="Preço" maxlength="8">
        <input type="submit" name="new game" value="Publicar acessorios" >
    	
    </form>	
    </div>
<?php
if(isset($_POST['nome'])){
    $img =addslashes($_POST['image']);
    $nome =addslashes($_POST['nome']);
    $quantidade =addslashes($_POST['quantidade']);
    $preco =addslashes($_POST['preco']);
   if (!empty($img) && !empty($img) && !empty($quantidade) && !empty($preco))
   {
         $j->conectar("test","localhost","root","");
        if($j->msgErro == "")
        {  
               if($j->cadastrar($img,$nome,$quantidade,$preco))
               {
                   echo"<br>";
                   ?>
                   <div id="msg-sucesso">
                   Cadastrado com sucesso!
               </div>
                   <?php
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                    Jogo ja cadastrado!
                </div>
                    <?php
                }
        }
        else
        {
            echo "Erro: ".$j->msgErro;
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
