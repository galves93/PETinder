
<?php /*
    $cpfcnpj = $_POST ["cpfcnpj"];
   // $nascimento = $_POST [""];
    $endereco = $_POST ["rua"];
    $numrua = $_POST ["nmr"]
    $complemento = $_POST ["complemento"];
    $bairro = $_POST ["bairro"];
    $cidade = $_POST ["cidade"];
    $uf = $_POST ["uf"];


    /* Dados do pet php */

  /*  $cpfcnpj = $_POST [""];
    $nascimento = $_POST [""];
    $endereco = $_POST [""];
    $complemento = $_POST [""];
    $bairro = $_POST [""];
    $cidade = $_POST [""];
    $uf = $_POST [""];

*/
    
?>

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
        </div>
    </header>

    <div class="contcdsto">

        <main id = "txtcadastro">
            <br/>
            <h2> FINALIZE SEU CADASTRO </h2>
            <p> Seu pré cadastro foi realizado om sucesso, por favor continue preenchendo os campos para continuar.</p>

        

        <section id = "cadastro">
            <form name = "cadastro" action = "Cadastre_se.php" method = "post">

            <fieldset class="cadastro">
                <legend aling="left">COMPLETE O CADASTRO</legend>
                    <label for = "cpfcnpj">CPF/CNPJ</label>
                    <input type = "text" id = "cpfcnpj" name = "cpfcnpj" placeholder="Digite o CPF ou CNPJ" />
                    <label for = "nascimento">Data de Nascimento </label>
                    <input type = "text" name = "dia" placeholder = "Dia" size = "2" maxlength = "2" />
                    <input type = "text" name = "mes" placeholder = "Mês" size = "2" maxlength = "2">
                    <input type = "text" name = "ano" placeholder = "Ano" size = "4" maxlength = "4"/><br>
                    <label for="cep">CEP:</label>
                    <input type="text" name="cep" placeholder="Digite o CEP" autocomplete="section-red shipping postal-code" maxlength="9" size="8" >
                    <label for = "rua">Endereço:</label>
                    <input type = "text" id = "rua" name = "rua" placeholder = "Digite seu endereço"/>
                    <label for = "nmr">Nº</label>
                    <input type = "text" id = "nmr" name = "nmr" size="2" />
                    <label for = "complemento">Complemento:</label>
                    <input type = "text" id = "complemento" name = "complemento" placeholder = "Digite a cidade" size="10"/>
                    <label for = "bairro">Bairro:</label>
                    <input type = "text" id = "bairro" name = "bairro" placeholder = "Digite o bairro" size="9"/>
                    <label for = "cidade">Cidade:</label>
                    <input type = "text" id = "cidade" name = "cidade" placeholder = "Digite a cidade" size="10"/>
                    <label for = "uf">UF:</label>
                    <input type="text" id="uf" name="uf" size="1" placeholder="UF" maxlength="2"/>
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone">

             </fieldset>


                <!--Tabela de cadastro dos pets -->
             <fieldset class="dadospet">
                    <legend>DADOS DO PET</legend>

                 <label for="motivopet">Motivo do cadastro:</label><br>
                 <input type="checkbox" name="motivopet" value="procriacao"> Procriação
                 <input type="checkbox" name="motivopet" value="venda"> Venda
                 <input type="checkbox" name="motivopet" value="adocao"> Adoção 



                 <label for = "text">Tipo</label>
                 <select id = "tipopet" name = "tipopet">

                     <option value="">Cachorro</option>
                     <option value="">Gato</option>
                     <option value="">Passaros</option>
                     <option value="">Aves</option>
                     <option value="">Cobras</option>
                     <option value="">Lagartos</option>
                     <option value="">Rato</option>
                     <option value="">Hamster</option>
                     <option value="">Chinchila</option>
                     <option value="">Furão</option>
                     <option value="">Porco</option>
                     <option value="">Macaco</option>
                     <option value="">Sagui</option>
                     <option value="">Inseto</option>
                     <option value="">Peixes</option>
                     <option value="">Porquinho-da-India</option>
                     <option value="">Tartarugas</option>

                 </select>
                    <label for = "raca">Raça:</label>
                    <input type = "text" id = "raca" name = "raca" placeholder = "Digite a raça do seu pet"/><br/><br/>
                    <label for = "idade">Idade:</label>
                    <input type = "text" id = "idade" name = "idade" size="2">
                    <label for = "sexo">Sexo:</label>
                    <select id="sexopet" name="sexopet">
                        <option value="">Macho</option>
                        <option value="">Fêmea</option>
                    </select> 
                    <label for = "corpet">Cor:</label>
                    <input type = "text" id = "corpet" name = "corpet" placeholder="Digite a cor do seu pet" />

                 <label for="temp">Temperamento Principal:</label>
                 <select>
                     <option value="">Manso</option>
                     <option value="">Calmo</option>
                     <option value="">Normal</option>
                     <option value="">Agitado</option>
                     <option value="">Ansioso</option>
                     <option value="">Nervoso</option>
                     <option value="">Bravo</option>
                     <option value="">Estressado</option>

                 </select>

                 <label for="temp">Temperamento Secundário:</label>
                 <select>
                     <option value="">Manso</option>
                     <option value="">Calmo</option>
                     <option value="">Normal</option>
                     <option value="">Agitado</option>
                     <option value="">Ansioso</option>
                     <option value="">Nervoso</option>
                     <option value="">Bravo</option>
                     <option value="">Estressado</option>

                 </select>

                 <label for="pedigree">Pedigree:</label>
                 <input type="radio" name="pedigree" value="ypedigree"/> Sim 
                 <input type="radio" name="pedigree" value="npedigree" checked/> Não 

                 <label for="temp">Porte/Tamanho:</label>
                 <select>
                     <option value="">Mini</option>
                     <option value="">Pequeno</option>
                     <option value="">Médio</option>
                     <option value="">Grande</option>
                     <option value="">Gigante</option>
                 </select>

                 <label for="vacina">Vacinado:</label>
                 <input type="radio" name="vacina" value="yvacina" checked/> Sim 
                 <input type="radio" name="vacina" value="nvacina" /> Não 

               <!--  <label for="tpvacina">Tipo de Vacina</label>
                 <select>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                 </select><Br><Br> -->

                 <label for="amamentacao">Dias Amamentando:</label>
                 <input type="number" name="amamentacao" size="1" id="amamentacao" />
                 <label for="informacao">Mais informações</label><br>
                 <textarea name="informacao" rows="10" cols="40" maxlength="1000"></textarea>

                    <br/><br/><button type = "submit" id="btnEnviar">Enviar</button>

             </fieldset>

            </form>

        </section>
    </main>

    </div>
        <footer id = "rodape">
            <p> Entre em contato pelos números... todos os diretos sao reservados
                pelos ciradores do site			</p>
        </footer>
</body>
</html>
