<?php
Class MyClass
{
    public function __construct(public string $name)
    {
    }

    public function myFunction()
    {
        return 'hello '.$this->name;
    }
}

$myObj = new MyClass("Nikita");
echo $myObj->myFunction();