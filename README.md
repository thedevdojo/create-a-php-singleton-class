# Create a PHP Singleton class

This is the source code that goes along with the video 'The PHP Singleton Class', located at [https://devdojo.com/episode/the-php-singleton-class](https://devdojo.com/episode/the-php-singleton-class)

In this video you'll learn how to create a PHP singleton class and when and why you may want to use the Singleton pattern.

![Create a PHP Singleton](https://devdojo.com/media/videos/March2018/UVfnP09ojfsewE9JuHvV.jpg)

Below is an example of a very simple Calculator Singleton Class:

```
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
```
