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
echo "Tools Unfriend Masal Facebook\n\n";
echo " Access Token Facebook\nInput : ";
$ac = trim(fgets(STDIN));
echo "Id Account\nInput : ";
$idd = trim(fgets(STDIN));
echo "Tahun?\nInput : ";
$th = trim(fgets(STDIN));
echo "$blue Apakah Anda Yakin? (y/n)";
$cek = trim(fgets(STDIN));
if($cek=="n") exit("Stopped!\n");

function randika_gans($id, $ac){
	$ea = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/feed?access_token='.$ac.'&limit=1'), true);
	$date = $ea['data'][0]['created_time'];
	$aa = strtotime($date);
	return date('Y', $aa);
}

function friendlist($ac){
	$rans = json_decode(file_get_contents('https://graph.facebook.com/me/friends?access_token='.$ac), true);
	return $rans['data'];
}

function rans_uf($idd, $ac){
	$pe = 'https://graph.facebook.com/me/friends?uid='.$idd.'&access_token='.$ac;
	$ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $pe);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
if($result == true){
		$uf = ('√TELAH UNFRIEND√');
	} else {
		$uf = ('×GAGAL UNFRIEND×');
	}
	return $uf;
}

$ppq = friendlist($ac);
foreach($ppq as $list){
	$name = $list['name'];
	$id = $list['id'];
	$date = randika_gans($id, $ac);
	if($date < $th){
		echo ('×TIDAK AKTIF×').' '.$name.' ~ '.$date.' '.rans_uf($id, $ac);
		echo "\r\n";
	}else{
		echo "$green ('√AKTIF√').' '.$name.' ~ '.$date";
		echo "\r\n";
	}
}
