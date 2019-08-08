<?php
 ?>

<!DOCTYPE html>
<html>
<head>

<title>Chat</title>
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
    <img src="img/pablo.jpg" style="width:45%;" class="w3-round"><br><br>
    <h4><b>Firstname Lastname</b></h4>
    <p class="w3-text-grey">Bienvenido ... </p>
  </div>
  <!-- Profile -->
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Edit Profile</a>
    <a href="setting.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw w3-margin-right"></i>SETTING</a>
  </div>
  <div id="view-profile" class="w3-bar-block">
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
        <a href="chat.html"><button class="w3-button w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-envelope w3-text-white w3-hover-text-black"></i><span class="w3-badge w3-right w3-small w3-teal">3</span></button></a>
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
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
      <a style="text-decoration:none;" id="logohosthelper" href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white"><i class="fa fa-street-view w3-margin-right"></i><strong>HostHelper</strong></a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-padding-large w3-hover-white" title="My Account">
        <img src="img/pablo.jpg" class="w3-circle" style="height:35px;width:35px" alt="Pablo">
      </a>
    </div>
     </div>

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="img/pablo.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>Chat</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span>
      <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><button class="w3-button w3-white"><i class="fa fa-map-pin w3-margin-right"></i>Colors</button></a>
      <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-adjust w3-margin-right"></i>Modo-nocturno</button></a>
      <a href="#" class="w3-bar-item w3-button w3-padding w3-text-teal"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-camera w3-margin-right"></i>Photos</button></a>
    </div>
    </div>
  </header>

<!-- Chat  -->
<div class="contenedor">
<h3 class="text-center">Messaging</h3>
<div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"><img src="img/eltro.jpeg" class="w3-circle" style="height:40px;width:40px" alt="img"> </div>
                <div class="chat_ib">
                  <h5>Eltro <span class="chat_date">Aug 8</span></h5>
                  <p>Test, which is a new approach to have all solutions
                    astrology under one roof.</p>
                  </div>
                </div>
              </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"><img src="img/garrett.jpg" class="w3-circle" style="height:40px;width:40px" alt="img"> </div>
                <div class="chat_ib">
                  <h5>Sebastian Gomez<span class="chat_date">Aug 5</span></h5>
                  <p>Test, which is a new approach to have all solutions
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"><img src="img/lucas.jpg" class="w3-circle" style="height:40px;width:40px" alt="img"> </div>
                <div class="chat_ib">
                  <h5>Mauricio Martinez<span class="chat_date">Aug 4</span></h5>
                  <p>Test, which is a new approach to have all solutions
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"><img src="http://www.rockandpop.cl/wp-content/uploads/2018/01/do.jpg" class="w3-circle" style="height:40px;width:40px" alt="img"></div>
                <div class="chat_ib">
                  <h5>Donald trump <span class="chat_date">Aug 5</span></h5>
                  <p>Test, which is a new approach to have all solutions
                    astrology under one roof.</p>
                  </div>
                </div>
              </div>
              <div class="chat_list">
                <div class="chat_people">
                  <div class="chat_img"><img src="https://pbs.twimg.com/profile_images/653558348273569792/joxg8DZD_400x400.png" class="w3-circle" style="height:40px;width:40px" alt="img"> </div>
                  <div class="chat_ib">
                    <h5>Mauricio Macri <span class="chat_date">Aug 5</span></h5>
                    <p>Test, which is a new approach to have all solutions
                      astrology under one roof.</p>
                    </div>
                  </div>
                </div>
                <div class="chat_list">
                  <div class="chat_people">
                    <div class="chat_img"><img src="https://storage.googleapis.com/mmc-elcaribe-bucket/uploads/2018/06/273f644f-espana.jpg" class="w3-circle" style="height:40px;width:40px" alt="img"> </div>
                    <div class="chat_ib">
                      <h5>Pedro Sánchez <span class="chat_date">Aug 2</span></h5>
                      <p>Test, which is a new approach to have all solutions
                        astrology under one roof.</p>
                      </div>
                    </div>
                  </div>
                <div class="chat_list">
                  <div class="chat_people">
                    <div class="chat_img"><img src="https://upload.wikimedia.org/wikipedia/commons/b/b3/Vladimir_Vladimirovich_Putin_%282nd_Presidency%29.jpg" class="w3-circle" style="height:40px;width:40px" alt="img"> </div>
                    <div class="chat_ib">
                      <h5>Vladímir Putin <span class="chat_date">Aug 3</span></h5>
                      <p>Test, which is a new approach to have all solutions
                        astrology under one roof.</p>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">
            <div class="incoming_msg">
              <div class="incoming_msg_img"><img src="img/eltro.jpeg" class="w3-circle" style="height:40px;width:40px" alt="img"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test which is a new approach to have all
                    solutions</p>
                  <span class="time_date"> 11:01 AM    |    August 8</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Test which is a new approach to have all
                  solutions</p>
                <span class="time_date"> 11:03 AM    |    August 8</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"><img src="img/eltro.jpeg" class="w3-circle" style="height:40px;width:40px" alt="img"></div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>Test, which is a new approach to have</p>
                  <span class="time_date"> 11:05 AM    |    August 8</span></div>
              </div>
            </div>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p>Apollo University, Delhi, India Test</p>
                <span class="time_date"> 11:07 AM    |    August 8</span> </div>
            </div>
            <div class="incoming_msg">
              <div class="incoming_msg_img"><img src="img/eltro.jpeg" class="w3-circle" style="height:40px;width:40px" alt="img"></div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>We work directly with our designers and suppliers,
                    and sell direct to you, which means quality, exclusive
                    products, at a price anyone can afford.</p>
                  <span class="time_date"> 11:10 AM    |    August 8</span></div>
              </div>
            </div>
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              <input type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>

        <p class="text-center top_spac w3-margin"> Private Chat of : <a target="_blank" href="perfil.php">------</a></p>

    </div></div>

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
