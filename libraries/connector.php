<?php
/**
 * Created by PhpStorm.
 * User: minhduc
 * Date: 25/10/2016
 * Time: 20:50
 */

class Connector
{
    private static $instance;
    private $conn;
    private $app_url = "http://localhost/";
    private $db_server = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "student";

    /**
     * Returns the *Singleton* instance of this class.
     *
     * @return Singleton The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new Connector();
        }

        return static::$instance;
    }

    /**
     * Protected constructor to prevent creating a new instance of the
     * *Singleton* via the `new` operator from outside of this class.
     */
    protected function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=$this->db_server;dbname=$this->db_name;charset=utf8", $this->db_user, $this->db_pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            $this->conn = null;
            // throw new Exception('Database Connection Fail');
        }
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }

    public function getConnection() {
        return $this->conn;
    }
}
