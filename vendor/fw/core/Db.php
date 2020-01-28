<?php


namespace fw\core;


class Db
{
    private static $instance;
//    protected $pdo;
//    public static $countSQL = 0;
//    public static $queris = [];

    private function __construct()
    {
        $db = require ROOT . '/config/config_db.php';
        require LIBS . '/rb-mysql.php';
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        \R::freeze(true);
//        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass']);
//        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//        $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    public static function getInstance()
    {
        if(self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

//    public function execute($sql)
//    {
//        self::$countSQL++;
//        self::$queris[] = $sql;
//
//        $stmt = $this->pdo->prepare($sql);
//        return $stmt->execute();
//    }
//
//    public function query($sql, $params = [])
//    {
//        self::$countSQL++;
//        self::$queris[] = $sql;
//
//        $stmt = $this->pdo->prepare($sql);
//        $res = $stmt->execute($params);
//        if($res !== false) {
//            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
//        } else {
//            return [];
//        }
//    }

}