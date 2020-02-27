<?php $this->load->view("includes/adminheader") ?>
<main>
    <div class="container p-4">

        <form method='post' class="" action="<?php echo site_url('admin/uploadservicesimage') ?>"enctype="multipart/form-data">
            <div class="form-group row">
                <div class="banner-upload-button">
                    <select  class="form-control" name="services" id="services">
                        <option value="0">--Select a services--</option>
                        <?php foreach ($services as $res) { ?>
                            <option value="<?php echo$res->services_catagery_id ?>"><?php echo$res->services_categery_list ?></option>
                        <?php } ?>

                    </select>
                    <input type="file" class="" name="slider"  required >
                    <input type='submit' class= "btn-info" name='upload' value='upload'>
                </div>


            </div>

        </form>
        <div class="row">
            <?php foreach ($servicesbanner as $slider) { ?>
                <div class="col-sm-4 float-left">
                    <div class="banner pt-2 mt-2">
                        <img class="slider-img w-75 h-50" src="<?php echo base_url('assets\servicesimages/' . $slider->services_image); ?>" />


                    </div>
                    <div><?php echo $slider->services_categery_list ?></div>
                </div>

            <?php }

            ?>
        </div>
    </div>
</main>
<?php $this->load->view("includes/adminfooter"); ?>
