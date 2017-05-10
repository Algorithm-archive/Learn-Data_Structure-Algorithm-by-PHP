<?php
/* Counting Sort implementation in PHP */
function countingSort(Array $arr) {
    $count = array();

    foreach ($arr as $item) {
        $count[$item] = isset($count[$item]) ? ($count[$item] + 1) : 1; //Increase the counter if exists or initialize with '1'
    }

    $sortedArray = array();
    $minVal = min($arr); // If the min value of the array given, this line can be removed
	$maxVal = max($arr); //If the max value of the array given, this line can be removed

	for ($i = $minVal; $i <= $maxVal; $i++) { //based on the frequency, building the new sorted array
        if(isset($count[$i])) {
            while ($count[$i]-- > 0) {
    			$sortedArray[] = $i;
    		}
        }
	}

	return $sortedArray;
}

/************ Testing Binary Search Implementation ***************/
$testList = array();

foreach (range(1, 10) as $key) {
    $testList[] = mt_rand(-100, 100);
}

$testList = countingSort($testList);

print_r($testList);

?>
