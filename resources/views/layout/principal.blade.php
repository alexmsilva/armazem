<!DOCTYPE html>
<html>
	<head>
		<title>Armazém</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<!--<script type="text/javascript" src="/js/bootstrap.min.js"></script>-->
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">      
					<a class="navbar-brand" href="/produtos">Armazém da Esquina</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutoController@novo')}}">Novo</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">@yield("conteudo")</div>
	</body>
</html>