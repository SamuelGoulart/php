
 <?php
    $numero = 100;

    function primoOuNao($numero)
    {
        $divisores = 0;
        for ($i = 2; $i < $numero; $i++)
            if ($numero % $i == 0) {
                $divisores++;
            }
        return $divisores;
    }

    $divisores = primoOuNao($numero);


    if ($divisores) {
        echo "Não é primo, tem $divisores divisores, além de ele mesmo é um";
    } else {
        echo "É primo!";
    }
