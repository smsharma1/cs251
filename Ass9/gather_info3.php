<html>

   <head>
         <title> Information Gathered</title>
   </head>  
   <body>
       <?php
         if(isset($_POST['submit'])){
          $data_missing = array();
         if(empty($_POST['Course_ID'])){
               $data_missing[]='Course_ID';
         } else{
           $Course_ID=trim($_POST['Course_ID']);
         }
         if(empty($_POST['name'])){
               $data_missing[]='name';
         } else{
           $name=trim($_POST['name']);
         }	
         if(empty($_POST['Student_ID'])){
               $data_missing[]='Student_ID';
         } else{
           $Student_ID=trim($_POST['Student_ID']);
         }	
         if(empty($_POST['Faculty_ID'])){
               $data_missing[]='Faculty_ID';
         } else{
           $Faculty_ID=trim($_POST['Faculty_ID']);
         }
        }
      if(empty($data_missing)){
           require_once('/var/www/html/mysqli_connect.php');
          $sql = "INSERT INTO enrollment (Course_ID,Course_Name,Student_ID,Faculty_ID)
                VALUES ('$Course_ID','$name','$Student_ID','$Faculty_ID')";
        if ($conn->query($sql) === TRUE) {
              echo "New record created successfully";
              header("Location: insert.html");
            } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
          }           
           mysqli_close($dbc);
	}
       else{	
	echo "You need to enter following data<br />";
        foreach($data_missing as $missing){
		echo "$missing<br />";
		}   
	}
       ?>
   </body>
</html>
