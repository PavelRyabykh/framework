<?php


namespace fw\core\base;


use fw\core\Db;

abstract class Model
{
    protected $pdo;
    protected $table;
    protected $pk = 'id';

    public function __construct()
    {
        $this->pdo = Db::getInstance();
    }

    public function query($sql)
    {
        return $this->pdo->execute($sql);
    }

    public function findAll()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    public function findOne($id, $field = null)
    {
        $field = $field ?? $this->pk;
        $sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";
        return $this->pdo->query($sql, [$id]);
    }

    public function findBySQL($sql, $params = [])
    {
        return $this->pdo->query($sql, $params);
    }

    public function findLike($str, $field)
    {
        $str = strtr($str, ['_' => '\_', '%' => '\%']);
        $sql = "SELECT * FROM $this->table WHERE $field LIKE ?";
        return $this->pdo->query($sql, ['%'.$str.'%']);
    }
}