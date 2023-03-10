<?= $this->extend("layouts/app") ?>
<?= $this->section("body") ?>
<?php 

echo view('layouts/header.php'); ?>

<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Order Received</h3>
      </div>
    </div>
  </div>
</section>
<?php  //$order_id = 1;?>
<section class="thank-sec">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="thankbox">
          <img src="assets/images/checkedg.png" class="img-fluid" alt="">
          <h2>Thank you. Your order has been received.</h2>
          <h5>Order Number: <span><?php echo $order_id;?></span></h5>
          <a href="<?php echo base_url(); ?>" class="btn btn-info hvr-wobble-to-top-right">Return to home</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 

echo view('layouts/footer.php'); ?>
<?= $this->endSection() ?>