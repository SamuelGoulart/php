<?php
// Atividade da Pasta phl
function calcularFrete($pedagios, $distancia)
{
  $custoPedagio = $pedagios * 9.4;
  $custoDistancia = $distancia * 6;

  return $custoPedagio + $custoDistancia;
}

// Atividade da Pasta da fullbanck
function salario_com_aumento($salario_atual)
{
  if ($salario_atual <= 5000) {

    $salario_com_aumento =  $salario_atual + ($salario_atual * 20) / 100;
    return $salario_com_aumento;
  } else {

    $salario_com_aumento = $salario_atual + ($salario_atual * 10) / 100;
    return $salario_com_aumento;
  }
}


//Atividade da XDinvestimentos
function conversao($valorconversao, $moeda_para_conversao)
{

  if ($moeda_para_conversao == "euro") {

    $valorconvertido = $valorconversao * 6.57;
    return $valorconvertido;
    
  } else {
       
    $valorconvertido = $valorconversao * 5.41;
    return $valorconvertido;

  }
}
