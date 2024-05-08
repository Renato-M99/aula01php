<?php
$nome = $_POST["name"];
$location = $_POST["rua"];
$dataNasc = $_POST["data"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];


echo "<p>Nome: ".$nome."</p><br>"."<p> Endereço: ".$location."</p><br>"."<p>Nasceu em: ".$dataNasc."</p><br>"."<p> Bairro".$bairro."</p><br>"
."<p>Cidade".$cidade."</p><br>";



?>

<link rel="stylesheet" href="style.css">