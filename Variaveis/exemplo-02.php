<?php
$anoNascimento = 1990;
//;

$nome1 = "joao";

$sobreNome = "Pedro";

;
$nomeCompleto = $nome1 ." ". $sobreNome;
echo $nomeCompleto;
echo "<br>";

unset($nomeCompleto);

if(isset($nomeCompleto)){
echo $nomeCompleto;
}
?>