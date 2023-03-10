<!DOCTYPE html>
<html lang="en" >
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>2Kpaid</title>
		
		 <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		
		
		<!--<script>document.documentElement.className = 'js';</script> -->
	</head>	
	
	<body class="blackbody">

		<div class="container">
		     <div class="backbtn"><a href="<?php echo base_url(); ?>"><img src="assets/images/back.png" alt="" class="img-fluid"></a></div>
		     <div class ="profileimg">  
		    <a href= "<?php echo base_url();?>/profile/?id=<?php echo $container3->shippingContainer->user_id?>"><span><?php echo $container3->shippingContainer->name.' '.$container3->shippingContainer->lastname; ?></span>
		     <img src="<?php echo $container3->shippingContainer->profile_image; ?>"/> </a>
		    </div>
			<div class="scroller">
				<div class="room room--current">
					<div class="room__side room__side--back blackback">
						<img class="black-blackcenter" src="img/set1/blackcenter.png" alt="Some image"/>
						<?php
					foreach($container3->Shipping_container_product as $cont1) { 
					//	print_r($cont1);die;
						?>
						<a class ="clickable" title="<?php echo $cont1->name;?>" 
						description="<?php echo $cont1->description;?>" id="<?php echo $cont1->Item_ID;?>"   data-toggle="modal" data-target="#myModal"href ="#">
						    <img class="room__img img lazy-load" data-src=<?php echo $cont1->image ?> alt="Some image"/></a>
						<?php } ?>
						
					</div>

					<div class="room__side room__side--left blackleft">	
					<img class="black-paint-left" src="img/set1/black-paint-left.png" alt="Some image"/>					
					<div class ="count1">						
						<div class ="count2" >
						<h2><span><img class="" src="img/set6/eye.png" alt="Some image"/></span>Total views <?php echo $container3->shippingContainer->Visit_count; ?></h2>
						</div>
						</div>
					</div>

					<div class="room__side room__side--right blackright">
						<img class="black-paint" src="img/set1/black-paint.png" alt="Some image"/>
					<label></label><label></label><label></label><label></label><label></label><label></label><label></label><label></label><label></label><label>
					</label><label></label><label></label><label></label>
							<?php
					foreach($container3->Shipping_container_video as $cont1) { 
						$imgext = explode(".",$cont1->video);
					
						if($imgext[2] == 'mp4'){

					?>	

					<div class ="left-wall vide">
						<div class="bgnew">
							<div class ="tv-set1">
								<div class ="tv-set2">
									<div class ="tv-set3" >
										<video  class ="clickable" id="video-background" controls>
									 	    <source src="<?php echo $cont1->video; ?>" class ="img" type="video/mp4">
										</video>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php }else { ?>
		               
						<a class =" left-wall" href ="#"><div class="bgnew"><img class="room__img img" src="<?php echo $cont1->video; ?>" alt="Some image"/></div></a>
						<?php }
					} ?>
						
						<!--  <a class ="left-wall" href ="#"><div class="bgnew"><img class="room__img img" src="<?php echo $container3->Shipping_container_video[0]->video; ?>" alt="Some image"/></div></a> -->
		                
						
					</div>
					<div class="room__side room__side--bottom"></div>
				</div><!-- /room -->
			
			</div>
		</div><!-- /container -->
		<div class="content">
			<header class="codrops-header">
				<div class="codrops-links">
				
				</div>
				<h1 class="codrops-header__title"></h1>
				<div class="subject"></div>
				<button class="btn btn--info btn--toggle">
					<svg class="icon icon--info"><use xlink:href="#icon-info"></use></svg>
					<svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg>	
				</button>
				<button class="btn btn--menu btn--toggle">
					<svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
					<svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg>
				</button>
				<div class="overlay overlay--menu">
					<ul class="menu">
					
					</ul>
				</div>
				<div class="overlay overlay--info">
				
				</div>
			</header>
			<h4 class="location"></h4>
			<div class="slides">
				<div class="slide">
					<h2 class="slide__name"> <br/></h2>
					<h3 class="slide__title">
						<span></span>
						<div class="slide__number"> <strong></strong></div>
					</h3>
					<p class="slide__date"></p>
				</div>
			
			</div>
		
		</div><!-- /content -->
		<div class="overlay overlay--loader overlay--active">
			<div class="loader">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="js/anime.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/main.js"></script>
		<div class="modal fade model-design" id="myModal" >
    <div class="modal-dialog modal-lg" id ="modal">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="modal_title" ><?php echo $cont1->name; ?></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body"  id="modal_desc">
          <a href ="/billing"><?php echo $cont1->description; ?></a>
        </div>
        
      
        
      </div>
    </div>
  </div>
	</body>
</html>
<script>
$(function() {                      
  $(".clickable").click(function() {  

  description = $(this).attr('description');
  title = $(this).attr('title');
   id = $(this).attr('id'); 
link = '<?= base_url('billing?id=')?>'+id+'&cid=3';
  //alert($(this).attr('title'));
  $('#modal_title').html(title);
  $('#modal_desc').html('<a href="'+link+'">'+description+'</a>');
 // $('#modal_link').html(link);

  $('#myModal').addClass("active");     
  });
});
$(function() {                      
  $(".img").click(function() {  
 // alert('gfdg');
 
    $(this).addClass("box");     
  });
  $(".close").click(function() {  
 // alert('gfdg');
 $('.img').removeClass("box"); 
    $('#myModal').removeClass("active");     
  });
});

 $(document).ready(function () {
 $.ajax({
   	url: "<?php echo base_url('update_view'); ?>",
   	data: {"shipping_container_id": 3},
 	method: "post",
  }).done(function() {});
 });
 
</script>
<script>
      document.addEventListener("DOMContentLoaded", function() {
        let lazyloadImages = document.querySelectorAll("img.lazy-load");
        let lazyloadThrottleTimeout;

        function lazyload() {
          if(lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
          }
          lazyloadThrottleTimeout = setTimeout(function() {
            let scrollTop = window.pageYOffset;
            lazyloadImages.forEach(function(img) {
              if(img.offsetTop < (window.innerHeight + scrollTop)) {
                img.src = img.dataset.src;
                img.classList.remove('lazy');
              }
            });
            if(lazyloadImages.length == 0) {
              document.removeEventListener("scroll", lazyload);
              window.removeEventListener("resize", lazyload);
              window.removeEventListener("orientationChange", lazyload);
              window.removeEventListener("mousemove", lazyload);
            }
          }, 20);
        }
        document.addEventListener("scroll", lazyload);
        window.addEventListener("resize", lazyload);
        window.addEventListener("orientationChange", lazyload);
        window.addEventListener("mousemove", lazyload);
      });
    </script>