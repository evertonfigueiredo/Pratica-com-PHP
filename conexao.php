<?php

$host = "127.0.0.1:3307";
$banco = "aulaphp";
$user = "root";
$password = "root";

try {
    $connection = new PDO("mysql:host=$host;dbname=$banco;charset=UTF8", $user, $password);

    if ($connection) {
        // echo "Banco conectado.";
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}

$tamanho = "1m";
$idade = "1ano";
$peso = "2kg";

//Inserir
// $inserir = $connection->prepare('
// INSERT INTO aula (tamanho, idade, peso)
// VALUES (:tamanho, :idade, :peso)
// ');
// $inserir->bindValue(':tamanho', $tamanho);
// $inserir->bindValue(':idade', $idade);
// $inserir->bindValue(':peso', $peso);
// $inserir->execute();

// if ($inserir) {
//     echo "Inserido com sucesso";
// }

//CONSULTAR
// $consultar = $connection->prepare('
// SELECT * FROM aula
// ');
// $consultar->execute();

// $consultar = $consultar->fetchAll(PDO::FETCH_OBJ);

// if ($consultar) {
//     foreach ($consultar as $animal) {
//         echo $animal->tamanho;
//         echo "<br>";
//     }
// }





