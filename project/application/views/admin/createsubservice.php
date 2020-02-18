<?php $this->load->view("includes/adminheader") ?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?PHP echo site_URL('admin/dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="<?PHP echo site_URL('admin/subservices'); ?>">Services</a></li>
            <li class="breadcrumb-item active">Create service</li>
        </ol>

        <?PHP
        if ($resp) {
            echo '<div class="row">
            <div class="col-md-6"> <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>' . $resp . '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>  </div></div>';
        }
        ?>

        <div class="row">
            <div class="col-md-6">
                <?php echo form_open(site_URL('admin/createservice')); ?>
                <form >
                    <div class="form-group">
                        <label >Select Service Category:</label>
                        <select class="form-control" name="servicecategory">
                            <?PHP foreach($service_category as $key => $value){
                                echo '<option value="'.$value->services_catagery_id.'">'.$value->services_categery_list.'</option>';
                            }?>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Service name:</label>
                        <input class="form-control" type="text" name="servicename" placeholder="Add service name" required>                        
                    </div>
                    <div class="form-group">
                        <label >Service fee:</label>
                        <input class="form-control" type="text" name="servicefee" placeholder="Add service fee" required>                        
                    </div>
                    <div class="form-group">
                        <label >Convenience fee:</label>
                        <input class="form-control" type="text" name="conveniencefee" placeholder="Add Convenience fee" required>                        
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("includes/adminfooter"); ?>
