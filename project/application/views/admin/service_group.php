<?php $this->load->view("includes/adminheader") ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?PHP echo site_URL('admin/dashboard');?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Service Group</li>
        </ol>
        <div class="row">
            <div class="col-md-12"><a href="<?PHP echo site_URL(); ?>"><button class="btn btn-primary">Create service group</button></a>&nbsp<a href="<?PHP echo site_URL(); ?>"><button class="btn btn-primary">Create service type</button></a></div>            
        </div>
        <div class="col-md-12 col-12 col-lg-12"><hr></div>
        <div class="row">
            <div class="col-md-12">
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                Collapsible Group Item #1
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                <table class="table table-striped table-bordered table-responsive-sm">
                                    <tr>
                                        <th>Id</th>
                                        <th>Service Name</th>
                                        <th>Type</th>
                                        <th>Service fee</th>
                                        <th>Convenience fee</th>
                                    </tr>
                                    <tr>
                                        <td>placehoder</td>
                                        <td>placehoder</td>
                                        <td>placehoder</td>
                                        <td>placehoder</td>
                                        <td>placehoder</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>            
        </div>
    </div>
</main>
<?php $this->load->view("includes/adminfooter") ?>
