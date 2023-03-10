<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>

<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Card Detail</h3>
      </div>
    </div>
  </div>
</section>



<section class="login-sec">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-page-design">
      <h4>Enter Your Details</h4>     
      <div class="loginform">
      <form method ="post" action ="<?php echo base_url('payment');?>" >
        <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                 <input type="hidden" class="form-control"  value ="<?php echo $order_id; ?>" name ="order_id"  >
          <label>Name on Card</label>
          <input type="text" class="form-control" required name ="cardname"  >
        </div>
        <div class="form-group">
          <label>Card Number</label>
          <input type="text" class="form-control" required name ="card_no" >
        </div>
        </div>
        
        
        
        </div>
        <div class="form-group">
          <label>Expiry Date</label>
          <input type="date" class="form-control" required name ="expiry_date" >
        </div>
        <div class="form-group">
          <label>Cvv No.</label>
          <input type="text" class="form-control" required name ="cvv" >
        </div>
       
        </div>
      </form>
       
      </div>
      </div>
      </div>
    </div>
  </div>
</section>





<?php 

echo view('layouts/footer.php'); ?>


<?= $this->endSection() ?>



