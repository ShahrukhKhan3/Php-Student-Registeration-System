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

        <form action="store.php" method="POST">

            <div class="parts special">

                <h1>Student Registration Form</h1>

                <p class="header-p">This is a simple Student Registration Form!</p>

            </div>

            <div class="parts">

                <h4>First Name:</h4>

                <input type="text" placeholder="First Name" name="fname" required>

            </div>

            <div class="parts">

                <h4>Last Name:</h4>

                <input type="text" placeholder="Last Name" name="lname" required>

            </div>

            <div class="parts">

                <h4>Father Name:</h4>

                <input type="text" placeholder="Father Name" name="father_name" required>

            </div>

            <div class="parts">

                <h4>Gender:</h4>

                <input type="radio" name="gender" id="male" value="male" required>

                <label for="male">Male</label> <br>

                <input type="radio" name="gender" id="female" value="female" required>

                <label for="female">Female</label>

            </div>

            <div class="parts">

                <h4>Date of Birth:</h4>

                <input type="date" name="dob" id="dob" required>

            </div>

            <div class="parts">

                <h4>Contact Number:</h4>

                <input type="text" placeholder="Contact Number" name="contact" required>

            </div>

            <div class="parts">

                <h4>Home Address:</h4>

                <input type="text" placeholder="Home Address" name="address" required>

            </div>

            <div class="parts">

                <h4>Last Qualification:</h4>

                <input type="text" placeholder="Last Qualification" name="qualification" required>

            </div>

            <div class="parts">

                <h4>Religion:</h4>

                <input type="radio" name="religion" id="muslim" value="muslim" required>

                <label for="muslim">Muslim</label> <br>

                <input type="radio" name="religion" id="non-muslim" value="non_muslim" required>

                <label for="non-muslim">Non Muslim</label>

            </div>

            <div class="parts">

                <h4>B-Form/CNIC Number:</h4>

                <input type="text" placeholder="B-Form/CNIC Number" name="cnic" required>

            </div>

            <div class="parts">

                <h4>Email:</h4>

                <input type="email" name="email" placeholder="Email" required>

            </div>

            <button type="submit">Submit Response</button>

        </form>

    </div>



</body>

</html>