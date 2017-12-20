<?php
$dbhost 		= 'localhost';
$dbname 		= 'brandsfit';
$dblogin 	    = 'brandsfit';
$dbpassword 	= 'eiiK45!0';
$dbtable        = 'club';


$interesse = $_POST['interesse'];
$club = $_POST['club'];
$regio = $_POST['regio'];
$jeugdleden = $_POST['jeugdleden'];
$naam = $_POST['naam'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$functie = $_POST['functie'];


//echo "interesse: ".$interesse."<br />";
//echo "club: ".$club."<br />";
//echo "regio: ".$regio."<br />";
//echo "jeugdleden: ".$jeugdleden."<br />";
//echo "sponsors: <br />";
//foreach($_POST['sponsors'] as $sponsor){
//    echo $sponsor . '<br />';
//}
//echo "<br />";
//echo "naam: ".$naam."<br />";
//echo "email: ".$email."<br />";
//echo "telefoon: ".$telefoon."<br />";


$db = mysql_connect($dbhost, $dblogin, $dbpassword);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");


mysql_select_db($dbname,$db);

$sql = "INSERT INTO $dbtable (date, interesse, club, regio, jeugdleden, naam, email, telefoon, functie) VALUES (CURRENT_TIMESTAMP, '$interesse', '$club', '$regio', '$jeugdleden', '$naam', '$email', '$telefoon', '$functie');";
$result = mysql_query($sql) or die('Could not execute query.');
?>

<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Brandsfit - Brands.Set.Match.</title>
  <meta http-equiv="refresh" content="0;url=nl" />
</head>

<body></body>

</html>