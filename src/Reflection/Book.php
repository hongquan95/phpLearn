<?php

namespace App\Reflection;

class Book
{
    private $author;

    public function setAuthor($author)
    {
        $this->author = $author;
        var_dump($author->getName()); // original name
        $reflector = new \ReflectionClass($author); // Here we start to inspect $author
        $authorName = $reflector->getProperty('name'); // Get local variable 'name'
        $authorName->setAccessible(true); // since 'name' is a private local variable of class Author, we need access here to modify 
        $authorName->setValue($author,'Ngo Tat To'); // now hack the 'name' of $author :))
        var_dump($author->getName()); // Guess what will be output here :D 
    }
    public function getAuthor()
    {
        return $this->author;
    }
}