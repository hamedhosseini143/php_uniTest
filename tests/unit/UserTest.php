<?php

use \PHPUnit\Framework\TestCase as TestCase;

class UserTest extends TestCase
{

    protected $user;

    public function setUp(): void
    {
       $this->user = new \App\Models\User;
    }

    public function testThatWeCanGetFirstName()
    {
        $this->user->setFirstName('Billy');
        $this->assertEquals( $this->user->getFirstName() , 'Billy');
    }

    public function testThatWeCanGetLastName()
    {
        $this->user->setLastname('Olly');
        $this->assertEquals( $this->user->getLastName(),'Olly' );
    }

    public function testThatWeCanGetFullNmae()
    {
        $this->user->setFirstName('Billy');
        $this->user->setLastname('Olly');
        $this->assertEquals( $this->user->getFullName() , 'Billy Olly');
    }

}