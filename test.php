<?php
//$rand = range(1, 10);
//shuffle($rand);
//foreach ($rand as $val) {
//    echo $val . '<br />';
//}


//
// $num = Array();
// reset($num);
// for($i=1;$i<=10;$i++) 
// {
//   $num[$i]=rand(1,100);
//    if($i>1) 
//    {
//       for($x=1; $x<$i; $x++)
//       {
//         if($num[$i]==$num[$x]) 
//         { 
//           $i--; 
//           break; 
//         }
//      }
//   }
// }
// foreach($num as $valor) 
// {
//   echo "$valor<BR>";
// }

 $ar=array(0,1,2,3,4,5,6,8); 
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  
shuffle($ar); 
print array_shift($ar); 
echo '<br/>';  