<!DOCTYPE html>
<html>
<head>
	<title>Armazém</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
	<h1>Listagem de Produtos</h1>
	<table class="table table-striped table-bordered table-hover">
	<?php foreach($produtos as $p): ?>
		<tr>
			<td><?php print $p->nome ?></td>
			<td><?php print $p->valor ?></td>
			<td><?php print $p->descricao ?></td>
			<td><?php print $p->quantidade ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>