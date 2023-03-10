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




<section class="content-sec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="content-page">
              
             <?php echo html_entity_decode($response->page->body)?>

        </div>
      </div>
    </div>
  </div>
</section> 


<?php 

echo view('layouts/footer.php'); ?>


<?= $this->endSection() ?>






