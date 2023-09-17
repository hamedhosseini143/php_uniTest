<?php

use \PHPUnit\Framework\TestCase as TestCase;

class UserTest extends TestCase
{
    public function testThatWeCanGetFirstName()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName() , 'Billy');

    }
}