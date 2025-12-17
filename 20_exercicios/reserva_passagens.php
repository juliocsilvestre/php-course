<?php

class Passenger
{
    private $name;
    private $age;
    private $seatNumber;

    public function __construct($name, $age, $seatNumber)
    {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSeatNumber()
    {
        return $this->seatNumber;
    }

    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }
}
