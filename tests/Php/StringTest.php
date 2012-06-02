<?php

namespace Paq\Test\Phps;

use \Php\String;

class StringTest extends \PHPUnit_Framework_TestCase
{
    public function testAddCSlashesAsInManualCharListParamDescriptionExampleNo1()
    {
        $this->assertEquals('\f\o\o\[ \]', String::addCSlashes('foo[ ]', 'A..z'));
    }
    
    public function testAddCSlashesAsInManualCharListParamDescriptionExampleNo2()
    {
        // BUG?: addcslashes(): Invalid '..'-range, '..'-range needs to be incrementing
        $this->assertEquals("\zoo['\.']", String::addCSlashes("zoo['.']", 'z..A'));
    }
    
    public function testAddCSlashesAsInManualExample1()
    {
        $this->markTestIncomplete('How should it work?');
        
        $this->assertEquals($expectedEscaped, String::addCSlashes($notEscaped, "\0..\37!@\177..\377"));
    }
    
    public function testGetAsciiCharAsInManualExampleNo1()
    {
        $this->assertEquals("The string ends in escape: A", 
                "The string ends in escape: " . String::getAsciiChar(65));
    }
    
    public function testBinToHex()
    {
        $this->markTestIncomplete();
    }
    
    public function testChunkSplit()
    {
        $this->markTestIncomplete();
        
    }
}