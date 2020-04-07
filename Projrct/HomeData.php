<?php
            include 'Connection.php';
            // $type = $_GET['type'];
            // if( $type="ETT1"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
                
            // }
            // else if($type="ETT2"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='second' ORDER BY ID DESC;") or die($conn->error);
            // }
            // else if($type="ETT3"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
            // }
            // else if($type="ETT4"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
            // }
            // else if($type="ETT5"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ETT6'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ETT7'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ETT8'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Time Table' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ES1'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ES2'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ES3'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ES4'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type="ES5"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ES6'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ES7'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ES8'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Syllabus' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN1'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN2'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN3'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN4'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN5'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN6'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN7'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='ESN8'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Exam Seat Number' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='QP1'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='QP2'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='QP3'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='QP4'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Foure' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='QP5'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='QP6'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type="QP7"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='QP8'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Quetion Paper' AND SEMESTER='Eighth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Re1'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='First' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Re2'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Second' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type="Re3"){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Third' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Re4'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Fourth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Re5'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Fifth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Re6'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Sixth' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Re7'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Seventh' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Re8'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Result' AND SEMESTER='Eight' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Activity'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Activity' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Events'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Events' ORDER BY ID DESC;") or die($conn->error);
            // }else if($type='Notice'){
            //     $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Notice' ORDER BY ID DESC;") or die($conn->error);
            // }
            //  else{
            //      $result = $conn->query("SELECT * FROM circulardb ORDER BY ID DESC;") or die($conn->error);
            //  }
            
            $result = $conn->query("SELECT * FROM circulardb WHERE CATAGORY='Events' ORDER BY ID DESC;") or die($conn->error);
                
                         
            echo "<div class='row'>";
            echo "<table class='table text-white'>";
                      
            while ($row = $result->fetch_assoc()){                
                echo "<tr>";     
                echo "<td>" . $row['DATE'] . "</td>";
                echo "<td>" . $row['C_NAME'] . 
                "</td>";                   
                echo "<td>";
                echo "<button id='sidebarCollapse' type='submit' class='btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4 text-dark'  name='submit' role='button'>
                <i class='fa fa-bars mr-2'></i>
                <download href='Download.php?ID= {$row["ID"]}' >
                <small class='text-uppercase font-weight-bold'>DOWNLOAD</small>
                </a>
                </button>";
                echo "</td>";
                echo "</tr>";
              } 
              echo "</table>";
              echo "</div>";
?>
      