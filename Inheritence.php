<?php

class User
{
    public function getUsername($username)
    {
        return $username; 
    }
}
    class email extends User
    {
        //
    }
    class Name extends User
    {
        //
    }


$name = new Name;
echo $name->getUsername("ADI WIB");