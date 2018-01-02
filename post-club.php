<?php
$dbhost 		= 'localhost';
$dbname 		= 'brandsfit';
$dblogin 	    = 'brandsfit';
$dbpassword 	= 'eiiK45!0';
$dbtable        = 'club';

$lang = $_POST['lang'];
$interesse = $_POST['interesse'];
$club = $_POST['club'];
$regio = $_POST['regio'];
$jeugdleden = $_POST['jeugdleden'];
$naam = $_POST['naam'];
$email = $_POST['email'];
$telefoon = $_POST['telefoon'];
$functie = $_POST['functie'];

$db = mysql_connect($dbhost, $dblogin, $dbpassword);

mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET utf8");


mysql_select_db($dbname,$db);

$sql = "INSERT INTO $dbtable (date, interesse, club, regio, jeugdleden, naam, email, telefoon, functie) VALUES (CURRENT_TIMESTAMP, '$interesse', '$club', '$regio', '$jeugdleden', '$naam', '$email', '$telefoon', '$functie');";
$result = mysql_query($sql) or die('Could not execute query.');
?>

<html class="no-js" lang="<?php echo $functie; ?>">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Brandsfit - Brands.Set.Match.</title>
  
    <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MV2GVXH');</script>
  <!-- End Google Tag Manager -->
  
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

<body>
  
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