<?php $this->load->view("includes/adminheader") ?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Services</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?PHP echo site_URL('admin/dashboard'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">Service Group</li>
        </ol>
        <div class="row">
            <div class="col-md-12"><a href="<?PHP echo site_URL('admin/createservgrpview'); ?>"><button class="btn btn-primary">Create service group</button></a>&nbsp<?PHP // if(!empty($row)){     ?><a href="<?PHP echo site_URL('admin/createservcatview'); ?>"><button class="btn btn-primary">Create service category</button></a><?PHP // }    ?></div>            
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
                <?PHP foreach ($row['servGroup'] as $value) { ?>
                    <div class="row">
                        <h3 class="float-left"><?PHP echo $value->services_group; ?> </h3>
              <button  class="btn"  onclick="editsgrouplink(<?PHP echo $value->services_group_id?>,'<?PHP echo $value->services_group?>')" >Edit</button>
                    </div>
                    <?PHP
                    if (!empty($row['servList'])) {
                        echo '<table class="table table-bordered table-striped text-center"><thead><th>Id</th><th>Service Category</th><th>Service Name</th><th>Service Fee</th><th>Convenience fee</th><th>Action</th></thead><tbody>';
                        $count = 1;
                        foreach ($row['servList'] as $value2) {
                            if ($value->services_group_id == $value2->services_group_id) {
                                echo "<tr>";
                                echo "<td>" . $count . "</td>";
                                echo "<td>" . $value2->services_categery_list . "</td>";
                                echo "<td>" . $value2->services_list . "</td>";
                                echo "<td>" . $value2->service_fee . "</td>";
                                echo "<td>" . $value2->convenience_fee . "</td>";
                                echo "<td><button class='btn btn-primary'>Edit</button></td>";
                                echo "</tr>";
                                $count++;
                            }
                        }
                        if ($count == 1) {
                            echo '<tr><td colspan="6">No Service available</td></tr>';
                        }
                        echo '</tbody></table>';
                    } else {
                        echo '<table class="table table-bordered table-striped"><thead><th>Id</th><th>Service Category</th><th>Service Name</th><th>Service Fee</th><th>Convenience fee</th><th>Action</th></thead><tbody>';
                        echo "<tr>";
                        echo "<td colspan='6'>No Data available</td>";
                        echo "</tr>";
                        echo '</tbody></table>';
                    }
                }
                ?>
            </div>            
        </div>
    </div>
</main>
<div class="modal" id="editgroupname">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Group Name</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <?PHP echo form_open();?>
            <div class="modal-body">                
            </div>
            <?PHP echo form_close();?>
            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script>
    var formaction= "<?PHP echo site_url('admin/editgroup/');?>";
</script>
<?php $this->load->view("includes/adminfooter") ?>
