<?php $this->load->view("includes/adminheader") ?>
<main>
    <div class="container">

    <form method='post' class="" action="<?php echo site_url('admin/uploadslider') ?>"enctype="multipart/form-data">
        <div class="form-group row">
            <div class="banner-upload-button">
                  <input type="file" class="form-control custom-file-input" name="slider"  required >
                 <input type='submit' class= "btn searchbtn pull-right" name='upload' value='upload'>
            </div>


        </div>

    </form>

    <div class="row">
        <?php foreach ($imgname as $slider) { ?>
            <?php if ($slider->status == 0) { ?>


                <div class="col-sm-4 float-left">
                    <div class="banner pt-2 mt-2">
                        <img class="slider-img w-100" src="<?php echo base_url('\assets\banner/' .$slider->banner_name); ?>" />

                    </div>
                </div>

            <?php }
        } ?>
    </div>
    </div>
</main>
<?php $this->load->view("includes/adminfooter"); ?>
