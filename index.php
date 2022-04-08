<?php
    
    //connect to database
    $conn = mysqli_connect('localhost', 'Marcus', '12345','test');

    //check connection
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }

    //selecting table
    $sql = 'SELECT * from test';

    //get results
    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array
    $tweets = mysqli_fetch_all($result, MYSQLI_ASSOC);

    //print_r($tweets);

    //free reult from memory
    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tweets</title>
</head>
<body>
    <h1>
        <?php  ?>
    </h1>
    <h4 class="center grey-text">Tweets!</h4>
    <div class="containter">
        <div class="row">

            <?php foreach($tweets as $tweet){ ?>
            
                <div class = "col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($tweet['tweets']); ?></h6>
                        </div>
                    </div>
                </div>
            
            <?php } ?>

        </div>
    </div>
</body>
</html>