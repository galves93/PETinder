<?php
 define ('HOST', 'localhost');
 define ('USER', 'root');
 define ('PASSWORD', '');
 define ('DB_NAME', 'petinder');

$PDO = null;

try {
    $PDO = new PDO ('mysql:host=' . HOST . ';dbname=' . DB_NAME, USER, PASSWORD);
}

catch (PDOException $e){
    echo "nao deu certo" . $e->getMessage();
}

/*
   $result = $PDO->query('select * from precadastro' );
   $rows = $result->fetchAll(PDO::FETCH_ASSOC);

   //var_dump($rows);

   echo 'nome: ' . $rows[0]['nome'];
   */


?>