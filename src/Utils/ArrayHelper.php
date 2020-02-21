<?php

namespace Lab\Utils;

class ArrayHelper
{
    public static function array_first($array)
    {
        $x = null;

        foreach ($array as $item)
        {
             $x = $item;
             break;
        }

        return $x;
    }

    public static function add($a, $b)
    {
        return $a + $b;
    }
}