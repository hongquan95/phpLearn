<?php

namespace App\Reflection;

use App\Reflection\Book;
use App\Reflection\Author;

class Reflection
{
    public function run()
    {
        // $book1 = new Book();
        // $book1->setAuthor('TOP');
        // var_dump($book1->getAuthor());

        $book2 = new Book();
        $book2->setAuthor(new Author('Quan', '22-03-1995'));
        var_dump($book2->getAuthor());
    }
}
