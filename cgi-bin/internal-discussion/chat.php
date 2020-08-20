<html>

<head>
<title>testing</title>
</head>

<body>
    <?php
    if( isset($_POST['chatbody'])){
	$chat = $_POST['chatbody']; //an array
    echo "you entered: " . $chat;
    }
	?>

</body>


<form action="chat.php" method="post"> <!-- send all data to process.php  -->
	Enter chat <input name="chatbody" type="text">
	<input type="submit">
</form>

<button><a href="/cgi-bin/internal-discussion">back</a></button>

</html>
    