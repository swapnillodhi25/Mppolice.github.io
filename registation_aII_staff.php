
<?php include("connection.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MP POLICE</title>
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
                <a class="nav-link" href="r.php">Rules</a>
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
    <!-- navbar -->
    





    
   <div class="container" id="register">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1  ">
        </br><h1 class="text-center">Register</h1>
            
            <img alt="aipdm" class="ulimg" data-entity-type="file" data-entity-uuid="" height="500" src="./images/young-policeman-uniform-writing-clipboard-caucasian-traffic-blue-fine-bill-traffic-penalty-concept-traffic-97972885-removebg-preview.png" width="400">
          
            
            
        </div>
        <div class="col-md-7 py-3 py-md-0" id="side11" >





          <form action="#" method="post">
          <form>
          </br></br>
          <h1 class="text-center">Create Account</h1></br>
          <h1 class="text">persnol Information</h1>
            <div class="form-group input-group">
              <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-user"></i> </span>
               </div>
               
               
                  <input name="Name" class="form-control" placeholder="Name" type="text"required>
               
              </div> <!-- form-group// -->


            <div><!-- form-group//-->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                 </div>
                    <input name="Father" class="form-control" placeholder="Father Name" type="text"required>
                </div><!-- form-group//-->
                    
                </div> 
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                        <input name="police_id" class="form-control" placeholder="Police ID" type="text"required>
               </div> <!-- form-group// -->
        
               <div class="form-group input-group">
                   <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                   </div>
                    <input name="Aadhar" class="form-control" placeholder="Aadhar Number" type="number"required>
                </div> <!-- form-group// -->

               

              
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
               </div>
                  <input name="Email" class="form-control" placeholder="Email address" type="email"required>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                  </div>
                  <select  name="Gender"  class="form-control">
                    <option   selected="">Gender</option>
                  <option>Male</option>
                  <option>Female</option>
                  <option>other</option>
                  
                  </select>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <div>
                        Date Of Birth:<input name="DOB" type="date">
                    </div>
                </div> <!-- form-group// -->
                <br>
               

                <div class="form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <select  name="Status"  class="form-control">
                  <option   selected="">Status</option>
                <option>Married</option>
                <option>Unmarried</option>
                <option>other</option>
                
                </select>
            
 
            
              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
              </div>
              <select class="custom-select" style="max-width: 120px;">
                  <option selected="">+91</option>
                  
                  
              </select>
                <input name="Phone" maxlength="10" class="form-control" placeholder="Phone number" type="number" required>

            <div class="form-group input-group">
                    <div class="input-group-prepend">
                     <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                    </div>
                     <input name="Address" class="form-control" placeholder=" Address" type="text"required>
            </div> <!-- form-group// -->
            <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-building"></i> </span>
              </div>
              <select  name= "State" class="form-control">
                <option   selected="">State</option>
                
                <option>Madhya Pradesh</option>
             
                </select>
                

              </div> <!-- form-group// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-building"></i> </span>
              </div>
              <select name="District" class="form-control">
                <option  selected="">District</option>
              <option>Alirajpur</option>
              <option>Anuppur</option>
              <option>Ashokanagar</option>
              <option>Balaghat</option>
              <option>Barwan</option>
              <option>Betul</option>
              <option>Bhind</option>
              <option>Bhopal</option>
              <option>Burhanpur</option>
              <option>Chhatarpur</option>
              <option>chhindwara</option>
              <option>Damoh</option>
              <option>Datia</option>
              <option>Dewas</option>
              <option>Dhar</option>
              <option>Dindori</option>
              <option>Dhar</option>
              <option>East Nimar</option>
              <option>Guna</option>
              <option>Gwalior</option>
              <option>Harda</option>
              <option>Hosangabad</option>
              <option>Indore</option>
              <option>Jabalpure</option>
              <option>Jhabua</option>
              <option>Katni</option>
              <option>Mandla</option>
              <option>Mandsaur</option>
              <option>Morena</option>
              <option>Narsinghpur</option>
              <option>Neemuch</option>
              <option>Niwadi</option>
              <option>Panna</option>
              <option>Raisen</option>
              <option>Rajgarh</option>
              <option>Ratlam</option>
              <option>Rewa</option>
              <option>Sagar</option>
              <option>Satna</option>
              <option>Sehore</option>
              <option>Seoni</option>
              <option>Shahdol</option>
              <option>Shajapur</option>
              <option>Sheopur</option>
              <option>Shivpuri</option>
              <option>Sidhi</option>
              <option>Singrauli</option>
              <option>Tikamgarh</option>
              <option>Ujjain</option>
              <option>Umaria</option>
              <option>Vidisha</option>
              <option>West Nimar</option>
              </select>

            <div class="form-group input-group">
                <div class="input-group-prepend">
                 <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                 <input name="Pincode" class="form-control" placeholder="Pincode" type="number"required>
            </div> <!-- form-group// -->





        <div class="form-group input-group">
            <div class="input-group-prepend">
            
            </div>

        </div> <!-- form-group// -->
        <form>
        </br></br>
        <h1 class="text">Status</h1>
          <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-building"></i> </span>
             </div>
                <input name="Policestation" class="form-control" placeholder="Police Station" type="text"required>
             
            </div> <!-- form-group// -->




            </div> <!-- form-group end.// -->
              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
              </div>
                  <input name="Currentpost"maxlength="10"class="form-control" placeholder="Current Post" type="text"required>
              </div></div> <!-- form-group// -->



              
            
            </div> <!-- form-group// -->


              <div class="form-group input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
              </div>
                  <input name="pass" placeholder="Create password" type="password" required/>
              </div> <!-- form-group// -->  
            </br> 
            <center><input class="col-md-7 py-3 py-md-0" name="submit" type="submit" value= " Submit " style="height:35px;" width="5px"/> </center>
          </form>                                  
           <!---   <div class="form-group" >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                  <button type="submit" class="btn btn-primary btn-block" >  Create Account  </button> 
              </div> 
            -->
              <!-- form-group// -->   
              
              </br>
                                                  
          </form>






























    </div>
   </div>
   </div>







    <!-- footer -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>Police Record </h3>
              <p>
                MP Police <br>
              
              </p>
              <strong>Phone number:</strong> 100 <br>
              <strong>Website :</strong> dgpmp@mppolice.gov.in.<br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Usefull Links</h4>
             <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Rules</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact Us</a></li>
              
             </ul>
            </div>



           

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>

             <ul>
              <li><a href="#">Attendence</a></li>
              <li><a href="#">Posting</a></li>
              <li><a href="#">Transfer</a></li>
              <li><a href="#">Mobile Phone</a></li>
              <li><a href="#">Police Record</a></li>
             </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>Connect our Social Network .</p>

              <div class="socail-links mt-3">
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
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





    <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>







<?php

if($_POST['submit'])
{

    $Name = $_POST['Name'];
	  $Father = $_POST['Father'];
    $police_id = $_POST['police_id'];
    $Aadhar = $_POST['Aadhar'];	
	  $Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
	  $DOB = $_POST['DOB'];
 
    $Status = $_POST['Status'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];
    $State = $_POST['State'];
    $District = $_POST['District'];
    $Pincode = $_POST['Pincode'];
    $Policestation = $_POST['Policestation'];
    $Currentpost = $_POST['Currentpost'];
    $pass = $_POST['pass'];

    $query=" INSERT INTO register1 values ( '$Name', '$Father', '$police_id', '$Aadhar', '$Email', '$Gender', '$DOB', ' $Status', '$Phone', '$Address', '$State', '$District', '$Pincode',  '$Policestation', '$Currentpost', '$pass')";
    $query =mysqli_query($conn,$query);
    if($data){


      echo "DATA INSERT";
    }
    else{

      echo"Failed";
    }
}



?>
