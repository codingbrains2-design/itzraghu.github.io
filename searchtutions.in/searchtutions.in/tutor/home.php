<?php
session_start();
if (!isset($_SESSION['tutor'])) {
  header('Location: 404.html');
}
?>
<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>SearchTutions.in</title>

  <link rel="shortcut icon" href="favicon.png">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/bootstrap-editable.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/sweetalert.css">

  <script type="text/javascript" src="../js/modernizr.custom.32033.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SearchTutions.in</a> 
          </div>
          <div style="color: white;
          padding: 10px 50px 5px 50px;
          float: right;
          font-size: 25px;"><label id="lastLoginTime" class="label label-primary">Last access : </label> &nbsp; <a href="php/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
              <li>
                <br>
                <img class="tutor-image img-responsive center-block"/>
                <br>
              </li>
              <li>
                <a class="active-menu" href="home.php"><i class="fa fa-user fa-3x"></i> Profile</a>
              </li>
              <li>
                <a  href="my-password.php"><i class="fa fa-key fa-3x"></i> Change Password</a>
              </li>
              <li>
                <a  href="all-jobs.php"><i class="fa fa-black-tie fa-3x"></i> View all Jobs</a>
              </li>
              <li>
                <a  href="my-jobs.php"><i class="fa fa-pencil-square-o fa-3x"></i> Saved Jobs</a>
              </li>
            </ul>
          </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
               <h2>Tutor Dashboard</h2>   
               <h5>Welcome <label id="tutorName"></label> , Love to see you back. </h5>
             </div>
           </div>              
           <hr />
           <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="panel-title">
                    Edit Profile
                  </div>
                </div>
                <div class="panel-body">
                  <form id="editProfileForm" class="form-horizontal" role="form">
                    <h3 class="text-info">Basic Info</h3>
                    <hr>
                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="name">Name</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" id="name" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="gender">Gender</label>
                      </div>
                      <div class="col-sm-8">
                        <select name="gender" id="gender" class="form-control">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="email">Email</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" id="email" name="email" disabled class="form-control form-control-static">
                      </div>
                    </div>
                    <h3 class="text-info">Contact Info</h3>
                    <hr>
                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="number">Phone Number</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" id="number" name="number" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4">
                        <label for="address">Address</label>
                      </div>
                      <div class="col-sm-8">
                       <textarea name="address" id="address" cols="30" rows="3" class="form-control"></textarea>
                     </div>
                   </div>
                   <h3 class="text-info">Tutoring Area</h3>
                   <hr>
                   <div class="form-group">
                    <div class="col-sm-4">
                      <label for="city">City</label>
                    </div>
                    <div class="col-sm-8">
                      <select  id="city" name="city" class="form-control">
                        <option value="1"> Lucknow</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="location">Location</label>
                    </div>
                    <div class="col-sm-8">
                      <select class="form-control" id="location" name="location" multiple>
                        <option value=""   disabled> Select Location</option>
                        <option value="12"> Sadar</option>
                        <option value="18"> Ashiana</option>
                        <option value="20"> Aishbagh</option>
                        <option value="21"> Alam Nagar</option>
                        <option value="22"> Alambagh</option>
                        <option value="23"> Alamnagar Road</option>
                        <option value="24"> Aliganj</option>
                        <option value="25"> Ambarganj</option>
                        <option value="26"> Aminabad</option>
                        <option value="27"> Amir Nagar</option>
                        <option value="28"> AP Sabha</option>
                        <option value="29"> Ashiana Kanpur Road</option>
                        <option value="30"> Ashok Marg</option>
                        <option value="31"> Awas Vikas Colony</option>
                        <option value="32"> Badali Khera</option>
                        <option value="33"> Bakshi Ka Talab</option>
                        <option value="34"> Balaganj</option>
                        <option value="35"> Bangla Bazar</option>
                        <option value="36"> Banthra</option>
                        <option value="37"> Bawali</option>
                        <option value="38"> Bhadruk</option>
                        <option value="39"> Bhitauli</option>
                        <option value="40"> Butler Colony</option>
                        <option value="41"> Cantt Road</option>
                        <option value="42"> Chandan Nagar</option>
                        <option value="43"> Charbagh</option>
                        <option value="44"> Chowk</option>
                        <option value="45"> Chaupatiya</option>
                        <option value="46"> Chinhat</option>
                        <option value="47"> Civil Lines</option>
                        <option value="48"> Daliganj</option>
                        <option value="49"> Daulatganj</option>
                        <option value="50"> Dilkusha</option>
                        <option value="51"> Ekta Nagar</option>
                        <option value="52"> Faizabad Road</option>
                        <option value="53"> Faridi Nagar</option>
                        <option value="54"> Fatehganj</option>
                        <option value="55"> Ganesh Ganj</option>
                        <option value="56"> Gautam Buddh Marg</option>
                        <option value="57"> Ghasiyari Mandi</option>
                        <option value="58"> Gokhale Marg</option>
                        <option value="59"> Golaganj</option>
                        <option value="60"> Gomti Nagar</option>
                        <option value="61"> Gosainganj</option>
                        <option value="62"> Gulistan Colony</option>
                        <option value="63"> Haiderganj</option>
                        <option value="64"> Hazratganj</option>
                        <option value="65"> Hussainabad</option>
                        <option value="66"> Hussain Ganj</option>
                        <option value="67"> Indira Nagar</option>
                        <option value="68"> Iradat Nagar</option>
                        <option value="69"> Ismail Ganj</option>
                        <option value="70"> Janakpuri</option>
                        <option value="71"> Janki Puram</option>
                        <option value="72"> Jawahar Nagar</option>
                        <option value="73"> Jopling Road</option>
                        <option value="74"> Kaiser Bagh</option>
                        <option value="75"> Kakori</option>
                        <option value="76"> Kalyanpur</option>
                        <option value="77"> Kanchan Market</option>
                        <option value="78"> Kanpur Road</option>
                        <option value="79"> Kapoorthala</option>
                        <option value="80"> Khadra</option>
                        <option value="81"> Khurram Nagar</option>
                        <option value="82"> Krishna Nagar</option>
                        <option value="83"> Kursi Road</option>
                        <option value="84"> Lal Bagh</option>
                        <option value="85"> Lalkuan</option>
                        <option value="86"> LDA Colony</option>
                        <option value="87"> Limas Bagh</option>
                        <option value="88"> Lucknow H O</option>
                        <option value="89"> M G Road</option>
                        <option value="90"> Mahanagar</option>
                        <option value="91"> Malihabad</option>
                        <option value="92"> Manak Nagar</option>
                        <option value="93"> Mawaiya</option>
                        <option value="94"> Mehndi Ganj</option>
                        <option value="96"> Mohanlalganj</option>
                        <option value="97"> Maulvi Ganj</option>
                        <option value="98"> Mozan Nagar</option>
                        <option value="99"> Mufti Ganj</option>
                        <option value="100"> Munshipuliya</option>
                        <option value="101"> Musa Nagar</option>
                        <option value="102"> Naka Hindola</option>
                        <option value="103"> Nakkhas</option>
                        <option value="104"> Nazirabad</option>
                        <option value="105"> Nirala Nagar</option>
                        <option value="106"> Nishatganj</option>
                        <option value="107"> Pandey Ganj</option>
                        <option value="108"> Parivartan Chauraha</option>
                        <option value="109"> Park Road</option>
                        <option value="110"> Puran Nagar</option>
                        <option value="111"> Raebareli Road</option>
                        <option value="112"> Rajaji Puram</option>
                        <option value="113"> Rakabganj</option>
                        <option value="115"> Rana Pratap Marg</option>
                        <option value="116"> Saadatganj</option>
                        <option value="117"> Sadar Bazar</option>
                        <option value="118"> Sapru Marg</option>
                        <option value="119"> Sarfaraz Gang</option>
                        <option value="120"> Sarojini Naidu Marg</option>
                        <option value="121"> Sarvodaya Nagar</option>
                        <option value="122"> Shahnajaf Road</option>
                        <option value="123"> Sitapur Road</option>
                        <option value="124"> Subhash Nagar</option>
                        <option value="125"> Talkatora</option>
                        <option value="126"> Teli Bagh Bazar</option>
                        <option value="127"> Thakurganj</option>
                        <option value="128"> Tikait Ganj</option>
                        <option value="129"> Tilak Nagar</option>
                        <option value="130"> TP Nagar</option>
                        <option value="131"> Triveni Nagar</option>
                        <option value="132"> Udayganj</option>
                        <option value="133"> Vidhan Sabha Marg</option>
                        <option value="134"> Vikas Nagar</option>
                        <option value="135"> VIP Road</option>
                        <option value="136"> Vipul Khand</option>
                        <option value="137"> Wazirganj</option>
                        <option value="138"> Yaseenganj</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="board">Board</label>
                    </div>
                    <div class="col-sm-8">
                      <select  id="board" name="board" class="form-control" multiple>
                        <option value=""   disabled> Select Board</option>
                        <option value="1"> CBSE</option>
                        <option value="2"> ICSE</option>
                        <option value="3"> UP</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="class">Class</label>
                    </div>
                    <div class="col-sm-8">
                      <select name="class" id="class" class="form-control" multiple>
                        <option value=""   disabled> Select Class</option>
                        <option value="1"> Nursery</option>
                        <option value="2"> Kg</option>
                        <option value="3"> 1st</option>
                        <option value="4"> 2nd</option>
                        <option value="5"> 3rd</option>
                        <option value="6"> 4th</option>
                        <option value="7"> 5th</option>
                        <option value="8"> 6th</option>
                        <option value="9"> 7th</option>
                        <option value="10"> 8th</option>
                        <option value="11"> 9th</option>
                        <option value="12"> 10th</option>
                        <option value="13"> 11th</option>
                        <option value="14"> 12th</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="subject">Subject</label>
                    </div>
                    <div class="col-sm-8">
                      <select id="subject" name="subject" class="form-control" multiple>
                        <option value=""   disabled> Select Subject</option>
                        <option value="1"> English</option>
                        <option value="2"> German</option>
                        <option value="3"> French</option>
                        <option value="4"> Spanish</option>
                        <option value="5"> All Subjects</option>
                        <option value="6"> Dancing</option>
                        <option value="7"> Singing</option>
                        <option value="8"> Painting</option>
                        <option value="9"> Toy Making</option>
                        <option value="10"> Statistics</option>
                        <option value="11"> Hindi</option>
                        <option value="12"> Maths</option>
                        <option value="13"> Physics</option>
                        <option value="14"> Chemistry</option>
                        <option value="15"> Biology</option>
                        <option value="15"> Mathematics</option>
                        <option value="15"> History &emp; Civics</option>
                        <option value="15"> History</option>
                        <option value="15"> Civics</option>
                        <option value="16"> Geography</option>
                        <option value="16"> GK</option>
                        <option value="16"> Computer</option>
                        <option value="16"> Accounts</option>
                        <option value="16"> Business</option>
                        <option value="16"> Economics</option>
                        <option value="16"> Commerce</option>
                      </select>                        
                    </div>
                  </div>
                  <h3 class="text-info">Profile Info</h3>
                  <hr>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="about">About</label>
                    </div>
                    <div class="col-sm-8">
                      <textarea name="about" id="about" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="qualification">Qualification</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" id="qualification" name="qualification" class="form-control">
                    </div>
                  </div>
                  <div id="video_div">
                   <div class="form-group" >
                    <div class="col-sm-4">
                      <label for="video">Enter Link of your Video lecture</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" id="video" name="video" class="form-control">
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-4">
                      <label for="profilePic">Profile Pic</label>
                    </div>
                    <div class="col-sm-8">
                     <input type="file" id="file" name="profilePic" class="form-control">
                     <label for="">Only jpg, jpeg file are allowed.</label>
                     <label class="text-danger">Maximum upload size 100kb.</label>
                   </div>
                 </div>
                 <div class="form-group">
                  <div class="col-sm-4">
                  </div>
                  <div class="col-sm-8">
                    <button type="button" id="editProfileBtn" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /. PAGE INNER  -->
  </div>
  <!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->


<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/bootstrap-editable.min.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/jquery.metisMenu.js"></script>
<script src="../js/sweetalert.min.js"></script>
<script src="js/tutor-info.js"></script>
<!-- <script src="js/tutor-details.js"></script> -->
<script src="js/edit-profile.js"></script>

</body>
</html>
