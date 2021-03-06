<?php

class Deque
{
	public $queue = array();
	/**
	*构造函数，初始化队列
	**/
	public function __constructor($queue =array())
	{
		if(is_array($queue))
		{
			$this->queue = $queue;
		}
	}

	/**
	 *获取第一个元素
	**/
	public function front()
	{
		return reset($this->queue);
	}

	/**
	*获取最后一个元素
	**/
	public function back()
	{
		return end($this->queue);
	}

	/*
	*判断是否为空
	*/
	public function is_empty()
	{
		return empty($this->queue);
	}

	/**
	*队列大小
	*/
	public function size()
	{
		return count($this->queue);
	}

	/*
	*插入到尾
	*/
	public function push_back($val)
	{
		array_push($this->queue, $val);
	}

	/*
	*插入到头
	*/
	public function push_front($val)
	{
		array_unshift($this->queue, $val);
	}

	/*
	*移除最后一个元素
	*/
	public function pop_front()
	{
		return array_shift($this->queue);
	}

	/*
	*清空队列
	*/
	public function clear()
	{
		$this->queue = array();
	}
}



//初始化一个双向队列
$deque = new Deque(array(1,2,3,4,5));
echo $deque->size().PHP_EOL;
echo $deque->is_empty.PHP_EOL;
echo $deque->front().PHP_EOL;
echo $deque->back().PHP_EOL;
echo PHP_EOL;

//弹出元素测试
echo $deque->pop_back().PHP_EOL;
echo $deque->pop_front.PHP_EOL;
echo $deque->size().PHP_EOL;
echo PHP_EOL;

$deque->push_back('a').PHP_EOL;
$deque->push_front(0).PHP_EOL;
$deque->size().PHP_EOL;
echo PHP_EOL;

/*插入测试*/
$deque->front().PHP_EOL;
$deque->back().PHP_EOL;
$deque->size().PHP_EOL;
echo PHP_EOL;

//清空测试
$deque->clear();
echo $deque->is_empty();
