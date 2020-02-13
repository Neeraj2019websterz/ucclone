<?php $this->load->view('includes/head'); ?>
<?php $this->load->view('includes/header'); ?>

<main id="main">
    <div class="form-img">
        <div class="container  pt-5 pb-5">
            <div class="row pt-5">
                <div class="col-12 col-lg-6 pt-5">

                </div>
                <div class="col-12 col-lg-6 pt-5">
                    <div class="bg-white w-100 pb-1">
                        <div class="card-body pb-5">
                            <h5 class="card-title text-center pb-3">Register</h5>
                              <form class="form-signin" id="form-login" >

                            <div class="row pl-3 pr-3 form-1">
                                <div class="form-label-group p-0 pb-2 col-6 col-lg-6 ">
                                    <div class="pr-2">
                                        <input type="text" id="firstnamer" class="form-control" name="firstname" placeholder="First name">
                                        <span id="first-name" class="text-danger float-left error"></span>
                                    </div>
                                </div>
                                <div class="form-label-group p-0 pb-2 col-6 col-lg-6 form-1">
                                    <input type="text" id="" class="form-control" placeholder="Last name" name="lastname">
                                    <span id="last-name" class="text-danger float-left error"></span>
                                </div>
                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                                <span id="email" class="text-danger float-left error"></span>
                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="date"  class="form-control" name="Dateofbirth" required>
                                <span id="dateofbirth" class="text-danger float-left error"></span>
                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="number"  class="form-control" name="phoneno" placeholder="Enter your phone" required>
                                <span id="phone-no" class="text-danger float-left error"></span>
                            </div>

                            <div class="form-label-group  pb-3 form-1">
                                <input type="radio" id="male" name="gender" value="male">
                                <label>Male</label>
                                <input type="radio" id="female" name="gender" value="female">
                                <label>Female</label>
                                <input type="radio" id="other" name="gender" value="other">
                                <label for="other">Other</label>
                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="password"  class="form-control" name="password" placeholder="password">
                                <span id="password" class="text-danger float-left error"></span>

                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="Password"  class="form-control" name="confrimpassword" placeholder="Confirm password">
                                <span id="confirmpassword" class="text-danger pb-3 float-left error"></span>

                            </div>


                            <div class="form-label-group pt-3 form-1">
                                <a class="btn btn-lg btn-primary btn-block text-uppercase form-1" id="next">Next</a>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <input type="Address"  class="form-control" name="address1" placeholder="Enter your street Address-1" required>
                                <span id="address1" class="text-danger pb-3 float-left error"></span>
                            </div>

                            <div class="form-label-group pb-3 form-2">
                                <input type="Address"  class="form-control" name="address2" placeholder="Enter your street Address-2"required>
                                <span id="address2" class="text-danger pb-3 float-left error"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">


                                <select  class="form-control" name="city" id="city-1">
                                    <option value="0">--Select a city--</option>
                                    <option value="city-1">city-1</option>
                                    <option value="city-1">city-2</option>
                                    <option value="city-1">city-3</option>
                                    <option value="city-1">city-4</option>
                                    <option value="city-1">city-5</option>
                                </select>
                                <span id="city" class="text-danger pb-3 float-left error"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">

                                <select  class="form-control" name="state"  id="state-1">
                                    <option value="0">--Select a state--</option>
                                    <option value="state-1">state-1</option>
                                    <option value="state-2">state-2</option>
                                    <option value="state-3">state-3</option>
                                    <option value="state-4">state-4</option>
                                    <option value="state-5">state-5</option>
                                    <option value="state-6">state-6</option>
                                </select>

                                <span id="state" class="text-danger pb-3 float-left error"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <select  class="form-control" name="country"  id="country-1">

                                    <option value="0">--Select a country--</option>
                                    <option value="country-1">country-1</option>
                                    <option value="country-2">country-2</option>
                                    <option value="country-3">country-3</option>
                                    <option value="country-4">country-4</option>

                                </select>

                                <span id="country" class="text-danger pb-3 float-left error"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <button id="submit" class="btn btn-lg btn-primary btn-block text-uppercase form-2">sumbit</button>
                            </div>


                        </form>
                   
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>



<?php $this->load->view('includes/footer'); ?>
