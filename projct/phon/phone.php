<?php
include 'C:/wamp64/www/project/founc/function.php' ;
$masege = '';
if( isset( $_POST['save'] ) ){ 
unset( $_POST['save'] );
include 'C:/wamp64/www/project/founc/host.php';
  	$db= new DB();
	adds::add($_POST,'message');
	unset($db);
$mg = masege();
}
?>
<!doctype html>
<html lang = "fa" dir="rtl">
	<head>
	<title>تماس با ادمین</title>
		<meta charset = "utf8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">		
		<style>
		</style>
	</head>
	<body class = "container">
		<header></header>
		<main>
		<?php
			if( isset($mg) )
					echo $mg;
		
		?>
	</main>
		<aside></aside>
		<footer></footer>
	</body>
</html>