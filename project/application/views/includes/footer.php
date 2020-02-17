<div>
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h3>About UC Clone</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius ea delectus pariatur, numquam aperiam
                        dolore nam optio dolorem facilis itaque voluptatum recusandae deleniti minus animi.</p>
                    <p class="social">
                        <a href="#"><span class="icofont-twitter"></span></a>
                        <a href="#"><span class="icofont-facebook"></span></a>
                        <a href="#"><span class="icofont-dribbble"></span></a>
                        <a href="#"><span class="icofont-behance"></span></a>
                    </p>
                </div>
                <div class="col-md-7 ml-auto">
                    <div class="row site-section pt-0">
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Navigation</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Become service professional</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Services</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Collaboration</a></li>
                                <li><a href="#">Todos</a></li>
                                <li><a href="#">Events</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 mb-4 mb-md-0">
                            <h3>Downloads</h3>
                            <ul class="list-unstyled">
                                <li><a href="#">Get from the App Store</a></li>
                                <li><a href="#">Get from the Play Store</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center text-center">
                <div class="col-md-7">
                    <p class="copyright">&copy; Copyright UC Clone All Rights Reserved</p>
                </div>
            </div>

        </div>
    </footer>
</div> 

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<script src="<?PHP echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/vendor/jquery/jquery-migrate.min.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/vendor/easing/easing.min.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/vendor/php-email-form/validate.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/vendor/sticky/sticky.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/vendor/aos/aos.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/vendor/owlcarousel/owl.carousel.min.js'); ?>"></script>
<script src="<?PHP echo base_url('assets/js/main.js'); ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>
<script>
    $(document).ready(function () {

        $(".form-2").hide();
    });

    $("#next").click(function () {
        var firstname = $("input[name='firstname']").val();
        var id = "#first-name";
        var fname = nameValidaion(firstname, id)
        var lastname = $("input[name='lastname']").val();
        var lname;
       

        if (fname)
        {
            var id1 = "#last-name";
            lname = nameValidaion(lastname, id1)
            console.log(lname);
        }
        if (fname && lname && emailValidaion() && phoneValidaion() && genderValidation() && passwordvalidation())
        {
              $(".form-1").hide();
               $(".form-2").show();
        }

    });


    $("#submit").click(function (e)
    {
        e.preventDefault();
        $(".error").html("");
        var address1 = $("input[name='address1']").val();
        var address2 = $("input[name='address2']").val();
        var city = $("#city-1 option:selected").val();
        var state = $("#state-1 option:selected").val();
        var country = $("#country-1 option:selected").val();
        console.log(city)
        if (address1 == "")
        {
            $("#address1").html("please enter your  address");
        } else if (address2 == "")
        {
            $("#address2").html("please enter your address");
        } else if (city == "0")
        {
            $("#city").html("please enter your City");
        } else if (state == "0")
        {
            $("#state").html("please enter your state");
        } else if (country == "0")
        {
            $("#country").html("please enter your country");
        } else
        {

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('userdata'); ?>",
                data: $("#form-login").serialize(),
                success: function (response) {
                    console.log(response);
                }
            });
        }

    });

    function nameValidaion(name, id)
    {

        var name_regex = /^[a-zA-Z]+$/;
        if (name != "")
        {
            if (name.length >= 2 && name.length <= 25)
            {
                if (!name.match(name_regex)) {
                    $(id).text("*For your name please use alphabets only *");
                    return false;
                } else
                {
                    $(id).text("");
                    return true;
                }
            } else
            {
                $(id).text("* Minimum length should be 2 charcters and maximum is 25 charcters*");
                return false;
            }

        } else
        {
            $(id).text("please enter your  name");
            return false;
        }

    }
    function emailValidaion()
    {
        var email = $("input[name='email']").val();
        var name_regex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

        if (email != "")
        {
            if (email.length >= 10 && email.length <= 100)
            {
                if (!email.match(name_regex)) {
                    $("#email").text("*For your name please use alphabets only *");
                    return false;
                } else
                {
                    $("#email").text("");
                    return true;
                }
            } else
            {
                $("#email").text("* Minimum length should be 10 charcters");
                return false;
            }

        } else
        {
            $("#email").text("please enter your  email");
            return false;
        }
    }

    function phoneValidaion()
    {
        var phoneno = $("input[name='phoneno']").val();
        var name_regex = /[0-9]{10}/;

        if (phoneno != "")
        {
            if (phoneno.match(name_regex))
            {
                if (phoneno.length == 10) {
                    $("#phone-no").text("");
                    return true;

                } else
                $("#phone-no").text("*length should be 10 charcters");
                return false;
                {
                                    }
            } else
            {
                    $("#phone-no").text("*Enter only digits *");
                    return false;
            }

        } else
        {
            $("#phone-no").text("please enter your  Contact");
            return false;
        }
    }
    function genderValidation()
    {
        var gender = $("input[name='gender']:checked").val();
        if (gender != "")
        {
            return true;
        } else
        {
            $("#gender").text("please select your gender");
            return false;
        }

    }

    function passwordvalidation()
    {
        var pasword = $("input[name='password']").val();
        var confirmpasword = $("input[name='confrimpassword']").val();
        if (pasword != "")
        {
            if (pasword.length >= 6)
            {
                  $("#password").text("");
                if (confirmpasword != "")
                {
                    if (pasword == confirmpasword)
                    {
                        $("#confirmpassword").text("");
                        return true;
                    } else
                    {
                        $("#confirmpassword").text("pasword does not match");
                        return false;
                    }
                }
                else
                {
                        $("#confirmpassword").text("please enter your Confirm password");
                        return false;
                    
                }
            } else
            {
                $("#password").text("*pasword length is maximum 6");
                return false;
            }
        } else
        {
            $("#password").text("please enter your password");

            return false;
        }
    }
 $('#phone-noo').on('keypress keydown keyup',function(){

    phoneValidaion()
     
 });

</script>