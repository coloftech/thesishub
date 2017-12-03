<?php
defined('BASEPATH') or exit('NO direct access allowed!');
?>
<div class="container content">
<?php if($login == true){?>
    <div class="row ">
        <div class="login col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">LOGIN</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                    <?php
                    if(!empty($error)){
                echo '<center><p class="signuperror">'.$error.'</p></center>';

                    }

                     ?>

                <form  id="formsigin" class="form-signin" method="post" action="login">
                <input type="text" class="form-control" placeholder="Email" required autofocus name="email">
                <input type="password" class="form-control" placeholder="Password" required name="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">
                    Sign in</button>
                <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="<?=site_url('signup');?>" class="text-center new-account">Create an account </a>
        </div>
    </div>
<?php }else{ ?>
    <div class="row ">
        <div class="login col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">SIGN UP</h1>
            <div class="account-wall">
                <center><p class="signuperror"></p></center>
                <form id="formsignup" class="form-signin" method="post" action="#">

                <input type="text" class="form-control" placeholder="Firstname" name="firstname" id="firstname" required autofocus >
                <input type="text" class="form-control" placeholder="Lastname" name="lastname" id="lastname" pattern=".{2,}" title="8 characters minimum" required >

                <input type="text" class="form-control" placeholder="Email@mail.com" name="email" id="email" required autofocus >
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" pattern=".{8,}" title="8 characters minimum" required >
                <input type="password" class="form-control" placeholder="Retype Password" required name="confirmPassword" id="confirmPassword" pattern=".{8,}" title="8 characters minimum">
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" >
                    Register</button>
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                </form>
            </div>
            <a href="<?=site_url('login');?>" class="text-center new-account">Go to login </a>
        </div>
    </div>
</div>
<?php }?>

<script type="text/javascript">

</script>