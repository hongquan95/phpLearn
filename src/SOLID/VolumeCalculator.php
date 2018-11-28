<?php

namespace App\SOLID;

use App\SOLID\AreaCalculator;

class VolumeCalculator extends AreaCalculator
{
    public function __construct($shape)
    {
        parent::__construct($shape);
    }

    public function sum() {
        // Thực hiện tính toán thể tích và trả về kết quả
    return $summedData;
    }
}
