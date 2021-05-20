<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		 $con = mysqli_connect('localhost','root','','demo');
		 $id=$_GET['id'];
		 $sql = "SELECT * FROM singer WHERE idSong= $id";
		 $result = mysqli_query($con,$sql);
		 while($row = mysqli_fetch_assoc($result)) {
	?>
	<p><?php echo $row['nameSinger']; ?></p>
<?php } ?>
</body>
</html>