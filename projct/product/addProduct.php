<?php
include 'C:/wamp64/www/project/founc/function.php' ;
$masege = '';
if( isset( $_POST['save'] ) ){ 
unset( $_POST['save'] );
include 'C:/wamp64/www/project/founc/host.php';
$imgSrc = 'C:/wamp64/www/project/shutterstock_359392910.jpg';
	$_POST['Picture']= $imgSrc;
  	$db= new DB();
	adds::add($_POST,'prodoct');
	unset($db);
$mg = masege();
}
?>
<!doctype html>
<html lang = "fa" dir="rtl" >
	<head>
		<title>مدیریت محصول</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">
		
		<link href =  "style.css" rel = "stylesheet">
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