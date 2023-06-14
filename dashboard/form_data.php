<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit</title>
  <link rel="stylesheet" href="../styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</head>

<body>
  <div class="center" style="height:fit-content;">

    <h1>Edit Data</h1>
    <form action="edit.php" method="POST">
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "jwd9";

      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }


      $data = $_GET["id"];
      $sql = "SELECT * FROM peserta_training WHERE id=$data";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {



      ?>

          <input class="form-control" type="hidden" name="id" value="<?php echo $row["id"]; ?>">
          <div class="form-group">
            <label for="name">Nama Lengkap</label>
            <input class="form-control" type="text" name="nama" value="<?php echo $row["nama"]; ?>" />
          </div>

          <div class="form-group">
            <label for="username">Nomer Peserta</label>
            <input class="form-control" type="text" name="nomor_peserta" value="<?php echo $row["nomor_peserta"]; ?>" />
          </div>

          <div class="form-group">
            <label for="username">Email Peserta</label>
            <input class="form-control" type="text" name="email" value="<?php echo $row["email"]; ?>" />
          </div>
      <?php


        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);
      ?>

      <div class='d-flex justify-content-center' style="margin:10px">
        <button type="submit" class="btn btn-primary" name="register">Update Data</button>
      </div>

    </form>

    <div class='d-flex justify-content-center' style="margin:10px">
      <a href="index.php">
        <button class="btn btn-warning">Back</button>
      </a>
    </div>
  </div>

</body>

</html>