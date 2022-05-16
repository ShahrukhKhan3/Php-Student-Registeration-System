<?php

$id = $_GET['id'];

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


    $sql = "UPDATE student_registration SET first_name= '$first_name',last_name='$last_name',father_name='$father_name',gender='$gender',dob='$dob',contact_number='$contact_number',address='$home_address',qualification='$qualification',religion='$religion',cnic='$cnic',email='$email' WHERE id=$id";

    // use exec() because no results are returned

    $conn->exec($sql);
    header("Location: view.php");

    // echo "New record created successfully";

} catch (PDOException $e) {

    echo $sql . "<br>" . $e->getMessage();

}

?>