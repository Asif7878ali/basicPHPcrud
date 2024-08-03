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
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   $fetchdata = "SELECT * FROM student";
                   $result = $conn->query($fetchdata);
                   if($result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                ?> 
                     <tr>
                         <td> <?php echo $row['Name'] ?> </td>
                         <td> <?php echo $row['Email'] ?> </td>
                         <td> <a href="Delete.php?id=<?php echo $row['stID'] ?>">Delete</a> </td>
                         <td> <a href="Edit.php?id=<?php echo$row['stID'] ?>">Edit</a> </td>
                     </tr>
                <?php          
                     }
                   }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>