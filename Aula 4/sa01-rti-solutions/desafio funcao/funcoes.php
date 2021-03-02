<?php
// Atividade da Pasta phl
function calcularFrete($pedagios, $distancia)
{
  $custoPedagio = $pedagios * 9.4;
  $custoDistancia = $distancia * 6;

  return $custoPedagio + $custoDistancia;
}

// Empresa fullbanck
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


//Empresa XDinvestimentos
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


// Empresa seneletro
function valor_a_pagar($quilowatts_hora)
{

  if ($quilowatts_hora > 120) {
    $valor_a_pagar = $quilowatts_hora * 0.42;
    return $valor_a_pagar;
  } else {
    $valor_a_pagar = $quilowatts_hora * 0.32;
    return $valor_a_pagar;
  }
}
