<?php
$DAY = '01/01/2014';
if ($DAY == NULL) {
        $DAY = date('Y-m-d');
	$PDAY = date('Y-m-d', strtotime('- 1 month'));
} else {
	$DAY = date('Y-m-d', strtotime($DAY));
	$PDAY = strtotime('-1 month', $DAY);
	$PDAY = date('Y-m-d', strtotime($PDAY));
}
?>
