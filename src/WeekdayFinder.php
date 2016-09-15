<?php
    class WeekdayFinder
    {


        function makeDay($month, $day, $year)
        {
            // mktime takes the hour, minute, second, month, day, and year and returns the unix time stamp of the given date. The timestamp can be returned via the date function, using its built in formatting, as below. 
            $time_input = mktime(0, 0, 0, $month, $day, $year);
            return date("l", $time_input);
        }


    }

?>
