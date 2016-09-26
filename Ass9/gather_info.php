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
         if(empty($_POST['Dept'])){
               $data_missing[]='Dept';
         } else{
           $Dept=trim($_POST['Dept']);
         }	
         if(empty($_POST['year'])){
               $data_missing[]='year';
         } else{
           $year=trim($_POST['year']);
         }
         if(empty($_POST['email'])){
               $data_missing[]='email';
         } else{
           $email=trim($_POST['email']);
         }
        }
      if(empty($data_missing)){
           require_once('/var/www/html/mysqli_connect.php');
          $sql = "INSERT INTO students (ID,name,Dept,Year,email)
                VALUES ('$ID','$name','$Dept','$year','$email')";
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
