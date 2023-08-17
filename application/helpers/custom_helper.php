<?php

function generateSummary($employeeData ) {
               
    // Initialize an empty summary array
    $summary = array();

    // Process the employee data to calculate break and total hours
    foreach ($employeeData as $data) {
        $employeeName = strip_tags($data[0]);
        $taskName = strip_tags($data[1]);
        $time = (float) strip_tags($data[8]);

        // Calculate the break and total hours based on task name
        if (!isset($summary[$employeeName])) {
            $summary[$employeeName] = array(
                'break_hours' => 0,
                'total_hours' => 0,
            );
        }

        if (contains('break',$taskName)) {
            $summary[$employeeName]['break_hours'] += $time;
        }

        $summary[$employeeName]['total_hours'] += $time;
    }

    // Display the summary
    return $summary;
}

function contains($needle, $haystack)
{
    return stripos($haystack, $needle) !== false;
}


function decimalToTime($decimalHours) {
    $hours = floor($decimalHours);
    $minutes = ($decimalHours - $hours) * 60;
    $formattedTime = sprintf("%02d:%02d", $hours, $minutes);
    return $formattedTime;
}

function changeSubjectAccordingtoPeriod($periodText,$periodto,$periodfrom){
    if ($periodText == 'Today') {
        $period = date("m/d/Y");
    } else if ($periodText == 'This Month Logged Time') {
        $period = date("F") . ', ' . date("Y");
    } else if ($periodText == 'Last Month Logged Time') {
        $period = date("F", strtotime('last month')) . ', ' . date("Y", strtotime('last month'));
    } else if ($periodText == 'Last Week Logged Time') {
        $last_week_start = date("m/d/Y", strtotime("this week"));
        $last_week_end = date("m/d/Y", strtotime("this week +6 days"));
        $period = 'From ' . $last_week_start . ' To ' . $last_week_end;
    } else if ($periodText == 'This Week Logged Time') {
        $this_week_start = date("m/d/Y", strtotime("this week"));
        $this_week_end = date("m/d/Y", strtotime("this week +6 days"));
        $period = 'From ' . $this_week_start . ' To ' . $this_week_end;
    } else {
        $periodfrom = date("m/d/Y", strtotime($periodfrom));
        $periodto = date("m/d/Y", strtotime($periodto));
        $period  = ($periodfrom == $periodto) ? $periodfrom : 'From ' . $periodfrom . ' To ' . $periodto;
    }
    return $period;
}