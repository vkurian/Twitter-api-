
<?php
include 'connect.php';
if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM mcdonalds WHERE tweets LIKE '%$name%' OR retweets LIKE '%$name%' OR likes LIKE '%$name%' OR time LIKE '%$name%'";
	

	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			?>
					<div>
						<h2>tweets:<?php echo $row['tweets']?></h2>
						<h2>likes: <?php echo $row['likes']?></h2>
						<h2>retweets: <?php echo $row['retweets']?></h2>
						<h2>time: <?php echo $row['time']?></h2>
						<h2>Sentiment: <?php echo $row['sentiment']?></h2>
					
					</div>";
					<?php
	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>
