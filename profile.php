<?php
session_start();
//echo "welcome".$_SESSION['police_id'];
$temp=$_SESSION['police_id'];
$conn=mysqli_connect("localhost","root","","dutydatabase");
if($conn){
    
    $query="select * from register1 WHERE police_id=  $temp";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);
////echo $data['name'];


 ?>
    





















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP POLICE </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
  <div class="top-navbar">

    <a>
      <img alt="Police Mail" class="ulimg" data-entity-type="file" data-entity-uuid="" height="100" src="./images/MP12.png" width="99">
      <p>MADHYA PRADESH POLICE </p></br>
        <h5>धन्यः अस्मि भारतत्वेन</h5>
      

    </a>

      
      <div class="icons">
           

<a>
        <img alt="MadhyaPradesh Shasan" class="ulimg" data-entity-type="file" data-entity-uuid="519b0e59-4cbe-4785-bded-d7c54022a1ab"  height ="100"src="./images/Madhya_Pradesh_sashan-home.jpg"width="99">
      </a>
      <a>
        <img alt="Police Mail" class="ulimg" data-entity-type="file" data-entity-uuid="" height="100" src="./images/mp-police-mail.jpg" width="99">
      </a>

      <a>
       
        <img alt="aipdm" class="ulimg" data-entity-type="file" data-entity-uuid="" height="100" src="./images/AIPDM1.png" width="99">
        
      </a>


          <!--
          <a href="register.html"><img src="./images/register.png" alt="" width="18px">Register</a> -->
      </div>
  </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html" id="logo"><span id="span1">P</span>olice <span>Record</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="./images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              </li>
              <!--
              <li class="nav-item">
                <a class="nav-link" href="#">Rules</a>
              </li> 

            -->
              
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
            </ul>
            
          </div>
        </div>
        
      </nav>
    
      


<!-- New Code -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



</br>
    <center><b><h1> Profile of <?php echo $data['Name'] ; ?></h1></b></center> 
</br>

<div class="table-responsive" width="2000px">
<table class ="table table-striped table-bordered"   width="100%" height="50px">
<thead>
<tr>
                <th >Name</th>
                <th >Father</th>
                <th >  Police Id</th>
                <th>Aadhar </th>
                <th >Email</th>
                <th >Gender</th>
                <th >DOB</th>
                <th > Status</th>
                <th > Phone</th>
                <th > Address</th>
                <th > State</th>
                <th > District</th>
                <th> Pincode</th>
                <th > Policestation</th>
                <th > Currentpost</th>
            </tr>
</thead>
     <tr>
        <td><?php echo $data['Name'] ; ?></td>
        <td><?php echo $data['Father']; ?></td>
        <td><?php echo$data['police_id']; ?></td>
        <td> <?php echo$data['Aadhar']; ?></td>
        <td> <?php echo $data['Email']; ?> </td>
        <td> <?php echo $data['Gender']; ?> </td>
        <td> <?php echo$data['DOB']; ?> </td>
        <td> <?php echo $data['Status'];  ?></td>
        <td> <?php echo $data['Phone']; ?></td>
        <td> <?php echo $data['Address']; ?></td>
        <td> <?php echo $data['State'];?></td>
        <td> <?php echo $data['District'];?></td>
        <td> <?php echo $data['Pincode'];?></td>
        <td> <?php echo $data['Policestation']; ?></td>
        <td> <?php echo $data['Currentpost'];  ?></td>
       </tr>
</table>
<?php

}
?>
</div>







 <center><h1>Duty of  <?php echo $data['Name'] ; ?> </h1></center>





 <?php
//session_start();
//echo "welcome".$_SESSION['police_id'];
$temp=$_SESSION['police_id'];
$conn=mysqli_connect("localhost","root","","dutydatabase");
if($conn){
    
$query="select * from dutytable1 WHERE police_id=$temp";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);
////echo $data['name'];
 ?>




