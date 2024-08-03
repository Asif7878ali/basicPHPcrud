<?php
include 'Database.php';
if(isset($_GET['id'])){
   $userid = $_GET['id'];
   $deleteQuery = "DELETE FROM student WHERE stID = $userid";
   $result = $conn->query($deleteQuery);
   
   if($result ==true){
       echo "<script> alert('Delete Succesfully'); </script>";
       header('Location: Read.php');
   } else{
      echo 'Not Delete';
   }
}
?>