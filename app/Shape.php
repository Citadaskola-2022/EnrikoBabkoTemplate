<?php

namespace App;
class Forma {
    public string $nosaukums;
    public int $perimetrs;

    public function __toString(): string
    {
        return $this->nosaukums . ' ' .$this->perimetrs;
    }
}

class Square extends Forma {
    public function __construct(int $x)
    {
        $this->nosaukums = 'kvadrāts';
        $this->perimetrs = $x * 4;
    }
}

class Rectangle extends Forma {
    public function __construct(int $x, int $y)
    {
        $this->nosaukums = 'taisnstūris';
        $this->perimetrs = ($x * 2) + ($y * 2);
    }
}

class Triangle extends Forma {
    public function __construct(int $x, int $y, int $z)
    {
        if($x + $y > $z || $x + $z > $y || $z + $y > $x)
        {
            $this->nosaukums = 'trijstūris';
            $this->perimetrs = $x + $y + $z;
        }else
        {
            echo "Error! Triangle not possible with these lengths.";
        }
    }
}

