<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$kwota, &$lata, &$opr){
    //warunek ? co jesli prawda : co jesli falsz //pobranie paramaetrow
    $kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
    $opr = isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}

function validate(&$kwota,&$lata,&$opr,&$messages){
    //Sprawdzenie czy wsysktie parametry podane 
    if(! (isset($kwota) && isset($lata) && isset($opr) )){
        return false;
       
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
  
    if (is_countable($messages) && (count($messages) != 0)){
        return false;
    }
   
    //Sprawdzenie czy sa liczbami całk/float
    if( ! is_numeric ($kwota)){
	$messages [] ='kwota nie jest liczba całkowitą';
    }
    
    if( ! is_numeric ($lata)){
	$messages [] ='Lata nie jest liczba całkowitą';
    }
    
    if( ! is_numeric ($opr)){
	$messages [] ='Oprocentowanie nie jest liczba';
    }

    if (is_countable($messages) && count($messages) != 0)return false;
        else return true;
}           

function process(&$kwota, &$lata, &$opr, &$messages,&$result){
    global $role;
    
	$kwota = intval($kwota);
	$lata = intval($lata);
	$opr = floatval($opr);
        
        
    if($role == 'user'){
        $result = ((($kwota * ($opr * 0.01)) + $kwota) / ($lata *12));
        $result = round($result);
        
    }
    if($role == 'admin'){
        $result =((($kwota * ($opr * 0.01)) + $kwota) / ($lata *12));
        $result = round($result);
    }
}

$kwota = null;
$lata = null;
$opr = null;
$result = null;
$messages = array();

getParams($kwota, $lata, $opr);

if(validate($kwota, $lata, $opr, $messages)){
	process($kwota, $lata, $opr, $messages, $result);
}

include 'calc_cred_view.php';