<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {



    header("Location:homepage.html");


}

   


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'lalith@elephantintheboardroom.ph';                     //SMTP username
    $mail->Password   = 'eztd pwpm ccil zcss';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('lalith@elephantintheboardroom.ph');
    $mail->addAddress('lalith@elephantintheboardroom.ph');
    
    
    
    //Add a recipient
    // $mail->addAddress('ellen@example.com');               
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject =$_POST['name'].' - Contact form submission';
    $mail->Body ="
    <html>
    <head>
    <style>
                h1 {
                    color: #333;
                }
                div {
                    margin-top: 20px;
                }
                table {
                    border-collapse: collapse;
                    width:0%;
                  }
              
                  th, td {
                    border: 1px solid #ddd;
                    text-align: left;
                  }
                  th {
                    padding:15px;
                    background-color: #f2f2f2;
                  } 
                  td{
                    padding-left:20px;
                  }
              
               
            </style>
    </head>
    <body>
        <img src='https://dropboxcoffee.wkt.gbx.mybluehost.me/assets/png/Dropbox-Coffee-logo-1%203.png' alt='Logo'>
        <div >

<table>      
  <tr style='background-color: antiquewhite;'>
    <th>Name</th>
    <td>$_POST[name]</td>
  </tr>
  <tr>
   <th>Email</th>
  <td>$_POST[email]</td>
  </tr>
  <tr style='background-color: antiquewhite;'>
   <th>Contact</th>
    <td>$_POST[phone]</td>
  </tr>
  <tr>
  <th>Message</th>
  <td>$_POST[message]</td>
  </tr>
</table>

        </div>
    </body>
    </html>
";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}



