<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>

<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Profile</h3>
      </div>
    </div>
  </div>
</section>


<section class="customer-details-sec">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="profile-card profile-left-d">
            
                    <div class="profile-left" style="background: url('assets/images/nftbg.jpg');">
                      <div class="form-group profile-imggroup">
                        <div class="box">
                         <!-- <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple=""> -->
                          <label for="file-5">
                            <figure><img id="profilepreview" src="<?php echo $profile->userInfo->profile_image; ?>"></figure>
                            <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.9 13.98l2.1 2.53 3.1-3.99c.2-.26.6-.26.8.01l3.51 4.68c.25.33.01.8-.4.8H6.02c-.42 0-.65-.48-.39-.81L8.12 14c.19-.26.57-.27.78-.02z"></path></svg></span></label>
                        </div>
                        <a href="#" class="editicon"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
                        <div class="profileinfo">
                            
                            <ul class="socialslinks">
                                <li><a href="<?php echo $profile->userInfo->facebook_link ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $profile->userInfo->twitter_link ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="<?php echo $profile->userInfo->youtube_link ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                            <ul>
                                <li><span><?php echo $profile->volumn; ?> MATIC</span>Volume</li>
                                <li><span><?php echo $profile->sale; ?></span>Sales</li>
                                <li><span><?php echo $profile->total_items; ?></span>Items</li>
                                </ul>
                            </div>
                      </div>
                    </div>
                    
                    <div class="profile-details">
                        <h3><?php echo $profile->userInfo->name.' '.$profile->userInfo->lastname ?></h3>
                        <h5><?php echo $profile->userInfo->bio; ?></h5>
                       
                      
                    <div class="profilemynft">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" data-toggle="tab" href="#home">Created</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" data-toggle="tab" href="#menu1">Collected</a>
                        </li>
                      </ul>

                      <div class="tab-content">
                        <div id="home" class="tab-pane active">
                         <ul>
                             <?php foreach($profile->user_nfts as $created) {?>
                             <li><a href="#">
                                 <!--<i class="fa fa-heart" aria-hidden="true"></i> -->
                                 <img src="<?php echo $created->image; ?>" alt="" class="img-fluid"></a></li>
                           <?php } ?>
                             <ul>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                          <ul>
                               <?php foreach($profile->user_collected_nft as $collected) {?>
                             <li><a href="#"><img src="<?php echo $collected->image; ?>" alt="" class="img-fluid"></a></li>
                             <?php } ?>
                             <ul>
                        </div>
                      </div>
                      </div>
                      
                      </div>
                    
                    
                    
        </div>
      </div>
      
      
      
    </div>
  </div>
</section>

<?php 

echo view('layouts/footer.php'); ?>

<?= $this->endSection() ?>







