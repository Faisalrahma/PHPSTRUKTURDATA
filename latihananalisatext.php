<?php
$teks = "Nvidia dikabarkan akan mengurangi produksi kartu grafis lamanya untuk bisa meningkatkan volume produksi lini kartu grafis terbarunya, RTX 3000. Dilansir Techspot, Selasa, hal ini diketahui dari postingan di sebuah forum Board Channel, yang merupakan forum tertutup yang berisi distributor dan direksi rekanan pembuat kartu grafis.Dalam sebuah postingan di forum tersebut diketahui kalau Nvidia mengirimkan pemberitahuan pada perusahaan pembuat kartu grafis kalau mereka akan mengurangi pasokan chip RTX 2060 sampai setengahnya mulai bulan Juni ini.";
$filter = array(".",",","?","!","(",")","-","&","+","_","=",":");
$teksfilter = str_replace($filter, "", $teks);

$kata   = explode(" ", $teksfilter);
$hasil  = count($kata);
$data   = array_count_values($kata);
echo "<h3>Teks</h3> <br> $teks";
echo "<br>";
echo "<br> <b> 1. Ada berapa kata pada berita di atas</b><br>";
echo "Jumlah Kata: <b>$hasil</b> buah kata <br>";
echo "<br>";

echo "<b>2.	Mencari dan menghitung kata</b><br>";
foreach($data as $x => $x_value) {
    echo $x." = ".$x_value." kata";
    echo "<br>";
}
echo "<br><b>3.	Urutkan kata kata yang terdapat pada kalimat berita di atas<br> Pengurutan di mulai dari ANGKA, HURUF BESAR, HURUF KECIL</b><br>";
sort($kata);
echo implode(" ",$kata);

?>