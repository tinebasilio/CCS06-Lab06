<?php  
function leapYear($year)  {  
    return (date('L', mktime(0, 0, 0, 1, 1, $year))==1);  
}  
// for loop 
for($year = 4; $year <= 2024; $year++)  {  
    if (leapYear($year))  {  
       echo "$year" . "<br>";  
    }  
}  
?> 
