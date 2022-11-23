<?php

class Info 
{
    private $name;

    private $surname;

    public function __construct(string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }

    public function __clone()
    {
        $this->name = clone $this->name;
        $this->surname = clone $this->surname;
    }
}

class Persone
{
    public $info;

    public function __construct(Info $info)
    {
        $this->info = $info;
    }
}

function Check()
{
    $chek = new Info();
    $chek->name = 'Lex';
    $chek->surname = 'Popov';

    $check2 = clone $chek;

    if($chek->name === $check2->name){
        echo 'Success!';
    } else {
        echo 'Fail!';
    }

    if($chek->surname === $check2->surname){
        echo 'Success!';
    } else {
        echo 'Fail!';
    }

}