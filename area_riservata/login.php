<?php
  require("assets/connect.php");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $error=''; //Variable to Store error message;

   //Define $user and $pass
     echo $user=$_POST['user'];
echo "<br>";
     echo $pass=$_POST['pass'];
     echo "<br>";
     //sql query to fetch information of reg09isterd user and finds user match.
     $q="SELECT * FROM user ";

     $result = $conn->query($q);

     if ($result->num_rows > 0) {
       echo $result->num_rows;
       echo "<br>";
              // output data of each row
       while($row = $result->fetch_assoc()) {
         echo "<br>";
         echo $pwd=$row["password"];
       }

     if(password_verify($pass, $pwd)){
       echo "ok";
       if($user="admin"){
         header("Location: home/admin/"); // Redirecting to other page
       }else {
         header("Location: home/client/");
       }
     }else {
       header("Location: index.php");
     }
   }

mysqli_close($conn); // Closing connection
?>
