<?php

class Contact
{
    private $name;
    private $email;
    private $phone;

    public function __construct($name, $email, $phone)
    {
        $this->name  = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}
