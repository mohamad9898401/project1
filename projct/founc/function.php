<?php
include 'db.php';
if(! function_exists('masegetemp')){
function masegetemp($txt,$type)
	{
		switch ($type)
		{
		case 'success':break;
		case 'error':$type='danger';
		}
		$masegetemp=
		"<article class='alert alert-{$type} alert-dismissible fade show' role='alert' direction: rtl>
		{$txt}
			 <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' direction: rtl></button>
			</article>";

return $masegetemp;
	}
}
if(! function_exists('masege')){
function masege($txt='',$type='error'){
		static $mseg='';
		if($txt!==''){
			$mseg.=masegetemp($txt,$type);
		}
		else if($mseg!==''){
			$res=$mseg;
			$mseg='';
			return $res;
			
		}
		else
			return false;
	}
}
	
if( ! function_exists('back') ){
	function back( $address ){
		header("Location: {$adsres}");
		exit();
	}
}
?>