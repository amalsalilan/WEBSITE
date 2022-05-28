<?php
$conn=mysqli_connect("localhost","root","","work2work");
session_start();
$id=$_GET["id"];

$q="select * from event,user  where workerid='$id' and submissiondate='".date("Y-m-d")."' and userid=user.id"; 
$data=mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_num_rows($data)>0)
{
?>

<table width="800" border="1">
  <tr>
    <th>user</th>
    <th>workdetails</th>
	<th>startdate</th>
	<th>completdate</th>
	<th>budget</th>
  </tr>

<?php
while($row=mysqli_fetch_array($data)) 
{
//header("location:adminhome.php");
?>
 <tr>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
	<td><?php echo $row[5]; ?></td>
	<td><?php echo $row[6]; ?></td>
	
  </tr>
  <?php


}
?>
</table><?php
}
else
{
echo "no user";
}
?>
