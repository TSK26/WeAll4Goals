<?php
     $name = $_POST['name'];
     $age = $_POST['age'];
     $visitor_email = $_POST['email'];
     $school = $_POST['school'];
     $country = $_POST['country'];

     
     $email_from = 'vvedakshar@gmail.com';

     $email_subject = "New Form Submission for WeAll4Goals";

     $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                     "User Age: $age.\n".
                      "User school: $school.\n".
                       "User country: $country.\n";

    
     $to = "gurjot.vvdav@gmail.com"; 
     
     $headers = "From: $email_from \r\n";
     
     $headers = "Reply-To: $visitor_email \r\n";
     
     mail($to,$email_subject,$email_body,$headers);

     header("Location: contact.html")

                      


     