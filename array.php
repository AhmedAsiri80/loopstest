<?php

// indexed array
//$fav_color = array("Red" , "Blue" , " Green"); // تكتب صيغة المصفوفة ايضا بالاقواس []
echo "<br>--------------------<br>";
// associative array  key => value
$student_names = array(
    'ahmed' => 88 ,
    'ali' => 99 ,
    'khaled' => 90
);
// foreach($student_names as $key => $value ) {
//     echo "Student ". $key ."got : ". $value . "<br>";
// }

echo "<br>--------------------<br>";
$fav_colors = array("Red" , "Blue" , " Green"  , "Blue" , " Green"); // تكتب صيغة المصفوفة ايضا بالاقواس []
echo count($fav_colors);
echo "<br>--------------------<br>";
for($i=0; $i<= 4; $i++ ){
    echo $i .' - ' . $fav_colors[$i]."<br>"; // عمل تعداد بالارقام للمصفوفه .' - ' .
}

echo "<br>--------------------<br>";

foreach($fav_colors as $color) {
    echo $color.'<br>';
}
?>


<html>
     <head> <title> Table</title></head>
     <body>
         <table border='2'>
             <tr>
                  <th>Name</th>
                  <th>Score</th>
             </tr>
             <?php
             foreach($student_names as $key => $value ) {
                echo "<tr><td> ". $key ."</td><td> ". $value . "</td></tr>";
            }
             ?>
         </table>
    </body> 
</html>