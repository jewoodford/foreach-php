<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
	if (is_float($thing)) {
		echo "float\n";
	} else if (is_int($thing)) {
		echo "integer\n";
	} else if (is_bool($thing)) {
		echo "boolean\n";
	} else if (is_array($thing)) {
		echo "array\n";
	} else if (is_null($thing)) {
		echo "null\n";
	} else if (is_string($thing)) {
		echo "string\n";
	}
}

?>