<?php
//set namespace
namespace Bytes\Tests;

//setup error displaying
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//import class(es) required
use Bytes\PhpLibs\Primitives\Dictionary as Dictionary;

require_once(__DIR__.'/../vendor/autoload.php');

//create a set of sample data
$sampleData = array("one" => "red", "two" => "yellow", "three" => "pink", "four" => "green");


//create the dictionary
$dic = new Dictionary($sampleData);
$dic->five = "orange"; //add an additional item

//iterate through all colors
$keys = $dic->Keys();

echo("<strong>Our rainbow consists of ".count($keys)." colors:</strong><br />");

foreach($keys as $key){
    echo($dic->$key."<br />");
}

//check for a specific key
echo("...and it contains the key 'five': ".$dic->ContainsKey("five"));
?>