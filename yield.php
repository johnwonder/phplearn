<?php

function nums(){
	
	for($i = 0; $i < 5; ++$i){
	
		$cmd = (yield $i);

		if($cmd == 'stop')
			return;
	}
}

function gen(){

	$ret = (yield 'yield1');
//	var_dump($ret);
	$ret = (yield 'yield2');
	var_dump($ret);
}

/*调用迭代器的方法一次, 其中的代码运行一次.例如, 如果你调用$range->rewind(), 那么xrange()里的代码就会运行到控制流第一次出现yield的地方. 而函数内传递给yield语句的返回值可以通过$range->current()获取.

为了继续执行生成器中yield后的代码, 你就需要调用$range->next()方法. 这将再次启动生成器, 直到下一次yield语句出现. 因此,连续调用next()和current()方法, 你就能从生成器里获得所有的值, 直到再没有yield语句出现*/
$gen = gen();
var_dump($gen->current());
var_dump($gen->send('ret1'));
var_dump($gen->send('ret2')); //调用了gen内部的var_dump
//$gen = nums();

//$gen->rewind();

//var_dump($gen->current());

//var_dump($gen->current());

//$gen->next();

///var_dump($gen->current());


//$gen->next();

//var_dump($gen->current());

//$gen->rewind();