<?php

class Laboratorio2
{
	private $n;
	private $cadena;
	private $a;
	private $b;
	private $c;
	
	public function __construct($n_, $cadena_, $a_, $b_, $c_)
	{
		$this->n = $n_;
		$this->cadena = $cadena_;
		$this->a = $a_;
		$this->b = $b_;
		$this->c = $c_;
	}
	public function set_n($n_){
		$this->n = $n_;
	}
	public function set_cadena($cadena_){
		$this->cadena = $cadena_;
	}
	public function set_a_b_c($a_,$b_,$c_){
		$this->a = $a_;
		$this->b = $b_;
		$this->c = $c_;
	}
	public function calcularFibonaci()
	{
		$n1 = 1;
		$n2 = 0;
		for ($i=0; $i < $this->n; $i++) { 
			$suma = $n1 + $n2;
			$n1 = $n2;
			$n2 = $suma;
			echo $suma." ";
		}
	}
	public function calcularMenor()
	{
		if ($this->a < $this->b)
			if ($this->a < $this->c)
				return $this->a;
			else
				return $this->c;
		elseif ($this->b < $this->c)
			return $this->b;
		else
			return $this->c;
	}
	public function piramide()
	{
		$lon = strlen("$this->cadena");
		$cad = ($lon/2)-1;
		for ($i=1; $i <=$lon+1; $i++) 
		{ 
			echo '<center>'.substr("$this->cadena",$cad,$i),"<br><br>".'</center>';
			if ($cad== -$cad) 
			{
				$cad=0;	
			}
			else
			{
				$cad=$cad-1;
			}
			$i=$i+1;
		}
	}
}
?>