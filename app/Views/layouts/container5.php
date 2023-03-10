
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>2Kpaid</title>
	
	 <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
		
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		
		<script>document.documentElement.className = 'js';</script>
	</head>
	<body >
	
		<div class="container">
		     <div class="backbtn"><a href="<?php echo base_url(); ?>"><img src="assets/images/back.png" alt="" class="img-fluid"></a></div>
		     <div class ="profileimg">  
		   <span><?php echo $container5->shippping_container->name.' '.$container5->shippping_container->lastname; ?></span>
		     <img src="<?php echo $container5->shippping_container->profile_image; ?>"/>  
		    </div>
			<div class="scroller">
				<div class="room room--current">
					<div class="room__side room__side--back ">
					<div class ="logo_container">
					<!-- <img src="assets/images/slime1.png" alt="" class="img-fluid"> -->
					</div>

					</div>

					<div class="room__side room__side--left ">
						<div class ="count1">
							<div class ="count2" >
								<h2><span><img class="" src="img/set6/eye.png" alt="Some image"/></span>Total views <?php echo $container5->shippping_container->Visit_count; ?></h2>
							</div>
						</div>
						
					</div>
					<div class="room__side room__side--right ">
					    					<?php
					foreach($container5->sc_video as $cont1) { 
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
						</div>
					<div class="room__side room__side--bottom">
				
					</div>
				</div><!-- /room -->
				<div class="cloudimagemain">
				
				<?php
					
					foreach($container5->slime_seat as $seat) { 
						$imgext = explode(".",$seat->images[0]->Image_path);
						
						?>
				<div class="cloudimage-360 clickable" title="<?php echo $seat->name;?>" 
						description="<?php echo $seat->Description;?>" id="<?php echo $seat->product_id;?>" price ="<?php echo $seat->Price;?>" data-folder="<?php echo $container5->image_folder_path;?>" 
				data-filename-x="<?php echo $seat->S_ID.'_'; ?>{index}.<?php echo  $imgext[1];?>" 
				data-amount-x="6" data-speed="50" data-drag-speed="50"></div>
<?php } ?>	
				</div>
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
			<nav class="nav">
				<button class="btn btn--nav btn--nav-left">
					<svg class="nav-icon nav-icon--left" width="42px" height="12px" viewBox="0 0 70 20">
						<path class="nav__triangle" d="M52.5,10L70,0v20L52.5,10z"/>
						<path class="nav__line" d="M55.1,11.4H0V8.6h55.1V11.4z"/>
					</svg>
				</button>
				<button class="btn btn--nav btn--nav-right">
					<svg class="nav-icon nav-icon--right" width="42px" height="12px" viewBox="0 0 70 20">
						<path class="nav__triangle" d="M52.5,10L70,0v20L52.5,10z"/>
						<path class="nav__line" d="M55.1,11.4H0V8.6h55.1V11.4z"/>
					</svg>
				</button>
			</nav>
		</div><!-- /content -->
		<div class="overlay overlay--loader overlay--active">
			<div class="loader">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		
		<script src="js/anime.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/main2.js"></script>
		
		<div class="modal fade model-design chairmodal" id="myModal" >
    		<div class="modal-dialog modal-lg" id ="modal">
      			<div class="modal-content">
      
        		<!-- Modal Header -->
        		<div class="modal-header">
          			<h4 class="modal-title" id="modal_title" ></h4>
          			<h3><span>$</span><span id ="price"></span></h3>
          			<button type="button" class="close" data-dismiss="modal">&times;</button>
        		</div>
        
        		<!-- Modal body -->
        		<div class="modal-body"  id="modal_desc">
         
        		</div>
       
      		</div>
    	</div>
  	</div>
	</body>
</html>
 <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/latest/js-cloudimage-360-view.min.js"></script>
<script>
$(function() {                      
  $(".clickable").click(function() {  

  description = $(this).attr('description');
  //alert(description);
  title = $(this).attr('title');
   id = $(this).attr('id'); 
    price = $(this).attr('price');
link = '<?= base_url('billing?id=')?>'+id+'&cid=5';
  //alert($(this).attr('title'));
  $('#modal_title').html(title);
   $('#price').html(price);
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
   	data: {"shipping_container_id": 5},
 	method: "post",
  }).done(function() {});
 });
 
</script>