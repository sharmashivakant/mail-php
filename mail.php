<?php

$name= $_POST['name'];
$email= $email=$_POST['email'];
$contact= $_POST['contact'];
$website= $_POST['website'];

        require_once('class.phpmailer.php');
        include('class.smtp.php');
                        $mail = new PHPMailer();
                        $to = 'teqdeft@gmail.com';
                        $from = 'support@teqdeftdev.com';
                        $subject = 'Enquiry Form Lead Generation ';
                        
                        $body="<p style='color: #232526; font-size: 18px; line-height: 28px; margin: 0'>Name ".$_POST['name'].",</p>

                               <p style='color: #232526; font-size: 18px; line-height: 28px; margin: 0'>Email ".$_POST['email'].",</p>
                        
                              <p style='color: #232526; font-size: 18px; line-height: 28px; margin: 0'>Phone ".$_POST['contact'].",</p>
                        
                              <p style='color: #232526; font-size: 18px; line-height: 28px; margin: 0'>Website ".$_POST['website'].",</p>"; 

                        $mail -> CharSet = "UTF-8";
                        $mail->IsSMTP(); // telling the class to use SMTP
                        $mail->Host      ="mail.teqdeftdev.com"; // SMTP server
                        $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                                                   // 1 = errors and messages
                                                                   // 2 = messages only
                        $mail->SMTPAuth   = true;                  // enable SMTP authentication
                        $mail->Host       = "mail.teqdeftdev.com"; // sets the SMTP server
                        $mail->Port       = 587;                    // set the SMTP port for the GMAIL server
                        $mail->Username   = "support@teqdeftdev.com"; // SMTP account username
                        $mail->Password   = "BOhR}wX3J~uX";        // SMTP account password
                        $mail->SetFrom($from, 'Teqdeft');
        
        
                        $mail->Subject    = $subject;
                        $mail->MsgHTML($body);
                
                        $mail->AddAddress($to, $_POST['name']);
                        if(!$mail->Send())
                        {
                            echo "failed";
          
                        }
header('Location: index.html');
exit();

?>