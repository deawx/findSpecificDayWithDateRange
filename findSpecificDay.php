
<?php
    function getDateForSpecificDayBetweenDates($startDate, $endDate, $weekdayNumber)
    {
        $startDate = strtotime($startDate);
        $endDate = strtotime($endDate);

        $dateArr = array();

        do
        {
            if(date("w", $startDate) != $weekdayNumber)
            {
                $startDate += (24 * 3600); // add 1 day
            }
        } while(date("w", $startDate) != $weekdayNumber);


        while($startDate <= $endDate)
        {
            $dateArr[] = date('Y-m-d', $startDate);
            $startDate += (7 * 24 * 3600); // add 7 days
        }

        return($dateArr);
    }

    $dateArr = getDateForSpecificDayBetweenDates('2015-01-01', '2015-12-31', 1); // 0 Sun, 1 Mon, etc.
    $i = 0;
    foreach ($dateArr as $date) {
        echo $date."</br>";
        $i++;
    }
    echo $i;

?>