<?php
session_start();
include_once 'database.php';
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $result = mysqli_query($conn,"SELECT * FROM patreg where email='" . $_POST['email'] . "'");
    $row = mysqli_fetch_assoc($result);
	$fetch_email_id=$row['email'];
	$email=$row['email'];
	$password=$row['password'];
	if($email==$fetch_email_id) {


      
				$to = $email;
                $subject = "Password";
                $txt = "Your password is : $password.";
                // $headers = "From: abhisontakke7977@gmail.com" . "\r\n" .
                // "CC: somebodyelse@example.com";
                mail($to,$subject,$txt);
			
                // mail("me@gmail.com" , 
                // $_REQUEST['subject'] , 
                // $_REQUEST['message'] , 
                // "From:".$_REQUEST['email'] );
            
            
            
            
            
            
            
            }
				else{
					echo 'invalid userid';
				}
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user id:</td><td><input type='text' name='email'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>