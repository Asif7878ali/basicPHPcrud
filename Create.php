<?php
include 'Database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <div>
        <form action="#" method="POST">
            <h1>Create Students</h1>
          <div>
            <input type="text" name="name"/>
            <input type="email" name="email">
            <input type="submit" name="submit" value="submit"/>
          </div>  
        </form>
     </div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $inserQuery = "INSERT INTO `student` (`Name`, `Email`) VALUES ('$name', '$email') ";
   $result = $conn->query($inserQuery);
   if($result == true){
      echo "<script> alert('Data Added Succesfully'); </script>";
   } else {
      echo "<script> alert('Failed to ADD'); </script>";
   }
   $conn->close(); 
} else{
   echo 'Insert Data';
}

?>