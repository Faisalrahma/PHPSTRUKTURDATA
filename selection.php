<?php
echo "//selection sortn";
$data=array(6,5,3,1,8,7,2,4);
function selection_sort($data){
  $n=count($data);
  for ($i = 0;$i<$n;$i++){
    $k = $i;
    for ($j = $i+1;$j<$n;$j++){
      if ($data[$j] < $data[$k]) $k = $j;
    }   
    $dummy=$data[$i];
    $data[$i]=$data[$k];
    $data[$k]=$dummy;
  }
  return $data;
}
print_r(selection_sort($data));