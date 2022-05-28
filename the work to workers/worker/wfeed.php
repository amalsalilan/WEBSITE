<?php
session_start();
$id=$_SESSION["id"];
$conn=mysqli_connect("localhost","root","","work2work");

?>
<table width="800" border="1">
  <tr>
  	<th>customer</th>

    <th> feedback</th>
    <th>rating</th>

  </tr>
<?php

$q="select * from feedback,user where feedback.cid=user.id and wid='$id' ";
$data=mysqli_query($conn,$q);
if(count($data)>0)
{
while($row=mysqli_fetch_array($data))
{

?>


 <tr>
     <td><?php echo $row[7]; ?></td>

    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>



  </tr>
  <?php


}
}
else
{
echo "no user";
}
?>
</table>


