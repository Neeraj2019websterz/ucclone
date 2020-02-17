<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
<main id="main">
    <div class="form-img">
        <div class="container  pt-5 pb-5">
            <div class="row pt-5">
                <div class="col-12 col-lg-6 pt-5">

                </div>
                <div class="col-12 col-lg-6 pt-5">
                    <?php foreach ($res as $serviceslist) { ?>
                        <button class="btn btn-lg btn-dark mt-4 btn-block text-uppercase"> <?php echo $serviceslist->services_list; ?></button>
                        <div class="row">
                        </div>
                    <?php }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
    </div>
</main>
<?php $this->load->view('includes/footer'); ?>
