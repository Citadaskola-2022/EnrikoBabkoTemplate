<?php


class Kvadrats
{
    public int $edge;
    public int $area;

    public function __construct(int $edge)
    {
        if ($edge > 0) {
            $this->edge = $edge;
            //Laukums ir mala kvadrātā.
            $this->area = $edge * $edge;
        } else {
            //Izprintē kļūdu, ja neiespējams malas garums.
            echo "Error! Edge length impossible!";
        }
    }

    public function get_all(): void
    {
        echo "Kvadrata malas garums:", $this->edge;
        echo "Kvadrata laukums: ", $this->area;
    }
}

class Taisnsturis
{
    public int $firstEdge;
    public int $secondEdge;
    public int $area;

    public function __construct(int $firstEdge, int $secondEdge)
    {
        //Ja malu garumi ir iespējami, konstruē taisnstūri.
        if ($firstEdge > 0 && $secondEdge > 0) {
            $this->firstEdge = $firstEdge;
            $this->secondEdge = $secondEdge;
            $this->area = $firstEdge * $secondEdge;
        } else {
            echo "Error! Edge lengths impossible";
        }
    }

    public function get_all(): void
    {
        echo "Pirmas malas garums: ", $this->firstEdge;
        echo "Otras malas garums", $this->secondEdge;
        echo "Taisnstura laukums:", $this->area;
    }
}

class Trijsturis
{
    public int $edge;
    public int $heightAgainstEdge;
    public int $area;

    public function __construct(int $edge, int $heightAgainstEdge)
    {
        if ($edge > 0 && $heightAgainstEdge > 0) {
            $this->edge = $edge;
            $this->heightAgainstEdge = $heightAgainstEdge;
            $this->area = 0.5 * $edge * $heightAgainstEdge;
        } else {
            echo "Edge and height impossible!";
        }
    }

    public function get_all(): void
    {
        echo "Trijstura malas garums:", $this->edge;
        echo "Augstuma garums:", $this->heightAgainstEdge;
        echo "Trijstura laukums:", $this->area;
    }
}

$kvadrats = new Kvadrats(10);
$kvadrats->get_all();

$taisnsturis = new Taisnsturis(9, 7);
$taisnsturis->get_all();

$trijsturis = new Trijsturis(9, 4);
$trijsturis->get_all();