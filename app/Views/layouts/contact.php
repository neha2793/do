<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>



<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Contact Us</h3>
      </div>
    </div>
  </div>
</section>




<section class="contact-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
     
        <div class="contact-form">
             <?php if (isset($message)) : ?>
   
   <?php echo $message; ?>
  

<?php endif; ?>
  <?php $validation = \Config\Services::validation(); ?>
             <form method ="POST">
                 
                 <div class="row">
                     <div class="col-lg-6">
                         <div class="form-group">
                           <label>Name*</label>
                           <input type="text" class="form-control" value ="<?php if(isset($_POST['name'])){echo $_POST['name']; }?>" required id="name" name ="name" placeholder="Name">
                            <?php if($validation->getError('name')) {?>
            <div class='error'>
              <?= $error = $validation->getError('name'); ?>
            </div>
        <?php }?>
                           </div>
                      </div>
                      <div class="col-lg-6">
                           <div class="form-group">
                              <label>Email Address*</label>
                             <input type="email" class="form-control" required value ="<?php if(isset($_POST['email'])){echo $_POST['email']; }?>" name ="email" id="email" placeholder="Email Address">
                              <?php if($validation->getError('email')) {?>
            <div class='error'>
              <?= $error = $validation->getError('email'); ?>
            </div>
        <?php }?>
                            </div>
                      </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-6">
                         <div class="form-group">
                            <label>Regarding*</label>
                            <select name ="reason"  value ="<?php if(isset($_POST['reason'])){echo $_POST['reason']; }?>" required class="form-control" id="sel1">
                            <option value ="0">Select a reason</option>
                            <option value ="Customer Support">Customer Support</option>
                            <option value ="General Inquiry">General Inquiry</option>
                            </select>
                             <?php if($validation->getError('reason')) {?>
            <div class='error'>
              <?= $error = $validation->getError('reason'); ?>
            </div>
        <?php }?>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                            <label>Phone Number*</label>
                            <input type="text" class="form-control" id="phonenumber" value ="<?php if(isset($_POST['phone_no'])){echo $_POST['phone_no']; }?>" required name ="phone_no" placeholder="Phone Number">
                             <?php if($validation->getError('phone_no')) {?>
            <div class='error'>
              <?= $error = $validation->getError('phone_no'); ?>
            </div>
        <?php }?>
                            </div>
                      </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-lg-12">
                         <div class="form-group">
                               <label for="comment">Your Message*</label>
                              <textarea class="form-control" name ="message" rows="5" id="comment" placeholder="Your Message"><?php if(isset($_POST['message'])){echo $_POST['message']; }?></textarea>
                               <?php if($validation->getError('message')) {?>
            <div class='error'>
              <?= $error = $validation->getError('message'); ?>
            </div>
        <?php }?>
                           </div>
                      </div>
                  </div>
                  
                  <div class="row">
                     <div class="col-lg-12">
                         <div class="form-group contact-btn">
                               <button type="submit" name ="submit" class="btn btn-info">Submit</button>
                          </div>
                      </div>
                  </div>
  
 
            </form>

      </div>
      </div>
    </div>
  </div>
</section>


<?php 

echo view('layouts/footer.php'); ?>


<?= $this->endSection() ?>






