		<?php
		include_once 'mysqli_connect.php';
		if($_POST['chatbody'] == ""){
			echo '<script>alert("Cannot send an empty chat")
			window.location.href="../internal-discussion";
			</script>'; 		
		} else if( isset($_POST['chatbody'])){
			$pennID = $_SERVER['employeeNumber'];
			$chat = $_POST['chatbody'];
			$chatNew = htmlspecialchars($chat, ENT_QUOTES);
			$first =  $_SERVER['givenName'];
			$last =  $_SERVER['sn'];
			$email =  $_SERVER['mail'];
			$sql = "INSERT INTO chats (pennID, chat, user_first, user_last, user_email) VALUES ('$pennID', '$chatNew', '$first', '$last', '$email');";
			mysqli_query($conn, $sql);
			header("Location: index.php?insert=success");
		} else {
			header("");
		}
	?>
