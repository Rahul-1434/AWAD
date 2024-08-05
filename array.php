<?php 
 $student = array("Name"=>"Ram", "Course"=>"B.Tech.","Branch"=>"CSE","Year"=>1); 
 echo "Given array elements are : "."\n"; 
 foreach($student as $key=>$key_value) 
  echo $key." : ".$key_value."\n"; 
 echo "Given array elements in ascending oderer : "."\n"; 
 asort($student); 
 foreach($student as $key=>$key_value) 
  echo $key." : ".$key_value."\n"; 
 echo "Given array elements in descending oderer : "."\n"; 
 arsort($student); 
 foreach($student as $key=>$key_value) 
  echo $key." : ".$key_value."\n"; 
 echo "Given array elements in ascending oderer (key based) : "."\n"; 
 ksort($student); 
 foreach($student as $key=>$key_value) 
  echo $key." : ".$key_value."\n"; 
 echo "Given array elements in descending oderer (key based): "."\n"; 
 krsort($student); 
 foreach($student as $key=>$key_value) 
  echo $key." : ".$key_value."\n"; 
?>  