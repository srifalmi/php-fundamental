
<?php 
//MENAMBAH ANGKA KE VARIABEL
/*
$x = 10; 
$y = 12;
echo  ++$x; // 11 hasil bertamabah 1 sebelum menjalankan echo
echo  $y++; // 12 hasil bertambah 1 setelah menjalankan echo


*/



//PERBARUI NILAI VARIABEL
/*
     $x = 5;
     $y = 15;
     $a = 18;
     $b = 75 % 30;
     $c = 12;

   echo $x += 19;   
    echo "<br>"; 
    echo $y -= 12;  //$a = $a * 2; dua opsi ada
    echo "<br>"; 
    echo $a * 4;
    echo "<br>";
    echo $b ;
    echo "<br>";
    echo $c / 3;
*/
  

//PENGGABUNGAN STRING
/*
$masa = 'Belajar PHP';

echo "AYO, {$masa}"
*/  


//PERCABANGAN IF dan Else pada operator Boolean

/*
$user = 'sri';
if($user !== 'sri'){
    echo "$user anak magang"; //kondisi salah sehingga code tidak dijalankan
}
elseif($user == 'falmi'){
    echo "$user anak magang"; //kondisi benar namun code flow pertama yang akan dijalankan
}
else{
    echo "$user bukan anak magang"; //kondisi benar dan code dijalankan
}
*/



//MENGGABUNGKAN STATEMENT KONDISIONAL
/*
$x = 12;

if ($x > 10 && $x < 15){
    echo "$x lebih besar dari 10 dan lebih kecil dari 15"; //menyatakan "dan"

}

if ($x < 10 || $x >30 ){
    echo "$x lebih kecil dari 10 atau lebih besar dari 30"; //menyatakan "atau"
}


if (!($x == 30)){
    echo "$x tidak sama dengan 30"; //Menyatakan "ketidak samaan"
}
*/


/*
$x = 2000;
if ($x % 3 == 0 && $x % 7 == 0) {
    echo 'x adalah kelipatan 3 dan kelipatan 7.';
  } elseif ($x % 3 == 0) {
    echo 'x adalah kelipatan 3 tetapi bukan kelipatan 7.';
  } elseif ($x % 7 == 0) {
    echo 'x adalah kelipatan 7 tetapi bukan kelipatan 3.';
  } else {
    echo 'x bukan kelipatan 7 atau kelipatan 3.';
  }

*/



//STATEMENT SWITCH - BREAK
/* 
$num = 50;

$remainder = $num % 3;
   
switch ($remainder) {
  case 0:
    echo 'Sangat beruntung!!';
    break;
    
  case 1:
    echo 'Beruntung!';
    break;
  
  case 2:
    echo 'Sedikit beruntung.';
    break;
    
  default:
    echo 'Tidak beruntung...';
    break;
*/
    



/*
$nilai = 45;

if ($nilai > 90) {
    $grade = "A+";
} elseif($nilai > 80){
    $grade = "A";
} elseif($nilai > 70){
    $grade = "B+";
} elseif($nilai > 60){
    $grade = "B";
} elseif($nilai > 50){
    $grade = "C+";
} elseif($nilai > 40){
    $grade = "C";
} elseif($nilai > 30){
    $grade = "D";
} elseif($nilai > 20){
    $grade = "E";
} else {
    $grade = "F";
}

echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";

*/

?>