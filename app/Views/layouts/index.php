<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>

<section class="mainbanner" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 
        <div class="mainbanner-video">               
          <video autoplay loop id="video-background" muted>
          <!-- <video id="video-background" controls> -->
            <source src="assets/images/kpvideo.mp4" type="video/mp4">
          </video>
		  <div class="bannertext"><img src="assets/images/bannertext.png" class="img-fluid" alt=""></div>
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

   <!-- <div class="row buildbtn">
      <div class="col-md-12">       
        <a href="#" class="btn btn-info hvr-wobble-to-top-right">BUILD</a>
      </div>
    </div> -->

  </div>
</section>

<section class="featured-sec">
  <div class="container">
    <div class="row">
      <div id="owl-demo3" class="owl-carousel owl-theme">
                     <div class="item">
                       <div class="row">
                        <div class="col-md-6">
                        <div class="featured-left">
                          <h2>FEATURED</h2>
                          <img src="assets/images/slime.png" class="img-fluid" alt="">
                          <img src="assets/images/seats.png" class="img-fluid" alt="">
                          <p>A Basketball and Art Initiative Directed By 2kPAID, Players and Artists will collaborate by painting two courtside seats to be auctioned after the game. All proceeds go to the athletes and the artists. </p>
                        </div>
                      </div>
                        <div class="col-md-6">
                          <div class="featured-right">
                            <a href ="<?php echo base_url('/container5');?>"><video autoplay loop id="" muted>
                              <source src="assets/images/video1.mp4" type="video/mp4">
                            </video></a>
                            <div class="featured-rightbtn">
                              <a href="<?php echo base_url('/container5');?>" class="btn btn-info btn1 hvr-wobble-to-top-right">Purchase</a>
                               <a href="#" class="btn btn-info hvr-wobble-to-top-right">Learn More</a>
                            </div>
                          </div>    
                        </div>
                       </div>
                    </div>
                      <div class="item">
                       <div class="row">
                        <div class="col-md-6">
                        <div class="featured-left">
                          <img src="assets/images/slime.png" class="img-fluid" alt="">
                          <img src="assets/images/seats.png" class="img-fluid" alt="">
                          <h5>Courtside Seats</h5>
                          <h5>Price</h5>
                          <p>A Basketball and Art Initiative Directed By 2kPAID, Players and Artists will collaborate by painting two courtside seats to be auctioned after the game. All proceeds go to the athletes and the artists. </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="featured-right">
                           <a href ="<?php echo base_url('/container5');?>"><video autoplay loop id="" muted>
                            <source src="assets/images/video1.mp4" type="video/mp4">
                          </video></a>
                          <div class="featured-rightbtn">
                            <a href="<?php echo base_url('/container5');?>" class="btn btn-info btn1 hvr-wobble-to-top-right">Purchase</a>
                             <a href="#" class="btn btn-info hvr-wobble-to-top-right">Learn More</a>
                          </div>
                        </div>    
                      </div>
                       </div>
                    </div>
                     <div class="item">
                       <div class="row">
                        <div class="col-md-6">
                        <div class="featured-left">
                          <h3>BBall Sculpt</h3>
                          <h5>Charlie Apple, 2022 Digital Sculpture</h5>
                          <h5>Price</h5>
                          <p>Charlie is a Colorado based digital artist and music producer. This artwork is made with computer graphics and animation. Charlie was inspired by storytelling and the history of iconic imagery in basketball. </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="featured-right">
                          <!-- <img src="assets/images/slider3.png" alt="" class="img-fluid">    --> 
                           <a href ="<?php echo base_url('/container5');?>"><video autoplay loop id="" muted>
                              <source src="assets/images/video3.mp4" type="video/mp4">
                            </video></a>                 
                          <div class="featured-rightbtn">
                            <a href="<?php echo base_url('/container5');?>" class="btn btn-info btn1 hvr-wobble-to-top-right">Purchase</a>
                             <a href="#" class="btn btn-info hvr-wobble-to-top-right">Learn More</a>
                          </div>
                        </div>    
                      </div>
                       </div>
                    </div>
                     <div class="item">
                       <div class="row">
                        <div class="col-md-6">
                        <div class="featured-left">
                          <h3>TOUR T</h3>
                          <h5>PRICE</h5>
                          <p>Purchasing this T Shirt will give you access to x y and z.  </p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="featured-right">
                           <a href ="<?php echo base_url('/container5');?>"><img src="assets/images/slider5.png" alt="" class="img-fluid"> </a>   
                          <div class="featured-rightbtn">
                            <a href="<?php echo base_url('/container5');?>" class="btn btn-info btn1 hvr-wobble-to-top-right">Purchase</a>
                             <a href="#" class="btn btn-info hvr-wobble-to-top-right">Learn More</a>
                          </div>
                        </div>    
                      </div>
                       </div>
                    </div>
                    
            </div>
      
    </div>
  </div>
