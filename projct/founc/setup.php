<?php
require 'host.php';
include 'function.php';
$mg='';
$db = new DB( false );
if( ! $softSetup ) {
	$sql = "DROP DATABASE IF EXISTS  b6bi_27936531_project";
	$db->execute($sql);
}

$sql = "CREATE DATABASE IF NOT EXISTS : b6bi_27936531_project
		CHARSET {$char}
		COLLATE {$colat}";
$res = $db -> execute( $sql );
if( $res )
	$mg .=masege('دیتابیس  با موفقیت ایجاد شد', 'success');

unset( $db );
$db = new DB();

$sql = "CREATE TABLE IF NOT EXISTS message(
		id INT AUTO_INCREMENT NOT NULL,
		title VARCHAR(255),
		body TEXT,
		email VARCHAR(255),
		Gender VARCHAR(255),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$res = $db -> execute( $sql );
if( $res )
	masege('جدول پیام با موفقیت ایجاد شد', 'success');

$sql = "CREATE TABLE IF NOT EXISTS prodoct(
		id INT AUTO_INCREMENT NOT NULL,
		name VARCHAR(30),
		price INT,
		description TEXT,
		Picture VARCHAR(255),
		number INT,
		size VARCHAR(255),
		PRIMARY KEY(id)
		)ENGINE = INNODB";
$res = $db -> execute( $sql );
if( $res )
	masege('جدول محصول با موفقیت ایجاد شد', 'success');


$mg = masege();
?>
<!doctype html>
<html lang = "fa" dir="rtl">
	<head>
		<title>ستاپ</title>
		<meta charset = "utf-8" dir="rtl">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.rtl.min.css" integrity="sha384-4dNpRvNX0c/TdYEbYup8qbjvjaMrgUPh+g4I03CnNtANuv+VAvPL6LqdwzZKV38G" crossorigin="anonymous">

		<link href = "style.css" rel = "stylesheet">
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