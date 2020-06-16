<?php
  $students= array("Nikos", "Petros", "Mary","Chris", "Helen", "Jack");
  /* Associative Array: Key=>Value */
  $course1 = array("CourseCode"=> "ITC4314",
                   "CourseTitle"=> "Intenet Programming",
                   "Credits"=>3,
                   "Hours"=>"MW 18-21");

  /* student id, firstname, lastname, credits, ci */
  $student = array("studentid"=>23435, "lastname"=>"kotsovoulou");
echo '<h1> List of students </h1>';
foreach ($students as $name) {  /* For each name in the students array */
    echo $name . '<br />';
}

echo '<h1> Course </h1>';
foreach ($course1 as $key=>$value) { /* for each key-value pair in the course1 array */
    echo $key . ' ' . $value . '<br />';
}
