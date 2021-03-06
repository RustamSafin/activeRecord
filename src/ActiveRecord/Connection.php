<?php


namespace ActiveRecord;


use PDO;
use PDOException;

class Connection {
    protected static $instance;
    protected function __construct() {}
    public static function getInstance() {
        if(empty(self::$instance)) {
            $db_info = array(
                "db_host" => "localhost",
                "db_port" => "5432",
                "db_user" => "",
                "db_pass" => "",
                "db_name" => "",
                "db_charset" => "UTF-8");
            try {
                self::$instance = new PDO("pgsql:host=".$db_info['db_host'].';port='.$db_info['db_port'].';dbname='.$db_info['db_name'], $db_info['db_user'], $db_info['db_pass']);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                self::$instance->query('SET NAMES \'utf8\'');
            } catch(PDOException $error) {
                echo $error->getMessage();
            }
        }
        return self::$instance;
    }
}