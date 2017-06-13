<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/HLLogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login - His Life City Church</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <?php echo $_css_files; ?>  

    <link rel="stylesheet" href="assets/plugins/spinner/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-blessed3ef7a.css">

</head>
<body>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">    
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="Registration">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="red" data-image="assets/img/HLLogo.png">   
        
    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">                   
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <div class="card">
                                <div class="header text-center">Login</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" placeholder="Enter username" name="user_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" placeholder="Password" name="user_pword" class="form-control">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button id="btn_login" class="btn btn-fill btn-primary btn-wd btn-block">Login</button>
                                    <button type="submit" class="btn btn-fill btn-warning btn-wd btn-block">Register</button>
                                </div>
                            </div>
                        </form> 
                    </div> 
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <p class="copyright pull-right" style="margin-top: 5px; padding-right: 10px; color: #000;">
        &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Comanda & Tolentino</a>
    </p>
</div>                

<?php echo $_switcher; ?>

</body>

    <?php echo $_js_files; ?>

    <script src="assets/plugins/spinner/dist/spin.min.js"></script>
    <script src="assets/plugins/spinner/dist/ladda.min.js"></script>
	    
    <script type="text/javascript">
        $(document).ready(function(){
            lbd.checkFullPageBackgroundImage();
            
            $('.card').removeClass('card-hidden');

            $('#btn_login').click(function(){
                validateUser().done(function(response){
                    showNotification(response);
                });
            });                                                                                                 

            var validateUser=(function(){
                var _data={uname : $('input[name="user_name"]').val() , pword : $('input[name="user_pword"]').val()};

                return $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Login/transaction/validate",
                    "data" : _data
                });
            });

            var showNotification=function(obj){
                PNotify.removeAll(); //remove all notifications
                new PNotify({
                    title:  obj.title,
                    text:  obj.msg,
                    type:  obj.stat
                });
            };
        });
    </script>
</html>