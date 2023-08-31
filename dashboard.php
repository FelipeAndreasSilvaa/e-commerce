<?php
 session_start();
 if (!isset($_SESSION["id_usuario"])) {
   header("location: index.php" );
 }
?>

<html>
<head>
<title>8 Bit Company</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<link rel="icon" type="imagens/imagem" href="./imagens/icon.png" />
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<link rel="stylesheet" href="dashboard.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
</head>
   
   
<body>
<div class="top-nav-bar">
  <div class="search-box">
      <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
      <i class="fa fa-times" id="close-btn" onclick="closemenu"></i>
    <a href="dashboard.php"><img src="imagens/logo.png" class="logo"></a>
  <form class="form-busca" style=>
    <input type="search" id="pesquisar" name="pesquisar" placeholder="Pesquisar">
    <!-- <img src="./imagens/busca.png" class="btn"> -->
  </form>
  </div><!--search-->
  <div class="menu-bar">
    <ul>
      <li><a href="CARRINHO DE COMPRAS/carrinho.php"><i class="fa fa-shopping-basket"></i>Carrinho</a></li>
      <li><a href="ADM/admin">Admin</a></li>
    </ul>  
  </div>
</div><!--to-nav-bar-->
    
<section class="header" >
  <div class="side-menu" id="side-menu">
    
  <ul>
      <li>Consoles<i class="fa fa-angle-right"></i>
        <ul>
            <li><a  href="playstation.html">Playstation</a> </li>
            <li><a  href="xbox.html">Xbox</a></li>
            <li><a  href="NintendoSwitch.html">Nintendo Switch</a></li>
            <li><a  href="PortáteisNintendo.html">Portáteis Nintendo</a></li>
        </ul>
      </li>
      <li> Outros jogos<i class="fa fa-angle-right"></i>
        <ul>
            <li><a  href="jogos.html">NBA</a></li>
            <li><a  href="jogos.html">Good Of War</a></li>
            <li><a  href="jogos.html">Pes 2020</a></li>
            <li><a  href="jogos.html">The Last Of US</a></li> 
            <li><a  href="jogos.html">Call of Dutty modern Wafare</a></li>
            <li><a  href="jogos.html">Spider-Man</a></li>
            <li><a  href="jogos.html">OverWatch</a></li>
            <li><a  href="jogos.html">Raimbow Six Siege</a></li>    
        </ul>
      </li> 
      <li>Classicos<i class="fa fa-angle-right"></i>
        <ul>
            <li><a href="classicos.html">Atari</a></li>

        </ul>
      </li> 
      <li>Raridades<i class="fa fa-angle-right"></i>
        <ul>
            <li><a href="edicaoColecionador.html">Edições de colecionador</a></li>
            <li><a href="edicaoEspecial.html">Edições especiais</a></li>
        </ul>
      </li>   
      <ul>
        <li>Acessórios<i class="fa fa-angle-right"></i>
        <ul>
            <li><a href="fonesOuvido.html">Fones de ouvido</a></li>
        </ul>
      </ul>
  </div>
  <div class="slider" >
    <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imagens/Background.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="imagens/Background.png" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="imagens/Background.png" class="d-block w-100">
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#slider" data-slide-to="0" class="active"></li>
      <li data-target="#slider" data-slide-to="1"></li>
      <li data-target="#slider" data-slide-to="2"></li>
    </ol>
  </div> <!--slider-->
    
  </div>
</section><!--header-->

<!-----------------------featured-categories----------------------------->
<section class="featured-categories">
  <div class="container" style="background-color:orange;">
    <div class="row">
        <div class="col-md-4">
        <img src="imagens/streatt.png">
        </div>
        <div class="col-md-4">
        <img src="imagens/bros.png">
        </div>
        <div class="col-md-4">
        <img src="imagens/pop.png">
        </div>
        
    </div><!--row-->
  </div><!--container-->
</section><!--featured-categories-->
    
<!----------------On Sale product--------------------->
<section class="on-sale">
  <div class="container" style="background-color:white;">
      <div class="title-box">
          <h2>Anos 90</h2>   
      </div><!--title-box-->
      <div class="row">
        <div class="col-md-3">
          <div class="product-top">
            <a href="./venda/vendasView.php?id=66"> <img src="imagens/Street fight II Anos 90.png"></a>
              <div class="overlay-right">
              </div>
          </div><!--product-top-->
          <div class="product-bottom text-center">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
              <h3>Street fight II</h3>
              <h5>R$100,00</h5>
          </div><!--product-bottom text-center-->
      </div><!--col-md-3-->
      
      <div class="col-md-3">
        <div class="product-top">
          <a href="./venda/vendasView.php?id=67"><img src="imagens/Super Metroid(usado) Anos 90.jpg"></a>
            <div class="overlay-right">
            </div>
        </div><!--produt-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>Super Metroid(usado)</h3>
            <h5>R$89,00</h5>
        </div><!--product-bottom text-center-->
      </div><!--col-md-3-->
          
        <div class="col-md-3">
          <div class="product-top">
            <a href="./venda/vendasView.php?id=68"><img src="imagens/StarCraft(Usado) Anos 90.png"></a>  
                <div class="overlay-right">
                </div>
          </div><!--produtct-top-->
          <div class="product-bottom text-center">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
              <h3>StarCraft(Usado)</h3>
              <h5>R$79,00</h5>
          </div><!--product-bottom text-center-->
      </div>   <!--col-md-3--> 
            
      <div class="col-md-3">
        <div class="product-top">
        <a href="./venda/vendasView.php?id=69"><img src="imagens/Resident Evil(usado) Anos 90.png"></a>
            <div class="overlay-right">
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>Resident Evil(usado)</h3>
            <h5>R$70,00</h5>
        </div><!--product-bottom text-center-->
      </div><!--col-md-3-->
      </div>
  </div><!--container-->
