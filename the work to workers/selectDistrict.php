 <option> select </option>
	   <?php
	   $state=$_GET["state"];
	   $conn=mysqli_connect("localhost","root","","work2work");
	   $q="select district from district_tb where state='$state'";
	   $data=mysqli_query($conn,$q);
	   while($row=mysqli_fetch_array($data))
	   {
	   ?>
	   <option> <?php echo $row[0];
	   ?>
	   </option>
	   <?php
	   }
	   ?>