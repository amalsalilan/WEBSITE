<?php
session_start();
$id=$_SESSION["id"];
$conn=mysqli_connect("localhost","root","","work2work");
$wid=$_POST["wid"];

$q="select * from worker where id='$wid'";
$data=mysqli_query($conn,$q);
$row = mysqli_fetch_array($data);


$wdetails=$_POST["d"];

$start_date=$_POST["sd"];

$complete_date=$_POST["cd"];

$budget=$_POST["budget"];

$f=$_FILES["fileattachment"]["name"];

$destination="event/$f";
$date=date("Y-m-d");
$q="insert into event values(0,'$id','$wid','$wdetails','$start_date','$complete_date','$budget','$f','pending','$date')";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
move_uploaded_file($_FILES["fileattachment"]["tmp_name"],$destination);



require '../PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;



//Enable SMTP debugging. 
//$mail->SMTPDebug = 3;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;                          
//Provide username and password     

$mail->Username = "mycheckproject95@gmail.com";                 
$mail->Password = "kannur670006"; 
                          
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";                           
//Set TCP port to connect to 
$mail->Port = 587;                                   

$mail->From = "mycheckproject95@gmail.com";//sender _mail_id
$mail->FromName = "workto works";

$mail->addAddress($row[5], $row[1]);//Recepient Mail id and name
$mail->isHTML(true);

$mail->Subject = "new work request";
$mail->Body = "$wdetails";
$mail->AltBody = "";

$mail->send();

?>
<script>
alert("Send...");
 window.location="viewworkers.php";
 </script>
 <?php
}
else
{
echo mysqli_error($conn);

}
?>
