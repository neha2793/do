<?= $this->extend("layouts/app") ?>

<?= $this->section("body") ?>

<?php 

echo view('layouts/header.php'); ?>


<section class="innerbanner-sec" style="background: url('assets/images/bg-top.png');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="heading-d">Create NFT</h3>
      </div>
    </div>
  </div>
</section>


<section class="login-sec createnft">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-page-design">
      <h4>Create your NFT</h4>     
           <div class="loginform">
              <form>
                <div class="box">
                          <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple="">
                          <label for="file-5">
                            <figure><img id="profilepreview" src="assets/images/nft1.png"></figure>
                            <span><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21 19V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2zM8.9 13.98l2.1 2.53 3.1-3.99c.2-.26.6-.26.8.01l3.51 4.68c.25.33.01.8-.4.8H6.02c-.42 0-.65-.48-.39-.81L8.12 14c.19-.26.57-.27.78-.02z"></path></svg></span></label>
                  </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Asset Name" id="name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Price" id="price">
                </div>
                <div class="form-group">
                  <textarea class="form-control" rows="5" placeholder="Asset Description" id="comment"></textarea>
                </div>
                <div class="form-group loginbtns">
                   <input type="submit" class="btn btn-info" value="Submit">
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







