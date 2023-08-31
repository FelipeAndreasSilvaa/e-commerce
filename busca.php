<head>
    <meta charset="UTF-8">
    <title>Busca de Produto</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    </head>
    <body>
    <div class="top-nav-bar">
    <div class="search-box">
        <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
        <i class="fa fa-times" id="close-btn" onclick="closemenu"></i>
    
    <a href="index.html"><img src="imagens/Logo.jpg" class="logo"></a>
    <form style="width: 542px;
    height: 40px;
    margin: 5px auto; text-align: center;" action="busca.php" method="POST">
    
      <input style="width: 424px;
      height: 45px;
      float: left;
      font-family: Arial;
      font-size: 20px; border: aqua;" type="search" id="pesquisar" name="pesquisar" placeholder="Pesquisar" list="historico">
      <img style="width: 45px;
      height: 45px;
      background-color: orange;
      padding: 5px 10px;
      cursor: pointer; color: black;" src="./imagens/busca.png" class="btn">
    </form>
    </div>
    <div class="menu-bar">
    <ul>
    <li><a href="carrinho.html"><i class="fa fa-shopping-basket"></i>Cart</a></li>
    <li><a href="cadastro.php">Sign Up</a></li>
    <li><a href="Login.php">Login</a></li>
    </ul>  
    </div>
    </div>
<?php
$servidor = "localhost";
$usuarios = "root";
$senha = "";
$db="test";

$conn = mysqli_connect($servidor,$usuarios,$senha,$db);
$pesquisar = $_POST['pesquisar'];

$result_produtos = "SELECT img,id,nome,quantidade,preco FROM estoque WHERE nome like '%$pesquisar%'LIMIT 5";
$resultado_prod = mysqli_query($conn,$result_produtos);

 while($rows_prod = mysqli_fetch_array($resultado_prod)){
echo"Codigo do produto:".$rows_prod['id']."</br>";
echo"Nome do produto:".$rows_prod['nome']."</br>";
echo"Preco do produto:".$rows_prod['preco']."</br>";
echo"<br><a href ='Compra.html' >Ir para a compra</a></br>";
}
?>
<section style="    margin-top: 490px;
background: #000;
color: #fff;" class="footer">
    <div class="container text-center">
        <div class="row">
        <div class="col-md-3">
        <h1>Links Úteis</h1>
        <a href="PoliticaPriva.html"><p>Política de privacidade e segurança</p></a>
       <a href="termosUso.html"><p>Termos de uso</p></a>
        <a href="termosDev.html"><p>Termos de devolução</p></a>
        <a href="quemSomos.html"><p>Quem Somos</p></a>
    </div>
     <div class="col-md-3">
        <h1>Companhia </h1>
       <a href="contate.html"><p>Contate-nos</p></a>
       <a href="carreira.html"><p>Carreira</p></a>
        <a href="afiliado.html"><p>Filiação</p></a>
    </div>
    <div class="col-md-3">
        <h1>Redes Sociais </h1>
       <p style="font-size: 17px;"><a href=""><img src="./imagens/iconfinder fa.png"></a>Facebook</p>
       <p style="font-size: 17px;"><a href="https://api.whatsapp.com/send?phone=55551999374464&text=Entre%20em%20contato"><img src="./imagens/whatssap.png"></a>Whatssap</p>
       <p style="font-size: 17px;"><a href="https://www.instagram.com/8bits_company/?hl=pt-br"><img src="./imagens/iconfinder.png"></a>Instagram</p>
    </div>
    <div class="col-md-3 footer-image">
        <h1>Download App </h1>
        <img src="imagens/">
    </div>
    </div>
    </div>
    </section>      
</body>
</html>