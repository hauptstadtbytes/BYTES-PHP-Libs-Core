<?php
//set namespace
namespace Bytes\Tests;

//setup error displaying
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//import class(es) required
use Bytes\PhpLibs\Reflection\ClassMetadata as Metadata;
use Bytes\PhpLibs\Reflection\Extensibility\Extension as Extension;
use Bytes\PhpLibs\Reflection\Extensibility\ExtensionsManager as ExtensionsManager;

require_once(__DIR__.'/../vendor/autoload.php');
require_once(__DIR__.'/Reflection/Test-Classes.php'); //add custom test class(es); required - 'ClassMetadata' is not requirering the source file automatically
//require_once(__DIR__.'/Reflection/Test-Interfaces.php'); //add custom test interface(s); not required - 'Extension' is requireing the source file automatically

//get 'SampleOne' metadata from type string
echo("<strong>Metadata for type 'SampleOne' from type string:</strong><br />");
$meta = new Metadata("Bytes\Tests\Reflection\SampleOne");

$keys = $meta->Keys();

foreach($keys as $key){
    echo($key.": ".$meta->$key."<br />");
}

echo("<br />");

//get 'Extension' class instance for 'AdditionExtension' type
echo("<strong>Metadata for 'AdditionExtension' from 'Extension' instance</strong><br />");
$extension = new Extension(__DIR__."/Reflection/Test-Classes.php","Bytes\Tests\Reflection\AdditionExtension","Bytes\Tests\Reflection\CalculatorExtension");

echo("File path: ". $extension->filePath."<br />");
echo("Class type name: ". $extension->className."<br />");
echo("Interface(s) implemented: ". implode("|",$extension->interfaces)."<br />");
echo("Metadata 'Name': ". $extension->metadata->name."<br />");

echo("<br />");

//get all 'CalculatorExtension' extensions using the 'ExtensionsManager'
echo("<strong>All 'CalculatorExtension' 'Extension' instances using the 'ExtensionsManager'</strong><br />");
$manager = new ExtensionsManager();

//$extensions = $manager->GetExtensions(array(__DIR__."/Reflection/Test-Classes.php"));
$extensions = $manager->GetExtensions(array(__DIR__."/Reflection"),"Bytes\Tests\Reflection\CalculatorExtension");
//$extensions = $manager->GetExtensions(array(__DIR__."/Reflection"),"Bytes\Tests\Reflection\CalculatorExtension",array("name" => null)); //all extensions with the respective metadata value are allowed
//$extensions = $manager->GetExtensions(array(__DIR__."/Reflection"),"Bytes\Tests\Reflection\CalculatorExtension",array("name" => "Addition")); //only a specific metdata value is allowed

foreach($extensions as $extension){
    echo("Class type name: ". $extension->className." calculates ".$extension->instance->Calculate(5,3)."<br />");
}
?>