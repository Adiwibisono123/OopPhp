<?php


class User
{
    public $email;

    public function setEmail($setemail)
    {
        if(!filter_var($setemail, FILTER_VALIDATE_EMAIL))
        {
            return;
        }
            $this->email = $setemail;
    }

    public function getEmail()
    {
        return strtolower($this->email);
    }

}

$user = new User;
$user->setEmail("adi.wibisono@koding.sch.id");

echo $user->getEmail();


