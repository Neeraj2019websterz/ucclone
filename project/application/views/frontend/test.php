<?php $this->load->view('includes/head'); ?>


<main id="main">
    <div class="contanier">
        <div class="row">
            <div class="col-lg-6">
                <div class="bg-white w-100 pb-1">
                    <div class="card-body pb-5">
                        <h5 class="card-title text-center pb-3">Register</h5>

                        <form class="form-signin" id="form-login" >

                            <div class="row pl-3 pr-3 form-1">
                                <div class="form-label-group p-0 pb-2 col-6 col-lg-6 ">
                                    <div class="pr-2">
                                        <input type="text" id="firstnamer" class="form-control" name="firstname" placeholder="First name">
                                        <span id="first-name" class="text-danger float-left"></span>
                                    </div>
                                </div>
                                <div class="form-label-group p-0 pb-2 col-6 col-lg-6 form-1">
                                    <input type="text" id="" class="form-control" placeholder="Last name" name="lastname">
                                    <span id="last-name" class="text-danger float-left"></span>
                                </div>
                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required>
                                <span id="email" class="text-danger float-left"></span>
                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="date"  class="form-control" name="Dateofbirth" required>
                                <span id="dateofbirth" class="text-danger float-left"></span>
                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="number"  class="form-control" name="phoneno" placeholder="Enter your phone" required>
                                <span id="phone-no" class="text-danger float-left"></span>
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
                                <span id="password" class="text-danger float-left"></span>

                            </div>
                            <div class="form-label-group pb-3 form-1">
                                <input type="Password"  class="form-control" name="confrimpassword" placeholder="Confirm password">
                                <span id="confirmpassword" class="text-danger pb-3 float-left"></span>

                            </div>


                            <div class="form-label-group pt-3 form-1">
                                <a class="btn btn-lg btn-primary btn-block text-uppercase form-1" id="next">Next</a>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <input type="Address"  class="form-control" name="address1" placeholder="Enter your street Address-1" required>
                                <span id="address1" class="text-danger pb-3 float-left"></span>
                            </div>

                            <div class="form-label-group pb-3 form-2">
                                <input type="Address"  class="form-control" name="address2" placeholder="Enter your street Address-2"required>
                                <span id="address2" class="text-danger pb-3 float-left"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <input type="name"  class="form-control"  name="city" placeholder="City" required>
                                <span id="city" class="text-danger pb-3 float-left"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <input type="name"  class="form-control" name="state" placeholder="state" required>
                                <span id="state" class="text-danger pb-3 float-left"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <input type="name" name="country" class="form-control" placeholder="Country" required>
                                <span id="country" class="text-danger pb-3 float-left"></span>
                            </div>
                            <div class="form-label-group pb-3 form-2">
                                <button id="submit" class="btn btn-lg btn-primary btn-block text-uppercase form-2">sumbit</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
</main>



<?php $this->load->view('includes/footer'); ?>
