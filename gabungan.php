<?php

  for($usia=20; $usia<=103; $usia++){
   
    if($usia >=20 && $usia <=41){
      echo"Usia saya adalah " .$usia. " Kategori : Dewasa<br>";
    }
    elseif($usia >=41 && $usia <=60){
      echo"Usia saya adalah " .$usia. " Kategori : Orang Tua<br>";
    }
    elseif($usia >=61 && $usia<=80){
      echo"Usia saya adalah " .$usia. " Kategori : Manula<br>";
    }
    elseif($usia >=81 && $usia <=100){
      echo"Usia saya adalah " .$usia. " Kategori : Sepuh<br>";
    }
    else{
      echo"Tidak Bernyawa";
    }
  }


?>