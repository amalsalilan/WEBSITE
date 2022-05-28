<script>
function searchfeedback(wid)
{
if(window.XMLHttpRequest)
{

obj=new XMLHttpRequest();
}
else
{
obj=new ActiveXobject("microsoft.XMLHttp");
}
obj.open("GET","searchfeedback.php?wid="+wid,true);
obj.send();
obj.onreadystatechange=function()
{
if(obj.readyState==4&&obj.status==200)
{

var res=obj.responseText;
document.getElementById("mylist").innerHTML=res;
}
}

}
</script>


choose skill
<select name="skill" id="skill" onChange="searchfeedback(this.value)">
       <option value=""> select </option>
	   <?php
	   $conn=mysqli_connect("localhost","root","","work2work");
	   $q="select * from worker  where status='approved'";
	   $data=mysqli_query($conn,$q);
	   while($row=mysqli_fetch_array($data))
	   {
	   ?>
	   <option value="<?php echo $row[0];?>"><?php echo $row[1];?></option>
	   <?php
	   }
	   ?>
	   
	   </select>


<div id="mylist">

<?php
session_start();
$id=$_SESSION["id"];
$conn=mysqli_connect("localhost","root","","work2work");

?>
<table width="800" border="1">
  <tr>
    	<th>Worker</th>

  	<th>customer</th>

    <th> feedback</th>
    <th>rating</th>
	
	
  </tr>
<?php

$q="select * from feedback,user where feedback.cid=user.id  ";
$data=mysqli_query($conn,$q);
if(count($data)>0)
{
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
}
else
{
echo "no user";
}
?>
</table>
</div>

