<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
  <title>Info</title>
</head>
  <body>
    <div class="container">
      <div class="box form-box">

        <?php
          include("config.php");
          
          $name = '';
          $age = '';
          $success = false;

          if(isset($_POST['submitBtn'])){
            $name = $_POST['name'];
            $age = $_POST['age'];

            $query = "INSERT INTO users (name, age) VALUES ('$name', '$age')";
            $checking = mysqli_query($con, $query);

            if(!$checking){
              die("Database Error: " . mysqli_error($con));
            }
          }
          $result = mysqli_query($con, "SELECT * FROM users");
        ?>

        <header>INFORMATION</header>
        <form action="" method="post">
          <div class="input-field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Shahad Suliman">
          </div>
          <div class="input-field">
            <label for="age">Age</label>
            <input type="number" name="age" id="age" placeholder="28" >
          </div>
          <div class="input-field">
            <input class="btn" type="submit" value="Submit" name="submitBtn" id="submitBtn">
          </div>
        </form>
      </div>

      <div class="box">
        <header>OVERVIEW</header>

        <table border="1">
          <tr>
          <th>ID</th> <th>Name</th> <th>Age</th> <th>Status</th> <th>Action</th>
          </tr>

          <?php while ($row = mysqli_fetch_assoc($result)) { ?>

          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['age'] ?></td>
            <td id="status-<?= $row['id'] ?>"><?= $row['status'] ?></td>
            <td>
              <button class="toggleBtn" onclick="toggleStatus(<?= $row['id'] ?>)">Toggle</button>
            </td>
          </tr>
          <?php } ?>
        </table>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>



  <!--  CREATE TABLE users(
	id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(15),
    age INT,
    Status INT DEFAULT 0
);  -->