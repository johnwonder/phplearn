<?php

namespace MyProject{
	
	function connect(){ echo "one"; };
	 connect();

}

namespace MyProject\Sub{
	function connect() { echo "TWO"; };
	connect();
}

namespace MyProject\Sub\Level{
	
	function connect(){ echo "THREE"; }

	//\MyProject\Sub\Level\connect();
	connect();
}

