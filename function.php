<?php
/**
 * function / method / fungsi = blok kode yg dijalankan ketika dipanggil
 * blok kode -> kumpulan baris kode yg diapit oleh tanda { } 
 * function pny parameter -> data yg akan diolah oleh fungsi tsb
 * 
 */


 function prokes(){
    echo "Memakai masker";
    echo "Mencuci tangan";
    echo "Mengurangi mobilitas";
 }
   
 function makan($nama_makanan){
     echo "Cuci tangan ";
     echo "Baca doa"; 
     echo "Masukkan $nama_makanan ";
     echo "Kunyah $nama_makanan ";
     echo "Telan $nama_makanan ";
 }
 

 echo makan ("Rawon");
 
?>