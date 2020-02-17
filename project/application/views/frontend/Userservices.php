<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
<main id="main">
    <div class="form-img">
        <div class="container  pt-5 pb-5">
            <div class="row pt-5">
                <div class="col-12 col-lg-6 pt-5">

                </div>
                <div class="col-12 col-lg-6 pt-5">
                    <div class="bg-white w-100">
                                           
                    </div>
                </div>
            </div>
        </div>
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
                        <h5> IMAGE </h5>
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
