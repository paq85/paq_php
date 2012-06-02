<?php

namespace Paq\Test;

class StringTest extends \PHPUnit_Framework_TestCase
{
    public function testJustAfterCreationIsSameAsRawString()
    {
        $expectedString = 'testing';
        $string = new \Paq\String($expectedString);
        
        $this->assertEquals($expectedString, (string) $string);
    }
}