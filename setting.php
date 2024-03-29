<?php
 session_start();
 require('validation_setting.php');
?>

<!DOCTYPE html>
<html>
<head>

<title>Setting</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Normalize y resets -->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/normalize.css">

<!-- NOTE: head enzo -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- NOTE: head Eze -->
<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
<link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="perfil/<?= $_SESSION['perfil'] ?? 'usuario.jpg' ?>" style="width:45%;" class="w3-round" value="<?= $_SESSION['perfil'] ?? 'usuario.jpg' ?> " 

    
    <?php if ($ext != 'jpg'  && $ext !='png') : ?>
    <?php echo 'SELECTED';  ?>
    <?php endif ; ?>
   
    >
    
    
    
    <br><br>
    <h4><b><?= $_SESSION['nombre-edit'] ?? $_SESSION['nombre'] ?? 'Firstname' ?> <?= $_SESSION['apellido-edit'] ?? $_SESSION['apellido'] ?? 'Lastname' ?> </b></h4>
    <p class="w3-text-grey" value="">Edit your profile ... </p>
  </div>
  <!-- Profile -->
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Edit Profile</a>
    <a href="#required" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lock fa-fw w3-margin-right"></i>Required</a>
    <a href="#optional" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-unlock-alt fa-fw w3-margin-right"></i>Optional</a>
    <a href="#optional" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-camera fa-fw w3-margin-right"></i>Photos</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a>
  </div>
  <div class="w3-bar-block">
    <hr>
    <a href="perfil.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>View profile</a>
    <a href="cerrarsession.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-power-off fa-fw w3-margin-right"></i>Sign off</a>
  </div>

</nav>



