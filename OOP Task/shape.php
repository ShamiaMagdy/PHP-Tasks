<?php
abstract class shape{
    public $perimeter;
    public $area;

    public abstract function calc_area();
    public abstract function calc_perimeter();
}

interface drawable{
    public function draw_shape();
}

class circle extends shape implements drawable{
    private  $radius;
    public function set_radius($rad){
        $this->radius=$rad;
    }
    public function get_radius(){
        return $this->radius;
    }
    public function calc_area(){
        $this->area=22/7*$this->radius*$this->radius;
        return $this->area;
    }
    public function calc_perimeter(){
        $this->perimeter=2*22/7*$this->radius;
        return $this->perimeter;
    }
    public function draw_shape(){
        echo "<div style='width: " . (2*$this->radius) . "px; height: " . (2*$this->radius) . "px; border-radius: 50%; background-color: red;'></div>";
    }
}
class rectangle extends shape{
    private  $length,$width;
    public function set_length($len){
        $this->length=$len;
    }
    public function get_length(){
        return $this->length;
    }
    public function set_width($wid){
        $this->width=$wid;
    }
    public function get_width(){
        return $this->width;
    }
    public function calc_area(){
        $this->area=$this->length*$this->width;
        return $this->area;
    }
    public function calc_perimeter(){
        $this->perimeter=2*($this->length+$this->width);
        return $this->perimeter;
    }
    public function draw_shape(){
        echo "<div style='width: " . ($this->width) . "px; height: " . ($this->length) . "px; border-radius: 0%; background-color: red;'></div>";

    }

}
//Circle object
$circle=new circle();
$radius=$circle->set_radius(30);
$circle_area=$circle->calc_area();
$circle_perimeter=$circle->calc_perimeter();
echo "Circle Area = " . $circle_area;
echo "<br>";
echo "Circle Perimeter = " . $circle_perimeter;
echo "<br>";
$circle->draw_shape();

//Rectangle object
$rectangle=new rectangle();
$length=$rectangle->set_length(60);
$width=$rectangle->set_width(40);
$rectangle_area=$rectangle->calc_area();
$rectangle_perimeter=$rectangle->calc_perimeter();
echo "Rectangle Area = " . $rectangle_area;
echo "<br>";
echo "Rectangle Perimeter = " . $rectangle_perimeter;
echo "<br>";
$rectangle->draw_shape();



?>