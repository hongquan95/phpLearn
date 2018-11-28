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
// use App\DesignPartterns\Factory\FirstFactory;
// use App\DesignPartterns\Factory\SecureFactory;

// $factory = new FirstFactory('Oracle');
// $connection = $factory->createConnection();
// echo $connection->description() .PHP_EOL;

// $secureFactory = new SecureFactory();
// $secureConnection = $secureFactory->createConnection('Oracle');
// echo $secureConnection->description();

#-----------------------------3. Observer----------------------------------
// use App\DesignPartterns\Observer\Database;
// use App\DesignPartterns\Observer\Archiver;
// use App\DesignPartterns\Observer\Boss;
// use App\DesignPartterns\Observer\Client;

// $database = new Database();
// $archiver = new Archiver(); 
// $client = new Client();
// $boss = new Boss();
// var_dump($client, $client2); die();
// $database->registerObserver($archiver);
// $database->registerObserver($client);
// $database->registerObserver($boss);
// $database->editRecord('delete', 'record 1');
// $database->removeObserver($client);
// $database->editRecord('update', 'record 2');
#-----------------------------4.Staregy (OOP Inherity )

// use App\OOP\Inherity\Plane;

// $car = new Plane();

// $car->go();

#---------------------------5. ChainOfResponsibility------
use App\DesignPartterns\ChainOfResponsibility\ChainOfResponsibility;
$chain = new ChainOfResponsibility;
$chain->run();
