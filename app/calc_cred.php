<?php
require_once dirname(__FILE__).'/../config.php';

$kwota = $_REQUEST ['kwota'];
$lata = $_REQUEST ['lata'];
$opr = $_REQUEST ['opr'];

//Sprawdzenie czy wsysktie parametry podane 
if(! (isset($kwota) && isset($lata) && isset($opr) )){
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

//Sprawdzenie ktore nie podane
if ( $kwota == "" ){
	$messages [] = 'nie podano kwoty';
}

if ( $lata == "" ){
	$messages [] = 'nie podano lat';
}

if ( $opr == "" ){
	$messages [] = 'nie podano oprocentowania';
}

//Sprawdzenie czy sa liczbami całk/float
if( empty($messages)){
	if( ! is_numeric ($kwota)){
		$messages [] ='kwota nie jest liczba całkowitą';
	}
	if( ! is_numeric ($lata)){
		$messages [] ='Lata nie jest liczba całkowitą';
	}
	if( ! is_numeric ($opr)){
		$messages [] ='Oprocentowanie nie jest liczba';
	}
}
	
	
if( empty($messages)){
	
	$kwota = intval($kwota);
	$lata= intval($lata);
	$opr= floatval($opr);
	
	
$x = (($kwota * ($opr * 0.01)) + $kwota);
$results = $x / ($lata *12);
$results=round ($results);
}


include 'calc_cred_view.php';