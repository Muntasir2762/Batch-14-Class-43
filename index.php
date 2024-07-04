<?php

class Car{

    protected $name;
    protected $engine_cc;

    // public function __construct($nameParam, $engineParam)
    // {
    //     $this->name = $nameParam;
    //     $this->engine_cc = $engineParam;
    // }

    protected function demoCar()
    {
        echo "The Car Name is=".$this->name. "<br>";
        echo "The Engine is=".$this->engine_cc. "<br>";
    }

    public function demoCar2()
    {
        $this->demoCar();
    }

    private function demoCar3()
    {
        echo "This is private car";
    }

    public function demoCar4()
    {
        $this->demoCar3();
    }
}

class Car2 extends Car{

    public function show()
    {
        echo "Demo";
        $this->demoCar();
        $this->demoCar3();
    }
}

// $car = new Car();
// $car->name = "BMW";
// $car->engine_cc = "4000CC";
// $car->demoCar2();

$car2 = new Car2();
$car2->show();

?>