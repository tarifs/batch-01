<?php
namespace App\Classes;
class Demo
{
    public $name = 'lol';
    public $email = 'lol@lol.com';
    private $mobile = '64464646';
    static $city = 'bd';


    public function test()
    {
        echo 'test';
    }

    public function hello()
    {
        echo 'hello';
    }

    private function world()
    {
        echo 'personal life';
    }
}