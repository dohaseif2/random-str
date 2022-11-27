<?php 


class Str {

	public static function random($num = 10) {

		$str = 'abcdefgjklmnopqABCDEFGJKLMNOPQ123456789';

		$newStr = '';

		for($i = 0 ; $i < $num ; $i++) {

			$rand =  mt_rand( 0  , strlen($str) - 1);

			$newStr .= $str[$rand];
		}

		return $newStr ;

	}


} // end class

echo Str::random(20);