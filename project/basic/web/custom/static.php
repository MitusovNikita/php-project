<?php
Class MyStatic
{
    public static int $year = 2020;
    public string $yearName = "двадцатый";

    public static function getYear()
    {
        echo static::$year."<br>";
        echo self::$year."<br>";
//        нельзя
//        echo self::$yearName."<br>";
        //        нельзя
//        echo $this->yearName."<br>";
    }
}

MyStatic::getYear();
//2020
//2020
echo "<br>";
echo $year = MyStatic::$year;
//2020