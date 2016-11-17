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

$priorityQueue = new SplPriorityQueue();

$maxNumber = PHP_INT_MAX;

do {
	$num = readline($prompt);

	if(empty($num)) continue;

	$num = (int)$num;
	$priorityQueue->insert($num, $maxNumber-$num);
}
while (!empty($num));

$priorityQueue->rewind();
print ("Sort asc: ");
while ($priorityQueue->valid()) {
	print ($priorityQueue->current() . ' ');
	$priorityQueue->next();
}


