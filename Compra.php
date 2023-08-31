<?php
	session_start();
	require_once "carrinho de compras/functions/product.php";
	require_once "carrinho de compras/functions/cart.php";

	$pdoConnection = require_once "carrinho de compras/connection.php";
	$resultsCarts = getContentCart($pdoConnection);
	$totalCarts  = getTotalCart($pdoConnection);
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Compra</title>
        <script type="text/javascript" src="javascript.js"></script>
    </head>
    <style>
  form {
  border: 3px solid #f1f1f1;
}
/* Full-width inputs */

body{
background-image: url("./IMG/fundo.jpg");
}
a{
color:orange;   
display: block;
	height: 55px;
	width: 400px;
}
h1{ 
	font-family: cooper black; 
	color: white;
	display: block;
	height: 55px;
	width: 400px;
}
input[type=submit]{
	background-color: orangered;
	border:none; 
}

div#corpo-form{
	border-radius:30px;  
    height: 380px;
	width: 420px;
	
}
img{
	border-radius:225px;
	height: 225px;
	width: 400px;
	display: block;
	border-color:black;
}
    </style>
  
      
     
    <body>
      <h1>CHECKOUT</h1>
      <?php if($resultsCarts) : ?>
			<table class="table table-strip" style='color: white;'>
				<thead>
					<tr>
						<th>Produto</th>
						<th>Quantidade</th>
						<th>Preço</th>
						<th>Subtotal</th>
						<th>Ação</th>

					</tr>				
				</thead>
				<tbody>
				  <?php foreach($resultsCarts as $result) : ?>
					<tr>
						
						<td><?php echo $result['name']?></td>
						<td>
							<input type="text" name="prod[<?php echo $result['id']?>]" value="<?php echo $result['quantity']?>" size="1" />
														
							</td>
						<td>R$<?php echo number_format($result['price'], 2, ',', '.')?></td>
						<td>R$<?php echo number_format($result['subtotal'], 2, ',', '.')?></td>
						
					</tr>
				<?php endforeach;?>
				 <tr>
				 	<td colspan="3" class="text-right"><b>Total: </b></td>
				 	<td>R$<?php echo number_format($totalCarts, 2, ',', '.')?></td>
				 	<td></td>
				 </tr>
				</tbody>
				
			</table>

			<?php endif?>
      <form method="POST" name="form" onsubmit="return validar()">
    	<input type="text" name="rua" placeholder="Logadouro" maxlength="100">
      <input type="text" name="cidade" placeholder="Cidade" maxlength="80">
      <input type="text" name="cep" placeholder="Cep" maxlength="8">
      <select id="cars">
  <option value="SP">SP</option>
  <option value="MG">MG</option>
  <option value="ES">ES</option>
  <option value="RJ" selected>RJ</option>
  
		
  
</select>
      <input type="submit" name="start" value="Enviar endereço">
      <a href="../CARRINHO%20DE%20COMPRAS/carrinho.php">Voltar para o<strong>Carrinho</strong></a>
    </body>
</html>
