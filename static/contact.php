<!DOCTYPE html>
<html>

<body>
<?php 

       $name = $_POST['name'];
       $email = $_POST['email'];
       $subject = 'New Form Submission';
       $message = $_POST['message'];

            $to = "xyz123@gmail.com";
               
           if(mail($to,$subject,"Name: ".$name."\nMessage: ".$message,$email))
           {
                echo '<script>alert("Your Messege has been sent")</script>'; 
           }
           else
           {
              echo '<script>alert("Your Messege has some Error\n *Please Try Again*")</script>'; 
           }

?>
</body>
<head><meta http-equiv = "refresh" content = "10; url = contact.html" /></head>
</html>
