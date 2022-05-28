<?php
$wid=$_GET["wid"];
$conn=mysqli_connect("localhost","root","","work2work");
	   $q="select * from worker where id='$wid' ";
	   $data=mysqli_query($conn,$q);
	   while($row=mysqli_fetch_array($data))
	   {
?>
<form action="feed.php" method="post" >
<h2>work details</h2>
<img src="../proof/<?php echo $row[10];?> " width="50" height="50"><br>
<input type="hidden" value="<?php echo $wid;?>" name="w">
Name:<?php echo $row[1];?><br>

age<?php echo $row[2];?><br>
gender <?php echo $row[3];?><br />
address<?php echo $row[4];?><br>

state: <?php echo $row[12];?><br>

district: <?php echo $row[13];?><br>


	 
email<?php echo $row[5];?> <br />
mobile<?php echo $row[7];?>  <br />
skill<?php echo $row[8];?>  <br />
experience<?php echo $row[9];?> <br />
<h2>feedback</h2>
feedback<textarea name="feedback"> </textarea><br>
Rating1<input type="radio" name="rating" value="1" >2<input type="radio" name="rating" value="2">3<input type="radio" name="rating" value="3">4<input type="radio" name="rating" value="4">5<input type="radio" name="rating" value="5"><br>

<input type="submit" value="Send" />
</form>
<?php
}
?>