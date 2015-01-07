<?php
	$conexao = mysqli_connect("127.0.0.1","root","root","WD43");
	$dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id=$_GET[id]");
	$produto = mysqli_fetch_array($dados);
 ?>


<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>Mirror Fashion</title>

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
		<link rel="stylesheet" href="css/produto.css">
	</head>
	<body>
		<?php include ("cabecalho.php"); ?>

		<div class="produto-back">
			<div class="container">
				<div class="produto">
					<h1><?=$produto["nome"]?></h1>
					<p>Por apenas <?= $produto["preco"]?></p>

					<form action="checkout.php" method="GET">
						<input type="hidden" name="nome" value="Fuzzy Cardigan">

						<fieldset class="cores">
							<legend>Escolha a cor:</legend>

							<input type="radio" name="cor" value="verde" id="verde" checked>
							<label for="verde">
								<img src="img/produtos/foto2-verde.png" alt="verde">
							</label>

							<input type="radio" name="cor" value="rosa" id="rosa">
							<label for="rosa">
								<img src="img/produtos/foto2-rosa.png" alt="rosa">
							</label>

							<input type="radio" name="cor" value="azul" id="azul">
							<label for="azul">
								<img src="img/produtos/foto2-azul.png" alt="azul">
							</label>

						</fieldset>

						<fieldset class="tamanhos">
							<legend>Escolha o tamanho:</legend>
							<input type="range" min="36" max="46" value="42" step="2" name="tamanho" id="tamanho">
						</fieldset>

						<input type="submit" class="comprar" value="Comprar">
					</form>
				</div>

				<div class="detalhes">
					<h2>Detalhes do produto</h2>

					<p> <?= $produto["descricao"] ?> </p>

					<table>

						<thead>
							<tr>
								<th>Caracteristicas</th>
								<th>Detalhes</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Modelo</td>
								<td>Cadigã 7845</td>
							</tr>
							<tr>
								<td>Material</td>
								<td>Algodão e Poliester</td>
							</tr>
							<tr>
								<td>Cores</td>
								<td>Azul,Rosa e Verde</td>
							</tr>
							<tr>
								<td>Lavagem</td>
								<td>Lavar a mão</td>
							</tr>

						</tbody>
					</table>
				</div>

			</div>
		</div>

		<?php include ("rodape.php"); ?>

	</body>
</html>