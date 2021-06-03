<?php
echo "//insertion sortn";
$data=array(6,5,3,1,8,7,2,4);
echo "<br>";
print_r($data);
echo "<br>";
  $n=count($data);
  echo "jumlah data :".$n."<br>";
  $start_time = microtime(true);

  for ($i = 0;$i<$n;$i++)
  { 
    echo "<br>";
    echo "perulangan : ".$i."<br>";
    for ($k = $i; $k>0; $k--) {
        if($data[$k]>$data[$k-1])
        {
          echo "data ke ".$k. " = ".$data[$k]." > "."data ke ".($k+1). " = ".$data[$k+1]." JADI Dipindah<br>";
          }
          else
          {
            echo "data ke ".$k. " = ".$data[$k]." > "."data ke  ".($k+1)." = ".$data[$k+1]." JADI Tidak dipindah" ;
            $dummy=$data[$k];
            $data[$k]=$data[$k-1];
            $data[$k-1]=$dummy;
            echo "<br>";
      }
    }
    echo "data ke ".$k. " = ".$data[$k]." > "."data ke ".($k+1). " = ".$data[$k+1]." JADI Dipindah<br>";
    print_r($data);
    echo "<br>";
  }
?>
