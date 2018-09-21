<!DOCTYPE html>
<html>
<title>มิตรไทคุรุ</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/w3-theme-black.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/font/font-awesome.min.css">
<body id="myPage">

  <!-- Sidebar on click -->
  <!-- <nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
      <i class="fa fa-remove"></i>
    </a>
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
    <a href="#" class="w3-bar-item w3-button">Link 4</a>
    <a href="#" class="w3-bar-item w3-button">Link 5</a>
  </nav> -->

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-theme-d2 w3-left-align">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
      <a href="<?php echo base_url() ?>Home" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>หน้าแรก</a>
      <a href="<?php echo base_url() ?>Home/team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">วิทยากร</a>
      <a href="<?php echo base_url() ?>Home/work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">เกี่ยวกับมิตรไทคุรุ</a>
      <a href="<?php echo base_url() ?>Home/course" class="w3-bar-item w3-button w3-hide-small w3-hover-white">หลักสูตร</a>
      <a href="<?php echo base_url() ?>Home/contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">ติดต่อเรา</a>
      <!-- <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
      <a href="#" class="w3-bar-item w3-button">Link</a>
    </div>
  </div> -->
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
  <a href="<?php echo base_url() ?>Home/team" class="w3-bar-item w3-button">วิทยากร</a>
  <a href="<?php echo base_url() ?>Home/work" class="w3-bar-item w3-button">เกี่ยวกับมิตรไทคุรุ</a>
  <a href="<?php echo base_url() ?>Home/course" class="w3-bar-item w3-button">หลักสูตร</a>
  <a href="<?php echo base_url() ?>Home/contact" class="w3-bar-item w3-button">ติดต่อเรา</a>
  <!-- <a href="#" class="w3-bar-item w3-button">ค้นหา</a> -->
</div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="<?php echo base_url() ?>assets/img/sailboat.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <!-- <div class="w3-container w3-display-bottomleft w3-margin-bottom">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LEARN W3.CSS</button>
  </div> -->
</div>

<!-- Modal -->
<!-- <div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container">
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div> -->
