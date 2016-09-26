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
	   $sql = "SELECT ID, Name, Dept, Year, Email  FROM students where ID=$ID";
	   //$ssql= "SELECT ID, Name, Dept, Year, Email  FROM students where ID=$ID"
           $result = $conn->query($sql);
          if ($result->num_rows > 0) {
      //   echo "Student Information";
       echo   "<table border='1' class='TFtable'>";
       echo     "<tr>";
       echo     "<td>ID</td>";
       echo     "<td>Name</td>";
       echo     "<td>Dept</td>";
       echo     "<td>Year</td>";
       echo     "<td>Email</td>";
       echo      "</tr>";
    // output data of each row
         while($row = $result->fetch_assoc()) {
      
       echo     "<tr>";
        echo    "<td>" . $row['ID'] . "</td>";
       echo     "<td>" . $row['Name'] . "</td>";
       echo     "<td>" . $row['Dept'] . "</td>";
       echo     "<td>" . $row['Year'] . "</td>";
       echo     "<td>" . $row['Email'] . "</td>";
       echo      "</tr>";
       } 
       echo   "</table>"; 
} else {
    echo "There is no student registered with the entered ID, Pleaase check the ID once again";
}
}
?>
</body>
</html>
