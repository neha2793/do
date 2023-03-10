<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
<?= $this->extend("layouts/app") ?>
<?= $this->section("body") ?>

 
<?php 

echo view('layouts/header.php');
//print_r($_SESSION); die;
?>
 
<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Checkout</h3>
      </div>
    </div>
  </div>
</section>
                   
<?php if(!empty($_SESSION['last_name'])){ ?>
<section class="customer-details-sec">
  <div class="container">
      <?php $validation = \Config\Services::validation(); ?>
                    <form role="form" action="<?php echo base_url('order_rcvd');?>" method="post" class="require-validation"
                                                     data-cc-on-file="false"
                                                    data-stripe-publishable-key="<?= STRIPE_KEY ?>"
                                                    id="payment-form">
                                                    <div class="row customer-details-row">
      <div class="col-md-12">
          <?php if (isset($msg)) : ?>
   
        <?php echo $msg; ?>
       
   
<?php endif; ?>


        <div class="customer_details">
          <h2>Billing details</h2>
          
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <label>First Name*</label>
              <input type="text" name ="first_name" required value ="<?php if(!empty($_SESSION['name'])){echo $_SESSION['name']; }?>" class="form-control" placeholder="" id="first_name">
              <?php if($validation->getError('first_name')) {?>
            <div class='error'>
              <?= $error = $validation->getError('first_name'); ?>
            </div>
        <?php }?>
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label>Last Name*</label>
              <input type="text" name ="last_name" required value ="<?php if(!empty($_SESSION['last_name'])){echo $_SESSION['last_name']; }?>" class="form-control" placeholder="" id="last_name">
              <?php if($validation->getError('last_name')) {?>
            <div class='error'>
              <?= $error = $validation->getError('last_name'); ?>
            </div>
        <?php }?>
              </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <label>Phone*</label>
              <input type="text" name ="phone" readonly required value ="<?php if(!empty($_SESSION['phone_number'])){echo $_SESSION['phone_number']; }?>" class="form-control" placeholder="" id="">
             <?php if($validation->getError('phone')) {?>
            <div class='error'>
              <?= $error = $validation->getError('phone'); ?>
            </div>
        <?php }?> 
              </div>
              </div> 
              <div class="col-md-6">
              <div class="form-group">
              <label>Email Address*</label>
              <input type="text" name ="email_address" readonly value ="<?php if(!empty($_SESSION['email'])){echo $_SESSION['email']; }?>" required class="form-control" placeholder="" id="">
              <?php if($validation->getError('email_address')) {?>
            <div class='error'>
              <?= $error = $validation->getError('email_address'); ?>
            </div>
        <?php }?>
              </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-12">
              <div class="form-group">
              <label>Full Address</label>
              <input type="text" name ="full_address" required class="form-control"value ="<?php if(isset($_POST['full_address'])){echo $_POST['full_address']; }?>" placeholder="" id="address">
              </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <label>Town / City</label>
              <input type="text" name ="city" required class="form-control" value ="<?php if(isset($_POST['city'])){echo $_POST['city']; }?>" placeholder="" id="city">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label>State</label>
              <input type="text" name ="state" required class="form-control" value ="<?php if(isset($_POST['state'])){echo $_POST['state']; }?>" placeholder="" id="state">
              </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <label>Country</label>
              <input type="text" name ="country" required class="form-control" value ="<?php if(isset($_POST['country'])){echo $_POST['country']; }?>" placeholder="" id="country">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label>Zip Code*</label>
              <input type="text" name ="pincode" required class="form-control" value ="<?php if(isset($_POST['pincode'])){echo $_POST['pincode']; }?>" placeholder="" id="zipcode">
               <?php if($validation->getError('pincode')) {?>
            <div class='error'>
              <?= $error = $validation->getError('pincode'); ?>
            </div>
        <?php }?>
              </div>
              </div>              
            </div>              
           
        </div>
           <?php if($_SESSION['shippingcharge'] != 0){ ?>
        <div class ="shp">
            
            <input type ="checkbox"name ="chk" id="myCheck" onclick="myFunction()">shipping address same as billing address
        </div>
        
          <div class="customer_details">
          <h2>Shipping details</h2>
          
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <label>First Name*</label>
              <input type="text" name ="Shipping_FirstName" required value ="<?php if(isset($_POST['pincode'])){echo $_POST['pincode']; }?>" class="form-control" placeholder="" id="shippingfirstname">
              <?php if($validation->getError('first_name')) {?>
            <div class='error'>
              <?= $error = $validation->getError('first_name'); ?>
            </div>
        <?php }?>
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label>Last Name*</label>
              <input type="text" name ="Shipping_lastName" required value ="<?php if(isset($_POST['pincode'])){echo $_POST['pincode']; }?>" class="form-control" placeholder="" id="shippinglastname">
              <?php if($validation->getError('last_name')) {?>
            <div class='error'>
              <?= $error = $validation->getError('last_name'); ?>
            </div>
        <?php }?>
              </div>
              </div> 
            </div>
           
            <div class="row">
              <div class="col-md-12">
              <div class="form-group">
              <label>Full Address</label>
              <input type="text" name ="Shipping_address1" value ="<?php if(isset($_POST['Shipping_address1'])){echo $_POST['Shipping_address1']; }?>" required class="form-control" placeholder="" id="shippingaddress1">
              </div>
              </div>
            </div> 
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <label>Town / City</label>
              <input type="text" name ="Shipping_city" value ="<?php if(isset($_POST['Shipping_city'])){echo $_POST['Shipping_city']; }?>" required class="form-control" placeholder="" id="shippingcity">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label>State</label>
              <input type="text" name ="Shipping_state" value ="<?php if(isset($_POST['Shipping_state'])){echo $_POST['Shipping_state']; }?>" required class="form-control" placeholder="" id="shippingstate">
              </div>
              </div> 
            </div>
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
              <label>Country</label>
              <input type="text" name ="shipping_country" required value ="<?php if(isset($_POST['shipping_country'])){echo $_POST['shipping_country']; }?>" class="form-control" placeholder="" id="shippingcountry">
              </div>
              </div>
              <div class="col-md-6">
              <div class="form-group">
              <label>Zip Code*</label>
              <input type="text" name ="Shipping_Zipcode" value ="<?php if(isset($_POST['Shipping_Zipcode'])){echo $_POST['Shipping_Zipcode']; }?>" required class="form-control" placeholder="" id="shippingzipcode">
               <?php if($validation->getError('pincode')) {?>
            <div class='error'>
              <?= $error = $validation->getError('pincode'); ?>
            </div>
        <?php }?>
              </div>
              </div>              
            </div>              
           
        </div>
       <?php } ?>
      </div>

    </div>

   <div class="row">
     <div class="col-md-12">
      <div class="order-review">
        <h2>Your order</h2>
        <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
          <tr>
              <th class="product-name">Product</th>
              <th class="product-total">Subtotal</th>
          </tr>
          </thead>
         
          <tbody>
            <tr>
               <input type="hidden" class="form-control" name ="quantity" value="<?php echo $_SESSION['quantity'];?>" >
               <input type="hidden" class="form-control" name ="pid" value="<?php echo $_SESSION['pid'];?>" >
               
              <td class="order-product-name"><?php echo $_SESSION['cname']?> × <?php echo $_SESSION['quantity']?></td>
              <td class="order-product-total">$ <?php echo ($_SESSION['quantity'] *$_SESSION['price'] )?></td>
            </tr>
            <tr>
              
               
              <td class="order-product-name">Convience Fee</td>
              <?php $convience_fee = (($_SESSION['price'] * 2) /100)?>
              <td class="order-product-total">$ <?php echo $convience_fee; ?></td>
            </tr>
          </tbody>
          <tfoot>
              <?php if($_SESSION['shippingcharge'] == 0){ ?>
          
            <tr>
              <th>Total</th>
               <input type="hidden" class="form-control" name ="price" value= <?php echo ($_SESSION['quantity'] *$_SESSION['price'] + $convience_fee)?>>
              <td><strong>$ <?php echo ($_SESSION['quantity'] *$_SESSION['price'] + $convience_fee)?></strong></td>
            </tr>
            <?php }else{ ?>
            <input type="hidden" class="form-control" name ="shippingcharge" value="0" >
             <tr>
              <th>Shipping</th>
              <td><strong>$ <?php echo $_SESSION['shippingcharge']?></strong></td>
            </tr>
             <tr>
              <th>Total</th>
               <input type="hidden" class="form-control" name ="price" value= <?php echo (($_SESSION['quantity'] *$_SESSION['price']) + $_SESSION['shippingcharge']  + $convience_fee)?>>
              <td><strong>$ <?php echo (($_SESSION['quantity'] *$_SESSION['price']) + $_SESSION['shippingcharge'] + $convience_fee) ?></strong></td>
            </tr>
            <?php } ?>
          </tfoot>
          
        </table>
      </div>
      </div>
     </div>
   </div> 
   
   <div class='customer_details'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <div class='form-group required'>
                                <label class='control-label'>Name on Card</label> 
                                <input class='form-control' size='4' type='text'>
                                </div>
                            </div>
                            <div class='col-md-6'>
                                <div class='form-group required'>
                                <label class='control-label'>Card Number</label> 
                                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                                </div>
                            </div>
                        </div>
      
                        <div class='row'>
                            <div class='col-xs-12 col-md-4'>
                                <div class='form-group cvc required'>
                                <label class='control-label'>CVC</label> 
                                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                            </div>
                            <div class='col-xs-12 col-md-4'>
                                <div class='form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> 
                                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                            </div>
                            <div class='col-xs-12 col-md-4'>
                                <div class='form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> 
                                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>
                        </div>
      
                        <div class='row'>
                            <div class='col-md-12' >
                                <div class='error form-group hide' >
                                <div class='alert-danger alert'>Please insert card details.</div>
                                </div>
                            </div>
                        </div>
      
                        <div class="row">
                            <div class="col-md-12 place-order">
                                <button class=" btn btn-info hvr-wobble-to-top-right" type="submit">Place Order</button>
                            </div>
                        </div>
                             
                             </div>
                    </form>
           
                    </div>
</section>


 <?php } else{?>
 <section class="customer-details-sec">
  <div class="container">
    <div class="row customer-details-row">
      <div class="col-md-12">
        <div class="pleasesignup"> 
        <p>first you need to signup please click this button to signup <a class="btn btn-info hvr-wobble-to-top-right" href ="<?php echo base_url('signup?chec=1')?>">signup</a></p>
        </div>
        </div>
        </div>
        </div>
        </section>
        <?php } ?>   
                    <?php 

