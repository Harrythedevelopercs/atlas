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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="og:type" content="website">
<meta property="og:title" content="Book Marketing Services | Atlas Publishing Group">
<meta property="og:description"
   content="Boost your book sales with Atlas Publishing Group’s professional book marketing services. From targeted campaigns to global reach, we help authors maximize visibility and success.">
<meta name="keywords"
   content="book marketing, book promotion, book publishing, author marketing, Atlas Publishing Group, book advertising, promote my book, marketing services for authors">
<meta property="og:url" content="https://www.atlaspublishinggroup.com/lp/book-marketing">
<meta property="og:site_name" content="Atlas Publishing Group">
<meta property="og:image" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta property="og:image:secure_url"
   content="https://www.atlaspublishinggroup.com/lp/book-marketing/assets/images/logo.webp">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Book Marketing Services | Atlas Publishing Group">
<meta name="twitter:description"
   content="Reach more readers and grow your book sales with Atlas Publishing Group’s expert book marketing services.">
<meta name="twitter:image" content="https://www.atlaspublishinggroup.com/lp/book-marketing/assets/images/logo.webp">
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="x-default">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="en-us">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="en-ae">
<link rel="canonical" href="<?php echo $urlcanonical;?>">
<link rel="icon" href="https://www.atlaspublishinggroup.com/lp/book-marketing/assets/images/favicon.webp"
   type="favicon.webp" sizes="32x32">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
<link rel="stylesheet" href="assets/css/all.css">
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/responsive.css">

<?php  $phone = "(443) 437-4786"; ?>
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