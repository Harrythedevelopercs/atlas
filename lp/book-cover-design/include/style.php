<?php session_start(); if ( !isset( $_SESSION["origURL"] ) ) $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"]; ?>
<?php $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
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
<?php 
    $urlcanonical = $actual_link;
    if (strstr($urlcanonical, "?"))
    {
       $urlcanonical = strstr($urlcanonical, "?", true);
    }
?>

<meta charset="UTF-8">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
<link rel="shortcut icon" href="assets/images/favicon.webp" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="assets/css/fancybox.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/accordian-jquery-ui.css">
<link rel="stylesheet" href="assets/css/slick.css">
<link rel="stylesheet" href="assets/css/slick-theme.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/style-web.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/responsive-web.css">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="css/icomo.css">
<link rel="stylesheet" href="css/fancybox.css">
<link
    href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
    rel="stylesheet">

<?php  $phone = "443-487-0213"; ?>
<?php  $email = "info@atlaspublishinggroup.com"; ?>
<?php  $address = "1752 Broadway, New York, NY 10019, USA"; ?>

<!-- Start Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17495014686"></script>
<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());

   gtag('config', 'AW-17495014686');
</script>
<!-- End Google tag (gtag.js) -->