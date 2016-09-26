<html>

   <head>
         <link rel="stylesheet" type="text/css" href="table.css">
         <title> Information Gathered</title>
   </head>  
   <body>
	<?php
         if(isset($_POST['submit'])){
          $data_missing = array();
         if(empty($_POST['ID'])){
               $data_missing[]='ID';
         } else{
           $ID=trim($_POST['ID']);
         }
	}
	//echo "hey";
	 if(empty($data_missing)){
           require_once('/var/www/html/mysqli_connect.php');
          // echo "hey";
	   $sql = "SELECT Course_ID, Course_Name, Student_ID  FROM enrollment where Course_ID=$ID";
	   //$ssql= "SELECT ID, Name, Dept, Year, Email  FROM students where ID=$ID"
           $result = $conn->query($sql);
          if ($result->num_rows > 0) {
        // echo "Student Information";
       echo   "<table border='1' class='TFtable'>";
       echo     "<tr>";
       echo     "<td>Course_ID</td>";
       echo     "<td>Course_Name</td>";
       echo     "<td>Student_ID</td>";
       echo      "</tr>";
    // output data of each row
         while($row = $result->fetch_assoc()) {
      $k=$row['Course_Name'];
       echo     "<tr>";
        echo    "<td>" . $row['Course_ID'] . "</td>";
       echo     "<td>" . $row['Course_Name'] . "</td>";
       echo     "<td>" . $row['Student_ID'] . "</td>";
       echo      "</tr>";
       } 
       echo   "</table>"; 
       echo "The total number of Students enrolled in $k is $result->num_rows "; 
} else {
    echo "There is no course available with the entered ID, Please check the ID once again from the following table";
      $sql = "SELECT Course_ID, Course_Name, Student_ID  FROM enrollment";
	   //$ssql= "SELECT ID, Name, Dept, Year, Email  FROM students where ID=$ID"
           $result = $conn->query($sql);
          if ($result->num_rows > 0) {
     //    echo "Student Information";
       echo   "<table border='1' class='TFtable'>";
       echo     "<tr>";
       echo     "<td>Course_ID</td>";
       echo     "<td>Course_Name</td>";
       echo     "<td>Student_ID</td>";
       echo      "</tr>";
    // output data of each row
         while($row = $result->fetch_assoc()) {
      //$k=$row['Course_Name'];
       echo     "<tr>";
        echo    "<td>" . $row['Course_ID'] . "</td>";
       echo     "<td>" . $row['Course_Name'] . "</td>";
       echo     "<td>" . $row['Student_ID'] . "</td>";
       echo      "</tr>";
       } 
       echo   "</table>"; 
       //echo "The total number of Students enrolled in $k is $result->num_rows "; 
}
}
}
?>
</body>
</html>
