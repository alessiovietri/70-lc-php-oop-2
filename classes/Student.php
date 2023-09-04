<?php

require_once __DIR__.'/User.php';

class Student extends User {

    public $registrationNumber;

    public function __construct(
        $name,
        $email,
        $registrationNumber
    )
    {
        parent::__construct($name, $email);
        
        $this->registrationNumber = $registrationNumber;
    }

    public function toString()
    {
        $toStringFromUserClass = parent::toString();
        return $toStringFromUserClass.' - Reg: '.$this->registrationNumber;
    }

    public function getEmail()
    {
        return $this->email;
    }

}