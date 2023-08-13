<?php
system('clear');
error_reporting(0);

function timer($t){
$p=$t;
for ($x=$p;$x>0;$x--){
$wak = date("[i:s]", $x);
echo "\r                          \r";
echo "\r  \033[1;97mwait \033[1;93m".$wak." \r";
sleep(1);
}
}
function curl_request($url, $method, $data = null) {
    $header = array(
        "Host: profit-pie.com",
        "upgrade-insecure-requests: 1",
        "content-type: application/x-www-form-urlencoded",
        "X-Requested-With: XMLHttpRequest",
        "cookie: _ga=GA1.1.1708917119.1690894085; aff=960; __gads=ID=889da30f9f969790-2257aaa4cbe200dd:T=1691683632:RT=1691900258:S=ALNI_MYwn1tc0WFT7sOCrrqeGob9Z7Frlw; __gpi=UID=00000c2a261ec0fd:T=1691683632:RT=1691900258:S=ALNI_MbMUkXY207XvsRC8W5qIGiXPcH1Ug; PHPSESSID=af7d12b669cd0805e8985e573e726911; _ga_EDWVGK0SPY=GS1.1.1691900256.13.1.1691900290.0.0.0",
        "user-agent: Mozilla/5.0 (Linux; Android 11; V2043) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36",
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    if ($method === 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

while(true){
$url = "https://profit-pie.com/ovens.php?bake=38896";
$res = curl_request($url, 'GET');
$jos = explode("',",explode("'Your", $res)[1])[0];
echo "\033[1;97m• $jos \n";
$g = 62;
timer($g);

$url = "https://profit-pie.com/ovens.php?collect=38896";
$resi = curl_request($url, 'GET');
$suc = explode("',",explode("'Congratulations!", $resi)[1])[0];
echo "\033[1;97m• $suc \n\n";
}
