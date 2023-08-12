<style type="text/css">
  @media screen and (max-width: 980px) {
    .navbar-text {
      display: none !important;
    }

    header {}
  }

  i {
    color: #ffffff !important;
    font-size: 24px !important;
  }

  img {
    display: none;
  }

  img.active {
    display: block !important;
    transition: left 0.3s;
  }
</style>

<header class="fixed-top p-0" style="background-color: <?= Company_Main_Color(); ?>!important;">
  <div class="row align-items-center">
    <div class="col-md-12 d-flex">

      <div class="d-flex" style="width:60%;">
        <div class="logo-area bg-white align-items-center" id="logo">
          <img id="logo-active" class="img-dark bg  p-2 active" alt="Paper " style="height: 45px; width: 250px;" src="/payroll/assets/img/logo_transparent3.png">

          <img id="logo-collapsed" class="img-dark bg p-2 " alt="Paper" style="height: 45px; width: 75px;" src="/payroll/assets/img/logo_icon1.jpg">
        </div>
        <a type="button" id="sidebarCollapse" class="btn">
          <span><i class="fa fa-align-left p-2" style="font-size:25px;"></i></span>
        </a>
        <p class="navbar-text show-on-toggle m-0 p-2"> <?php echo $_SESSION['company']; ?></p>
      </div>

      <div class=" d-flex  justify-content-end" style="width:40%;">
        <p class="navbar-text show-on-toggle " style="float:right;"><?php echo "Welcome -" . $_SESSION['fullname'] . " - " . $_SESSION['hr_type']; ?></p>
        <div class="dropdown show m-2">

          <a type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:24px;">
            <i class="fa-solid fa-ellipsis-vertical mr-2" style="font-size:25px;"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">


            <a class="dropdown-item" href="#">
              <?php
              $tabs = checkCompanyAccess();
              echo $tabs;
              ?>

            </a>
          </div>
        </div>

      </div>


    </div>
  </div>

  </div>


</header>