<?php
require __DIR__ . '/../form/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <script src="https://kit.fontawesome.com/cffcdfed5c.js" crossorigin="anonymous"></script>
 <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
  rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
  rel="stylesheet">
 <link rel="stylesheet" href="../css/style.css">
 <link rel="stylesheet" href="../css/normalize.css">
 <title>MALEX</title>
 <script>
  function myFunction() {
    var x = document.getElementById("mMenu");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
</script>
</head>

<?php 

include ('../interface/header.php');
?>


  <!--INTRO-->

 <section class="intro">
  <div class="container"> 
    <div class="intro_box">
      <h1>Business Consulting Agency</h1>
      <p class="p_white">We are digital business consulting agency that helps companiesincrease better incomes and help with
        branding for faster business growing.</p>
    </div>
    <div class="black_button"><a href="#">Learn More</a>
    </div>

<!--SLIDER? AND CHANGE LANGUAGE-->

<div class="narrow_language flex-container">
  <div class="narrow"><img src="../images/Arrow_down.png" alt="narrow"></div>
  <div class="language"> <a href="#">EN</a> </div>
  </div>
  </div>
 </section>

</div>
  <!--3 boxes strategic planning/ Marketing / Financial-->

 <section class="what_we_offer">
   <div class="container ">
     <div class="what_we_offer_content flex-container">

     <!--Strategic Box-->

      <div class="what_we_offer_box">
        <img src="../images/horse.png" alt="horse">
        <h4>Strategic Planning</h4>
        <p class="p_grey">Strategic planning is the process of documenting and establishing a direction of your business</p>
        <div class="arrow">
         <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span class="arrow_text">Read More</span></a>
        </div>
      </div>

    <!--Consulting/Marketing Box-->

      <div class="what_we_offer_box">
        <img src="../images/marketing.png" alt="arrow">
        <h4>Consulting & Marketing</h4>
        <p class="p_grey">A marketing consultant is an advisor who works with companies to create and implement marketing strategies.</p>
        <div class="arrow">
          <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span class="arrow_text">Read More</span></a>
        </div>
      </div>

    <!--Strategic Box-->

      <div class="what_we_offer_box">
        <img src="../images/document.png" alt="arrow">
        <h4>Financial</h4>
        <p class="p_grey">Financial services is a broad range of more specific activities such as banking, investing, and insurance.</p>
        <div class="arrow">
          <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span class="arrow_text">Read More</span></a>
        </div>
      </div>

      </div>
   </div>
 </section>

 <!--ABOUT US-->

 <section class="about_us">
 <div class="container">
   
<!--ABOUT US perkelta i atskira puslapi-->
            <?php 
            include ('../interface/index_about_us.php'); 
            ?>

   <div class="benefits_img">
     <div><img src="../images/ofice1.jpg" alt="office"></div>
   </div>

<!--after image section about how it works-->
              <?php 
              include ('../interface/how_it_works.php'); 
              ?>


<!--MEET OUR TEAM-->

              <?php 
              include ('../interface/team.php'); 
              ?>


<!--PLANS-->

              <?php 
              include ('../interface/plans.php'); 
              ?>

<!--Partners/CLients Logos-->

              <?php 
              include ('../interface/logos.php'); 
              ?>


<!--VIDEOs-->
<section class="video_section">
<div class="container">
  <video width="100" autoplay muted loop>
    <source src="../images/video.mp4" type="video/mp4">
  </video>
  </div>
</section>

<!--black section under video/testimonials-->
              <?php 
              include ('../interface/testimonials.php'); 
              ?>


<!--New Articles/blog posts-->

<section class="articles">
  <div class="container">
    <div class="articles_heading">
      <div class="backgr_text">News</div>
      <p class="p_blue">New Articles</p>
      <h2>Check our latest blog posts</h2>
    </div>

    <div class="articles_content flex-container">

      <!--Article 1-->
      <div class="article">
        <img src="../images/buss_ideas.jpg" alt="Buseiness Ideas">
        <h5>5 Amazing and Easy Tips for Sustainable Business Success</h5>
        <p class="p_grey">At vero eos et accusamus et iusto odio dignissimos ducims…</p>
        <div class="arrow">
          <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span class="arrow_text">Read More</span></a>
        </div>
      </div>
      <!--Article 2-->
        <div class="article">
          <img src="../images/buss_tips.jpg" alt="Buseiness Ideas">
          <h5>Assessing the Maturity of Your Data Management in Industry</h5>
          <p class="p_grey">At vero eos et accusamus et iusto odio dignissimos ducims…</p>
          <div class="arrow">
            <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span class="arrow_text">Read More</span></a>
          </div>
        </div>

        <!--Article 3-->
        <div class="article">
          <img src="../images/be_the_best.jpg" alt="Buseiness Ideas">
          <h5>How to Build Your Sustainable Susiness Strategy</h5>
          <p class="p_grey">At vero eos et accusamus et iusto odio dignissimos ducims…</p>
          <div class="arrow">
            <a href="#"><i class="fas fa-long-arrow-alt-right"></i><span class="arrow_text">Read More</span></a>
          </div>
        </div>
                
    </div>
    <!--button -->
    <div class="black_button"> <a href="#">View All Posts</a></div>
   </div> 
</section>

<!--Contacts-->
<section class="contacts">
  <div class="container">
    <div class="contacts_heading">
      <div class="backgr_text">Contacts</div>
      <p class="p_blue">Contacts</p>
      <h2>Any Questions? Contact us Freely and We'll Get Back to You Shortly</h2>
    </div>

    <div class="contacts_content flex-container">
      <!--Location box-->
      <div class="contact_box">
        <a href="https://www.google.com/maps/@54.7688272,25.2388331,14z" target="_blank"><i class="far fa-map"></i></a>
        
        <h4>Location</h4>
        <p class="p_grey">Location: 575 Creserent Avenue Kazkur pasaulyje LT-12365</p>
      </div>
      <!--Phone box-->
      <div class="contact_box">
        <a href="tel:+43253312523"><i class="fas fa-mobile-alt"></i></a>
        
        <h4>Phone no.</h4>
       
          <div>Mobile: <a href="tel:+43253312523">+43253312523</a></div>
         <div>Fax: <a href="tel:+432533125">+432533125</a></div>        
        
      </div>
      <!--Email box-->
      <div class="contact_box">
        <a href="mailto:jodko.regina@gmail.com"><i class="far fa-paper-plane"></i></a>
        <h4>E-mail</h4>
          <div>Email: <a href="mailto:jodko.regina@gmail.com">info@malex.dk</a></div>
          <div>CEO Email: <a href="mailto:jodko.regina@gmail.com">ceo@malex.dk</a></div>
      </div>
    </div>
  </div>
</section>

<!--Contact form-->
<?php 
include ('../interface/contact_form.php'); 
?>

<!--FOOTER-->
<?php 
 include ('../interface/footer.php');
?>