<?php  
require 'PHPMailer\PHPMailer.php';
 require 'PHPMailer\SMTP.php';
 require 'PHPMailer\Exception.php';
 
if (isset($_POST['submit'])) {
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['message'];

  if (empty($name) || empty($email) || empty($msg)) {
    header('location:contact.php?error');
  }
  else{
// $mailto = "kkulkarni1904@gmail.com";

    // if (mail($email, $name, $msg)){
    //  header('location:contact.php?msg=success');

    // }


           $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP();
           $mail->SMTPDebug = 0;
           $mail->SMTPAuth = true;
           $mail->SMTPSecure = 'ssl';
           $mail->Host = "smtp.gmail.com";
           $mail->Port = 465;
           $mail->IsHTML(true);
           $mail->Username = "awsomeshiv.sk@gmail.com";
           $mail->Password = "PiraJ@1997";
           $mail->SetFrom("awsomeshiv.sk@gmail.com");
           $mail->Subject = "Portfolio contact Info";
           $mail->Body ="Request received from - ".$name;
           $mail->Body .="<br>Email - ".$email."<br>Description-" .$msg;
 
         $mail->AddAddress("awsomeshiv.sk@gmail.com");         

         if(!$mail->Send()) {
          echo "<script> 
          // alert('Email not sent.');
                     window.location = 'contact.php?status=error#contact';
                </script>";
          } else {
            echo "<script> 
            // alert('Request successfully sent. You will receive a follow-up email.');
                     window.location = 'contact.php?status=success#contact';
                </script>";
          }
  }

}
else{
  header('location:contact.php');
}




?>