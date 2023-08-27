
















<?php


include("connection.php");
error_reporting(0);









if (isset($_GET['police_id'])) {  
  $police_id = $_GET['police_id'];  
  $delete = "DELETE FROM register1 WHERE police_id = '$police_id'";  
  $run1 = mysqli_query($conn,$delete);  
  if ($run1) {  
       header('registationView.php');  
  }else{  
       echo "Error: ".mysqli_error($conn);  
  }  
} 

$query = "select * from register1";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows ($data); 















//echo $total;

if($total >0)
{











    
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


  








  








      </br>
<center><b><h2> Display All Registation  Data<h2></b></center></br>
<div class="table-responsive" width="2000px">
<table class ="table table-striped table-bordered" border="3"  width="100%" height="500px">
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
                <th > pass</th>
                <th > Operation</th>
                <th > Operation</th>

               
               
            </tr>





<?php
    while($result = mysqli_fetch_assoc($data))
    {

        echo "<tr>


        <td>".$result['Name']."</td>
        <td>".$result['Father']."</td>
        <td> <form action='profile.php' method='POST'>
        <input type='hidden' name='ID' value='". $result['police_id']."'/>

        <input type='submit' name='". $result['police_id']."' value='". $result['police_id']."'/>
       </form>
       
       
   </td>
        <td>".$result['Aadhar']."</td>
        <td>".$result['Email']."</td>
        <td>".$result['Gender']."</td>
        <td>".$result['DOB']."</td>
        <td>".$result['Status']."</td>
        <td>".$result['Phone']."</td>
        <td>".$result['Address']."</td>
        <td>".$result['State']."</td>
        <td>".$result['District']."</td>
        <td>".$result['Pincode']."</td>
        <td>".$result['Policestation']."</td>
        <td>".$result['Currentpost']."</td>
        <td>".$result['pass']."</td>
<td><a href='registationUpdate.php?id=$result[police_id]'>  <input type='submit'  value='Update' class='update'></a></td>
<td><a href='registationView.php?police_id=".$result['police_id']."' id='btn' onclick='return checkdelete()' ><input type='submit'  value='Delete' class='delete'></a></td> 
    </tr>
    ";
    }
}
else{

    echo"NO ";
}

?> 
</table>



<script>
  function checkdelete(){
    return confirm('Are you want to delete');
  }
</script>



</div>















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