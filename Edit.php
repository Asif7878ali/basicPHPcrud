<?php
include 'Database.php';
if(isset($_GET['id'])){
    $userid = $_GET['id'];
    $fetchisuser = "SELECT * FROM student WHERE stID = $userid";
    $result = $conn->query($fetchisuser);
      if($result->num_rows > 0){
           $row = $result->fetch_assoc();
      }
}
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
            <h1>Update Students</h1>
          <div>
            <input type="text" name="name" value="<?php echo $row['Name'] ?>"/>
            <input type="email" name="email" value="<?php echo $row['Email'] ?>">
            <input type="submit" name="update" value="update"/>
          </div>  
        </form>
     </div>
</body>
</html>

<?php
  if(isset($_POST['update'])){
       $upname = $_POST['name'];
       $upemail = $_POST['email'];
       $updateQuery = "UPDATE student SET Name = '$upname', Email = '$upemail' WHERE stID = $userid ";
        $success=  $conn->query($updateQuery);
        if($success == true){
           echo "<script> alert('Update Succesfully'); </script>";
        } else {
           echo "<script> alert('Failed to update'); </script>";
        }
      $conn->close();  
  }

?>