<!-- Day Finder: Write a script that finds the current day. If it is Sunday, print "HappySunday." -->


<?php 

date("d/m/yy");
$day = date("l");
if($day == "sunday"){
    echo "Happy Sunday";
} else {
    echo $day;
}
?>