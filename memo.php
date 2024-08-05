<?php 
 echo "Enter student's name :"; 
 $name = readline(); 
 echo "Enter roll number : "; 
 $rno = readline(); 
 echo "Enter six subject marks : "; 
 list($tel, $sl, $eng, $mat, $sci, $soc) = explode(" ", readline()); 
 $total = $tel + $sl + $eng + $mat + $sci + $soc; 
 $avg = $total/6; 
 echo "Student's "."\n"; 
 echo "Name : $name"."\n"; 
 echo "Roll Number : $rno"."\n"; 
 echo "Marks in, "."\n"; 
 echo "   Telugu : $tel"."\n"."   Second Language : $sl"."\n"."   English : $eng"."\n"."   Mathematics : $mat"."   Science : $sci"."\n"."   Social : $soc"."\n"."Total Marks : $total"."\n"."Average : $avg"."\n"; 
 if( $tel>=35 && $sl>=35 && $eng>=35 && $mat>=35 && $sci>=35 && $soc>=35) 
 { 
  echo "Result : PASS"."\n"; 
  switch((int)($avg/10)) 
  { 
   case 3: echo "Result : Noraml Pass"; 
     break; 
   case 4: echo "Result : Third Class"; 
     break; 
   case 5: echo "Result : Second Class"; 
     break; 
   case 6: echo "Result : First Class"; 
     break; 
   default : echo "Result : DISTINCTION"; 
  } 
 } 
 else 
 { 
  echo "Result and Grade : FAIL"; 
 } 
?> 