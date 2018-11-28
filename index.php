<?php

require __DIR__ . '/vendor/autoload.php';

#----------------------Psr_4--------------------------
// use App\Controllers\HomeController;
// use App\Repositories\UserRepository;

// $homeController = new HomeController;
// $userRepository = new UserRepository;

// print_r($homeController->actionIndex());
// $userRepository->hello();

#-----------------------Ioc----------------------------
// use App\Ioc\MyLog;
// use App\Ioc\FileLogger;
// use App\Ioc\StandardLogger;

// $myLogStandard = new MyLog(new StandardLogger);
// $myLogFile = new MyLog(new FileLogger);

// $myLogStandard->info('Hello \r\n');
// $myLogFile->info('Xin chao');

#--------------------Refection------------------------
// use App\Reflection\Book;
// use App\Reflection\Author;


// $book1 = new Book();
// $book1->setAuthor('TOP');
// var_dump($book1->getAuthor());

// $book2 = new Book();
// $book2->setAuthor(new Author('Quan', '22-03-1995'));
// var_dump($book2->getAuthor());

#------------------------SOLID---------------------------

// use App\SOLID\RunSolid;

// $run = new RunSolid;
// $run->run();

#OOP Inherity Staregy DP

// use App\OOP\Inherity\Car;

// $car = new Car();

// $car->go();

#-----------------------Design Partterns-----------------------------
#-----------------------1. Decorator----------------------------------

// use App\DesignPartterns\Decorator\Computer;
// use App\DesignPartterns\Decorator\Disk;
// use App\DesignPartterns\Decorator\Monitor;

// $a = new Computer();
// echo $a->description() . PHP_EOL;

// $a = new Disk($a);
// echo $a->description() . PHP_EOL;

// $a = new Monitor($a);
// echo $a->description() . PHP_EOL;

#--------------------------------2. Factory-------------------------------
use App\DesignPartterns\Factory\FirstFactory;
use App\DesignPartterns\Factory\SecureFactory;

$factory = new FirstFactory('Oracle');
$connection = $factory->createConnection();
echo $connection->description() .PHP_EOL;

$secureFactory = new SecureFactory();
$secureConnection = $secureFactory->createConnection('Oracle');
echo $secureConnection->description();
