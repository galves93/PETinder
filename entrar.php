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
                               
								
							</ul>
						</nav>
                    
					
					<div class = "logo">
						<h1> PROJETO<br/>PETinder </h1>
					</div>
				</header>
            </div>
                
            <div class="loginsenha">
                <section class="loginesenha">
                   <form name = "logar" action = "" method = "post">
                        <fieldset class="entrar">
                            <legend align="left" class="legendaposicao">Login/Senha</legend><Br>
                            <label for="email">Login:</label>
                            <input type = "text" id = "email" name = "email" placeholder = "Digite o Nome de Usuário ou E-Mail"/ ><Br><br>
                            <label for = "senha">Senha:</label>
							<input type = "password" id = "senha" name = "senha" placeholder = "Digite sua Senha" required><Br>
                            <br> <button type = "submit" id="btnEntrar">Entrar</button><br><br>
                            <a href="esquecersenha" class="esqueceusenha">Esqueceu a senha?</a>
                        </fieldset>
                    </form>
                </section>
            </div>
			
<?php
                            $email = $_POST["email"];
                            $senha = $_POST["senha"];
                            
                            
                                                        
                            include 'conection.php';

                       //    if ($signin = ('SELECT * FROM precadastro WHERE email = "$email" and senha = "senha"'));{
                         //   echo "<a href = "Home.html"> </a>";
                           //}
                                                       
                            
                            
                            $PDO->exec($signin);
                            
                            



?>
				
			<!--	<div id = "lateral">
					<aside>
					   
					
					</aside>
					
				</div>-->
		

			<footer id = "rodape">
			<p> Entre em contato pelos números... todos os diretos sao reservados
				pelos ciradores do site			</p>
			</footer>
		</body>

</html>