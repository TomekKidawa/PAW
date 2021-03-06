<?php
// php_08_bd
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
     private $form;
     private $result;
     
     
     
     public function __construct(){
        $this -> form = new CalcForm();
        $this -> result = new CalcResult();
     }
     
     


    public function getParams(){
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->opr= getFromRequest('opr');
    }

    public function validate(){
        //Sprawdzenie czy wsysktie parametry podane 
         if(! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->lata) )){
         return false;
       
        }

        //Sprawdzenie ktore nie podane
        if ($this->form->kwota == "" ){
            getMessages()->addError('nie podano kwoty');
        }

        if ($this->form->lata == "" ){
            getMessages()->addError('nie podano lat');
        }

        if ( $this->form->lata == "" ){
            getMessages()->addError('nie podano oprocentowania');
        }

        
        
        if (!getMessages()->isError()) {
        
            //Sprawdzenie czy sa liczbami całk/float
            if( ! is_numeric ($this->form->kwota)){
                getMessages()->addError ('kwota nie jest liczba całkowitą');
            }

            if( ! is_numeric ($this->form->lata)){
                getMessages() ->addError('Lata nie jest liczba całkowitą');
            }

            if( ! is_numeric ($this->form->opr)){
                getMessages() ->addError('Oprocentowanie nie jest liczba');
            }
        }
        return ! getMessages()->isError();
    }    
    
    
    

    public function action_calcCompute(){

        $this->getparams();
                
        if ($this->validate()){
            
            $this->form->kwota = intval($this->form->kwota );
            $this->form->lata = intval($this->form->lata);
            $this->form->opr = floatval($this->form->opr);



            $this->result->result = ((($this->form->kwota * ($this->form->opr * 0.01)) + $this->form->kwota) / ($this->form->lata *12));
            $this->result->result = round($this->result->result);

            try{
                $database = new \Medoo\Medoo([
                    'database_type' => 'mysql',
                    'database_name' => 'kalk',
                    'server' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                    'charset' => 'utf8',
                    'collation' => 'utf8_polish_ci',
                    'port' => 3306,
                    'option' => [
                        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                    ]
                ]);

                $database->insert("wynik", [
                    "kwota" => $this->form->kwota,
                    "lata" => $this->form->lata,
                    "opr" => $this->form->opr,
                    "rata" => $this->result->result,
                    "data" => date("Y-m-d H:i:s")
                ]);
            }catch(\PDOException $ex){
                getMessages()->addError("DB Error: ".$ex->getMessage());
            
            }
        }
        
    $this->generateView();    
    }
    
    
    public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
    
    public function generateView(){
       
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Tutaj obliczysz ile nastepnych miesięcy bedziesz musial jesc suchy chleb ;-( ');
        getSmarty()->assign('page_header','Szablony Smarty');
        getSmarty()->assign('page_footer','stopa kalkulatorka');
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        // 5. Wywołanie szablonu
        getSmarty()->display('szablon.tpl');
        
    }
}