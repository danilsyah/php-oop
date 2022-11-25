<?php

$datetime = new Datetime();

$datetime->setDate(1990, 1, 20);
$datetime->setTime(10,10,10,0);

// Y = year, M = month, D = day, m = minutes, s = second
// menambahkan maju 1 tahun
$datetime->add(new DateInterval("P1Y"));
// mundur 1 bulan
$minusOneMonth = new DateInterval("P1M"); 
$minusOneMonth->invert = true;
$datetime->add($minusOneMonth);

var_dump($datetime);

$now = new DateTime();
var_dump($now);
// mengubah waktu time zone
$now->setTimezone(new DateTimeZone("America/Toronto"));
var_dump($now);

$now->setTimezone(new DateTimeZone("Asia/Jakarta"));
$string = $now->format("Y-m-d H:i:s");
echo "waktu saat ini : $string". PHP_EOL;

// cara parsing string to datetime
$stringWaktu = "2022-11-23 10:10:00";
$date = DateTime::createFromFormat("Y-m-d H:i:s", $stringWaktu, new DateTimeZone("Asia/Jakarta"));
if($date){
    var_dump($date);
}else{
    echo "Format Salah";
}