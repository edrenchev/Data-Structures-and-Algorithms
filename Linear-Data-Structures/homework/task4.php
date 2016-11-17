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

$list = new SplDoublyLinkedList();
/*do {
	$num = readline($prompt);

	if(empty($num)) continue;

	$num = (int)$num;
	$list->push($num);
}
while (!empty($num));

if($list->count() < 2) {
	print ('Error sequence is < 2 elements');
	return;
}*/

$list->push(1);
$list->push(3);
$list->push(3);
$list->push(4);
$list->push(5);
$list->push(2);
$list->push(2);
$list->push(1);
$list->push(2);
$list->push(4);
$list->push(8);
$list->push(2);
$list->push(5);
$list->push(5);
$list->push(5);


$maxCount = 1;
$maxStartIndex = 0;
$currCount = 1;
$startIndex = 0;

for ($i = 0; $i < $list->count()-1; $i++) {

	if($list->offsetGet($i) == $list->offsetGet($i+1)) {
		$currCount++;
	}

	if($maxCount < $currCount) {
		$maxCount = $currCount;
		$maxStartIndex = $startIndex ;
	}

	if($list->offsetGet($i) != $list->offsetGet($i+1)) {
		$currCount = 1;
		$startIndex = $i+1;
	}

}

for($i=$startIndex; $i < $startIndex+$maxCount; $i++) {
	print ($list->offsetGet($i)." ");
}



