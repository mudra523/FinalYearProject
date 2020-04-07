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
<script>
function showData(str) {
    if (str == "") {
        document.getElementById("demo").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","HomeData.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
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
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)" value="ETT1" id="ETT1">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)" value="ETT2" id="ETT2">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)" value="ETT3" id="ETT3">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)"  value="ETT4" id="ETT4">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)"  value="ETT5" id="ETT5">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)"  value="ETT6" id="ETT6">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)"  value="ETT7" id="ETT7">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" onclick="showData(this.value)"  value="ETT8" id="ETT8">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam Syllabus
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES1" id="ES1">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES2" id="ES2">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES3" id="ES3">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES4" id="ES4">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES5" id="ES5">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES6" id="ES6">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES7" id="ES7">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ES8" id="ES8">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Exam Seat Number
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN1" id="ESN1">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN2" id="ESN2">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN3" id="ESN3">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN4" id="ESN4">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN5" id="ESN5">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN6" id="ESN6">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN7" id="ESN7">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="ESN8" id="ESN8">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Question Paper
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP1" id="QP1">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP2" id="QP2">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP3" id="QP3">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP4" id="QP4">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP5" id="QP5">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP6" id="QP6">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP7" id="QP7">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="QP8" id="QP8">Semester 8</a>
        </div>
      </div>
      </li>
      <li class="nav-item">
      <div class="dropdown dropright">
        <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i>Result
        </a>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re1" id="Re1">Semester 1</a>          
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re2" id="Re2">Semester 2</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re3" id="Re3">Semester 3</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re4" id="Re4">Semester 4</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re5" id="Re5">Semester 5</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re6" id="Re6">Semester 6</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re7" id="Re7">Semester 7</a>
          <a class="dropdown-item nav-link text-dark font-italic bg-light" value="Re8" id="Re8">Semester 8</a>
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
          
          </div>                           
        </div>
      </div>               
    </div>
    <!-- End demo content -->

</div>
  
</body>
</html>
