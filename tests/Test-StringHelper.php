<?php
//set namespace
namespace Bytes\Tests;

//setup error displaying
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//import class(es) required
use Bytes\PhpLibs\Primitives\Strings\Helper as StringHelper;

require_once(__DIR__.'/../vendor/autoload.php');

$data = "Hello World!";

echo("'".$data."' starts with 'Hello' (case-sensitive): ".StringHelper::StartsWith($data,"Hello",true)."<br />");
echo("'".$data."' starts with 'hello' (case-sensitive): ".StringHelper::StartsWith($data,"hello",true)."<br />");
echo("'".$data."' starts with 'hello' (case-insensitive): ".StringHelper::StartsWith($data,"hello")."<br />");
echo("'".$data."' starts with 'something' (case-insensitive): ".StringHelper::StartsWith($data,"something")."<br />");

echo("<br />");

echo("'".$data."' starts with 'Hello World !' (case-insensitive): ".StringHelper::StartsWith($data,"Hello World !")."<br />");
echo("'".$data."' starts with '' (case-insensitive): ".StringHelper::StartsWith($data,"")."<br />");

echo("<br />");

echo("'".$data."' ends with 'World!' (case-sensitive): ".StringHelper::EndsWith($data,"World!",true)."<br />");
echo("'".$data."' ends with 'world!' (case-sensitive): ".StringHelper::EndsWith($data,"world!",true)."<br />");
echo("'".$data."' ends with 'world!' (case-insensitive): ".StringHelper::EndsWith($data,"world!")."<br />");
echo("'".$data."' ends with 'something' (case-insensitive): ".StringHelper::EndsWith($data,"something")."<br />");

echo("<br />");

echo("'".$data."' ends with 'Hello another World!' (case-insensitive): ".StringHelper::EndsWith($data,"Hello another World!")."<br />");
echo("'".$data."' ends with '' (case-insensitive): ".StringHelper::EndsWith($data,"")."<br />");

echo("<br />");

echo("'".$data."' contains 'World' (case-sensitive): ".StringHelper::Contains($data,"World",true)."<br />");
echo("'".$data."' contains 'world' (case-insensitive): ".StringHelper::Contains($data,"world")."<br />");

echo("<br />");

echo("'".$data."' contains 'something' (case-insensitive): ".StringHelper::Contains($data,"something")."<br />");
echo("'".$data."' contains '' (case-insensitive): ".StringHelper::Contains($data,"")."<br />");
?>