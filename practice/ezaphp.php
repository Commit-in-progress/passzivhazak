<?php
	$csatlakozas = mysqli_connect('localhost','root','','test');
	if (mysqli_connect_errno())
	{
		echo "Csatlakozási hiba, ellenőrizd hogy fut a XAMPP-on az Apache és MySQL module. ";
		exit();
	}
	$nev = $_POST["nev"];
	$email = $_POST["email"];
	$telszam = $_POST["telefonsz"];
	
	$nevregisztralas = "INSERT INTO regisztraltak(nev,email,telszam) VALUES ('".$nev."','" . $email . "','" . $telszam . "');";
	mysqli_query($csatlakozas, $nevregisztralas);
	mysqli_close($csatlakozas);
	
	header( "Location: http://localhost:80/szerkezet.html" );

?>