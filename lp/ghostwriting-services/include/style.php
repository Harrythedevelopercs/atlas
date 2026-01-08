<?php
   session_start();
   if ( !isset( $_SESSION["origURL"] ) )
   // $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
?>
<?php
   $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<?php
   function getUserIP(){
      if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
         $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
         $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
      }
      $client = @$_SERVER['HTTP_CLIENT_IP'];
      $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
      $remote = $_SERVER['REMOTE_ADDR'];
      if(filter_var($client, FILTER_VALIDATE_IP)){
         $ip = $client;
      }
      elseif(filter_var($forward, FILTER_VALIDATE_IP)){
         $ip = $forward;
      }
      else{$ip = $remote;}
      return $ip;
   }
   $user_ip = getUserIP();
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noindex, nofollow" />
<meta property="og:type" content="website">
<meta property="og:title" content="Professional Ghostwriting Services | Atlas Publishing Group">
<meta property="og:description" content="Atlas Publishing Group provides expert ghostwriting services for books, authors, and professionals. Turn your ideas into high-quality, publish-ready content.">
<meta name="keywords" content="ghostwriting services, professional ghostwriters, book ghostwriting, author ghostwriting, content writing services, Atlas Publishing Group">
<meta property="og:url" content="https://www.atlaspublishinggroup.com/">
<meta property="og:site_name" content="Atlas Publishing Group">
<meta property="og:image" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta property="og:image:secure_url" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Professional Ghostwriting Services | Atlas Publishing Group">
<meta name="twitter:description" content="Work with experienced ghostwriters to transform your ideas into impactful, publish-ready books and content.">
<meta name="twitter:image" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
<link rel="canonical" href="<?php echo $actual_link;?>">
<link rel="icon" type="image/webp" sizes="32x32" href="https://www.atlaspublishinggroup.com/assets/images/favicon.png">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/style-web3860.css?v=1">
<link rel="stylesheet" href="assets/css/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

<?php  $phone = "(646) 480-0930"; ?>
<?php  $email = "info@atlaspublishinggroup.com"; ?>
<?php  $address = "1752 Broadway, New York, NY 10019, USA"; ?>