</section><!--on-sale-->
    
<!------------------Novo-Produto--------------------->
<section class="new-products">
   <div class="container" style="background-color:white;">
      <div class="title-box">
        <h2>Anos 80</h2>   
      </div><!--tiotle-box-->
      <div class="row">
        <div class="col-md-3">
          <div class="product-top">
          <a href="./lancamentos/lancView.php?id=70"><img src="imagens/Galaga Anos 80.png"></a>
              <div class="overlay-right">
              </div>
          </div><!--produtic-top-->
         <div class="product-bottom text-center">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o"></i>
              <h3>Galaga </h3>
              <h5>R$80,90</h5>
          </div><!--product-bottom-->

      </div><!--row-->
      
      <div class="col-md-3">
        <div class="product-top">
            <a href="./lancamentos/lancView.php?id=71"><img src="imagens/jungle Hunt Anos 80.png"></a>
            <div class="overlay-right">
            </div>
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>jungle Hunt</h3>
            <h5>R$60,90</h5>
        </div><!--product=bottom-->
      </div><!--col-md-3-->
          
      <div class="col-md-3">
        <div class="product-top">
            <a href="./lancamentos/lancView.php?id=72"><img src="imagens/Centipede Anos 80.png"></a> 
            <div class="overlay-right">
            </div>
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>Centipede</h3>
            <h5>R$54,99</h5>
        </div><!--product=bottom-->
      </div><!--col-md-3-->
            
      <div class="col-md-3">
        <div class="product-top">
            <a href="./lancamentos/lancView.php?id=73"><img src="imagens/Prince of Persia Anos 80.png"></a> 
            <div class="overlay-right">
            </div>
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>Prince of Persia</h3>
            <h5>R$50,90</h5>
        </div><!--product=bottom-->
      </div><!--col-md-3-->

      <div class="col-md-3">
        <div class="product-top">
            <a href="./lancamentos/lancView.php?id=74"><img src="imagens/kaboom Anos 80.png"></a>
            <div class="overlay-right">
            </div>
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>kaboom</h3>
            <h5>R$80,50</h5>
        </div><!--product=bottom-->
      </div><!--col-md-3-->
      
      <div class="col-md-3">
        <div class="product-top">
            <a href="./lancamentos/lancView.php?id=75"><img src="imagens/Super Mario Bros Anos 80.png"></a>
            <div class="overlay-right">
            </div>
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>Super Mario Bros</h3>
            <h5>R$70,90</h5>
        </div><!--product=bottom-->
      </div><!--col-md-3-->
          
      <div class="col-md-3">
        <div class="product-top">
            <a href="./lancamentos/lancView.php?id=76"><img src="imagens/Megamania Anos 80.png"></a>
            <div class="overlay-right">
            </div>
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>Megamania</h3>
            <h5>R$80,90</h5>
        </div><!--product=bottom-->
      </div><!--col-md-3-->
            
      <div class="col-md-3">
        <div class="product-top">
            <a href="./lancamentos/lancView.php?id=77"><img src="imagens/Tetris Anos 80.png"></a>
            <div class="overlay-right">
            </div>
        </div><!--product-top-->
        <div class="product-bottom text-center">
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star-half-o"></i>
            <h3>Tetris </h3>
            <h5>R$60,90</h5>
        </div><!--product=bottom-->
      </div><!--col-md-3-->
          
          

      </div>
  </div> <!--container-->
</section><!--new-products-->

<!------Website features-------->

<section class="website-features">
  <div class="container">
    <div class="row">
      <div class="col-md-3 feature-box">
        <img src="imagens/seguro.png">
        <div class="feature-text">
            <p><b>CERTIFICADO SSL</b></p>
        </div><!--feature-text-->
      </div><!--col-md-3-->
        <div class="col-md-3 feature-box">
          <img src="imagens/Entregas.png">
          <div class="feature-text">
              <p><b>Receba entrega gratuita</b> para cada pedido além do preço</p>
          </div><!--feature-text-->
        </div><!--col-md-3-->
        <div class="col-md-3 feature-box">
          <img src="imagens/pagamento.png">
          <div class="feature-text">
              <p><b>Pagamento on-line através de várias opções de pagamento </b>(cartões e internet banking)</p>
          </div><!--feature-text-->
      </div><!--col-md-3-->
    </div><!--row-->
  </div><!--container-->
</section><!--website-features-->

<!-------------------Footer---------------->
<section class="footer">
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