<?php 
include ('../interface/head.php'); 
include ('../interface/about_us_header.php'); 
?>



  <section class="about_on_new_page">
    <div class="container">
      <div class="about_heading">
        <div class="backgr_text">About</div>
        <h2>About Us</h2>
      </div>
    </div>
  </section>

  <!--Section with image and additional info-->

  <section class="about_us">
    <div class="container">
      <div class="about_img">
        <div><img src="../images/ofice1.jpg" alt="office"></div>
      </div>

              <?php 
               include ('../interface/index_about_us.php'); 
              ?>

    </div>
  </section>

  <!--MEET OUR TEAM-->
<?php 
include ('../interface/team.php'); 
?>
  

  <!--black section under video/testimonials-->
<?php 
include ('../interface/testimonials.php'); 
?>

  <!--Partners/CLients Logos-->
  <?php 
include ('../interface/logos.php'); 
?>

  <!--FOOTER-->
 <?php 
include ('../interface/footer.php'); 
?>