
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$wid=$_GET["wid"];
?>
<form method="post" action="addwork.php" enctype="multipart/form-data">
<input type="hidden" name="wid" value="<?php echo $wid;?>"/>
<table>
<tr>
<td>Work details</td>
<td>
<textarea name="d"></textarea>
</td>
</tr>
<tr>
<td>Start Date</td>
<td><input type="date" name="sd"/></td></tr>
<tr><td>complete Date</td>
<td><input type="date" name="cd"/></td></tr>
<tr><td>budjet</td>
<td><input type="text" name="budget"/></td></tr>
<td>file attatchment</td>
<td><input type="file" name="fileattachment" /></td></tr>
<td><input type="submit" value="submit" /></td>
</form>
</body>
</html>
