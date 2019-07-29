


<?php

SESSION_START();

$nick = $_POST['nick'];
$mail = $_POST['mail'];
$temat = $_POST['temat'];
$tresc = $_POST['tresc'];
$adres_odbiorcy = 'maciej778@op.pl';


$flaga = true;

	if(strlen($nick) < 3) 
	{		//sprawdzanie nicku
	    $flaga = false;
		$_SESSION['blad_nick'] = '<div class="blad">
		Twoje imie/nick musi posiadać co najmniej 3 znaki!</div></br>';
	}

	if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) 
	{ //sprawdzanie maila		
		$flaga = false;
		$_SESSION['blad_mail'] = '<div class="blad">
		Podaj poprawny adres e-mail!</div></br>';
	}
			
	if(strlen($temat) < 3) 
	{	//sprawdzanie tematu
	    $flaga = false;
		$_SESSION['blad_temat'] = '<div class="blad">
		Twoje temat musi posiadac co najmniej 3 znaki!</div></br>';
	}
			
	if(strlen($tresc) < 1) 
	{ //sprawdzanie tresci		
	    $flaga = false;
		$_SESSION['blad_tresc'] = '<div class="blad">
		Nic nie wpisales do pola: treść!</div></br>';
	}
			
			////////////// UDANA WALIDACJA  ///////////////////
	if($flaga) 
	{
		if(mail($adres_odbiorcy,    //adres naszej strony  
		$temat,  //temat
		'<p>Od: <b>'.$nick.'</b></p><pre>'.$tresc.'</pre>',   // tresc + nick
		'From:'.$mail.'\r\n'.'MIME-Version: 1.0'.'\r\n'.'Content-Type: text/html; charset=utf-8'.'\r\n'))  
		 header('Location:udany_formularz.php');
		 
		else 
	    {
		header('Location:nieudany_formularz.php');
		}
	}
			////////////// FAIL ///////////////////
			
	else
	{
		$_SESSION['tresc'] = $tresc;
		$_SESSION['temat'] = $temat;
		header('Location:kontakt.php');
	}






?>