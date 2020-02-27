<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
<?php
$result = $res[0];
$gender = $result->gender;

foreach ($services as $res) {
    if ($res->services_catagery_id == $result->services_list_id) {

        $servicesCategeryList = $res->services_categery_list;
        $servicesCategeryId = $result->services_list_id;
    }
}

?>
<main id="main">
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-sm-12">
                <div class="container col-md-6">
                    <?php echo form_open(site_URL('Professionals/updateProfileData')); ?>
                    <form method="post">
                        <div class="row pl-3 pr-3 ">
                            <div class="form-label-group p-0 pb-2 col-12 col-lg-12 ">
                                <div class="pr-2">

                                    <label>Change your name  </label>
                                    <input type="text"  value="<?php echo $result->first_name; ?>" class="form-control" name="nameproffesional" placeholder="First name" required >
                                </div>
                            </div>

                        </div>
                        <div class="form-label-group pb-3 ">
                            <label>Change your contact  </label>
                            <input type="tel"  class="form-control" value="<?php echo $result->contact; ?>"  name="phoneproffessional" placeholder="Enter your phone" required >

                        </div>

                        <div class="form-label-group  mt-2 pb-3 pt-3 ">
                            <label>Change your Gender  </label><br>
                            <input type="radio" id="male" name="genderproffesional" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>>
                            <label>Male</label>
                            <input type="radio" id="female" name="genderproffesional" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>>
                            <label>Female</label>
                            <input type="radio" id="other" name="genderproffesional" value="other" <?php echo ($gender == 'other') ? 'checked' : ''; ?>>
                            <label for="other">Other</label>

                        </div>

                        <div class="form-label-group pb-3 ">

                            <label>Change your Services  </label><br>
                            <select  class="form-control" name="servicesproffesional" >
                                <option value="<?php echo $servicesCategeryId; ?>"><?php echo $servicesCategeryList;  ?> ></option>
                                <?php foreach ($services as $res) { ?>

                                    <option value="<?php echo$res->services_catagery_id ?>"><?php echo$res->services_categery_list ?></option>
                                <?php } ?>

                            </select>

                        </div>
                        <div class="form-label-group pb-3 ">


                            <label>Change your City  </label><br>
                            <select  class="form-control" name="cityproffesional" >
                              <?php foreach ($city as $cityes) { ?>

                                    <option value="<?php echo$cityes->city_id ?>"><?php echo$cityes->city?></option>
                                <?php } ?>
                            </select>

                        </div>
                        <div class="form-label-group pb-3 ">
                            <input type="Address"  class="form-control" name="address1proffesional" value="<?php echo $result->street_add1; ?>" placeholder="Enter your street Address-1" required>

                        </div>

                        <div class="form-label-group pb-3 ">
                        <input type="Address"  class="form-control" name="address2proffesional" value="<?php echo $result->street_add2; ?>"placeholder="Enter your street Address-2"required>

                        </div>
                        <div class="form-label-group pb-3 ">
                            <select  class="form-control" name="stateproffesional">
                              <?php foreach ($state as $statee) { ?>

                                    <option value="<?php echo$statee->state_id ?>"><?php echo$statee->state?></option>
                                <?php } ?>
                            </select>
                            <span id="state" class="text-danger pb-3 float-left"></span>
                        </div>
                        <div class="form-label-group pb-3 ">
                            <input type="submit" value="update" class="btn btn-lg btn-primary btn-block text-uppercase "></button>
                        </div>
                    </form>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</main>
<?php $this->load->view('includes/footer'); ?>
