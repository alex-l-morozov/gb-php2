<?php
class M_Base
{
    const MYSQL_HOST = 'localhost';
    const MYSQL_USER = 'almdev_user_gb';
    const MYSQL_PASSWORD = 'qZ6qL6fD';
    const MYSQL_DB = 'almdev_db_gb';

    /**
     * @var mixed
     */
    protected $obConnect = false;

    public function __construct()
    {
        $this->connect();
    }

    /**
     * @return void
     */
    private function connect() : void
    {
        try {
            $this->obConnect = new PDO('mysql:host=' . self::MYSQL_HOST . ';dbname=' . self::MYSQL_DB, self::MYSQL_USER, self::MYSQL_PASSWORD);
        } catch (PDOException $e) {
            echo "Error!: " . $e->getMessage();
            die();
        }
    }
}