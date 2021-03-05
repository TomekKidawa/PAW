<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf=8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<h1 style= " margin: 20px">Kalkulator kredytowy</h1>

<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: lightgrey; width:300px;"> 

<form action="<?php print(_APP_URL);?>/app/calc_cred.php" method="post">
	<label for="id_kwota">Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset($kwota)) print($kwota); ?>" />zł<br/>
	<label for="id_kwota">Lata: </label>
	<input id="id_lata>" type="text" name="lata" value="<?php if (isset($lata)) print($lata); ?>" /> <br/> 
	<label for="id_opr">Oprocentowanie: </label>
	<input id="id_opr" type="text" name="opr" value="<?php if (isset($opr)) print($opr); ?>"  />% <br/>
	<input type="submit" value="Oblicz" />
</div>
	

<?php
if (isset ($messages)){
	print '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
	foreach ($messages as $msg){
		print '<li>'.$msg.'</li>';
	}
	print '</ol>';
}
?>

<?php
if (isset ($results)){
	print '<ol style="margin: 20px; padding: 10px; border-radius: 5px; background-color: yellowgreen; width:300px;">';
	print 'Miesięczna rata to:'. $results .'zł' ; 

}
?>

</body>
</html>