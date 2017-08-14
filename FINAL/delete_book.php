<?php
	include "header.php";
	if(isset($_GET["delete"])){
		include "config.php";

        $room = $_GET['book_id'];
	    //DELETE a user instance
	    $delete_room = "DELETE FROM book WHERE id = $book ";

	    if(!($result = mysqli_query($conn, $delete_room))) {
	    	print("Could not execute the query"); 
	    	die(mysqli_error());
	    }
	    mysqli_close($conn);
	    header("Location: view_room.php");
	}