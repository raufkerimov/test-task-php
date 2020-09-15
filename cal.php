<?php

class Calculation
{
    public $result = 0;

    public function add(float $digit)
    {
        return $this->result = $this->result + $digit;
    }

    public function minus(float $digit)
    {
        return $this->result = $this->result - $digit;
    }

    public function division(float $digit)
    {
        return $this->result = $this->result / $digit;
    }

    public function multiplicate(float $digit)
    {
        return $this->result = $this->result * $digit;
    }

    public function round()
    {
        return $this->result = round($this->result);
    }

    public function __toString()
    {
        return strval($this->result);
    }
}