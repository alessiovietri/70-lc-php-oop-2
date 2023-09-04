<?php

class User {

    public $name;
    protected $email;

    public function __construct(
        $name,
        $email
    )
    {
        $this->name = $name;
        if (strlen($email) > 3 && strlen($email) < 256) {
            $this->email = $email;
        }
    }

    public function toString()
    {
        return 'User '.$this->name.' - Email: '.$this->email;
    }

}