echo view('layouts/footer.php'); ?>
                   
                    
     
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>  
<script type="text/javascript">
$(function() {
   // $(".hide").hide();
    var $form         = $(".require-validation");
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
        $errorMessage.addClass('hide');
 //alert($errorMessage)
        $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault();
      }
    });
     
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
    
  });
      
  function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            var token = response['id'];
            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }
     
});
function credit() {
   
   var x = document.getElementById("pay");
   if (x.style.display === "none") {
     x.style.display = "block";
   } else {
     x.style.display = "none";
   }
 }
 function myFunction() {
   var checkBox = document.getElementById("myCheck");
   if (checkBox.checked == true){
         var firstname = $("#first_name").val()
             $('#shippingfirstname').val(firstname);
             var last_name = $("#last_name").val()
             $('#shippinglastname').val(last_name);
             var address = $("#address").val()
             $('#shippingaddress1').val(address);
             var city = $("#city").val()
             $('#shippingcity').val(city);
             var state = $("#state").val()
             $('#shippingstate').val(state);
             var country = $("#country").val()
             $('#shippingcountry').val(country);
             var zipcode = $("#zipcode").val()
             $('#shippingzipcode').val(zipcode);
            
   }else if(checkBox.checked == false){
     
             $('#shippingfirstname').val('');
           
             $('#shippinglastname').val('');
            
             $('#shippingaddress1').val('');
           
             $('#shippingcity').val('');
          
             $('#shippingstate').val('');
           
             $('#shippingcountry').val('');
           
             $('#shippingzipcode').val('');
   }
 }
</script>

<?= $this->endSection() ?>