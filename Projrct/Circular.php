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
    <script type="text/javascript">
		function change(x)
			{
			document.getElementById("heading").innerHTML=x;	
			}
	</script>
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Circulars<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>    
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Sign In</button>    
            </div>
        </nav>
        
        <div class="row">
            <div class="col-sm-2">
                <div class="container-fluid ">
                    <div class="row bg-dark text-white p-3" id="title1" >
                       <h6 onclick="change('All Circular')"> All Circular</h6>
                    </div>
                    <div class="row bg-dark text-white p-3" id="title2">
                    <h6  onclick="change('Exam TimeTable')">Exam TimeTable</h6> 
                    </div>
                    <div class="row bg-dark text-white p-3" id="title3">
                    <h6  onclick="change('Exam Syllabus')">Exam Syllabus</h6>  
                    </div>
                    <div class="row bg-dark text-white p-3" id="title4" >
                    <h6 onclick="change('Exam Seat Number')"> Exam Seat Number</h6> 
                    </div>
                    <div class="row bg-dark text-white p-3" id="title5">
                    <h6 onclick="change('Quetion Paper')"> Quetion Paper</h6> 
                    </div>
                    <div class="row bg-dark text-white p-3" id="title6" >
                    <h6  onclick="change('Result')"> Result</h6>  
                    </div>
                    <div class="row bg-dark text-white p-3" id="title7" >
                    <h6 onclick="change('Activity')"> Activity</h6>  
                    </div>
                    <div class="row bg-dark text-white p-3" id="title8">
                    <h6  onclick="change('Events')"> Events</h6>  
                    </div>
                    <div class="row bg-dark text-white p-3" id="title9" >
                    <h6 onclick="change('Attandance')"> Attandance</h6>  
                    </div>
                    <div class="row bg-dark text-white p-3" id="title10" >
                    <h6 onclick="change('Notice')"> Notice</h6>  
                    </div>    
                </div>
            </div>

            <div class="col-sm-10">
                <div class="container-fluid">
                    

                    <?php
                        include 'Connection.php';
                        $result = $conn->query("SELECT * FROM circulardb ORDER BY ID DESC;") or die($conn->error);
                    ?>
                        <div class="row">
                            <table class="table">

                                <?php
                                    while ($row = $result->fetch_assoc()){                
                                ?>
                                <tr>
                
                                    <td><?php  echo $row['DATE'] ?></td>
                                    <td><?php  echo $row['C_NAME'] ?></td>
                                   
                                    <td>
                                        <a href="Download.php?ID=<?php echo $row['ID']; ?>" type="submit" class="btn btn-secondary" name="submit" role="button">DOWNLOAD</a>                    
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>               
            </div>
        </div>
    </div>
</body>
</html>