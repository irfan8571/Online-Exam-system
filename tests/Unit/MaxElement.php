<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class MaxElement extends TestCase
{
   
    public function testExample()
    {
        $elements = array(4,3,1,9, 2);
        rsort($elements);
        $max_num = $elements[0];
        $this->assertEquals($max_num, 9);
    }
}
