<?php
include 'Connection.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
  $circu_name = $_POST['circu_name'];
  $file = $_POST['file'];
  $catagory = $_POST['catagory'];
  $sem = $_POST['sem'];    

  $sql="INSERT INTO circulardb (C_NAME,FILE,CATAGORY,SEMESTER) 
          VALUES('" . $circu_name . "','" . $file . "','" . $catagory . "','" . $sem . "')";

   $result=$conn->query($sql);
  if ($result === TRUE) {
    echo "<script>alert('data is inserted successfully')</script>";
    echo '<script>window.location="AdminDataManager.php"</script>';
  } else {
    echo "<script>alert('data is not inserted')</script>";
    echo '<script>window.location="DataInsert.php"</script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <script>
      $("#form").validate({
        rules: {
          circu_name: {
            required: true                        
          },
          file: {
            required: true
          },
          catagory: {
            required: true
          },
          sem: {
            required: true                        
          }
        })
      }); 
    </script>
    <style>
      .error {
        color: red;
      }
    </style>

  <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <form action="" method="POST" class="border m-5 p-5" id="form">
            <div class="form-group">
              <label for="Circular Name">Circular Name</label>
              <input type="text" name="circu_name" id="circu_name" class="form-control" placeholder="Name your circular hear">
            </div>
            <div class="form-group">
              <label for="File To Upload">File To Upload</label>
              <input type="file" name="file" id="file" class="form-control" placeholder="Chose File to be Upload ">
            </div>
            <div class="form-group">
              <label for="Catagory">Catagory</label>
              <select  class="form-control" name="catagory" >
                <option  value="Exam Time Table">Exam Time Table</option>
                <option  value="Exam Syllabus">Exam Syllabus</option>
                <option  value="Exam Seat Number">Exam Seat Number</option>
                <option  value="Quetion Paper">Quetion Paper</option>
                <option  value="Result">Result</option>
                <option  value="Activity">Activity</option>
                <option  value="Events">Events</option>
                <option  value="Notice">Notice</option>           
              </select>
            </div>
            <div class="form-group">
              <label for="Semester">Semester</label>
              <select class="form-control" name="sem" >
                <option  value="First">First</option>
                <option  value="Second">Second</option>
                <option  value="Third">Third</option>
                <option  value="Fourth">Fourth</option>
                <option  value="Fifth">Fifth</option>
                <option  value="Sixth">Sixth</option>
                <option  value="Seventh">Seventh</option>
                <option  value="Eighth">Eighth</option>
                <option  value="ALL">ALL</option>                
              </select>
            </div>
            <div class="form-group">
              <label for="File To Upload">Date:</label>
              <input type="date" name="date" id="date" class="form-control" >
            </div>
            <div>
                <button name="submit" id="button" class="btn btn-primary">Upload</button>            
            </div>
        </form>
        <div class="row">
          <div ></div>
        </div>
    </div>
</body>
</html>