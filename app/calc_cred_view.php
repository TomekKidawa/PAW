<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf=8" />
    <title>Kalkulator kredytowy</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    <a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button pure-button-active">Inna strona</a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_ROOT);?>/app/calc_cred.php" method="post" class="pure-form pure-form-stacked">
    
    <legend><h1 style="font-family:old english text mt ; font-size:50px">kalkulator kredytowy </h1> </legend>
    
    <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: lightgray; width:26em;" >
    <fieldset>
            <label for="id_kwota">Kwota: </label>
            <input id="id_kwota" type="text" name="kwota" value="<?php out($kwota); ?>" /><br/>
            <label for="id_kwota">Lata: </label>
            <input id="id_lata>" type="text" name="lata" value="<?php out($lata); ?>" /> <br/> 
            <label for="id_opr">Oprocentowanie: </label>
            <input id="id_opr" type="text" name="opr" value="<?php out($opr); ?>" />  <br/>
    </fieldset>
    <input type="submit" value="Oblicz" class="pure-button pure-form-primary" />
    </div>
</form>

    
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="padding: 10px 10px 10px 30px; border-radius: 0.5em; background-color: #EDCCB6; width:25.5em;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #C8DCB8; width:26em;">
<?php 
global $role;
if($role == 'user'){
echo 'User nie posiada zniżki ;-( </br></br> Miesięczna rata kredytu: '.$result. 'zł';
 }
if($role == 'admin'){
echo 'Zniżka dla admina - 5% od raty kredytu ;-)'. '</br></br> Miesięczna rata kredytu: ' .$result=round($result -($result *0.05)) . 'zł';
}
        
?>
</div>
<?php } ?>

    
</div>

</body>
</html>