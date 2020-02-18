<?php $this->load->view("includes/adminheader") ?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?PHP echo site_URL('admin/dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item "><a href="<?PHP echo site_URL('admin/service'); ?>">Service Group</a></li>
            <li class="breadcrumb-item active">Create service category</li>
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
                <?php echo form_open(site_URL('admin/createservcat')); ?>
                <form >
                    <div class="form-group">
                        <label >Select Service Group:</label>
                        <select class="form-control" name="servicegrp">
                            <?PHP foreach($service_group as $key => $value){
                                echo '<option value="'.$value->services_group_id.'">'.$value->services_group.'</option>';
                            }?>                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Service category name:</label>
                        <input class="form-control" type="text" name="servicecatname" placeholder="Add service category" required>                        
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
</main>
<?php $this->load->view("includes/adminfooter"); ?>
