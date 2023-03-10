<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>

<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Signup</h3>
      </div>
    </div>
  </div>
</section>



<section class="login-sec">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-page-design">
      <h4>Create your account</h4>     
      <?php if (isset($message)) : ?>
   
        <?php echo $message; ?>
       
    
<?php endif; ?>
      <div class="loginform">
           <?php $validation = \Config\Services::validation(); ?>
      <form method ="post" >
        <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>First Name*</label>
          <input type="text" class="form-control" required name ="name" value ="<?php if(isset($_POST['name'])){echo $_POST['name']; }?>" placeholder="First Name" id="fname">
          <?php if($validation->getError('name')) {?>
            <div class='error'>
              <?= $error = $validation->getError('name'); ?>
            </div>
        <?php }?>
        </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Last Name*</label>
          <input type="text" class="form-control"  required name ="lastname" value ="<?php if(isset($_POST['lastname'])){echo $_POST['lastname']; }?>" placeholder="Last Name" id="lname">
          <?php if($validation->getError('lastname')) {?>
            <div class='error'>
              <?= $error = $validation->getError('lastname'); ?>
            </div>
        <?php }?>
        </div>
        </div>
        </div>
        <div class="form-group">
          <label>Email Address*</label>
          <input type="email" class="form-control" required name ="email" value ="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" placeholder="Email Address" id="email">
           <?php if($validation->getError('email')) {?>
            <div class='error'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
        </div>
        <div class="form-group">
          <label>Password*</label>
          <input type="password" class="form-control" required name ="password" placeholder="Password">
           <?php if($validation->getError('password')) {?>
            <div class='error'>
              <?= $error = $validation->getError('password'); ?>
            </div>
        <?php }?>
        </div>
        <div class="form-group">
          <label>Phone Number*</label>
          <input type="text" class="form-control" required name ="phone_number" value ="<?php if(isset($_POST['phone_number'])){echo $_POST['phone_number']; }?>" placeholder="Phone Number">
           <?php if($validation->getError('phone_number')) {?>
            <div class='error'>
              <?= $error = $validation->getError('phone_number'); ?>
            </div>
        <?php }?>
        </div>
        <div class="form-group loginbtns">
        <input type="submit" name ="submit" class="btn btn-info" value="SIGN UP">
        </div>
      </form>
        <div class="form-group signuplink">
           <?php if($_REQUEST['chec'] =1){ ?>
        <p>Already a member? <a href="<?php echo base_url('/login?chec=1');?>">LOG IN</a></p>
      <?php  }else{ ?>
         <p>Already a member? <a href="<?php echo base_url('/login');?>">LOG IN</a></p>
      <?php   } ?>
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



