<?php 
// BY BROK - @x_BRK - @i_BRK //
if (!file_exists('madeline.php')){
copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
define('MADELINE_BRANCH', 'master');
include 'madeline.php';
$settings['app_info']['api_id'] = 210897;
$settings['app_info']['api_hash'] = 'c7d2d161d83ce18d56c1a8a54437f5ff';
$MadelineProto = new \danog\MadelineProto\API('sesdsion1.madeline', $settings);
$MadelineProto->start();
function curlGet($url) {
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($ch);
return $res;
}
$admin = "@x_BRK"; 
$l = readline("- Enter UserName => @");
$x = 0;
while(true){
$get = curlGet("https://telegram.me/$l");
      preg_match("/(.*)(og:title)(.*)(content\=\")(.*)(\">)/i", $get,$name);
      $name = $name[5];
      if(preg_match("/^Telegram\: Contact.*/", $name)){$MadelineProto->account->updateUsername(['username' => $l]);
      $MadelineProto->messages->sendMessage(['peer' => "$admin", 'message' => "-  newusers : @$l 
- The LooPs : $x"]);  
echo '@'.$l." Moved .\n"; 
exit; 
} 
echo '@'.$l." - ".$x." - ".date('i:s')."\n";  
}