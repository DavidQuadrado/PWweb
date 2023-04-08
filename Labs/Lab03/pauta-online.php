<?php
$xml = simplexml_load_file('pauta.xml');
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Pauta de Alunos em PHP</title>
    <link rel="stylesheet" href="pauta.css">
  </head>
  <body>
    <?php

echo "<h1>Pauta de Alunos</h1>";

foreach ($xml->Aluno as $Aluno) {
  $nome = (string) $Aluno->nome;
  $StudentNo = (string) $Aluno['StudentNo'];

  $exam1 = (int) $Aluno->exam1;
  $exam2 = (int) $Aluno->exam2;

  $Nota_final =  round(($exam1 + $exam2)/2, 0); // faz a media e arredonda para cima

  echo "<div class = aluno >";
  echo "<br>";
  echo "Nº de Aluno: $StudentNo<br>";
  echo "<br>";
  echo "Nome: $nome<br>";
  echo "<br>";

  echo "<table>";
    echo "<tr>";
      echo "<td>Nota Exame 1:  </td>";
      echo "<td>$exam1</td>";
    echo "</tr>";
    echo "<tr>";
      echo "<td>Nota Exame 2:  </td>";
      echo "<td>$exam2</td>";
    echo "</tr>";
    echo "<tr class = cortabela >";
      echo "<td>Nota Final:</td>";
      echo "<td>$Nota_final</td>";
    echo "</tr>";
  echo "</table>";

  echo "<br>";

  if ($Nota_final<10)
  {
    echo"<div class = corvermelha>";
    echo"Aluno/a Reprovado/a";
    echo"</div >";
  }
  else
  {
    echo"<div class = corverde>";
    echo"Aluno/a Aprovado/a";
    echo"</div >";
  }

  echo "</div>";
 
 
}
?>
  <hr>
</body>
</html>