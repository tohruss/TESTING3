<?php

use PHPUnit\Framework\TestCase;
class ArrayTest extends TestCase
{
    public function testArray()
    {
        $collect = new Collect\Collect(['a' => 1, 'b' => 2, 'c' => 3]);
        $this->assertSame(['a' => 1, 'b' => 2, 'c' => 3], $collect->toArray());
    }

}
