<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Registration - HisLife City Church</title>

<?php echo $_css_files; ?>

<style type="text/css">
    body {
        background-color: transparent;
    }

    #eliteregister li {
        color: white;
    }
    .background-image {
        background: url('assets/plugins/images/registration.jpg') no-repeat center center fixed;
        background-size: cover;
        position: fixed;
        left: 0;
        right: 0;
        z-index: -1;

        display: block;
        width: 100%;
        height: 100%;

        -webkit-filter: blur(3px); /* Safari */
        filter: blur(3px);
        transform: scale(1.1); 
    }

    #msform input, #msform textarea {
        border-radius: 0;
        margin-bottom: 5px;
        padding: 5px;
        font-family: 'Rubik', sans-serif!important;
    }

    #msform input:focus, #msform textarea:focus {
        border-color: #2196f3;
    }
</style>
</head>
<body>
<div class="background-image"></div>
<section id="wrapper" class="step-register">
      <div class="register-box">
        <div class="">
           <a href="javascript:void(0)" class="text-center db m-b-40" style="margin-bottom: 0!important;"><img style="height: 40px; width: 40px;" src="assets/plugins/images/HL.png" alt="Home" /><br/><h4 style="color: white;">HisLife City Church</h4></a>
          <!-- multistep form -->
            <form id="msform">
                <!-- progressbar -->
                <ul id="eliteregister" style="margin-bottom: 10px!important;">
                    <li class="active">Account Setup</li>
                    <li>Personal Details</li>
                    <li>Photo</li>
                </ul>
                <!-- fieldsets -->
                <fieldset id="frm_account">
                    <h2 class="fs-title">Create your account</h2>
                    <h3 class="fs-subtitle">Please provide your desired account details</h3>
                    <input type="email" name="email" placeholder="Email" />
                    <input id="pass" type="password" name="pass" placeholder="Password" />
                    <input type="password" name="cpass" placeholder="Confirm Password" /><br>
                    <button id="btnStep1" type="button" class="next action-button">Next</button>
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Personal Details</h2>
                    <h3 class="fs-subtitle">Please fill in you personal details</h3>
                    <input type="text" name="fname" placeholder="First Name" />
                    <input type="text" name="lname" placeholder="Last Name" />
                    <input type="text" name="phone" placeholder="Phone" />
                    <textarea name="address" placeholder="Address"></textarea>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                     <input type="button" name="next" class="next action-button" value="Next" />
                </fieldset>
                <fieldset>
                    <h2 class="fs-title">Upload your Image</h2>
                    <h3 class="fs-subtitle">Please upload your image</h3>
                    <img src="assets/image/default-user-image.png" style="max-width: 150px; max-height: 160px;"><br><br>
                    <button class="btn btn-primary" style="width: 150px;">Upload</button><br><br><br>
                    <input type="button" name="previous" class="previous action-button" value="Previous" />
                    <input type="button" name="submit" class="submit action-button" value="Submit" />
                </fieldset>
            </form>
            <div class="clear"></div>
        </div>
      </div>
</section>
<?php echo $_js_files; ?>
<script type="text/javascript">
    (function(){

        $('#frm_account').validate({
            rules: {
                email: {
                    required:true,
                    email:true
                },
                pass: {
                    required:true,
                    minlength:8
                },
                cpass: {
                    required: true,
                    equalTo: '#pass'    
                }
            },
            messages : {
                email: {
                    required: 'Please Enter Email.',
                    email: 'Please enter a valid email.'
                }
            }
        });
    })();
</script>
</body>
</html>
