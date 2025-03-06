<?php


use PHPUnit\Framework\TestCase;

class OnlyTest extends TestCase
{
    public function testOnly()
    {
        $collect = new Collect\Collect(['a' => 112, 'b' => 222, 'c' => 366, 'd' => 666]);
        $this->assertSame(['a' => 112, 'c' => 366, 'd' => 666], $collect->only(['a', 'c', 'd'])->toArray());
    }

}
