<html>

   <head>
         <title> Information Gathered</title>
	<link rel="stylesheet" type="text/css" href="table.css">
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
	   $sql = "SELECT ID, Name, Dept,Research,Courses,Email  FROM faculty where ID=$ID";
	   //$ssql= "SELECT ID, Name, Dept, Year, Email  FROM students where ID=$ID"
           $result = $conn->query($sql);
          if ($result->num_rows > 0) {
      //   echo "Student Information";
       echo   "<table border='1' class='TFtable'>";
       echo     "<tr>";
       echo     "<td>ID</td>";
       echo     "<td>Name</td>";
       echo     "<td>Dept</td>";
       echo     "<td>Research</td>";
       echo     "<td>Courses</td>";
       echo     "<td>Email</td>";
       echo      "</tr>";
    // output data of each row
         while($row = $result->fetch_assoc()) {
      $k=$row['Course_Name'];
       echo     "<tr>";
       echo    "<td>" . $row['ID'] . "</td>";
       echo     "<td>" . $row['Name'] . "</td>";
       echo     "<td>" . $row['Dept'] . "</td>";
       echo    "<td>" . $row['Research'] . "</td>";
       echo     "<td>" . $row['Courses'] . "</td>";
       echo     "<td>" . $row['Email'] . "</td>";
       echo      "</tr>";
       } 
       echo   "</table>"; 
       echo "The total number of Students enrolled in $k is $result->num_rows "; 
} else {
    echo "There is no course available with the entered ID, Please check the ID once again,Following are available faculty";
     $sql = "SELECT ID, Name, Dept,Research,Courses,Email  FROM faculty";
	   //$ssql= "SELECT ID, Name, Dept, Year, Email  FROM students where ID=$ID"
           $result = $conn->query($sql);
          if ($result->num_rows > 0) {
        // echo "Student Information";
       echo   "<table border='1' class='TFtable'>";
       echo     "<tr>";
       echo     "<td>ID</td>";
       echo     "<td>Name</td>";
       echo     "<td>Dept</td>";
       echo     "<td>Research</td>";
       echo     "<td>Courses</td>";
       echo     "<td>Email</td>";
       echo      "</tr>";
    // output data of each row
         while($row = $result->fetch_assoc()) {
      $k=$row['Course_Name'];
       echo     "<tr>";
       echo    "<td>" . $row['ID'] . "</td>";
       echo     "<td>" . $row['Name'] . "</td>";
       echo     "<td>" . $row['Dept'] . "</td>";
       echo    "<td>" . $row['Research'] . "</td>";
       echo     "<td>" . $row['Courses'] . "</td>";
       echo     "<td>" . $row['Email'] . "</td>";
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
