<h4>Report</h4>
<?php
$conn=mysqli_connect("localhost","root","","work2work");
$q="select * from event,worker where event.workerid=worker.id and submissiondate='".date("Y-m-d")."' group by workerid ";
$data=mysqli_query($conn,$q);
if(mysqli_num_rows($data)>0)
{
?>

<table width="800" border="1">
  <tr>
  <th>#</th>
    	<th>WORKER</th>

  	<th>NO OF REQUEST</th>

    <th> CUSTOMER</th>
	<th></th>
</tr>
<?php
$count=1;
while($row=mysqli_fetch_array($data)) 
{
?>
<tr>
<td><?php echo $count;?></td>
<td><?php echo $row["name"];?></td>
<td>
<?php
$q1="select * from event where workerid='$row[2]' and submissiondate='".date("Y-m-d")."' ";
$data1=mysqli_query($conn,$q1);
echo mysqli_num_rows($data1);
?>
</td>
<td>
<?php
$q1="select * from user where id in( select userid from event where workerid='$row[2]' and submissiondate='".date("Y-m-d")."' )";
$data1=mysqli_query($conn,$q1);
while($row1=mysqli_fetch_array($data1)) 
{
echo $row1[1];
echo"<br>";
}

?>

</td>
<td><a href="work_details.php?id=<?php echo $row["workerid"];?>">Read More</a></td>
</tr>
<?php
$count++;
}
?>
</table>
<?php
}
else
{
echo "no user";
}
?>
