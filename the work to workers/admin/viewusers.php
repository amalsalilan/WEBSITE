<?php
$conn=mysqli_connect("localhost","root","","work2work");

?>


<table width="800" border="1">
  <tr>
    <th>NAME</th>
    <th>DATE OF BIRTH</th>
    <th>GENDER</th>
	<th>PLACE</th>
	<th>ADDRESS</th>
	<th>EMAIL</th>
	<th>MOBILE</th>
	<th>STATUS</th>
	<th>APPROVE/REJECT</th>
  </tr>



<?php
$q="select * from user where status='pending'"; 
$data=mysqli_query($conn,$q);
if(count($data)>0)
{
while($row=mysqli_fetch_array($data)) 
{
//header("location:adminhome.php");
?>
 <tr>
    <td><?php echo $row[1]; ?></td>
    <td><?php echo $row[2]; ?></td>
    <td><?php echo $row[3]; ?></td>
	<td><?php echo $row[4]; ?></td>
	<td><?php echo $row[5]; ?></td>
	<td><?php echo $row[6]; ?></td>
	<td><?php echo $row[8]; ?></td>
	<td><?php echo $row[9]; ?></td>
	<td><a href="approveuser.php?id=<?php echo $row[0]; ?>">Approve</a>/<a href="rejectuser.php?id=<?php echo $row[0]; ?>">Reject</a></td>
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