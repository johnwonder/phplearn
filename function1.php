<?php 

	function format_string($string,$functions){
		$funcs = explode(",",$functions);

		foreach($funcs as $func){
				if(function_exists($func)){
					$string = $func($string);
				}
		}

			return $string;
	}

	//���THIS IS A TEST
	echo format_string("   <b>   this is  a test      </b>","strip_tags,strtoupper,trim");
?>