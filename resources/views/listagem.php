<!DOCTYPE html>
<html>
<head>
	<title>Armazém</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<!--<script type="text/javascript" src="/js/bootstrap.min.js"></script>-->
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
			<td>
				<a href="/produtos/mostra/<?php print $p->id?>">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
</body>
</html>