<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>

<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Reset Password</h3>
      </div>
    </div>
  </div>
</section>



<section class="login-sec">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-page-design">
      <h4>Enter Your password to reset your password</h4>     
      <div class="loginform">
      <form method ="post" >
        <div class="row">
        <div class="col-md-12">
            <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" required name ="password"  >
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" class="form-control" required name ="cnfrm_password" >
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



