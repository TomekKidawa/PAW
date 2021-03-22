<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
     private $msgs;
     private $form;
     private $result;
     
     
     
     public function __construct(){
        $this -> msgs = new Messages();
        $this -> form = new CalcForm();
        $this -> result = new CalcResult();
     }
     
     


    public function getParams(){
        //warunek ? co jesli prawda : co jesli falsz //pobranie paramaetrow
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->opr= isset($_REQUEST['opr']) ? $_REQUEST['opr'] : null;
    }

    public function validate(){
        //Sprawdzenie czy wsysktie parametry podane 
         if(! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->lata) )){
         return false;
       
        }

        //Sprawdzenie ktore nie podane
        if ($this->form->kwota == "" ){
            $this->msgs->addError('nie podano kwoty');
        }

        if ($this->form->lata == "" ){
             $this->msgs->addError('nie podano lat');
        }

        if ( $this->form->lata == "" ){
            $this->msgs->addError('nie podano oprocentowania');
        }

        
        
        if (! $this->msgs->isError()) {
        
            //Sprawdzenie czy sa liczbami całk/float
            if( ! is_numeric ($this->form->kwota)){
                $this->msgs->addError ='kwota nie jest liczba całkowitą';
            }

            if( ! is_numeric ($this->form->lata)){
                $this->msgs->addError ='Lata nie jest liczba całkowitą';
            }

            if( ! is_numeric ($this->form->opr)){
                $this->msgs->addError ='Oprocentowanie nie jest liczba';
            }
        }
        return ! $this->msgs->isError();
    }    
    
    
    

    public function process(){

        $this->getparams();
                
        if ($this->validate()){
            $this->form->kwota = intval($this->form->kwota );
            $this->form->lata = intval($this->form->lata);
            $this->form->opr = floatval($this->form->opr);



            $this->result->result = ((($this->form->kwota * ($this->form->opr * 0.01)) + $this->form->kwota) / ($this->form->lata *12));
            $this->result->result = round($this->result->result);

        }
        
    $this->generateView();    
    }
    
    public function generateView(){
        global $conf;
        
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);
        
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Tutaj obliczysz ile nastepnych miesięcy bedziesz musial jesc suchy chleb ;-( ');
        $smarty->assign('page_header','Szablony Smarty');
        $smarty->assign('page_footer','stopa kalkulatorka');
        
        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);
        $smarty->assign('msgs',$this->msgs);

        // 5. Wywołanie szablonu
        $smarty->display($conf->root_path.'/app/calc/szablon.php');
        
    }
}