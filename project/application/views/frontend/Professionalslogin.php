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
                        <?php echo form_open('Professionals/Professionalslogin'); ?>

                        <div class="card-body pb-5 p-5">
                            <h5 class="card-title text-center">Sign In</h5>
                            <?php
                            $error = validation_errors();
                            $adminerror = $this->session->flashdata('error');
                            if ($error) {
                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>' . $error . '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                            } elseif ($adminerror) {
                                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>' . $adminerror . '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
                            }

                            ?>
                            <form class="form-signin">
                                <div class="form-label-group">
                                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address"  name="email"  autofocus>
                                    <label for="inputEmail">Email address</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name ="password" >
                                    <label for="inputPassword">Password</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name = "rememberme">
                                    <label class="custom-control-label" for="customCheck1">Remember password</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" value="submit">Sign in</button>
                                <hr class="my-4"></form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>



<?php $this->load->view('includes/footer'); ?>
