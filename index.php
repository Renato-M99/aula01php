<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1 class="text-primary">Formulário</h1>
            <form action="ex2.php" method="POST">
                <div class="form-row">
                    <div class="col-5">
                        <h5>Nome</h5><input type="text" name="name" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-5">
                        <h5>Endereço</h5><input type="text" name="rua" class="form-control"
                            placeholder="Rua">
                    </div>
                    <div class="col-5">
                        <h5>Data de Nascimento</h5><input type="text" name="data" class="form-control"
                            placeholder="Digite a data de nascimento">
                    </div>
                    <div class="col-5">
                        <h5>Bairro</h5><input type="text" name="bairro" class="form-control"
                            placeholder="Bairro">
                    </div>
                    <div class="col-5">
                        <h5>Cidade</h5><input type="text" name="cidade" class="form-control"
                            placeholder="Cidade">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Enviar">

                </div>

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
<!-- <div class="col-5">
                        <h5>Número 01</h5><input type="text" name="num1" class="form-control"
                            placeholder="Digite um valor">
                    </div>
                    <div class="col-5">
                        <h5>Número 02</h5><input type="text" name="num2" class="form-control"
                            placeholder="Digite um valor">
                    </div>
                    <input class="btn btn-primary" type="submit" value="Enviar"> -->

</html>