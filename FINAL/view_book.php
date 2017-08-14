<?php
include "header.php";
include "config.php";
?>

<div class="container">

  <div class="starter-template">
    <h1>Lab 8</h1>
    <!-- Code here -->

    <?php
             

    ?>


    <h3>List room</h3>
    <table class="table">
      <tr>
        <th>ID</th>
        <th>Gambar Buku</th>
        <th>Judul Buku</th>
        <th>Penulis Buku</th>
        <th>Penerbit Buku</th>
        <th>Deskripsi</th>
        <th>Jumlah</th>
      </tr>
      <?php
        $query = "SELECT * FROM book";
        if(!($result = mysqli_query($conn, $query))) {
          print("Could not execute the query"); 
          die(mysqli_connect_error());
        }
        while($row = mysqli_fetch_row($result)){

          //Passing variable ke halaman lainnya dapat menggunakan SESSION atau GET
          echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>" . $row[2] . "</td><td>" . $row[3] . "</td><td>" . $row[4] ."</td><td>". $row[5]. "</td><td>". $row[6]."</td>";
          if($_SESSION['role'] == "admin"){
            echo "<td> <a href=update_book.php?book_id=".$row[0].">Tambah</a> | <a href=delete_book.php?delete=true&book_id=".$row[0].">Remove</a></td>";
          }
          echo "</tr>";
        }
      ?>
    </table>
    <?php 
      if($_SESSION['role'] == "admin")
      echo "<a href='add_room.php' class='btn btn-default'>Tambah room</a>";
    
    ?>
    </div>

  </div><!-- /.container -->


  <?php
  include "footer.php";
  mysqli_close($conn);
  ?>