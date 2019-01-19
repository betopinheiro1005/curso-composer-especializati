<?php

header('Content-Type: text/html; charset=utf-8');

use \GUMP;  
 
require_once './vendor/autoload.php';

$dadosForm = ['nome' => 'Carlos Ferreira', 'email' => 'carlos@especializati.com.br']; 
$regras = [
    'nome' => 'required|max_len,100|min_len,3',
    'email' => 'required|max_len,150|valid_email'
];

$is_valid = GUMP::is_valid($dadosForm, $regras);

if($is_valid === true) {
	echo "Cadastrar dados, correto!";
} else {
	print_r($is_valid);
}
