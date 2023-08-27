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

      <!-- Attendance part -->
      <!-- <h1 align="center">Mark Your Attendance</h1>
      <br>
<center>
      <b>Police Id :<input id="nam" type="text" name="police id"></b></center><br> -->
<!-- <div id="al">
  
      <div class="yn">
        
        <input class="i" type="radio" name="radio" id="opt1">
        <label for="opt1" class="label1">
            <span class="y">YES</span>
        </label>
        <input class="i" type="radio" name="radio" id="opt2">
        <label for="opt2" class="label2">
            <span class="y">NO</span>
        </label>
    </div>
  </div>
<style>
  #al{
    margin-left: 50%;
    margin-top: 30px;
    padding: 0;
    background-color: #f5f5ff;
    height: 100px;
    width: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
} 
.yn {
    background-color: white;
    height: 90px;
    width: 260px;
    position: absolute;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 2px 2px 8px -2px #444444;
    /* align-items: center; */
}
.i[type="radio"] {
    display: none;
}
.label1 , .label2 {
    display: block;
    height: 180px;
    width: 130px;
    background: linear-gradient(
                to bottom,
                white 0, white 90px,
                #2c2c2c 90px, #2c2c2c 180px
    );
    position: absolute;
    top: 0;
    color: #2c2c2c;
    transition: 0.5s;
}
.label2 {
    right: 0;
}
.y{
    display: flex;
    height: 90px;
    width: 130px;
    justify-content: center;
    align-items: center;
    font-family: sans-serif;
    font-weight: bold;
    font-size: 22px;
}
.i:checked + label {
    background-position: 0 -90px;
    color: white;
    transition: 0.7s;
}
</style> -->
<!-- <div id="body">
<div class="form-box">
  <div id="bt" class="button-box">
    <div id="btn"></div>
    <button type="button" id="no" value="Yes" class="toggle-btn" onclick="leftClick()">NO</button>
    <button type="button" id="yes" value="Yes" class="toggle-btn" onclick="rightClick()">YES</button>
  </div>
</div>
</div>
<style>
#body {align-items: center;
	background: #dde38a;
}

.button-box {
	width: 220px;
	margin: 35px auto;
	position: relative;
	border-radius: 30px;
	background: #fff
}

.toggle-btn {
	padding: 10px 40px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
	text-align: center;
}

#btn {
	left: 0;
	top: 0;
	position: absolute;
	width: 110px;
	height: 100%;
	background: #e67e22;
	border-radius: 30px;
	transition: .5s;
}</style>
<script>var btn = document.getElementById('btn')

  function leftClick() {
    btn.style.left = '0'
  }
  
  function rightClick() {
    btn.style.left = '110px'
  }</script>

 -->


<div>

       <!-- <button class="view" type="submit" onclick="AddRow()" >View Attendance</button>  -->
      <button class="view" type="submit"   ><a style="text-decoration: none" href="staff_view_duty.php">View Duty</a></button>
      <button class="view" type="submit"   ><a style="text-decoration: none" href="staff_view_posting.php">View Posting</a>  </button>
      <button class="view" type="submit"   ><a style="text-decoration: none" href="staff_view_transfer.php">View Transfer</a></button>
    </div>
<style>
    .view{
      margin-left: 20%;
      font-size: 20px;
      color:darkmagenta;
      border-color:olive;
      background-color: aqua;
      margin-top: 4%;
      margin-bottom: 4%;
      size-adjust: 20px;
  }
  .view:hover{
      background-color: rgb(7, 252, 72);
  flex:10px blue;
      border-color:cyan;
      -webkit-transform: translateY(-10px);
    transform: translateY(-10px);
      box-shadow: 10px 10px 20px gold;
  }
  .view:hover{
     animation: blinker 1.5s linear infinite;
      background-color:lawngreen;
  font-family: sans-serif;}
  @keyframes blinker {
      50% {
          opacity: 0;
      }
  }

</style>
      

<!-- <table id="show">
  <thead>
    <tr><th>
      police id
    </th>
  <th>attendance</th></tr>
  </thead>
</table>


<style>
table{
  margin-top: 50px;
  text-align: center;
  background: #f0eb8a7f;
}
#show th,#show td{
padding: 10px;
}
#btn td input{
  width: 100%;
}
</style>


 <script>
  var list1=[];
  var list2=[];

  var n=1;
  var x=0;
  function AddRow(){
    var AddRown=document.getElementById('show');
    var NewRow = AddRown.insertRow(n);
    list1[x]= document.getElementById("nam").value;
   list2[x]= document.getElementById("yes").value="Yes";

   var cel1= NewRow.insertCell(0);
   var cel2= NewRow.insertCell(1);
   
   cel1.innerHTML=list1[x];
   cel2.innerHTML=list2[x];
   
   n++;
   x++;
   }
</script> -->
 



   
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
  
  
  
  
  
  
  
      <a href="#" class="arrow"><i><img src="./images/arrow.png" alt=""></i></a>
  
  
  
  
  
  
  
  
  
  
  
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
  </body>
  </html>