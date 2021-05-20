<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<script type="text/javascript">

	</script>
</head>
<body>
	<form method="get" name="form1" action="chuyen_trang">
	<ul>
	<?php
		 $con = mysqli_connect('localhost','root','','demo');

		 $sql = "SELECT * FROM Category";
		 $result = mysqli_query($con,$sql);
		 while($row = mysqli_fetch_assoc($result)) {
	?>
	 		<li><a href="chuyen_trang.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>	  
	 	<?php } ?>
	</ul>
</form>
</body>
</html>