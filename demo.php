<?php 

  $no = 1;

//   $cars = array(
// array('name'=>'Shahrukh Khan','address'=>'RaiwindRoad','city'=>'Lahore','pin_code'=>44,'country'=>'Pakistan'),
// array(2,'Hamza','Gulberg','Karachi',55,'Pakistan'),
// array(3,'Ali','Johar town','Islamabad',66,'pakistan'),
// array(4,'Shahrukh Khan','RaiwindRoad','Lahore',44,'Pakistan'),
// array(5,'Hamza','Gulberg','Karachi',77,'Pakistan'),
// array(6,'Ali','Johar town','Islamabad',88,'Pakistan'),



// // array(1,'Ali','Johar town','Islamabad','Pakistan'),

// );

  $students = array(
          array('name'=>'Thomas Hardy','address'=>'89 Road','city'=>'Portland','pin_code'=>'12334','country'=>'USA'),

          array('name'=>'ALI','address'=>'Garden town','city'=>'Lahore','pin_code'=>'3344555','country'=>'Pakistan'),

          array('name'=>'Henry','address'=>'Samanabad','city'=>'Lahore','pin_code'=>'33666','country'=>'Pakistan'),

          array('name'=>'Elly','address'=>'Block C','city'=>'Karachi','pin_code'=>'77555','country'=>'Canada'),

          array('name'=>'Usman','address'=>'Iqbal town','city'=>'Islamabad','pin_code'=>'88666','country'=>'UK')
  )

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Student List</h2>          
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Pin Code</th>
        <th>Country</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($students as $student){ ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $student['name']; ?></td>
        <td><?php echo $student['address'] ?></td>
        <td><?php echo $student['city'] ?></td>
         <td><?php echo $student['pin_code'] ?></td>
          <td><?php echo $student['country'] ?></td>
          <td><a href="#" class="btn btn-info">Edit <i class="fa fa-address-card"></i></a> <a href="#" class="btn btn-danger">Delete <i class="material-icons"></i></a></td>
      </tr>
    <?php } ?>
      
     
    </tbody>
  </table>
</div>

</body>
</html>