<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header-perfil  -->
    <div id="contact" class="header-profile">
      <div id="header-iconos" class="w3-bar w3-theme-d2 w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"></a>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-user"></i><span class="w3-badge w3-right w3-small w3-teal">3</span></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:250px">
          <a href="#" class="w3-bar-item w3-button"><img src="img/port04.jpg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><strong class="w3-text-teal">Nicole Rojas </strong><input type="button" class="btn w3-teal w3-hover-black" value="Confirm"> /   <input type="reset" class="btn w3-white w3-hover-gray" value="Delete"></a>
          <a href="#" class="w3-bar-item w3-button"><img src="img/port05.jpg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><strong class="w3-text-teal">Susana Rey </strong><input type="button" class="btn w3-teal w3-hover-black" value="Confirm"> /   <input type="reset" class="btn w3-white w3-hover-gray" value="Delete"></a>
          <a href="#" class="w3-bar-item w3-button"><img src="img/port06.jpg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><strong class="w3-text-teal">Carlos Mendez </strong><input type="button" class="btn w3-teal w3-hover-black" value="Confirm"> /   <input type="reset" class="btn w3-white w3-hover-gray" value="Delete"></a>
        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
        <a href="chat.php"><button class="w3-button w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-envelope w3-text-white w3-hover-text-black"></i><span class="w3-badge w3-right w3-small w3-teal">3</span></button></a>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:325px">
          <a href="#" class="w3-bar-item w3-button"><img src="img/eltro.jpeg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><strong class="w3-text-teal">Eltro:</strong> private message...</a>
          <a href="#" class="w3-bar-item w3-button"><img src="img/garrett.jpg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><strong class="w3-text-teal">Sebastian Gomez:</strong> consult publication...</a>
          <a href="#" class="w3-bar-item w3-button"><img src="img/lucas.jpg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><strong class="w3-text-teal">Mauricio Martinez:</strong> tell me day and time...</a>
        </div>
      </div>
      <div class="w3-dropdown-hover w3-hide-small">
        <button class="w3-button w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-bell"></i><span class="w3-badge w3-right w3-small w3-teal">3</span></button>
        <div class="w3-dropdown-content w3-card-4 w3-bar-block" style="width:335px">
          <a href="#" class="w3-bar-item w3-button"><img src="img/eltro.jpeg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><i class="fa fa-thumbs-up w3-margin-right"></i><strong class="w3-text-teal">Eltro:</strong> likes your post.</a>
          <a href="#" class="w3-bar-item w3-button"><img src="img/eltro.jpeg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><i class="fa fa-share w3-margin-right"></i><strong class="w3-text-teal">Eltro:</strong> has shared your post.</a>
          <a href="#" class="w3-bar-item w3-button"><img src="img/eltro.jpeg" class="w3-circle w3-margin-right" style="height:35px;width:35px;border:1px solid gray;" alt="img"><i class="fa fa-comments w3-margin-right"></i><strong class="w3-text-teal">Eltro:</strong> commented on your post.</a>
        </div>
      </div>
      <a href="index.hp" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
      <a style="text-decoration:none;" id="logohosthelper" href="index.hp" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white"><i class="fa fa-street-view w3-margin-right"></i><strong>HostHelper</strong></a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
        <img src="perfil/<?= $_SESSION['perfil'] ?? 'usuario.jpg' ?>" class="w3-circle" style="height:35px;width:35px" alt="imagen">
      </a>
    </div>
     </div>

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="perfil/<?= $_SESSION['perfil'] ?? 'usuario.jpg' ?>" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Edit profile</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span>
      <a href="#required" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><button class="w3-button w3-white"><i class="fa fa-lock w3-margin-right"></i>Required</button></a>
      <a href="#optional" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-unlock-alt w3-margin-right"></i>Optional</button></a>
      <a href="#optional" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-camera w3-margin-right"></i>Photos</button></a>
    </div>
    </div>
  </header>

  <!-- Middle Column -->

  <div id="setting" >

    <div class="setting">
        <div class="container">
      <h1>Required</h1>
  	<div class="row">
        <!-- edit form column -->
        <div class="col-md-7 personal-info">
          <hr>
          <div class="alert alert-info alert-dismissable">
            <a class="panel-close close" data-dismiss="alert">×</a>
            <i class="fa fa-coffee"></i>
            This is an <strong>.alert</strong>. Use this to show important messages to the user.
          </div>
          <h3>Personal info</h3>

          <form class="form-horizontal" action="setting.php" role="form" method="post">
            <div class="form-group">
              <label class="col-lg-3 control-label">First name:</label>
              <div id="color-input" class="col-lg-8">
                <input class="form-control" type="text" value="" name="firstname">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Last name:</label>
              <div id="color-input" class="col-lg-8">
                <input class="form-control" type="text" value="" name="lastname">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Where do you live?</label>
              <div id="color-input" class="col-lg-8">
                <input class="form-control" type="text" value="place">
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Sex:</label>
              <div class="col-lg-8">
                <div id="color-select" class="ui-select">
                  <select id="user_time_zone" class="form-control" name="sex">
                    <option value="Men">Men</option>
                    <option value="Woman">Woman</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Birthdate:</label>
              <div class="col-lg-3">
                <div id="color-select" class="ui-select">
                  <select class="form-control" name="year" id="year">
                    <option selected="Year" value="Year">Year</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                    <option value="2017">2017</option>
                    <option value="2016">2016</option>
                    <option value="2015">2015</option>
                    <option value="2014">2014</option>
                    <option value="2013">2013</option>
                    <option value="2012">2012</option>
                    <option value="2011">2011</option>
                    <option value="2010">2010</option>
                    <option value="2009">2009</option>
                    <option value="2008">2008</option>
                    <option value="2007">2007</option>
                    <option value="2006">2006</option>
                    <option value="2005">2005</option>
                    <option value="2004">2004</option>
                    <option value="2003">2003</option>
                    <option value="2002">2002</option>
                    <option value="2001">2001</option>
                    <option value="2000">2000</option>
                    <option value="1999">1999</option>
                    <option value="1998">1998</option>
                    <option value="1997">1997</option>
                    <option value="1996">1996</option>
                    <option value="1995">1995</option>
                    <option value="1994">1994</option>
                    <option value="1993">1993</option>
                    <option value="1992">1992</option>
                    <option value="1991">1991</option>
                    <option value="1990">1990</option>
                    <option value="1989">1989</option>
                    <option value="1988">1988</option>
                    <option value="1987">1987</option>
                    <option value="1986">1986</option>
                    <option value="1985">1985</option>
                    <option value="1984">1984</option>
                    <option value="1983">1983</option>
                    <option value="1982">1982</option>
                    <option value="1981">1981</option>
                    <option value="1980">1980</option>
                    <option value="1979">1979</option>
                    <option value="1978">1978</option>
                    <option value="1977">1977</option>
                    <option value="1976">1976</option>
                    <option value="1975">1975</option>
                    <option value="1974">1974</option>
                    <option value="1973">1973</option>
                    <option value="1972">1972</option>
                    <option value="1971">1971</option>
                    <option value="1970">1970</option>
                    <option value="1969">1969</option>
                    <option value="1968">1968</option>
                    <option value="1967">1967</option>
                    <option value="1966">1966</option>
                    <option value="1965">1965</option>
                    <option value="1964">1964</option>
                    <option value="1963">1963</option>
                    <option value="1962">1962</option>
                    <option value="1961">1961</option>
                    <option value="1960">1960</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-2">
                <div id="color-select" class="ui-select">
                  <select id="month" name="month" class="form-control">
                    <option selected="selected" value="month">Month</option>
                    <option value="Januari">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3">
                <div id="color-select" Name="day" class="ui-select">
                  <select class="form-control">
                    <option selected="day" value="day">Day</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Email:</label>
              <div id="color-input" class="col-lg-8">
                <input class="form-control" type="text" value="" name="email">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Password:</label>
              <div id="color-input" class="col-md-8">
                <input class="form-control" type="password" value="" name="password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label">Confirm password:</label>
              <div id="color-input" class="col-md-8">
                <input class="form-control" type="password" value="" name="confirm_password">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3 control-label"></label>
              <div class="col-md-8">
                <input type="submit" class="btn w3-teal w3-hover-black" value="Save Changes">
                <span></span>
                <input type="reset" class="btn w3-white w3-hover-gray" value="Cancel">
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
  <hr>

