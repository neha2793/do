<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>


<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Login</h3>
      </div>
    </div>
  </div>
</section>



<section class="login-sec">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-page-design">
      <h4>Login to your account</h4>     
      <?php if (isset($message)) : ?>
   
        <?php echo $message; ?>
       
   
<?php endif; ?>
      <div class="loginform">
      <form method ="post">
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" class="form-control" name ="email" placeholder="Email Address" id="email">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name ="password" class="form-control" placeholder="Password" id="pwd">
        </div>
        <div class="form-group forgotpassword">
          <a href="<?php echo base_url('/forget_password');?>">Forgot password?</a>
        </div>
        <div class="form-group loginbtns">
        <input type="submit" name ="submit"class="btn btn-info" value="LOG IN">
        </div>
      </form>
        <div class="form-group signuplink">
        <p>Don't have an account? <a href="<?php echo base_url('/signup');?>">sign up</a></p>
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






