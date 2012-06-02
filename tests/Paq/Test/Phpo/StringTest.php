<?php

namespace Paq\Test\Phpo;

use Paq\Phpo\String;

class StringTest extends \PHPUnit_Framework_TestCase
{
    public function testJustAfterCreationIsSameAsRawString()
    {
        $expectedString = 'testing';
        $string = new String($expectedString);
        
        $this->assertEquals($expectedString, (string) $string);
    }
}