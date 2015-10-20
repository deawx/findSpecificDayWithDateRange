<?php
    function getDateForSpecificDayBetweenDates($start, $end, $weekday = 0){
        $weekdays="Sunday,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday";
        $arr_weekdays=explode(",", $weekdays);
        $weekday = $arr_weekdays[$weekday];
        if(!$weekday)
            die("Invalid Weekday!");

        $start= strtotime("+0 day", strtotime($start) );
        $end= strtotime($end);
        $dateArr = array();
        $friday = strtotime($weekday, $start);
        while($friday <= $end) {
            $dateArr[] = date("Y-m-d", $friday);
            $friday = strtotime("+1 weeks", $friday);
        }
        $dateArr[] = date("Y-m-d", $friday);
        return $dateArr;
    }
    $dateArr = getDateForSpecificDayBetweenDates("2015-10-01", "2015-10-31", 0); //0 Sun, 1 Mon, etc.
    echo $n = sizeof($dateArr);
    $i = 1;
    foreach ($dateArr as $date) {
        if($i < $n){
            echo "<br>".$date;
        }
        $i++;
    }
?>