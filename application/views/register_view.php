<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/pages/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2017 02:19:36 GMT -->
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/HLLogo.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Registration - HisLife City Church</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <?php echo $_css_files; ?>

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
                   <a href="Login">
                        Looking for Login?
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper wrapper-full-page">
    <div class="full-page register-page" data-color="orange" data-image="assets/img/full-screen-image-2.jpg">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="header-text">
                            <h2>His Life City Church Management System</h2>
                            <hr />
                        </div>
                    </div>
                    <div class="col-md-4 col-md-offset-2">
                        <!-- <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Free Account</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            </div>
                        </div> -->

                        <!-- <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="fa fa-line-chart"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Performance</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.
                            </div>
                        </div> -->

                        <!-- <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Support</h4>
                                Here you can write a feature description for your dashboard, let the users know what is the value that you give them.

                            </div>
                        </div> -->

                    </div>
                    <div class="col-md-4 col-md-offset-s1">
                        <form method="#" action="#">
                            <div class="card card-plain">
                                <div class="content">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your First Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Last Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Company" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Enter email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password Confirmation" class="form-control">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-neutral btn-wd">Create Free Account</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    	<footer class="footer footer-transparent">
            <div class="container">
                <p class="copyright text-center">
                    &copy; 2016 <a href="http://www.creative-tim.com/">Creative Tim</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>

</div>



<?php echo $_switcher; ?>

</body>
    
    <?php echo $_js_files; ?>

    <script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();

            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 1000)
        });
    </script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46172202-1', 'auto');
      ga('send', 'pageview');

    </script>


<!-- Mirrored from demos.creative-tim.com/light-bootstrap-dashboard-pro/examples/pages/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 May 2017 02:21:01 GMT -->
</html>
