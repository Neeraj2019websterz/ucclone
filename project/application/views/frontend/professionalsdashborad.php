<?php $this->load->view('includes/professionalsdashboradheader'); ?>
<main>
    <div class="container-fluid">
 <?php echo $this->session->flashdata('message'); ?>
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
                       
                        <p><span class="display-4"><b><?php echo $result->first_name; ?></b></span>(edit profile) </p><br>
                        <p>I’m a digital designer in love with photography, painting and discovering new worlds and cultures.</p>
                    </div>
                    <div class="hero-info">
                        <h2>General Info</h2>
                        <ul>
                            <li><span>Date of Birth : </span><?php echo $result->age; ?></li>
                            <li><span>Address : </span><?php echo $result->street_add1; ?></li>
                            <li><span>E-mail : </span><?php echo $result->email; ?></li>
                            <li><span>Phone  : </span><?php echo $result->contact; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="float-right">
                        <div>
                           <div class="profile-img img-circle"><img src="<?php echo $imgpath.$result->profile_pic; ?>" class="h-100 img-fluid img-responsive"/></div>
                            <form method='post' class="" action="<?php echo site_url('professionals/professionalsprofile') ?>"enctype="multipart/form-data">
                                <div class="form-group row">
                                    <div class="banner-upload-button">
                                        <input type="file" class="" name="profilepic"  required >
                                        <input type='submit' class= "btn-primary" name='upload' value='upload'>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>  <img stc=""></div>
</main>
<?php $this->load->view('includes/adminfooter'); ?>








