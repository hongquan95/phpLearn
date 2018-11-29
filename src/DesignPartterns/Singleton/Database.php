<?php

namespace App\DesignPartterns\Singleton;

class Database
{
    private $name;
    private $record;
    private static $singleObject;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function editRecord(string $operation)
    {
        echo "Performing a " . $operation . " operation on record " . $this->record .
" in database " . $this->name;
    }
    public function getName()
    {
        return $this->name;
    }
    public static function getInstance(string $name)
    {
        //Problem in multithread case.
        if (is_null(self::$singleObject)) {
            self::$singleObject = new Database($name);
        }
        return self::$singleObject;
    }
}
