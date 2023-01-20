<?php
class Equation
{
    private $a, $b, $c, $x1, $x2, $d;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function get_a()
    {
        return $this->a;
    }
    public function get_b()
    {
        return $this->b;
    }
    public function get_c()
    {
        return $this->c;
    }
    public function get_x1()
    {
        return $this->x1;
    }
    public function get_x2()
    {
        return $this->x2;
    }
    public function solve()
    {
        $this->d = ($this->b * $this->b) - (4 * $this->a * $this->c);
        if ($this->d >= 0) {
            $this->x1 = ((-$this->b) + sqrt($this->d)) / (2 * $this->a);
            $this->x2 = ((-$this->b) - sqrt($this->d)) / (2 * $this->a);
            return true;
        } else {
            echo "Дискриминант отрицательный!";
            return false;
        }
    }
}
$equation = new Equation(2, 3, 2);
if ($equation->solve()) {
    echo $equation->solve();
    echo "x1 = " . $equation->get_x1() . "\n" . "x2 = " . $equation->get_x2();
}
