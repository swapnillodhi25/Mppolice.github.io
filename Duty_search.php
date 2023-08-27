<!DOCTYPE html>
<html lang="en">





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




    <div class="container">

      <div class="table table-striped table-bordered" width="100%">
      
      <div class="row"> <div class="card"> <div class="card-header"> <h4 class="card-title">Search Data Posting </h4> 
        <div class ="card-body">
      
      </div>

      <form action="" method="POST">
      <div class="row">
      
      <div class="col-md-6">
      
     
      
      <div class="form-group"> 
        <input type="text" name="get_id" class="form-control" placeholder="Enter Police ID"  required>
       </div>
      </div>
      <div class="col-md-6">
        <button type="submit" name="search_by_id" class="btn btn-primary
       ">Search</button>
   
      </div>
      
      </div>



<?php
       
?>
  </form>

      <!-- New Code -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


  <!--    <div class="table-responsive"></div>
      <table id="sailorTable" class="table table-striped table-bordered" width="100%">
-->
      <div class="table-responsive" id="sailorTableArea">
    <table id="sailorTable" class="table table-striped table-bordered" width="1100px" height="200px">

      <!-- <table class="table table-bordered">-->

        <thead></thead>
          <tr>
            <th scope="col">FULL NAME</th>
            <th scope="col">POLICE_ID</th>
            <th scope="col">STATION NAME</th>
            <th scope="col">AREA</th>
            <th scope="col">DATE</th>
            <th scope="col">START TIME</th>
            <th scope="col">END TIME</th>
          
          </tr>
        </thead>
        <tbody class="table-group-divider">

        <?php


$connection = mysqli_connect("localhost","root","", "dutydatabase"); 
      
if(isset($_POST['search_by_id']))
{
$police_id= $_POST['get_id'];
$query="SELECT * FROM dutytable1 WHERE police_id= '$police_id' ";


$query_run= mysqli_query($connection, $query);

          if(mysqli_num_rows($query_run) > 0)
          {
                while($row = mysqli_fetch_array($query_run))
                 {
        ?>
          <tr>
            <th scope="row"><?php    echo $row['full_name'];    ?></th>
                    <td><?php    echo $row['police_id'];    ?></td>
                    <td><?php    echo $row['station_name'];    ?></td>
                    <td><?php    echo $row['area_of_search'];    ?></td>
                    <td><?php    echo $row['date'];    ?></td>
                    <td><?php    echo $row['start_time'];    ?></td>
                    <td><?php    echo $row['end_time'];    ?></td>
                    
                  
                  
                    
          </tr>
          <?php
                      }
                    }
               else
               {
              ?>
                <tr>
                  <td  colspan="6">
                   No record found
                  </td>

                </tr>
              <?php
               }
              }
             ?>
           </tbody>
       </table>
      </div>
      <?php
      
      ?>
      </div>
    </div>
      </div>
      </div>
    </div>
    
      </div>
      
      </div>
    </div>
            </div>
            </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    -->


  















































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