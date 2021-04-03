<?php

	if(! class_exists('adds')) {
		class adds
		{
			static function columns( $vars, $sep = ', ' ){
				$columns = array_keys( $vars );
				return join($sep , $columns);
			}
			
			static function valuesList( $vars, $sep = "', '" ){
				$values = array_values( $vars );
				return "'" . join($sep , $values) . "'";
			}
			static function add( $params,$name ){
				$columnsString = self::columns( $params );
				$valuesString = self::valuesList($params );
				$tableName = $name;
				
					$sql = "INSERT INTO {$tableName}({$columnsString}) 
	                VALUES({$valuesString})";
				$res = $GLOBALS['db']-> execute( $sql );
				if( $res )
					masege('باموفقیت ثبت شد!', 'success');

			}
			static function update(){}
			static function delete(){}
			
			static function find($name,$where='TRUE'){
					
				$sql="SELECT * FROM {$name}
				WHERE {$where}
				ORDER BY id DESC";
			
				$tbl=$res = $GLOBALS['db']-> execute( $sql );
				
					return $tbl;
					}
		}
	}
?>