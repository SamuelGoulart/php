<?php

  //Declarando um vetor
  $vetorDeInteiros = [1, 10, 2 ,5 ,50,9 ,100];

  $vetorDeStrings = ["Fulano", "Ciclano", "Beltrano de Tal", "Jucicleison"];

  // a função print_r é voltada a exibir vetores

  print_r ( $vetorDeInteiros);

  echo "<br>";
  echo "<br>";

  print_r ($vetorDeStrings);

  // a função var_dump exibe as informações sovre uma variável
  echo "<br>";
  echo "<br>";

  var_dump($vetorDeInteiros);

  echo "<br>";
  echo "<br>";

  echo $vetorDeInteiros[3]. " ,". $vetorDeStrings[0];


  $vetorComChavesDefinidas = [
    "nome" => "Fulano",
    "idade" => "32",
    "sexo" => "M",
    "renda" => 2550.50,
    "estaTrabalhando" => true,
    // vetor multidimensional
    "endereco" => [
        "rua" => "Av Tal",
        "numero" => 5001,
        "bairro" => "Jardim"
    ]
  ];

   // em php, true == 1 e false == 0

  echo "<br>";
  echo "<br>";

  print_r($vetorComChavesDefinidas);

  
  echo "<br>";
  echo "<br>";

  echo "O nome do usuário é: " . $vetorComChavesDefinidas["nome"];
  echo ", e a idade dele é: " . $vetorComChavesDefinidas["idade"];
  echo "e ele mora na rua: ". $vetorComChavesDefinidas["endereco"]["rua"];


  echo "<br>";
  echo "<br>";
  print_r($vetorComChavesDefinidas["endereco"]);

  echo "<br>";
  echo "<br>";

  if($vetorComChavesDefinidas["endereco"]["rua"] == "Av Tal" &&
    $vetorComChavesDefinidas["endereco"]["numero"] == 5001){
        echo "Sim";
    }

    echo "<br>";
    echo "<br>";
    /*
     * Percorrer vetores
     * Ultilizando laços de repetição while, for, foreach

    */

    //somar os valores do vetor de inteiros
    $soma = 0;
    for($i = 0; $i < count($vetorDeInteiros); $i++){
          
        //echo $vetorDeInteiros[$i] . " - ";
        $soma = $soma + $vetorDeInteiros[$i];
     
    }  
     echo $soma;

     echo "<br>";
     echo "<br>";

     while ($i <count($vetorDeInteiros) ) {
         $soma = $soma + $vetorDeInteiros[$i];
         $i++;
     }

     echo $soma;

     
     echo "<br>";
     echo "<br>";

     //encontrar um nome dentro do vetor, se encontar exibir "encontrado"
     foreach ($vetorDeStrings as $nome) {
         if($nome == "Ciclano")
          echo"Encontrado";
     }
     