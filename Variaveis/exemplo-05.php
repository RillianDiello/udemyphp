<?php

$nome = "Rillian";


//Escopo 1
function teste(){
	global $nome;
	echo $nome;
}

//Escopo 2
function teste2(){
	$nome = "joão";
	echo $nome . "Agora no teste 2";
	//var_dump($nome);
}


teste();

teste2();
?>