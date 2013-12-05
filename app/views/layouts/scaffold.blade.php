<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<style>
		table form { margin-bottom: 0; }
		form ul { margin-left: 0; list-style: none; }
		.error { color: red; font-style: italic; }
		body { padding-top: 40px; }
	</style>
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="#">Educar.com.br</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li {{Request::is('news') ? 'class="active"' : ''}}><a href="/news">Notícias</a></li>
						<li {{Request::is('categories') ? 'class="active"' : ''}}><a href="/categories">Categorias</a></li>						
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<div class="container">
		@if (Session::has('message'))
		<div class="flash alert">
			<p>{{ Session::get('message') }}</p>
		</div>
		@endif

		@yield('main')
	</div>

</body>

</html>