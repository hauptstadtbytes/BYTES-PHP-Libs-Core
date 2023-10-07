<?php

//set the namespace
namespace Bytes\PhpLibs\Primitives;

//the result class
class Result{

    public bool $successful = true;
    public $details = "";

    //constructor method
    function __construct(bool $successful = true, $details = null) {

        $this->successful = $successful;
    
        if(!is_null($details)) {
            
            $this->details = $details;
            
        }
        
    }

}

?>