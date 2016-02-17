<?php
class complex
{
	var $reel;
	var $imag;
	var $mod;
	var $arg;
	var $mandel;

	function __construct($reel, $imag, $iter=NULL, $degree=NULL)
	{
		if (is_numeric($reel) && is_numeric($imag)) {
			$this->reel = $reel;
			$this->imag = $imag;
			$this->module();
			$this->argument();
			if ((!is_null($iter)) && (!is_null($degree)))
				$this->is_mandelbrot($iter, $degree);
		} else {
			return (false);
		}
	}

	function aff_simple()
	{
		if (($this->reel == 0) && ($this->imag != 0)) {
			echo $this->imag. "i";
		} elseif (($this->reel != 0) && ($this->imag == 0)) {
			echo $this->reel;
		} else {
			if ($this->imag > 0) {
				echo $this->reel." + ".$this->imag."i\n";
			} else {
				echo $this->reel." - ".substr($this->imag, 1)."i\n";
			}
		}
	}

	function conjug()
	{
		$conj = new complex($this->reel, -$this->imag);
		return $conj;
	}


	function module()
	{
		$this->mod = sqrt(pow($this->reel,2) + pow($this->imag,2));
	}

	function argument()
	{
		$this->arg = atan2($this->imag, $this->reel);
	}

	function add($clx)
	{
		$treel = $this->reel;
		$creel = $clx->reel;
		$timag = $this->imag;
		$cimag = $clx->imag;
		$result = new complex($treel+$creel, $timag+$cimag);
		return ($result);
	}

	function mul($clx)
	{
		$rsltreel = (($this->reel*$clx->reel) - ($this->imag*$clx->imag));
		$rsltimag = (($this->reel*$clx->imag) + ($this->imag*$clx->reel));
		$result  = new complex($rsltreel,$rsltimag);
		return ($result);
	}

	function cpow($k)
	{
		$crep = $this;
		for ($i=1; $i < $k; $i++) {
			$crep = $crep->mul($this);
		}
		return ($crep);
	}

	function is_mandelbrot($n, $k)
	{
		$cu = new complex(0,0);
		$ca = $this;
		$quit = false;
		for ($i=0; ($i < $n) && ($quit == false); $i++) {
			$square_cu = $cu->cpow($k);
			$cu = ($square_cu->add($ca));
			if (($cu->mod) > 2){
				$this->mandel =  (mandelpercent($i, $n));
				$quit == true;
				return (true);
			}
		}
		$this->mandel =  (mandelpercent($i, $n));
		return (true);
	}
}

function mandelpercent($iter, $max)
{
	$rslt = ($iter*255) / $max;
	return ($rslt);
}
?>