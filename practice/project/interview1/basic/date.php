<?php  

function dateDiffInDays($date1, $date2){
    $diff = strtotime($date2) - strtotime($date1);
    return abs(round($diff / 86400));
}

$date1 = "06-08-2023";

$date2 = "08-08-2023";

$dateDiff = dateDiffInDays($date1, $date2);

printf("Difference between two dates: ". $dateDiff . " Days ");

?>