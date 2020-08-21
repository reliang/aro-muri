<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
<title>testing</title>
</head>

<body>
    <?php
    //if connection is not successful you will see text error
    if (!$conn) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    //if connection is successfully you will see message below
    echo 'Connected successfully';
    
    mysqli_close($conn);
    ?>

</body>

</html>