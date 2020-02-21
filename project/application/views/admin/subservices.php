<?php $this->load->view("includes/adminheader") ?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?PHP echo site_URL('admin/dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Services</li>
        </ol>

        <div class="row">
            <div class="col-md-12 mb-2">
                <a href="<?PHP echo site_URL('admin/createsubservice'); ?>"><button class="btn btn-primary">Create service</button></a>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Service Name</th>
                                <th>Service Category</th>
                                <th>Service fees</th>
                                <th>Convenience fees</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Service Name</th>
                                <th>Service Category</th>
                                <th>Service fees</th>
                                <th>Convenience fees</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?PHP
                            foreach ($service_list as $key => $value) {
                                echo '<tr>
                                                <td>' . $value->id . '</td>
                                                <td>' . $value->services_list . '</td>
                                                <td>' . $value->services_categery_list . '</td>
                                                <td>' . $value->service_fee . '</td>
                                                <td>' . $value->convenience_fee . '</td>
                                                <td><button class="btn btn-primary">Edit</button></td>
                                            </tr>';
                            }
                            ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
</main>
<?php $this->load->view("includes/adminfooter"); ?>
