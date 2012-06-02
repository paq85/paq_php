<?php

namespace Paq;

class String
{
    private $rawString;
    
    public function __construct($string)
    {
        $this->rawString = (string) $string;
    }
    
    public function __toString()
    {
        return $this->getRawString();
    }
    
    protected function getRawString()
    {
        return $this->rawString;
    }
}
