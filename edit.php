<?php
$id = $_GET['id'];

$servername = "localhost";

$username = "root";

$password = "";

$database = "batch3_morning";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM student_registration WHERE id = $id ");
    $stmt->execute();

  // set the resulting array to associative
    $student = $stmt->fetch(\PDO::FETCH_ASSOC);


} catch (PDOException $e) {

    echo "Connection failed: " . $e->getMessage();

}
$conn = null;


 ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration Form</title>

    <style>

        * {

  margin: 0;

  padding: 0;

}

body {

  background-color: #f0ebf8;

}

.container {

  width: 55%;

  margin: auto;

}

h1,

.header-p {

  text-align: center;

  margin-bottom: 10px;

  letter-spacing: 1px;

}

.header-p {

  margin-bottom: 0;

}

.parts {

  background-color: white;

  border-radius: 5px;

  margin: 10px 0px;

  box-shadow: 0px 0px 5px darkgray;

  padding: 30px 20px;

  border-left: 5px solid #4285f4;

}

.parts h4 {

  margin-left: 5px;

  margin-bottom: 5px;

  letter-spacing: 1px;

  line-height: 18px;

  font-size: 17px;

}

.parts input[type="text"],

.parts input[type="email"] {

  width: 100%;

  outline-width: 0;

  border: 0;

  border-bottom: 2px solid lightgrey;

  padding: 10px 0px;

  padding-left: 5px;

}



.parts input[type="text"]:focus,

.parts input[type="email"]:focus {

  transition: 0.5s ease;

  border-bottom: 2px solid purple;

}



.parts input[type="date"] {

  width: 150px;

  outline-width: 0;

  padding: 10px 5px;

  border: 0;

  border-bottom: 2px solid lightgrey;

}

.parts input[type="date"]:focus {

  transition: 0.5s ease;

  border-bottom: 2px solid purple;

}

.parts input[type="radio"] {

  margin: 15px 0px;

  margin-left: 5px;

}

button {

  background-color: #673ab7;

  color: white;

  width: 100%;

  padding: 15px 0px;

  border: none;

  cursor: pointer;

  margin-top: 10px;

  margin-bottom: 50px;

  position: relative;

}

button:hover {

  box-shadow: 0px 0px 10px grey;

}



.special {

  border-top: 10px solid #582a29;

  border-left: 5px solid #4285f4;

}



@media (max-width: 880px) {

  .container {

    width: 90%;

  }

}



    </style>

</head>

<body>

    <div class="container">

        <form action="update.php?id=<?php echo $id; ?>" method="POST">

            <div class="parts special">

                <h1>Student Registration Form</h1>

                <p class="header-p">This is a simple Student Registration Form!</p>

            </div>

            <div class="parts">

                <h4>First Name:</h4>

                <input type="text" placeholder="First Name" name="fname" value="<?php echo $student['first_name']; ?>" required>

            </div>

            <div class="parts">

                <h4>Last Name:</h4>

                <input type="text" placeholder="Last Name" name="lname" value="<?php echo $student['last_name']; ?>" required>

            </div>

            <div class="parts">

                <h4>Father Name:</h4>

                <input type="text" placeholder="Father Name" name="father_name" value="<?php echo $student['father_name']; ?>"required>

            </div>

            <div class="parts">

                <h4>Gender:</h4>

                <input type="radio" name="gender" id="male" value="male" <?php echo ($student['gender']=='male')?'checked':'' ;  ?> required>

                <label for="male">Male</label> <br>

                <input type="radio" name="gender" id="female" value="female" <?php echo ($student['gender']=='female')?'checked':'';?> required>

                <label for="female">Female</label>

            </div>

            <div class="parts">

                <h4>Date of Birth:</h4>

                <input type="date" name="dob" id="dob" value="<?php echo $student['dob']; ?>" required>

            </div>

            <div class="parts">

                <h4>Contact Number:</h4>

                <input type="text" placeholder="Contact Number" name="contact" value="<?php echo $student['contact_number']; ?>"required>

            </div>

            <div class="parts">

                <h4>Home Address:</h4>

                <input type="text" placeholder="Home Address" name="address"  value="<?php echo $student['address']; ?>"required>

            </div>

            <div class="parts">

                <h4>Last Qualification:</h4>

                <input type="text" placeholder="Last Qualification" name="qualification" value="<?php echo $student['qualification']; ?>" required>

            </div>

            <div class="parts">

                <h4>Religion:</h4>

                <input type="radio" name="religion" id="muslim" value="muslim" <?php echo ($student['religion']=='muslim')?'checked':''; ?> required>

                <label for="muslim">Muslim</label> <br>

                <input type="radio" name="religion" id="non-muslim" value="non_muslim" <?php echo ($student['religion']=='non_muslim')?'checked':''; ?> required>

                <label for="non-muslim">Non Muslim</label>

            </div>

            <div class="parts">

                <h4>B-Form/CNIC Number:</h4>

                <input type="text" placeholder="B-Form/CNIC Number" name="cnic" value="<?php echo $student['cnic']; ?>" required>

            </div>

            <div class="parts">

                <h4>Email:</h4>

                <input type="email" name="email" value="<?php echo $student['email']; ?>" placeholder="Email"  required>

            </div>

            <button type="submit">Update Response</button>

        </form>

    </div>



</body>

</html>