<div class="table-responsive" id="sailorTableArea">

    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
 
 <thead>
     <tr>
         <th>Full Name</th>
         <th>Police Id</th>
         <th>Police Station</th>
         <th>Area Of Duty</th>
         <th>Date</th>
         <th>Start Time</th>
         <th>End Time</th>
        
     </tr>
 </thead>


 <tr> <td><?php echo $data['full_name']; ?></td> 
 <td><?php echo  $data['police_id']; ?></td> 
 <td><?php echo  $data['station_name']; ?></td> 
 <td><?php echo  $data['area_of_duty']; ?></td>
 <td><?php echo $data['date']; ?></td>
 <td><?php echo $data['start_time']; ?></td>
 <td><?php echo  $data['end_time']; ?></td>
 
 </tr>

</table>


<?php
}
?>
</div>








<center><h1>Posting </h1></center>


<?php
//session_start();
//echo "welcome".$_SESSION['police_id'];
$temp=$_SESSION['police_id'];
$conn=mysqli_connect("localhost","root","","dutydatabase");
if($conn){
    
    $query="select * from postingtable WHERE police_id=$temp";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);
////echo $data['name'];
 ?>








<div class="table-responsive" id="sailorTableArea">


    <table id="sailorTable" class="table table-striped table-bordered" width="100%">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Police Id</th>
                <th>Police Station</th>
                <th>Area Of Duty</th>
                <th>Date</th>
                <th>Order ID</th>
                <th>Posted By</th>
            </tr>
        </thead>
        <tr> <td><?php echo $data['full_name']; ?></td> 
		<td><?php echo  $data['police_id']; ?></td> 
		<td><?php echo  $data['station_name']; ?></td> 
        <td><?php echo  $data['area']; ?></td>
        <td><?php echo $data['date']; ?></td>
        <td><?php echo $data['start_time']; ?></td>
        <td><?php echo  $data['end_time']; ?></td>
		</tr>
</table>
<?php
}
?>
</div>








  











<center><h1>Transfer </h1></center>


<?php
//session_start();
//echo "welcome".$_SESSION['police_id'];
$temp=$_SESSION['police_id'];
$conn=mysqli_connect("localhost","root","","dutydatabase");
if($conn){
    
    $query="select * from transfertable WHERE police_id=$temp";
$connect=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($connect);
$num=mysqli_num_rows($connect);
////echo $data['name'];
 ?>

<div class="table-responsive" id="sailorTableArea">

<table id="sailorTable" class="table table-striped table-bordered" width="100%">
 
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Police Id</th>
                <th> From Police Station</th>
                <th>To Police station</th>
                <th>Date</th>
                <th>Order ID</th>
                <th>Transfer By</th>
               
            </tr>
        </thead>


        <tr> 
        <td><?php echo $data['full_name']; ?></td> 
		<td><?php echo  $data['police_id']; ?></td> 
		<td><?php echo  $data['from_station_name']; ?></td> 
        <td><?php echo  $data['to_station_name']; ?></td>
        <td><?php echo $data['date']; ?></td>
        <td><?php echo $data['start_time']; ?></td>
        <td><?php echo  $data['end_time']; ?></td>
		
		</tr>

</table>


<?php
}
?>

</div>


<!----view register----->

















    <!-- footer -->
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
  
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Police Record </h4>
                <p>
                  MP Police <br>
                
                </p>
                <strong>Phone number:</strong> 100 <br>
                <strong>Website :</strong> dgpmp@mppolice.gov.in.<br>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Usefull Links</h4>
               <ul>
                <li><a href="index.html">Home</a></li>
               
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                
               </ul>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
  
               <ul>
                <li><a href="#">Duty Details</a></li>
                <li><a href="#">Posting Details</a></li>
                <li><a href="#">Transfer Details</a></
               </ul>
              </div>
  
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social Networks</h4>
                <p>Connect our Social Network .</p>
  
                <div class="socail-links mt-3">
                  <a href="https://twitter.com/mppolicedeptt?lang=en"><i class="fa-brands fa-twitter"></i></a>
                  <a href="https://www.facebook.com/MPPoliceDeptt/"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/mp_police_official/?hl=en"><i class="fa-brands fa-instagram"></i></a>
                  
                  <a href="https://in.linkedin.com/company/mppolice"><i class="fa-brands fa-linkedin"></i></a>
                </div>
              
              </div>
  
            </div>
          </div>
        </div>
        <hr>
        <div class="container py-4">
          <div class="copyright">
            &copy; Copyright <strong><span>Police Record</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            Designed by <a href="#">Force Team</a>
          </div>
        </div>
  
       
      </footer>
      <!-- footer -->