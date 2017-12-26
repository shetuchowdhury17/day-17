<?php


class Example
{
    public $name='Shetu Chowdhury';
    protected $city='Dhaka';
    private $country='Bangladesh';
    public $value;


    public function __construct()
    {
//        echo $data;
//        $this->value = $data;

    }



    public function addition(){
        echo 'In addition';
//        echo $this->country;

        $this->value;
    }
    protected function subtraction(){
//        echo 'In subtraction';
        $this->value;
    }
    private function division(){
        echo 'In division';
    }
}