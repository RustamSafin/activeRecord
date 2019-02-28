<?php

namespace ActiveRecord;


class Binder
{
    public static function bindValuesArr(array $values, $class){
        $arr = array();
        foreach ($values as $value){
            $cl = new $class;
            self::bind($value, $cl);
            array_push($arr, $cl);
        }
        return $arr;
    }
    public static function bindValues(array $values, $class)
    {
        $cl = new $class;
        self::bind($values, $cl);
        return $cl;
    }
    private static function bind(array $values, &$class){
        foreach ($values as $key => $field){
            $class->$key = $field;
        }
    }
}