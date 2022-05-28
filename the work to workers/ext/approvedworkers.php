<?php
$conn=mysqli_connect("localhost","root","","work2work");

?>


<table width="800" border="1">
  <tr>
    <th>NAME</th>
    <th>AGE</th>
    <th>GENDER</th>
	<th>ADDRESS</th>
	<th>EMAIL</th>
	<th>MOBILE</th>
	<th>SKILL</th>
	<th>EXPERIENCE</th>
	<th>ID_PROOF</th>
	<th>STATUS</th>
	<th>APPROVED</th>
  </tr>



<?php
$q="select * from worker where status='approved'"; 
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
  </tr>
  <?php


}
}
else
{
echo "no worker";
}
?>
</table>