<?php
require_once dirname (__FILE__). '/../../config.php';


function getParamsLogin(&$form){
    //trojargumentowy operator 
    $form['login'] = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
    $form['password'] = isset($_REQUEST['password']) ? $_REQUEST['password'] : null;
}

function validateLogin(&$form, &$messages){
    if ( ! (isset( $form ['login']) && isset( $form ['password']))){
         return false;
    }
   
    if($form ['login'] == ""){
        $messages []= 'nie podano loginu';
    }
      if($form ['password'] == ""){
        $messages []= 'nie podano hasla';
    }
    
    if( count ( $messages ) > 0 )return false;
    
    if ($form['login'] == "admin" && $form['password'] == "admin"){
        session_start();
        $_SESSION ['role'] = 'admin';
        return true;
    }
    if ($form['login'] == "user" && $form['password'] == "user"){
        session_start();
        $_SESSION ['role'] = 'user';
        return true;
    }
    
    $messages []= 'niepoprawny login lub haslo!';
    return false;
}

$form = array();
$messages = array();

getParamsLogin($form);

if(! validateLogin($form, $messages)){
    include _ROOT_PATH.'/app/security/login_view.php';
}else{
    //redirect
    header("Location: ". _APP_URL);
}
