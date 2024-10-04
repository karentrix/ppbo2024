<?php
class Publisher
{
    public $name;
    public $address;
    private $phone;

    private function setPhone($phone)
    {
        $this->phone = $phone;
    }

    private function getPhone()
    {
        return $this->phone;
    }
}