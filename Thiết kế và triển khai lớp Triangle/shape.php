<?php
class Shape {
    private $side1 ;
    private $side2 ;
    private $side3 ;
    public function __construct($side1,$side2,$side3)
    {
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }
    public function GetPerimeter(){
        return 1/2*($this->side1+$this->side2*$this->side3);
    }
    public function GetArea(){
        return sqrt($this->GetPerimeter()*($this->GetPerimeter()-$this->side1)*($this->GetPerimeter()-$this->side2)*($this->GetPerimeter()-$this->side3));
    }
    public function __toString()
    {   return $this->GetPerimeter().",".$this->GetArea();
        // TODO: Implement __toString() method.
    }
}