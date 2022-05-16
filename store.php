<?php

$first_name = $_POST['fname'];

$last_name = $_POST['lname'];

$father_name = $_POST['father_name'];

$gender = $_POST['gender'];

$dob = $_POST['dob'];

$contact_number = $_POST['contact'];

$home_address = $_POST['address'];

$qualification = $_POST['qualification'];

$religion = $_POST['religion'];

$cnic = $_POST['cnic'];

$email = $_POST['email'];



$servername = "localhost";

$username = "root";

$password = "";

$database = "batch3_morning";


try {

    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    // set the PDO error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "INSERT INTO student_registration(first_name,last_name,father_name,gender,dob,contact_number,address,qualification,religion,cnic,email)VALUES('$first_name','$last_name','$father_name','$gender','$dob','$contact_number','$home_address','$qualification','$religion','$cnic','$email')";

    // use exec() because no results are returned

    $conn->exec($sql);
    header("Location: view.php");

    // echo "New record created successfully";

} catch (PDOException $e) {

    echo $sql . "<br>" . $e->getMessage();

}

?>