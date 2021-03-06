<?php

$primeiro_numero  = $_POST["primeiro-numero"];
$segundo_numero  = $_POST["segundo-numero"];
$operacao_matematica  = $_POST["operacao-matematica"];


$resultado_final =  resultado_final($operacao_matematica, $primeiro_numero, $segundo_numero);

function resultado_final($operacao_matematica,  $primeiro_numero,  $segundo_numero)
{
    if ($operacao_matematica == "+") {

        $resultado_final = $primeiro_numero + $segundo_numero;
        return $resultado_final;
    } else if ($operacao_matematica == "-") {

        $resultado_final = $primeiro_numero - $segundo_numero;
        return $resultado_final;
    } else if ($operacao_matematica == "*") {

        $resultado_final = $primeiro_numero * $segundo_numero;
        return $resultado_final;
    } else {

        $resultado_final = $primeiro_numero / $segundo_numero;
        return $resultado_final;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <title>Calculadora PHP</title>
</head>

<body>
    <section id="form">
        <form action="calcula.php" method="POST">
            <div>
                <h1>Calculadora</h1>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10">
                    <label for="primeiro-numero" class="col-sm-2 col-form-label">Informe 1º número</label>
                    <input type="number" name="primeiro-numero" class="form-control" id="inputEmail3" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10">
                    <label for="segundo-numero" class="col-sm-2 col-form-label">Informe 2º número</label>
                    <input type="number" name="segundo-numero" class="form-control" id="inputPassword3" required>
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Operação matemática, que deseja fazer.</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao-matematica" id="gridRadios1" value="+" checked>
                        <label class="form-check-label" for="operacao-matematica">
                            Soma
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao-matematica" id="gridRadios2" value="-">
                        <label class="form-check-label" for="operacao-matematica">
                            Subtração
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao-matematica" id="gridRadios2" value="*">
                        <label class="form-check-label" for="operacao-matematica">
                            Multiplicação
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="operacao-matematica" id="gridRadios2" value="/">
                        <label class="form-check-label" for="operacao-matematica">
                            Divisão
                        </label>
                    </div>

                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </section>
    <section id="resultado">
        <h3>Resultado:</h3>
        <h4 style="float: left;"><?= $primeiro_numero . ' ' ?></h4>
        <h4 style="float: left;"><?= ' ' . $operacao_matematica ?></h4>
        <h4 style="float: left;"><?= $segundo_numero . ' =' ?></h4>

        <p> <?= $resultado_final; ?></p>
    </section>

</body>

</html>