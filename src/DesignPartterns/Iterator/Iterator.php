<?php

namespace App\DesignPartterns\Iterator;

use App\DesignPartterns\Iterator\Division;

class Iterator
{
    public function run()
    {
        $division = new Division('Sales');
        $division->add('Ted');
        $division->add('Bob');
        $division->add('Carol');
        $division->add('Alice');

        $iterator = $division->iterator();
        while ($iterator->hasNext()){
            $vp = $iterator->next();
            $vp->print();
        }
    }
}
