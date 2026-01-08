<?php
	session_start();
   	if ( !isset( $_SESSION["origURL"] ) )
       	$_SESSION["origURL"] = $_SERVER["HTTP_REFERER"];
?>
<?php
   	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<?php
    function getUserIP(){
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP)){
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP)){
            $ip = $forward;
        }
        else{
            $ip = $remote;
        }
        return $ip;
    }
    $user_ip = getUserIP();
    // Output IP address [Ex: 177.87.193.134]
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="ip2loc" content="<?php echo $user_ip; ?>">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="assets/css/style-web.css">
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/blog.css" />
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link
   href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;family=Ysabeau:wght@100;200;300;400;500;600;700;800&amp;display=swap"
   rel="stylesheet">

<?php  $phone = "(646) 480-0930"; ?>
<?php  $email = "info@atlaspublishinggroup.com"; ?>
<?php  $address = "1752 Broadway, New York, NY 10019, USA"; ?>