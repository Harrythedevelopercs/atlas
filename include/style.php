<!-- <?php session_start(); if ( !isset( $_SESSION["origURL"] ) ) $_SESSION["origURL"] = $_SERVER["HTTP_REFERER"]; ?> -->
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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5PC22SKK');</script>
<!-- End Google Tag Manager -->

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="og:type" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta name="keywords" content="">
<meta property="og:url" content="https://www.atlaspublishinggroup.com">
<meta property="og:site_name" content="Atlas Publishing Group">
<meta property="og:image" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta property="og:image:secure_url" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="">
<meta name="twitter:description" content="">
<meta name="twitter:image" content="https://www.atlaspublishinggroup.com/assets/images/logo.webp">
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="x-default">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="en-us">
<link rel="alternate" href="https://www.atlaspublishinggroup.com/" hreflang="en-ae">
<link rel="canonical" href="<?php echo $urlcanonical;?>">
<link rel="icon" href="assets/images/favicon.png" type="favicon.png" sizes="32x32">
<link rel="stylesheet" href="assets/css/lib.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="preconnect" href="https://fonts.gstatic.com/">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<?php  $phone = "(646) 480-0930"; ?>
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
