<?php

interface DBConnectionInterface
{
    public function connect();
}

class MySqlDatabase implements DBConnectionInterface
{
    public function connect()
    {
        return 'Mysql connection';
    }
}

class MongoDatabase implements DBConnectionInterface
{
    public function connect()
    {
        return 'Mongo connection';
    }
}

class PassWordRemind
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function show()
    {
        echo $this->dbConnection->connect();
    }
}

// $mysqlPass = new PassWordRemind(new MySqlDatabase);
// $mysqlPass->show();

$mongoPass = new PassWordRemind(new MongoDatabase);
$mongoPass->show();
