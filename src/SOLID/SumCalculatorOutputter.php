<?php

namespace App\SOLID;

use App\SOLID\AreaCalculator;

class SumCalculatorOutputter
{
    protected $calculator;

    /**
     * Construct
     * @param AreaCalculator $calculator calculator
     */
    public function __construct(AreaCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function JSON() {
        $data = array(
            'sum' => $this->calculator->sum(),
        );

        return json_encode($data);
    }

    public function HTML() {
        return implode('', array(
            '',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            ''
        ));
    }
}
