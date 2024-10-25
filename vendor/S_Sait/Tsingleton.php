<?php

namespace S_Sait;

trait Tsingleton // небольшой класс код которого мы можем наследовать
{

    private static ? self $instance = null;

    private function __construct()
    {

    }

    public static function getInstance(): static
    {
        return static::$instance ?? static::$instance = new static();
    }
}

