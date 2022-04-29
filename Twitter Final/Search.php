<?php
include 'connect.php';
?>
<!doctype html>
<html>
<title> PHP MYSQL - Search</title>
<head>
</head>

<body>
<form action="searchdb.php" method="POST">
<h3>Search Database</h3>
	<p>Search</p>
	<input type="text" name="name" size="100"></td>
	<input type="submit" name="submit">
</form>
</body>
<?php
$sql="SELECT * FROM mcdonalds";
$result= mysqli_query($conn,$sql);
$queryResults= mysqli_num_rows($result);
			
	if($queryResults){
		while($row=mysqli_fetch_assoc($result))
			{
				?>
					
					
				<div>
						<h2>tweets:<?php echo $row['tweets']?></h2>
						<h2>likes: <?php echo $row['likes']?></h2>
						<h2>retweets: <?php echo $row['retweets']?></h2>
						<h2>time: <?php echo $row['time']?></h2>
						<h2>Sentiment: <?php echo $row['sentiment']?></h2>
					</div>
			<?php		

			}
			}
		?>


</html>