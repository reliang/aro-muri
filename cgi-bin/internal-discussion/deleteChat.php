<?php
        include_once 'mysqli_connect.php';
        $my_id = $_SERVER['employeeNumber'];
        $chat_pennID = $_POST['pennID'];
		if($my_id == $chat_pennID){
			$chat_id = $_POST['chat_id'];
			$sql = "DELETE FROM chats WHERE chat_id='$chat_id';";
			mysqli_query($conn, $sql);
			header("Location: index.php?delete=success");
        } else {
            echo '<script>alert("Cannot delete other\'s comment!")
			window.location.href="../internal-discussion";
			</script>'; 	
        }

	?>