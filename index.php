<?php

// for ($i=0; $i < 10 ; $i++) { 
//     echo $i."Adi";
//     echo  "\n";
// }

// $array = ["Adi", "Wibi", "sono"];

// foreach ($array as $array){
//     echo $array;
//     echo "\n";
// }

class User
{
    public $username;

    // method => Function di dalam class
    public function getUsername($username)
    {
        return $this->username = $username;
    }
}
$object = new User;
echo $object->getUsername(" Adi");

?>
