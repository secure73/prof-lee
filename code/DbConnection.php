<?php

/**
 * this class is only responsible to connect database 
 */
class DbConnection
{
    private $connection = null;
    private $host;
    private $dbname;
    private $user;
    private $password;

    /**
     * constructor set all important connection values 
     * @param string $host   
     * @param string $dbname   
     * @param string $user  
     * @param string $password 
     */
    public function __construct()
    {
        $this->host = "localhost";
        $this->dbname = "prof_lee_db";
        $this->user = "root";
        $this->password = "";
    }

    /**
     * @return PDO   
     * @throws PDOException
     */
    public function connect(): PDO
    {
        if ($this->connection === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
                $options = [
                    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES   => false,
                ];
                $this->connection = new PDO($dsn, $this->user, $this->password, $options);
            } catch (PDOException $e) {
                throw new PDOException("error in connection from php " . $e->getMessage(), (int)$e->getCode());
            }
        }

        return $this->connection;
    }


    public function close(): void
    {
        $this->connection = null;
    }
}
