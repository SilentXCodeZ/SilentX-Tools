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
echo "Tools Unable Profile Guard Facebook\n\n";
echo" Access Token\nInput : ";
$tok = trim(fgets(STDIN));
echo " Id Account\nInput : ";
$id = trim(fgets(STDIN));
echo "Apakah Anda Yakin? (y/n)";
$cek = trim(fgets(STDIN));
if($cek=="n") exit("Stopped!\n");

echo "$yellow Memproses...";
    sleep(5);
    echo "$green Berhasil!";

$md5 = md5(time());
    $hash = substr($md5, 0, 8) . "-" . substr($md5, 8, 4) . "-" . substr($md5, 12, 4) . "-" . substr($md5, 16, 4) . "-" . substr($md5, 20, 12);

  $var = "{\"0\":{\"is_shielded\":true,\"session_id\":\"$hash\",\"actor_id\":\"$id\",\"client_mutation_id\":\"$hash\"}}";
      $p =  array("variables" => $var, "doc_id" => "1477043292367183", "query_name" => "IsShieldedSetMutation", "strip_defaults" => "true", "strip_nulls" => "true", "locale" => "en_US", "client_country_code" => "US", "fb_api_req_friendly_name" => "IsShieldedSetMutation", "fb_api_caller_class" => "IsShieldedSetMutation", "access_token" => $tok);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://graph.facebook.com/graphql");
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $p);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			$chresult = curl_exec($ch);
			echo $chresult;
			curl_close($ch);
