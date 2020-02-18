<?php $this->load->view("includes/adminheader") ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?PHP echo site_URL('admin/dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Service Group</li>
        </ol>
        <div class="row">
            <div class="col-md-12"><a href="<?PHP echo site_URL('admin/createservgrpview'); ?>"><button class="btn btn-primary">Create service group</button></a>&nbsp<?PHP if(!empty($row)){ ?><a href="<?PHP echo site_URL('admin/createservcatview');?>"><button class="btn btn-primary">Create service category</button></a><?PHP }?></div>            
        </div>
        <div class="col-md-12 col-12 col-lg-12"><hr></div>
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
            <div class="col-md-12">
                <?PHP if(!empty($row)){ ?>

                <div id="accordion">
                    <?php
                    $count = 0;
                    foreach ($row as $key => $value) {
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapse<?PHP echo '_'.$count; ?>">
                                    <?PHP echo $key; ?>
                                </a>
                            </div>
                            <div id="collapse<?PHP echo '_' . $count; ?>" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <table class="table table-striped table-bordered table-responsive-sm">
                                        <tr>
                                            <th>Service Name</th>
                                            <th>Category</th>
                                            <th>Service fee</th>
                                            <th>Convenience fee</th>
                                        </tr>
                                        <?PHP
                                        foreach ($value as $key2 => $value2) {

                                            foreach ($value2 as $key3 => $value3) {

                                                echo '<tr>
                                            <td>' . $value3[0] . '</td>
                                            <td>' . $key2 . '</td>
                                            <td>' . $value3[1] . '</td>
                                            <td>' . $value3[2] . '</td>
                                        </tr>';
                                            }
                                        }
                                        ?>                                        

                                    </table>
                                </div>
                            </div>
                        </div>
                    <?PHP  $count++;} ?>

                </div>
                <?PHP }else{ echo '<div><p>No data information available</p></div>';}?>
            </div>            
        </div>
    </div>
</main>
<?php $this->load->view("includes/adminfooter") ?>
