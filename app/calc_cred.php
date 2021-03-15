<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/smarty.class.php';

function getParams(&$form){
    //warunek ? co jesli prawda : co jesli falsz //pobranie paramaetrow
    $form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
    $form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
    $form['opr']= isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
}

function validate(&$form,&$messages){
    //Sprawdzenie czy wsysktie parametry podane 
    if(! (isset($form['kwota']) && isset($form['lata']) && isset($form['opr']) )){
        return false;
       
    }
          
    //Sprawdzenie ktore nie podane
    if ( $form['kwota'] == "" ){
	$messages [] = 'nie podano kwoty';
    }

    if ( $form['lata'] == "" ){
	$messages [] = 'nie podano lat';
    }

    if ( $form['opr'] == "" ){
	$messages [] = 'nie podano oprocentowania';
    }
  
    if (is_countable($messages) && (count($messages) != 0)){
        return false;
    }
   
    //Sprawdzenie czy sa liczbami całk/float
    if( ! is_numeric ($form['kwota'])){
	$messages [] ='kwota nie jest liczba całkowitą';
    }
    
    if( ! is_numeric ($form['lata'])){
	$messages [] ='Lata nie jest liczba całkowitą';
    }
    
    if( ! is_numeric ($form['opr'])){
	$messages [] ='Oprocentowanie nie jest liczba';
    }

    if (is_countable($messages) && count($messages) != 0)return false;
        else return true;
}           

function process(&$form, &$messages,&$result){
    
	$form['kwota'] = intval($form['kwota']);
	$form['lata'] = intval($form['lata']);
	$form['opr'] = floatval($form['opr']);
        
        
 
        $result = ((($form['kwota'] * ($form['opr'] * 0.01)) + $form['kwota']) / ($form['lata'] *12));
        $result = round($result);
        
   

}
$form = null;
$result = null;
$messages = array();

getParams($form);
if(validate($form, $messages)){
	process($form, $messages, $result);
}

$smarty = new Smarty();
$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Tutaj obliczysz ile nastepnych miesięcy bedziesz musial jesc suchy chleb ;-( ');
$smarty->assign('page_footer','stopa kalkulatorka');
$smarty->assign('page_header','Szablony Smarty');

//$smarty->assign('hide_intro',$hide_intro);


$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/szablon.php');