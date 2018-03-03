<?php

class Greeting{

	private static $instance;
	public static $name;

	public static function singleton(){

		if( !isset(self::$instance) ){
			self::$instance = new Greeting;
		}

		return self::$instance;

	}

	public static function setname($name){
		self::$name = $name;
	}

	public static function greet(){
		return 'Hello ' . self::$name . ' from the Singleton Greeting Class';
	}

}