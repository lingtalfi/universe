<?php

namespace Bat;

/*
 * LingTalfi 2015-10-14
 */
class StringTool
{


    /**
     * 
     * camelCase
     * CAMEL_CASE
     */
    public static function camelCase2Constant($str)
    {
        if (is_string($str)) {

            
            
            
            
            
        }
        else {
            throw new \InvalidArgumentException(sprintf("string argument must be of type string, %s given", gettype($str)));
        }
        return $str;
    }
}
