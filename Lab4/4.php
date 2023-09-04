<?php

$currentDate = date('Y-m-d');
echo "Current Date: ". $currentDate."\n";

$nextWeek = strtotime('+1 week');
echo "Next week: " . date('Y-m-d', $nextWeek) . "\n";

$customDate = mktime(0, 0, 0, 12, 31, 2023);
echo "Custom Date: " . date('Y-m-d', $customDate) . "\n";

$currentTime = time();
echo "Current Unix Timestamp: $currentTime \n";

$currentGMT = gmdate('H:i:s');
echo "Current GMT Time: $currentGMT\n";

$nextHour = strtotime('+1 hour');
echo "Next hour: " . date('H:i:s', $nextHour) . "\n";

$currentTimezone = new DateTimeZone('America/New_York');
$dateTime = new DateTime('now', $currentTimezone);
echo "Current time in New York: " . $dateTime->format('Y-m-d H:i:s') . "\n";


?>
