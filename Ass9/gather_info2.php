<html>

   <head>
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
         if(empty($_POST['name'])){
               $data_missing[]='name';
         } else{
           $name=trim($_POST['name']);
         }	
         if(empty($_POST['faculty_ID'])){
               $data_missing[]='faculty_ID';
         } else{
           $faculty_ID=trim($_POST['faculty_ID']);
         }
        }
      if(empty($data_missing)){
           require_once('/var/www/html/mysqli_connect.php');
          $sql = "INSERT INTO courses (ID,Name,Faculty_ID)
                VALUES ('$ID','$name','$faculty_ID')";
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
