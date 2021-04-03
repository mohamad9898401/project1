<?php
include 'view.php';
include 'host.php';

$db= new DB();
$tbl=adds::find('prodoct');
include 'function.php';

unset($db);
$mg = masege();

?>