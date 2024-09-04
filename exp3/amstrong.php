<?PHP 
 echo "enter a number:";
 $num = (int)readline(); 
 $rep = $num; 
 $sum = 0; 
 while($num>0) 
 { 
  $rem = $num%10; 
  $sum = $sum + $rem*$rem*$rem; 
  $num = $num/10; 
 } 
 if ($rep == $sum) 
  echo "Given integer, $rep is an ARMSTRONG number"; 
 else 
  echo "Given integer, $rep is NOT ARMSTRONG number"; 
?> 