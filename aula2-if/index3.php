<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 3</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1 class="text-center title">Exercicio 2</h1>
        <form action="ex3.php" method="POST">
            <div class="row justify-content-center mt-5 ">

                <div class="col-md-3">
                    <div class="mb-3 text-center">

                        <label for="lado1" class="form-label text center">lado 1
                        </label>
                        <input type="text" class="form-control" name="lado1">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 text-center">

                        <label for="lado2" class="form-label text center">lado 2
                        </label>
                        <input type="text" class="form-control" name="lado2">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mb-3 text-center">

                        <label for="lado3" class="form-label text center">valor 3
                        </label>
                        <input type="text" class="form-control" name="lado3">
                    </div>
                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-md-3 ">
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary  ">Verificar</button>
                        </div>

                    </div>
                </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>