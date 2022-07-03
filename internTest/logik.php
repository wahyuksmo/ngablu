<?php
 

//nomer 1 nampilin bilangan prima
//  for($i= 1; $i <= 100; $i++) {
//     $t =0;
//     for($d =1; $d <= $i; $d++) {
//         if($i % $d == 0) {
//             $t++;
//         }
//     }

//     if($t == 2) {
//         echo $i.',';
//     }
//  }

//nomer 2 bilangan ganjil
// for($i= 0; $i <= 100; $i++) {

//     if($i % 2 == 1 ) {
//         echo $i.',';
//     }

// }

//nomer 3 bilangan genap
// for($i= 0; $i <= 100; $i++) {

//     if($i % 2 == 0 ) {
//         echo $i.',';
//     }

// }


//nomer 4 bilangan fibonacci
// $angka1 = 0;
// $angka2 = 1;
// echo $angka1.','.$angka2.',';

// for($i=0; $i<100; $i++) {
//     $hasil = $angka1 + $angka2;
//     echo $hasil.',';
//     $angka1 = $angka2;
//     $angka2 = $hasil;
// }




//nomer 5 gambar pola
// $star=10;

//      for($a=$star;$a>0;$a--){
//           for($b=$star;$b>=$a;$b--){
//                echo "*";
//            }
//         echo "<br>";
//     }

//     for( $a=$star;$a>0;$a--){
//         for($i=1; $i<=$a; $i++){
//            echo "&nbsp";
//     }
//     for($a1=$star;$a1>=$a;$a1--){
//       echo"*";
//     }
//       echo"<br>";
//  }



//nomor 6 
// for($i = 1; $i <= 5; $i++) {
//     $random = mt_rand(0, 100);
//     if($random <= 60) {
//         echo $random;
//         echo "kurang";
//     }else if($random > 60 && $random <= 70) {
//         echo $random;
//         echo "Cukup";
//     } else if($random > 70 && $random <= 80 ) {
//         echo $random;
//         echo "Baik";
//     } else if($random > 80) {
//         echo $random;
//         echo "LuarBiasa";
//     }     

   
// }

// for ($i= 1; $i <= 100; $i++) { 

//     if ( $i % 5 == 0 ) {
    
//         echo $i." ";
//     }
// }

//nomor 7
// for($i = 1; $i<=100; $i++) {
//     if($i % 3 == 0 ) {
//         echo $i.",";
//     }
// }




// nomor 8
// function nambah($data) {

//     $arr = ["Jakarta", "Yogyakarta", "Bandung", "Bogor", "Semarang"];

//     if(in_array($data, $arr)) {
//        echo "Nilai boolean jika ada yang sama ". true; //return true;
//     }

//     array_push($arr, $data);
//     echo '<pre>'; print_r($arr);

// }

// nambah("Jakarta");





?>