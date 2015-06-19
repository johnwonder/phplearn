<?php 
 header("Content-type: text/plain\n\n"); //添加
class _Exception
{
	protected $message = "Unknown exception";

	protected $code = 0;
	protected $file;
	protected $line;

	function __construct ($message = null , $code = 0){}

	final function getMessage(){}

	final function getCode(){}

	final function getFile(){}
	final function getLine(){}
	final function getTrace(){}
	final function getTraceAsString(){}

	/*可重载的方法 */
	function __toString(){}

}


class MyException extends Exception
{
		public function __construct($message,$code = 0){
		
			  parent:: __construct ($message,$code);
		}

		public function __toString(){
			return __CLASS__ . ":[ {$this -> code} ]: {$this -> message } \n";
		}

		public function customFunction(){
			echo "A Custom function for this type of exception\n";
		}

}


class TestException
{

	public $var;

	const THROW_NONE = 0;
	const THROW_CUSTOM = 1;
	const THROW_DEFAULT = 2;

	function __construct($avalue = self:: THROW_NONE){
	
		switch($avalue){
			
			case self::THROW_CUSTOM:
				throw new MyException('1 is an invalid parameter',5);
			break;

			case self::THROW_DEFAULT:
				throw new Exception('2 isnt allowed as a parameter',6);
			break;

			default:
				$this -> var = $avalue;
			break;
		
		}
	}
}

try{
	$o = new TestException(TestException::THROW_CUSTOM);

}catch(MyException $e){
		echo "Caught my exception\n",$e;
		$e-> customFunction();
}