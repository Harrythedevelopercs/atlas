<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require 'vendor/autoload.php';
    use PHPMailer\PHPMailer\PHPMailer;

if($_POST){
    $message = '';
    $location = '';
    $full_name = '';
    $email_address = '';
    $contact_no = '';
    $proj = '';
    $ip = '';
    $country = '';
    $region = '';
    $city = '';
    $page_url = $_POST['pageurl'];
    $location = "https://atlaspublishinggroup.com/thankyou";
    $name= (isset($_POST['name'])) ? $_POST['name'] : ((isset($_POST['n'])) ? $_POST['n']: "not fill by user");
    $email=(isset($_POST['email'])) ? $_POST['email'] : ((isset($_POST['e'])) ? $_POST['e']: "not fill by user");
    $phone=(isset($_POST['phone'])) ? $_POST['phone'] : ((isset($_POST['p'])) ? $_POST['p']: "not fill by user");
    $msg=(isset($_POST['msg'])) ? $_POST['msg'] : ((isset($_POST['m'])) ? $_POST['m']: "not fill by user");
    $service=(isset($_POST['service'])) ? $_POST['service'] : ((isset($_POST['s'])) ? $_POST['s']: "not fill by user");
    $package=(isset($_POST['package'])) ? $_POST['package'] : ((isset($_POST['pa'])) ? $_POST['pa']: "not fill by user");
    $interest=(isset($_POST['interest'])) ? $_POST['interest'] : ((isset($_POST['i'])) ? $_POST['i']: "not fill by user");
    $formtype= isset($_POST['ftype']) ? $_POST['ftype'] : "Form fill buy user verified" ;
    $ip=(isset($_POST['ip2loc_ip'])) ? $_POST['ip2loc_ip'] :  "not fill by user";
    $cn=(isset($_POST['ip2loc_country'])) ? $_POST['ip2loc_country'] :  "not fill by user";
    $re=(isset($_POST['ip2loc_region'])) ? $_POST['ip2loc_region'] :  "not fill by user";
    $ci=(isset($_POST['ip2loc_city'])) ? $_POST['ip2loc_city'] :  "not fill by user";
    $url= isset($_POST['pageurl']) ? $_POST['pageurl'] : "not fill by user" ;
    $pdf_name= isset($_POST['pdf_name']) ? $_POST['pdf_name'] : "not fill by user" ; 
    $formtype= isset($_POST['formtype']) ? $_POST['formtype'] : "not fill by user" ; 
    $message = str_replace('%full_name%', $full_name, $message);
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'maltaserver.stagingtestserver.com';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPAuth = TRUE;
    $mail->Username = 'no-reply@atlaspublishinggroup.com';
    $mail->Password = '6uXI,41z$^uyAW1p';
    $mail->setFrom('no-reply@atlaspublishinggroup.com', 'Atlas Publishing Group');
    $mail->addAddress('ppc@iceanimations.com', 'Inquiry');
    $mail->addAddress('ppc.cd@letusproceed.com', 'Inquiry');
    $mail->addAddress('ali.haider@canvasdigital.org', 'Developer');

    $mail->Subject = 'Atlas Publishing Group | Main Brand';
    $mail->IsHTML(true);
    $message ="";
    $message .= "<p>Name: ".$name."</p>";
    $message .= "<p>Email: ".$email."</p>";
    $message .= "<p>Phone: ".$phone."</p>";
    $message .= "<p>Message: ".$msg."</p>";
    $message .= "<p>IpAddress: ".$ip."</p>";
    $message .= "<p>Country: ".$cn."</p>";
    $message .= "<p>State: ".$re."</p>";
    $message .= "<p>City: ".$ci."</p>";
    $message .= "<p>Url: ".$url."</p>";

    $mail->Body = $message;
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else {
        header("Location: $location");
    }
}
else {
   echo "goodbye";
}

?>