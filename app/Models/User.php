<?php

namespace App\Models;

class User

{

    protected $first_name;

    protected $last_name;

    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

    }

    public function getFirstName()
    {
        return 'Billy';
    }


    public function setLastname($lastName)
    {
        $this->last_name = $lastName;
    }

    public function getLastName()
    {
        return 'Olly';
    }


    public function getFullName()
    {
        return "$this->first_name $this->last_name";
    }

}