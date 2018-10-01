<!DOCTYPE HTML>

<html>

	<head>
		<meta CHARSET = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "CSS/estilo.css" />
        <link href="https://fonts.googleapis.com/css?family=Chewy" rel="stylesheet">
		<title> PETinder </title>
	</head>

		<body>
			<div id="menu">
				<header>

						<nav>
							<ul>

								<li><a href = "Home.html" class = "navegacao"> Home </a> </li>
								<li><a href = "Quem_somos.html" class = "navegacao"> Quem Somos </a></li>
								<li><a href = "Procriação.html" class = "navegacao"> Procriação </a></li>
								<li><a href = "Vendas.html" class = "navegacao"> Vendas </a></li>
								<li><a href = "Adocao.html" class = "navegacao"> Adoção </a></li>
								<li><a href = "Cadastre_se.html" class = "navegacao"> Cadastre-se </a></li>
								<!--<li><a href = "Blog.html" class = "navegacao"> Blog </a></li>-->
								<li><a href = "Contato.html" class = "navegacao"> Contato </a></li>
                                 <li><a href = "entrar.html" class = "navegacao" id="logar" > Entrar </a></li>

							</ul>
						</nav>

					<div class = "logo">
						<h1> PROJETO<br/>PETinder </h1>
							<img src = "Imagens/teste.jpg"/>
					</div>
				</header>

			<div>
				<section id = "buscaHOME">

					<div id="divBusca">
						<!-- <button type = "select" id = "btnFiltro">Mais Filtros</button>-->
						<input type="search" id="txtBusca" placeholder="Buscar PET..."/>
						<button type = "submit" id="btnBusca">Buscar</button>
					</div>
				</section>
			</div>
				<section id = "conteudoHOME">
					<h2>PET's mais procurados no site</h2>

						<Table border = "1" id ="tabelaHOME">
							 <tr>
							  <td><img src="Imagens/dianaearya.jpg" width=60% class = "fotos">
							  <td><img src="Imagens/dianaearya.jpg" width=60% class = "fotos">
							  <td><img src="Imagens/dianaearya.jpg" width=60% class = "fotos">
							 </tr>
							 <tr>
							  <td><img src="Imagens/dianaearya.jpg" width=60% class = "fotos">
							  <td><img src="Imagens/dianaearya.jpg" width=60% class = "fotos">
							  <td><img src="Imagens/dianaearya.jpg" width=60% class = "fotos">
							 </tr>
						</Table>


					</section>


				<div id = "lateral">
					<aside>


					</aside>

					</div>
			</div>

			<footer id = "rodape">
            <?php
            echo "<p> Entre em contato pelos números... todos os diretos sao reservados
				pelos ciradores do site	</p>"
			?>
			</footer>
		</body>

</html>