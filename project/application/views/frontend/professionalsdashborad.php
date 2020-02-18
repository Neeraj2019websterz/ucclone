<?php $this->load->view('includes/professionalsdashboradheader'); ?>
     <main>




                    <div class="container-fluid">
         <?php
         $result = $res[0];
         ?>
                        <h1 class="mt-4">Profile</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>

                        <div class="card mb-4 p-4">
                            <div class="row">
                        <div class="col-lg-6">
                            <div class="hero-text">
                                <h2><?php echo $result ->first_name; ?></h2>
                                <p>I’m a digital designer in love with photography, painting and discovering new worlds and cultures.</p>
                            </div>
                            <div class="hero-info">
                                <h2>General Info</h2>
                                <ul>
                                    <li><span>Date of Birth : </span><?php echo $result ->age; ?></li>
                                    <li><span>Address : </span><?php echo $result ->street_add1; ?></li>
                                    <li><span>E-mail : </span><?php echo $result ->email; ?></li>
                                    <li><span>Phone  : </span><?php echo $result ->contact; ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="float-right">
                            <h1>image</h1>

                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </main>
<?php $this->load->view('includes/adminfooter'); ?>








