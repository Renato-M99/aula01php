<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php 
        $valor1 = $_POST['valor01'];
        $valor2 = $_POST['valor02'];

        if($valor1 > $valor2){
            echo "<h1>o valor 1 é o maior</h1>";
        }
        elseif($valor1 == $valor2){
            echo "<h1>Os valores são iguais</h1>";
        }
        else{
            echo "<h1>o valor 2 é o maior</h1>";
        }
      
    
    ?>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>