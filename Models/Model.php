<?php

namespace Models;

class Model
{
    public static $database;
    public $attributes = [];

    public static function getDatabaseInstance()
    {
        $class = get_called_class();
        $table = strtolower($class)."s";
        $table = explode("\\", $table)[1];
        return new Database($table, $class);
    }

    public static function where($condition)
    {
        $database = self::getDatabaseInstance();
        return $database->where($condition);
    }

    public static function all()
    {
        $database = self::getDatabaseInstance();
        return $database->all();
    }

    public static function toSql()
    {
        $database = self::getDatabaseInstance();
        return $database->toSql();
    }

    public static function create(array $array)
    {
        $database = self::getDatabaseInstance();
        return $database->create($array);
    }

    public static function qeury($query)
    {
        $database = self::getDatabaseInstance();
        return $database->query($query);
    }

    public static function get()
    {
        $database = self::getDatabaseInstance();
        return $database->get();
    }

    public function setAttributes($array)
    {
        $this->attributes = $array;
    }

    public function __get($name)
    {
        if(isset($this->attributes[$name]))
            return $this->attributes[$name];

        if(method_exists($this, $name))
            return $this->$name();

        return null;
    }
}