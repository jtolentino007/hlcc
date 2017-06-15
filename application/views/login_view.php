<!DOCTYPE html>  
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Login - HisLife City Church</title>
<?php echo $_css_files; ?>
<style>
  .new-login-register .lg-info-panel .lg-content {
    margin-top: 30%;
  }

  .new-login-register .lg-info-panel .inner-panel {
    background: rgba(0, 0, 0, 0.8);
  }

  .new-login-register .lg-info-panel {
    background: url('assets/plugins/images/test.jpg') no-repeat center center / cover!important;
  }
</style>
</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="new-login-register">
  <div class="lg-info-panel">
    <div class="inner-panel">
        <a href="javascript:void(0)" class="p-20 di" style="color: white;"><img style="height: 40px; width: 40px;" src="assets/plugins/images/HL.png">  HisLife City Church</a>
        <div class="lg-content">
            <h1 style="color: white;">HISLIFE CITY CHURCH</h1>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="Registration" class="btn btn-rounded btn-warning p-l-20 p-r-20"> Register now</a>
        </div>
    </div>
  </div>
  <div class="new-login-box">
    <div class="white-box">
        <h3 class="box-title m-b-0">Sign In</h3>
        <small>Please enter your username & password below</small>
      <form class="form-horizontal new-lg-form" id="loginform">
        <div class="form-group  m-t-20">
          <div class="col-xs-12">
            <label>Username</label>
            <input class="form-control" type="text" name="user_name" required="" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <label>Password</label>
            <input class="form-control" type="password" name="user_pword" required="" placeholder="Password">
          </div>
        </div>
        <div class="form-group text-center m-t-20">
          <div class="col-xs-12">
            <button id="btn_login" class="btn btn-info btn-lg btn-block btn-rounded text-uppercase waves-effect waves-light" type="button">Log In</button>
          </div>
        </div>
      </form>
    </div>
  </div>            
</section>
<?php echo $_js_files; ?>
<script>
  (function(){
    var bindEventHandlers=(function(){
    $('#btn_login').click(function(){
            validateUser().done(function(response){
                showNotification(response);
                if(response.stat=="success"){
                    setTimeout(function(){
                        window.location.href = "Dashboard";
                    },600);
                }
            })
        });

        $('input').keypress(function(evt){
            if(evt.keyCode==13){ $('#btn_login').click(); }
        });
    })();

    var validateUser=function(){
        var _data={uname : $('input[name="user_name"]').val() , pword : $('input[name="user_pword"]').val()};
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Login/transaction/validate",
            "data" : _data
        });
    };   

    var showNotification=function(obj){
        PNotify.removeAll(); //remove all notifications
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    };

  })();
</script>
</body>
</html>
