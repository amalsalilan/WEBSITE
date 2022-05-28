
<?php
$conn=mysqli_connect("localhost","root","","work2work");
echo $_GET["dist"];
if($_GET["dist"]=="")
{
$q="select * from worker where status='approved'and skill='".$_GET["skill"]."'";
}
else
{
$q="select * from worker where status='approved'and skill='".$_GET["skill"]."' and district='".$_GET["dist"]."'";

}
$data=mysqli_query($conn,$q);
if(mysqli_num_rows($data)>0)
{
?>
<table width="800" border="1">
  <tr>
    <th>NAME</th>
	<th>EMAIL</th>
	<th>MOBILE</th>
	<th>SKILL</th>
	<th>LOCATION</th>
	<th>RATING</th>
	<th></th>
	
  </tr>
<?php
while($row=mysqli_fetch_array($data)) 
{
$wid=$row[0];


//header("location:adminhome.php");
?>
 <tr>
    <td><a href="workerprofile.php?wid=<?php echo $row[0];?>"><?php echo $row[1]; ?></a></td>
	<td><?php echo $row[5]; ?></td>
	<td><?php echo $row[7]; ?></td>
	<td><?php echo $row[8]; ?></td>
	<td><?php echo $row[13]; ?></td>

	<?php	//rating

	$p="select  sum(rating)  from feedback  where wid='$wid'"; 
$d=mysqli_query($conn,$p);
if(mysqli_num_rows($d)>0)
{
while($r=mysqli_fetch_array($d)) 
{
$avg=$r[0]/5;
?>
		<td><?php echo round($avg);?></td>
<?php
}
}
else
{
?>
<td><?php echo "Not Available";?></td>
<?php
}//end rating
?>
<td><a href="rejectworker.php?id=<?php echo $row[0]; ?>">Reject</a></td>
	
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
