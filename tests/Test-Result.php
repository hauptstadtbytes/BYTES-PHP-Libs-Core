<?php
//set namespace
namespace Bytes\Tests;

//setup error displaying
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//import class(es) required
use Bytes\PhpLibs\Primitives\Result as Result;

require_once(__DIR__.'/../vendor/autoload.php');

//$myResult = new Result(false,"Hello World!");
$myResult = new Result(false,["error" => "simple","message" => "another word"]);
//$myResult = new Result(false,["error" => "simple","another word"]);

echo(json_encode((array) $myResult, JSON_PRETTY_PRINT));
?>