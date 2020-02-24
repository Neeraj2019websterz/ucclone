<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>
<?php
$result = $res[0];
$gender = $result->gender;

?>

<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container col-md-6">
                        <?php form_open(site_URL('professionals/updateprofessionalprofile')); ?>
                    <form class="form-signin" id="venderform-signup" >
                        <?php
                        foreach ($services as $res) {
                            if ($res->services_catagery_id == $result->services_list_id) {

                                $servicesCategeryList = $res->services_categery_list;
                                $servicesCategeryId = $result->services_list_id;
                            }
                        }

                        ?>

                        <div class="row pl-3 pr-3 ">
                            <div class="form-label-group p-0 pb-2 col-12 col-lg-12 ">
                                <div class="pr-2">
                                    <label>Change your name  </label>
                                    <input type="text"  value="<?php echo $result->first_name; ?>" class="form-control" name="name" placeholder="First name" >
                                </div>
                            </div>

                        </div>
                        <div class="form-label-group pb-3 ">
                            <label>Change your Email  </label>
                            <input type="email" class="form-control" value="<?php echo $result->email; ?>" placeholder="Email address" name="emailpr" required>

                        </div>
                        <div class="form-label-group pb-3 ">
                            <label>Change your contact  </label>
                            <input type="tel"  class="form-control" value="<?php echo $result->contact; ?>"  name="phoneno" placeholder="Enter your phone">

                        </div>

                        <div class="form-label-group  mt-2 pb-3 pt-3 ">
                            <label>Change your Gender  </label><br>
                            <input type="radio" id="male" name="gender" value="male" <?php echo ($gender == 'male') ? 'checked' : ''; ?>>
                            <label>Male</label>
                            <input type="radio" id="female" name="gender" value="female" <?php echo ($gender == 'female') ? 'checked' : ''; ?>>
                            <label>Female</label>
                            <input type="radio" id="other" name="gender" value="other" <?php echo ($gender == 'other') ? 'checked' : ''; ?>>
                            <label for="other">Other</label>

                        </div>

                        <div class="form-label-group pb-3 ">

                            <label>Change your Services  </label><br>
                            <select  class="form-control" name="services" >
                                <option value="<?php echo $servicesCategeryId; ?>"><?php echo $servicesCategeryList; ?></option>
                                <?php foreach ($services as $res) { ?>

                                    <option value="<?php echo$res->services_catagery_id ?>"><?php echo$res->services_categery_list ?></option>
                                <?php } ?>

                            </select>
                           
                        </div>
                        <div class="form-label-group pb-3 ">


                            <label>Change your City  </label><br>
                            <select  class="form-control" name="city" id="city-1">
                                <option value="0">--Select a city--</option>
                                <option value="city-1">city-1</option>
                                <option value="city-1">city-2</option>
                                <option value="city-1">city-3</option>
                                <option value="city-1">city-4</option>
                                <option value="city-1">city-5</option>
                            </select>
                            <span id="city" class="text-danger pb-3 float-left"></span>
                        </div>
                        <div class="form-label-group pb-3 ">
                            <input type="Address"  class="form-control" name="address1" placeholder="Enter your street Address-1" required>
                            <span id="address1" class="text-danger pb-3 float-left"></span>
                        </div>

                        <div class="form-label-group pb-3 ">
                            <input type="Address"  class="form-control" name="address2" placeholder="Enter your street Address-2"required>
                            <span id="address2" class="text-danger pb-3 float-left"></span>
                        </div>
                        <div class="form-label-group pb-3 ">

                            <select  class="form-control" name="state"  id="state-1">
                                <option value="0">--Select a state--</option>
                                <option value="state-1">state-1</option>
                                <option value="state-2">state-2</option>
                                <option value="state-3">state-3</option>
                                <option value="state-4">state-4</option>
                                <option value="state-5">state-5</option>
                                <option value="state-6">state-6</option>
                            </select>

                            <span id="state" class="text-danger pb-3 float-left"></span>
                        </div>
                        <div class="form-label-group pb-3 ">
                            <select  class="form-control" name="country"  id="country-1">

                                <option value="0">--Select a country--</option>
                                <option value="country-1">country-1</option>
                                <option value="country-2">country-2</option>
                                <option value="country-3">country-3</option>
                                <option value="country-4">country-4</option>

                            </select>

                            <span id="country" class="text-danger pb-3 float-left"></span>
                        </div>
                        <div class="form-label-group pb-3 ">
                            <button id="vender-signup" class="btn btn-lg btn-primary btn-block text-uppercase ">update</button>
                        </div>
                    </form>
                    <?php form_close(); ?>
                </div>
            </div>
        </div>
    </div>

</main>
<?php $this->load->view('includes/footer'); ?>
