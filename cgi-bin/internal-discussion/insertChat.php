		<?php
		include_once 'mysqli_connect.php';
		if($_POST['chatbody'] == ""){
			echo '<script>alert("Cannot send an empty chat")
			window.location.href="../internal-discussion";
			</script>'; 		
		} else if( isset($_POST['chatbody'])){
			$pennID = $_SERVER['employeeNumber'];
			$pennKey = $_SERVER['REMOTE_USER'];
			$chat = $_POST['chatbody'];
			$chatNew = htmlspecialchars($chat, ENT_QUOTES);
			$first =  $_SERVER['givenName'];
			$last =  $_SERVER['sn'];
			$email =  $_SERVER['mail'];
			$sql = "INSERT INTO chats (pennID, pennKey, user_first, user_last, user_email, chat) VALUES (?, ?, ?, ?, ?, ?);";
			// prepare statement to avoid code in param & parse null fields
			$stmt = mysqli_stmt_init($conn);
			if (!mysqli_stmt_prepare($stmt, $sql)) {
				echo "SQL error";
			} else {
				mysqli_stmt_bind_param($stmt, "ssssss", $pennID, $pennKey, $first, $last, $email, $chatNew);
				mysqli_stmt_execute($stmt);
			}

			//send an email to aro-muri@seas.upenn.edu
			$to = "pqy@seas.upenn.edu";
			$subject = "ARO-MURI: A new announcement is made.";
			$message = "<p> A new announcement is made: ".$chat;
			$message .= "<br>Click here to check: https://aro-muri2020.seas.upenn.edu/cgi-bin/internal-discussion</p>";
			$header = "From:am2020@seas.upenn.edu \r\n";
			//$header .= "Cc:reliang@seas.upenn.edu, wng@seas.upenn.edu \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n";
			
			$retval = mail ($to,$subject,$message,$header);
			
			// if( $retval == true ) {
			//    echo "Message sent successfully...";
			// }else {
			//    echo "Message could not be sent...";
			// }

			//send an email to aro-muri@seas.upenn.edu
			header("Location: index.php?send=success");
		} else {
			header("");
		}
	?>
