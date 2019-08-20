<?php

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>

<title>Perfil</title>
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
    <h4><b>firstname lastname</b></h4>
    <p class="w3-text-grey">Bienvenido ... </p>
  </div>
  <!-- Profile -->
  <hr>
  <div id="info-user" class="w3-bar-block">
    <p><i class="fa fa-graduation-cap fa-fw w3-margin-right"></i>Digital House</p>
    <p><i class="fa fa-home fa-fw w3-margin-right"></i>Argentina, Buenos Aires</p>
    <p><i class="fa fa-birthday-cake fa-fw w3-margin-right"></i>June 20, 1995</p>
    <a href="#" class="w3-bar-block w3-text-teal w3-hover-text-black" style="text-decoration:none;"><i class="fa fa-envelope-open fa-fw w3-margin-right"></i>Username@gmail.com</a>
  </div>
  <hr>

  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-text-teal"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Profile</a>
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw w3-margin-right"></i>ABOUT</a>
    <a href="#contactenme" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope fa-fw w3-margin-right"></i>CONTACT</a>
    <a href="index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a>
    <a href="chat.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-comments fa-fw w3-margin-right"></i>CHAT</a>
    <a href="setting.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw w3-margin-right"></i>SETTING</a>
  </div>
  <div id="redes-sociales" class="w3-panel w3-large">
   <a id="red-social" href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity w3-text-teal"></i></a>
   <a id="red-social" href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram w3-hover-opacity w3-text-teal"></i></a>
   <a id="red-social" href="https://www.snapchat.com" target="_blank"><i class="fa fa-snapchat w3-hover-opacity w3-text-teal"></i></a>
   <a id="red-social" href="https://ar.pinterest.com" target="_blank"><i class="fa fa-pinterest-p w3-hover-opacity w3-text-teal"></i></a>
   <a id="red-social" href="https://twitter.com" target="_blank"><i class="fa fa-twitter w3-hover-opacity w3-text-teal"></i></a>
   <a id="red-social" href="https://www.linkedin.com" target="_blank"><i class="fa fa-linkedin w3-hover-opacity w3-text-teal"></i></a>
  </div>

  <!-- Accordion -->
      <hr>
       <div class="w3-card w3-round">
         <div class="w3-white">
           <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i> My Groups</button>
           <div id="Demo1" class="w3-hide w3-container">
             <p>Some text..</p>
           </div>
           <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> My Events</button>
           <div id="Demo2" class="w3-hide w3-container">
             <p>Some other text..</p>
           </div>
           <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Photos</button>
           <div id="Demo3" class="w3-hide w3-container">
          <div class="w3-row-padding">
          <br>
            <div class="w3-half">
              <img src="img/person1.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="img/person4.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="img/person3.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="img/person3.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="img/person4.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
            <div class="w3-half">
              <img src="img/person1.jpg" style="width:100%" class="w3-margin-bottom">
            </div>
          </div>
           </div>
         </div>
       </div>
       <br>
       <div class="w3-bar-block">
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
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="News"><i class="fa fa-globe"></i></a>
      <a style="text-decoration:none;" id="logohosthelper" href="index.php" class="w3-bar-item w3-button w3-padding-large w3-theme-d4 w3-hover-white"><i class="fa fa-street-view w3-margin-right"></i><strong>HostHelper</strong></a>
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
    <h1><b>My Profile</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span>
      <button class="w3-button w3-black">ALL</button>
      <a href="#post" onclick="w3_close()"><button class="w3-button w3-white"><i class="fa fa-photo w3-margin-right"></i>Posts</button></a>
      <a href="#offers" onclick="w3_close()"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-bed w3-margin-right"></i>Travel offers</button>
      <a href="#contactenme" onclick="w3_close()"><button class="w3-button w3-white w3-hide-small"><i class="fa fa-phone w3-margin-right"></i><i class="fa fa-at w3-margin-right"></i>Contact person</button>
    </div>
    </div>
  </header>

  <!-- Middle Column -->

  <div id="publication" class="w3-col m7">

    <section id="post" class="publication">
    <div class="w3-row-padding">
      <div class="w3-col m12">
        <div class="w3-card w3-round w3-white">
          <div class="w3-container w3-padding">
            <h6 class="w3-opacity">What are you thinking ?</h6>
            <p contenteditable="true" class="w3-border w3-padding"></p>
            <button type="button" class="w3-button w3-teal"><i class="fa fa-pencil"></i>Post</button>
          </div>
        </div>
      </div>
    </div>

    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="img/pablo.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">1 min</span>
      <h4>John Doe</h4><br>
      <hr class="w3-clear">
      <p>I offer accommodation in exchange for work, for more information talk to the private.</p>
        <div class="w3-row-padding" style="margin:0 -16px">
          <div class="w3-half">
            <img src="img/person3.jpg" style="width:100%" alt="Northern Lights" class="w3-margin-bottom">
          </div>
          <div class="w3-half">
            <img src="img/casa-campo.jpg" style="width:100%" alt="Nature" class="w3-margin-bottom">
        </div>
      </div>
      <button type="button" class="w3-button w3-teal w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
      <button type="button" class="w3-button w3-gray w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
    </div>

    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="img/lucas.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">16 min</span>
      <h4>Jane Doe</h4><br>
      <hr class="w3-clear">
      <p>I get a very good attention from you Pablo lastname thank you very much see you soon we are in touch.</p>
      <button type="button" class="w3-button w3-teal w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
      <button type="button" class="w3-button w3-gray w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
    </div>

    <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      <img src="img/garrett.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <span class="w3-right w3-opacity">32 min</span>
      <h4>Angie Jane</h4><br>
      <hr class="w3-clear">
      <p>Have you seen this? ... When are we going to clear a little?</p>
      <img src="img/beach-photo.jpeg" style="width:100%" class="w3-margin-bottom">
      <p>Beach located in Brazil, named one of the most beautiful in the world.</p>
      <button type="button" class="w3-button w3-teal w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  Like</button>
      <button type="button" class="w3-button w3-gray w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
    </div>
  </section>

  <!-- End Middle Column -->
