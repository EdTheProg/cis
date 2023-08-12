<?php
require 'sidebar_functions.php';


?>
<script src="./assets/jquery.js"></script>
<style type="text/css">
  #sidebar {
    position: fixed;
    top: 30px;
    left: 0;
    width: 75px;
    height: 100vh;
    transition: left 0.3s;
    overflow-x: scroll;
  }

  /* Hide scrollbar for Chrome, Safari and Opera */
  #sidebar::-webkit-scrollbar {
    display: none;
  }

  /* Hide scrollbar for IE, Edge and Firefox */
  #sidebar {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
  }

  #sidebar.active {
    left: 0;
    width: 250px;
  }

  #content {
    padding: 20px;
    margin-left: 50px;
    margin-top: 50px;

    transition: margin 0.3s;
  }

  #content.active {
    margin-left: 250px;
  }

  /* Additional styles for the sidebar header (optional) */
  .sidebar-header {
    text-align: center;
    padding-bottom: 1rem;
  }

  /* Additional styles for the sidebar links (optional) */
  #sidebar ul.components li a {
    color: white;
  }

  #sidebar ul.components li a:hover {
    background-color: #444;
  }

  span.navigation-text {
    display: inline-block !important;
  }

  span.navigation-text:not(.active) {
    display: none !important;
  }

  #subli2{
    display: none;
  }
  #subli2.active{
    display: block;
  }
</style>
<script>
  $(document).ready(function() {
    $("#sidebarCollapse").on("click", function() {
      $("#sidebar").toggleClass("active");
      $("#content").toggleClass("active");
      $("#logo-active").toggleClass("active");
      $("#logo-collapsed").toggleClass("active");
      $(".navigation-text").toggleClass("active");
       $("#subli2").toggleClass("active");
    });





  });
  $(document).ready(function() {
    $("#subli").on("click", function() {
      $("#subli2").toggleClass("active");
      
    });

  });


  function loadContent(content) {
    var contentContainer = document.getElementById("contentContainer");


    $.ajax({
      type: "POST",
      url: "/sidebar_functions.php", // Replace with the actual PHP script URL
      data: $(this).serialize(),
      success: function(response) {

       alert(response);
      },
    });


  }
</script>
<div class="wrapper">
  <!-- Sidebar -->
  <nav id="sidebar" class="active" style=" background-color: <?= Company_Main_Color(); ?>!important">

    <div class="sidebar-header">
      <!-- Add a header for the sidebar (optional) -->

    </div>
    <ul class="list-unstyled components p-2 align-items-center">
      <h6 class="navbar-text">Navigation</h6>

      <!-- Add your sidebar links here -->

      <?php
      echo DashboardAccess();
      echo personnel201Access();
      

      ?>



    </ul>

  </nav>
  <!-- Page content -->
  

