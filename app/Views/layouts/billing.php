<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>

<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Product Single</h3>
      </div>
    </div>
  </div>
</section>
<?php 

   if( ($cid == 1)|| ($cid == 2) || ($cid == 3) || ($cid == 4)){
     
        foreach($billing as $bill){ 
          
          //  echo $pid;
            if($bill->Item_ID == $pid){?>
                <section class="product-single-sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-single-img">
                                    <img src="<?php echo $bill->image;?>"class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-single-desc">
                                    <form method ="POST" action="<?php echo base_url('checkout');?>">
                                    <h2><?php echo $bill->name;?></h2>
                                    <h3>$ <?php echo $bill->price;?></h3>
                                    <div class="qut">
                                        <input type="hidden" class="form-control"  name ="quantity"  value="1" placeholder="1">
                                        <input type="hidden" class="form-control" name ="price" value="<?php echo $bill->price;?>" >
                                        <input type="hidden" class="form-control" name ="name" value="<?php echo $bill->name;?>" >
                                        <input type="hidden" class="form-control" name ="shippingcharge" value="5" >
                                        <input type="hidden" class="form-control" name ="pid" value="<?php echo $pid;?>" >
                                    </div>
                                    <h5>Description</h5>
                                    <p><?php echo $bill->description;?></p>
                                    <!--<a href="<?php echo base_url('checkout');?>" class="btn btn-info hvr-wobble-to-top-right">Checkout</a> -->
                                    <input type ="submit" name ="submit" value ="checkout" class="btn btn-info hvr-wobble-to-top-right">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
<?php       } 
            
        } 
        
    }else{
	
			foreach($billing->slime_seat as $seat) { 
				$imgext = explode(".",$seat->images[0]->Image_path);
						//print_r($seat);
				if($seat->product_id == $pid){?>

                    <section class="product-single-sec">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-single-img">
                                   	<div class="cloudimagemain">
				
			<?php
					
					foreach($billing->slime_seat as $seat) { 
						$imgext = explode(".",$seat->images[0]->Image_path);
						
						?>
				<div class="cloudimage-360"  data-folder="<?php echo $billing->image_folder_path;?>" 
				data-filename-x="<?php echo $seat->S_ID.'_'; ?>{index}.<?php echo  $imgext[1];?>" 
				data-amount-x="6" data-speed="50" data-drag-speed="50"></div>
<?php } ?>
				</div>
					</div>
                                </div>
                                <div class="col-md-6">
                                    <div class="product-single-desc">
                                        <form method ="POST" action="<?php echo base_url('checkout');?>">
                                        <h2><?php echo $seat->name;?></h2>
                                        <h3>$ <?php echo $seat->Price;?></h3>
                                        <div class="qut">
                                            <input type="hidden" class="form-control"   value="1" name ="quantity">
                                             <input type="hidden" class="form-control" name ="name" value="<?php echo $seat->name;?>" >
                                              <input type="hidden" class="form-control" name ="price" value="<?php echo $seat->Price;?>" >
                                               <input type="hidden" class="form-control" name ="shippingcharge" value="0" >
                                                <input type="hidden" class="form-control" name ="pid" value="<?php echo $pid;?>" >
                                        </div>
                                        <h5>Description</h5>
                                        <p><?php echo $seat->Description;?></p>
                                        <input type ="submit" name ="submit" value ="checkout" class="btn btn-info hvr-wobble-to-top-right">
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            <?php } 
           }
        } ?>
<?php 

echo view('layouts/footer.php'); ?>

<?= $this->endSection() ?>