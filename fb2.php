<?php
/* Script Dibuat Oleh Muhammad Randika Rosyid
-Dilarang Keras Mencolong Script Apalagi Sampai Menghapus Copyright
-Hak Cipta Dilindungi Undang²
-Nyolong? mandul:) 
*/
$green = "\e[92m";
$red = "\e[91m";
$yellow = "\e[93m";
$blue = "\e[36m";
$cyan = "\e[0;36m";
$purple = "\e[0;35m";
$brown = "\e[0;33m";
$lightgray = "\e[0;37m";
$darkgray = "\e[1;30m";
$lightblue = "\e[1;34m";
$lightgreen = "\e[1;32m";
$lightcyan = "\e[1;36m";
$lightred = "\e[1;31m";
$lightpurple = "\e[1;35m";

echo "$red DIBUAT OLEH : Muhammad Randika R\n\n";
echo "Tools Generator Id Account Facebook\n\n";
echo "Nomor Hp / Email Facebook\nInput : ";
$nope = trim(fgets(STDIN));
echo "Password Akun\nInput : ";
$pw = trim(fgets(STDIN));
echo "Apakah Anda Yakin? (y/n)";
$cek = trim(fgets(STDIN));
if($cek=="n") exit("Stopped!\n");

$ch = curl_init(); 
echo "$yellow Memproses...";
    sleep(5);
    echo "$green Berhasil!";

    curl_setopt($ch, CURLOPT_URL, "https://b-api.facebook.com/method/auth.login?access_token=237759909591655%25257C0f140aabedfb65ac27a739ed1a2263b1&format=json&sdk_version=2&email=".$nope."&locale=en_US&password=".$pw."&sdk=ios&generate_session_cookies=1&sig=3f555f99fb61fcd7aa0c44f58f522ef6");

    
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // menampilkan hasil curl
    echo $output;

echo "$red PENTING! UNTUK ID AKUN ADALAH SETELAH UID: CONTOH 1001858... Terimakasih :) ";
