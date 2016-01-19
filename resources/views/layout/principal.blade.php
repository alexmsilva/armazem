<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    
		<title>Armazém</title>
		<link rel="stylesheet" type="text/css" href="/css/app.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
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
					@if (Auth::guest())
						<li><a href="/login">Login</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								{{Auth::user()->name}} <span class="caret"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
							</ul>
						</li>
                    @endif
				</ul>
			</div>
		</nav>
		<div class="container">@yield("conteudo")</div>
	</body>
</html>