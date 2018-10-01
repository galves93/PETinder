<link rel = "stylesheet" type = "text/css" href = "CSS/estilo.css" />


<?php

    $nome = $_POST ["nome"];
    $sobrenome = $_POST ["sobrenome"];
    $email = $_POST ["email"];
    $apelido = $_POST ["nomedeusuario"];
    $senha = $_POST ["senha"];
    $confirmasenha = $_POST ["confirmasenha"];

    include 'conection.php';

    if ($senha != $confirmasenha){
        echo "Senha errada!<br>";
        echo ' <a href = "Cadastre_se.html"> Voltar </a>';
    }

 
    if($senha == $confirmasenha) {
        echo "Cadastro realizado com sucesso!<br>";
        echo ' <a href = "contcadastro.php"> Continuar </a>';

    $sql = 'INSERT INTO `petinder`.`precadastro` (`nome`, `sobrenome`, `email`, `usuario`, `senha`) VALUES (\'' . $nome . '\', \'' . $sobrenome . '\', \'' . $email . '\', \'' . $apelido .  '\', \'' . $senha . '\');';

    $PDO->exec($sql);

    }

  //  $sql = 'INSERT INTO `petinder`.`precadastro` (`nome`, `sobrenome`, `email`, `usuario`, `senha`) VALUES (\'' . $nome . '\', \'' . $sobrenome . '\', \'' . $email . '\', \'' . $apelido .  '\', \'' . $senha . '\');';

  //  $PDO->exec($sql);

/*
    $connect = mysqli_connect('localhost','root','senha');
    $db = mysqli_select_db($connect,"petinder")
    $query_select = "SELECT nomedeusuario FROM usuario WHERE nomedeusuario = '$apelido'";
    $select = mysqli_query($query_select,$connect);
    $array = mysqli_fetch_array($select);
    $logarray = $array['login'];

      if($apelido == "" || $apelido == null){
        echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.html';</script>";

        }else{
          if($logarray == $apelido){

            echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.html';</script>";
            die();

          }else{
            $query = "INSERT INTO usuarios (login,senha) VALUES ('$apelido','$senha')";
            $insert = mysql_query($query,$connect);

            if($insert){
              echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.html'</script>";
            }else{
              echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.html'</script>";
            }
          }
        }

*/





?>


<!--<!DOCTYPE HTML>

<html>

	<head>
		<meta CHARSET = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "CSS/estilo.css" />
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
								<!--<li><a href = "Blog.html" class = "navegacao"> Blog </a></li>--
								<li><a href = "Contato.html" class = "navegacao"> Contato </a></li>

							</ul>
						</nav>

					<div class = "logo">
						<h1> PROJETO<br/>PETinder </h1>
						<img src = "Imagens/teste.jpg"/>
					</div>
				</header>

			<div>

			<section id = "txtcadastro">
				<br/>
				<h2> FAÇA SEU CADASTRO </h2>
				<p> Preencha os campos e faça seu cadastro.
					</p>

			</section>


			<section id = "precadastro">
				<fieldset>
					<form name = "precadastro" action = "Cadastre_se.php" method = "post">
							<h2>DADOS PESSOAIS</h2>
							<label for = "nome">Nome:</label>
							<input type = "text" id = "nome" name = "nome" placeholder = "Digite seu nome"/><br/><br/>
							<label for = "sobrenome">Sobrenome:</label>
							<input type = "text" id = "sobrenome" name = "Sobrenome" placeholder = "Digite seu sobrenome"/><br/><br/>
							<!-- Data de nascimento	Data de Nascimento
                           <input type = "text" name = "dia" placeholder = "Dia" size = "2" maxlength = "2"/>
							<input type = "select" name = "mes" placeholder = "Mês" size = "2" maxlength = " /2">
							<input type = "text" name = "ano" placeholder = "Ano" size = "4" maxlength = "4"/>
							--							<h2>DADOS CADASTRAIS</h2>
							<label for = "email">E-Mail:</label>
							<input type = "text" id = "email" name = "email" placeholder = "Digite um E-Mail"/><br/><br/>
							<label for = "nomeusuario">Nome de Usuário:	</label>
							<input type = "text" id = "nomeusuario" name = "nomedeusuario" placeholder = "Digite Nome de Usuário"/><br/><br/>
							<label for = "senha">Senha:</label>
							<input type = "password" id = "senha" name = "Senha" placeholder = "Digite uma Senha"><br/><br/>
							<label for = "confirmasenha">Confirmar Senha:</label>
							<input type = "password" id = "confirmasenha" name = "ConfirmarSenha" placeholder = "Confirme sua Senha"/>

							<button type = "submit" id="btnEnviar">Enviar</button>
							<!--
							<input type = "text" name = "nome" placeholder = "Nome">
    --




					</form>
				</fieldset>
			</section>

			<footer id = "rodape">
			<p> Entre em contato pelos números... todos os diretos sao reservados
				pelos ciradores do site			</p>
			</footer>
	</body>
	</html>

-->
