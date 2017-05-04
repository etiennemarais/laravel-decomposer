<?php

use Exception, Awesome;
namespace Awesome\Stuff;
class bad_class
	extends \Exception{
	const camelCase = 'abc';
	public $awesome = 'unvisible'; public $_great = 'fabulous';

	function Do_something_snaked_cased(){
		// This is one really frigging long line. I wonder if PHP-CS-Fixer will trim this really frigging long line? It says no hard limit so I think it won't.

		if( isset ($abc) || TRUE )
		{
			// do stuff

		}

	}

	final static public function woop() {}

	function _invisible( $stuff = [] , $other_stuff ) {
		switch($stuff)
		{
			case 0:
				echo 'stuff';
				break;
		}
	}

}

echo "echo";

?>