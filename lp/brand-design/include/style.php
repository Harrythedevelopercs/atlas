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
<meta property="og:title" content="Author Brand Design | Atlas Publishing Group">
<meta property="og:description"
   content="Professional author brand design services by Atlas Publishing Group. Build a strong, memorable identity for your book, personal brand, and audience engagement.">
<meta name="keywords" content="
author branding, author brand design, book branding, personal brand for authors, Atlas Publishing Group, author marketing, book marketing services, author identity design, book promotion, book marketing strategy">
<meta property="og:url" content="https://www.atlaspublishinggroup.com/lp/brand-design">
<meta property="og:site_name" content="Atlas Publishing Group">
<meta property="og:image" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta property="og:image:secure_url"
   content="https://www.atlaspublishinggroup.com/lp/brand-design/assets/images/logo.webp">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Author Brand Design | Atlas Publishing Group">
<meta name="twitter:description"
   content="Reach more readers and grow your book sales with Atlas Publishing Group’s expert Author Brand Design.">
<meta name="twitter:image" content="https://www.atlaspublishinggroup.com/lp/brand-design/assets/images/logo.webp">
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="x-default">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="en-us">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="en-ae">
<link rel="canonical" href="<?php echo $urlcanonical;?>">
<link rel="icon" href="https://www.atlaspublishinggroup.com/lp/brand-design/assets/images/favicon.webp" type="image/webp" sizes="32x32">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/global.css">
<link rel="stylesheet" href="assets/css/style.css">
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
