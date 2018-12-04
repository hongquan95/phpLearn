<?php

require __DIR__ . '/vendor/autoload.php';

#----------------------Psr_4--------------------------

// use App\Psr4;
// $psr4 = new Psr4;
// $psr4->run();

#-----------------------Ioc----------------------------

// use App\Ioc\Ioc;
// $ioc = new IoC;
// $ioc->run();

#--------------------Refection------------------------

// use App\Reflection\Reflection;
// $reflection = new Reflection;
// $reflection->run();

#------------------------SOLID---------------------------

// use App\SOLID\Solid;
// $run = new Solid;
// $run->run();

#-----------------------Design Partterns-----------------------------
#-----------------------1. Decorator----------------------------------

// use App\DesignPartterns\Decorator\Decorator;
// $decorator = new Decorator;
// $decorator->run();

#--------------------------------2. Factory-------------------------------

// use App\DesignPartterns\Factory\Factory;
// $factory = new Factory;
// $factory->run();

#-----------------------------3. Observer----------------------------------

// use App\DesignPartterns\Observer\Observer;
// $observer = new Observer;
// $observer->run();

#-----------------------------4.Staregy (OOP Inherity )

// use App\OOP\Inherity\Plane;
// $car = new Plane();
// $car->go();

#---------------------------5. ChainOfResponsibility------

// use App\DesignPartterns\ChainOfResponsibility\ChainOfResponsibility;
// $chain = new ChainOfResponsibility;
// $chain->run();

#---------------------------6. Singleton -----------------

// use App\DesignPartterns\Singleton\Singleton;
// $singleton = new Singleton;
// $singleton->run();

#---------------------------7. Adapter--------------------
// use App\DesignPartterns\Adapter\Adapter;
// $singleton = new Adapter;
// $singleton->run();

#--------------------------8. Flyweight-------------------

// use App\DesignPartterns\Flyweight\Flyweight;
// $flyweight = new Flyweight;
// $flyweight->run();

#--------------------------9. Facade-----------------------

// use App\DesignPartterns\Facade\Facade;

// $facade = new Facade;
// $facade->run();

#--------------------------10. Template-------------------

// use App\DesignPartterns\Template\Template;
// $template = new Template;
// $template->run();

#--------------------------11. Builder --------------------

use App\DesignPartterns\Builder\Builder;

$builder = new Builder;
$builder->run();

