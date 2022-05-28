<?php
$conn=mysqli_connect("localhost","root","","work2work");
$q="select * from worker where status='approved'"; 
$data=mysqli_query($conn,$q);
if(mysqli_num_rows($data)>0)
{
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
  </tr>
<?php
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
	<td><img src="../proof/<?php echo $row[10]; ?>" height="100" width="100" /></td>

	
  </tr>
  <?php


}
?>
</table>
<?php
}
else
{
echo "no approved worker";
}
?>
