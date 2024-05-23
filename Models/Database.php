<?php

namespace Models;

class Database
{
    public $table;
    public $class;
    public $whereQuery;
    public $connection;
    public $wheres = [];
    public $selectParams = "*";

    public function __construct($table, $class = null)
    {
        $this->class = $class;
        $this->table = $table;
        $config = __DATABASE_CONFIG__;
        try {
            $this->connection = new \PDO("mysql:host={$config['host']};dbname={$config['name']}", $config['username'], $config['password']);
        } catch (\Exception $e) {
            var_dump($e);
        }
    }

    public function all()
    {
        return $this;
    }

    public function where($condition)
    {
        $this->wheres[] = $condition;
        if (!is_null($this->whereQuery))
            $this->whereQuery .= " AND";

        if (is_null($this->whereQuery))
            $this->whereQuery = "WHERE ";

        $this->whereQuery .= " $condition[0] $condition[1] '$condition[2]'";
        return $this;
    }

    public function toSql()
    {
        return "SELECT $this->selectParams FROM $this->table $this->whereQuery";
    }

    public function query($query)
    {
        $result = $this->connection->query($query)->fetchAll(\PDO::FETCH_ASSOC);
        $newResult = [];
        foreach ($result as $row) {
            $instance = new $this->class;
            $instance->setAttributes($row);
            $newResult[] = $instance;
        }
        return $newResult;
    }

    public function get()
    {
        $result = $this->connection->query($this->toSql())->fetchAll(\PDO::FETCH_ASSOC);
        $newResult = [];
        foreach ($result as $row) {
            $instance = new $this->class;
            $instance->setAttributes($row);
            $newResult[] = $instance;
        }
        return $newResult;
    }

    public function first()
    {
        $result = $this->connection->query($this->toSql())->fetchAll(\PDO::FETCH_ASSOC);
        if ($result) {
            $instance = new $this->class;
            $instance->setAttributes($result[0]);
            return $instance;
        }
        return null;
    }

    public function create(array $array)
    {
        $sql = "INSERT INTO $this->table SET ";
        $number = 0;
        foreach ($array as $key => $value) {
            $number++;
            $sql = $sql . "$key='$value'";
            if ($number < count($array))
                $sql = $sql . ", ";
        }
        return $this->connection->prepare($sql)->execute();
    }

    public function select($string)
    {
        $this->selectParams = $string;
        return $this;
    }

    public function count()
    {
        return $this->connection->query($this->toSql())->rowCount();
    }

    public function remove() {
        $query = 'DELETE FROM ' . $this->table . ' ' . $this->whereQuery;
        return $this->connection->prepare($query)->execute();
    }
}