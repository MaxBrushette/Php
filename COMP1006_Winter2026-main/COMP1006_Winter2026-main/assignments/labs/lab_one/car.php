<?php
declare (strict_types=1);
//Make, model, year
class Car{
    //The variables.
    public string $make;
    public string $model;
    public int $year;
    //This I believe assigns the variables to a name?
    public function __construct(string $make, string $model, int $year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    //This is so that all of the data is in a sentence.
    public function getCarInfo(): string{
        return "The make is $this->make, the model is $this->model, and the year is $this->year";
    }
}
?>