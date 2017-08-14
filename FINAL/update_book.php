    
    <?php
    	include "header.php";
    ?>

    <div class="container">
   
      <div class="starter-template">
        <h1>Edit Room</h1>
        <?php       
          include "config.php";

          if(isset($_GET["book_id"])){
            $room_id = $_GET["book_id"];
            $query = "SELECT * FROM book WHERE id = $book_id";

            //print("$query");

            if(!($result = mysqli_query($conn, $query))) {
              print("Could not execute the query"); 
              die(mysql_error());
            }

            if($row = mysqli_fetch_assoc($result)) {
              $book_id = $row["book_id"];
              $judul = $row["title"];
              $penulis = $row["jenis"];
              $roomFeature = $row["fitur"];
              $roomPrice = $row["harga"];
            }
          }
          
          if(isset($_POST["submit"])){
            $roomID = $_POST["roomid"];
            $roomname = $_POST["roomname"];
            $fitur = $_POST["fitur"];
            $jenis = $_POST["jenis"];
            $harga = $_POST["harga"];

            $queryupdate = "UPDATE room SET nomor_kamar = '$roomname',jenis = '$jenis',fitur = '$fitur', harga = $harga WHERE id = $roomID";

            if(!($result = mysqli_query($conn, $queryupdate))) {
              print("Could not execute the query"); 
              die(mysql_error());
            }

            header("Location: view_room.php");
          }
          

          mysqli_close($conn);

        ?>

        <div class="col-md-6 col-xs-12">
        	<form method="POST" action="update_room.php?update=true">
            <div class="form-group" >
              <label for="room_id">room ID</label>
              <input type="text" class="form-control" id="room_id" name="roomid" value="<?php echo "$room_id"?>">
            </div>
    			  <div class="form-group" >
    			    <label for="roomname">roomname</label>
    			    <input type="text" class="form-control" id="roomname" name="roomname" value="<?php echo "$roomName" ?>">
    			  </div>
    			  <div class="form-group">
    			    <label for="password">Fitur</label>
    			    <input type="text" class="form-control" id="password" value="<?php echo "$roomFeature" ?>" name="fitur">
    			  </div>
            <div class="form-group">
              <label for="password">jenis</label>
              <input type="text" class="form-control" id="password" value="<?php echo "$roomType" ?>" name="jenis">
            </div>
            <div class="form-group">
              <label for="password">Harga</label>
              <input type="text" class="form-control" id="password" value="<?php echo "$roomPrice" ?>" name="harga">
            </div>
    			  <button type="submit" class="btn btn-default" name="submit">Submit</button>
    			</form>
        </div>

      </div>

    </div><!-- /.container -->

    <?php
    
    include "footer.php";
    
    ?>