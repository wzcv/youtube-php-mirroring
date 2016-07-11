<?php
$vid=$_GET['vid'];
function fcurl($url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}
header('content-type:image/jpg;');
$vidimg='https://i.ytimg.com/vi/'.$vid.'/mqdefault.jpg';
$img=fcurl($vidimg);
echo $img;
?>
