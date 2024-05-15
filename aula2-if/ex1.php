<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result ex1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>



<?php
    $alcool = $_POST['alcool'];
    $gasolina = $_POST['gasolina'];

if($alcool > $gasolina){
    echo "<h1>Gasolina é mais barata</h1>";
}elseif($gasolina > $alcool){
    echo "<h1>Alcool é mais barato</h1>";
}else{
    echo "<h1>Tanto faz</h1>";
}

?>