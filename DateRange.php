<?php
function getDatesFromRange($start, $end) {
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(
         new DateTime($start),
         $interval,
         $realEnd
    );

    foreach($period as $date) {
        $array[] = $date->format('Y-m-d');
    }

    return $array;
}

// Call the function
$dates = getDatesFromRange('2010-10-01', '2010-10-31');

// Print the output
echo "<pre>";
print_r($dates);