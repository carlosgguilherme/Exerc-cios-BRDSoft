<?php

namespace App\classes;

class Operacoes extends Crud
{
  public function media($nota1,$nota2){
      $notaFinal = 0;
      $SomaNotas = 0;
      if($nota1 < 0 or $nota1 > 10){
          return -1;
      }else{
          if($nota2 < 0 or $nota2 > 10){
              return -1 ;
          }else{
              $SomaNotas = ($nota1+$nota2) ;
              $notaFinal = $SomaNotas / 2;
             if($notaFinal  == 10){
                 return 1 ; //"Aprovado com Distinção";
             }elseif ($notaFinal < 10 and $notaFinal >= 7){
               return 2 ; //"Aprovado";
             }else{
                 return 3 ; //"Reprovado";
             }

          }
      }
  }

  public function semana($numero){
      $semana = [
          1 => 'Domingo',
          2 => 'Segunda-Feira',
          3 => 'Terca-Feira',
          4 => 'Quarta-Feira',
          5 => 'Quinta-Feira',
          6 => 'Sexta-Feira',
          7 => 'Sábado'
      ];
      if($numero < 1 or $numero > 7){
          return -1;
      }else{
          return $semana[$numero];
      }

  }
}