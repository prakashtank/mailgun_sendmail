<?php
define('DOMAIN', 'https://api.mailgun.net/v3/sandboxd2b500fee2d14ec18f965456bdb313e7.mailgun.org');
define('MAILGUN_API', 'key-***********************'); 
//$filePath='@0Wealth_AC_AMF.pdf';

$curl_post_data=array(
    'from'    => 'Mailgun test <noreply@test.com>',
    'to'      => 'prakashtank106@gmail.com',
    'subject' => 'New Text Message Received',
    'html'    => '<b><h1>What is different.<h1><b>',
 		

);

$service_url = 'https://api.mailgun.net/v3/sandboxd2b500fee2d14ec18f965456bdb313e7.mailgun.org/messages';
$curl = curl_init($service_url);
curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($curl, CURLOPT_USERPWD, "api:key-cb69cc5feebad1a9feddf58a4f053db3"); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $curl_post_data);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); 
$curl_response = curl_exec($curl);  
$response = json_decode($curl_response);
curl_close($curl);
var_dump($response);
?>