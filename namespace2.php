<?php

namespace A \ B \ C
{

class Exception extends \ Exception{

	
}

$a = new Exception('hi');
	$b = new \ Exception ('hi');

	$c = new \ArrayObject;

const E_ERROR = 45;
function strlen($str){

  return \ strlen ($str) -1;
}

echo E_ERROR ,"\n";
echo INI_ALL,"\n";

echo strlen('hi');
if(is_array('hi')){
	echo "is array\n";

}else{
	echo "is not array\n";
}

}
