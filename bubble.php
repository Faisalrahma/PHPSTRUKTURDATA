<?php
echo "bubble sort";
$data=array(6,5,3,1,8,7,2,4);
function bubble_sort($data){
  $n=count($data);
  for ($i = 0;$i<$n;$i++){ for ($j = $n-1;$j>$i;$j--){
          if ($data[$j] < $data[$j-1]){ 
              $dummy=$data[$j];
              $data[$j]=$data[$j-1];
              $data[$j-1]=$dummy;
          }
      }    
  }
  return $data;
}
echo "Data Acak \n";
echo implode ($data);
echo "Data Urut \n";
echo implode (bubble_sort($data));

?>