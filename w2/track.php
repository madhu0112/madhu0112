<?php
$counterFile = "counter.txt";
if (!file_exists($counterFile)) {
 file_put_contents($counterFile, "0");
}
$currentCount = file_get_contents($counterFile);
$newCount = $currentCount + 1;
file_put_contents($counterFile, $newCount);
?>