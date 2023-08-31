<?php include_once("lib/includes.php");?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php get_meta();?>

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <base href="<?php echo url_site;?>">
    

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/97bdcc5c17.js"></script>

    <title><?php get_titulo(titulo_site);?></title>
  </head>
  <body>

    <nav>
      <div align="right"><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
      </button></div>

      <div class="navbar-collapse" id="navbarSupportedContent">
        <ul>
          <?php menu_page();?>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-4">
         
        </div>
        <div class="col-sm-8">
          <?php paginacao();?>
        </div>

        
      </div>
    </div>
  </body>
</html>