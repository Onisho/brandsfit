<?php
$dbhost 		= 'localhost';
$dbname 		= 'brandsfit';
$dblogin 	    = 'brandsfit';
$dbpassword 	= 'eiiK45!0';
$dbtable        = 'brand';

$lang = $_POST['lang'];
$leeftijd = $_POST['leeftijd'];
$bedrijf = $_POST['bedrijf'];
$regio = $_POST['regio'];
$plek = $_POST['plek'];
$aantalclubs = $_POST['aantalclubs'];
$naam = $_POST['naam'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$strPlek = implode(", ", $_POST['plek']);
$strRegio = implode(", ", $_POST['regio']);
$strLeeftijd = implode(", ", $_POST['leeftijd']);

$db = mysql_connect($dbhost, $dblogin, $dbpassword);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");

mysql_select_db($dbname,$db);

$sql = "INSERT INTO $dbtable (date, leeftijd, bedrijf, regio, plek, aantalclubs, naam, email, telefoon) VALUES (CURRENT_TIMESTAMP, '$strLeeftijd', '$bedrijf', '$strRegio', '$strPlek', '$aantalclubs', '$naam', '$email', '$telefoon');";
$result = mysql_query($sql) or die('Could not execute query.');
?>

<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Brandsfit - Brands.Set.Match.</title>
    
  <?php
  switch($lang) {
  case fr:
  echo "<meta http-equiv='refresh' content='0;url=http://www.brandsfit.com/fr/merci'>";
  break;
  case nl:
  echo "<meta http-equiv='refresh' content='0;url=http://www.brandsfit.com/nl/bedankt'>";
  break;
  }
  ?>

</head>

<body></body>

</html>