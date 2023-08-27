<?php
$conn=mysqli_connect("localhost","root","","dutydatabase");
if($conn){
   // echo "connection successfully";
}else{
    echo "error";
}
session_start();

$police_id = $_POST['police_id']; 
$pass= $_POST['pass'];
$police_id = stripcslashes($police_id);  
$pass = stripcslashes($pass); 
$police_id = mysqli_real_escape_string($conn, $police_id);
$pass = mysqli_real_escape_string($conn, $pass);  
$sql = "select *from register1 where police_id= '$police_id' and pass = '$pass'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
if($count == 1){  
    $_SESSION['police_id']=$police_id;
    // echo "<h1><center> Login successful </center></h1>";  
header('location:staffpage.php');
}  
else{  

   
    echo '<script>
    alert("Invalid Information");
    window.location.href="login.html";
   
   
    </script>';

    

}        
?>