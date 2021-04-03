<?php
include 'Prodoct.php' ;
if(! class_exists('DB')) {
	class DB{
		var $coenct;
		function __construct($selectdb=true){
			$this -> connect();
			if($selectdb)
			$this -> select();
			$this -> coenct -> set_charset(char);
		}
		
		function connect(){
			$this -> coenct = new mysqli(hostname, username, pass); 
			if( $this -> coenct -> connect_error ){
				$error = "
						خطا در اتصال به دیتابیس!
						<section lang = 'en'>{$this -> coenct -> connect_error}</section>";
				die( $error );
			}
		}
		function select(){
			$this -> coenct -> select_db(dbname);
			if( $this -> coenct -> error ){
				$error = "
						خطا در انتخاب دیتابیس!
						<section lang = 'en'>{$this -> coenct -> error}</section>";
				die( $error );
			}
		}

		function execute( $sql ){
			$res = $this -> coenct -> query( $sql );
			if( $this -> coenct -> error ){
				$error = "
						خطا در اجرای کوئری!
						<section lang = 'en'>{$sql}<br>
						{$this -> coenct -> error}</section>";
				die( $error );
				return false;
			}
			else if($res!== true && $res!== false){
			$tbl=$res-> fetch_all(MYSQLI_ASSOC);
			return $tbl;
			}
			else if(isset($this->connect->insert_id)){
				return $this->connect ->insert_id;
			}
			else
				return $res;

		}
		
		function __destruct(){
			$this -> coenct -> close();
		}
	}
}
