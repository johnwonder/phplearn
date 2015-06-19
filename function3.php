<?php
	
	function foo()
	{
		function bar()
		{
			echo "I don't exist until foo() is called.\r\n";
		}
	}

	foo();

	bar();
?>

<?php

	$str = <<<EOT
	Example of string
	spanning multiple lines
	using heredoc syntax.
EOT;
	
	echo $str;
