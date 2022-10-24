<?php 

function reformatDate ($dateStr) {
    return DateTime::createFromFormat('d/m/Y h:i a', $dateStr)->format('m/d/Y h:i:s a');
}

echo reformatDate('31/10/2019 7:15 am') . "\n"; // 10/31/2019 07:15:00 am
echo reformatDate('31/10/2019 11:58 am') . "\n"; // 10/31/2019 11:58:00 am