<!-- NOTE: Optional  -->

    <div class="container">
  <h1>Optional</h1>
<div class="row">
    <!-- edit form column -->
    <div class="col-md-7 personal-info">
      <hr>
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a>
        <i class="fa fa-coffee"></i>
        <?= $resultado ?? 'This is an <strong>alert</strong> Use this to show important messages to the user.' ?>
      </div>
      <h3>Photo</h3>

      <form class="form-horizontal" role="form" enctype="multipart/form-data" action="setting.php" method="post">
        <!-- left column -->
    <div id="color-input" class="col-md-6">
      <div class="text-center">
        <img src="perfil/<?= $_SESSION['perfil'] ?? 'usuario.jpg' ?>" style="width:45%;" class="w3-round"><br>
        <h6>Upload a different photo...</h6>
        <input type="file" class="form-control" name="imagen">
        <input type="hidden" name="formulario" value="">
      </div>
    </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">


            <input type="submit" class="btn w3-teal w3-hover-black" value="Save Changes">
            <span></span>
            <input type="reset" class="btn w3-white w3-hover-gray" value="Cancel">
          </div>
        </div>
      </form>
    </div>
</div>
</div>
<br>
</div>

  <!-- End Middle Column -->

  <!-- Footer -->
  <section id="contact" class="section-padding wow fadeInUp delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center white">
          <h2 class="service-title pad-bt15">Keep in touch with us</h2>
          <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
          <hr class="bottom-line white-bg">
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="loction-info white">
            <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>A99 Adam Street<br>Texas, TX 555072</p>
            <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i>info@baker.com</p>
            <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i>+41 5787 2323</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="contact-form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="col-md-6 padding-right-zero">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit" class="btn btn-primary btn-submit">SEND NOW</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="w3-black w3-center w3-padding-24">Powered by</div>

<!-- End page content -->
</div>

<script>
  // Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else {
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className =
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>


