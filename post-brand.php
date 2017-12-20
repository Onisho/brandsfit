<?php
$dbhost 		= 'localhost';
$dbname 		= 'brandsfit';
$dblogin 	    = 'brandsfit';
$dbpassword 	= 'eiiK45!0';
$dbtable        = 'brand';

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

//echo "leeftijd: ".$strLeeftijd."<br />";
//echo "bedrijf: ".$bedrijf."<br />";
//echo "regio: ".$strRegio."<br />";
//echo "plek: ".$strPlek."<br />";
//echo "aantal clubs: ".$aantalclubs."<br />";
//echo "<br />";
//echo "naam: ".$naam."<br />";
//echo "email: ".$email."<br />";
//echo "telefoon: ".$telefoon."<br />";


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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="[ENTER SITE DESCRIPTION HERE]">
    <meta name="author" content="[ENTER AUTHOR INFO HERE]">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">

    <! -- WE ASSUME YOU ARE USING A main.css FOR CSS CUSTOMIZATION -->
    <!-- link rel="stylesheet" href="./css/main.css"> -->
    <! -- DOWNLOAD LAST VERSION IN http://modernizr.com/ -->
    <!-- script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script> -->
</head>

<body class="steps">
  
<section>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1>Bedankt om je aan te melden!</h1>
        <p>Bedankt voor het aanmelden van je club/brand op www.brandsfit.com.</p>
        <p>Ik contacteer U zo snel mogelijk om concreet te praten over wat Brandsfit voor U kan betekenen.</p>
        <p><img src="img/jip.png" alt="jip" /><br />Jip Maathuis</p>
        <p><a href="http://www.brandsfit.com" class="btn btn-default">Homepage</a></p>
      </div>
    </div>
  </div>
</section>

<!--[if IE]>
        <script src="https://cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Start coding here -->

</form>
<!-- Coding End -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5467127-49', 'auto');
  ga('send', 'pageview');

</script>
</body>

</html>