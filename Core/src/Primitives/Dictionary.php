<?php

//set the namespace
namespace Bytes\PhpLibs\Primitives;

//the metadata class
class Dictionary{

    //protected variable(s)
    protected $pairs = array();

    //constructor method
    function __construct(array $items = null) {
    
        if(!is_null($items)) {
            
            $this->pairs = array_change_key_case($items,CASE_LOWER);
            
        }
        
    }

    //getter method
    function __get(string $key) {
        
        if(array_key_exists(strtolower($key), $this->pairs)) {
            
            return $this->pairs[strtolower($key)];
            
        } else {
            
            return null;
            
        }
        
    }
    
    //setter method
    function __set(string $key, $value) {
        
        $this->pairs[strtolower($key)] = $value;
        
    }

    //method returning a list of all keys
    public function Keys():array{

        return array_keys($this->pairs);
    }

    //method for checking for a specific key
    public function ContainsKey(string $key):bool {
            
        if(array_key_exists(strtolower($key), $this->pairs)) {
                
            return true;
                
        } else {
                
            return false;
                
        }
        
    }
    
    //method checking for a specific value
    public function ContainsValue($value, $ignoreCase = true):bool {
            
        if($ignoreCase) { //checks if ignoring the case was requested
            
            foreach($this->pairs as $intValue) {
                    
                if(strtolower($intValue) == strtolower($value)) {
                        
                    return true;
                        
                }   
                    
            }
                
        } else { //continue if case sensity was requested
            
            if(($key = array_search($value, $this->pairs)) !== false) {
                
                return true;
                
            }
                
        }
        
        //return the default output value
        return false;
        
    }
        
    //method for checking for a specific key-value pair
    public function ContainsPair(string $key, string $value, bool $ignoreCase = true):bool {
            
        if($ignoreCase) { //checks if ignoring the case was requested
            
            foreach($this->pairs as $currKey => $currValue) {
                
                if(($currKey == strtolower($key)) && (strtolower($currValue) == strtolower($value))) {
                    
                    return true;
                
                }
                    
            }
        
        } else { //continue if case sensity was requested
        
            if($this->ContainsKey(strtolower($key))) {
                
                if($this->pairs[strtolower($key)] == $value) {
                    
                    return true;
                        
                }
                
            }
            
        }
        
        //return the output value
        return false;
            
    }

}
?>