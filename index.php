<?php
require __DIR__ . '/vendor/autoload.php';

#Psr_4
// use App\Controllers\HomeController;
// use App\Repositories\UserRepository;

// $homeController = new HomeController;
// $userRepository = new UserRepository;

// print_r($homeController->actionIndex());
// $userRepository->hello();

#Ioc
// use App\Ioc\MyLog;
// use App\Ioc\FileLogger;
// use App\Ioc\StandardLogger;

// $myLogStandard = new MyLog(new StandardLogger);
// $myLogFile = new MyLog(new FileLogger);

// $myLogStandard->info('Hello \r\n');
// $myLogFile->info('Xin chao');

#Refection
// use App\Reflection\Book;
// use App\Reflection\Author;


// $book1 = new Book();
// $book1->setAuthor('TOP');
// var_dump($book1->getAuthor());

// $book2 = new Book();
// $book2->setAuthor(new Author('Quan', '22-03-1995'));
// var_dump($book2->getAuthor());

#SOLID

use App\SOLID\RunSolid;

$run = new RunSolid;
$run->run();