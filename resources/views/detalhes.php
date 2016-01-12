<!DOCTYPE html>
<html>
<head>
	<title>Armazém</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<!--<script type="text/javascript" src="/js/bootstrap.min.js"></script>-->
</head>
<body>
	<div class="container">
		<h1>Detalhes do produto: <?php print $produto->nome ?></h1>
		<ul>
			<li><b>Valor:</b> R$ <?php print $produto->valor ?></li>
			<li><b>Descrição:</b> <?php print $produto->descricao ?></li>
			<li><b>Quantidade em estoque:</b> <?php print $produto->quantidade ?></li>
		</ul>
	</div>
</body>
</html>