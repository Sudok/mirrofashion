<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Checkout Mirror Fashion</title>
		<meta name="viewport" content="width=device-width">
	</head>
	<body>

		<h1>Ótima escolha!</h1>
		<p>Obrigado por comprar na Mirror Fashion!
			Preencha seus dados para efetivar a compra.</p>

		<h2>Sua Compra</h2>

		<dl>
			<dt>Cor</dt>
			<dd> <?=$_GET["cor"]?> </dd>

			<dt>Tamanho</dt>
			<dd> <?=$_GET["tamanho"]?> </dd>

			<dt>Produto</dt>
			<dd> <?=$_GET["nome"]?> </dd>
		</dl>
	</body>
</html>