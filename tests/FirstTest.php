<?php

use PHPUnit\Framework\TestCase;
class FirstTest extends TestCase
{
    public function testFirst()
    {
        $collect = new Collect\Collect([10, 20, 30]);
        $this->assertEquals(10, $collect->first());
    }

}
