<?php
function readline($prompt = null){
	if($prompt){
		echo $prompt;
	}
	$fp = fopen("php://stdin","r");
	$line = rtrim(fgets($fp, 1024));
	fclose($fp);
	return $line;
}

$prompt = 'Enter num or empty line for end: ';

$stack = new SplStack();

do {
	$num = readline($prompt);

	if(empty($num)) continue;

	$num = (int)$num;
	$stack->push($num);
}
while (!empty($num));

print ("Revert numbers: ");
while ($stack->isEmpty() === false) {
	print ($stack->pop() . " ");
}