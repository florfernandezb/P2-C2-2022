<?php

class DatabaseConection
{

    protected const DB_SERVER = 'localhost';
    protected const DB_USER = 'root';
    protected const DB_PASS = '';
    protected const DB_NAME = 'hecho_por_vicki';

    protected const DB_DSN = 'mysql:host=' . self::DB_SERVER . ';dbname=' . self::DB_NAME . ';charset=utf8mb4';
    
    protected PDO $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS);
        } catch (Exception $e) {
            die('Error connecting MySQL.');
        }
    }

    /**
     * Function that returns a ready-to-use PDO connection
     * @return PDO
     */
    public function getConection(): PDO
    {
        return $this->db;
    }
}

?>