</section>


<section class="shopby" id="shopby">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="heading-sec">
        <h2><span class="headingdisply"><span class="heading-color">Shop</span> by container</span></h2>
      </div>
    </div>
   </div>
   <div class="row shopbybg" style="background: url('assets/images/bgr.png');">
     <div class="col-md-6">
     
          <div class="shopby-con">
       <a href =<?php echo base_url('/container1');?>>   <img src="assets/images/newcontainer1.png" alt="" class="img-fluid"> </a>
         <img src="assets/images/asof.png" alt="" class="img-fluid asof">
         <ul>
          
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime1.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime2.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime3.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime4.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime5.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime6.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime7.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime8.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime9.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime10.png" alt="" class="img-fluid"> </a></li>
           <li><a href="<?php echo base_url('/container1');?>"><img src="assets/images/slime11.png" alt="" class="img-fluid"> </a></li>
         </ul>  
      </div>         
     </div>
     <div class="col-md-6">
      <div class="shopby-con">
<a href ="<?php echo base_url('/container2');?>">
         <img src="assets/images/newcontainer2.png" alt="" class="img-fluid"> 
    <div class="shopby-convideobg"> 
      <div class="shopby-convideobgin">  
         <video autoplay loop id="video-background" muted>
          <source src="assets/images/kpvideo2.mp4" type="video/mp4">
        </video>
      </div>
    </div>
</a>
      </div>          
     </div>
     <div class="col-md-6">
      <div class="shopby-con">
        <a href ="<?php echo base_url('/container3');?>">
         <img src="assets/images/newcontainer3.png" alt="" class="img-fluid"> 
</a>  
      </div>          
     </div>
     <div class="col-md-6">
      <div class="shopby-con">
        <a href ="<?php echo base_url('/container4');?>">
         <img src="assets/images/newcontainer4.png" alt="" class="img-fluid">  
</a> 
      </div>          
     </div>
    </div>
  </div>
</section>




<section class="creatorsbanner" style="background: url('assets/images/nftbg.jpg');">
  <div class="container">
    <div class="row"> 
    <div class="col-md-12">
      <div class="heading-sec">
        <h2><span class="headingdisply"><span class="heading-color">Top NFTs </span>Creators </span></h2>
      </div>
    </div>
   </div>
    <div class="row">
    <div class="col-md-12">
      <div id="owl-demo5" class="owl-carousel owl-theme">
 <?php foreach($creator->data as $creat){?>
      <div class="item">
        <div class="top-creators">
          <a href="<?php echo base_url();?>/profile/?id=<?php echo $creat->user_id?>">
              <div class="top-creatorsimg"><img src="<?php echo $creat->profile?>" class="img-fluid" alt=""></div>
              <h3><?php echo $creat->full_name?></h3>
              <div class="top-creatorsinfo"><span class="volume"><?php echo $creat->volume?> MATIC</span><span class="followers"><i class="fa fa-user" aria-hidden="true"></i>4k</span></div>
          </a>
        </div>
      </div>
<?php } ?>
      </div>
  </div>
      
    </div>
  </div>
</section>

