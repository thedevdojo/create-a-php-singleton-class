<?php

class Calculator{

	private static $instance;

	public static function singleton(){

		if( !isset(self::$instance) ){
			self::$instance = new Greeting;
		}

		return self::$instance;

	}

	public static function add($num1, $num2){
		return (int)$num1 + (int)$num2;
	}

}