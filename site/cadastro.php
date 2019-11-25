<!doctype html>
<html>
<head>
<title>Site responsivo Html5 e Css3</title>
<meta name="author" content="cleberleao.com"/>
<meta http-equiv="content-type" charset="utf-8"/>
<meta name="description" content="Aula Prof cleber Leão Utramig 2018" />
<meta name="keywords" content="html5, css3, responsive, responsivo" />
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body class="center clearfix">
	<header>
		<h1><a href="index.html" title="Como criar um site responsivo html5 e css3"><span></span></a></h1>
		<nav>
			<ul>
				<li><a href="index.php" class="ativo">Home</a></li>
				<li><a href="cadastro.php">cadastro</a></li>
				<li><a href="alterar.php">Alterar</a></li>
				<li><a href="excluir.php">Excluir</a></li>
			</ul>
		</nav> <!-- Fim do menu de navegação -->
	</header> <!-- fim do cabeçalho da pagina -->
	<section class="chamada">
		<h2><span>Como criar um </span>SITE RESPONSIVO <span>com</span> HTML5 <span>e</span> CSS3</h2>
		<h3>Com esta aula você irá criar um site responsivo para ser
		ser bem visualizado em desktops, tablets e smartphones.
		</h3>
	</section> <!-- setor de título e descrição do site -->
	<section class="container">
		<div>
		<form method="post" action="controle/inserir_no_banco.php">
		Codigo Produto <input type="text" name=""><br>
		Descrição do Produto <input type="text" name=""><br>
		Tipo de Medida <input type="text" name=""><br>
		Estoque <input type="number" name=""><br>
		<input type="submit" value="Cadastrar">
		</form>
		</div>
	</section> <!-- setor do meio do site -->
	<footer>
		<small class="copyleft">
			<p>Copyleft 2018 - Open Source Professor<a href="http://cleberleao.com"> Cleber Leão</a></p>
		</small> <!-- descrição de licença de uso -->
		<small class="desenvolvedor">
			<figure>
				<a href="http://cleberleao.com"><img src="img/logo_desenvolvedor.png" /></a>
			</figure> 
		</small> <!-- informação e logo desenvolvedor -->
	</footer> <!-- rodapé do site -->
</body>
</html>