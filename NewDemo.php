<?php
require_once 'Example.php';

class NewDemo extends Example
{
    public $age = 22;
    protected $location = "Khilkhet";
    private $mobile = '01672268920';

    public function newOne(){
//        echo 'In new one';
        $this->subtraction();
    }

    protected function newTwo(){
        echo 'In new Two';
    }

    private function newThree(){
        echo 'In new Three';
    }
}