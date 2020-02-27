<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
<main id="main">
    <div class="form-img">
      <?php $this->load->view('includes/slider'); ?>
    </div>
    <div class="container mt-3">
        <?php foreach ($getservicesgroup as $servicesgroup) { ?>
        <h3>  <?php echo $servicesgroup->services_group ?></h3>
            <div class="row">
             <?php foreach ($getservicescatagery as $servicescategery)
             {
            if($servicesgroup->services_group_id == $servicescategery->services_group_id)
            {
            ?>
                <div class="col-sm-3 p-3">
                    <div class="servicescategery">
                  <img class="slider-img w-100 h-100" src="<?php echo base_url('assets\servicesimages/'.$servicescategery->services_image); ?>" />


                    </div>
                       
                    <p class="text-secondary"><a href="<?php echo site_url('/subservices/'.$servicescategery->services_catagery_id); ?>"> <?php echo $servicescategery->services_categery_list ?></a></p>
                </div>
        <?php
            }


            }?>
            </div>
            <?php
        }

        ?>
    </div>
</main>



<?php $this->load->view('includes/footer'); ?>
