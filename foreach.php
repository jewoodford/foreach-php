<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing1) {
	if (is_float($thing1)) {
		echo "float\n";
	} else if (is_int($thing1)) {
		echo "integer\n";
	} else if (is_bool($thing1)) {
		echo "boolean\n";
	} else if (is_array($thing1)) {
		echo "array\n";
	} else if (is_null($thing1)) {
		echo "null\n";
	} else if (is_string($thing1)) {
		echo "string\n";
	}
}
echo '==================================' . PHP_EOL;
foreach ($things as $thing2) {
	if (is_scalar($thing2)) {
		echo "$thing2 is scalar\n";
	}
}
echo '==================================' . PHP_EOL;
foreach ($things as $thing3) {
	if (is_scalar($thing3)) {
		echo ($thing3) . PHP_EOL;
	} else if (is_array($thing3)) {
		var_dump($thing3) . PHP_EOL;
	}
}
?>