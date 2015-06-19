<?php
  $makefoo = true;

  bar();

  if($makefoo){
	function foo(){
		echo "I don't exist until program  execution reaches me.\n";
		echo "I CAN \n";
	}
  }

  //$makefoo 改成false就不能调用foo()函数了。
  foo();

  function bar(){
	echo "I exist immediately  upon program start.\n";
  }
?>