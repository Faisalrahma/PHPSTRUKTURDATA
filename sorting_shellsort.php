<?php
echo "//shell sortn";
$data=array(6,5,3,1,8,7,2,4);
function shell_sort($data){
 $n=count($data);
   $k=0;
   $gap[0]=(int) ($n / 2);
   echo "data di bagi menjadi ", $gap[0], "<br>";
   echo $data[0],",", $data[1],",", $data[2],",", $data[3];
   echo "<br>", $data[4],",", $data[5],",", $data[6],",", $data[7];
   echo "<br>", "(", $data[0],",",$data[4],")" , "(" , $data[1] ,"," ,$data[5], ")" , "(", $data[2],",",$data[6],")" , "(", $data[3],",",$data[7],")";
   while($gap[$k]>1){
     $k++;
     $gap[$k]=(int)($gap[$k-1]/2);
     echo "<br>";
   }
   for($i=0;$i<=$k;$i++){
   $step=$gap[$i];
     for($j=$step;$j<$n;$j++){
       $temp=$data[$j];
       $p=$j-$step;
       while($p>=0 && $temp<$data[$p]){
         $data[$p+$step]=$data[$p];
         $p=$p-$step;
       }
       $data[$p+$step]=$temp; 
     }
   }
   return $data;
}
echo"<br>";
print_r(shell_sort($data));