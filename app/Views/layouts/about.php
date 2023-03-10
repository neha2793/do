<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 
echo view('layouts/header.php'); 
?>


<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d"><?php echo html_entity_decode($response->page->title)?></h3>
      </div>
    </div>
  </div>
</section>



<?php echo html_entity_decode($response->page->body)?>
<!-- <section class="aboutpage-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="aboutpage-video">
          <video autoplay="" loop="" id="video-background" muted="">
            <source src="assets/images/kpvideo.mp4" type="video/mp4">
          </video>
        </div>
      </div>
      <div class="col-md-6">
        <div class="aboutpage-desc">
         <h2>Welcome to the Creative Economy</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="howitwork">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="howitworktop">
          <h2>HOW IT WORKS</h2>
          <h4>2kPAID is a virtual marketplace offering users the opportunity to create their own virtual storefront to sell digital and physical goods.</h4>
          <h4>Options are available to order a fully customized physical storefront as well.  </h4>
          
        </div>
      </div>
    </div>

    <ul class="stepul">
      <li class="hvr-wobble-to-top-right">
        <div class="step-design">
          <div class="step-designimg"><img src="assets/images/step1.png" class="img-fluid" alt=""><span>1</span> </div>
          <h4><span>STEP 1:</span> CHOOSE YOUR COLOR.</h4>
        </div>
      </li>
      <li class="hvr-wobble-to-top-right">
        <div class="step-design">
          <div class="step-designimg"><img src="assets/images/step2.png" class="img-fluid" alt=""><span>2</span> </div>
          <h4><span>STEP 2:</span> ADD YOUR PRODUCT.</h4>
        </div>
      </li>
      <li class="hvr-wobble-to-top-right">
        <div class="step-design">
          <div class="step-designimg"><img src="assets/images/step3.png" class="img-fluid" alt=""><span>3</span> </div>
          <h4><span>STEP 3:</span> ARRANGE YOUR STORE VIEW.</h4>
        </div>
      </li>
      <li class="hvr-wobble-to-top-right">
        <div class="step-design">
          <div class="step-designimg"><img src="assets/images/step55.png" class="img-fluid" alt=""> <span>4</span></div>
          <h4><span>STEP 4:</span> SELL DIGITAL AND PHYSICAL GOODS.</h4>
        </div>
      </li>
      <li class="hvr-wobble-to-top-right">
        <div class="step-design">
         <div class="step-designimg"> <img src="assets/images/step5.png" class="img-fluid" alt=""><span>5</span> </div>
          <h4><span>STEP 5:</span> 2KPAID DROP SHIPS ALL MERCHANDISE DESIGNS.</h4>
        </div>
      </li>
    </ul>

    <div class="row buildbtn">
      <div class="col-md-12">       
        <a href="#" class="btn btn-info hvr-wobble-to-top-right">BUILD</a>
      </div>
    </div>

  </div>
</section>  -->



<?php 

echo view('layouts/footer.php'); ?>


<?= $this->endSection() ?>






