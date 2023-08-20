<?php

//set the namespace
namespace Bytes\PhpLibs\Primitives\Strings;

class Helper{

//method returning a boolean value indicating wheather a string starts with a specific substring or not
static function StartsWith(string $haystack, string $needle):bool {

    $length = strlen($needle);

    return (substr($haystack, 0, $length) === $needle);

}

//method returning a boolean value indicating wheather a string ends with a specific substring or not
static function EndsWith(string $haystack, string $needle):bool {

     $length = strlen($needle);

     if ($length == 0) {

         return true;

     }

     return (substr($haystack, -$length) === $needle);

 }

 //method returning a boolean value indicating wheather a substring is contained in a string or not
 static function Contains(string $haystack, string $needle):bool {

      if(strpos($haystack,$needle)!== false){

        return true;

      } else {

        return false;

      }

}

}

?>