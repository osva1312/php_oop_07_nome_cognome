<?php
trait calculator{
public function sum($a, $b) {
  return $a + $b;
}

public function sub($a, $b) {
  return $a - $b;
}

public function mul($a, $b) {
  return $a * $b;
}

public function div($a, $b) {
  return $a / $b;
}

public function sqr($a){
  return sqrt($a);
}
}
class Rettangulo{
    use calculator;
    public $b;
    public $h;
    public function __construct($b, $h){
        $this->b = $b;
        $this->h = $h;
    }
    public function getArea(){
    return $this->mul($this->b, $this->h);
    }
    public function getPerimetro(){
        return $this->sum($this->mul(2,$this->b), $this->mul(2,$this->h));
    }
    public function getDiagonale(){
        $b2 = $this->mul($this->b,$this->b);
        $h2 = $this->mul($this->h,$this->h);
        return $this->sqr($this->sum($h2,$b2));

    }
  
}
$rettangulo = new Rettangulo(10,5);
echo "Area = " . $rettangulo->getArea() ."\n";
echo "Perimetro = " . $rettangulo->getPerimetro()."\n";
echo "Diagonale = " . $rettangulo->getDiagonale()."\n";
