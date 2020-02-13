
<?php $this->load->view("includes/head") ?>

<style>
    .card-signin {
        border: 0;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-signin .card-title {
        margin-bottom: 2rem;
        font-weight: 300;
        font-size: 1.5rem;
    }

    .card-signin .card-body {
        padding: 2rem;
    }

    .form-signin {
        width: 100%;
    }

    .form-signin .btn {
        font-size: 80%;
        border-radius: 5rem;
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
    }
    .admin-container{
        background: linear-gradient(to right, rgba(39, 70, 133, 0.8) 0%, rgba(61, 179, 197, 0.8) 100%), url(../img/hero-bg.jpg);
        position: relative;
    }

</style>
<main id="main" class="admin-container">

    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 ">
                <div class="col-md-8 col-sm-8 col-12 offset-md-2 offset-sm-1 ">                 
                    <div class="iphone-wrap">
                        <?php echo form_open('admin/secure_login_validation'); ?>
                        <div class="card card-signin my-5">

                            <div class="card-body">
                                <h5 class="card-title text-center">Sign In</h5>
                                <?php
                                $error = validation_errors();
                                if ($error) {
                                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>' . $error . '</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</main>
<?php $this->load->view("includes/footer") ?>
