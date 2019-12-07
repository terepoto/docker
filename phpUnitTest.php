<?php

use PHPUnit\Framework\TestCase;

final class phpUnitTest extends TestCase
{
    public function test入力1の場合出力1()
    {
        $this->assertEquals(1,2);
    }
    public function test入力1の場合出力2()
    {
        $this->assertEquals(1,1);
    }
}