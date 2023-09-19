<?php

use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    /** @test */

    public function adds_uo_giv_operands(){

        $addition = new \App\Calculator\Addition;

        $addition->setOperands([5, 10]);

        $this->assertEquals(15, $addition->calculate());

    }

}