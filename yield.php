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

/*���õ������ķ���һ��, ���еĴ�������һ��.����, ��������$range->rewind(), ��ôxrange()��Ĵ���ͻ����е���������һ�γ���yield�ĵط�. �������ڴ��ݸ�yield���ķ���ֵ����ͨ��$range->current()��ȡ.

Ϊ�˼���ִ����������yield��Ĵ���, �����Ҫ����$range->next()����. �⽫�ٴ�����������, ֱ����һ��yield������. ���,��������next()��current()����, ����ܴ��������������е�ֵ, ֱ����û��yield������*/
$gen = gen();
var_dump($gen->current());
var_dump($gen->send('ret1'));
var_dump($gen->send('ret2')); //������gen�ڲ���var_dump
//$gen = nums();

//$gen->rewind();

//var_dump($gen->current());

//var_dump($gen->current());

//$gen->next();

///var_dump($gen->current());


//$gen->next();

//var_dump($gen->current());

//$gen->rewind();