<?php
echo "//selection sortn", "<br>";
$data=array(6,5,3,1,8,7,2,4);
print_r($data);
function selection_sort($data)
{
  $n=count($data);
  for ($i = 0;$i<7 ;$i++)
  {
    $k = $i;
    for ($j = $i+1;$j<$n;$j++)
    {
      if ($data[$j] < $data[$k]) $k = $j;
    }
    echo "<br>", "Perulangan = ", $i, "<br>";
    print_r($data);
    echo "<br>", "Mengambil Data Ke ", $k, " = ", $data[$k], " Ditukar dengan Data ke ",$i, " = ", $data[$i],  "<br>";
    $dummy=$data[$i];
    $data[$i]=$data[$k];
    $data[$k]=$dummy;
  }
  return $data;
}
echo "<br>";
print_r(selection_sort($data));