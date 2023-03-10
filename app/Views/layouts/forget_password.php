<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>

<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Forgot Password</h3>
      </div>
    </div>
  </div>
</section>



<section class="login-sec">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-page-design">
      <h4>Enter Your email to reset your password</h4>   
      <?php if (isset($message)) : ?>
   
   <?php echo $message; ?>
  

<?php endif; ?>  
      <div class="loginform">
      <form method ="post" >
        <div class="row">
        <div class="col-md-12">
            <div class="form-group">
          <label>Email Address</label>
          <input type="email" class="form-control" required name ="email" placeholder="Email Address" id="email">
        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group loginbtns">
        <input type="submit" name ="submit"class="btn btn-info" value="Submit">
        </div>
        </div>
        </div>
      </form>
      <!--  <div class="form-group signuplink">
        <p>Already a member? <a href="<?php echo base_url('/login');?>">LOG IN</a></p>
        </div> -->
      </div>
      </div>
      </div>
    </div>
  </div>
</section>





<?php 

echo view('layouts/footer.php'); ?>


<?= $this->endSection() ?>



