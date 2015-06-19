<?php

function printer($s){

	//while(true){
		$string = (yield 'aaa');
		$string = (yield 'bbb');
		echo $string;
	//}
}


$printer = printer("ssss");
echo ($printer->send("ssss"));

//$printer->rewind();
var_dump($printer->send("ccc"));

//$printer->send("ccc");//这里调用了echo $string
//$printer->rewind();
///echo ($printer->current());
//$printer->rewind();
//$printer->rewind();