</div>
  <!-- First Photo Grid-->
  <div id="detalles-publicaciones" class="w3-row-padding">
    <div  id="offers" class="w3-third w3-container w3-margin-bottom">
      <img src="img/cocina.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div id="detalles-caja" class="w3-container w3-white">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <button class="w3-button w3-teal"><i class="fa fa-search w3-margin-right"></i>Ver mas</button>
       </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/casa.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div id="detalles-caja" class="w3-container w3-white">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <button class="w3-button w3-teal"><i class="fa fa-search w3-margin-right"></i>Ver mas</button>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="img/matrimonial.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div id="detalles-caja" class="w3-container w3-white">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <button class="w3-button w3-teal"><i class="fa fa-search w3-margin-right"></i>Ver mas</button>
      </div>
    </div>
  </div>

  <!-- Second Photo Grid-->
  <div id="detalles-publicaciones" class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/living.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div id="detalles-caja" class="w3-container w3-white">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <button class="w3-button w3-teal"><i class="fa fa-search w3-margin-right"></i>Ver mas</button>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="img/casuli.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div id="detalles-caja" class="w3-container w3-white">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <button class="w3-button w3-teal"><i class="fa fa-search w3-margin-right"></i>Ver mas</button>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="img/dormitorio.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div id="detalles-caja" class="w3-container w3-white">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
        <p><b>Lorem Ipsum</b></p>
        <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
        <button class="w3-button w3-teal"><i class="fa fa-search w3-margin-right"></i>Ver mas</button>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>

  <!-- Images of Me -->
  <div class="w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="img/person3.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="img/port02.jpg" alt="Me" style="width:100%">
    </div>
  </div>

  <div class="w3-container" style="margin-bottom:32px">
    <h4><b>About Me</b></h4>
    <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    <hr>

    <h4>Technical Skills</h4>
    <!-- Progress bars / Skills -->
    <p>Lodging</p>
    <div class="w3-black">
      <div class="w3-container w3-teal w3-padding w3-center" style="width:95%">95%</div>
    </div>
    <p>Exchanges</p>
    <div class="w3-black">
      <div class="w3-container w3-teal w3-padding w3-center" style="width:85%">85%</div>
    </div>
    <p>Votes</p>
    <div class="w3-black">
      <div class="w3-container w3-teal w3-padding w3-center" style="width:80%">80%</div>
    </div>
    <p>
      <button class="w3-button w3-teal w3-padding-large w3-margin-top w3-margin-bottom">
        <i class="fa fa-download w3-margin-right"></i>Download Resume
      </button>
    </p>
    <hr>

    <h4> I also offer rent ...</h4>
    <!-- Pricing Tables -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
          <li class="w3-padding-16">Kitchen</li>
          <li class="w3-padding-16">Bathroom</li>
          <li class="w3-padding-16">A bedroom</li>
          <li class="w3-padding-16">------</li>
          <li class="w3-padding-16">
            <h2>$ 5000</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-teal w3-xlarge w3-padding-32">Pro</li>
          <li class="w3-padding-16">Kitchen</li>
          <li class="w3-padding-16">Bathroom</li>
          <li class="w3-padding-16">2 bedroom</li>
          <li class="w3-padding-16">living</li>
          <li class="w3-padding-16">
            <h2>$ 8000</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>

      <div class="w3-third">
        <ul class="w3-ul w3-border w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
          <li class="w3-padding-16">Kitchen</li>
          <li class="w3-padding-16">2 Bathroom</li>
          <li class="w3-padding-16">3 bedrooms</li>
          <li class="w3-padding-16">living room</li>
          <li class="w3-padding-16">
            <h2>$ 11000</h2>
            <span class="w3-opacity">per month</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-teal w3-padding-large w3-hover-black">Sign Up</button>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Contact Section -->
  <div id="contactenme" class="w3-container w3-grey">
    <h4 ><b>Contact User</b></h4>
    <div class="w3-row-padding w3-center w3-padding-24" style="margin:0 -16px">
      <div class="w3-third w3-black">
        <p><i class="fa fa-envelope w3-xxlarge w3-text-light-grey"></i></p>
        <p>email@email.com</p>
      </div>
      <div class="w3-third w3-teal">
        <p><i class="fa fa-map-marker w3-xxlarge w3-text-light-grey"></i></p>
        <p>Buenos aires, Argentina</p>
      </div>
      <div class="w3-third w3-black">
        <p><i class="fa fa-phone w3-xxlarge w3-text-light-grey"></i></p>
        <p>0348-423-111</p>
      </div>
    </div>
    <hr class="w3-opacity">
    <form action="/action_page.php" target="_blank">
      <div class="w3-section">
        <label>Name</label>
        <input class="w3-input w3-border" type="text" name="Name" required>
      </div>
      <div class="w3-section">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-section">
        <label>Message</label>
        <input class="w3-input w3-border" type="text" name="Message" required>
      </div>
      <button type="submit" class="w3-button w3-black w3-margin-bottom"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
    </form>
  </div>

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
