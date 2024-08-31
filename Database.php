<?php

// connect to the mysql database :)) 



// connect to a database and execute a query. 
class DataBase
{
    // public connection variable 
    public $connection;

    // constructor method to initialise commonly used and important variables. 
    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    function query($query)
    {


        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;
    }
}
