<?php
$con = mysqli_connect("mydatabase.c6kcayvmhsau.us-east-1.rds.amazonaws.com","admin","zv5yw8KVr5x7vFdQx4AV","STUDENT");

// $rollno = $_POST['rallno'];
// $name = $_POST['nome'];
// if(mysqli_connect_errno()){

//     echo "failed to connect".mysqli_connect_errno();
// }else{
//     echo "Succesful connect";
// }
// $sql = "INSERT INTO  NEW(Rollno, Name)VALUES (8001,'Dinesh')";

// if(mysqli_query($con,$sql)){
//     echo "<br> 
//     Data Inserted";
// }else{
//     echo "<br> EROOR";
// }
//  mysqli_query($con,"INSERT INTO  STUDENT(Rollno,Name,Email,Number) VALUES(1001,'Dinesh','Dinesh@gmai.com','122345488')");

//  echo json_encode array[$rollno,$name];

 $result = mysqli_query($con,"SELECT * FROM NEW");
 while($raw= mysqli_fetch_array($result)){
     $data[] = $raw;

 }

 echo json_encode($data);



?>
