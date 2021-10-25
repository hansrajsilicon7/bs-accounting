<?php
                            use PHPMailer\PHPMailer\PHPMailer;
                            require 'PHPMailer/PHPMailer.php';
                            require 'PHPMailer/Exception.php';
                            require 'PHPMailer/SMTP.php';


                             $msg="";
                             
                             if(isset($_POST['submit'])){
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $subject= $_POST['subject'];
                                $email= $_POST['email'];
                                $message= $_POST['message'];
                                
                                
                                    $mail = new PHPMailer(); // create a new object
                                    $mail->AddAddress('mkshravan836@gmail.com');
                                    $mail->SetFrom($email);
                                    $mail->Subject = $subject;
                                    $mail->isHTML(true);
                                    $mail->Body = $message;
                                    $mail->AddCC("shravankumar496@gmail.com");
                                    
                                    if(!$mail->Send()) {
                                        $msg= "Message is not sent";
                                     } else {
                                        $msg= "Message has been sent";
                                     }
                            }
?>