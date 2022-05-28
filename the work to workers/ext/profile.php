<?php
$conn=mysqli_connect("localhost","root","","work2work");
session_start();
$id=$_SESSION["id"];
$q="select * from user where id='$id'";
$data=mysqli_query($conn,$q);
if($row = mysqli_fetch_array($data)){
?>
<form action="editprofile.php" method="post">
name<input type="text" name="name" value="<?php echo $row[1];?>"><br />
dateofbirth<input type="date"name="dateofbirth" value="<?php echo $row[2];?>"><br />
gender m <input type="radio" <?php if($row[3]=="male"){ ?>checked="checked" <?php }?> name="gender" value="male" />
       f <input type="radio" name="gender" value="female" <?php if($row[3]=="female"){ ?>checked="checked" <?php }?> /><br />
place<input  type="text"name="place"value="<?php echo $row[4];?>"  /><br />
address<input  type="text"name="address"value="<?php echo $row[5];?>" /> <br />
email<input  type="email"name="email"value="<?php echo $row[6];?>"  /><br />
mobile<input  type="number"name="mobile"value="<?php echo $row[8];?>"  /><br />
 <input type="submit" value="update" />
</form>
<?php
}
?>