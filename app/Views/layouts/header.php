
 
<header class="header-sec">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="<?php echo base_url();?>"><img src="assets/images/logo.png" class="img-fluid" alt=""></a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto" id="myNavbar">
        
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('/slimecontainer');?>">Slime Slides</a>
        </li>
      <!--  <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="#">Leaderboard</a>
        </li> 
         <li class="nav-item">
          <a class="nav-link" href="#">Explore</a>
        </li> -->
      
        <?php 
      //  print_r($_SESSION['isLoggedIn']); 
      //die;
        if(!empty($_SESSION['isLoggedIn'])){?>
          <li class="nav-item dropdown dropdown-d">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            <span><?php echo $_SESSION['name'].' '.$_SESSION['last_name'];?></span>
          </a>
          <div class="dropdown-menu">
           <a class="dropdown-item" href="#"><?php echo $_SESSION['email'];?></a>
            <a class="dropdown-item" href="<?php echo base_url('/logout');?>">Logout</a>
          </div>
        </li>
        
        <?php }else{?>
        <li class="nav-item loginbtn">
          <a class="nav-link hvr-wobble-to-top-right" href="<?php echo base_url('/login');?>">login</a>
        </li>          
<?php }?>
      </ul>
    </div>  
    </nav>
    </div>
    </div>
    </div>
</header>