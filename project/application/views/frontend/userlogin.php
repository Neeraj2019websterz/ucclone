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
                            <form class="form-signin">
                                <div class="row pl-3 pr-3">
                                    <div class="form-label-group p-0 pb-2 col-6 col-lg-6">
                                        <div class="pr-2">
                                        <input type="text" id="" class="form-control" placeholder="First name" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-label-group p-0 pb-2 col-6 col-lg-6">
                                        <input type="text" id="" class="form-control" placeholder="Last name" required autofocus>
                                    </div>
                                </div>
                                <div class="form-label-group pb-3">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                                </div>
                                <div class="form-label-group pb-3">
                                    <input type="date"  class="form-control" required>
                                </div>
                                <div class="form-label-group pb-3">
                                    <input type="number"  class="form-control" placeholder="Enter your phone" required>
                                </div>

                                    <div class="form-label-group  pb-3">
                                    <input type="radio" id="male" name="gender" value="male">
                                    <label>Male</label>
                                    <input type="radio" id="female" name="gender" value="female">
                                    <label>Female</label>
                                    <input type="radio" id="other" name="gender" value="other">
                                    <label for="other">Other</label>
                                </div>



                                <div class="form-label-group pb-3">
                                    <input type="password"  class="form-control" placeholder="password" required>
                                </div>
                                <div class="form-label-group pb-3">
                                    <input type="Password"  class="form-control" placeholder="Confirm password" required>
                                </div>

                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>



<?php $this->load->view('includes/footer'); ?>
