<?php
$conn=mysqli_connect("localhost","root","","work2work");

$q="select * from feedback,user where feedback.cid=user.id and wid='".$_GET["wid"]."'  ";
$data=mysqli_query($conn,$q);
if(mysqli_num_rows($data)>0)
{
?>

<table width="800" border="1">
  <tr>
    	<th>Worker</th>

  	<th>customer</th>

    <th> feedback</th>
    <th>rating</th>
	
	
  </tr>
<?php
while($row=mysqli_fetch_array($data)) 
{
$w=$row[2]; 
$p="select * from worker where id=$w ";
$d=mysqli_query($conn,$p);
while($r=mysqli_fetch_array($d)) 
{
?>


 <tr>
      <td><?php echo $r[1]; }?></td>

     <td><?php echo $row[7]; ?></td>

    <td><?php echo $row[3]; ?></td>
    <td><?php echo $row[4]; ?></td>
	
	
	
  </tr>
  <?php


}
?>
</table>
<?php
}
else
{
echo "no feedback";
}
?>
