<h2>Estrutura de decisão</h2>
<p>
    As estruturas de condição permitem executar
    blocos distintos de código dado uma condição.

    <strong>Exemplo</strong>
    <pre>
         if(condição){
            //instruções executadas
            //caso a condição seja verdadeira
         }else{
            //instruções executadas, caso 
            //a condição seja falsa.
         }
        </pre>

        </p>

        <?php
        $media = 7;

        if($media >= 6){
            echo "O aluno foi aprovado";

        }else{
            echo "O aluno foi reprovado";

        }
        ?>
<p>
-------------------------

10 < media >= 6 |aprovado
6 < media >= 3 |exame
media < 3      |reprovado
</p>

<?php
        $media = 4;

        if($media >= 6){
            echo "O aluno foi aprovado";
        }else if($media >= 3){
                echo "O aluno foi recuperação";
            }else{
            echo "O aluno foi reprovado";

        }
?>

<p>
    O PHP faz a conversão de alguns tipos para verdadeiro ou falso.

    <strong>True</strong>
    <ul>
        <li>String com texto</li>
        <li>Número maior que 0</li>
        <li>Vetor com elementos</li>
    </ul>

    <strong>False</strong>

    <ul>
        <li>String vazia</li>
        <li>Número igual a 0</li>
        <li>Vetor vazio</li>
    </ul>

</P>

<?php

 if(0){
    echo "verdadeiro";
 }else{
    echo "falso";
 }
 ?>

 <?php
   $media = 4;
   if($media >= 6 && "Quero passar de ano"){
      echo "huhuhu,sou esperto";
   }else{
      echo "Ihh, me dei mal";
   }
   ?>



     








</p>