<section class="slime-sec">
  <div class="container">
   <div class="row"> 
    <div class="col-md-12">
      <h4>Slime Tour</h4>
      <?php //print_r($slimetour);?>
      <div class="heading-sec">
        <h2><span class="headingdisply"><span class="heading-color">CHOOSE </span>TOUR DATE</span></h2>
        
      </div>
    </div>
   </div>
   <div class="row">
       <?php foreach($slimetour->data as $tour){
          //print_r($tour);
      ?>
     <div class="col-md-3">
      <div class="slime-card">
         <div class="slime-img">
            <img src="<?php echo $tour->image; ?>" alt="" class="img-fluid">
         </div>
         <h3><span><?php echo $tour->name; ?>, <?php echo $tour->location; ?>:</span> <?php echo ($tour->date); ?></h3>
         <a href="#" class="btn btn-info hvr-wobble-to-top-right">Purchase</a>
      </div>
     </div>
     <?php } ?>
   </div>
  </div>
</section>


<section id="bannershop" class="bannershop" style="background: url('assets/images/BG4.jpg');">
  <div class="container">
    <div class="row">
       <div class="col-md-12">
        <div class="bannershop-btn">
          <h2><span>Special</span> offer</h2>
          <p>Limited Time</p>
          <a href="#shopby" class="btn btn-info hvr-wobble-to-top-right">Shop now</a>
        </div>        
       </div>
    </div>
  </div>
</section>


<section class="landing-sec">
  <div class="container">
   <div class="row"> 
    <div class="col-md-12">
      <div class="heading-sec">
        <h2><span class="headingdisply"><span class="heading-color">Trending </span> Merchandise</span></h2>
      </div>
    </div>
   </div>
   
   
   <div id="owl-demo4" class="owl-carousel owl-theme">
       <?php foreach($trending_merchnadise->trending_merchandise as $merchandise){ ?>
     <div class="item">
      <div class="product-card hvr-wobble-to-top-right">
       <div class="product-img">
        <a href="#"><img src="<?php echo $merchandise->image ?>" alt="" class="img-fluid"></a>
      <!--  <span class="productrating">4.5</span>  -->
       </div>
       <div class="product-desc">
        <h4><span>$</span> <?php echo $merchandise->price; ?></h4>
        <p><?php echo $merchandise->description; ?></p>
       </div>
      </div>
    </div>
   <?php } ?>
   </div>
   
   
   
  <!-- <div class="row">
    <div class="col-md-12">
      <div class="product-viewmore">
      <a href="#" class="btn btn-info hvr-wobble-to-top-right">view more</a>
     </div>
    </div>
   </div> -->
  </div>
</section>


<section class="clients-sec" style="background: url('assets/images/dot-dark.jpg');">
  <div class="container">
    <div class="row"> 
    <div class="col-md-12">
      <div class="heading-sec">
        <h2><span class="headingdisply"><span class="heading-color">What</span> Clients Say</span></h2>
      </div>
    </div>
   </div>
    <div class="row">
     <div class="col-md-12">
      <div id="owl-demo2" class="owl-carousel owl-theme">
                    
                     <div class="item">
                        <div class="ourlawyers-card">
                          <div class="ourlawyers-img">
                            <img src="assets/images/clients2.png" alt="" class="img-fluid">
                            <h4>Emma Watson</h4>
                             <h6>Lorem ipsum dolor</h6> 
                          </div>
                          <div class="ourlawyers-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                          </div>
                         </div>
                    </div>
                    <div class="item">
                        <div class="ourlawyers-card">
                          <div class="ourlawyers-img">
                            <img src="assets/images/clients2.png" alt="" class="img-fluid">
                            <h4>Anne Hathaway</h4>
                             <h6>Lorem ipsum dolor</h6> 
                          </div>
                          <div class="ourlawyers-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                          </div>
                         </div>
                    </div>
                    <div class="item">
                        <div class="ourlawyers-card">
                          <div class="ourlawyers-img">
                            <img src="assets/images/clients2.png" alt="" class="img-fluid">
                            <h4>Gal Gadot</h4>
                            <h6>Lorem ipsum dolor</h6> 
                          </div>
                          <div class="ourlawyers-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</p>
                          </div>
                         </div>
                    </div>
            </div> 
     </div>
    </div>
  </div>
</section>
<?php 

echo view('layouts/footer.php'); ?>
<?= $this->endSection() ?>