<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script async src="//jsfiddle.net/bootstrapious/ko18ravd/embed/"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>

<body>
    
<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">

    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="ldrp.jpg" alt="..." width="65" class="img-fluid mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">LDRP-ITR</h4>
          <!-- <p class="font-weight-light text-muted mb-0">Institute of technology and resuerch</p> -->
        </div>
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">ALL CIRCULARS</p>  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam TimeTable
        </a>                   
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="myFunction()" value="ETT1" id="ETT1" href="#">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="test(this)" value="ETT2" id="ETT2" href="#">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="test(this)" value="ETT3" id="ETT3" href="#">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="test(this)" value="ETT4" id="ETT4" href="#">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="test(this)" value="ETT5" id="ETT5" href="#">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="test(this)" value="ETT6" id="ETT6" href="#">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="test(this)" value="ETT7" id="ETT7" href="#">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="test(this)" value="ETT8" id="ETT8" href="#">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam Syllabus
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES1" id="ES1" href="#">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES2" id="ES2" href="#">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES3" id="ES3" href="#">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES4" id="ES4" href="#">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES5" id="ES5" href="#">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES6" id="ES6" href="#">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES7" id="ES7" href="#">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES8" id="ES8" href="#">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam Seat Number
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN1" id="ESN1" href="#">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN2" id="ESN2" href="#">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN3" id="ESN3" href="#">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN4" id="ESN4" href="#">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN5" id="ESN5" href="#">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN6" id="ESN6" href="#">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN7" id="ESN7" href="#">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN8" id="ESN8" href="#">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Question Paper
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP1" id="QP1" href="#">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP2" id="QP2" href="#">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP3" id="QP3" href="#">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP4" id="QP4" href="#">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP5" id="QP5" href="#">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP6" id="QP6" href="#">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP7" id="QP7" href="#">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP8" id="QP8" href="#">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Result
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re1" id="Re1" href="#">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re2" id="Re2" href="#">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re3" id="Re3" href="#">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re4" id="Re4" href="#">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re5" id="Re5" href="#">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re6" id="Re6" href="#">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re7" id="Re7" href="#">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re8" id="Re8" href="#">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button" id="Activity" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Activity
        </a>
      </div>
      </li>

      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button" id="Event" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Event
        </a>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light" type="button" id="Notice" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Notice
        </a>
      </div>
      </li>
    </ul>
</div>
  <!-- End vertical navbar -->
  
  
  <!-- Page content holder -->
<div class="page-content p-5 bgroudcolor" id="content">
    <!-- Toggle button -->
    <script>
        $(function() {
            // Sidebar toggle behavior
                $('#sidebarCollapse').on('click', function() {
                $('#sidebar, #content').toggleClass('active');
            });
        });
    </script>

    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
    <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">circular</small></button>
  
    <!-- Demo content -->
    <h2 class="display-4 text-white"></h2>
    <!-- <p class="lead text-white mb-0">Here are the circulars and notice </p> -->
    <!-- <div class="separator"></div> -->
    <div class="row text-white">
      <div class="col-lg-12 ">
        <div class="container-fluid shadow">    
            <div class="m-3" id="demo">
              <?php
                    include 'Connection.php';
                    $result = $conn->query("SELECT * FROM circulardb ORDER BY ID DESC;") or die($conn->error);
              ?>               
                <div class="row">
                    <table class="table text-white">
                      <?php
                          while ($row = $result->fetch_assoc()){                
                      ?>
                      <tr>      
                        <td><?php  echo $row['DATE'] ?></td>
                        <td><?php  echo $row['C_NAME'] ?></td>                         
                        <td>
                            <button id="sidebarCollapse" type="submit" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4 text-dark"  name="submit" role="button">
                            <i class="fa fa-bars mr-2"></i><download href="Download.php?ID=<?php echo $row['ID']; ?>" ><small class="text-uppercase font-weight-bold">DOWNLOAD</small></a></button>
                        </td>
                      </tr>
                      <?php } ?>
                    </table>
                </div>
            </div>                           
        </div>
      </div>               
    </div>
    <!-- End demo content -->

</div>
  
</body>
</html>

<script>
function myFunction() {
  document.getElementById("demo").
  <?php
    $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
  ?>
}
// window.test = function(e) {
//   if (e.value === 'AN01') {
//     console.log(e.value);
//   } else if (e.value === 'AN02') {
//     console.log(e.value);
//   } else if (e.value === 'AN03') {
//     console.log(e.value);
//   }
// }

  // if(id==ETT1){
    // <?php
    //   $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
    // ?>
  // }else if(id==ETT2){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='second' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ETT3){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ETT4){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ETT5){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ETT6){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ETT7){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ETT8){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES1){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES2){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES3){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES4){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES5){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES6){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES7){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ES8){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN1){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN2){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN3){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN4){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN5){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN6){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN7){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==ESN8){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP1){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP2){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP3){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP4){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Foure' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP5){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP6){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP7){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==QP8){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re1){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re2){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re3){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re4){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re5){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re6){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re7){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Re8){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Eight' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Activity){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Activity' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Events){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Events' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else if(id==Notice){
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Notice' ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }else{
  //   <?php
  //     $result = $conn->query("SELECT * FROM circulardb ORDER BY ID DESC;") or die($conn->error);
  //   ?>
  // }
</script>