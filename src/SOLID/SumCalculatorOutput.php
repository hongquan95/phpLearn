<?php

namespace App\SOLID;

class SumCalculatorOutput
{
    public $area;

    public function __contruct($area)
    {
        $this->area = $area;
    }

    public function JSON() {
        $data = array(
            'sum' => $this->area->sum(),
        );

        return json_encode($data);
    }

    public function HTML() {
        return implode('', array(
            '',
                'Sum of the areas of provided shapes: ',
                $this->area->sum(),
            ''
        ));
    }
}
