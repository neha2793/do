<!DOCTYPE html>
<html lang="en">
<head>
  <title>2kPAID</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">   
   
   
</head>
<body>

   <?= $this->renderSection("body") ?>
   <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/latest/js-cloudimage-360-view.min.js"></script>
   <script src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script  src="assets/js/script.js"></script>
 <script src="assets/js/owl.carousel.js"></script>
   <script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo1").owlCarousel({
    autoPlay : true,    
    items : 3,
    loop:true,
    autoplayTimeout:13000,
    autoplayHoverPause:true,
    lazyLoad : true,
    navigation : true,
    responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 3
                  }
                }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo2").owlCarousel({
    autoPlay : true,    
    items : 2,
    loop:true,
    autoplayTimeout:13000,
    autoplayHoverPause:true,
    lazyLoad : true,
    navigation : true,
    responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 2
                  }
                }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo3").owlCarousel({
    autoPlay : true,    
    items : 1,
    loop:true,
    autoplayTimeout:13000,
    autoplayHoverPause:true,
    lazyLoad : true,
    navigation : true,
    responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                  }
                }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo4").owlCarousel({
    autoPlay : true,    
    items : 4,
    loop:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    lazyLoad : true,
    navigation : true,
    responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    });
</script>
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#bannershop a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});

</script>
<script type="text/javascript">
    $(document).ready(function() {

    $("#owl-demo5").owlCarousel({
    autoPlay : true,    
    items : 4,
    loop:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    lazyLoad : true,
    navigation : true,
    responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 3
                  },
                  1200: {
                    items: 4
                  }
                }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
    });
</script>
</body>
</html>