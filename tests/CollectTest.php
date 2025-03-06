<?php

use PHPUnit\Framework\TestCase;
class CollectTest extends TestCase
{

    public function testCount()
    {
        $collect = new Collect\Collect([13,17,12]);
        $this->assertSame(3, $collect->count());
    }

}