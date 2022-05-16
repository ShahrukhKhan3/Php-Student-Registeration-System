<?php

$servername = "localhost";

$username = "root";

$password = "";

$database = "batch3_morning";
$no =1;



try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM student_registration");
    $stmt->execute();

  // set the resulting array to associative
    $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
// print_r($result);
// die();

} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}
$conn = null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>All Students List</h2>
  <a href="create.php" class="btn btn-success">Create Student</a>     <div class="table-responsive">       
  
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr.NO</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($result as $student){  ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $student['first_name']; ?></td>
        <td><?php echo $student['last_name']; ?></td>
        <td><?php echo $student['email']; ?></td>
        <td><a href="edit.php?id=<?php echo $student['id']; ?>" class="btn btn-info">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $student['id']; ?>" class="btn btn-danger">Delete</a></td>
      </tr>
    <?php } ?>
 
    </tbody>
  </table>
 
</div>
</div>

</body>
</html>
