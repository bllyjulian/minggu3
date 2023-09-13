<?php

  echo"Suhu badan :";
  $suhu = 37;

  if($suhu < 36){
    echo" Dingin<br>";
  }else if($suhu > 36){
    echo" Normal<br>";
  }else if($suhu > 38) {
    echo" Panas<br>";
  }

  echo"Lampu Merah<br>";

  $warnalampu ="merah";

  switch($warnalampu){
    case "merah":
      echo " Berhenti<br>";
      break;
      case"kuning":
      echo " hati hati<br>";
      break;
      case"hijau":
      echo" jalan<br>";
      break;
      case"biru":
      echo" tidak ada<br>";
       break;
       default:
       echo" yaya<br>";
  }

echo"for loop<br>";
  for($mahasiswa=100;$mahasiswa>=1; $mahasiswa--){
    echo" Saya Mahasiswa Polije ke " .$mahasiswa."<br>";
  }

  echo "CONTOH WHILE <br>"; 
  $i = 11;
do {
  echo $i;
  echo " Akan tampil di browser <br>";
  $i++;
    } while ($i <= 10 );


?>