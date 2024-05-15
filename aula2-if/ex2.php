
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result ex2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>


<?php
    $valor1 = $_POST['valor1'];
   

    if ($valor1 % 2 == 0){
        echo "<h1> O número é par</h1>";
    }
    else{
        echo "<h1> O número é ímpar</h1>";
    }


?>