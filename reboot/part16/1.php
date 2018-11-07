<?php
class Point{
    private $x;
    private $y;

    public function setX($x){
        $this->x=$x;
    }
    public function setY($y){
        $this->y=$y;
    }
    public function getX(){
        return $this->x;
    }
    public function getY(){
        return $this->y;
    }
    public function distance(){
        return $this->getY()-$this->getX();
    }
}
$new = new Point();
$new->setX(895);
$new->setY(1351);
echo $new->distance();