<?php

namespace UKCounties\Tests;

use PHPUnit\Framework\TestCase;
use UKCounties\Counties;

class CountiesTest extends TestCase {
    
    /**
     * @covers UKCounties\Counties::getCounties
     * @covers UKCounties\Counties::getCountiesByName
     * @covers UKCounties\Counties::getNumberOfCounties
     */
    public function testGetCounties() {
        $this->assertArrayHasKey('40', Counties::getCounties());
        $this->assertEquals('West Yorkshire', Counties::getCounties()[46]);
        $this->assertEquals(count(Counties::getCountiesByName()), count(Counties::getCounties()));
        $this->assertEquals(Counties::getNumberOfCounties(), count(Counties::getCounties()));
        $this->assertGreaterThan(100, Counties::getNumberOfCounties());
    }
    
    /**
     * @covers UKCounties\Counties::getCountyID
     */
    public function testGetCountyIDByName(){
        $this->assertEquals(46, Counties::getCountyID('West Yorkshire'));
        $this->assertFalse(Counties::getCountyID('Hello'));
    }
    
    /**
     * @covers UKCounties\Counties::getCountyName
     */
    public function testGetCountyNameByID(){
        $this->assertEquals('West Yorkshire', Counties::getCountyName(46));
        $this->assertFalse(Counties::getCountyName(1064));
    }
}
