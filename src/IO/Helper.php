<?php

//set the namespace
namespace Bytes\PhpLibs\IO;

class Helper{

    //method returning a list of all files (of a given extension found)
    static function Files(array $paths):array {

        $output = array();

        foreach($paths as $path) { //loop for each path found

            if(is_dir($path)){ //check if the given path points to a directory

                 //call method recursively for each file and folder inside the directory
                //based on the article found at 'http://www.php.net/manual/de/function.scandir.php'
                foreach(scandir($path) as $objectKey => $objectValue){

                    if(!in_array($objectValue,array(".",".."))) { //ignore default file system objects
            
                        $output = array_merge($output,self::Files(array($path.DIRECTORY_SEPARATOR.$objectValue)));
                        
                    }
                }

            } else { //continue for a file path
                $output[] = $path;
            }

        }

        return $output;

    }

}
?>