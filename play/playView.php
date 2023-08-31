<html>

<head>
  <title>8 Bit Company</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../style.css">
  <link rel="icon" type="imagens/imagem" href="../imagens/icon.png" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="top-nav-bar">
    <div class="search-box">
      <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
      <i class="fa fa-times" id="close-btn" onclick="closemenu"></i>
      <a href="dashboard.php"><img src="imagens/logo.png" class="logo"></a>

      <form class="forms" action="busca.php" method="POST">

        <input type="search" id="pesquisar" name="pesquisar" placeholder="Pesquisar" list="historico">
        <!-- <img src="./imagens/busca.png" class="btn"> -->
      </form>
    </div><!--search-box-->
    <div class="menu-bar">
      <ul>
        <li><a href="CARRINHO DE COMPRAS/carrinho.php"><i class="fa fa-shopping-basket"></i>Cart</a></li>
        <li><a href="ADM/admin">Admin</a></li>
      </ul>
    </div><!--menu-bar-->
  </div><!--top-nav-bar-->

  <div class="solo-vendas">
    <?php
    require_once("playDAO.php");
    require_once("playDTO.php");

    $dao = new PlaystationDAO();
    $cod = exibirPlaytation($dao->obter($_GET['id']));

    function exibirPlaytation($c)
    {
      if ($c == null) {
        return;
      }
      echo "<div class='img-single'>";
      echo " <img src = '../imagens/" . $c->get_img() . "'><br>";
      echo "</div>";
      echo "<div class='description'>";
      echo "<h2>CODIGO:" . $c->get_id() . "</h2<br>";
      echo "<h3>NOME:" . $c->get_nome() . "</h3>";
      echo "<h4>PRECO:" . $c->get_preco() ."<br>";
      echo "</div>";
      return $c->get_id();
    }
    ?>

    <a class="btn btn-primary"
      href="../CARRINHO%20DE%20COMPRAS/carrinho.php?acao=add&iacao=add&amp;id=<?php echo $cod; ?>">Adicionar ao
      carrinho</a>
  </div>



  <!-------------------Footer---------------->
  <section class="footer">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-3">
          <h1>Links Úteis</h1>
          <a href="../PoliticaPriva.html">
            <p>Política de privacidade e segurança</p>
          </a>
          <a href="../termosUso.html">
            <p>Termos de uso</p>
          </a>
          <a href="../termosDev.html">
            <p>Termos de devolução</p>
          </a>
          <a href="../quemSomos.html">
            <p>Quem Somos</p>
          </a>
        </div>
        <div class="col-md-3">
          <h1>Companhia </h1>
          <a href="../contate.html">
            <p>Contate-nos</p>
          </a>
          <a href="../carreira.html">
            <p>Carreira</p>
          </a>
          <a href="../afiliado.html">
            <p>Filiação</p>
          </a>
        </div>
        <div class="col-md-3">
          <h1>Redes Sociais </h1>
          <p style="font-size: 17px;"><a href=""><img src="../imagens/iconfinder fa.png"></a>Facebook</p>
          <p style="font-size: 17px;"><a
              href="https://api.whatsapp.com/send?phone=55551999374464&text=Entre%20em%20contato"><img
                src="../imagens/whatssap.png"></a>Whatssap</p>
          <p style="font-size: 17px;"><a href="https://www.instagram.com/8bits_company/?hl=pt-br"><img
                src="../imagens/iconfinder.png"></a>Instagram</p>
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